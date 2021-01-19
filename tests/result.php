<!DOCTYPE html>
<html>
  <head>
    <title>Jeenius - Result</title>
    <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri|Andada|Vollkorn%20SC">
	<style>
	body{margin:0;
	line-height:1.5;
    text-align:center;
	}
	/* ///////////////// */
	#headerbar{
    	    font-size:10vw;
    	    display:flex;
    	    align-items: center:
    	    /* display-style:block; */
             height:8vh;
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
            }
      /* The Overlay (background) */
      .overlay {
      /* Height & width depends on how you want to reveal the overlay (see JS below) */   
      height: 100%;
      width: 0;
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
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
    #testname, #testnumber{
        font-family:'Amiri',serif;
    }
    #jeeniusheader{
        font-family:'Andada',serif;
    }
    .viewcard{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        border-radius:3px;
        border-bottom:2px solid #a4a4a4;
        transition: 0.3s;
        margin:15px 8px;
        padding:10px;
    }
    a.view{
        font-family:"Andada",serif;
        color:white;
        font-size:20px;
        max-width:65vw;
        border-radius:7px;
        text-decoration:none;
        margin: 20px auto;
        transition:0.4s;
        -webkit-transition:0.4s;
        padding:8px 8px;
    }
    a.view:hover{
        background-color:black !important;
        border:2px solid magenta;
    }
    .note{
        margin-left:40px;
        background-image:linear-gradient(to right, #a4a4a4, rgba(255,255,255,0));
        margin-right:10px;
        color:red;
        border-left:3px solid #186bc3;
        font-family:"Amiri", serif;
        font-size:18px;
    }
	</style>
  </head>
  
  <body onload="getscore();">
  <script>
  window.onload = function() {
  //document.getElementById('loader').style.display = 'none';
};
</script>

  <!-- Header bar and menu-->
  <div id="headerbar" class="headerbar">
  
  <span class="menu" id="testname" style="background-color: black; color: magenta; font-size: 3vh; width: auto; margin-left: 2vw;"></span>
<span id="jeeniusheader"style="text-align:center; color:white; font-size: 3.8vh; margin:auto; display-style: inline-block;">Jeenius</span>
<span class="menu" onclick="nav();"style="font-size:4vh;"><b> &#x2630</b></span>
</div>
<script>    
    document.getElementById("testname").innerHTML=localStorage.testname+" | Test 1";
    </script>
<div id="overlaynav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="https://jeenius.ga/index.php" >Home</a>
    <a href="http://jeenius.epizy.com/subjects/physics.php" onclick="soon();">Physics</a>
    <a href="http://jeenius.epizy.com/subjects/chemistry.php" onclick="soon();">Chemistry</a>
    <a href="http://jeenius.epizy.com/subjects/maths.php" onclick="soon();">Maths</a>
    <a href="http://jeenius.epizy.com/credits.html" onclick="soon();">Credits</a>
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
   <div style="height:12vw;"></div>
   
   <!-- Actual Content-->
   <div style="text-align:center;">
  <div style="margin:10px auto;font-size:2em; font-family:'Vollkorn SC',serif; color:#0cb589;"> Your Score:</div>
  <h1 id="score"><span id="grandscore"></span>/
  <span id="maxscore"></span></div>
  </h1>
  <div class="note" id="grandscorenote">Hmm</div>
  <div class="viewcard" style="background-image:linear-gradient(rgba(255,255,255,0), #1ad648);">
    Total Correct questions:<span id="correctquestions"></span>
  </div>
  <div class="viewcard" style="background-image:linear-gradient(rgba(255,255,255,0), #d22f2f);">
    Total Incorrect questions:<span id="incorrectquestions"></span>
  </div>
  <div class="viewcard" style="background-image:linear-gradient(rgba(255,255,255,0), #2edfd5);">
    Total Unattempted questions:<span id="unattemptedquestions"></span>
  </div>
  <hr style="width:60%; border-top:2px solid cyan;">
  <div style="font-size:1.7em; font-family:'Andada',serif;">Review your answers</div>
  <a href="https://jeenius.ga/tests/testresultp.php" class="view" style="background-color:#b55b13;">View Physics Questions</a><br><br>
  <a href="https://jeenius.ga/tests/testresultc.php" class="view" style="background-color:#23a260;">View Chemistry Questions</a><br><br>
  <a href="https://jeenius.ga/tests/testresultm.php" class="view" style="background-color:#14909d;">View Math Questions</a>
  <script>
    var maxscore=Number(localStorage.getItem("totalq"))*4;
    document.getElementById("maxscore").innerHTML=maxscore.toString();
    var filename1=localStorage.testname;
    console.log(filename1);
    var filename="/tests/"+localStorage.testname+".xml?";
    window.onload = function() {
        getscore();}
    function getscore(){
        var correctqnum=0;
        var incorrectqnum=0;
        var unattemptedqnum=0;
        console.log("hey");
        var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                var xmlDoc=this.responseXML;
                var p=xmlDoc.getElementsByTagName("grandscore")[0];
                //var thescore=Number(p.childNodes[0].nodeValue);
                var thescore=0;
                for (var i=0; i<(xmlDoc.getElementsByTagName("correct").length-1); i++){
                    if(xmlDoc.getElementsByTagName("correct")[i].childNodes[0].nodeValue=="correct"){
                        correctqnum+=1;
                        thescore+=4;
                    }
                    if(xmlDoc.getElementsByTagName("correct")[i].childNodes[0].nodeValue=="incorrect"&&xmlDoc.getElementsByTagName("markedop")[i].childNodes[0].nodeValue!="DNE"){
                        incorrectqnum+=1;
                        thescore-=1;
                    }
                    var f=xmlDoc.getElementsByTagName("markedop")[i].childNodes[0].nodeValue;
                    var g=xmlDoc.getElementsByTagName("correct")[i].childNodes[0].nodeValue;
                    if(f!="A"&&f!="B"&&f!="C"&&f!="D"){
                        unattemptedqnum+=1;
                    }
                }
                document.getElementById("correctquestions").innerHTML=correctqnum.toString();
                document.getElementById("incorrectquestions").innerHTML=incorrectqnum.toString();
                document.getElementById("unattemptedquestions").innerHTML=(unattemptedqnum+1).toString();

                document.getElementById("grandscore").innerHTML=thescore.toString();
                var percentage=thescore/maxscore*100;
                if(percentage<60){
                    document.getElementById("score").style.color="red";
                    document.getElementById("grandscorenote").innerHTML="Try to score more than 60% for a better rank.";
                }
                else{
                    document.getElementById("score").style.color="green";
                    document.getElementById("grandscorenote").innerHTML="Good job! You can always improve your score.";
                }
                }
            };
            
            xhttp.open("GET",filename + Math.random(),true);
            xhttp.send();
    }
    </script>
  <!--Bottom nav bar
  <div style="height:4vh;"></div>
  <div style="text-align:center;">
  <div class="navbar">
  <a href="/daily/physicsq.html" >Physics</a>
  <a href="/daily/chemistryq.php" >Chemistry</a>
  <a href="/daily/mathq.html" >Math</a>
 </div>
 </div>
 -->
<!--Buttons over-->
  </body>
  </html>