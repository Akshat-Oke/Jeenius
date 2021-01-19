<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="short" type="image/x-icon" href="favicon.ico" />
    <meta charset="utf-8">
    <title>Jeenius</title>
    <meta name="description" content="Solve tests, practice questions or add YOUR question!"/>
    <meta property="og:title" content="Jeenius"/>
    <meta property="og:description" content="Solve tests, practice questions or add YOUR question!"/>
    <meta property="og:image" content="https://jeenius.ga/favicon.ico"/>
    <meta property="og:url" content="https://jeenius.ga/index.php"/>
    <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Ubuntu|Noto%20Serif%20SC|Alegreya|Vollkorn%20SC">
    <script>
    if (localStorage.getItem("spamoption")=="1"){
        document.write("You cannot view this page for three days.");
    }
    </script>
    <style>
    html{
        scroll-behavior: smooth;
    }
    body{margin:0;
         line-height:1.5;}
    * {box-sizing;}
    footer{font-size:14px;line-height:1.4;margin:0 0 5px 0px; font-family:'Thasadith', serif;color:rgba(0,0,0,0.75);
    padding:10px;
    }
      /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 2px solid lightblue;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 34px;
  font-weight: bold;
  margin-top:-10px;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    	/*#headerbar{
    	    font-size:10vw;
    	    display:flex;
    	    align-items: center;
    	    //display-style:block;
             height:10vh;
             width:100%;
             padding:0;
             margin:0;
             background-color:black;
             font-family:"Times New Roman";
             position: fixed;
             top:0;
             }
        span.menu{
            background-color:gray;
            width:14vw;
            color:white;
            font-size:6.7vh;
            display: flex;
            align-items: center;
            justify-content:center;
            flex-direction:column;
            }*/
            #headerbar{
    	    font-size:20vh;
    	    display:flex;
    	    align-items: center;
    	    //display-style:block;
             height:8.5vh;
             width:100%;
             padding:0;
             margin:0;
             z-index:99;
             box-shadow:0 0px 8px 4px rgba(0,0,0,0.6);
             background-color:black;
             font-family:"Times New Roman";
             position: fixed;
             top:0;
             }
        span.menu{
            width:14vw;
            color:white;
            font-size:6.2vh;
            height:8.5vh;
            display: flex;
            align-items: center;
            justify-content:center;
            flex-direction:column;
            }
        div.menuicon{
  width: 35px;
  height: 4px;
  background-color: white;
  margin: 4px 0px;
            }
      /* The Overlay (background) */
      .overlay {
      /* Height & width depends on how you want to reveal the overlay (see JS below) */   
      height: 100%;
      width: 0;
      position: fixed; /* Stay in place */
      z-index: 100; /* Sit on top */
      left: 0;
      top: 0;
      background-color: rgb(0,0,0); /* Black fallback color */
      background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
      overflow-x: hidden; /* Disable horizontal scroll */
      transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
      }
      
      /* Position the content inside the overlay */
      .overlay-content {
      position: relative;
      top: 12%; /* 25% from the top */
      width: 100%; /* 100% width */
      text-align: left; /* Centered text/links */
      margin-top: 10px; /* 30px top margin to avoid conflict with the close button on smaller screens */
      }
      
      /* The navigation links inside the overlay */
      .overlay a {
      padding: 6px;
      text-decoration: none;
      font-size: 30px;
      color: #818181;
      display: block; /* Display block instead of inline */
      transition: 0.3s; /* Transition effects on hover (color) */
      }
      
      /* When you mouse over the navigation links, change their color */
      .overlay a:hover, .overlay a:focus {
      color: #f1f1f1;
      }
      
      /* Position the close button (top right corner) */
      .overlay .closebtn {
      position: absolute;
      top: 5px;
      right: 25px;
      font-size: 55px;
      }
      
      /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
      @media screen and (max-height: 450px) {
      .overlay a {font-size: 20px}
      .overlay .closebtn {
      font-size: 40px;
      top: 15px;
      right: 35px;
      }
      }
      
   #home {
   margin:3px;
   }
   
   li{display: block; width: 70%;
   margin:auto;
   background-color: #afafaf;
   }
   
   @media screen and(max-height: 40px){
   #headerbar{ height: 10vh;
   font-size: 10px;}}
  
.navbar {
  background-color: #333;
  overflow: hidden;
  position: fixed;
  bottom: 0;
  width: 100%;
}

/* Style the links inside the navigation bar */
.navbar a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 6vw;
  text-decoration: none;
  font-size: 2.6vw;
