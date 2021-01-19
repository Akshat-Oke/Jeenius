<?php
    header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

if(isset($_GET['q'])){
    $set=1;
    if(is_numeric($_GET['q'])){
    $q=$_GET['q']-1;
    }
}
else{
    $set=0;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Jeenius - Chemistry</title>
    <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya%20SC|Amiri">
	<style>
    img{max-width:100%; height:auto;}
    html{
        scroll-behavior: smooth; // Animates scrolling - "smooth" scrolling
    }
	body{margin:0;
	line-height:1.5;
	}
     ::-moz-selection { /* Code for Firefox */
  color: white;
  background: #bd14b9;
}

::selection {
   color: white;
  background: #bd14b9;
}
	/* ///////////////// */
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9999999; /* Sit on top */
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
              #toast {
    visibility: hidden;
    max-width: 50px;
    height: 50px;
    margin: auto;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    position: fixed;
    z-index: 1;
    left: 0;right:0;
    bottom: 40px;
    font-size: 17px;
    white-space: nowrap;
}
#toast #img{
	width: 50px;
	height: 50px;
    float: left;
    padding-top: 16px;
    padding-bottom: 16px;
    box-sizing: border-box;
    background-color: #111;
    color: #fff;
}
#toast #desc{
    color: #fff;
    padding: 16px;
    overflow: hidden;
	white-space: nowrap;
}

#toast.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, expand 0.7s 0.5s,stay 3s 1s, shrink 0.5s 8s, fadeout 0.5s 8.5s;
    //animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s;
}
#toast.getout{
    animation: shrink 0.5s 4s, fadeout 0.5s 4.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 40px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 40px; opacity: 1;}
}

@-webkit-keyframes expand {
    from {min-width: 50px} 
    to {min-width: 350px}
}

@keyframes expand {
    from {min-width: 50px}
    to {min-width: 350px}
}
@-webkit-keyframes stay {
    from {min-width: 350px} 
    to {min-width: 350px}
}

@keyframes stay {
    from {min-width: 350px}
    to {min-width: 350px}
}
@-webkit-keyframes shrink {
    from {min-width: 350px;} 
    to {min-width: 50px;}
}

@keyframes shrink {
    from {min-width: 350px;} 
    to {min-width: 50px;}
}

@-webkit-keyframes fadeout {
    from {bottom: 40px; opacity: 1;} 
    to {bottom: 0px; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 40px; opacity: 1;}
    to {bottom: 0px; opacity: 0;}
}

.spinner {
  /* Spinner size and color */
  margin-top:-5px;
  width: 35px;
  height: 35px;
  border-top-color: #444;
  border-left-color: #444;

  /* Additional spinner styles */
  animation: spinner 400ms linear infinite;
  border-bottom-color: transparent;
  border-right-color: transparent;
  border-style: solid;
  border-width: 2px;
  border-radius: 50%;  
  box-sizing: border-box;
  display: inline-block;
  vertical-align: middle;
}

