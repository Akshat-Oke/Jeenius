<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit();
}
else{
    $room="DEFAULTROOM.xml";
    $name=$_SESSION['name'];
    $myfile=fopen("usernames.txt", "a") or die("error in opening");
    fwrite($myfile,"\n".$name);
    fclose($myfile);
    $room=$_GET['roomCode'];
    if(isset($_GET['name'])){
        $name=$_GET['name'];
    }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Jeenius</title>
    <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Noto%20Serif%20SC|Vollkorn%20SC|Ovo">
    <!-- Vollkorn SC is a font-->
    <style>
     html{
        scroll-behavior: smooth; // Animates scrolling - "smooth" scrolling
    }
     header, main, footer {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
      #input-div input{
         width:90% !important;
         float:left;
     }
    }
    #textlog{
        height:80vh;
        overflow:auto;
    }
    #input-div{
        text-align:center;
        position:fixed;
        bottom:0;
        width:95%;
        margin-left:5px;
        overflow:auto;
        margin-bottom:0;
        background-color:rgba(255,255,255,0.6);
    }
    #input-div span{
       // margin:5px 8px;
       float:left;
       margin-right:10px;
        border-radius:14px;
        margin-right:12px;
        background:rgba(0,0,0,0.4);
        font-size:1.4em;
        //padding:8px 12px;
    }
    #input-div .row{
        margin-bottom:0 !important;
    }
    @media only screen and (max-width : 992px) {
     #input-div input{
         width:85%;
         float:left;
     }
 }
    #input-div input[type=text]{
        margin-left:5px;
        //border:2px solid black;
        float:left;
        width:65%;//chenage this to 90% on narrow screen
    }
     
    #input-div button{
            height: 32.4px;
    line-height: 32.4px;
    font-size: 13px;
    border:none;
        border-radius:50%;
        padding:7px;
        margin-left:10px;
    }
    #input-div button i{
        margin:none;
    }
    #input-div button{
    padding:5px 2px;
    opacity:1;
    outline:none;
    margin-left:10px;
    background-color:#ee88e5;
    font-size:1.2em;
    border:none;
    float:left;
    transition:0.4s;
}

#input-div button{
    opacity:1;
    position:relative;
    width:2.6em;
    height:2.6em;
    outline:none;
    margin-left:10px;
    background-color:#ee88e5;
    font-size:1.2em;
    border:none;
    border-radius:50%;
    transition:0.4s;
}

