const rules = [
  // box rules
  { label: "ORe", value: "∨e", requires: [kTypes.BOX, kTypes.OR] },
  { label: "imi", value: "→i", requires: [kTypes.BOX] },
  { label: "negi", value: "¬i", requires: [kTypes.BOX, kTypes.BOTTOM] },
  {
    label: "PBC",
    value: "PBC",
    requires: [kTypes.BOX, kTypes.NOT, kTypes.BOTTOM],
  },
  //others
  { label: "LEM", value: "LEM", requires: [kTypes.OR, kTypes.NOT] },
  { label: "andi", value: "∧i", requires: [kTypes.AND] },
  { label: "ande1", value: "∧e1" },
  { label: "ande2", value: "∧e2" },
  { label: "ori1", value: "∨i1", requires: [kTypes.OR] },
  { label: "ori2", value: "∨i2", requires: [kTypes.OR] },
  { label: "ime", value: "→e" },
  { label: "nege", value: "¬e" },
  { label: "negne", value: "¬¬e", requires: [kTypes.NOT] },
  { label: "negni", value: "¬¬i" },
  { label: "#e", value: "⊥e" },
  { label: "MT", value: "MT" },
];

var statements = [];

function deleteStatement(t) {
  t = t.format();
  statements = statements.filter((e) => e != t);
}
function addStatement(element) {
  const text = element.value;
  const index = [
    ...document.getElementById("proof-list").getElementsByTagName("input"),
  ].indexOf(element);
  statements[index] = text.format();
}
function getStatementTypes(text) {
  const types = [];
  symbols.forEach((symbol) => {
    if (symbol.r.test(text)) {
      types.push(symbol.type);
    }
  });
  return types;
}

function numberOfCommonElements(a, b) {
  var t;
  if (b.length > a.length) (t = b), (b = a), (a = t); //loop over shorter
  return a
    .filter((e) => b.indexOf(e) > 1)
    .filter((e, i, c) => c.indexOf(e) === i).length;
}
/**
 * Get the primary suggestion to be auto filled. Can be empty.
 * @param {HTMLElement} element Either of the inputs on which keyboard action was invoked
 * @param {Boolean} isAfterBox Set true if `Esc` was pressed
 * @returns An array with the formula and justification to be auto filled
 */
function primarySuggestion(element, isAfterBox = false) {
  const li = element.parentElement;
  const text = li.getElementsByTagName("input")[0].value;
  const types = getStatementTypes(text);
  if (isAfterBox) {
    const box = li.parentElement;
    console.log(box.firstElementChild);
    const stmt1 = box.firstElementChild.firstElementChild.value;
    const stmt2 = box.lastElementChild.firstElementChild.value;
    if (stmt1 == "" || stmt2 == "") return ["", ""];
    const t1 = getStatementTypes(stmt1);
    const t2 = getStatementTypes(stmt2);
    const boxCoordinates = getBoxCoordinates(box);
    if (t2.includes(kTypes.BOTTOM)) {
      if (t1.includes(kTypes.NOT)) {
        return [
          stmt1.replace(/!|~|∼|\-|\−|NOT|¬/i, ""),
          "PBC" + boxCoordinates,
        ];
      }
      return ["~" + stmt1, "¬i" + boxCoordinates];
    }
    console.log(box.previousElementSibling.tagName);
    if (box.previousElementSibling.tagName == "DIV")
      return [
        stmt2,
        "∨e" +
          getBoxCoordinates(box.previousElementSibling) +
          "," +
          boxCoordinates,
      ];
    return [stmt1 + " → " + stmt2, "→i" + boxCoordinates];
  }
  return handleNotABoxSuggestion(text, types);
}
/**
 *
 * @param {String} text
 * @param {Array} types
 */
function handleNotABoxSuggestion(text, types) {
  if (types.includes(kTypes.AND)) {
    const tokens = text.split(/\^|&|\.|\*|AND|∧/i);
    return { statements: tokens, justifications: ["∧e1", "∧e2"] };
  }
}

function getBoxCoordinates(box) {
  const boxStarting =
    [
      ...document.getElementById("proof-list").getElementsByTagName("li"),
    ].indexOf(box.firstElementChild) + 1;
  return ` ${boxStarting}-${boxStarting + box.children.length - 1}`;
}
// document
//   .querySelectorAll('input[placeholder="Justification"')
//   .forEach((e) => e.addEventListener("focusin", dropdownSuggestions));

function dropdownSuggestions(input) {
  // const stmt = e.target.previousElementSibling.value;
  // const types = getStatementTypes(stmt);
  // var input = e.target;
  // const types = getStatementTypes(input.value);
  const localRules =
    input.parentElement.previousElementSibling.tagName == "DIV"
      ? rules
      : rules.slice(4);
  // types.push(kTypes.BOX);
  // const localRules = rules.filter(
  //   (rule) =>
  //     rule.requires == null ||
  //     numberOfCommonElements(rule.requires ?? [], types) > 0
  // );
  autocomplete({
    input: input,
    fetch: function (text, update) {
      text = text.toLowerCase();
      // you can also use AJAX requests instead of preloaded data
      const suggestions = localRules.filter(
        (n) =>
          n.label.toLowerCase().startsWith(text) ||
          n.value.toLowerCase().startsWith(text)
      );
      update(suggestions.reverse());
    },
    onSelect: function (item) {
      input.value = item.value;
    },
    showOnFocus: true,
  });
}
