import { Binary, Expr, Grouping, Literal, Unary, Visitor } from "./Expr.js";
import { Token } from "./Scanner.js";
export const OrderType = { IN: "IN", PRE: "PRE", POST: "POST" };
export class AstPrinter extends Visitor {
  /**
   *
   * @param {String} orderType
   */
  constructor(orderType = OrderType.PRE) {
    super();
    this.orderType = orderType;
  }
  /**
   *
   * @param {Expr} expr
   */
  print(expr) {
    return expr.accept(this);
  }
  /**
   *  @param {Binary} expr
   */
  visitBinaryExpression(expr) {
    return this._parenthesize(expr.operator, expr.left, expr.right);
  }
  /**
   *  @param {Unary} expr
   */
  visitUnaryExpression(expr) {
    return this._parenthesize(expr.operator, expr.right);
  }
  /**
   *  @param {Grouping} expr
   */
  visitGroupingExpression(expr) {
    return this._parenthesize("GROUP", expr.expression);
  }
  /**
   *  @param {Literal} expr
   */
  visitLiteralExpression(expr) {
    console.log(expr);
    return expr.value.toString();
  }
  /**
   *
   * @param {Token} operatorName The operator name or symbol (AND, OR, NOT)
   * @param  {...Expr} operands 2+3 has operands as 2 and 3
   */
  _parenthesize(operatorName, ...operands) {
    let str = "(";
    console.log("operands", operands);
    if (this.orderType == OrderType.PRE) str += operatorName.lexeme;
    operands.forEach((operand) => {
      str += " " + operand.accept(this);
    });
    if (this.orderType == OrderType.POST) str += operatorName.lexeme;
    str += ")";
    return str;
  }
}