margin:auto;
}

/* Change the color of links on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.navbar a:active{
background-color: #fff;
  color: black;
}
#daily{display:none;}
#physicsdaily{display:none;
margin:5px;}
#chemistrydaily{display:none;
margin:5px;}
#mathdaily{display:none;
margin:5px;}

textarea {
    width:75%; 
    height:30vh;
    font-size:16px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2.5px solid #f7b2ff;
  border-radius: 4px;
  transition-duration: 0.4s;
  outline:none;
  font-family:Times New Roman;
}
 textarea:focus {
     background-color: #f8f8f8;
  border: 2.5px solid #d02fe1;
}
#submitbutton{
    margin:8px;
    padding:8px;
    font-size:12px;
    border:2px solid #ad1caf;
    background-color:white;
    transition-duration: 0.4s;
}
#submitbutton:hover{
    background-color: #ad1caf;
  color: white;
}
input[type=text]{
    font-family:'Ubuntu',serif;
    width:30vw;
    margin: 8px;
    padding:10px;
    font-size:12px;
    background-color: white;
    outline:none;
    transition:0.4s;
    -webkit-transition: 0.4s;
    border:2.5px solid #f7b2ff;
}
input[type=text]:focus {
    width:60vw;
  border: 2.5px solid #d02fe1;
  color:black;
}

 #form{
     border:2px solid #d02fe1;
     height:auto;
     margin:0 5px;
     transition: height 1s;
 }

 #submitit{
    display:none;
    font-size:12px; color:red;
 }
 input[type=submit]:disabled{
     border:2.5px solid #f7b2ff;
 }
 span.namemore{
     color:#f752eb;
 }
 #hidemore{
     display:none;
 }
 li{
     background-color:white;
     margin-left:5px;
     display:list-item;
     width:85%;
 }
 ul{
     list-style-type:disc;
 }
 #thelog{
     display:none;
 }
 div.info{
    text-align:center;
    margin-left:20px;
    margin-right:20px;
    padding:15px;
   // border-left:3px solid #1fdc9f;
    overflow:hidden;
    transition:max-height 0.4s;
    -webkit-transition:0.4s;
}
div.info-title{
    font-size:1.9em;
    //margin-left:8px;
    color:rgba(0,0,0,0.9);
    font-family:"Thasadith", serif;
}
div.info-answer{
    font-size:1em;
   // margin-left:15px;
    color:rgba(0,0,0,0.75);
    font-family:"Noto Serif SC", serif;
    //border-left: 2px solid #f56d1d;
    padding:10px;
}
#navbar1{
    padding-top:10px;
    text-align:center; padding-bottom:10px;
    font-family:'Alegreya',serif;
    font-size:1.5em;
    position:sticky;
    top:8vh;
    background:rgba(255,255,255,0.77);
    z-index:10;
    margin:0 auto;
    border-bottom:1px solid black;
    width:80vw;
}
a.advertise{
    padding:5px 5px;
    margin:0 5px 0 5px;
    color:#42b2b7;
}
#like{
    text-align:center;
    position:fixed;
    bottom:0;
    left:50%;
    z-index:4;
    color:#fe0775;
    border-radius:5px 5px 0 0;
    background-color:rgba(28, 230, 136,0.7);
    font-size:1.3em;
    width:20vw;
    padding:7px;
    margin:0 -10vw;
}
#likeicon{
    padding:0 8px;
}

 #disabledsubmit{display:none;}
    </style>
   </head>
  <body onload="gettheusername();"><div id="wholepage">
  <script>
  function banthem(){
  if (localStorage.getItem("user")=="Sahil Mahajan"){
        document.write(localStorage.getItem("user")+ " cannot view this page for three days.");
    }}
    </script>
  <div id="headerbar" class="headerbar">
  
  <span class="menu" id="modalbutton" onclick="getbookmarklist();" style="background-color: black; color: magenta; font-size: 3vh; width: auto; margin-left: 2vw;">Book-<div style=" margin-top:-6px; "></div>marks</span>
<span style="text-align:center; color:white; font-size: 8vh; margin:auto; diaplay-style: inline-block;"> Jeenius</span>
<span class="menu" onclick="nav();"><div class="menuicon"></div><div class="menuicon"></div><div class="menuicon"></div></span>
</div>

<div id="overlaynav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="https://jeenius.ga" onclick="openhome();">Home <i class="fas fa-home"></i></a>
    <a href="#" onclick="daily();">Questions <i class="fas fa-book"></i></a>
    <a href="https://jeenius.ga/tests/login.php">Tests <i class="fas fa-edit"></i></a>
    <a href="http://jeenius.epizy.com/subjects/physics.php">Physics <i class="fas fa-atom"></i></a>
    <a href="http://jeenius.epizy.com/subjects/chemistry.php">Chemistry <i class="fas fa-flask"></i></a>
    <a href="http://jeenius.epizy.com/subjects/maths.php">Maths <i class="fas fa-calculator"></i></a>
    <a href="http://jeenius.epizy.com/credits.html">Credits <i class="fas fa-align-center"></i></a>
    <!--<a href="#" onclick="openhome();">Home</a>
    <a href="#" onclick="daily();">Questions</a>
    <a href="http://jeenius.epizy.com/subjects/physics.php">Physics</a>
    <a href="http://jeenius.epizy.com/subjects/chemistry.php">Chemistry</a>
    <a href="http://jeenius.epizy.com/subjects/maths.php">Maths</a>
    <a href="credits.html">Credits</a>-->
  </div>
<script>
function openhome(){
document.getElementById("overlaynav").style.width = "0%";
document.getElementById("home").style.display="block";
document.getElementById("daily").style.display="none";
document.getElementById("physicsdaily").style.display="none";

}
function daily(){
 document.getElementById("form").style.display="none";
 document.getElementById("overlaynav").style.width = "0%";
 document.getElementById("home").style.display="none";
 document.getElementById("daily").style.display="block";
 document.getElementById("develop").style.display="none";
 document.getElementById("thelog").style.display="none";
}
</script>
</div>
<script type="text/javascript">
/* Open when someone clicks on the span element */
function nav() {
  document.getElementById("overlaynav").style.width = "70%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("overlaynav").style.width = "0%";
};

