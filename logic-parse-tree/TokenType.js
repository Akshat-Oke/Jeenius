const TokenTypes = {
  AND: "AND", ///\^|&|\.|\*|∧/gi,
  OR: "OR", ///V|v|∨/gi,
  NOT: "NOT", ///!|~|∼|\-|\−|¬/gi,
  IMPLIES: "IMPLIES", ///\->|>|→/gi,
  EOF: "EOF",
  LEFT_PAREN: "LEFT_PAREN", ///\(/i,
  RIGHT_PAREN: "RIGHT_PAREN", ///\)/i,
  IDENTIFIER: "IDENTIFIER",
};
export const TokenRegex = {
  AND: /\^|&|\.|\*|∧/,
  OR: /V|v|∨|\+/,
  NOT: /!|~|∼|\-|\−|¬/,
  IMPLIES: /\->|>|→/,
  LEFT_PAREN: /\(/,
  RIGHT_PAREN: /\)/,
};
export default TokenTypes;
