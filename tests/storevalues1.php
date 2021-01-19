<?php
     $op = $_REQUEST['option'];
     $cor= $_REQUEST['correct'];
     $filename0=$_REQUEST['filename'];
     $qnumber=$_REQUEST['qnum'];
     $time=$_REQUEST['time'];
     $score=$_REQUEST['score'];
     $filename=$filename0 . ".xml";
     $doc= new DOMDocument();
     $doc->load($filename);
     $a=$doc->getElementsByTagName($qnumber)->item(0);
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
     $doc->saveXML(); // This will return the XML as a string
     $doc->save($filename);
     ?>
     