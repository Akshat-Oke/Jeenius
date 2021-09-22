const rules = [
  // box rules
  { label: "ORe", value: "∨e", requires: [kTypes.BOX, kTypes.OR] },
  { label: "imi", value: "→i", requires: [kTypes.BOX] },
  { label: "noti", value: "¬i", requires: [kTypes.BOX, kTypes.BOTTOM] },
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
  { label: "note", value: "¬e" },
  { label: "notnote", value: "¬¬e", requires: [kTypes.NOT] },
  { label: "notnoti", value: "¬¬i" },
  { label: "#bottomcontrae", value: "⊥e" },
  { label: "MT", value: "MT" },
];

var statements = [];

function deleteStatement(t) {
  t = t.format();
  statements = statements.filter((e) => e != t);
}
function addStatement(element) {
  if (element.getAttribute("placeholder") == "Justification") return;
  const text = element.value.replace(/\(|\)| /gi, "");
  const index = [
    ...document
      .getElementById("proof-list")
      .querySelectorAll("input:first-child"),
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
    //check if there is another box immediately before this
    // which is the case for OR elimination
    if (box.previousElementSibling.tagName == "DIV")
      return [
        stmt2,
        "∨e " +
          ([...document.querySelectorAll("#proof-list li")].indexOf(
            box.previousElementSibling.previousElementSibling
          ) +
            1) +
          "," +
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

// auto fill justifications
document.getElementById("proof-list").addEventListener("focusin", (e) => {
  //get the previous formula for this justification
  try {
    const stmtElement = e.target.previousElementSibling;
    
    const current = e.target.value;
    if (stmtElement.getAttribute("data-set") == "true" || current == "Assumption"){
        insertNewLine(e);
        return;
    }
    //get the previous statement
    const stmt = stmtElement.value;
    console.log(stmt);
    try {
      const above =
        e.target.parentNode.previousElementSibling.firstElementChild.value;
      if (/XX|#|⊥|BOTTOM/i.test(above)) {
        e.target.value = "⊥e " + findLineNumber(stmtElement);
        return;
      }
    } catch (error) {}
    if (/((\w+?) *∨ *¬ *\1)|(¬(\w+?) *∨ *\1)/gi.test(stmt)) {
      e.target.value = "LEM";
    } else if (/¬ ?¬.+/gi.test(stmt)) {
      e.target.value = "¬¬i " + findIndices(stmt, "DOUBLE-NEG", e.target);
    } else if (/.+(vv|OR|∨).+/gi.test(stmt)) {
      console.log("orr");
      e.target.value = "∨i " + findIndices(stmt, "OR", e.target);
    } else if (/.+(\^|&|\.|\*|AND|∧).+/gi.test(stmt)) {
      e.target.value = "∧i " + findIndices(stmt, "AND", e.target);
    }
    // else if (/.+→.+/i.test(stmt)) {
    //   e.target.value = "→i " + findIndices(stmt, "IMPLIES", e.target);
    // }
    else if (/XX|#|⊥/gi.test(stmt)) {
      console.log("Asdasd");
      e.target.value = "¬e " + findIndices(stmt, "#", e.target);
    } else if (/ *¬.+/gi.test(stmt)) {
      e.target.value = "¬i";
    } else {
      //default
      // can be MT or implies elimination or AND elimination or OR elimination
      // keeping things simple here, just consider AND elimination or implies elimination
      let ruleToPut = "∧e ";
      if (statements.findIndex((stmt) => /.+→.+/i.test(stmt)) >= 0)
        ruleToPut = "→e ";
      e.target.value = ruleToPut + findIndices(stmt, "DEFAULT", e.target);
    }
    // e.target.attributes.setNamedItem("data-set", "true");
    stmtElement.setAttribute("data-set", "true");
  } catch (e) {
    console.log(e);
  }
});
document
  .querySelectorAll('input[placeholder="Justification"')
  .forEach((e) => dropdownSuggestions(e));
function dropdownSuggestions(input) {
  // const stmt = e.target.previousElementSibling.value;
  // const types = getStatementTypes(stmt);

  // var input = e.target;
  // const types = getStatementTypes(input.value);
  let localRules = rules;
  try {
    localRules =
      input.parentElement.previousElementSibling.tagName == "DIV"
        ? rules
        : rules.slice(4);
  } catch (e) {}

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
          n.label.toLowerCase().includes(text) ||
          n.value.toLowerCase().includes(text) ||
          text.length <= 1
      );
      update(suggestions.reverse());
    },
    onSelect: function (item) {
      input.value = item.value;
    },
    // showOnFocus: true,
    minLength: 1,
    // disableAutoSelect: true,
  });
}

