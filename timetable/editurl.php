<?php
$table="";
    $table = $_POST['table'];
   
    $randnum = $_POST['code'];
    $filename="Tab/TABLE".$randnum.".txt";
    // if(file_exists($filename)==1){
        
    // }
    $myfile = fopen($filename,"w") or die("Error in opening file");
    fwrite($myfile, $table);
    fclose($myfile);
    echo "http://jeenius.ga/timetable?table=".$randnum;
?>