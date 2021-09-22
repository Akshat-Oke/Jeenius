import ParseTreeGenerator from "./app.js";
import { Binary, Literal, Unary } from "./Expr.js";
import { Token } from "./Scanner.js";
import TokenTypes, { TokenRegex } from "./TokenType.js";
// The grammer for our expression:
// expression -> term ("->" term)*;
// term -> factor ("+" factor)*;
// factor -> unary ("*" unary)*;
// unary -> ("!" unary )| literal;
// literal -> identifier; (means sequence of characters)
export class Parser {
  /**
   *
   * @param {Array<Token>} tokens
   */
  constructor(tokens) {
    this.tokens = tokens;
    this.current = 0;
  }
  parse() {
    try {
      return this.expression();
    } catch (e) {
      console.log(e);
      return null;
    }
  }
  expression() {
    let expr = this.term();
    while (this._match(TokenRegex.IMPLIES)) {
      const operator = this._previous();
      const right = this.term();
      expr = new Binary(expr, operator, right);
    }
    return expr;
  }
  term() {
    // console.log("peek term", this._peek());

    let expr = this.factor();
    while (this._match(TokenRegex.OR)) {
      const operator = this._previous();
      const right = this.factor();
      expr = new Binary(expr, operator, right);
    }
    return expr;
  }
  /**
   * factor -> unary ("*" unary)*;
   */
  factor() {
    let expr = this.unary();
    while (this._match(TokenRegex.AND)) {
      const operator = this._previous();
      const right = this.unary();
      expr = new Binary(expr, operator, right);
    }
    if (this._match(TokenRegex.NOT)) {
      throw this.error(
        this._previous(),
        "Expected a binary operator; got negation instead"
      );
    }
    return expr;
  }
  unary() {
    if (this._matchTokenType(TokenTypes.NOT)) {
      const operator = this._previous();
      const right = this.unary();
      return new Unary(operator, right);
    }
    return this.primary();
  }
  primary() {
    if (this._matchTokenType(TokenTypes.IDENTIFIER)) {
      return new Literal(this._previous().lexeme);
    }
    // if LEFT_PAREN
    if (this._match(TokenRegex.LEFT_PAREN)) {
      const expr = this.expression();
      this.consume(TokenRegex.RIGHT_PAREN, 'Expected ")" after expression');
      return expr;
    }
    throw this.error(this._peek(), "Expected an expression");
  }
  consume(regex, message) {
    if (this._check(regex)) return this._advance();
    throw this.error(this._peek(), message);
  }
  error(token, message) {
    ParseTreeGenerator.tokenError(token, message);
    return new Error(message);
  }
  _matchTokenType(type) {
    // console.log("peek match", this._peek());
    if (this._isAtEnd()) return false;
    if (this._peek().type === type) {
      this._advance();
      return true;
    }
    return false;
  }

  _match(regex) {
    if (this._check(regex)) {
      this._advance();
      return true;
    }
    return false;
  }
  _check(regex) {
    if (this._isAtEnd()) return false;
    return regex.test(this._peek().lexeme);
  }
  _advance() {
    if (!this._isAtEnd()) this.current++;
    return this._previous();
  }
  _isAtEnd = () => this._peek().type == TokenTypes.EOF;

  _peek() {
    return this.tokens[this.current];
  }
  _previous() {
    return this.tokens[this.current - 1];
  }
}
