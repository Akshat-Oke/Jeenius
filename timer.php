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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Ubuntu|Noto%20Serif%20SC|Orbitron|Ovo">
    <!-- Vollkorn SC is a font-->
    <style>
     html{
        scroll-behavior: smooth; // Animates scrolling - "smooth" scrolling
    }
    body{
        user-select:none;
        -webkit-user-select:none;
        -ms-user-select:none;
        -moz-user-select:none;
    }
    .rotating{
    animation:rotate 1s 0s ease-out;
}
@keyframes rotate{
    from{transform: rotate(0deg);}
    to{transform: rotate(360deg);}
}
#timer, #scores{
    min-height:50px;
    font-size:26px;
    color:black;
    text-align:center;
    font-family:'Ovo',serif;
}
#timer{
    font-family:'Orbitron',Times New Roman, serif;
    font-size:35px;
}
#timer-wrapper{
    min-height:100px;
    margin:5px;
    border-radius:10px;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.4), -5px -5px 10px rgba(0,0,0,0.4);
}
.reset-but{
    position:fixed;
    bottom:18px;
    margin-left:-50px;
    left:50vw;
}
#scramble{
    font-size:24px;
    font-family:"Noto Serif SC",serif;
}
.divider{
    width:60vw;
    height:2px;
    background:rgba(0,0,0,0.7);
    margin: 8px auto;
}
#new-scores{
    display:none;
}
    </style>
    </head>
    <body onload="scramble();">
        <h3 style="display:inline-block; clear:both;">Jeenius Timer <span class="new badge blue" data-badge-caption="2.0">v</span></h3>
        <div class="row">
    <div class="col s12 m12">
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1" id="thetab">
            <li class="tab"><a href="#timer-wrapper" class="active">Timer</a></li>
            <li class="tab" onclick="scores_seen();"><a href="#scores-wrapper">Scores <span id="new-scores" class="new badge">0</span> </a></li>
            <li class="tab"><a href="#settings">Settings</a></li>
        </ul>
        </div>
        </div>

        <div id="timer-wrapper">
        <div id="scramble" style="text-align:center;"></div>
        <div class="divider"></div>
        <div id="timer">
        <div style="font-size:24px; font-family:'Thasadith',serif;">Press and hold <kbd>Space Bar</kbd> or <kbd>Enter</kbd> key to begin.<br>
        Just touch and hold if you are on a touchscreen device.
        <br> Release to start timer. Touch/ press key again to stop.
        </div>
        </div>
        <button class="btn waves-effect waves-light reset-but" onclick="reset(); rotateit();">Reset <i id="reset" class="fas fa-redo-alt"></i></button>
        </div>
        <div id="scores-wrapper">
        <h3 class="center-align">Scores</h3>
        <div id="scores"></div>
        </div>
        <div id="settings">Coming Soon</div>
        <script>
        window.onbeforeunload = function(){
 
    localStorage.setItem("lastname", "Smith");
     //return 'Are you sure you want to leave?';
};
window.onload = function(){
    //alert(localStorage.lastname);
    scramble();
}

        var tabs = document.getElementById("thetab");
        var tab_instance = M.Tabs.init(tabs, {});
        var start_time=0;
        var time_now=0;
