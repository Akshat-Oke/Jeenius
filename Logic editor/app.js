const MODE = { NORMAL: "NORMAL", PREDICATE: "PREDICATE" };
var mode = MODE.NORMAL;
document.getElementById("mode").addEventListener("change", (e) => {
  window.mode = e.currentTarget.checked == true ? MODE.PREDICATE : MODE.NORMAL;
});
//// Part 1: Add new inputs on Enter

//.appendAfter(element) Prototype
// to add new input on pressing enter
// @ts-ignore
(Element.prototype.appendAfter = function (element) {
  element.parentNode.insertBefore(this, element.nextSibling);
}),
  false;

function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.parentNode.insertBefore(
    newNode,
    referenceNode.nextSibling
  );
}
document.getElementById("clear-all").addEventListener("click", (e) => {
  UIkit.modal.confirm("Do you want to clear all?").then(
    function () {
      statements = [];
      document.getElementById("proof-list").innerHTML =
        "<li>" +
        document.getElementById("proof-list").firstElementChild.innerHTML +
        "</li>";
    },
    function () {
      console.log("Rejected.");
    }
  );
});

const newInputRow = `
  
    <input class="uk-input" type="text" placeholder="Formula">
    <input class="uk-input" type="text" placeholder="Justification">
  `;
function getNewInputRow() {
  var el = document.createElement("li");
  el.innerHTML = newInputRow;
  return el;
}

// Event delegation to handle all dynamically added inputs
var lastKeysDown = [];

function checkCombination(...keyList) {
  return keyList.every(
    (e) =>
      lastKeysDown.includes(e) ||
      lastKeysDown.includes(e.toLowerCase()) ||
      lastKeysDown.includes(e.toUpperCase())
  );
}
document.getElementById("proof").addEventListener("keydown", (e) => {
  if (!lastKeysDown.includes(e.key)) lastKeysDown.push(e.key);
  // console.log(e.key);
});
document.getElementById("proof").addEventListener("input", (e) => {
  e.target.setAttribute("data-set", "false");
});

document.getElementById("proof").addEventListener("keyup", (e) => {
  // console.log(lastKeysDown);
  e.target.value = e.target.value.format();
  if (lastKeysDown.length > 1) {
    const newBoxCommand = checkCombination("Control", "b");
    if (newBoxCommand || checkCombination("Control", "a")) {
      newBox(e);
    }
    lastKeysDown = [];
    return;
  }
  switch (e.key) {
    case "Escape":
      closeBoxAndInsertLine(e);
      break;
    case "Enter":
      insertNewLine(e);
      break;
    case "Tab":
      handleTabNav(e);
      break;
    case "Delete":
      deleteLine(e);
      break;
    default:
      break;
  }
  // if (e.key == "Escape") {
  //   closeBoxAndInsertLine(e);
  // } else if (e.key == "Enter") {
  //   insertNewLine(e);
  // } else if (e.key == "Tab__") {
  //   const p = e.target.parentNode;
  //   console.log(e.target);
  //   if (e.target == p.lastElementChild) {
  //     const el = getNewInputRow();
  //     // @ts-ignore
  //     e.target.parentNode.parentNode.insertAdjacentElement("beforeend", el);
  //     el.getElementsByTagName("input")[0].focus();
  //   }
  // } else if (e.key == "Delete") {
  //  deleteLine(e);
  // } else
  if (e.key.includes("Arrow")) {
    switchFocus(e.key.replace("Arrow", "").toLowerCase(), e.target);
  }
  lastKeysDown = [];
});

