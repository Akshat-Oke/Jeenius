<?php
    header("Cache-Control:, must-revalidate"); // HTTP 1.1.
header("Pragma: must-revalidate"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="short" type="image/x-icon" href="favicon.ico" />
    <title>Jeenius | ChemTricks</title>
    <meta name="description" content="Solve tests, practice questions or add YOUR question!"/>
    <meta property="og:title" content="Jeenius-by Akshat"/>
    <meta property="og:url" content="http://jeenius.ga/chemtricks.html"/>
    <meta property="og:description" content="Solve tests, practice questions or add YOUR question!"/>
    <meta property="og:image" content""/>
    <meta property="og:type" content="website" />
    <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Merriweather|Noto%20Serif%20SC|Alegreya|Ubuntu">
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
         img{max-width:100%;height:auto;}
    * {box-sizing;}
      /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 10; /* Sit on top */
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

            .header1{
    animation-name:colorful;
    animation-duration:4s;
    animation-delay:0s;
    animation-timing-function: ease-in-out;
    animation-iteration-count:infinite;
    animation-direction: alternate;
    margin:0;
    
    //font-family: 'Vollkorn SC', serif;
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
    //font-family: 'Vollkorn SC', serif;
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
    //font-size:2em;
    //font-family: 'Vollkorn SC', serif;
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
    //font-size:2em;
    //font-family: 'Vollkorn SC', serif;
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
    //font-size:2em;
    //font-family: 'Vollkorn SC', serif;
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
    //font-size:2em;
    //font-family: 'Vollkorn SC', serif;
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
    //font-size:2em;
    //font-family: 'Vollkorn SC', serif;
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
            #Top {
  display: none; 
  position: fixed; 
  bottom: 20px;
  right: 30px;
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; 
  background-color: rgba(149, 149, 149,0.7); 
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
   
   @media screen and(max-height: 40px){
   #headerbar{ height: 10vh;
   font-size: 10px;}
   }
  
.navbar {
  background-color: #333;
 // overflow: hidden;
  position: fixed;
  bottom: 0;
  width: 100%;
  word-wrap: break-word;
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
word-wrap: break-word;
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


.container {
    margin:-5px auto;
    text-align:center;
    max-width: 100vw;
    position: relative;
    display: flex;
    justify-content: center;//space-between;
}
//.container:hover{cursor:pointer;}
 .card {
     max-width:90%;
    position: relative;
    border-radius: 10px;
}

/*.container*/ .card .icon {
     border-radius: 10px;
     border:1px solid #a4a4a4;
     border-top:none;
    position: absolute;
    top: 0;
    left: 0;
    //color:white;
    width: 100%;
    height: 100%;
    background: #fff;
    transition: 0.7s;
    z-index: 1;
}
/*
.container .card:nth-child(1) .icon {
    background: #e07768;
}

.container .card:nth-child(2) .icon {
    background: #6eadd4;
}

.container .card:nth-child(3) .icon {
    background: #4aada9;
}*/


 .card .icon .fa {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
    transition: 0.7s;
    color: #fff;
}

strong {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
    transition: 0.7s;
    color: #fff;
}

 .card .face {
    width: 300px;
    height: 200px;
    transition: 0.5s;
     border-radius: 10px;
}

 .card .face.face1 { border-radius: 10px;
    position: relative;
    //background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

 .card.active .face.face1{ border-radius: 10px;
    background: #ff0057;
    transform: translateY(0px);
}

.card .face.face1 .content { border-radius: 10px;
    opacity: 1;width: 100%;
    height: 100%;
    padding:0;
    background: #fff;
    transition: 0.5s;
    overflow:scroll;
}

 .card.active .face.face1 .content { border-radius: 10px;        width:100%; height:100%;
    opacity: 1;
    background: #ff0057;
    color:white !important;
    overflow:auto;
}

.card .face.face1 .content i{ border-radius: 10px;
    max-width: 100px;
}

.card .face.face2 { border-radius: 10px;
    position: relative;
    //background: #27ffc2;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 8px;
    box-sizing: border-box;
    box-shadow: 0 15px 40px rgba(0,0,0,0.8);
    transform: translateY(-100px);
    overflow:auto;
    line-height:2;
}

 .card.active .face.face2{ border-radius: 10px;
    transform: translateY(0);
    //overflow:auto;
}
.card .face2 .content{width:100%; height:100%;overflow:auto;
    text-align:left;
    padding:20px 10px 10px 15px;
    }
 .card .face.face2 .content p {
     font-size:15px;
     font-family:'Ubuntu',serif;
    margin: 8px;
    padding: 0;
    //text-align: center;
    color: #414141;
}

 .card .face.face2 .content h3 {
    margin-top:10px;
    margin-bottom:10px;
    padding: 0;
    color: #fff;
    font-size: 24px;
    text-align: center;
    color: #414141;
} 

.container a {
    text-decoration: none;
    color: #414141;
}
.icon{text-align:left;}
div.cardheader{
    font-family:'Noto Serif SC', serif;
    font-size:26px;
    font-weight:bold;
    color:#24a7d8;
    text-align:left;
    margin-left:12px;
    margin-right:12px;
    padding-bottom:5px;
    border-bottom:2px solid #515151;
    overflow-x:auto;
}
div.thething{
    font-family:'Ubuntu',serif;
    padding:10px 10px; 
    font-size:18px;
    //text-align:left;
    line-height:2.2;
}
iframe{max-width:90%; height:290px;;margin:20px; border:2px solid #ff0057;}
#navbar1{
    padding-top:10px;
    text-align:center; padding-bottom:10px;font-family:'Alegreya',serif;font-size:1.5em;
    position:sticky;
    top:8vh;
    background:rgba(255,255,255,0.6);
    z-index:10;
    margin:0 auto;
    border-bottom:1px solid black;
    width:80vw;
}
a.navlink{
    padding:5px 5px;
    margin:0 5px 0 5px;
    color:#212121;
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
    min-width:20vw;
    padding:7px;
    margin:0 -10vw;
}
#likeicon{
    padding:0 8px;
}
    </style>
   </head>
  <body onload="loadlikes();setlikeicon();">
  <div id="headerbar" class="headerbar">
<span style="text-align:center; margin-top:-4px;color:white; font-size: 7vh; margin:auto; diaplay-style: inline-block;"> <span class="header1">J</span><span class="header2">e</span><span class="header3">e</span><span class="header4">n</span><span class="header5">i</span><span class="header6">u</span><span class="header7">s</span></span>
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
    <a href="http://jeenius.epizy.com/subjects/physics.php">Physics<i class="fas fa-atom"></i></a>
    <a href="http://jeenius.epizy.com/subjects/chemistry.php">Chemistry <i class="fas fa-flask"></i></a>
    <a href="http://jeenius.epizy.com/subjects/maths.php">Maths <i class="fas fa-calculator"></i></a>
    <a href="http://jeenius.epizy.com/credits.html">Credits <i class="fas fa-align-center"></i></a>
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
  </div>
</div>

<div style="height:8vh;"></div>


<div style="font-size:3em; font-family:'Alegreya',serif; text-align:center;">Chemistry</div>
<div style="font-size:2em; font-family:'Thasadith', serif;text-align:center;">Mnemonics</div><hr style="width:60%;">
<div style="margin:5px 8px 0px 8px;text-align:center;font-size:1em;color:#212121;font-family:'Noto Serif SC', serif; ">A mnemonic device, or memory device, is any learning technique that aids information retention or retrieval in the human memory. <br><span style="color:#ff0057;"> Mnemonics for rules/ names of compounds/sequences of elements are displayed on the front card.<br> To view the actual rules/ names of compounds/sequences of elements, click on the card.</span> <br> Click again to hide it. This way you can try to memorise things you already haven't.
<div style="font-family:'Alegreya',serif; font-size:24px; color:blue; text-align:center;">
    Page Views:
    <span style="font-size:26px; color:magenta;font-weight:bold;">
    <?php 
    $newuser="New! \n";
$myfile1 = fopen("newchemtricks.txt", "a") or die("Unable to open file!");
   fwrite($myfile1, $newuser);
   fclose($myfile1);
    $file3="newchemtricks.txt";
$linecount = 0;
$handle = fopen($file3, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}
fclose($handle);
echo $linecount;
?></span></div></div>
<script>function showmore(card){card.classList.toggle("active");}</script>
<div id="inorganic"></div>
<hr style="width:75%;">
<div id="navbar1">
    <a class="navlink" href="#inorganic">Inorganic</a><a class="navlink" href="#organic">Organic</a><a class="navlink" href="#others">Others</a>
    
</div>
<div style="text-align:center;">
    <div id="inorganic1" style="font-family:'Thasadith',serif; font-size:2em;font-weight:bold;margin-bottom:-50px;">Inorganic</div><!--real inorganic id is up-->

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Electrochemical Series</div>
                        <div class="thething" style="line-height:1.5;">
                          Le (Li) ke (K) barah(Ba) Sardar(Sr) ke(Ca) nam(Na), mange (Mn) assi (Al) Mentos.(Mn) <br>Zambia(Zn) Can(Cr) Fight(Fe) Cold(Cd) Cannons(Co) (with)Natsu Dragneel(Ni), S-class mages (Sn) (and) PUBG(Pb) Heroes(H2).<br>Can(Cu) I(I<sub>2</sub>) Ask(Ag) (the) Headmaster(Hg) (who's)Broke(Br<SUB>2</SUB>) (to) Play(Pt) Octodad(O<SUB>2</SUB>) (while) Catching(Cl<SUB>2</SUB>) Gold<Au> Fishes(F<SUB>2</SUB>)?
                        </div>
                </div></div><div class="face face2"><div id="orgaghnic"></div>
                <div class="content">
                    <h3>
                        Electrochemical series
                    </h3>
                   We start off strong.
                    <iframe src="https://en.wikipedia.org/wiki/Standard_electrode_potential_(data_page)"></iframe>
                </div></div></div> <br><br>
</div>


<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">PORTLAND CEMENT</div>
                        <div class="thething">
                          Casey And My Friend Sing
                        </div>
                </div></div><div class="face face2">
                <div class="content">
                    <h3>
                        Composition of Portland Cement
                    </h3>
                    \(\mathrm{CaO \: (50\%-60\%);\\ SiO_2 \:(20-25 \%);\)<br>\( \\ Al_2O_3\: (5-10\%);\\ MgO\: (2-3 \%);\\\)<br>\( Fe_2O_3(1-2 \%);\\ SO_3 (1-2 \%);}\)
                </div></div></div> <br><br>
</div>


<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Group 13 Ionisation Enthalpies</div>
                        <div class="thething">
                          Betelguese Aliens
                        </div>
                </div></div><div class="face face2"><div id="organimc"></div>
                <div class="content">
                    <h3>
                        Ionisation Enthalpies
                    </h3><p>
                    B > Tl > Ga > Al > In</p>
                </div></div></div> <br><br>
</div>
<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Lanthanides</div>
                        <div class="thething" style="line-height:1.5;">
                         "Hey Siri (Ce), pray (Pr) for me and (Nd) for my promotion (Pm), so (Sm) that I can go to Europe (Eu) or buy Gold (Gd). But Europe might have Tuberculosis (Tb) so I'll need a DIY medicine (Dy). For that I'll need hand-wash (Ho)."
You take too much hand-wash on your palms and someone watches you. "Er... (Er) I took a little too much (Tm) of it" Your hands are yellow (Yb) because of it, so you go into the loo (Lu) to wash it off.
                        </div>
                </div></div><div class="face face2"><div id="organicn"></div>
                <div class="content">
                    <h3>
                       Lanthanides
                    </h3>
                    Nothing much to say here. Check out this page if you want.<br>
                    <iframe src="https://en.wikipedia.org/wiki/Lanthanide"></iframe>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Irving William order of Stability</div>
                        <div class="thething">
                          Copper Nuts Could Fight Monsoon Colds!
                        </div>
                </div></div><div class="face face2">
                <div class="content">
                    <h3>
                       Stability of \(\mathrm{M^{+2}}\) ions
                    </h3>
                    \(\mathrm{Cu^{+2}>Ni^{+2}>Co^{+2}>Fe^{+2}>Mn^{+2}>Cd^{+2}}\)<br>
                    <iframe src="https://en.wikipedia.org/wiki/Irving%E2%80%93Williams_series"></iframe>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card">
            <div class="face face1">
                <div class="content">
                        <div class="cardheader">ABUNDANCE OF ELEMENTS EARTH'S CRUST</div>
                        <div class="thething">
                         Only Strong Athletes In College Study Past Midnight.
                        </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        The Sequence
                    </h3>
                    <p>[Oxygen(O)] > [Silicon(Si)] > [Aluminium(Al)] > [Iron(Fe)] > [Calcium(Ca)] > [Sodium (Na)] > [Magnesium (Mg)] > [Potassium(K)] <br>Last two are switched</p>
                </div>
            </div>
        </div>
        <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Acidic Radicals  (H<sub>2</sub>SO<sub>4</sub> test)</div>
                        <div class="thething">
                          CBI ne ox pakde <br>(that's Hindi)
                        </div>
                </div></div><div class="face face2">
                <div class="content">
                    <h3>
                        Acidic radicals
                    </h3>
                    <p>Chlorine, Bromine, Iodine, Nitrate, Oxalate.<br>
                    Concentrated H<sub>2</sub>SO<sub>4</sub> is required to detect their presence.</p>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Transition Metals</div>
                        <div class="thething">
                          Crow Moves Weirdly.<br>OR<br>Criminal Most Wanted
                        </div>
                </div></div><div class="face face2">
                <div class="content">
                    <h3>
                        Metals having highest Melting Points
                    </h3>
                    <p>
                    ...in their repective periods<br>
                    Cr, Mo, W</p>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Geometrical Isomers</div>
                        <div class="thething">
                            \[=b\Big( {{n}\choose {2}}+x\Big)\: ; b\neq3 \]
                            <br>where \(b=\text{total bidentate ligands}\)<br>
                            \(n=\text{number of distinct monodentate ligands}\)<br>
                            \(x=\text{number of distinct pairs of ligands}\)
                        </div>
                </div></div><div class="face face2">
                <div class="content">
                    <h3>
                        For symmetrical bidentate ligands only
                    </h3>
                    
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Atomic orbitals</div>
                        <div class="thething">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Klechkovski_rule.svg/495px-Klechkovski_rule.svg.png">
                        </div>
                </div></div><div class="face face2"><div id="organic"></div>
                <div class="content">
                    <h3>
                        Aufbau Principle
                    </h3>
                    <iframe src="https://en.wikipedia.org/wiki/Aufbau_principle#Madelung_energy_ordering_rule"></iframe>
                </div></div></div> <br><br>
</div>
<!--Inorganic over-->


<div id="organic1" style="font-family:'Thasadith',serif; font-size:2em;font-weight:bold;margin-bottom:-50px;">ORGANIC </div><!--real organic id is up-->

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Functional Groups</div>
                        <div class="thething">
                          Catching Acids (will) Never Always Keep Alcohols Amiable
                        </div>
                </div></div><div class="face face2"><div id="organic"></div>
                <div class="content">
                    <h3>
                        Order of Preference
                    </h3>
                    Cations<br>Carboxylic Acids and Derivatives<br>Nitriles<br>Ketones<br>Alcohols<br>Amines<br>
                    <iframe src="https://en.wikipedia.org/wiki/IUPAC_nomenclature_of_organic_chemistry"></iframe>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">DNA, RNA Bases</div>
                        <div class="thething">
                          <img src="stupidideas.jpeg">
                        </div>
                </div></div><div class="face face2"><div id="organic"></div>
                <div class="content">
                    <h3>
                        The Bases
                    </h3><p>
                    Are the ones given above<br>
                    <a href="stupidideas.jpeg" style="color:blue;text-decoration:underline;" download="DNA/RNA/Bases.jpeg">Download Image</a></p>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Nucleophilicity in PPS</div>
                        <div class="thething">
                          Sand Castles (are) In Eternity Of Nervous Beings Producing Energy As Chlorine, Fluorine Never Need Water.
                        </div>
                </div></div><div class="face face2"><div id="organic"></div>
                <div class="content">
                    <h3>
                        The order (decreasing)
                    </h3>
                    <p>Sh->>CN->I->EtO->OH->N3->Br->PhO->Et3N->AcO->>Cl->F->NO3->NH3>H2O
                   </p>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Spectrochemical series</div>
                        <div class="thething" style="line-height:1.5;">
                         I bought some carbonated sugar for organising oxygenation (of) hydrogen (and) nitrogen (while) entrusting (my) neighbours (with) essential comfy carbonates
                        </div>
                </div></div><div class="face face2"><div id="organic"></div>
                <div class="content">
                    <h3>
                        The order 
                    </h3>
                    <p>Look in NCERT. Should be similar to this:<br>I− < Br− < S2− < SCN− < Cl− < NO3− < N3− < F− < OH− < C2O42− < H2O < NCS− < CH3CN < py < NH3
                   </p>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card">
            <div class="face face1">
                <div class="content">
                        <div class="cardheader">CARBOXYLIC ACIDS</div>
                        <div class="thething">
                            <br>Frogs Are Polite, Being Very Courteous.
                        </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        Aliphatic Carboxylic acids.
                    </h3>
                    <p>Formic, Acetic, Propionic, Butyric, Valeric, Caproic</p>
                </div>
            </div>
        </div>
        <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">CARBOXYLIC ACIDS</div>
                        <div class="thething">
                            Oh My, Such Good Apples.<div style="text-align:center;">OR</div>
                            OMSGAP- a phonetic word.
                        </div>
                </div></div><div class="face face2">
                <div class="content">
                    <h3>
                        The Carboxylic acids
                    </h3>
                    <p>Oxalic, Malonic, Succinic, Glutaric, Adipic, Pimelic, Suberic, Azelaic, Sebacic</p>
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">ESSENTIAL AMINO ACIDS</div>
                        <div class="thething">
                           MATT HILL, VP : Matt Hill is the Vice President
                        </div>
                </div></div><div class="face face2"><div id="others"></div>
                <div class="content">
                    <h3>
                        The Amino Acids
                    </h3>
                    <p>Isoleucine, Leucine, Lysine, Arginine, Methionine, Phenylalanine, Threonine, Tryptophan, Histidine, Valine</p>
                </div></div></div> <br><br>
</div>
            <!--Organic over-->

<div id="others1" style="font-family:'Thasadith',serif; font-size:2em;font-weight:bold;margin-bottom:-50px;">OTHERS </div><!--real others id is up-->

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">RESISTOR COLOR CODE</div>
                        <div class="thething">
                          <br>Bad Boys Ring Our Young Girls But Vicky Gives Willingly
                        </div>
                </div></div><div class="face face2"><div id="organic"></div>
                <div class="content">
                    <h3>
                        Colour Code
                    </h3>
                    
                    <img src="https://www.petervis.com/electronics/Standard_Resistor_Values/resistor_colour_code_chart/resistor_colour_code_5_band_chart.gif">
                </div></div></div> <br><br>
</div>

<div class="container">
        <div onclick="showmore(this);"class="card"><div class="face face1">
                <div class="content">
                        <div class="cardheader">Kinetics</div>
                        <div class="thething">
                            <img src="/things/kinetics.jpeg">
                        </div>
                </div></div><div class="face face2">
                <div class="content">
                    <h3>
                        First order Kinetics
                    </h3>
                    <p>Also, \(t_{99.9\%}= 10 \times t_{50\%}\)</p>
                </div></div></div> <br><br>
</div>

</div><!--this is the text align center div for cards-->

 <!--Back to top button-->
    <button onclick="topFunction()" id="Top" title="Go to top"><i class="fas fa-chevron-up"></i></button>


    <script>
    mybutton = document.getElementById("Top");
    var scrolledtop=0;
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
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
</script>
<div id="like" onclick="updateLikesicon();"><span id="likeicon"><i class='far fa-heart'></i> </span> <span id="likesnumber" style="padding:4px;"></span>
</div>
<script>
var likesnumber=0;
var thispageliked;
function setlikeicon(){
    if(localStorage.chemtricksliked==1){
        document.getElementById("likeicon").innerHTML="<i class='fas fa-heart'></i>";
        thispageliked=1;
    }
    else{thispageliked=0;}
}
function loadlikes(){
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var xmlDoc=this.responseXML;
        likesnumber=Number(xmlDoc.getElementsByTagName("chemtricks")[0].childNodes[0].nodeValue);
        document.getElementById("likesnumber").innerHTML=xmlDoc.getElementsByTagName("chemtricks")[0].childNodes[0].nodeValue;
    }
  }
  xhttp.open("GET", "thelikes.xml?"+Math.random(), true);
  xhttp.send();
}
function pageliked(){
    if(document.getElementById("likeicon").innerHTML=="<i class='far fa-heart'></i>"){
        likesnumber-=1;
    }
    else if(document.getElementById("likeicon").innerHTML=="<i class='fas fa-heart'></i>"){
        likesnumber+=1;
    }
    storeLikes();
}
function updateLikesicon(){//when pressed icon
    if(thispageliked==0){
           likesnumber+=1;
           localStorage.setItem("chemtricksliked", "1");
           document.getElementById("likeicon").innerHTML="<i class='fas fa-heart'></i>";
           storeLikes();
           thispageliked=1;
       }
       else{
           thispageliked=0;
           likesnumber-=1;
           localStorage.removeItem("chemtricksliked");
           document.getElementById("likeicon").innerHTML="<i class='far fa-heart'></i>";
           storeLikes();
       }
}
    function storeLikes() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      loadlikes();
    }
  };
  xhttp.open("GET","likethis.php?page=chemtricks&likes="+likesnumber,true);
  //xhttp.open("GET", "md1.xml", true);
  xhttp.send();
 }
</script>
</body>
</html>