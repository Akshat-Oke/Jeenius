import { AstPrinter, OrderType } from "./AstPrinter.js";
import { Binary, Literal } from "./Expr.js";
import { Parser } from "./Parser.js";
import ParseTreePainter from "./ParseTreePainter.js";
import { Scanner } from "./Scanner.js";
import TokenTypes from "./TokenType.js";
console.log("app");
const printer = new AstPrinter();
console.log(
  printer.print(
    new Binary(
      new Literal("a"),
      "+",
      new Binary(new Literal("b"), "-", new Literal("c"))
    )
  )
);

document
  .getElementById("generate")
  .addEventListener("click", () => ParseTreeGenerator.submit());
document.getElementById("form").addEventListener("submit", (e) => {
  e.preventDefault();
  ParseTreeGenerator.submit();
});
export default class ParseTreeGenerator {
  static hadError = false;
  static submit() {
    // @ts-ignore
    const exp = document.getElementById("expression").value;
    this.run(exp);
  }
  /**
   * Scan and parse the expression, and returns the parse tree
   * @param {String} source expression source
   */
  static run(source) {
    this.hadError = false;
    document.getElementById("error").innerHTML = "";
    console.log("running", source);
    const scanner = new Scanner(source);
    const tokens = scanner.scanTokens();
    // let str = "Tokens: ";
    // tokens.forEach((token) => {
    //   str += token.toString();
    // });
    console.log("tokens: ", tokens);
    const parser = new Parser(tokens);
    const expression = parser.parse();
    console.log("expression", expression);
    if (!this.hadError) {
      const astPrinter = new AstPrinter(
        document.getElementById("use-post").checked
          ? OrderType.POST
          : OrderType.PRE
      );
      document.getElementById("result").innerText =
        astPrinter.print(expression);
      const treePainter = new ParseTreePainter();
      treePainter.paintInDOM(expression);
    }
  }
  static error(position, message) {
    this.report(position, "", message);
  }
  static tokenError(token, message) {
    if (token.type == TokenTypes.EOF) {
      this.report(token.position, " at end", message);
    } else {
      this.report(token.position, 'at "' + token.lexeme + '"', message);
    }
  }
  static report(position, where, message) {
    // let errors = "";
    document.getElementById(
      "error"
    ).innerText += `[Character ${position}] Error ${where}: ${message}\n`;
    // document.getElementById("error").innerText = errors;
    this.hadError = true;
  }
}