function handleTabNav(e) {
  // console.log(e);
  // const inputs = [...document.querySelectorAll("#proof-list input")];
  // let element = inputs.at(-2);
  // if (element == e.srcElement) {
  //   console.log("Asd");
  //   e.preventDefault();
  //   insertNewLine(e);
  // }
}
function newBox(e) {
  const p = e.target.parentNode;
  addNewBox(p);
  console.log(e.target.parentElement.parentElement);
  if (e.target.value.trim() != "") return;
  if (
    p.parentElement.id == "proof-list" &&
    e.target.parentElement ==
    e.target.parentElement.parentElement.firstElementChild
  ) {
    deleteLine(e, false, true);
    return;
  }
  if (
    e.target.value.trim() == "" &&
    e.target.parentElement !=
    e.target.parentElement.parentElement.firstElementChild
  )
    deleteLine(e, false);
}
function deleteLine(e, moveUp = true, forcedDelete = false) {
  const text = e.target.value;
  if (moveUp) switchFocus("up", e.target, true);
  // Handle deleting first statement of a subproof
  const li = e.target.parentNode;
  const parentDiv = li.parentNode;
  // the first input row cannot be deleted, so check for that
  console.log(parentDiv);
  if (
    li == parentDiv.firstElementChild &&
    parentDiv.id == "proof-list" &&
    !forcedDelete
  )
    return;
  // if it is a sub proof with just one statement, delete the whole
  // subproof div instead
  if (li.parentNode.childElementCount == 1) {
    // if the statement is the original proof div, don't delete
    if (li.parentNode.id == "proof") return;
    li.parentNode.remove();
  } else li.remove();
  // remove from statements array
  deleteStatement(text);
}
function closeBoxAndInsertLine(e) {
  const parentDiv = e.target.parentNode.parentNode;
  if (parentDiv.id == "proof-list") {
    lastKeysDown = [];
    return;
  }
  const suggestion = primarySuggestion(e.target, true);
  try {
    // check if it was on OR elimination box(a box immediately after an OR expression)
    // if (
    //   e.target.parentNode.parentNode.previousElementSibling.firstElementChild.value.includes(
    //     "∨"
    //   )
    // ) {
    //   insertNewLine(e, ["", ""], true);
    //   // if it was, do not auto suggest (because it forms an implication suggestion)
    //   return;
    // }
  } catch (e) { }
  insertNewLine(e, suggestion, true);
}
function insertNewLine(e, suggestion = ["", ""], closeBox = false) {
  // @ts-ignore
  const el = getNewInputRow();
  // @ts-ignore
  if (closeBox)
    e.target.parentNode.parentNode.insertAdjacentElement("afterend", el);
  else e.target.parentNode.insertAdjacentElement("afterend", el);
  el.getElementsByTagName("input")[0].value = suggestion[0];
  el.getElementsByTagName("input")[1].value = suggestion[1];
  el.getElementsByTagName("input")[0].focus();
  if (closeBox) {
    el.getElementsByTagName("input")[0].setAttribute("data-set", "true");
  }
  dropdownSuggestions(el.lastElementChild);
}
function addNewBox(inputParentNode) {
  const el = document.createElement("div");
  el.classList.add("subproof");
  el.style.borderColor = "#000000".replace(/0/g, function () {
    return (~~(Math.random() * 16)).toString(16);
  });
  el.innerHTML = `<li>${newInputRow}</li>`;
  inputParentNode.insertAdjacentElement("afterend", el);
  el.getElementsByTagName("li")[0].getElementsByTagName("input")[0].focus();
  el.getElementsByTagName("li")[0]
    .getElementsByTagName("input")[0]
    .setAttribute("data-set", "true");
  el.getElementsByTagName("li")[0].getElementsByTagName("input")[1].value =
    "Assumption";
}
function switchFocus(direction, element, ignoreElement = false) {
  if (!ignoreElement && element.getAttribute("placeholder") == "Justification")
    return;
  // start with "down"
  let offset = 2;
  switch (direction) {
    case "up":
      offset = -2;
      break;
    case "right":
      offset = 1;
      //TODO
      return;
      break;
    case "left":
      //TODO
      return;
      offset = -1;
    default:
      // is ArrowDown
      break;
  }
  let allInputs = [...document.getElementsByTagName("input")];
  allInputs[allInputs.indexOf(element) + offset]?.focus();
}
//// Part 1 over
//// Part 2: Build the proof array
var proofArray = [];

document.getElementById("export").addEventListener("click", getStatementList);
var maxWidth = 0,
  maxJWidth = 0,
  numberOfSubProofs = 0;
