import { Binary, Expr, Grouping, Literal, Unary, Visitor } from "./Expr.js";
export default class ParseTreePainter extends Visitor {
  /**
   * @param {Expr} expr Expression to convert to a tree
   */
  paintInDOM(expr) {
    let str = expr.accept(this);
    document.getElementById("parse-tree").innerHTML = "<ul>" + str + "</ul>";
  }
  /**
   * @param {Binary} expr
   */
  visitBinaryExpression(expr) {
    // let str = "<li>" + expr.operator.lexeme;
    return `<li>
    <div>${expr.operator.lexeme}</div>
    <ul>${expr.left.accept(this)}${expr.right.accept(this)}</ul>
    </li>`;
  }
  visitGroupingExpression(expr) {
    return this.visitLiteralExpression(expr);
  }
  /**
   * @param {Literal} expr
   */
  visitLiteralExpression(expr) {
    return `<li><div>${expr.value}</div></li>`;
  }
  /**
   * @param {Unary} expr
   */
  visitUnaryExpression(expr) {
    return `<li>
    <div>${expr.operator.lexeme}</div>
    <ul>${expr.right.accept(this)}</ul>
    </li>`;
  }
}
