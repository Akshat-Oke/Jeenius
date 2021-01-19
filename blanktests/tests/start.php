<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $thething="</qq>\n </q> \n <q>\n <imagetrue>f</imagetrue><qq> </qq>\n <qq>A</qq>\n <qq>B</qq>\n <qq>C</qq>\n <qq>D</qq>\n <qq>p1";
  $pans=$_POST['pans'];
  $cans=$_POST['cans'];
  $mans=$_POST['mans'];
  $p= preg_replace('/\s+/', $thething, trim($pans));
  $c= preg_replace('/\s+/', $thething, trim($cans));
  $m= preg_replace('/\s+/', $thething, trim($mans));
  $testname=$_POST['testname'];
    $myfile = fopen($testname."p.xml", "a") or die("Unable to open file!");
    fwrite($myfile,"<xml> \n <q>\n <imagetrue>f</imagetrue><qq> </qq>\n <qq>A</qq>\n <qq>B</qq>\n <qq>C</qq>\n <qq>D</qq>\n <qq>p1");
   fwrite($myfile, $p);
   fwrite($myfile,"</qq>\n </q></xml>");
   fclose($myfile);
   ////////
   $myfile = fopen($testname."c.xml", "a") or die("Unable to open file!");
   fwrite($myfile,"<xml> \n <q>\n <imagetrue>f</imagetrue><qq> </qq>\n <qq>A</qq>\n <qq>B</qq>\n <qq>C</qq>\n <qq>D</qq>\n <qq>p1");
   fwrite($myfile, $c);
   fwrite($myfile,"</qq>\n </q></xml>");
   fclose($myfile);
   //////
   $myfile = fopen($testname."m.xml", "a") or die("Unable to open file!");
    fwrite($myfile,"<xml> \n <q>\n <imagetrue>f</imagetrue><qq> </qq>\n <qq>A</qq>\n <qq>B</qq>\n <qq>C</qq>\n <qq>D</qq>\n <qq>p1");
   fwrite($myfile, $m);
   fwrite($myfile,"</qq>\n </q></xml>");
   fclose($myfile);
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Custom Tests | Jeenius</title>
        <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Vollkorn%20SC|Noto%20Serif%20SC|Alegreya">
    <style>
     html{
        scroll-behavior: smooth; 
    }
        body{
            margin:0;
            background-color:black;
            line-height:1.5;
            color:rgba(255,255,255,0.9);
            text-align:center;
        }
        input[type=text]{
            padding:5px 10px;
            font-size:1.2em;
            width:50%;
            border:2px solid #414141;
            border-radius:6px;
            outline:none;
            transition:0.4s;
            background-color:white;
        }
        input[type=text]:focus{
            border:2px solid lightgreen;
            width:70%;
        }
        input[type=submit]{
            padding:5px 8px;
            background-color:white;
            border:none;
            font-size:1.3em;
            outline:none;
            transition:0.4s;
        }
        input[type=submit]:hover{
            background-color:#313131;
            color:white;
        }
        </style>
    </head>
    <body onload="s1();">
    <div style="font-size:3em;font-family:'Vollkorn SC';color:white;">Jeenius</div>
    <div style="font-size:2em;font-family:'Noto Serif SC';">One more thing...<br>
    <span style="font-size:1em;font-family:'Alegreya';">Confirm your name:</span></div>
    <br><br>

    <form method="post" action="https://jeenius.ga/blanktests/tests/gotready.php">
    <input type="text" onkeyup="namethis(this);" name="thename" autocomplete="off"/>

            <input type="hidden" id="qp" name="qp"/>
            <input type="hidden" id="qc" name="qc"/>
            <input type="hidden" id="qm" name="qm"/>

    
    <div id="reloadnotice" style="font-size:1.8em; color:red; font-family:'Noto Serif SC', serif;"></div>
    <br>
    <span id="yes" style=" font-size:1em;">Type your name above...</span>
    <br>
    <input type="submit" id="submit"value="Get Ready" disabled/>
    <div style="display:none;" id="thenameis"><?php echo $testname;?></div>
    </form>
    <script>
    function namethis(t){
        t.value=t.value.replace(/ /g,"_");
        if (t.value.replace(/ /g,"_")==localStorage.testname){
            t.blur();
            document.getElementById("yes").innerHTML="<span style= \'color:lightgreen;\' ><i class='fas fa-check-double'></i>Name confirmed! Press <kbd>Get Ready</kbd>!";
            document.getElementById("submit").disabled=false;
        }
        else{
             document.getElementById("yes").innerHTML="<i class='fas fa-exclamation'></i> Not correct yet...";
        }
        if(localStorage.filename!=document.getElementById("thenameis").innerHTML){
            document.getElementById("yes").innerHTML="Something is wrong. Contact Akshat to report error.";
        }
    }

    function s1(){
            /*var x=document.getElementById("inputname").value;
            var y= document.getElementById("inputcode").value;
            var z=x+y;
                        localStorage.setItem("testname",z);
                        localStorage.setItem("name",x);
                        localStorage.setItem("code",y);
                        document.getElementById("namehidden").value=z;*/
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
            addp(this);
            //document.getElementById("loader").style.display="none";
                }
            };
            xhttp.open("GET","/blanktests/tests/"+document.getElementById("thenameis").innerHTML+"p.xml?" + Math.random(),true);
            xhttp.send();
            /////////
            var xhttp1 = new XMLHttpRequest();
              xhttp1.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
            addc(this);
            //document.getElementById("loader").style.display="none";
                }
            };
            xhttp1.open("GET","/blanktests/tests/"+document.getElementById("thenameis").innerHTML+"c.xml?" + Math.random(),true);
            xhttp1.send();
            ////////
            var xhttp2 = new XMLHttpRequest();
              xhttp2.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
            addm(this);
            //document.getElementById("loader").style.display="none";
                }
            };
            xhttp2.open("GET","/blanktests/tests/"+document.getElementById("thenameis").innerHTML+"m.xml?" + Math.random(),true);
            xhttp2.send();
            /////
          }
          
          function addp(xml1){
               var xmlDoc = xml1.responseXML;
               if(xmlDoc==null||xmlDoc==undefined){
                   document.getElementById("reloadnotice").innerHTML="Error in loading files. Reload page.";
               }
               var totalp = xmlDoc.getElementsByTagName("q").length;
               document.getElementById("qp").value=totalp;
          }
          function addc(xml1){
               var xmlDoc1 = xml1.responseXML;
               if(xmlDoc1==null||xmlDoc1==undefined){
                   document.getElementById("reloadnotice").innerHTML="Error in loading files. Reload page.";
               }
               var totalc = xmlDoc1.getElementsByTagName("q").length;
               document.getElementById("qc").value=totalc;
          }
          function addm(xml1){
               var xmlDoc2 = xml1.responseXML;
               if(xmlDoc2==null||xmlDoc2==undefined){
                    document.getElementById("reloadnotice").innerHTML="Error in loading files. Reload Page or start over again.";
               }
               var totalm = xmlDoc2.getElementsByTagName("q").length;
               document.getElementById("qm").value=totalm;
			   //localStorage.testname=temp1;
			   //document.getElementById("namehidden")=localStorage.testname;
          }
    </script>
    </body>
    </html>