var started=0, pressed=0;
var recent=0;
var ready; //for tready timeout
var moves = ["F" , "R" , "U" , "D" , "B" , "L" , "F'" , "R'" , "U'" , "D'" , "B'" , "L'" , "F2" , "R2" , "U2" , "B2" , "D2" , "L2"];
var scramMoves=18;
function scores_seen(){
    document.getElementById("new-scores").innerHTML=0;
    document.getElementById("new-scores").style.display="none";
    setTimeout(function(){window.scrollTo(0,document.body.scrollHeight);},100);
}
//Event Listeners for desktops 

        document.addEventListener("keydown", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  
  if (event.keyCode === 13 ||event.keyCode === 32) {
    // Cancel the default action, if needed
    // Trigger the button element with a click
    if(started==0 && pressed==0){
    start_time=new Date().getTime();
    ready = setTimeout(function(){document.getElementById("timer").innerHTML="Ready.";},610)
    document.getElementById("timer").innerHTML="Hold for 600 milliseconds.";
    pressed=1;
    }
  }

  if(pressed==0 && started!==0){
        //startit(0);
        endit();
        started=0;
        //pressed=-1; //so... since now if you "keyup", pressed==0 and thus timer gets started again. Put this as -1 and check it in keyup func
        //Above one was a stupid solution. I have added &&pressed==1 to keyup now
        document.getElementById("scores").innerHTML+= "<div>"+document.getElementById("scramble").innerHTML+"<br/>" +recent+"</div>";
        document.getElementById("timer").innerHTML+="<br><hr> Started = "+started+ "Pressed = "+pressed;
        document.getElementById("new-scores").style.display="block";
        document.getElementById("new-scores").innerHTML=1+Number(document.getElementById("new-scores").innerHTML);
        scramble();
    }
});

document.addEventListener("keyup", function (){
    //document.getElementById("timer").innerHTML="Yeah";
     if (event.keyCode === 13 ||event.keyCode === 32) {
         if(started==0 && pressed==1){
        pressed=0;
     time_now= new Date().getTime();
    var startornot= time_now-start_time;
    document.getElementById("timer").innerHTML="Held for only "+startornot+" milliseconds.";
    clearTimeout(ready);
    if(startornot>=600){
        startit(1);
        /*Switch to timer tab*/
        tab_instance.select('timer-wrapper');
        //document.getElementById("timer").innerHTML="Yeah";
        started=1;
        //document.getElementById("timer").innerHTML+="Started = "+started+ "Pressed = "+pressed;
        }
    }
    else{
        /*if(pressed==0){
        //startit(0);
        endit();
        started=0;
        document.getElementById("scores").innerHTML+= "<div>"+document.getElementById("scramble").innerHTML+"<br/>" +recent+"</div>";
        document.getElementById("timer").innerHTML+="<br><hr> Started = "+started+ "Pressed = "+pressed;
        scramble();
        }*/
    }
    }
});


//Event Listeners for Touch screens
var moved=0; //if finger is moved
var area = document.getElementById("timer-wrapper");
        area.addEventListener("touchstart", function(event) {
  // Number 13 is the "Enter" key on the keyboard
    // Cancel the default action, if needed
    // Trigger the button element with a click
    if(started==0 && pressed==0){
    start_time=new Date().getTime();
    ready = setTimeout(function(){document.getElementById("timer").innerHTML="Ready.";},610)
    document.getElementById("timer").innerHTML="Hold for 600 milliseconds.";
    pressed=1;
  }

   if(pressed==0 && started!==0){
        //startit(0);
        endit();
        started=0;
        //pressed=-1; //so... since now if you "keyup", pressed==0 and thus timer gets started again. Put this as -1 and check it in keyup func
        //above was a stupid solution. I have added &&pressed==1 to keyup now
        document.getElementById("scores").innerHTML+= "<div>"+document.getElementById("scramble").innerHTML+"<br/>" +recent+"</div>";
       // document.getElementById("timer").innerHTML+="<br><hr> Started = "+started+ "Pressed = "+pressed;
        document.getElementById("new-scores").style.display="block";
        document.getElementById("new-scores").innerHTML=1+Number(document.getElementById("new-scores").innerHTML);
        scramble();
    }

});