/*var modal = document.getElementById('overlaynav');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.width="0%";
  }
}*/

</script>
<div style="height:8vh;"></div>
 <!-- Bookmarks modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="max-height:70%; overflow-y:scroll; font-family:'Ubuntu',serif;">
      <div style="font-size:1.2em; color:#00cbbe;" id="modalwelcome"></div><span class="close">&times;</span>
      <h3>Bookmarks</h3>
    <p>
        <h4 onclick="window.location.href='https://jeenius.ga/daily/physicsq.php';">Physics</h4>
        <ul id="bookmarklistp">
        </ul>
        <h4>Chemistry</h4>
        <ul id="bookmarklistc">
        </ul>
        <h4>Math</h4>
        <ul id="bookmarklistm">
        </ul>
    </p>
  </div>
</div> 
<script>
    if(localStorage.user!=""&&localStorage.user!=null&&localStorage.user!=undefined&&localStorage.user)
    {
        document.getElementById("modalwelcome").innerHTML="Welcome, "+localStorage.user+".";
    }
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var openmodal = document.getElementById("modalbutton");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
openmodal.onclick = function() {
  modal.style.display = "block";
  getbookmarklist();
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  //getbookmarklist();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function getbookmarklist(){
    //For Physics
    document.getElementById("bookmarklistp").innerHTML="";
    for(var i=0; i<30; i++){
      var y="qp"+i;
      var ya=localStorage.getItem(y);
      if(ya=="1"){
            var markedq = document.createElement("li");
            var textnode = document.createTextNode("Question "+(i+1));
            markedq.appendChild(textnode);
            document.getElementById("bookmarklistp").appendChild(markedq);
            }
    }
    if(document.getElementById("bookmarklistp").innerHTML==""){
                document.getElementById("bookmarklistp").innerHTML="Nothing here yet...";
            }
    //For Chemistry
    document.getElementById("bookmarklistc").innerHTML="";
    for(var i=0; i<30; i++){
      var y="qc"+i;
      var ya=localStorage.getItem(y);
      if(ya=="1"){
            var markedq = document.createElement("li");
            var textnode = document.createTextNode("Question "+(i+1));
            markedq.appendChild(textnode);
            document.getElementById("bookmarklistc").appendChild(markedq);
            }
    }
     if(document.getElementById("bookmarklistc").innerHTML==""){
                document.getElementById("bookmarklistc").innerHTML="Nothing here yet...";
            }
    //For Maths
    document.getElementById("bookmarklistm").innerHTML="";
    for(var i=0; i<30; i++){
      var y="qm"+i;
      var ya=localStorage.getItem(y);
      if(ya=="1"){
            var markedq = document.createElement("li");
            var textnode = document.createTextNode("Question "+(i+1));
            markedq.appendChild(textnode);
            document.getElementById("bookmarklistm").appendChild(markedq);
            }
    }
     if(document.getElementById("bookmarklistm").innerHTML==""){
                document.getElementById("bookmarklistm").innerHTML="Nothing here yet...";
            }
}
var pnum;
var cnum;
var mnum;
    function countp() {
  var xhttp = new XMLHttpRequest();
  //xhttp.overrideMimeType("text/xml");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myp(this);
    }
  };
  xhttp.open("GET","/daily/pd.xml?" + Math.random(),true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
  countc();
 }
 function myp(xml){
      var xmlDoc = xml.responseXML;
     var numberofq = xmlDoc.getElementsByTagName("q").length;
     pnum=numberofq;
      if(localStorage.getItem("numofp")==undefined||localStorage.getItem("numofp")==null||localStorage.getItem("numofp")==""||localStorage.getItem("numofp")=="undefined"||!localStorage.getItem("numofp")){
         localStorage.setItem("numofp", numberofq);
         document.getElementById("newq").innerHTML="Next time you come here you will see if any new questions have been added.";
     }
     else if(localStorage.numofp!=numberofq){
         var diff=pnum-Number(localStorage.numofp);
         if(diff>=0){
             document.getElementById("newqp").innerHTML="[<b>"+diff+"</b> new]";

         }
         else {
             diff=0-diff;
             document.getElementById("newqp").innerHTML="[<b>"+diff+"</b> removed]";
         }
         localStorage.setItem("numofp", numberofq);
     }
     else{
         document.getElementById("newqp").innerHTML="[Nothing new yet]";
     }
     document.getElementById("pcount").innerHTML="Physics <br><span style= \"color:magenta; \"> "+numberofq+"</span> questions.";
 }

 function countc() {
  var xhttp = new XMLHttpRequest();
  //xhttp.overrideMimeType("text/xml");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myc(this);
    }
  };
  xhttp.open("GET","/daily/cd.xml?" + Math.random(),true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
  countm();
 }
 function myc(xml){
      var xmlDoc = xml.responseXML;
     var numberofq = xmlDoc.getElementsByTagName("q").length;
     cnum=numberofq;
      if(localStorage.getItem("numofc")==undefined||localStorage.getItem("numofc")==null||localStorage.getItem("numofc")==""||localStorage.getItem("numoc")=="undefined"||!localStorage.getItem("numofc")){
         localStorage.setItem("numofc", numberofq);
         document.getElementById("newq").innerHTML="Next time you come here you will see if any new questions have been added.";
     }
     else if(Number(localStorage.numofc)!=numberofq){
         var diff=cnum-Number(localStorage.numofc);
         if(diff>=0){
             document.getElementById("newqc").innerHTML="[<b>"+diff+"</b> new]";
         }
         else {
             diff=0-diff;
             document.getElementById("newqc").innerHTML="[<b>"+diff+"</b> removed]";
         }
         localStorage.setItem("numofc", numberofq);
     }
     else{
         document.getElementById("newqc").innerHTML="[Nothing new yet]";
     }
     document.getElementById("ccount").innerHTML="Chemistry<br> <span id='none' style= \"color:magenta; \"> "+numberofq+"</span> questions.";
 }

 function countm() {
  var xhttp = new XMLHttpRequest();
  //xhttp.overrideMimeType("text/xml");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    mym(this);
    }
  };
  xhttp.open("GET","/daily/md1.xml?" + Math.random(),true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
 }
 function mym(xml){
      var xmlDoc = xml.responseXML;
     var numberofq = xmlDoc.getElementsByTagName("q").length;
     mnum=numberofq;
     //document.getElementById("newqm").innerHTML="Nothing new yet";
     if(localStorage.getItem("numofm")==undefined||localStorage.getItem("numofm")==null||localStorage.getItem("numofm")==""||localStorage.getItem("numofm")=="undefined"||!localStorage.getItem("numofm")){
         localStorage.setItem("numofm", numberofq);
         document.getElementById("newq").innerHTML="Next time you come here you will see if any new questions have been added.";
     }
     else if(Number(localStorage.numofm)!=numberofq){
         var diff=mnum-Number(localStorage.numofm);
         if(diff>=0){
             document.getElementById("newqm").innerHTML="[<b>"+diff+"</b> new]";
         }
         else {
             diff=0-diff;
             document.getElementById("newqm").innerHTML="[<b>"+diff+"</b> removed]";
         }
         localStorage.setItem("numofm", numberofq);
     }
     else{
         document.getElementById("newqm").innerHTML="[Nothing new yet]";
     }
     document.getElementById("mcount").innerHTML="Math<br> <span id='none' style= \"color:magenta; \"> "+numberofq+"</span> questions.";
 }
