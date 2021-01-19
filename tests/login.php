<?php
    header("Cache-Control: must-revalidate"); // HTTP 1.1.
header("Pragma: must-revalidate"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
$here="newlogin.txt";
 $myfile1 = fopen($here, "a") or die("Unable to open file!");
      fwrite($myfile1,"New user! \n");
      fclose($myfile1);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jeenius - LOGIN</title>
        <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Vollkorn%20SC|Noto%20Serif%20SC|Alegreya">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
</script>
    <style>
        html{
        scroll-behavior: smooth; // Animates scrolling - "smooth" scrolling
    }
                button.add-to-home{
                    background-color:#e541d4;//magenta light
                    color:white;
                    border:2px solid #c741e5;//purple
                    font-family:'Alegreya', serif;
                    font-size:16px;
                    transition:0.4s;
                    -webkit-transition:0.4s;
                }
                button.add-to-home:hover{
                    background-color:white;
                    color:#e541d4;
                }
        body{
            margin:0;
            background-color:black;
            line-height:1.5;
            color:rgba(255,255,255,0.9);
            text-align:center;
        }
        .card{
            //position:fixed;
            //top:18%;
            margin:12% auto;
            margin-bottom:10px;
            max-width:80%;
            //box-shadow: 0 4px 8px 0 rgba(255,255,255,0.2), 0 -4px -9px 0 rgba(255,255,255,0.2);
            box-shadow:0 -4px 5px 0 rgba(66,196,244,0.6), 0 4px 6px 0 rgba(66,196,244,0.4) ;
            padding:20px;
            padding-top:25px;
            text-align:center;
            overflow-x:hidden;
            transition:0.4s;
            -webkit-trnasition:0.4s;
        }
        .card:hover{
             box-shadow:0 -8px 8px 0 rgba(31, 220, 159,0.6), 0 7px 9px 0 rgba(31, 220, 159,0.4) ;
        }
        input[type=text], input[type=number]{
            padding:5px 10px;
        }
        input,
span,
label,
textarea {
  font-family: 'Ubuntu', sans-serif;
  display: block;
  margin: 10px;
  padding: 5px;
  border: none;
  font-size: 22px;
}

textarea:focus,
input:focus {
  outline: 0;
}
/* Question */

input.question,
textarea.question {
  font-size: 25px;
  font-weight: 300;
  border-radius: 2px;
  margin: 0;
  border: none;
  width: 80%;
  background: rgba(0, 0, 0, 0);
  transition: padding-top 0.2s ease, margin-top 0.2s ease;
  overflow-x: hidden; /* Hack to make "rows" attribute apply in Firefox. */
}
/* Underline and Placeholder */

input.question + label,
textarea.question + label {
  display: block;
  position: relative;
  white-space: nowrap;
  padding: 0;
  margin: 0;
  width: 10%;
  border-top: 1px solid red;
  -webkit-transition: width 0.4s ease;
  transition: width 0.4s ease;
  height: 0px;
}

input.question:focus + label,
textarea.question:focus + label {
  width: 80%;
}

input.question:focus,
input.question:valid {
  padding-top: 40px;
}


input.question:focus + label > span,
input.question:valid + label > span {
  top: -80px;
  font-size: 20px;
  color: #333;
}



input.question:valid + label,
textarea.question:valid + label {
  border-color: green;
}

input.question:invalid,
textarea.question:invalid {
  box-shadow: none;
}

input.question + label > span,
textarea.question + label > span {
  font-weight: 300;
  margin: 0;
  position: absolute;
  color: #8F8F8F;
  font-size: 25px;
  top: -44px;
  left: 0px;
  z-index: -1;
  -webkit-transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
  transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
}

input[type="submit"] {
  -webkit-transition: opacity 0.2s ease, background 0.2s ease;
  transition: opacity 0.2s ease, background 0.2s ease;
  display: block;
  opacity: 0;
  margin: 10px 0 0 0;
  padding: 10px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background: #EEE;
}

input[type="submit"]:active {
  background: #999;
}
#submitt{
    //display:none;
}
#submitt.now {
  -webkit-animation: appear 1s forwards;
  animation: appear 1s forwards;
}
input.question:valid ~ input[type="submit"], textarea.question:valid ~ input[type="submit"]{
    -webkit-animation: appear 1s forwards;
  animation: appear 1s forwards;
}
input.question:invalid ~ input[type="submit"], textarea.question:invalid ~ input[type="submit"] {
  display: none;
}