#input-div button{
    background-color:#ea2cbc;
}
span.sendicon{
    position:relative;
}

    a-m{
        margin-left:2vw;
        display:table;
        min-width:20%;
        max-width:80%;
        font-family:'Ovo',serif;
        font-size:1.8em;
        border-radius:14px;
        background-color:rgba(53,228,202, 0.6);
        color:black;
        padding:12px 10px;
    }
    ans-m{
        display:table;
        max-width:80%;
        border-radius:8px;
        position:relative;
        top:-5px;
        font-family:'Noto Serif SC', serif;
        font-size:1.5em;
        padding:5px 7px;
        background-color:rgba(225,38,206, 0.6);
        margin-bottom:2vh;
        margin-left:3vw;
    }
    s-m{
        display:inline-block;
        font-size:1.2em;
        font-family:'Vollkorn SC',serif;
        margin-left:3vw;
        
    }
    ans-m span{
        font-size:0.6em;
        float:right;
        position:relative;
        bottom:-20px;
        padding:3px;
    }
    s-m span{
        font-size:1.2em;
        font-family:'Noto Serif SC', serif;
    }
    a-m span{
        float:right;
        font-size:1em;
        font-family:'Thasadith',serif;
        margin:8px;
    }
    .answer2{
        margin:auto;
    }
    #changerole{display:none;}
    .selectuser{
        font-size:16px;

    }
    .selectuser:hover{
        cursor:pointer;
    }
    </style>
    </head>
    <body>
    <div class="navbar-fixed">
  <nav style="z-index:-1;" class="teal accent-3">
    <div class="nav-wrapper">
      <a href="" target="_blank" class="brand-logo center">20 Questions</a>
       <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="https://www.youtube.com/channel/UCpqryyFC1Gu8fcNrxd7kDAw" target="_blank" class="waves-effect waves-teal"><i class="fab fa-youtube"></i>YouTube Channel</a></li>
      </ul>
    </div>
  </nav>
  </div>
  <ul id="mobile-demo" class="sidenav sidenav-fixed">
    <div id="userList" style="position: relative; height:90%;">
    <li><h4 class="header red-text">Room <?php echo $room;?></h4></li>
    <li style="position:absolute;bottom:0; width:100%;"><a href='logout.php' class='waves-effect waves-teal'>Log out</a></li>
    <li><a href="https://www.youtube.com/channel/UCpqryyFC1Gu8fcNrxd7kDAw" target="_blank" class="waves-effect waves-teal"><i class="fab fa-youtube"></i>Visit my YouTube Channel</a></li>
    <li id="changerole" ><a class="waves-effect waves-blue" onclick="changeuser();">Change your role</a></li>
    <li><a class="subheader">Users in this room</a></li>
    <!--<li><a>Ash <span class="new badge" data-badge-caption="">Online</span></a></li>-->
    </div>
  </ul>
  <main>
       <div id="textlog">
       Ask your first question!
       </div>  
       <!--<button class="btn" onclick="load();">Load</button>-->
       <div style="height:20vh;"></div>
       <div id="input-div" class='row'>

       </div>
       
  </main>
        <script>
       
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems, {
   });
    getdata();
  });

   var name="<?php echo $name;?>";
   var roomCode="<?php echo $room;?>";
   var guessing=false;
   var theuseris;
   var yes;
   var namearray=[''];
   function getdata(){
       yes=false;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlDoc = this.responseXML;
            if(xmlDoc==null||xmlDoc==undefined||xmlDoc==false||xmlDoc==""){
               window.location.replace("login.php?game=over");
           }
            guessing = (name==xmlDoc.getElementsByTagName("theuser")[0].childNodes[0].nodeValue);
            theuseris = xmlDoc.getElementsByTagName("theuser")[0].childNodes[0].nodeValue;
            console.log(guessing);
            var names= xmlDoc.getElementsByTagName("name");
            var thename="";
            for (var i=0; i<names.length; i++){
                 thename=names[i].childNodes[0].nodeValue.trim();
                 namearray.push(names[i].childNodes[0].nodeValue.trim());
                if(name.trim()==thename.trim()){
                    yes=true;
                }
                //namearray.push(thename);
                //document.getElementById("userList").innerHTML+="<li id='"+thename.replace(" ","_")+"'><a>"+thename;
                if(thename==theuseris){ 
                    document.getElementById("userList").innerHTML+="<li id='"+thename.replace(" ","_")+"'><a>"+thename+"<span class='new badge' data-badge-caption=''>Answerer</span></a></li>";
                }
                else{
                    document.getElementById("userList").innerHTML+="<li id='"+thename.replace(" ","_")+"'><a>"+thename+"</a></li>";
                }
            }
            if(!yes)
            adduserinroom();
            setinput();
            console.log(namearray);
        }
    };
        xhttp.open("GET", roomCode+"?"+Math.random(), true);
        xhttp.send();
   }

   function setinput(){
       var t="";
       if(guessing){
           document.getElementById("changerole").style.display="block";
            t= "<div class='row'><span class='btn-small answer purple accent-2' onclick=\"addanswer('Yes');\">Yes</span><span class='btn-small purple accent-2' onclick=\"addanswer('No');\">No</span><span class='btn purple accent-2' onclick=\"addanswer('Not sure');\">Not sure</span><span class='waves-effect green btn-small' onclick='gameover();'>Correct!</span></div>";
           // t+='<span style="float:right;"><i class="fas fa-caret-square-up"></i></span>';
           t+="<div class='row'><input type='text' id='answertext' style='float:left;'><button class=' waves-effect blue white-text' onclick='addanswer(0);' style='float:left;'><i class='fas fa-paper-plane'></i></button></div>";
       }
       else{
           t="<input type='text' id='text' ><button class=' waves-effect blue white-text' onclick='addquestion();'><i class='fas fa-paper-plane'></i></button>";
       }
       document.getElementById("input-div").innerHTML=t;
   }
   function adduserinroom(){
       var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("done");
        }
    };
        xhttp.open("GET", "adduser.php?roomCode="+roomCode+"&name="+name, true);
        xhttp.send();
   }
   function addquestion(){
       checkedforans=false;
       if(quesallowed){
       var ques = document.getElementById("text").value;
       if(ques.trim()!=""){
           var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            console.log("sent");
            var objDiv = document.getElementById("textlog");
            setTimeout(function(){objDiv.scrollTop = objDiv.scrollHeight;},200);
            }
            };
             var currentdate = new Date(); 
var datetime =  + currentdate.getDate() + "-"
                + (currentdate.getMonth()+1)  + "-" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes(); 
            xhttp.open("GET", "addquestion.php?roomCode="+roomCode+"&name="+name+"&time="+datetime+"&question="+ques, true);
            xhttp.send();
       }
       }
       else{
           document.getElementById("textlog").innerHTML+="<h5 class='center-align'>Question is not allowed right now.</h5>";
       }
       document.getElementById("text").value="";
       
   }
   function addanswer(ans){
       checkedforans=false;
       //var ques = document.getElementById("text").value; badge
       if(ans==0){
           var answer=document.getElementById("answertext").value;
           var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            console.log("sent");
            var objDiv = document.getElementById("textlog");
            setTimeout(function(){objDiv.scrollTop = objDiv.scrollHeight;},200);
            }
            };
             var currentdate = new Date(); 