</script>
<!-- Actual Content-->

<div style="color:#ad1caf; font-size: 2.8em; text-align:center; margin:10px 0 -8px 0; font-family:'Vollkorn SC', serif;"><b>Jeenius</b></div>
<div style="font-size:14px; text-align:center; font-family:'Alegreya',serif; margin:4px 0px -5px 0px;letter-spacing:3px;"> <b>By Akshat</b></div>
<hr style="width:90%;">
<div id="navbar1">
<a class="advertise" href="https://jeenius.ga/things/chemtricks.php">Learn</a>
<a class="advertise" href="https://jeenius.ga/daily/physicsq.php">Questions</a>
<a class="advertise" href="https://jeenius.ga/tests/login.php">Tests</a>
</div>
<!--Form for reporting-->
<div style="text-align:center;">
    <div style="font-family:'Noto Serif SC', serif; font-size:2.3em;">Report</div>
    <div style="font-family:'Alegreya', serif; font-size:1.5em; color:red;" id="questionis"><?php echo $_REQUEST['subject'];?> question <?php echo $_REQUEST['question'];?></div>
    

    <form method="post" action="https://jeenius.ga/reported.php" onsubmit="formok();" >
        <input type="hidden" name="question" id="thequestion"/>
   <script>
  function formok(){
      document.getElementById("thequestion").value=document.getElementById("questionis").innerHTML;
    alert("Thank you for reporting this question!"); 
    }
  </script>

  <br>
  Add your name:<br> <span style="font-size:13px; color:magenta;">*will not be disclosed at your request.
