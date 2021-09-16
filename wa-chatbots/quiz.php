<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 60");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$message= new \stdClass();
//Default is here

$json=file_get_contents('php://input');
$data = json_decode($json);
$exp = $data->query->message;
$name = $data->query->sender;
/*
$exp=$_GET['n'];
$name=$_GET['name'];
*/
$name = str_replace(" ","_",$name);
$name=str_replace("+","",$name);
$filename = $name.".xml";
$message2 = new \StdClass();

if(strtoupper(trim($exp)) == "START QUIZ"){
  if(file_exists($filename)){
    $message->message = "Quiz has already started";
    $rf=new \stdClass();
    $rf->replies=array($message);
    echo json_encode($rf);
    exit();
  }else{
    $newfile = fopen($filename, "w") or die("nah");
    fwrite($newfile, "0\n0");
    fclose($newfile);
  }
  $doc= simplexml_load_file("phylab.xml") or die("Failed to load");
  $question = $doc->q[0]->qu;
  $message->message = "Q ". 1 . " of ". count($doc->q)."\n". $question;
  $rf=new \stdClass();
  $rf->replies=array($message);
  echo json_encode($rf);
}
else{
  $thefile=file($filename);
  $score= (int) trim($thefile[0]);
  $previousQnum = (int) trim($thefile[1]);

  preg_match("/\b[A-Za-z]\b/i", $exp, $matchArr);
  $choosenOption = strtoupper($matchArr[0]);
  $doc= simplexml_load_file("phylab.xml") or die("Failed to load");
  $totalQuestions = (int)count($doc->q);
  $correctAns = $doc->q[$previousQnum]->ans;

  if($choosenOption == $correctAns){
    ++$score;
    $message2 = new \StdClass();
    $message2->message = $choosenOption." should be correct";
  }else{
    $message2->message = $choosenOption." doesn't seem to be correct";
  }
  if($previousQnum > $totalQuestions-1){
    $message->message = "End of questions!\n".$score." out of ".$totalQuestions." of your answers match with mine.";
    unlink($filename);
  }
  else{
    ++$previousQnum;
    $question = $doc->q[$previousQnum]->qu;
    $message->message = "Q ". ($previousQnum +1) . " of ". count($doc->q)."\n". $question;
  }
  $newfile = fopen($filename, "w") or die("nah");
    fwrite($newfile, $score."\n".$previousQnum);
    fclose($newfile);
}

$rf=new \stdClass();
$rf->replies=array($message2, $message);
echo json_encode($rf);
?>