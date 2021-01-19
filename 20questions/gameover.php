<?php
    $room=$_GET['roomCode'];
    $change="no";
    if(isset($_GET['change'])){
        $change=$_GET['change'];
        $name=$_GET['name'];
    }
    if(trim($change)==""){

    }
    else if($change!="no"){
        $myfile=fopen($room,"w") or die("failed");
        $write="<xml><theuser>".$change."</theuser><name>".$change."</name><name>".$name."</name><q><qu>Game has been reset. New answerer is ".$change."</qu><time>New Game</time><by>Notice</by><ans>New game!<ansval>New!</ansval><by>20 Questions</by><time>New</time></ans></q>\n</xml>";
        fwrite($myfile, $write);
        fclose($myfile);
        echo "Success";
        exit();
    }
    else if(file_exists($room)){
        unlink($room);
        echo "Success";
    }
    else {echo "Failed";}
?>
