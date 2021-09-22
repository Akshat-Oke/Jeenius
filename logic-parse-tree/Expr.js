/**
 * All expressions will implement `accept` method which
 * is overridden to call the correct `visit` method on the visitor
 * depending on the type of expression
 */
export class Expr {
  accept(visitor) {
    return "expression here";
  }
}
export class Visitor {
  visitBinaryExpression(expr) {}
  visitUnaryExpression(expr) {}
  visitLiteralExpression(expr) {}
  visitGroupingExpression(expr) {}
}
export class Binary extends Expr {
  constructor(left, operator, right) {
    super();
    this.left = left;
    this.operator = operator;
    this.right = right;
  }
  accept(visitor) {
    return visitor.visitBinaryExpression(this);
  }
}
export class Unary extends Expr {
  constructor(operator, right) {
    super();
    this.right = right;
    this.operator = operator;
  }
  accept(visitor) {
    return visitor.visitUnaryExpression(this);
  }
}
export class Grouping extends Expr {
  constructor(expression) {
    super();
    this.expression = expression;
  }
  accept(visitor) {
    return visitor.visitGroupingExpression(this);
  }
}
export class Literal extends Expr {
  constructor(value) {
    super();
    this.value = value;
  }
  accept(visitor) {
    return visitor.visitLiteralExpression(this);
  }
}
