<?php
    $filename=$_REQUEST['roomCode'];
    $name=$_REQUEST['name'];
    $answer = $_REQUEST['answer'];
    $timeis = $_REQUEST['time'];

    $doc= new DOMDocument();
    $doc->load($filename);
    $doc->formatOutput = true;
     
    $realdoc=$doc->getElementsByTagName("xml")->item(0);

    $qu = $doc->createElement( "ans" );
    $ansval = $doc->createElement("ansval");
    $time = $doc->createElement("time");
    $by= $doc->createElement("by");

    $qu->appendChild(
    $doc->createTextNode( $answer )
    );
    $time->appendChild(
    $doc->createTextNode( $timeis )
    );
    $by->appendChild(
    $doc->createTextNode( $name )
    );
    $ansval->appendChild(
    $doc->createTextNode( $answer )
    );

    $qu->appendChild($time);
    $qu->appendChild($by);
    $qu->appendChild($ansval);
    $ru=$doc->getElementsByTagName("q");
    foreach($ru as $t){
    $ru1=$t;
    }
    $ru1->appendChild( $qu );

    $doc->saveXML(); // This will return the XML as a string
     //echo $doc->saveXML();
    $doc->save($filename);
?>