area.addEventListener("touchend", function (){
    //document.getElementById("timer").innerHTML="Yeah";
         if(started==0 && pressed==1){
        pressed=0;
     time_now= new Date().getTime();
    var startornot= time_now-start_time;
    if(moved==0){
        clearTimeout(ready);
    document.getElementById("timer").innerHTML="Held for only "+startornot+" milliseconds.";
    }
    if(startornot>=600 && moved==0){
        startit(1);
        /*Switch to timer tab*/
        tab_instance.select('timer-wrapper');
        started=1;
        document.getElementById("timer").innerHTML+="Started = "+started+ "Pressed = "+pressed;
}
    }
    else{
        /*if(pressed==0){ //This has been moved to touchstart to improve responsiveness
        endit();
        started=0;
        scramble();
        document.getElementById("scores").innerHTML+= document.getElementById("timer").innerHTML+"<br/>";
        //document.getElementById("timer").innerHTML+="<br><hr> Started = "+started+ "Pressed = "+pressed;
        }*/
    }
});
document.addEventListener("touchmove", function(){
    if(pressed==1 && started==0){
    endit();
    document.getElementById("timer").innerHTML="Interrupted";
    started=0;
    pressed=0;
    moved=1;
    clearTimeout(ready);
    setTimeout(function(){moved=0;},700);
    }
});
//////////End of touch screen functions/////////
function reset(){
    setTimeout(function(){
    document.getElementById("scores").innerHTML="";
    document.getElementById("timer").innerHTML="";
    },100);
}

var counter;
function startit(status){
    //if(status==1)
   counter = setInterval(countit, 10);
 // else
  //clearInterval(counter);
}
function endit(){
    clearInterval(counter);
}
function countit(){
    var update=new Date().getTime();
    var showthis= update- time_now;
    recent= timefordisplay(showthis);
    document.getElementById("timer").innerHTML= timefordisplay(showthis);
}
document.addEventListener("keyup", function(){
    if(started==1){
       // clearInterval(count);
       /// started=0;
    }
});
function timefordisplay(milliseconds){
  //Get hours from milliseconds
  var hours = milliseconds / (1000*60*60);
  var absoluteHours = Math.floor(hours);
  var h = absoluteHours > 9 ? absoluteHours : '0' + absoluteHours;

  //Get remainder from hours and convert to minutes
  var minutes = (hours - absoluteHours) * 60;
  var absoluteMinutes = Math.floor(minutes);
  var m = absoluteMinutes > 9 ? absoluteMinutes : '0' +  absoluteMinutes;

  //Get remainder from minutes and convert to seconds
  var seconds = (minutes - absoluteMinutes) * 60;
  var absoluteSeconds = Math.floor(seconds);
  //var s = absoluteSeconds > 9 ? absoluteSeconds : '0' + absoluteSeconds;
  var s= absoluteSeconds;

  var millisec = (seconds - absoluteSeconds) * 1000;
  millisec= millisec.toFixed(0);
  /*if(milliseconds<3000){
      return "What?";
  }*/
  //else{
      if(m==0)
      return s + "." + millisec;
      else
  return m + ':' + s + "." + millisec;
  //}
}

            function rotateit(){
                document.getElementById("reset").classList.add("rotating");
                setTimeout(function(){
            document.getElementById("reset").classList.remove("rotating");
        },1000);
            }
            //var moves = ["F" , "R" , "U" , "D" , "B" , "L" , "F'" , "R'" , "U'" , "D'" , "B'" , "L'" , "F2" , "R2" , "U2" , "B2" , "D2" , "L2"];
            var previous;
            function scramble(){
                document.getElementById("scramble").innerHTML="";
                var j=-1;
                var g= moves.length-1;
                previous=-1;
                var reject1, reject2;
                for ( var i=0; i<scramMoves; i++){
                    //j= getRndInteger(0, g);
                    reject1 = previous+6;
                    if(reject1>g){
                        reject1=reject1-moves.length; //to "warp" back around
                    }
                    reject2= previous +12;
                    if(reject2>g){
                        reject1=reject2-moves.length; //to "warp" back around
                    }

                    while (j==previous || j==reject1 || j==reject2){
                        j= getRndInteger(0, g);
                    }
                    document.getElementById("scramble").innerHTML+=moves[j]+" ";
                    previous = j;
                }
            }
            function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min) ) + min;
}
        </script>
    </body>
    </html>