/* Animation styles */
@keyframes spinner {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.spinner-blue {
  border-top-color: #09d;
  border-left-color: #09d;
}
.spinner-slow {
  animation: spinner 1s linear infinite;
}
      /* The Overlay (background) */
      .overlay {
      /* Height & width depends on how you want to reveal the overlay (see JS below) */   
      height: 100%;
      width: 0;
      position: fixed; /* Stay in place */
      z-index: 200; /* Sit on top */
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
      margin-top: 15px; /* 30px top margin to avoid conflict with the close button on smaller screens */
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
	/* ///////////////// */
	
	.navbar {
  background-color: #333;
  overflow: hidden;
  position: fixed;
  bottom: 0;
  width: 100%;
  margin: 0;
}

/* Style the links inside the navigation bar */
.navbar a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 6px 6vw;
  text-decoration: none;
  font-size: 14px;
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
/*Question cards */

	div.pcard{
		clear:both;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		border-radius: 5px;
		height:50%;
		overflow: scroll;
		margin: 2px 8px;
		}
	div.question{
		padding: 2px 16px;
    }
    #snackbar{
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #111;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #b630f7;
    position: absolute;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}

    p{
        margin-left:10px;
        //padding:10px;
        margin:4px;
    }
    label{
        width:90%;
        padding-bottom:15px;
    }
    #hrcolor{
        border-top: 2px solid #2697f2;
        transition:1s;
    }
    #gotoqnumber{
        text-align:center;
        width:30px;
        padding:6px;
        transition:0.5s;
        -webkit-transition:0.5s;
        border:2px solid lightblue;
        outline:none;
    }
    #gotoqnumber:focus{
        width:40px;
        border:2px solid blue;
    }
     #dropdownnav{
        text-align:center;
        color:white;
        font-size: 2.8vh;
        margin:auto;
        display-style: inline-block;
        padding:6px 12px;
        background-color:white;
        border:2px solid #29d6ff;//bluelight
        border-collapse:separate;
        border-radius:5px;
    }
