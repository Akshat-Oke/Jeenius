<?php
    if(!isset($_GET["me"])){
    $file = fopen("log.txt", "a");
    fwrite($file, "W\n");
    fclose($file);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logic proof editor</title>
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />

  <link rel="stylesheet" type="text/css" href="https://kraaden.github.io/autocomplete/autocomplete.css">
  <style>
    header {
      margin: 20px 30px;
      margin-bottom: 0;
    }

    footer {
      text-align: center;
    }

    footer span {
      color: rgb(231, 88, 231);
    }

    body {
      padding: 20px 0;
    }

    * {
      transition: .3s;
    }

    main {
      margin-bottom: 30px;
    }

    /* main {
      width: 80vw;
      margin: 30px auto;
    } */
    li {
      display: flex;
      flex-flow: row nowrap;
    }

    li input:first-child {
      margin-right: 10px;
    }

    .subproof {
      border: 1px solid rgba(0, 0, 0, 0.6);
      border-radius: 5px;
      /* width: 98%; */
      margin: 8px;
      padding: 8px;
    }

    div.proof ul {
      list-style-type: none;
      counter-reset: css-counter 0;
      /* initializes counter to 0; use -1 for zero-based numbering */
    }

    ul li {
      counter-increment: css-counter 1;
      /* Increase the counter by 1. */
      margin: 8px 0;
    }

    ul li:before {
      content: counter(css-counter) ". " !important;
      display: flex !important;
      flex-direction: column;
      justify-content: flex-end;
      /* Apply counter before children's content. */
    }

    .subproof input:first-child {
      margin-left: 5px;
    }

    .uk-alert-success {
      padding: 10px 12px;
      padding-bottom: 0px;
    }

    .uk-alert-success p {
      padding-bottom: 12px;
    }

    .flex-div {
      display: flex;
    }

    .flex-div div:first-child {
      flex: 2 0.5;
      margin-right: 0px;
      padding-right: 20px;
      border-right: 1px solid rgba(0, 0, 0, 0.5);
    }

    .flex-div div:last-child {
      margin-left: 10px;
      flex-basis: 227px;
      flex-shrink: 3;
      flex-grow: 0.24;
    }

    main.uk-container {
      max-width: 1350px;
    }

    @media screen and (max-width: 1100px) {
      .flex-div {
        flex-direction: column;
      }

      .flex-div>div:first-child {
        border: none;
      }
    }

    #Test {
      position: absolute;
      visibility: hidden;
      height: auto;
      width: auto;
      white-space: nowrap;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 0;
      margin-bottom: 20px;
    }

    header h1 {
      margin-bottom: 0;
    }

    #dark {
      display: block;
      margin-right: 20px;
      border: 1px solid rgba(0, 0, 0, 0.5);
      padding: 7px 10px;
      transition: 0.4s;
      border-radius: 5px;
    }

    #dark.dark {
      border: 1px solid #dfdfdf;
    }

    #dark:hover,
    #dark.dark {
      background-color: rgba(0, 0, 0, 0.9);
      color: #dfdfdf;
      cursor: pointer;
    }

    #dark.dark:hover {
      background-color: #dfdfdf;
      color: rgba(0, 0, 0, 0.6);
    }

    body.uk-light .uk-alert {
      background-color: #333;
      color: rgba(255, 255, 255, .7);
    }

    body.uk-light kbd {
      color: #f0506e;
    }

    body.uk-light button {
      background: #222;
      color: #bdbdbd;
      border: 1px solid;
    }

    body.uk-light .uk-button-primary {
      color: #1e87f0;
      background: #2a2a2a;
      /* border: 1px solid; */
    }

    body.uk-light .uk-button-secondary {
      color: #eceff1;
      background: #16504b;
      /* border: 1px solid; */
    }

    body.uk-light #proof-list div.subproof {
      border-color: #bdbdbd;
    }

    body.uk-light .autocomplete div {
      background: #2d2d2d;
    }

    body.uk-light .autocomplete div.selected {
      background: #12a761;
    }

    body.uk-light .uk-modal-dialog,
    body.uk-light .uk-modal-dialog div,
    body.uk-light .uk-modal-dialog p {
      background: #2f2f2f;
    }

    #share-div {
      display: none;
    }
  </style>
