<?php
     $likes = $_REQUEST['likes'];
     $page= $_REQUEST['page'];
     $filename="thelikes.xml";
     $doc= new DOMDocument();
     $doc->load($filename);
     $a=$doc->getElementsByTagName($page)->item(0);
                //$a=$doc->getElementsByTagName($qnumber)->item(0);
     //$ab->appendChild($doc->createTextNode($atext));
     //$rem=$a->getElementsByTagName('likes')->item(0);
     /////Over. Store it now.
     $a->removeChild($a->childNodes->item(0));
     ////////////////
     $a->appendChild($doc->createTextNode($likes));
     ////////////////
     $doc->saveXML(); // This will return the XML as a string
     $doc->save($filename);
?>