#dropdowncontent.hidden{
        //display:none;
        margin:auto;
        margin-bottom:5px;
        margin-top:0px;
        border:none;
        max-width:80vw;
        text-align:center;
        max-height:0;
        overflow-y:hidden;
        transition: max-height 0.8s;
    }
    #dropdowncontent.dark{
        background-color:#212121;
        margin:auto;
        margin-bottom:5px;
        margin-top:0px;
        border:none;
        max-width:80vw;
        text-align:center;
        max-height:0;
        overflow-y:hidden;
        transition: max-height 0.8s;
        transition:0.8s;
        -webkit-transition:0.8s;
    }
    #dropdowncontent.active {
    max-height: 500px;
    border:3px solid #33b5e5;
    }
    #dropdowncontent button{
        //padding:5px 8px;
        width:40px;
        height:30px;
        border:2px solid #20e4ad;
        border-radius:5px;
        background-color:white;
        color:black;
        margin:5px;
        margin-bottom:7px;
        transition:0.3s;
        -webkit-transition:0.3s;
    }
    #dropdowncontent button:hover{
        background-color:#20e4ad !important;
        color:white !important;
        border:2px solid teal !important;
    }
    #dropdowncontent button.current{
        background-color:#20e4ad !important;
        color:white !important;
        border:2px solid teal !important;
    }
    #dropdowncontent button.bookmarked{
        background-color:#ea66e4 !important;//light purple
    }
    button{outline:none; transition:0.4s; -webkit-transition:0.4s;}

    button.navbut:active{
        background-color:black !important;
        color:magenta !important;
    }
    #solutionbutton{
        background-color:white;
        color:blue;
        height:40px;
        width:65vw;
        box-shadow: 0 4px 8px 3px rgba(0,0,0,0.2);
		border-radius: 5px;
        transition:0.7s;
        -webkit-transition:0.7s;
        border:0px solid white;
        font-size:24px;
        letter-spacing:2px;
        font-family:"Alegreya SC", serif;
        margin-bottom:1vh;
    }
    #solutionbutton:active{
        background-color:#d6d6d6;
        box-shadow: 0 0px 0px 0 rgba(0,0,0,0.2);
    }
    #solution{
        font-family:"Amiri", serif;
        font-size:20px;
        margin-left:20px;
        max-width:85vw;
        padding-left:8px;
        border-left:3px solid #2ee8bf;
    }
    .enter{
        z-index:10;
  padding:8px;
  color:#c420e5;
  background-color:white;
  font-size:16px;
  border:2px solid #c420e5;
  border-radius:6px;
  transition:0.5s;
  -webkit-transition:0.5s;
    }
    .clear{
         z-index:10;
  padding:8px;
 background-color:#c420e5;
        color:white;
  font-size:16px;
  border:2px solid #c420e5;
  border-radius:6px;
  transition:0.5s;
  -webkit-transition:0.5s;
        margin-right:8px;
    }
    .enter:active{
       color:#c420e5;
  background-color:white;
    }
   .clear:hover{
         color:#c420e5 !important;
  background-color:white !important;
    }
    #report{
        margin:50%;
        width:40%;
        margin:5px;
        color:red;
        transition:0.5s;
        -webkit-transition:0.5s;
    }
    #report:hover{
        color:green;
    }
	</style>
  </head>
  
  <body>
  <div id="snackbar">Loading...</div>
  <script>
  var hrefparameter='<?php if($set==1){echo $q;};?>';
  console.log(hrefparameter);
  function checkhrefandgo(){
      if(!isNaN(hrefparameter)){
          hrefparameter=Number(hrefparameter);
          if(hrefparameter<=totalq){
          setqnumberandgo(Number(hrefparameter));
          }
      }
      else if(hrefparameter==""){
          alert('URL question jump parameter is not a number');
      }
  }
  function resume(){
      console.log("resume"+localStorage.resumeqc);

      if(localStorage.resumeqc!=undefined&&localStorage.resumeqc!=null&&localStorage.resumeqc!=false)
            {
          setqnumberandgo(Number(localStorage.resumeqc));
          qnumber=Number(localStorage.resumeqc);
        }
        checkhrefandgo();
    }
    function launch_toast() {
  // Get the snackbar DIV
  var x = document.getElementById("snackbar");
  x.style.display="block";
  // Add the "show" class to DIV
  x.className = "show";

  // After 3 seconds, remove the show class from DIV
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function hide_toast(){
    document.getElementById("snackbar").style.display="none";
}
      var numberofq=0;
      var docloaded=0;
  window.onload = function() {
  getbookmarklist();
};

function getbookmarklist(){
    document.getElementById("bookmarklist").innerHTML="";
    //if(docloaded==1){
        if(qnumber<20){
    for(var i=0; i<totalq; i++){
      var y="qc"+i;
      var ya=localStorage.getItem(y);
      if(ya=="1"){
      var markedq = document.createElement("li");
      var textnode = document.createTextNode("Question "+(i+1));
      markedq.appendChild(textnode);
      document.getElementById("bookmarklist").appendChild(markedq);
      document.getElementById("qp"+i).classList.add("bookmarked");
     // }
      }
    }
        }
     else if(qnumber>19){
         for(var i=0; i<qnumber; i++){
      var y="qc"+i;
      var ya=localStorage.getItem(y);
      if(ya=="1"){
      var markedq = document.createElement("li");
      var textnode = document.createTextNode("Question "+(i+1));
      markedq.appendChild(textnode);
      document.getElementById("bookmarklist").appendChild(markedq);
      document.getElementById("qp"+i).classList.add("bookmarked");
            }
        }
    }
}
</script>

  <!-- Header bar and menu-->
  <div id="headerbar" class="headerbar">
  
  <span class="menu" id="modalbutton" style="background-color: black; color: magenta; font-size: 3vh; width: auto; margin-left: 2vw;">Book-<div style=" margin-top:-6px; "></div>marks</span>
<span style="text-align:center; color:white; font-size: 8vh; margin:auto; display-style: inline-block;"> Jeenius</span>
<span class="menu" onclick="nav();"><div class="menuicon"></div><div class="menuicon"></div><div class="menuicon"></div></span>
</div>

<div id="overlaynav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="http://jeenius.ga/index.php" >Home <i class="fas fa-home"></i></a>
    <a href="http://jeenius.ga/index.php" class="active">Questions <i class="fas fa-book"></i></a>
    <a href="http://jeenius.ga/subjects/physics.php" onclick="soon();">Physics <i class="fas fa-atom"></i></a>
    <a href="http://jeenius.ga/subjects/chemistry.php" onclick="soon();">Chemistry <i class="fas fa-flask"></i></a>
    <a href="http://jeenius.ga/subjects/maths.php" onclick="soon();">Maths <i class="fas fa-calculator"></i></a>
    <a href="http://jeenius.epizy.com/credits.html" onclick="soon();">Credits <i class="fas fa-align-center"></i></a>
  </div>
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
</script>
   <!-- Navigation ends -->
  <div style="height:8.7vh;"></div>
   <div style="font-family:'Alegreya',serif; font-size:16px; color:blue;margin-bottom:-4vh; text-align:center;padding-bottom:-3vh;">
    Page Views:
    <span style="font-size:20px; color:magenta;font-weight:bold;">
    <?php 
    $newuser="New! \n";
$myfile1 = fopen("newchemistryq.txt", "a") or die("Unable to open file!");
   fwrite($myfile1, $newuser);
   fclose($myfile1);
    $file3="newchemistryq.txt";
$linecount = 0;
$handle = fopen($file3, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}
fclose($handle);
echo $linecount;
?></span> <span style="font-size:10px;">(since 03-Aug-2020)</span><hr style="width:75%;"></div>
   <!-- Bookmarks modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
      <div style="font-size:1.2em; color:#00cbbe;" id="modalwelcome"></div>
      <h4>Bookmarks<span class="close">&times;</span></h4>
    <p>
        <ul id="bookmarklist">
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
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  getbookmarklist();
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
   <!-- Actual Content-->
   <h1 style="text-align:center; margin-bottom:-3px;"> Chemistry</h1>

    <div style="text-align:center;">
  <button onclick="hey();" id="dropdownnav">
              <span id="navqnumber" style="color:black;">0</span> <span id="dropdownicon"><i style="color:#33b5e5;" class="fas fa-caret-down"></i></span>
            </button>
    <div style="text-align:center;">
    <div id="offline" style="font-size:24px; color:red;"></div> <script>
    window.addEventListener('online', updateOnlineStatus);
            window.addEventListener('offline', updateOfflineStatus);
            function updateOfflineStatus(){
               document.getElementById("offline").innerHTML="Network lost.";
            }
            function updateOnlineStatus(){
                document.getElementById("offline").innerHTML="";
            }
            </script>
        <div id="dropdowncontent" class="hidden">
            <h3 style="color:#2bdff0;" id="nameindropdown"></h3>
                    <div id="dropdownq"></div>
        </div>
    </div>
    <script>
        function createnavbuttons(){
            document.getElementById("dropdownq").innerHTML="";
            console.log("create");
                for (var i=0; i<totalq; i++){
                  (function(){
                      var btn=document.createElement("BUTTON");
                      btn.className="dropdownbutton";
                      btn.id="qp"+i;
                      var t=i;
                      btn.innerHTML=(i+1);
                      btn.addEventListener("click", function() { setqnumberandgo(t); console.log("i is = "+t); hey();}, false);
                      var pdrop=document.getElementById("dropdownq");
                      pdrop.appendChild(btn);
                }());
            }
           // setnavbuttons();
           resume();
        }
        function hey(){
              window.scrollTo(0, 0);
              var thisone=document.getElementById("dropdowncontent");
              if (thisone.className === "hidden") {
                thisone.className = "hidden  active";
                document.getElementById("dropdownicon").innerHTML="<i style= \"color:#ff9845; \" class= \"fas fa-caret-up \"></i>";
                 }
                  else {
                 thisone.className = "hidden";
                 document.getElementById("dropdownicon").innerHTML="<i style= \"color:#33b5e5; \" class= \"fas fa-caret-down \"></i>";
                }
          }
    </script>
   </div>

   <hr style="width:50%;">
   <div id="loader" class="loader"></div>

  <div id="p1">
  <button class="navbut" onclick="loadDocprevious(); clearall(); enableop(); setbookmarkicon();" style="padding:10px; border-style:none; float: left; margin: 10px 12px; color:#f9d3ff; background-color:#9711b0; border-radius:7px; font-size:16px;">Previous </button>
  
  <button class="navbut" onclick="loadDocnext(); clearall(); enableop(); setbookmarkicon();" style="padding:10px; border-style:none; float: right; margin: 10px 12px; color:#d3fdff; background-color:#9711b0;border-radius:7px; font-size:16px;"> Next </button>
 
  <br>
  <div class="pcard" id="qcard">
  <div class="question">
  <div style="margin-bottom:10px;">
        <span style="float:left; font-size:1.17em;"><b> Question <span id="headernumber">0</span></b>
        <span id="resulticon"></span>
        </span>
        <span id="bookmarkicon" onclick="bookmarkquestion(); getbookmarklist();" style="float:right; transition:0.4s;font-size: 25px;margin-right:10px;"></span>
  </div>
  <br>
  <span style="text-align:left; font-size:15px;" id="result"></span>
  <hr id="hrcolor" style="width:100%; margin-top:5px;">
  <div id="actualquestion"><!--<button id="selectquestion" onclick="setqnumberandgo(); setbookmarkicon();"style="padding:10px;color:white; border-style:none; margin: 5px 12px;  background-color:#9711b0;">Go to Question </button>  --><p style="color:#2f77ff;">Enter the question number above and hit "Go". </p>
  <p><span style="color:green;"> Bookmark </span> question by clicking on the bookmark icon. (will appear on loading a question)</p>
  <p> To view your bookmarked questions click on <span style="color:magenta";>Bookmarks</span> to the top left.</p>
  <p>Bookmarks will be remembered forever, even after closing the browser.</p>
  <button id="selectquestion" onclick="gotolast(); setbookmarkicon();" 
   style="padding:8px 11px;color:white; border-style:none; margin: 5px 12px;  background-color:#9711b0;">Go to last question</button><br>(New questions are added at the end)
    </div>
  </div>
  </div>
  <div class="answer" style=" margin: 20px 6px; ">
      <p>
    <input type="radio" id="p1a" name="pa" value="a">
    <label for="p1a"><span id="option1"></span> </label>
  </p>
  <p>
    <input type="radio" id="p1b" name="pa" value="b"><label for="p1b"><span id="option2"></span> </label>
  </p>
     <p>
    <input type="radio" id="p1c" name="pa" value="c"><label for="p1c"><span id="option3"></span> </label>
  </p>
  <p>
       <input type="radio" id="p1d" name="pa" value="d"><label for="p1d"><span id="option4"></span> </label>
  </p>
  <!--<span style="margin:30px;"> <input type="radio" id="p1a" name="pa" value="a"><label for="p1a"><span id="option1"></span> </label> </span><br>
  <span style="margin:30px;"> <input type="radio" id="p1b" name="pa" value="b"><label for="p1b"><span id="option2"></span> </label> </span><br>
  <span style="margin:30px;"> <input type="radio" id="p1c" name="pa" value="c"><label for="p1c"><span id="option3"></span> </label> </span><br>
  <span style="margin:30px;"> <input type="radio" id="p1d" name="pa" value="d"><label for="p1d"><span id="option4"></span> </label> </span>
  <br>-->

  <div style="text-align:center;" class="sticky">
  
  <button class="navbut clear" onclick="clearall();" > Clear All</button>
  <button class="navbut enter" onclick="ans(); setbookmarkicon();"> Enter</button>
 </div>
 
  <div id="result"></div>
  </div>
  </div>
  <script>
  //var numberofq=0;
  var theanswer;
  var qnumber=-1;
  var totalq=2;
  var convertedop="a";
  var bookmarktrue=0;
  var setqbookmark=-1;//to prevent bookmark icon showing in GoToQuestion start page
  var bookmarkthis;
   function setbookmarkicon(){//for next, previous and enter buttons
       if(setqbookmark==-1){
           bookmarkthis="qc"+qnumber;
           if(localStorage.getItem(bookmarkthis)=='1'){
               document.getElementById("bookmarkicon").innerHTML="<i class= \"fas fa-bookmark \"></i>";
           }
           else{
               document.getElementById("bookmarkicon").innerHTML="<i class= \"far fa-bookmark \"></i>";
           }
       }
   };
   function bookmarkquestion(){//for the bookmark icon when clicked
       if(bookmarktrue==0){
           bookmarktrue=1;
           localStorage.setItem(bookmarkthis, "1");
           document.getElementById("bookmarkicon").innerHTML="<i class= \"fas fa-bookmark \"></i>";
           document.getElementById("qp"+qnumber).classList.add("bookmarked");
       }
       else{
           bookmarktrue=0;
           localStorage.removeItem(bookmarkthis);
           document.getElementById("bookmarkicon").innerHTML="<i class= \"far fa-bookmark \"></i>";
           document.getElementById("qp"+qnumber).classList.remove("bookmarked");
       }
   }
   function displaybookmarks(){

   }
   function loadDoc() {
  var xhttp = new XMLHttpRequest();
  //xhttp.overrideMimeType("text/xml");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    hide_toast();
    }
    else{launch_toast();}
  };
  xhttp.open("GET","cd.xml?" + Math.random(),true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
  
 }

 function loadDocnext() {
     if(qnumber>=0){
     document.getElementById("qp"+qnumber).classList.remove("current");}
     ++qnumber;
  var xhttp = new XMLHttpRequest();
  //xhttp.overrideMimeType("text/xml");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    hide_toast();
    }
    else{launch_toast();}
  };
  xhttp.open("GET","cd.xml?" + Math.random(),true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
  
 }

 function loadDocprevious() {
     if(qnumber>=0){
     document.getElementById("qp"+qnumber).classList.remove("current");}
     --qnumber;
  var xhttp = new XMLHttpRequest();
  //xhttp.overrideMimeType("text/xml");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myFunction(this);
    hide_toast();
    }
    else{launch_toast();}
  };
  xhttp.open("GET","cd.xml?" + Math.random(),true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
 }