///////Utility
function findIndices(stmt, rule, currentElement) {
  let foundIndices = [];
  let includes = false; //to search for indices later
  // set corresponding indices to true
  const thisValue = stmt.replace(/\(|\)| /gi, "");
  let valuesToFind = [thisValue.replace(/!|~|∼|\-|\−|NOT|¬/i, "")];
  // if (rule == "AND") {
  //   valuesToFind = thisValue.split(/\^|&|\.|\*|AND|∧/gi);
  //   if (valuesToFind.length > 2) {
  //     return [];
  //   }
  // } else
  if (rule == "AND") {
    valuesToFind = thisValue.split(/\^|&|\.|\*|AND|∧/gi);
    if (valuesToFind.length > 2) {
      valuesToFind = reduceToTwo(valuesToFind);
    }
  } else if (rule == "OR") {
    valuesToFind = thisValue.split(/vv|OR|∨/gi);
    if (valuesToFind.length > 2) {
      valuesToFind = reduceToTwo(valuesToFind);
    }
  } else if (rule == "DOUBLE-NEG") {
    valuesToFind = [thisValue.replace(/(!|~|∼|\-|\−|NOT|¬){2}/i, "")];
  } else if (rule == "#") {
    const inputs = [
      ...document
        .getElementById("proof-list")
        .querySelectorAll("input:first-child"),
    ];
    const index = inputs.indexOf(currentElement.previousElementSibling);
    // example: p and ~p, then find:
    valuesToFind = [
      inputs[index - 1].value.replace("¬", ""), // p
      `¬${inputs[index - 1].value}`, //~p
    ];
  }
  //else if (rule == "IMPLIES") {
  // valuesToFind = thisValue.split(/>|IMPLIES|→/gi);
  // if (valuesToFind.length > 2) {
  //   valuesToFind = reduceToTwo(valuesToFind);
  // }
  //}
  else {
    includes = true; //handle default
  }
  console.log(valuesToFind);
  // valueToFind = valueToFind.replace(/\(|\)/ig, "");
  // statements.forEach((stmt, index) => {
  //   if(stmt.replace(/\(|\)/ig, "") == valueToFind) foundIndices.push(index+1);
  // });

  foundIndices = getCommonElementIndicesInArray1(
    statements,
    valuesToFind,
    includes
  );
  // foundIndices.push(findLineNumber(currentElement.previousElementSibling));
  return foundIndices.join(", ");
}
function reduceToTwo(valuesToFind) {
  let left = "",
    right = "",
    len = valuesToFind.length;
  valuesToFind.forEach((value, i) => {
    if (i < len / 2) left += value;
    // if i == len/2, it is the IMPLIES operator, so do not add it anywhere
    else if (i > len / 2) right += value;
  });
  return [left, right];
}
function getCommonElementIndicesInArray1(a, b, includes = false) {
  console.log("b", b);
  var t;
  if (b.length > a.length) (t = b), (b = a), (a = t); //loop over shorter
  const arr = a.filter((stmt) => {
    // console.log(stmt);
    return b.findIndex((bStmt) => bStmt.includes(stmt)) >= 0;
  });
  console.log("arr", arr);
  // .filter((e, i, c) => c.indexOf(e) === i);
  const indices = [];
  arr.forEach((element) => {
    if (includes)
      indices.push(
        a.findIndex((ele) => {
          console.log("ele", ele);
          return ele.includes(element);
        }) + 1
      );
    else indices.push(a.indexOf(element) + 1);
  });
  return indices;
}
function findLineNumber(element) {
  return [
    ...document
      .getElementById("proof-list")
      .querySelectorAll("input:first-child"),
  ].indexOf(element);
}
