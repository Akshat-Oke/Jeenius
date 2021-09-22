import TT, { TokenRegex } from "./TokenType.js";
import ParseTreeGenerator from "./app.js";
/**
 *
 */
export class Token {
  constructor(type, lexeme, literal, position) {
    this.type = type;
    this.lexeme = lexeme;
    this.literal = literal;
    this.position = position;
  }
  toString() {
    return `${this.type} ${this.lexeme} ${this.literal} at ${this.position}\n`;
  }
}
/**
 * Scan the expression and return the tokens
 */
export class Scanner {
  /**
   * @param {String} source Source expresssion
   */
  constructor(source) {
    this.source = source;
    this.sourceLength = source.length;
    this.tokens = [];
    /**
     * Start of a token
     */
    this.start = 0;
    /**
     * Current character index
     */
    this.current = 0;
    this.position = 1;
  }
  scanTokens() {
    while (!this._isAtEnd()) {
      // console.log("w", this.tokens);
      //starting new lexeme
      this.start = this.current;
      this.position = this.current;
      this._scanToken();
    }
    this.tokens.push(new Token(TT.EOF, "", null, this.current));
    return this.tokens;
  }
  _scanToken() {
    const c = this._advance();
    // let added = false;
    switch (c) {
      case "(":
        this._addToken(TT.LEFT_PAREN);
        // added = true;
        break;
      case ")":
        this._addToken(TT.RIGHT_PAREN);
        // added = true;
        break;
      case " ":
      case "\t":
      case "\r":
      case "\n":
        this.position++;
        break;

      default:
        if (TokenRegex.AND.test(c)) {
          this._addToken(TT.AND);
        } else if (TokenRegex.OR.test(c)) {
          this._addToken(TT.OR);
        } else if (TokenRegex.NOT.test(c)) {
          this._addToken(TT.NOT);
        } else if (TokenRegex.IMPLIES.test(c)) {
          this._addToken(TT.IMPLIES);
        } else if (/[a-z]/i.test(c)) {
          this._identifier();
        } else
          ParseTreeGenerator.error(this.current, "Unexpected character " + c);
        break;
    }
    // // the rest token types
    // if (!added)
    //   for (const type in TT) {
    //     if (TT[type])
    //       if (TT[type].test(c)) {
    //         console.log(TT[type]);
    //         this._addToken(TT[type]);
    //         added = true;
    //         break;
    //       }
    //   }
    // we have covered all possible legal tokens
    // if (!added) {
    //   ParseTreeGenerator.error(this.current, "Unexpected character");
    // }
  }

  _identifier() {
    while (/[a-z0-9]/i.test(this._peek())) {
      this._advance();
    }
    // console.log(TT.IDENTIFIER);
    this._addToken(TT.IDENTIFIER);
  }
  _peek() {
    if (this._isAtEnd()) return "\0";
    return this.source.charAt(this.current);
  }
  _advance() {
    return this.source.charAt(this.current++);
  }
  /**
   * adds token to tokens array
   * @param {*} type Token type
   * @param {Object} literal
   */
  _addToken(type, literal = null) {
    // console.log("add", type);
    const text = this.source.substring(this.start, this.current);
    this.tokens.push(new Token(type, text, literal, this.start));
  }
  _isAtEnd = () => this.current >= this.sourceLength;
}