</head>

<body>
  <header>
    <h1>Natural deduction proof editor</h1>
    <div id="dark">Dark Mode</div>
  </header>
  <p style="margin-left: 33px; transform: translateY(-10px);font-size: 15px;">If you liked this, you might like my <a
      href="https://parse-tree-generator.netlify.app">parse tree
      generator</a> too!</p>
  <main class="uk-container">
    <div class="uk-alert-success" uk-alert>
      <a class="uk-alert-close" uk-close></a>
      <p>Generate proofs in plain text easily<br />
        Use AND, OR, NOT to represent ∧, ∨, ¬ respectively (which will be auto replaced). For the full list, scroll
        down.
        <br />
        Press <kbd>Enter</kbd> to insert a new line, and press <kbd>Ctrl+B</kbd> to create a box or sub-proof. Scroll
        down for the full list of keyboard actions.
        <Br><Br>
        *This also includes a very handy <strong>auto-suggest</strong> feature! (which might be wrong)
      </p>
    </div>
    <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="Sequent Ex. p implies q, not q  then  not p" id="sequent">
      <label for="sequent">Type your sequent here and press <kbd>Enter</kbd> to generate the premise statements</label>
      <div class="uk-margin">
        <label><input class="uk-checkbox" id="mode" type="checkbox"><span style="color:rgb(161, 54, 161)">
            Enable Predicate Logic Mode
          </span>
        </label>
        Predicate mode will suggest justifications from predicate rules instead of propositional.
      </div>
      <hr class="uk-divider-icon">
    </div>
    <div class="flex-div">
      <div>
        <h2 id="proof-header">Proof</h2>
        <div id="proof">
          <ul id="proof-list" class="uk-list">
<?php
if(isset($_REQUEST['proof'])){
    $filename = "Saved/".$_REQUEST['proof'].".txt";
    if(file_exists($filename))
    echo file_get_contents($filename);
    else echo "Proof ".$_REQUEST['proof']." doesn't exist! Click on \"Clear All\" or go to the sequent textbox and press <kbd>Enter</kbd>";
} else{
?>
            <li>
              <input class="uk-input" type="text" placeholder="Formula">
              <input class="uk-input" type="text" placeholder="Justification">
            </li>
            <div class="subproof">
              <li><input class="uk-input" type="text" placeholder="Formula">
                <input class="uk-input" type="text" placeholder="Justification">
              </li>
              <div class="subproof">
                <li><input class="uk-input" type="text" placeholder="Formula">
                  <input class="uk-input" type="text" placeholder="Justification">
                </li>
              </div>
            </div>
            <li>
              <input class="uk-input" type="text" placeholder="Formula">
              <input class="uk-input" id="country" type="text" placeholder="Justification">
            </li>
            <?php
        }