<br>   </span> <input type="text" name="namequestion" placeholder="Your real name" id="nameq" required>
    <div id="checkname" style="color:blue;"></div><hr style="width:50vw;"><br>

    <label for="cars"><span style="font-family:'Noto Serif SC',serif; font-size:20px;">Reason for reporting:</span></label>

  <select name="reason" id="cars" required style="font-size:18px; font-family:'Thasadith', serif;color:red;" onchange="selectoption();">
  <option hidden disabled selected value> -- Select an option -- </option>
  <option value="Error Question">Question has an error.</option>
  <option value="Solution Incorrect">Solution has an error</option>
  <option value="Options Wrong">Options are wrong</option>
  <option value="Other">Other</option>
</select>
<br><br>
<div style="font-family:'Noto Serif SC',serif; font-size:20px;"><span id="reastext" style="color:red;"></span><br> <span> Your Correction:</span></div>
<textarea id="reasontext" name="reasontext" placeholder="Ex. 1+2=3 but it is given 1+2=4" required></textarea>
<br>
<br>
 <input type="submit" id="submitbutton"/>
</form>
</div>
<script>
function selectoption(){
    document.getElementById("reastext").innerHTML=document.getElementById("cars").value;
}
var nameisok=0;
var questionisok=0;
var answerisok=0;
var optionareok=0;
function gettheusername(){
    if(localStorage.user!=""&&localStorage.user!=null&&localStorage.user!=undefined&&localStorage.user)
    {
        document.getElementById("nameq").value=localStorage.user;
        getusername();
    }
}
document.getElementById("nameq").addEventListener("focusout", namevalidate);

document.getElementById("nameq").addEventListener("focus", namereset);

function namereset(){
    nameisok=0;
    formisok();
}

function answerreset(){
    answerisok=0;
    formisok();
}

function optionreset(){
    optionisok=0;
    formisok();
}