window.onload=function(){
     console.log("last one");
 	var xhttp = new XMLHttpRequest();
 	xhttp.onreadystatechange = function() {
 		if (this.readyState == 4 && this.status == 200) {
 			//mylastone(this);
             countTheq(this);
           hide_toast();
    }
    else{launch_toast();}
 	};
 	xhttp.open("GET", "/daily/cd.xml?" + Math.random(), true);
 	//xhttp.open("GET", "md1.xml", true);
 	xhttp.send();
 }
function countTheq(xml2){
     console.log("yo count");
     var xmlDoc1 = xml2.responseXML;
 	totalq = xmlDoc1.getElementsByTagName("q").length;
     createnavbuttons();
     getbookmarklist();
 }

  function gotolast(){
      var xhttp = new XMLHttpRequest();
  //xhttp.overrideMimeType("text/xml");
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    mylastone(this);
    hide_toast();
    }
    else{launch_toast();}
  };
  xhttp.open("GET","cd.xml?" + Math.random(),true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
  };

  function mylastone(xml2){
 var xmlDoc1 = xml2.responseXML;
      qnumber = xmlDoc1.getElementsByTagName("q").length-1;
      
 //loadDoc();
  myFunction(xml2);
  };
  function setqnumberandgo(qnum) { //for navigation
 	//qnumber = (Number(document.getElementById("gotoqnumber").value) - 1);
     if(qnumber>=0){
     document.getElementById("qp"+qnumber).classList.remove("current");}
 	qnumber=qnum;
    loadDoc();
    clearall(); enableop(); setbookmarkicon();
 }
 function myFunction(xml) {
     docloaded=1;
     document.getElementById("hrcolor").style.border="2px solid #2697f2";
     document.getElementById("result").innerHTML="";
     document.getElementById("resulticon").innerHTML="";
  var xmlDoc = xml.responseXML;
      numberofq = xmlDoc.getElementsByTagName("q").length;
  var x = xmlDoc.getElementsByTagName("q");
  var thequestion= x[qnumber].getElementsByTagName("qq")[0].childNodes[0].nodeValue;
  var op1= x[qnumber].getElementsByTagName("qq")[1].childNodes[0].nodeValue;
  var op2= x[qnumber].getElementsByTagName("qq")[2].childNodes[0].nodeValue;
  var op3= x[qnumber].getElementsByTagName("qq")[3].childNodes[0].nodeValue;
  var op4= x[qnumber].getElementsByTagName("qq")[4].childNodes[0].nodeValue;
  theanswer= x[qnumber].getElementsByTagName("qq")[5].childNodes[0].nodeValue;
 if(x[qnumber].getElementsByTagName("imagetrue")[0]!=undefined||x[qnumber].getElementsByTagName("imagetrue")[0]!=null){
  var isimagetrue=x[qnumber].getElementsByTagName("imagetrue")[0].childNodes[0].nodeValue;
  if(isimagetrue=="true"){
      document.getElementById("actualquestion").innerHTML="";
      imagesrc= x[qnumber].getElementsByTagName("qq")[6].childNodes[0].nodeValue;
      document.getElementById("actualquestion").innerHTML= "<img src="+imagesrc+" alt= \"Question image \"> <br>";
      document.getElementById("actualquestion").innerHTML += thequestion;
  }
  else{
      document.getElementById("actualquestion").innerHTML = thequestion;
  }
 }
 else{
      document.getElementById("actualquestion").innerHTML = thequestion;
  }

  convertop();
  document.getElementById("option1").innerHTML = op1;
  document.getElementById("option2").innerHTML = op2;
  document.getElementById("option3").innerHTML = op3;
  document.getElementById("option4").innerHTML = op4;
  
  document.getElementById("actualquestion").style.display="block";
  document.getElementById("loader").style.display="none";
  document.getElementById("headernumber").innerHTML=qnumber+1;
  MathJax.typeset();
  localStorage.setItem("resumeqc",qnumber);
  document.getElementById("qp"+qnumber).classList.add("current");
     document.getElementById("navqnumber").innerHTML=(qnumber+1).toString();
     document.getElementById("solution").innerHTML="";
    document.getElementById("author").innerHTML="";
    setReportHref();
 }    
      function ans(){
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            document.getElementById("qcard").scrollTop = 0;
            var opele=document.getElementsByName("pa");
            var randomnum=Math.floor(Math.random() * (4 - 1)) + 1;
            if(opele[0].checked==false&&opele[1].checked==false&&opele[2].checked==false&&opele[3].checked==false){
                if(randomnum==1){
                document.getElementById("result").innerHTML="<span style= \"color:#33b5e5; \"><b>You're funny!</b> But an option must be selected first.</span>";
                }
                else if(randomnum==2){
                    document.getElementById("result").innerHTML="<span style= \"color:#33b5e5; \"><b>Ha!</b> You forgot something.</span>";
                }
                else if(randomnum==3){
                    document.getElementById("result").innerHTML="<span style= \"color:#33b5e5; \"><b>What?</b> I didn't catch that. Did you select an option first?</span>";
                }
            }
           else if(document.getElementById(theanswer).checked == true){
              //convertop();
              document.getElementById("hrcolor").style.border="2px solid green";
              document.getElementById("result").innerHTML="<span style= \"color:green; \"><i class= \"fas fa-check-circle \"></i><b>Correct!</b> Press Next to continue.</span>";
              document.getElementById("resulticon").innerHTML="<span style= \"color:green; \"><i class= \"fas fa-check \"></i></span>";
              //document.getElementById("actualquestion").style.display="none";
              }
              else{document.getElementById("result").innerHTML="<span style= \"color:red; \"><i class= \"fas fa-times-circle \"></i>Oops, wrong answer!<br> Correct is <b>"+convertedop+"</b></span>";
              document.getElementById("resulticon").innerHTML="<span style= \"color:red; \"><i class= \"fas fa-times-circle \"></i></span>"
              document.getElementById("hrcolor").style.border="2px solid red";
              disableop();
              }
          }
      

    function clearall(){
        var ele = document.getElementsByName("pa");
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
    };

    function disableop(){
        var elem = document.getElementsByName("pa");
   for(var i=0;i<elem.length;i++)
      elem[i].disabled = true;
    };

    function enableop(){
        var elemm = document.getElementsByName("pa");
   for(var i=0;i<elemm.length;i++)
      elemm[i].disabled = false;
    };

     function convertop(){

        if(theanswer=="p1a"){
            convertedop="A";
        }
        else if(theanswer=="p1b"){
            convertedop="B";
        }
        else if(theanswer=="p1c"){
            convertedop="C";
        }
        else if(theanswer=="p1d"){
            convertedop="D";
            };
     };
      </script>
  <!--Solution-->

