<?php
$table="";
    $table = $_POST['table'];
   
    $randnum = rand(11111,99999);
    $filename="Tab/TABLE".$randnum.".txt";
    if(file_exists($filename)==1){
        echo "<div class='alert'>Previous timetable has been overwritten!</div>";
    }
    $myfile = fopen($filename,"w") or die("Error in opening file");
    fwrite($myfile, $table);
    fclose($myfile);
    echo "http://jeenius.ga/timetable?table=".$randnum;
?>