@-webkit-keyframes appear {
  100% {
    opacity: 1;
  }
}

@keyframes appear {
  100% {
    opacity: 1;
  }
}
input[type=submit]{
    //background-color:white;
}
#loginheader{
    color:black;
}
div.header{
    color:black;
    /*
    animation-name:colorful;
    animation-duration:4.5s;
    animation-delay:0s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;*/
}
.header1{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:0s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    font-size:2em;
    font-family: 'Vollkorn SC', serif;
    white-space:nowrap;
    display:inline-block;
}
        .header2{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:0.4s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    font-size:2em;
    font-family: 'Vollkorn SC', serif;
    white-space:nowrap;
    display:inline-block;
}
        .header3{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:0.8s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    font-size:2em;
    font-family: 'Vollkorn SC', serif;
    white-space:nowrap;
    display:inline-block;
}
        .header4{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:1.6s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    font-size:2em;
    font-family: 'Vollkorn SC', serif;
    white-space:nowrap;
    display:inline-block;
}
        .header5{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:2.4s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    font-size:2em;
    font-family: 'Vollkorn SC', serif;
    white-space:nowrap;
    display:inline-block;
}
        .header6{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:3.2s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    font-size:2em;
    font-family: 'Vollkorn SC', serif;
    white-space:nowrap;
    display:inline-block;
}
        .header7{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:4s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    font-size:2em;
    font-family: 'Vollkorn SC', serif;
    white-space:nowrap;
    display:inline-block;
}
@keyframes colorful{
    0%{color:#e53361;}
    9%{color:#e5339f;}
    18%{color:#e533d1;}
    27%{color:#e233e5;}
    36%{color:#b433e5;}
    45%{color:#7a33e5;}
    53%{color:#5233e5;}
    64%{color:#333be5;}
    73%{color:#3274d5;}
    86%{color:#32add5;}
    100%{color:#32e1d3;}
}
a{
    color:magenta;
}


div.info{
    text-align:left;
    margin-left:20px;
    margin-right:20px;
    padding:15px;
    border-left:3px solid #1fdc9f;
    overflow:hidden;
    transition:max-height 0.4s;
    -webkit-transition:0.4s;
}
div.info-title{
    font-size:1.9em;
    margin-left:8px;
    color:rgba(255,255,255,0.9);
    font-family:"Thasadith", serif;
}
div.info-answer{
    font-size:1.15em;
    margin-left:15px;
    color:rgba(255,255,255,0.85);
    font-family:"Alegreya", serif;
    border-left: 2px solid #f56d1d;
    padding:10px;
}
#loader{
    background-color:rgba(0,0,0,0.7);
    display:none;
    position:fixed;
    top:0px;
    z-index:10;
    height:100%;
    width:100%;
    text-align:center;
}
#load{
    margin-top:30vh;
    margin-left:45vw;
    height:30px;
    width:30px;
    border:10px solid rgba(0,0,0,0.2);
    border-top:10px solid green;
    border-radius:50%;
    animation: rotate 1.5s 0s ease-in-out infinite;
}
@keyframes rotate{
    0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#switchdevice{
   display:none;
}
    #Top {
  display: none; 
  position: fixed; 
  bottom: 20px;
  right: 30px;
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; 
  background-color: rgba(149, 149, 149,0.3); 
  color: white; 
  cursor: pointer; 
  padding: 13px 18px; 
  border-radius: 10px; 
  font-size: 20px; 
  opacity:0;
}

#Top.fadeout{
    animation: fadeout 1s 0s linear;
    animation-fill-mode:forwards;
}
#Top.fadein{
    animation: fadein 0.7s 0s linear;
    animation-fill-mode:forwards;
}
@keyframes fadein{
     from{opacity:0;}
    to{opacity:1;}
}
@keyframes fadeout{
    from{opacity:1;}
    to{opacity:0;}
}
.share{
            color:rgba(255,255,255,1);
            font-size:1.9em;
            margin:-10px 10px;
            text-decoration:none;
            transition:0.4s;
        }
        a.share:visited{
            color:rgba(255,255,255,1);
        }
        a.share:hover{
            color:magenta;
        }
        a.feedback{
            font-size:1.4em; color:#33e3e5;
        }
    </style>
    </head>
    <body onload="isloaded(); ">          <div id="loader" style="font-size:16px; color:lightgreen; display:none;"><div id="load"></div>Loading...</div>
    <script>document.getElementById("loader").style.display="block"; function isloaded(){setTimeout(function(){document.getElementById("loader").style.display='none';},1000); };</script>

        <div class="header" style="font-size:1.8em;font-family: 'Vollkorn SC', serif;">
        <span class="header1">J</span><span class="header2">E</span><span class="header3">E</span><span class="header4">N</span><span class="header5">I</span><span class="header6">U</span><span class="header7">S</span>
        </div>
        <div style="font-size:1.0em; font-family:'Thasadith', serif;">By Akshat</div><hr style="width:60%;">
        <div style="font-size:1.5em; font-family:'Noto Serif SC', serif;">Tests</div>
        <div id="reloadnotice" style="font-size:1.8em; color:red; font-family:'Noto Serif SC', serif;"></div>
        <div class="card">
        <div id="loginfirst">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
            <!--<input type="text" onkeyup="nameok();"id="inputname"/><br>
            <input type="number" onkeyup="store();" id="inputcode" disabled/>-->
             <img src="logo.png" style="max-width:60%;height:100px;margin:-5px;">
            <div id="loginheader">
            <span class="header1">L</span><span class="header2">o</span><span class="header3">g</span><span class="header4">i</span><span class="header5">n</span>
            </div>
            <hr style="width:40%;">
              <input type="text" name="name" class="question" id="inputname" onkeyup="nameok();" style="color:white;" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode >= 48 && event.charCode <= 57)" required autocomplete="off" />
  <label for="inputname"><span>Your name</span></label><br>
  <br>
  <input type="number" name="name2" class="question" onkeyup="store();" id="inputcode" style="color:white;" min="10" max="9999999" disabled required autocomplete="off" />
  <label for="inputname"><span>Your Unique Code</span></label>
  <br>
            <div id="notice"></div>
            <input type="hidden" id="namehidden" name="thename"/>
            <input type="hidden" id="qp" name="qp"/>
            <input type="hidden" id="qc" name="qc"/>
            <input type="hidden" id="qm" name="qm"/>
    
            <input type="submit" id="submitt" value="Start Test" onclick="return startitnow(); loadit();">
            
            <div style="font-size:16px; font-family:'Thasadith',serif; color:#f56d1d;">Test works only if you enter English characters.</div>
        </form>

        <div style="font-size:16px; color:#52fad4; font-family:'Alegreya',serif;" onclick="show_switch();">Want to continue your test? Click here.</div>
     </div><!--login first-->
     <script>function show_switch(){
         document.getElementById("switchdevice").style.opacity="1";
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.9";},80);
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.8";},140);
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.7";},220);
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.6";},300);
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.5";},380);
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.4";},460);
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.3";},540);
         setTimeout(function(){document.getElementById("loginfirst").style.opacity="0.1";},620);
         setTimeout(function(){document.getElementById("loginfirst").style.display="none";document.getElementById("switchdevice").style.display="block";},640);
     }
     function hide_switch(){
         document.getElementById("loginfirst").style.opacity="1";
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.9";},80);
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.8";},140);
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.7";},220);
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.6";},300);
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.5";},380);
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.4";},460);
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.3";},540);
         setTimeout(function(){document.getElementById("switchdevice").style.opacity="0.1";},620);
         setTimeout(function(){document.getElementById("switchdevice").style.display="none";document.getElementById("loginfirst").style.display="block";},640);
     }
     </script>
        <!---Login old name-->
            <div id="switchdevice" style="text-align:center;">
            <div style="float:left; font-size:20px; color:white;" onclick="hide_switch();"><i class="fas fa-arrow-left"></i></div><br>
                <div style="font-size:1.8em; color:#1fdc9f; font-family:'Noto Serif SC', serif;"> Switched Devices?</div>
                    <div style="font-size:1em; font-family:'Alegreya', serif;">Enter your name and code. Hurry up!</div>
                    <hr style="width:40%;">
              <input type="text" name="nameold" class="question" id="inputoldname" style="color:white;" required autocomplete="off" />
  <label for="inputoldname"><span>Your name</span></label><br>
  <br>
  <input type="number" name="name2old" class="question" id="inputoldcode" style="color:white;" min="10" max="9999999" required autocomplete="off" />
  <label for="inputoldcode"><span>Your Unique Code</span></label>
  <br>
        <button style="background-color:white; color:black; border:none; padding:5px 10px; outline:none; font-size:20px; font-family:'Thasadith',serif;" onclick="oldlogin();">Enter</button>
        <br>
        <div style="font-size:1.2em; font-family:'Alegreya', serif; color:red;" id="oldloginfail"></div>
        <div style="font-size:1em; font-family:'Alegreya', serif; color:red;">Note that the timer will reset to 3:00:00</div>
        </div>
        </div><br>
        <div class="important">Please read the <a href="#info">info</a></div>
        <hr style="border-top:2px solid #33e3e5;width:80%;">
    <div><div style="font-size:1.8em; font-family:'Vollkorn SC',serif;">Share</div>
<a class="share" href="whatsapp://send?text=https%3A%2F%2Fjeenius.ga%2Ftests%2Flogin.php%20Try+Jeenius+%7C+Tests%21" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a>
<a class="share" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fjeenius.ga%2Ftests%2Flogin.php%20Try+Jeenius+%7C+Tests%21" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a>
<a class="share" href="https://twitter.com/intent/tweet?text=Try+Jeenius+%7C+Tests%20https%3A%2F%2Fjeenius.ga%2Ftests%2Flogin.php" target="_blank" rel="noopener"><i class="fab fa-twitter-square"></i></a>
<a class="share" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//jeenius.ga/tests/login.php&title=Try+Jeenius+%7C+Tests!&summary=&source="target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a>
</div><hr style="border-top:2px solid #33e3e5;width:65%;">
            <br><br>
            <footer>
<a class="share feedback" href="mailto:lightisthekira@gmail.com?subject=Jeenius%20-%20Feedback" target="_blank" rel="noopener"><i class="fas fa-envelope"></i> Your feedback</a>
</footer>
            <div class="info" id="info">
                <div class="info-title">What's my code?</div>
                <div class="info-answer">Your unique code is anything you want. You do not need to remember it, unless you read more below.</div>
                <br>
                <div class="info-title">Why put a code?</div>
                <div class="info-answer">A code is a number used to distinguish between you and whoever else who puts the same name as you.</div>
                <br>
                <div class="info-title">But why distinguish?</div>
                <div class="info-answer">Once you press <kbd>Start Test</kbd>, a file is generated to store your marked answers and the time you took for each question to solve.
                The name of the file is <kbd>Your name + Your Code</kbd>. If someone puts the same name as you later, your file may get overwritten.</div>
            </div>
            <img src="logo.png" style="width:92%;max-height:300px;">
            <hr style="width:60%; border-top:2px solid red;">
                <div style="font-size:2.2em;text-align:center; font-family:'Noto Serif SC',serif; color:red;">Important</div><br>
            <div class="info" style="border-left:3px solid red;">

                <div class="info-title">Cookies and Storage</div>
                <div class="info-answer">Jeenius | Tests does <strong>not work with cookies/web storage disabled.</strong> Your name is stored on your device once you enter it above and this stored name is used to retrieve your file from the server. Clearing your browser cache will "log you out" of Jeenius.</div>
                <br>

                <div class="info-title">JavaScript</div>
                <div class="info-answer">Again, Jeenius | Tests does <strong>not work with JavaScript disabled.</strong></div>
                <br>

                <div class="info-title">Viewing Result</div>
                <div class="info-answer">Once you put your name and press<kbd> Start Test</kbd>, you will directed to the test page. After you submit the test, you'll then be taken to the result page immediately. To view your result sometime later after submitting the test, click <a href="https://jeenius.ga/tests/result.php">here</a>.</div>
                <br>

                <div class="info-title">Saving Answers</div>
                <div class="info-answer">Marked answers will be saved only when you navigate to a different question by pressing Next/Previous or jumping to any other question.</div>
                <br>
                 <div class="info-title">I cleared my browser cache before viewing the result.</div>
                <div class="info-answer">Let's be real: If you do that, you are an idiot. Message me directly to recover your answer file.</div>
                <br>
                <div class="info-title">Device</div>
                <div class="info-answer">Jeenius | Tests is designed specifically for devices having narrow screen widths (mobile phones in the general case)</div>
                <br>
                <div class="info-title">Switching Devices</div>
                <div class="info-answer">If you ever need to switch devices due to unexpected reasons, you can always go to the Settings and enter your  <kbd>Name + Code</kbd> and reload the page. Note that the navigation buttons will reset to white i.e. unmarked after reloading the page, but your answers are always saved, and are never deleted automatically.<br>
You can always check your marked answer for a particular question by navigating to that question.</div>
            </div>
                <br>
            <hr style="width:60%; border-top:2px solid cyan;">
            <div style="margin:auto;clear:both;">
	<span style="float:left; max-width:40%; font-family:'Thasadith',serif;">
	<img src="ScreenLight.jpeg" style="max-width:100%; clear:none; margin-right:0.1vw;">
	<br>Normal Mode</span>
	<span style="float:right; max-width:40%; font-family:'Thasadith',serif;">
	<img src="ScreenDark.jpeg" style="max-width:100%; clear:none;">
	<br>Dark Mode</span>
            </div>
            <br>
                <div style="font-size:2.2em;text-align:center; font-family:'Noto Serif SC',serif;clear:both;">Features</div>    <br>   
                <div class="info" style="clear:both;">
                    <div class="info-title">Dark Mode</div>
                <div class="info-answer">Jeenius | Tests has Dark Mode! Switch it on through the settings <i class="fas fa-cog"></i> on the page.</div>
                <br>
                <div class="info-title">Mark For Review</div>
                <div class="info-answer">To mark questions for review, click on the <strong>Bookmark</strong> icon <i class="far fa-bookmark"></i> to the top right of the question card. Questions marked for review are colored purple in the navigation button dropdown. To remove a marked question, click the icon <i class="fas fa-bookmark"></i> again.</div>
                <br>
                <div class="info-title">Progress Bar</div>
                <div class="info-answer">A bar which represents the questions you have attempted, seen but not attempted and yet to be seen questions.</div>
                <br>
                <div class="info-title">Individual Question times</div>
                <div class="info-answer">The time you spend on a question is recorded! You can view the time you took for a particular question by navigating to that question on the results page.</div>
                <br>
                </div> 

                <hr style="width:60%; border-top:2px solid cyan;">
                <div style="font-size:2em;text-align:center; font-family:'Noto Serif SC',serif;">How all of this works</div>    <br>  
                 <div class="info" style="border-left:3px solid #d432e8;">
                    <div class="info-title">Login</div>
                <div class="info-answer">On this page, when you enter your name and the code, the spaces in your name are replaced with underscores and your code is appended to it. This new string is saved as your name for the test. Some files are loaded from the server and when you press Start Test, you are taken to the test page.</div>
                <br>
                 <div class="info-title">Test Page: Loading questions</div>
                <div class="info-answer">Questions and options are stored on the server in different files which are loaded question-by-question by the Tests page on navigating to the question.</div>
                <br>
                 <div class="info-title">Progress Bar</div>
                <div class="info-answer">Once you mark an answer, it is stored on the new file generated with your given name. A function loops through all the questions and sees whether they are marked or not, incrementing respective counters along the way. The final counter values are converted to percentages and the bar is filled up.</div>
                <br>
                 <div class="info-title">Navigation Button dropdown</div>
                <div class="info-answer">Buttons are dynamically generated by loading the question files and counting the number of questions.</div>
                <br>
                 <div class="info-title">Saving Individual question times</div>
                <div class="info-answer">On loading a question, the time is stored in a variable. Once you leave that question, the new time is taken and the previous one subtracted to get the difference. And there you go. Times are easy to record, eh?<br>
                But no. Once you navigate to the same question twice, your stopwatch resumes for that question. This is achieved by (duh) storing the Individual times in the answer file and retrieving them on loading the new question.</div>
                <br>
                 <div class="info-title">Dark Mode</div>
                <div class="info-answer">A very neat CSS/ JavaScript trick. Add and remove classes. Super easy.</div>
                <br>
                
                 </div>
            <!--<div style="font-size:1.5em; color:red; font-family:'Noto Serif SC', serif;">Entering the code too fast will fail to load the required files from the server</div>-->
        <!--<button onclick="console.log(localStorage.testname);">This first</button>-->
        <br>
        <br>
        <!--Back to top button-->
    <button onclick="topFunction()" id="Top" title="Go to top"><i class="fas fa-chevron-up"></i></button>


    <script> function loadit(){document.getElementById("loader").style.display="block";}
    mybutton = document.getElementById("Top");
    var scrolledtop=0;
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 240 || document.documentElement.scrollTop > 240) {
      if(scrolledtop==1){
    mybutton.style.display = "block";
    mybutton.classList.add("fadein");
    mybutton.classList.remove("fadeout");
      }
  } else {
    //setTimeout(function(){ mybutton.style.display = "none";},800);
    scrolledtop=1;
    mybutton.classList.remove("fadein");
    mybutton.classList.add("fadeout");
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    scrolledtop=0;
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  mybutton.classList.remove("fadein");
    mybutton.classList.add("fadeout");
}
    function nameok(){
        var thename=document.getElementById("inputname").value;
        localStorage.name=thename;
        if (thename!=""&&!thename.toUpperCase().includes("YOUR")){
            document.getElementById("inputcode").disabled=false;
            //document.getElementById("submitt").classList.add("now");
        }
        else{
            document.getElementById("inputcode").disabled=true;
        }
    }
    function oldlogin(){
        var oldname = document.getElementById("inputoldname").value;
        var oldcode = document.getElementById("inputoldcode").value;
        if(oldname!="" && oldcode!=""){
            var n=oldname.replace(" ", "_");
            oldcode=n+oldcode;
            localStorage.setItem("testname", oldcode);
            setTimeout(function(){window.location.href="https://jeenius.ga/tests/test1.php";},500);
        }
        else{
            document.getElementById("oldloginfail").innerHTML="Put something first.";
        }
    }
        var wrongtries=0;
        var done=0;
        if(localStorage.one==1){
            window.location.replace("https://jeenius.ga/tests/test1.php");
        }
        function store(){
            var x1=document.getElementById("inputname").value;
            var x=x1.replace(" ", "_");
                        var y= document.getElementById("inputcode").value;
                        var z=x+y;
                        localStorage.testname=z;
                        localStorage.setItem("name",x1);
                        localStorage.setItem("code",y);
                        document.getElementById("namehidden").value=z;
                        console.log(document.getElementById("namehidden").value);
                        //document.getElementById("inputname").value=z;
                        s();
        }
        function startitnow(){//execute on submit
        localStorage.one=1;
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText=="ok"){
                        /*var x=document.getElementById("inputname").value;
                        var y= document.getElementById("inputcode").value;
                        var z=x+y;
                        //localStorage.setItem("testname",z);
                        localStorage.setItem("name",x);
                        localStorage.setItem("code",y);
                        document.getElementById("namehidden").value=z;*/
                        return "false";
                    }
                    else if(this.responseText=="exists"){
                        document.getElementById("notice").innerHTML="This account already exists.";
                        return false;
                    }
                    else{
                        
                        document.getElementById("notice").innerHTML="Something went wrong. Please try again.";
                        if(wrongtries==3){
                            document.getElementById("notice").innerHTML="Too many tries. Try again after some time";
                        }
                        else{
                            wrongtries+=1;
                        }
                        return false;
                    }
                }
            };
           /* var x=document.getElementById("inputname").value;
            var y= document.getElementById("inputcode").value;
            var z=x+y;
            xmlhttp.open("GET", "nameval.php?testname=" + z, true);
            xmlhttp.send();
            /////////////
            var x=document.getElementById("inputname").value;
            var y= document.getElementById("inputcode").value;
            var z=x+y;
            localStorage.setItem("testname",z);
            localStorage.setItem("name",x);
            localStorage.setItem("code",y);
            s();*/
        }
        function s(){
            /*var x=document.getElementById("inputname").value;
            var y= document.getElementById("inputcode").value;
            var z=x+y;
                        localStorage.setItem("testname",z);
                        localStorage.setItem("name",x);
                        localStorage.setItem("code",y);
                        document.getElementById("namehidden").value=z;*/
                        if(done==0){
                        done=1;
                        s1();
                        }
        }
        function s1(){
            /*var x=document.getElementById("inputname").value;
            var y= document.getElementById("inputcode").value;
            var z=x+y;
                        localStorage.setItem("testname",z);
                        localStorage.setItem("name",x);
                        localStorage.setItem("code",y);
                        document.getElementById("namehidden").value=z;*/
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
            addp(this);
            //document.getElementById("loader").style.display="none";
                }
                else if(this.status==1){
                    document.getElementById("loader").style.display="block";
                    document.getElementById("inputname").blur();
                    document.getElementById("inputcode").blur();
                    window.scrollTo(0,0);
                }
            };
            xhttp.open("GET","/testpapers/test1p.xml?" + Math.random(),true);
            xhttp.send();
            /////////
            var xhttp1 = new XMLHttpRequest();
              xhttp1.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
            addc(this);
            //document.getElementById("loader").style.display="none";
                }
                 else if(this.status==1){
                    document.getElementById("loader").style.display="block";
                    document.getElementById("inputname").blur();
                    document.getElementById("inputcode").blur();
                    window.scrollTo(0,0);
                }
            };
            xhttp1.open("GET","/testpapers/test1c.xml?" + Math.random(),true);
            xhttp1.send();
            ////////
            var xhttp2 = new XMLHttpRequest();
              xhttp2.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
            addm(this);
            //document.getElementById("loader").style.display="none";
                }
                 else if(this.status==1){
                    document.getElementById("loader").style.display="block";
                    document.getElementById("inputname").blur();
                    document.getElementById("inputcode").blur();
                    window.scrollTo(0,0);
                }
            };
            xhttp2.open("GET","/daily/md1.xml?" + Math.random(),true);
            xhttp2.send();
            /////
          }
          
          function addp(xml1){
               var xmlDoc = xml1.responseXML;
               if(xmlDoc==null||xmlDoc==undefined){
                   document.getElementById("inputname").blur();
                   document.getElementById("inputcode").blur();
                   window.scrollTo(0,0);
                   document.getElementById("reloadnotice").innerHTML="Error in loading files. Page will reload.";
                   setTimeout(function(){window.location.replace("https://jeenius.ga/tests/login.php");},3000);
               }
               var totalp = xmlDoc.getElementsByTagName("q").length;
               document.getElementById("qp").value=totalp;
          }
          function addc(xml1){
               var xmlDoc1 = xml1.responseXML;
               if(xmlDoc1==null||xmlDoc1==undefined){
                   document.getElementById("inputname").blur();
                   document.getElementById("inputcode").blur();
                   window.scrollTo(0,0);
                   document.getElementById("reloadnotice").innerHTML="Error in loading files. Page will reload.";
                   setTimeout(function(){window.location.replace("https://jeenius.ga/tests/login.php");},3000);
               }
               var totalc = xmlDoc1.getElementsByTagName("q").length;
               document.getElementById("qc").value=totalc;
          }
          function addm(xml1){
               var xmlDoc2 = xml1.responseXML;
               if(xmlDoc2==null||xmlDoc2==undefined){
                   document.getElementById("inputname").blur();
                   document.getElementById("inputcode").blur();
                   window.scrollTo(0,0);
                    document.getElementById("reloadnotice").innerHTML="Error in loading files. Page will reload.";
                   setTimeout(function(){window.location.replace("https://jeenius.ga/tests/login.php");},3000);
               }
               var totalm = xmlDoc2.getElementsByTagName("q").length;
               document.getElementById("qm").value=totalm;
			   //localStorage.testname=temp1;
			   //document.getElementById("namehidden")=localStorage.testname;
          }

        </script>
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
 // $question = "<qq>".$_POST['ques']."</qq> \n";
 $name= $_POST['thename'];
 $filename=$name.".xml";
 $totalp=$_POST['qp'];
 $totalc=$_POST['qc'];
 $totalm=$_POST['qm'];
 $marked="<markedop> \n</markedop> \n";
 $answer="<correct> \n</correct> \n";
 $timer="<time>0</time> \n";
        $myfile = fopen($filename, "w") or die("Unable to open file!");
      fwrite($myfile,"<xml> \n");
      fwrite($myfile,"<name>");
      fwrite($myfile, $name);
      fwrite($myfile, "</name> \n");
      fwrite($myfile,"<grandscore>0</grandscore> \n");
      ///For physics
      for ($x = 0; $x <$totalp; $x++) {
          $thisone1= "<qp".$x."> \n";
          fwrite($myfile,$thisone1);
          fwrite($myfile,$marked);
          fwrite($myfile,$answer);
          fwrite($myfile,$timer);
          $thisone2="</qp".$x."> \n";
          fwrite($myfile,$thisone2);
      }
      ///For chemistry
      for ($x = 0; $x <$totalc; $x++) {
          $thisone1= "<qc".$x."> \n";
          fwrite($myfile,$thisone1);
          fwrite($myfile,$marked);
          fwrite($myfile,$answer);
          fwrite($myfile,$timer);
          $thisone2="</qc".$x."> \n";
          fwrite($myfile,$thisone2);
      }
      ///For math
      for ($x = 0; $x <$totalm; $x++) {
          $thisone1= "<qm".$x."> \n";
          fwrite($myfile,$thisone1);
          fwrite($myfile,$marked);
          fwrite($myfile,$answer);
          fwrite($myfile,$timer);
          $thisone2="</qm".$x."> \n";
          fwrite($myfile,$thisone2);
      }
      fwrite($myfile, "</xml>");
     fclose($myfile); 
     echo "yes!";
     }
?>
</body>
</html>