<div style="text-align:center;">
<button id="solutionbutton"onclick="showsol();"><i class="fas fa-align-left"></i>  Solution</button>
</div>
<div id="solution">
</div>
<div id="author" style="font-family:'Alegreya SC',serif; font-size:16px;text-align:center;width:100%;"></div>
        <div style="text-align:center;">
        <a id="report" href="#" style="font-family:'Amiri',serif; font-size:20px;text-align:center;">Report Question</a> 
        </div>
        <script>
        function setReportHref(){
            var url = "https://jeenius.ga/report.php?subject=chemistry&question=" + (qnumber+1);
            var element = document.getElementById('report');
            element.setAttribute("href",url);
        }
        </script>
<div style="height:6vh;"></div>
<script>
var thesolution;
function showsol() {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var xmlDoc= this.responseXML;
             var x = xmlDoc.getElementsByTagName("sc"+qnumber)[0];
              //thesolution= x[0].childNodes[0].nodeValue;
              if(x!=undefined&&x!=null&&x!=""){
                  if(x.getElementsByTagName("imagetrue")[0]!=undefined||x.getElementsByTagName("imagetrue")[0]!=null){
                  document.getElementById("solution").innerHTML= "<img src="+x.getElementsByTagName("imagetrue")[0].childNodes[0].nodeValue+" alt= \"Solution image \"> <br>";
                  thesolution= x.getElementsByTagName("solution")[0].childNodes[0].nodeValue;
                  document.getElementById("solution").innerHTML+=thesolution;
                  setTimeout(function(){window.scrollTo(0,document.body.scrollHeight);},1000);
                  }
                  else{thesolution= x.getElementsByTagName("solution")[0].childNodes[0].nodeValue;
                  document.getElementById("solution").innerHTML=thesolution;
                  }
                  document.getElementById("author").innerHTML= x.getElementsByTagName("author")[0].childNodes[0].nodeValue;
              
              }
              else{
                  document.getElementById("solution").innerHTML="No solution available for this question.";
              }
              window.scrollTo(0,document.body.scrollHeight);
        hide_toast();
        MathJax.typeset();
    }
    else{launch_toast();}
	};
	xhttp.open("GET", "/daily/solutions.xml?" + Math.random(), true);
	//xhttp.open("GET", "md1.xml", true);
	xhttp.send();
};
</script>
  <!--Bottom nav bar-->
 
  <div style="text-align:center;">
  <div class="navbar" style="z-index:99;">
  <a href="/daily/physicsq.php" >Physics</a>
  <a href="javascript:void(0);" style="background-color:#000000;">Chemistry</a>
  <a href="/daily/mathq.php" >Math</a>
 </div>
 </div>
 <!--Buttons over-->
      <div id="toast"><div id="img"><span class="spinner spinner-blue spinner-slow"></span></div><div id="desc">One moment...</div></div>
<script>
    var x;
    function launch_toast() {
     x = document.getElementById("toast")
    x.className = "show";
    x.style.display="block";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
}
function hide_toast(){
    document.getElementById("toast").style.display="none";
     setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
//resume
</script>
  </body>
  </html>