<?php
     $rejected=0;
     // Start the session
session_start();

    if(!isset($_COOKIE["visited"])||$_SESSION['submitted']!=="true") {
    setcookie("visited", "true", time() + (86400 *2), "/"); // 86400 = 1 day
    $_SESSION['submitted']="true";
     $college = $_REQUEST['college'];
     $branch= $_REQUEST['branch'];
     $quota = $_REQUEST['quota'];
     $rank = $_REQUEST['rank'];
     //sanitise input here
     $branch=str_replace(" ", "_", $branch);
     $college=str_replace(" ","_",$college);
     $quota=str_replace(" ","_",$quota);

     $branch=str_replace(",", "0", $branch);
     $college=str_replace(",", "0", $college);
     $quota=str_replace(",", "0", $quota);

     $branch=str_replace("(", "Z", $branch);
     $college=str_replace("(", "Z", $college);
     $quota=str_replace("(", "Z", $quota);

     $branch=str_replace(")", "X", $branch);
     $college=str_replace(")", "X", $college);
     $quota=str_replace(")", "X", $quota);
     //$rank=str_replace(" ","_",$quota);
     $r2=$rank;
     $rank=(int)$r2;
     if(!is_numeric($rank)){
         echo "Rank not valid";
         exit("Invalid");
     }
     $filename="results.xml";
     $doc= new DOMDocument();
     $doc->load($filename);
     $a = $doc->getElementsByTagName($college);
                        $entries=$doc->getElementsByTagName("entries")->length;
                        $total=0;
                        $t=1;
                        for($i=0;$i<$entries; $i++){
                            $t=$doc->getElementsByTagName("entries")->item($i)->nodeValue;
                            $total+=$t;
                        }
     if($a->length == 0){
         echo "here";//create a new node for college, quota, rank, branch, entries
         $doc->formatOutput = true;
         $realdoc=$doc->getElementsByTagName("xml")->item(0);
         $r = $doc->createElement( $college );
         $doc->appendChild( $r );
         $c=$doc->createElement($branch);
         $b = $doc->createElement( $quota );
$author = $doc->createElement( "rank" );
$author->appendChild(
$doc->createTextNode( $rank )
);
$b->appendChild( $author );

$title = $doc->createElement( "entries" );
$title->appendChild(
$doc->createTextNode( "1" )
);
$b->appendChild( $title );
$c->appendChild($b);
$r->appendChild($c);
$realdoc->appendChild($r);
/*$arr = file($filename);
if ($arr === false) {
  die('Failed to read ' . $filename);
}
array_pop($arr);
file_put_contents($filename, implode(PHP_EOL, $arr));
$file = fopen($filename, "a") or die("Could not open");
$write = "\n <".$college."> \n <".$quota."> \n <rank>".$rank."</rank> \n <entries>1</entries> \n </".$quota."> \n </".$college.">";
fwrite($file, $write);
fclose($file);
*/
     }
     //else... college exists and proceed:
     else{
         echo "else";
         $a = $doc->getElementsByTagName($college)->item(0);
         
         if($a->getElementsByTagName($branch)->length==0){
             $doc->formatOutput = true;
         $realdoc=$doc->getElementsByTagName("xml")->item(0);
         $r=$a;//->getElementsByTagName($branch)->item(0);
         $c = $doc->createElement($branch);
         $b = $doc->createElement( $quota );
$author = $doc->createElement( "rank" );
$author->appendChild(
$doc->createTextNode( $rank )
);
$b->appendChild( $author );

$title = $doc->createElement( "entries" );
$title->appendChild(
$doc->createTextNode( "1" )
);
$b->appendChild( $title );
$c->appendChild($b);
$r->appendChild($c);
//$realdoc->appendChild($r);
         }
         else{
         $a = $doc->getElementsByTagName($college)->item(0)->getElementsByTagName($branch)->item(0);
         if($a->getElementsByTagName($quota)->length==0){
             $doc->formatOutput = true;
         $realdoc=$doc->getElementsByTagName("xml")->item(0);
         $r=$a;//->getElementsByTagName($branch)->item(0);
         $b = $doc->createElement( $quota );
$author = $doc->createElement( "rank" );
$author->appendChild(
$doc->createTextNode( $rank )
);
$b->appendChild( $author );

$title = $doc->createElement( "entries" );
$title->appendChild(
$doc->createTextNode( "1" )
);
$b->appendChild( $title );

$r->appendChild($b);
//$realdoc->appendChild($r);
         }
         else{
         $a = $doc->getElementsByTagName($college)->item(0)->getElementsByTagName($branch)->item(0);
         $rem = $a->getElementsByTagName($quota)->item(0);
         $rem1 = $rem->getElementsByTagName('rank')->item(0);//rem1 = rank
         $rem2 = $rem->getElementsByTagName('entries')->item(0);//rem2 = quota
         //Let's store the values now.
         $oldrank=$rem1->nodeValue; //check if rank is low or not
         $oldint=(int)$oldrank;
         if($rank<$oldint){
         $rem1->removeChild($rem1->childNodes->item(0));
         
         //////////
         $rem1->appendChild($doc->createTextNode($rank));
         }
          $increment=$rem2->nodeValue;
         $int = (int)$increment;
         $int = $int+1;
         $rem2->removeChild($rem2->childNodes->item(0));
         $rem2->appendChild($doc->createTextNode($int));
    }
     }
     }
     /*$a=$doc->getElementsByTagName($qnumber)->item(0);
                //$a=$doc->getElementsByTagName($qnumber)->item(0);
     //$ab->appendChild($doc->createTextNode($atext));
     $rem=$a->getElementsByTagName('markedop')->item(0);
     $rem1=$a->getElementsByTagName('correct')->item(0);
     $rem2=$a->getElementsByTagName('time')->item(0);
     $rem3=$doc->getElementsByTagName('grandscore')->item(0);
     /////Over. Store it now.
     $a->getElementsByTagName('markedop')->item(0)->removeChild($rem->childNodes->item(0));
     $a->getElementsByTagName('correct')->item(0)->removeChild($rem1->childNodes->item(0));
     $a->getElementsByTagName('time')->item(0)->removeChild($rem2->childNodes->item(0));
     $doc->getElementsByTagName('grandscore')->item(0)->removeChild($rem3->childNodes->item(0));
     ////////////////
     $a->getElementsByTagName('markedop')->item(0)->appendChild($doc->createTextNode($op));
     $a->getElementsByTagName('correct')->item(0)->appendChild($doc->createTextNode($cor));
     $a->getElementsByTagName('time')->item(0)->appendChild($doc->createTextNode($time));
     $doc->getElementsByTagName('grandscore')->item(0)->appendChild($doc->createTextNode($score));
     ////////////////
     */
     $doc->saveXML(); // This will return the XML as a string
     //echo $doc->saveXML();
     $doc->save($filename);
    }
    else{
        $rejected=1;
        $filename="results.xml";
     $doc= new DOMDocument();
     $doc->load($filename);
     $a = $doc->getElementsByTagName($college);
                        $entries=$doc->getElementsByTagName("entries")->length;
                        $total=0;
                        $t=1;
                        for($i=0;$i<$entries; $i++){
                            $t=$doc->getElementsByTagName("entries")->item($i)->nodeValue;
                            $total+=$t;
                        }
    }
     ?>
     <!DOCTYPE html>
