<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
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
     echo "<span style='font-size:1.4em;'>Files created successfully!</span><br>";
     echo "<a href='https://jeenius.ga/blanktests/tests/test1.php'>Start Test</a><br>";
     }
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Noto%20Serif%20SC|Vollkorn%20SC">
    <style>
    body{
        background-color:black;
        color:rgba(255,255,255,0.9);
        font-family:'Noto Serif SC',serif;
        font-size:1.6em;
        text-align:center;
    }
    div{
        text-align:left;
        font-family:'Thasadith',serif;
        font-size:1em;
    }
    a, a:visited{
        display:inline-block;
        background-color:#313131;
        color:rgba(255,255,255,0.95);
        text-decoration:none;
       /* border:2px solid magenta;*/
        border-radius:5px;
        margin:15px auto;
        padding:5px 10px;
        margin-bottom:15px;
        transition:0.4s;
    }
    a:hover{
        background-color:rgba(255,255,255,0.8) !important;
        color:black !important;
    }
    </style>
    </head>
    <body>
    <a href="https://jeenius.ga/blanktests/tests/test1.php">Start Test</a><br>
    <div>Your name: <i class="fas fa-user"></i> <span id="name"></span><br>
    Your test's name: <i class="fas fa-file-alt"></i> <span id="testname"></span><br>
    </div>
    <script>
     document.getElementById("name").innerHTML=localStorage.testname;
    document.getElementById("testname").innerHTML=localStorage.filename;
    </script>
    </body>
    </html>