?>
          </ul>

        </div>
        <div style="margin-bottom: 10px;">
          <button class="uk-button" id="clear-all">Clear All</button>
          <button class="uk-button uk-button-danger" id="share-button">Share</button>
          <div id="share-div" class="uk-alert-primary" uk-alert>
            <h4>Share Proof</h4>
            <div id="share-loading" uk-spinner></div>
            <p><a id="share-link">https:/asdasd</a></p>
            <p>Opening the link above will open your proof</p>
          </div>
          <br />
          <h3 style="margin-top: 15px;">Export To</h3>
          <button class="uk-button uk-button-primary" id="export">Text</button>
          <button class="uk-button uk-button-secondary" id="convert">LaTeX</button>
          <button class="uk-button uk-button-danger" id="json">JSON</button>
        </div>
        <form action="https://www.overleaf.com/docs" method="POST" target="_blank">
          <textarea id="result" class="uk-textarea" rows="4" name="snip"></textarea>
          <button class="uk-button uk-button-primary" type="submit">Open in OverLeaf</button>

        </form>
        <p>Include <code>\usepackage{logicproof}</code> for LaTeX</p>
      </div>
      <div>
        <h3>Instructions</h3>
        <table class="uk-table uk-table-hover uk-table-divider">
          <caption>Keyboard maneuvering</caption>
          <thead>
            <tr>
              <th>Keys / Keys combinations (press simultaneously)</th>
              <th> Action performed</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><kbd>Enter</kbd></td>
              <td> Insert new statement (line) below</td>
            </tr>
            <tr>
              <td><kbd>Ctrl + B</kbd> or <kbd>Ctrl + A</kbd></td>
              <td> Start a sub-proof (box)</td>
            </tr>
            <tr>
              <td><kbd>Esc</kbd></td>
              <td> End a sub-proof (box) and insert a new line below</td>
            </tr>
            <tr>
              <td><kbd>Arrow Keys</kbd></td>
              <td> Move between input boxes</td>
            </tr>
            <tr>
              <td><kbd>DEL</kbd></td>
              <td>Delete current line (beware of leaving "hanging" boxes by deleting first line of a box)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    </div>
    <table class="uk-table uk-table-hover uk-table-divider">
      <caption>Symbols</caption>
      <thead>
        <tr>
          <th>Operator</th>
          <th>Use any of these characters (or words, case insensitive)</th>
          <th>For these symbols</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Negation</td>
          <td>! ~ ∼ - − NOT</td>
          <td>¬</td>
        </tr>
        <tr>
          <td>Conjunction</td>
          <td>^ & . * AND</td>
          <td>∧</td>
        </tr>
        <tr>
          <td>Disjunction </td>
          <td>vv OR |</td>
          <td>∨</td>
        </tr>
        <tr>
          <td>Conditional </td>
          <td>-> > IMPLIES </td>
          <td>→</td>
        </tr>
        <tr>
          <td>Contradiction </td>
          <td> XX # </td>
          <td>⊥</td>
        </tr>
        <tr>
          <td>Sequent </td>
          <td>THEN PROVE YIELD </td>
          <td>⊢</td>
        </tr>
        <tr>
          <td>For all </td>
          <td>forall vv </td>
          <td>∀</td>
        </tr>
        <tr>
          <td>There exists </td>
          <td>te EE </td>
          <td>∃</td>
        </tr>
        <tr>
          <td>Greek </td>
          <td>phi, psi, chi </td>
          <td>φ ψ χ</td>
        </tr>
        <tr>
          <td>Subscript </td>
          <td>0 or 1 after a letter (x0, x1, y0 etc) </td>
          <td>x₀ x₁ y₀ etc</td>
        </tr>
      </tbody>
    </table>
  </main>
  <div id="Test"></div>
  <footer>Made with <span>Logic</span> by <a href="https://jeenius.gq/more.html"> Akshat</a></footer>
  <!-- This is the modal -->
  <div id="modal" uk-modal bg-close="false">
    <div class="uk-modal-dialog uk-modal-body">
      <h2 class="uk-modal-title">Hey there</h2>
      <p>It seems you are using a mobile device (or a tab). This website might not work properly on such devices, so I
        recommend you access this on a PC instead.<br>Thanks for using the editor!</p>
      <p class="uk-text-right">
        <button class="uk-button uk-button-default uk-modal-close" type="button">All right</button>
      </p>
    </div>
  </div>
  <div id="welcome-modal" uk-modal bg-close="false">
    <div class="uk-modal-dialog uk-modal-body uk-background-secondary uk-light">
      <h2 class="uk-modal-title">Welcome!</h2>
      <p><b>New!</b> More export options: Text, LaTeX and JSON!</p>
      <p>Also, a small <strong>Predicate mode!</strong> Enable using the checkbox below.</p>
      <p>Type proofs like a boss with no efforts😎<br>Includes auto-complete and auto-fill in statements after boxes for
        a seamless typing experience. Export to text (so you can copy paste) in one click!</p>
      <p>I made this editor to type proofs faster in the tutorial class, so if you think it is useless, well... there's
        no use for it in other cases as I know.</p>
      <p>P.S. You can switch to Dark Mode from the top right corner!</p>
      <p class="uk-text-right">
        <button class="uk-button uk-button-default uk-modal-close" type="button">Awesome!</button>
      </p>
    </div>
  </div>
  <!-- UIkit JS -->
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>
  <script>
    window.mobileAndTabletCheck = function () {
      let check = false;
      (function (a) { if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true; })(navigator.userAgent || navigator.vendor || window.opera);
      return check;
    };
    if (mobileAndTabletCheck()) {
      UIkit.modal(document.getElementById("modal")).show();
    }
    document.getElementById("dark").addEventListener("click", e => {
      document.body.classList.toggle("uk-background-secondary");
      document.body.classList.toggle("uk-light");
      e.target.innerText = e.target.innerText.includes("Dark") ? "Light mode" : "Dark mode";
      e.target.classList.toggle("dark");
    })
    if (localStorage.visitedProofEditor1) {

    } else {
      UIkit.modal(document.getElementById("welcome-modal")).show();
      localStorage.setItem("visitedProofEditor1", "true");
    }
  </script>
  <script src="app.js"></script>
  <script src="autocompleteLib.js"></script>
  <script src="autocomplete.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  <script>
    ///Export to LaTeX and JSON here
    (function () {
      //IIFE
      //Statements of proof are represented as an array of objects.
      let proof = [];
      let line = 0;
      let forLatex = false;
      document.getElementById("convert").addEventListener("click", () => convert("latex"));
      document.getElementById("json").addEventListener("click", () => convert("json"));
      const convert = (format) => {
        forLatex = format == "latex";
        //clear the array
        proof.length = 0;
        //line is zero
        line = 0;
        const ul = document.getElementById("proof-list");
        let latex = `\\documentclass{article}
\\usepackage{logicproof}
\\begin{document}
\\begin{logicproof}{2}\n`;
        Array.from(ul.children).forEach(ele => {
          if (ele.tagName == "LI") {
            const t = visitStatement(ele);
            latex += t.text;
            proof.push(t.json)
          }
          else if (ele.tagName == "DIV") {
            const t = visitSubProof(ele);
            latex += t.text;
            proof.push(t.json)
          }
        })
        latex = latex.replace(/\\\\ *\n *$/, "\n");
        latex += "\\end{logicproof}\n\\end{document}";
        if (format == "latex") {
          document.getElementById("result").value = latex;
          document.getElementById("result").rows = line + 3;
        }
        else if (format == "json") {
          document.getElementById("result").value = JSON.stringify({ proof }, null, 2);
          document.getElementById("result").rows = line * 2;
        }
      }
      function visitStatement(li) {
        line++;
        const formula = li.getElementsByTagName("input")[0].value.latexify(forLatex);
        const justification = li.getElementsByTagName("input")[1].value.latexifyJustification(forLatex);
        return { text: formula + " & " + justification + "\\\\ \n", json: { formula, justification } };
      }
      function visitSubProof(div) {
        line += 2;
        let text = "\\begin{subproof}\n";
        const json = [];
        Array.from(div.children).forEach(ele => {
          if (ele.tagName == "LI") {
            const t = visitStatement(ele);
            text += t.text;
            json.push(t.json);
          }
          else if (ele.tagName == "DIV") {
            const t = visitSubProof(ele); text += t.text;
            json.push(t.json);
          }
        })
        console.log(text);
        text = text.replace(/\\\\ *\n *$/, "\n");
        text += "\\end{subproof}\n";
        return { text, json };
      }
    })()
    String.prototype.latexify = function (forLatex) {
      if (!forLatex) return this;
      let t = this;
      symbols.forEach((symbol) => {
        t = t.replace(symbol.r, symbol.latex + " ");
      });
      return t;
    }
    String.prototype.latexifyJustification = function (forLatex) {
      if (!forLatex) return this;
      let t = this;
      let subscriptNext = false;
      for (let i = 0; i < t.length; i++) {
        if (subscriptNext) {
          if (/[0-9]/.test(t[i]))
            t = t.substring(0, i) + "_" + t.substring(i);
          break;
        }
        subscriptNext = /[a-z]/i.test(t[i]);
      }
      t = t.replace(/\s/g, "\\: ");
      t = t.replace(/[a-z]+/ig, "\\mathrm{$&}");
      t = t.latexify(forLatex);
      return "$" + t + "$";
    }
  </script>
  <script>
    async function postData(url = '', data = {}) {
      document.getElementById("share-div").style.display = "block";
      document.getElementById("share-loading").style.display = "block";
      document.getElementById("share-link").innerHTML = "";
      // Default options are marked with *
      const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'same-origin', // include, *same-origin, omit
        headers: {
        //   'Content-Type': 'text/plain'
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
        body: data//JSON.stringify(data) // body data type must match "Content-Type" header
      });
      return response.json(); // parses JSON response into native JavaScript objects
    }
    document.getElementById("share-button").addEventListener("click", (e) => {
      //check if this link is a shared one
      const urlParams = new URLSearchParams(window.location.search);
      const myParam = urlParams.get('proof');
      if (myParam) {
        UIkit.modal.confirm("This proof has been already shared! Do you want to create a copy?").then(e=>{
            initiateShare();
        }, ele=>{})
        return;
      }
      initiateShare();
    });
    function initiateShare(){
         if (localStorage.userShareCode) {
             UIkit.modal.confirm('If you have saved a proof as user "'+localStorage.userShareCode+"\", a new proof will be saved with name\"" + localStorage.userShareCode+ "1\". Do you want to continue?").then(()=>{
                saveProof(localStorage.userShareCode);
            }, ()=>{});
      } else {
        UIkit.modal.prompt('Name:', "user" + Math.floor(Math.random() * (99999 - 11111) + 11111)).then(function (name) {
            if(name){
          localStorage.setItem("userShareCode", name);
          saveProof(name);}
        });
        user = name;
      }
    }
    async function saveProof(user) {
        [...document.getElementById("proof-list").getElementsByTagName("input")].forEach(ele => {
            ele.setAttribute("value", ele.value);
        });
      let res = await postData("save.php?user=" + user, (document.getElementById("proof-list").innerHTML));
      document.getElementById("share-loading").style.display = "none";
      document.getElementById("share-link").style.display = "block";
      if (res.link != "error")
        document.getElementById("share-link").innerHTML = res.link;
      document.getElementById("share-link").setAttribute("href", res.link);
      if (res.link != "error")
        copyTextToClipboard(res.link);
    }
  </script>
  <script>
    function fallbackCopyTextToClipboard(text) {
      var textArea = document.createElement("textarea");
      textArea.value = text;

      // Avoid scrolling to bottom
      textArea.style.top = "0";
      textArea.style.left = "0";
      textArea.style.position = "fixed";

      document.body.appendChild(textArea);
      textArea.focus();
      textArea.select();

      try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Fallback: Copying text command was ' + msg);
      } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
      }

      document.body.removeChild(textArea);
    }
    function copyTextToClipboard(text) {
      if (!navigator.clipboard) {
        fallbackCopyTextToClipboard(text);
        return;
      }
      navigator.clipboard.writeText(text).then(function () {
        UIkit.modal.alert('Share link copied to clipboard!' + text);
      }, function (err) {
        console.error('Async: Could not copy text: ', err);
      });
    }
  </script>
</body>

</html>