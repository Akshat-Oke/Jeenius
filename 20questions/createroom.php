<?php
    $code=$_GET['code'];
    $name=$_GET['name'];
    $theuser=$_GET['theuser'];
    if(file_exists($code)!=1){
        $write="<xml>\n<name>".$name."</name>\n<theuser>".$theuser."</theuser>\n";
        if($name!=trim($theuser))
            $write.="<name>".$theuser."</name>";
            
            $write.="\n</xml>";
        $afile=fopen($code, "w") or die("Could not open");
        fwrite($afile,$write);
        fclose($afile);
        echo "Done";
    }
    else{
        echo "Nope";
        exit();
    }
?>