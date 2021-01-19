<?php
     $filename=$_REQUEST['roomCode'];
     $name=$_REQUEST['name'];
     $doc= new DOMDocument();
     $doc->load($filename);
     $doc->formatOutput = true;
     
     $realdoc=$doc->getElementsByTagName("xml")->item(0);

     $r = $doc->createElement( "name" );

     $r->appendChild(
     $doc->createTextNode( $name )
     );
    
     $realdoc->appendChild( $r );
     $doc->saveXML(); // This will return the XML as a string
     //echo $doc->saveXML();
     $doc->save($filename);
?>