function questionreset(){
    questionisok=0;
    formisok();
}
function namevalidate(){
    var ns=document.getElementById("nameq").value;
    var nsu=ns.toLocaleUpperCase();
    if(nsu!=""){
    if(nsu.includes("AKSHAT")){
        document.getElementById("nameq").style.color="red";
        document.getElementById("nameq").style.border="2px solid red";
        document.getElementById("checkname").innerHTML="I don't think there are so many people named Akshat. Please put YOUR name.";
    }
    else if(!nsu.includes("SANIKA")&&!nsu.includes("AUM")&&!nsu.includes("CHINMAY")&&!nsu.includes("SAHIL")&&!nsu.includes("VENK")&&!nsu.includes("ANISH")&&!nsu.includes("ADITYA")&&!nsu.includes("ANUSH")&&!nsu.includes("ANANT")&&!nsu.includes("SHAR")&&!nsu.includes("RUSH")&&!nsu.includes("PARTH")&&!nsu.includes("PRAN")&&!nsu.includes("KART")&&!nsu.includes("CHIR")&&!nsu.includes("PRIYA")&&!nsu.includes("PRAKH")&&!nsu.includes("LAU")&&!nsu.includes("NACH")&&!nsu.includes("ARY")&&!nsu.includes("RAJ")&&!nsu.includes("AADIT")&&!nsu.includes("NEEL")&&!nsu.includes("ANURAG")&&!nsu.includes("AYUS")&&!nsu.includes("ME")&&!nsu.includes("KHUSHI")&&!nsu.includes("SUDIP")&&!nsu.includes("KANISHQ")&&!nsu.includes("AMIT")&&!nsu.includes("TUSHAR")&&!nsu.includes("AMRUT")&&!nsu.includes("MITALI")&&!nsu.includes("MIHIKA")&&!nsu.includes("MEDH")&&!nsu.includes("MANALI")&&!nsu.includes("SOHAM")&&!nsu.includes("ARCHIT")&&!nsu.includes("STUTI")&&!nsu.includes("NIRAN")&&!nsu.includes("SIDDHAR")&&!nsu.includes("ANEESH")&&!nsu.includes("VISHWA")&&!nsu.includes("ANANY")&&!nsu.includes("SWANA")&&!nsu.includes("KUNAL")&&!nsu.includes("SANSKAR")&&!nsu.includes("SEJAL")&&!nsu.includes("KETAN")&&!nsu.includes("DWIJ")&&!nsu.includes("ROHAN")&&!nsu.includes("SHREYAS")&&!nsu.includes("SWAR")&&!nsu.includes("AMOD")&&!nsu.includes("VIPUL")&&!nsu.includes("MEGH")&&!nsu.includes("SANKALP")&&!nsu.includes("SHAURYA")&&!nsu.includes("HANT")&&!nsu.includes("KAUSHAL"))
    {
        document.getElementById("checkname").innerHTML="I don't think that's your real name. Go ahead with your real name, there's nothing to lose.";
        document.getElementById("nameq").style.color="red";
        document.getElementById("nameq").style.border="2px solid red";
        nameisok=0;
    }
    else {
        //document.getElementById("checkname").innerHTML="Hmm I'll take that. <br> Thanks for your time, "+ ns+".";
        document.getElementById("nameq").style.color="black";
        document.getElementById("nameq").style.border="2.5px solid #f7b2ff";
        getusername();
       // nameisok=1;
        //formisok();
        }
    }
}

function formisok(){
     if (questionisok==1&&answerisok==1&&optionareok==1&&nameisok==1){
        document.getElementById("submitit").style.display="block";
        document.getElementById("submitbutton").disabled=false;
        document.getElementById("disabledsubmit").style.display="none";
    }
    else{
        //document.getElementById("disabledsubmit").style.display="block";
    }
 }
 function getusername(){
    if(localStorage.user==""||localStorage.user==null||localStorage.user==undefined||!localStorage.user){
        localStorage.setItem("user", document.getElementById("nameq").value);
        document.getElementById("checkname").innerHTML="<br> Thanks for your time, "+ localStorage.user+".";
    }
    else{
        if(localStorage.getItem("user")== document.getElementById("nameq").value){
            document.getElementById("checkname").innerHTML="<br> Hello and Thanks again, "+ localStorage.user+".";
            nameisok=1;
            formisok();
        }
        else{
            document.getElementById("checkname").innerHTML="Hmm does your name keep changing after a while? I don't think so, but I'll let you pass.";
            localStorage.setItem("user", document.getElementById("nameq").value);
            document.getElementById("nameq").style.color="#00cbbe";
            nameisok=1;
            formisok();
        }
    }
}
</script>


<footer><hr>This website has been entirely designed and developed by <span class="namemore">Akshat Oke</span>, with questions also added by (as of 04-07-2020) <span class="namemore">Kartik Gokhale</span>, <span class="namemore">Sahil Mahajan</span> and <span class="namemore">Chinmay Pimpalkhare</span>. There is no commercial interest and is created specifically for academic purposes only. I do not collect any personal data except your name (which is a part of a measure to reduce spamming). This website does not set any cookies. Bookmarks are stored on your device and not sent anywhere else.</footer>
</body>
</html>