function getMaxWidth() {
  maxWidth = 0;
  document.querySelectorAll('input[placeholder="Formula"]').forEach((e) => {
    const w = widthOf(e.value);
    maxWidth = maxWidth < w ? w : maxWidth;
  });
}
function getMaxJustificationWidth() {
  maxJWidth = 0;
  document
    .querySelectorAll('input[placeholder="Justification"]')
    .forEach((e) => {
      const w = widthOf(e.value);
      maxJWidth = maxJWidth < w ? w : maxJWidth;
    });
}
function getSubProofOffset() {
  numberOfSubProofs = document
    .getElementById("proof-list")
    .getElementsByTagName("div").length;
}
function getStatementList() {
  currentLine = 1;
  mostRecentDepth = 0;
  getMaxWidth();
  getMaxJustificationWidth();
  getSubProofOffset();
  const text = handleSubProof(
    document.getElementById("proof-list"),
    1,
    " ",
    ""
  );
  setResult(text);
  // proofArray = [...handleSubProof(
  //   document.getElementById("proof-list"),
  //   1,
  //   " ",
  //   ""
  // )];
}
function setResult(text) {
  document.getElementById("result").value = text;
  document.getElementById("result").rows = currentLine + numberOfSubProofs * 2;
}
// function addSubProof(div){
//   let elements = Array.from(div.children);
//   elements.forEach(e => {

//   proofArray = [...proofArray];
//   })
// }
var currentLine = 1,
  mostRecentDepth = 0;
function handleSubProof(
  div,
  indexOffset = 0,
  boxBorderInit = null,
  initialText = null
) {
  console.log("handling ", div);
  //TODO let boxBorder = boxBorderInit ?? " |".repeat(mostRecentDepth);
  const padA = ".A".repeat(mostRecentDepth);
  const padSeparatorLine = "_".customPadEnd(
    maxWidth + maxJWidth,
    "_",
    mostRecentDepth * 2,
    numberOfSubProofs
  );
  let boxBorder = boxBorderInit ?? " ".repeat(mostRecentDepth);
  initialText =
    initialText ??
    // `${boxBorder}+${"—".customPadEnd(
    //   maxWidth + maxJWidth,
    //   "—",
    //   mostRecentDepth * 2,
    //   numberOfSubProofs
    // )}+${boxBorder}\n`;
    `\\/A${padA}${padSeparatorLine}\n`;
  if (boxBorderInit == null) {
    mostRecentDepth++;
    // const currentDepth = mostRecentDepth; //local var so that it is not overwritten
    //TODO boxBorder += " | ";
    boxBorder += "  ";
  }
  let text = initialText;
  const liOrDivElements = Array.from(div.children);
  liOrDivElements.forEach((element, index) => {
    if (element.tagName == "LI") {
      const t = handleLiRow(element, mostRecentDepth);
      if (t != "") text += boxBorder + t + boxBorder + "\n";
    } else if (element.tagName == "DIV") {
      text += handleSubProof(element, mostRecentDepth + 1);
    }
  });
  // console.log(boxBorder);
  // text += initialText;
  if (div.tagName != "UL") text += `/\\A${padA}${padSeparatorLine}\n`;
  mostRecentDepth--;
  return text;
}
function handleLiRow(liElement, depth) {
  const inputs = liElement.getElementsByTagName("input");
  return `${(currentLine++ + ". " + inputs[0].value).customPadEnd(
    maxWidth,
    " ",
    mostRecentDepth,
    numberOfSubProofs,
    "  "
  )}  ${inputs[1].value.customPadEnd(maxJWidth, " ", depth, 0)}`;
}
String.prototype.customPadEnd = function (
  min,
  filler,
  subtract = 0,
  add = 0,
  calc = " |"
) {
  // console.log(this);
  let text = this; //.padEnd(min, filler);
  let width = widthOf(text);
  const fillerWidth = widthOf(filler);
  min += (add - subtract) * widthOf(calc); //to account for nesting of blocks
  // console.log("filler", filler, min);
  // console.log("Original width: ", width);
  if (width >= min) return text;
  while (Math.abs(width - min) > (fillerWidth > 10 ? fillerWidth : 10)) {
    text += filler;
    width += fillerWidth;
  }
  // console.log("final width: ", width);
  return text;
};
function widthOf(text) {
  return getTextWidth(text, "normal 12pt arial");
  // var test = document.getElementById("Test");
  // test.innerHTML = text;
  // var height = test.clientHeight + 1 + "px";
  // var width = test.clientWidth + 1;
  // // console.log(text, width);
  // return width;
}
///////////////
function getTextWidth(text, font = getCanvasFontSize()) {
  // re-use canvas object for better performance
  const canvas =
    getTextWidth.canvas ||
    (getTextWidth.canvas = document.createElement("canvas"));
  const context = canvas.getContext("2d");
  context.font = font;
  const metrics = context.measureText(text);
  return metrics.width;
}

function getCssStyle(element, prop) {
  return window.getComputedStyle(element, null).getPropertyValue(prop);
}

