<?php
$data = file_get_contents('php://input');
$name = $_REQUEST["user"];
if (empty($name)) {
    echo "{\"link\": \"Error: name not provided\"}";
  } else {
      $filename = "Saved/".$name.".txt";
      $new = 1;
      while(file_exists($filename) && $new < 4){
          $name .= "1";
          $new+=1;
          $filename = "Saved/".$name.".txt";
      }
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    $html = str_replace("\n", "", $data);
    fwrite($myfile, $html);
    fclose($myfile);
    echo "{\"link\": \"https://jeenius.gq/proof-editor?proof=".$name."\"}";
  }
?>