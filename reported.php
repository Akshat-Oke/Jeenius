<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = "Name: ".$_POST['namequestion']." \n";
  $reason = "Reason".$_POST['reason']."\n";
  $question = "Question".$_POST['question']."\n";
  $correction = "Correction".$_POST['reasontext']."\n";

    $myfile = fopen("userReports.txt", "a") or die("Unable to open file!");
   fwrite($myfile, $name);
   fwrite($myfile, $reason);
   fwrite($myfile, $question);
   fwrite($myfile, $correction);
   fclose($myfile);
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Noto%20Serif%20SC|Vollkorn%20SC">
<style>
body{
    text-align:center;
    font-family:'Noto Serif SC',serif;
}
div{
    font-size:3em;
}

a{
    font-family:'Thasadith',serif;
    font-size:1.6em;
}
</style>
</head>
<body>
 <div class="head">The Question has been reported.</div>
 <a href="https://jeenius.ga/daily/physicsq.php">Go Back</a>
 </body>
 </html>