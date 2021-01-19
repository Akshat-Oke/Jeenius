<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $q=$_POST['ques'];
  $o1=$_POST['option1'];
  $o2=$_POST['option2'];
  $o3=$_POST['option3'];
  $o4=$_POST['option4'];
  $answer=$_POST['answer'];
  $solution=$_POST['solution'];
  $easy= "\n \t \t <imagetrue> false</imagetrue> \n";
  $question = "\t \t <qq>".$_POST['ques']."</qq> \n";
  $thename = "\t \t <author>".$_POST['namequestion']."</author>\n";
  $op1 = "\t \t <qq>".$_POST['option1']."</qq> \n";
  $op2 = "\t \t <qq>".$_POST['option2']."</qq> \n";
  $op3 = "\t \t <qq>".$_POST['option3']."</qq> \n";
  $op4 = "\t \t <qq>".$_POST['option4']."</qq> \n";
  $ans = "\t \t <qq>p1".$_POST['answer']."</qq> \n";
  $sol = "\t \t <solution>". $_POST['solution']."</solution> \n";
  if (empty($question)) {
    echo "Question is empty";
  } else {
    $myfile = fopen("userquestions.txt", "a") or die("Unable to open file!");
   fwrite($myfile, $easy);
   fwrite($myfile, $question);
   fwrite($myfile, $op1);
   fwrite($myfile, $op2);
   fwrite($myfile, $op3);
   fwrite($myfile, $op4);
   fwrite($myfile, $ans);
   fwrite($myfile, $thename);
   fwrite($myfile, $sol);
   fclose($myfile);
  }
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
    text-align:center;
    font-family:'Noto Serif SC',serif;
}
div.head{
    font-size:2em;
}
.question, .solution{
    font-family:'Thasadith',serif;
    font-size:1.6em;
}
.option{
    border-left:2px solid cyan;
    font-family:'Thasadith',serif;
    font-size:1.4em;
    display:table;
    padding:2px;
    margin:5px;
}
.answer{
    font-family:'Noto Serif SC',serif;
    font-size:1.6em;
}
a{
    font-family:'Thasadith',serif;
    font-size:1.6em;
}
</style>
</head>
<body>
 <div class="head">Thanks for submitting your question!</div>
 <div class="question"><?php echo $q;?></div><hr style="width:70%;">
 <div class="option"><?php echo $o1;?></div>
 <div class="option"><?php echo $o2;?></div>
 <div class="option"><?php echo $o3;?></div>
 <div class="option"><?php echo $o4;?></div>
 <div class="answer"><?php echo $answer;?></div>
 <div class="solution"><?php if($solution==""){echo "No solution given";}else{ echo $solution;};?></div>
 <a href="https://jeenius.ga">Go Back</a>
 <script>
 MathJax.typeset();</script>
 </body>
 </html>