<html>
     <head>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <title>Forms | Jeenius</title>
    <meta name="description" content="Website for Superboy Ash. You can download tutorials, covers chat with me here."/>
    <meta property="og:title" content="Jeenius"/>
    <meta property="og:description" content="Website for Superboy Ash. You can download tutorials, covers chat with me here."/>
    <meta property="og:image" content="https://jeenius.ga/favicon.ico"/>
    <meta property="og:url" content="https://jeenius.ga/index.php"/>
    <meta name="theme-color" content="#1de9b6">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
        <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.8/dist/css/uikit.min.css" />
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Ubuntu|Noto%20Serif%20SC|Vollkorn%20SC">
    <!-- Vollkorn SC is a font-->
    <style>
     html{
        scroll-behavior: smooth; // Animates scrolling - "smooth" scrolling
    }
     .fixed{
        z-index:90;
        font-family:'Vollkorn SC',serif;
        position:fixed;
        display:block;
        width:100vw;
        top:0px;
        padding:5px;
        font-size:6vh;
        color:black;
        text-align:center;
        height:6.5vh;
        background:rgba(255,255,255,0.7);
    }
    .fixed a, a:visited{
        color:black;
        text-decoration:none;
    }
    </style>
    </head>
<body>
<div class="fixed">
    <a href="http://jeenius.ga" target="_blank" style="center-align;">Jeenius</a>
</div>
    <div style="height:6vh;"></div>
    <div class="container">
            <h2> <i class="fas fa-school blue-text"></i> Cutoffs estimation <i class="fas fa-cut red-text"></i></h2>
            <p><br><?php echo $total." entries so far";?></p>
            <?php if($rejected==1){echo "You already submitted a response. Share this page instead!</div></body></html>"; exit();}?>
            <p class="flow-text" style="font-size:24px;">Nice work, buddy! <br>
            <span class="blue-text" style="font-size:20px;">Your response has been recorded. (Google forms, anyone? :p)</span></p>
            <hr class="uk-divider-icon">
            <p class="flow-text">List will be displayed in a proper form soon. For now you can <a href="results.xml">click here to view the raw data</a><br>
            Thanks!</p>
    </div>
</body>
</html>