function getCanvasFontSize(el = document.body) {
  const fontWeight = getCssStyle(el, "font-weight") || "normal";
  const fontSize = getCssStyle(el, "font-size") || "16px";
  const fontFamily = getCssStyle(el, "font-family") || "Times New Roman";

  return `${fontWeight} ${fontSize} ${fontFamily}`;
}

////Part 3: Replace symbols

// Used as an enum
const kTypes = {
  OR: "OR",
  AND: "AND",
  NOT: "NOT",
  IMPLIES: "IMPLIES",
  BOTTOM: "BOTTOM",
  BOX: "BOX", //not exactly a type but is used in `requirements` of justification suggestions,
  FORALL: "FORALL",
  THEREEXISTS: "EXISTS",
};
// for replacing and categorizing statements types
const symbols = [
  { r: /!|~|∼|\−|NOT|¬/gi, sym: "¬", latex: "\\neg", type: kTypes.NOT },
  { r: /\^|&|\.|\*|AND|∧/gi, sym: "∧", latex: "\\wedge", type: kTypes.AND },
  { r: /\bOR\b|∨|\|/gi, sym: "∨", latex: "\\lor", type: kTypes.OR },
  {
    r: /\->|>|IMPLIES|→/gi,
    sym: "→",
    latex: "\\rightarrow",
    type: kTypes.IMPLIES,
  },
  { r: /XX|#|⊥|BOTTOM/gi, sym: "⊥", latex: "\\bot", type: kTypes.BOTTOM },
  { r: /then|prove|⊢|yield/i, sym: "⊢", latex: "\\vdash" },
  { r: /ee|te|∃/i, sym: "∃", latex: "\\exists", type: kTypes.THEREEXISTS },
  { r: /forall|vv|∀/i, sym: "∀", latex: "\\forall", type: kTypes.FORALL },
  { r: /phi|φ/i, sym: "φ", latex: "\\phi" },
  { r: /psi|ψ/i, sym: "ψ", latex: "\\psi" },
  { r: /chi|χ/i, sym: "χ", latex: "\\chi" },
  { r: /([a-z])_?0/i, sym: "$1₀", latex: "_0" },
  { r: /([a-z])_?1/i, sym: "$1₁", latex: "_1" },
];
//format
document.getElementById("proof").addEventListener("focusout", (e) => {
  let t = e.target.value;
  t = t.format();
  // symbols.forEach((symbol) => {
  //   t = t.replaceAll(symbol.r, symbol.sym);
  // });
  // //remove extra spaces
  // t = t.replace(/\s+/g, " ");
  e.target.value = t;
  // if(window.mode == MODE.PREDICATE){
  //   additionalFormat(e);
  // }
  addStatement(e.target);
});
function additionalFormat(e) {
  let t = e.target.value;
}
String.prototype.format = function (r, sym) {
  let t = this;
  symbols.forEach((symbol) => {
    t = t.replace(symbol.r, symbol.sym);
  });
  t = t.replace(/\s+/g, " ");
  return t;
};
////////Sequent
document.getElementById("sequent").addEventListener("keyup", (e) => {
  if (e.key == "Enter") {
    document.getElementById("proof-list").innerHTML = "";
    const parts = e.target.value.split(/then|prove|⊢|yield/i);
    //premises
    const premisesString = parts[0];
    let p = premisesString.split(",");
    statements = p;
    p.forEach((premise) => {
      const el = getNewInputRow();
      // @ts-ignore
      document
        .getElementById("proof-list")
        .insertAdjacentElement("beforeend", el);
      el.getElementsByTagName("input")[0].value = premise.format();
      el.getElementsByTagName("input")[1].value = "Premise";
    });
    const el = getNewInputRow();
    // @ts-ignore
    document
      .getElementById("proof-list")
      .insertAdjacentElement("beforeend", el);
    el.getElementsByTagName("input")[0].focus();
    dropdownSuggestions(el.lastElementChild);
    //conclusion
    const conclusion = parts[1];
    if (conclusion) {
      const el = getNewInputRow();
      // @ts-ignore
      document
        .getElementById("proof-list")
        .insertAdjacentElement("beforeend", el);
      el.getElementsByTagName("input")[0].value = conclusion.format();
      dropdownSuggestions(el.lastElementChild);
    }
  }
  e.target.value = e.target.value.format();
});
