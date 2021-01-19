<?php
    $filename=$_REQUEST['roomCode'];
    $name=$_REQUEST['name'];
    $question = $_REQUEST['question'];
    $timeis = $_REQUEST['time'];
    
    $doc= new DOMDocument();
    $doc->load($filename);
    $doc->formatOutput = true;
     
    $realdoc=$doc->getElementsByTagName("xml")->item(0);

    $r = $doc->createElement( "q" );
    $qu = $doc->createElement( "qu");
    $time = $doc->createElement("time");
    $by= $doc->createElement("by");
    $qu->appendChild(
    $doc->createTextNode( $question )
    );
    $time->appendChild(
    $doc->createTextNode( $timeis )
    );
    $by->appendChild(
    $doc->createTextNode( $name )
    );
    $r->appendChild($qu);
    $r->appendChild($time);
    $r->appendChild($by);

    $realdoc->appendChild( $r );

    $doc->saveXML(); // This will return the XML as a string
     //echo $doc->saveXML();
    $doc->save($filename);
?>