var datetime =  + currentdate.getDate() + "-"
                + (currentdate.getMonth()+1)  + "-" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes(); 
            xhttp.open("GET", "addanswer.php?roomCode="+roomCode+"&name="+name+"&time="+datetime+"&answer="+answer, true);
            xhttp.send();
            document.getElementById("answertext").value="";
       }
       else if(ans.trim()!=""){
           var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            console.log("sent");
            }
            };
             var currentdate = new Date(); 
var datetime =  + currentdate.getDate() + "-"
                + (currentdate.getMonth()+1)  + "-" 
                + currentdate.getFullYear() + " "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes(); 
            xhttp.open("GET", "addanswer.php?roomCode="+roomCode+"&name="+name+"&time="+datetime+"&answer="+ans, true);
            xhttp.send();
       }
   }
   var qnum=-1;
   var checkedforans=false;
   var quesallowed=true;
   var once=0;
   function load(){
       console.log(checkedforans);
       var xhttp= new XMLHttpRequest();
       xhttp.onreadystatechange = function(){
           if (this.readyState == 4 && this.status == 200) {
           console.log("hurrah!");
           checkusers();
           var te = document.getElementById("textlog");
           var xmlDoc = this.responseXML;
           if(xmlDoc==null||xmlDoc==undefined||xmlDoc==false||xmlDoc==""){
               window.location.replace("login.php?game=over");
           }
           var qnum1 = xmlDoc.getElementsByTagName("q").length;
           if(qnum1-qnum==1){
               console.log("in 1");
               //qnum=qnum1;
               var curq = xmlDoc.getElementsByTagName("q")[qnum];
               //if(guessing)
               te.innerHTML+="<s-m>"+curq.getElementsByTagName("by")[0].childNodes[0].nodeValue;
               te.innerHTML+=" · <span>"+curq.getElementsByTagName("time")[0].childNodes[0].nodeValue+"</span></s-m><a-m>"+curq.getElementsByTagName("qu")[0].childNodes[0].nodeValue+"</a-m>";
               qnum=qnum1;
               checkedforans=false;
               var objDiv = document.getElementById("textlog");
            setTimeout(function(){objDiv.scrollTop = objDiv.scrollHeight;},200);
           }
           else if(qnum1>(qnum+1)){
               for (var i=0;i<qnum1; i++){

                   var curq=xmlDoc.getElementsByTagName("q")[i];
                   te.innerHTML+="<s-m>"+curq.getElementsByTagName("by")[0].childNodes[0].nodeValue;
               te.innerHTML+=" · <span>"+curq.getElementsByTagName("time")[0].childNodes[0].nodeValue+"</span></s-m><a-m>"+curq.getElementsByTagName("qu")[0].childNodes[0].nodeValue+"</a-m>";
               if(curq.getElementsByTagName("ans")[0]==null||curq.getElementsByTagName("ans")[0]==undefined){
                   quesallowed=false;
                   checkedforans=false;
               }else{
               te.innerHTML+="<ans-m>"+curq.getElementsByTagName("ans")[0].getElementsByTagName("ansval")[0].childNodes[0].nodeValue+"<span>"+curq.getElementsByTagName("ans")[0].getElementsByTagName("time")[0].childNodes[0].nodeValue+"</span></ans-m>";
               checkedforans=true;
               console.log(curq.getElementsByTagName("ans")[0].getElementsByTagName("ansval")[0].childNodes[0].nodeValue);
               quesallowed=true;
               }
               }
               var objDiv = document.getElementById("textlog");
            setTimeout(function(){objDiv.scrollTop = objDiv.scrollHeight;},200);
               qnum=qnum1;
               //checkedforans=true;
               once=1;
           }
           else if(!checkedforans||once==1){
               once=2;
               //checkedforans=true;
               var h = qnum-1;
               var curq = xmlDoc.getElementsByTagName("q")[h].getElementsByTagName("ans")[0];
               if(curq!=undefined && curq!=null && curq!="" && curq!=false){
               te.innerHTML+="<ans-m>"+curq.childNodes[0].nodeValue+"<span>"+curq.getElementsByTagName("time")[0].childNodes[0].nodeValue+"</span></ans-m>";
               console.log(curq.childNodes[0].nodeValue);
               quesallowed=true;
               checkedforans=true;
               var objDiv = document.getElementById("textlog");
            setTimeout(function(){objDiv.scrollTop = objDiv.scrollHeight;},200);
               }
               else{
                   checkedforans=false;
                   quesallowed=false;
               }
           }
           
       }
       };
       //xhttp.open("GET", "loadit.php?roomCode="+roomCode+"&name="+name, true);
       xhttp.open("GET", roomCode+"?"+Math.random(), true);
       xhttp.send();
   }
   window.onbeforeunload = function(){
       ///var xhttp = new XMLHttpRequest();
       //xhttp.onreadystatechange = function(){
        // if(this.status==4 && this.status==200){
   //return 'Are you sure you want to leave?';
          // }
       //}
    //xhttp.open("GET", "useroffline.php?name="+name+"&rn="+Math.random(), false);
    //xhttp.send();
     //return 'Are you sure you want to leave?';
};
function checkusers(){
     var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var yo = this.responseText;
            var thefile = yo.split("\n");
            thefile.forEach(checkit);
        }
    };
        xhttp.open("GET", "usernames.txt?"+Math.random(), true);
        xhttp.send();
}
function checkit(item, index) {
    /*item=item.trim();
    console.log(item);
    var item2=item.replace(" ","_");
  if(namearray.includes( item)){
      //document.getElementById(item2).innerHTML="<a>"+item+" <span class='new badge' data-badge-caption=''>Online</span></a>";
  }
  else{
     // document.getElementById(item2).innerHTML="<a>"+item+" <span class=' badge' data-badge-caption=''>Offline</span></a>";
  }*/
}
function gameover(){
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var yo = this.responseText;
            if(yo=="Success"){
                window.location.replace("login.php?game=over");
            }
        }
    };
        xhttp.open("GET", "gameover.php?change=no&roomCode="+roomCode, true);
        xhttp.send();
}
function changeuser(){
    var g = document.getElementById("changelist");
    g.innerHTML="";
    for (var i =1; i<namearray.length; i++){
        if(name!=namearray[i])
        g.innerHTML+="<li class='selectuser' onclick='select(this);'>"+namearray[i]+"</li>";
    }
    themodal.open();
}
function select(li){
    var t = document.getElementById("changelist").getElementsByTagName("li");
    for(var d=0;d<t.length;d++){
        t[d].style.backgroundColor="white";
    }

    li.style.backgroundColor="rgba(0,0,10,0.4)";
    document.getElementById("dothis").innerHTML=li.innerHTML;
    
}
function goahead(){
    var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var yo = this.responseText;
            if(yo=="Success"){
                location.reload(true);
            }
        }
    };
        xhttp.open("GET", "gameover.php?change="+document.getElementById("dothis").innerHTML.trim()+"&roomCode="+roomCode+"&name="+name, true);
        xhttp.send();
}
var themodal, themodal22;
var loadtimer;
document.addEventListener('DOMContentLoaded', function() {
    var themodal0 = document.getElementById("modal1");
 themodal = M.Modal.init(themodal0, {});
 var themodal1 = document.getElementById("modal2");
 themodal22 = M.Modal.init(themodal1, {});
  /* loadtimer = setInterval(function(){load();},2000);
  setTimeout(function(){clearTimeout(loadtimer); themodal22.open(); }, 60000);*/
  themodal22.open();
  document.getElementById("why").style.display="none";
  });
  function resume(){
      loadtimer = setInterval(function(){load();},2000);
       setTimeout(function(){clearTimeout(loadtimer); themodal22.open();document.getElementById("why").style.display="none"; }, 60000);
  }
  function showwhy(){
      document.getElementById("why").style.display="block";
  }

 //scrollh
  </script>
  <div id="dothis" style="display:none;"></div>
   <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Select who to pass the answerer role:</h4>
      <p id="changelist"></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="goahead();">Go Ahead</a>
      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Cancel</a>
    </div>
  </div>
   <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Auto refresh paused!</h4>
      <p>Syncing of messages has been paused unless you resume. Click on the "Resume" below. Clicking anywhere else won't resume syncing.<br>
      <a href="#" onclick="showwhy();">Why this?</a></p>
      <p id="why">This is to prevent unnecessary hits to the server. I have a limit of 50,000 hits per day for this website, after which it will get suspended for a day.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="resume();">Resume</a>
    </div>
  </div>
<!--Game over card here-->
   <div style="display:none;" id="gameover" class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Game over!</span>
          <p>What do you want to do?</p>
        </div>
        <div class="card-action">
          <a href="#" onclick="goahead();">Switch users</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
        </body>
        </html>