<?php
// Start the session
session_start();

header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
    if(isset($_COOKIE["visited"])||$_SESSION['submitted']=="true") {
        $submitted=1;
       // $submitted=0;
        $over="<p style='font-size:24px;'>You have already submitted a response.</p><p><a class='blue-text' href='results.xml'>View raw data here</a></p></div></body></html>";
        header("submitted.php");
    }
    else{
        $submitted=0;
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
    footer{
        color:rgba(0,0,0,0.7);
    }
    footer a, footer a:visited{
        color:rgba(0,0,0,0.82);
    }
    a:hover{
        color:black;
    }
    #flythis{
            position:relative;
        }
        .fly{
            color:black;
            transition:0.4s;
            -webkit-transition:0.4s;
    animation:haha 1s 0s linear;
}
@keyframes haha{
    from{opacity:1;right:0;}
    to{opacity:0;right:-50px;}
}
.errors{
    margin-left:5px;
    font-size:16px;
}
.errors a{
    color:blue;
}
.share{
            color:rgba(0,0,0,0.7);
            font-size:1.9em;
            margin:-10px 10px;
            text-decoration:none;
            transition:0.4s;
        }
        a.share:visited{
            color:rgba(0,0,0,0.7);
        }
        a.share:hover{
            color:magenta;
        }
        a.feedback{
            font-size:1.4em; color:#33e3e5;
        }
        li:hover{
            cursor:pointer;
        }
    </style>
    </head>
<body>
<div class="fixed">
    <a href="http://jeenius.ga" target="_blank" style="center-align;" >Jeenius</a>
</div>
    <div style="height:6vh;"></div>
    <div class="container">
            <h2> <i class="fas fa-school blue-text"></i> Cutoffs estimation <i class="fas fa-cut red-text"></i></h2>
            <?php if($submitted==1){ echo $over;?>
            
            <hr class="uk-divider-icon">
    <div style="text-align:center; padding:10px;"><div style="font-size:1.8em; font-family:'Vollkorn SC',serif;">Share</div>
<a class="share" href="whatsapp://send?text=https%3A%2F%2Fjeenius.ga%2Fforms$2F%20Form+for+cutoffs+estimation" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i></a>

<a class="share" href="https://www.facebook.com/sharer/sharer.php?u=Form+for+cutoffs+estimationhttps%3A%2F%2Fjeenius.ga%2Fforms%2F" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a>

<a class="share" href="https://twitter.com/intent/tweet?text=Form+for+cutoffs+estimationhttps%3A%2F%2Fjeenius.ga%2Fforms%2F" target="_blank" rel="noopener"><i class="fab fa-twitter-square"></i></a>

<a class="share" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//jeenius.ga&title=Jeenius&summary=Form%20for%20cutoffs$20estimation&source="target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a>

<a class="share" href="https://telegram.me/share/url?url=https%3A%2F%2Fjeenius.ga%2Fforms%2F&text=Form%20for%20cutoffs$20estimation" target="_blank"><i class="fab fa-telegram"></i></a>

<a class="share"  href="fb-messenger://share?link=https%3A%2F%2Fjeenius.ga%2Fforms%2F"><i class="fab fa-facebook-messenger"></i></a>

<div class="line-it-button" data-lang="en" data-type="share-b" data-ver="3" data-url="https://jeenius.ga/forms/" data-color="grey" data-size="small" data-count="false" style="display: none;"></div>
 <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>

<a class="share" href="javascript:void(0);" id="moreshare"><i class="fas fa-share-alt"></i></a>

            <footer style="text-align:center;">
</footer>
</div>

<script>
var shareButton=document.getElementById("moreshare");
if(navigator.share){}
else{
    shareButton.style.display="none";
};
shareButton.addEventListener('click', event => {
  if (navigator.share) {
    navigator.share({
      title: 'Forms - Cutoffs ',
      url: 'https://jeenius.ml/forms/',
      text: 'Fill this form to estimate cutoff for the current Josaa round'
    }).then(() => {
      console.log('Thanks for sharing!');
    })
    .catch(console.error);
  } else {
    shareButton.style.display="none";
  }
});
</script>
</div>
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Jeenius</h5>
                <p class="grey-text text-lighten-4">Jeenius is just a website entirely designed and developed by Akshat Oke. There is no one else involved with this website, except for a few APIs. Check out the other pages too!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="/things/chemtricks.php">Learn</a></li>
                  <li><a class="grey-text text-lighten-3" href="/daily/physicsq.php">Questions</a></li>
                  <li><a class="grey-text text-lighten-3" href="/tests/login.php">Tests</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            No copyrights. Just fun.<br>Made in Pune. 
            <a class="grey-text text-lighten-4 right" href="/contactme.php">Contact Me</a>
            </div>
          </div>
        </footer>
            <?php exit();}?>
            <p class="flow-text">Fill these so that we can know the cutoffs for each branch and college.</p>
            <hr class="uk-divider-icon">
        <form  action="from000.php" method="post"onsubmit="return validate(this);">

            <div class="row">
                <h4><i class="fas fa-code-branch blue-text"></i> Select Branch</h4>
                <div class="input-field col s12">
                    <select id="branch" name="branch" onchange="branchnew(this);">
                    <option value="S" disabled selected>Choose your alloted branch</option>
    
<option value='Aerospace Engineering (4 Years, Bachelor of Technology)'>Aerospace Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Aerospace Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Aerospace Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Agricultural and Food Engineering (4 Years, Bachelor of Technology)'>Agricultural and Food Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))'>Agricultural and Food Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Agricultural Engineering (4 Years, Bachelor of Technology)'>Agricultural Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Applied Geology (5 Years, Integrated Master of Science)'>Applied Geology (5 Years, Integrated Master of Science)</option> 
<option value='Applied Geology (5 Years, Integrated Master of Technology)'>Applied Geology (5 Years, Integrated Master of Technology)</option> 
<option value='Applied Geophysics (5 Years, Integrated Master of Technology)'>Applied Geophysics (5 Years, Integrated Master of Technology)</option> 
<option value='Applied Mathematics (5 Years, Integrated Master of Science)'>Applied Mathematics (5 Years, Integrated Master of Science)</option> 
<option value='Artificial Intelligence (4 Years, Bachelor of Technology)'>Artificial Intelligence (4 Years, Bachelor of Technology)</option> 
<option value='Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)'>Artificial Intelligence and Data Science (4 Years, Bachelor of Technology)</option> 
<option value='Bio Engineering (4 Years, Bachelor of Technology)'>Bio Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Bio Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Bio Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Bio Medical Engineering (4 Years, Bachelor of Technology)'>Bio Medical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Bio Technology (4 Years, Bachelor of Technology)'>Bio Technology (4 Years, Bachelor of Technology)</option> 
<option value='Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))'>Biochemical Engineering with M.Tech. in Biochemical Engineering and Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))'>Bioengineering with M.Tech in Biomedical Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Biological Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Biological Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Biological Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))'>Biological Sciences (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option> 
<option value='Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)'>Biological Sciences and Bioengineering (4 Years, Bachelor of Technology)</option> 
<option value='Biomedical Engineering (4 Years, Bachelor of Technology)'>Biomedical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Biosciences and Bioengineering (4 Years, Bachelor of Technology)'>Biosciences and Bioengineering (4 Years, Bachelor of Technology)</option> 
<option value='Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))'>Biotechnology (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)'>Biotechnology and Biochemical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Biotechnology and Biochemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='BS in Mathematics (4 Years, Bachelor of Science)'>BS in Mathematics (4 Years, Bachelor of Science)</option> 
<option value='Carpet and Textile Technology (4 Years, Bachelor of Technology)'>Carpet and Textile Technology (4 Years, Bachelor of Technology)</option> 
<option value='Ceramic Engineering (4 Years, Bachelor of Technology)'>Ceramic Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Ceramic Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Ceramic Engineering and M.Tech Industrial Ceramic (5 Years, Bachelor and Master of Technology (Dual Degree))'>Ceramic Engineering and M.Tech Industrial Ceramic (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Chemical Engineering (4 Years, Bachelor of Technology)'>Chemical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Chemical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Chemical Engineering (Plastic and Polymer) (4 Years, Bachelor of Technology)'>Chemical Engineering (Plastic and Polymer) (4 Years, Bachelor of Technology)</option> 
<option value='Chemical Science and Technology (4 Years, Bachelor of Technology)'>Chemical Science and Technology (4 Years, Bachelor of Technology)</option> 
<option value='Chemistry (4 Years, Bachelor of Science)'>Chemistry (4 Years, Bachelor of Science)</option> 
<option value='Chemistry (5 Years, Bachelor of Science and Master of Science (Dual Degree))'>Chemistry (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option> 
<option value='Chemistry (5 Years, Integrated Master of Science)'>Chemistry (5 Years, Integrated Master of Science)</option> 
<option value='Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)'>Civil and Infrastructure Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Civil Engineering (4 Years, Bachelor of Technology)'>Civil Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Civil Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Civil Engineering and M. Tech. in Structural Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Civil Engineering and M.Tech in Transportation Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Civil Engineering and M.Tech. in Environmental Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))'>Civil Engineering with any of the listed specialization (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Computer Engineering (4 Years, Bachelor of Technology)'>Computer Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Computer Science & Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))'>Computer Science & Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</option> 
<option value='Computer Science (4 Years, Bachelor of Technology)'>Computer Science (4 Years, Bachelor of Technology)</option> 
<option value='Computer Science (5 Years, Integrated Master of Technology)'>Computer Science (5 Years, Integrated Master of Technology)</option> 
<option value='Computer Science and Artificial Intelligence (4 Years, Bachelor of Technology)'>Computer Science and Artificial Intelligence (4 Years, Bachelor of Technology)</option> 
<option value='Computer Science and Engineering (4 Years, Bachelor of Technology)'>Computer Science and Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Computer Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)'>Data Science and Artificial Intelligence (4 Years, Bachelor of Technology)</option> 
<option value='Data Science and Engineering (4 Years, Bachelor of Technology)'>Data Science and Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Earth Sciences (4 Years, Bachelor of Science)'>Earth Sciences (4 Years, Bachelor of Science)</option> 
<option value='Economics (4 Years, Bachelor of Science)'>Economics (4 Years, Bachelor of Science)</option> 
<option value='Economics (5 Years, Integrated Master of Science)'>Economics (5 Years, Integrated Master of Science)</option> 
<option value='Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))'>Electrical Engineering and M.Tech Power Electronics and Drives (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Electrical and Electronics Engineering (4 Years, Bachelor of Technology)'>Electrical and Electronics Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electrical and Instrumentation Engineering (4 Years, Bachelor of Technology)'>Electrical and Instrumentation Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electrical Engineering (4 Years, Bachelor of Technology)'>Electrical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Electrical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)'>Electrical Engineering (Power and Automation) (4 Years, Bachelor of Technology)</option> 
<option value='Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))'>Electrical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))'>Electrical Engineering with M.Tech. in Power Electronics (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Electronics & Communication Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))'>Electronics & Communication Engineering (5 Years, B.Tech. + M.Tech./MS (Dual Degree))</option> 
<option value='Electronics and Communication Engineering (4 Years, Bachelor of Technology)'>Electronics and Communication Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electronics and Communication Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Electronics and Communication Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Electronics and Communication Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)'>Electronics and Communication Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)</option> 
<option value='Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)'>Electronics and Electrical Communication Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))'>Electronics and Electrical Communication Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Electronics and Electrical Engineering (4 Years, Bachelor of Technology)'>Electronics and Electrical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)'>Electronics and Instrumentation Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electronics and Telecommunication Engineering (4 Years, Bachelor of Technology)'>Electronics and Telecommunication Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electronics Engineering (4 Years, Bachelor of Technology)'>Electronics Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Electronics System Engineering (4 Years, Bachelor of Technology)'>Electronics System Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Energy Engineering with M.Tech. in Energy Systems Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Energy Engineering with M.Tech. in Energy Systems Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Engineering and Computational Mechanics (4 Years, Bachelor of Technology)'>Engineering and Computational Mechanics (4 Years, Bachelor of Technology)</option> 
<option value='Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))'>Engineering Design (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Engineering Physics (4 Years, Bachelor of Technology)'>Engineering Physics (4 Years, Bachelor of Technology)</option> 
<option value='Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))'>Engineering Physics (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Engineering Science (4 Years, Bachelor of Technology)'>Engineering Science (4 Years, Bachelor of Technology)</option> 
<option value='Environmental Engineering (4 Years, Bachelor of Technology)'>Environmental Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Environmental Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Environmental Science and Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Exploration Geophysics (5 Years, Integrated Master of Science)'>Exploration Geophysics (5 Years, Integrated Master of Science)</option> 
<option value='Food Engineering and Technology (4 Years, Bachelor of Technology)'>Food Engineering and Technology (4 Years, Bachelor of Technology)</option> 
<option value='Food Process Engineering (4 Years, Bachelor of Technology)'>Food Process Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Food Technology (4 Years, Bachelor of Technology)'>Food Technology (4 Years, Bachelor of Technology)</option> 
<option value='Food Technology and Management (4 Years, Bachelor of Technology)'>Food Technology and Management (4 Years, Bachelor of Technology)</option> 
<option value='Geological Technology (5 Years, Integrated Master of Technology)'>Geological Technology (5 Years, Integrated Master of Technology)</option> 
<option value='Geophysical Technology (5 Years, Integrated Master of Technology)'>Geophysical Technology (5 Years, Integrated Master of Technology)</option> 
<option value='Industrial and Production Engineering (4 Years, Bachelor of Technology)'>Industrial and Production Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Industrial and Systems Engineering (4 Years, Bachelor of Technology)'>Industrial and Systems Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))'>Industrial and Systems Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))'>Industrial Chemistry (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Industrial Design (4 Years, Bachelor of Technology)'>Industrial Design (4 Years, Bachelor of Technology)</option> 
<option value='Information Technology (4 Years, Bachelor of Technology)'>Information Technology (4 Years, Bachelor of Technology)</option> 
<option value='Information Technology-Business Informatics (4 Years, Bachelor of Technology)'>Information Technology-Business Informatics (4 Years, Bachelor of Technology)</option> 
<option value='Instrumentation and Control Engineering (4 Years, Bachelor of Technology)'>Instrumentation and Control Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Instrumentation Engineering (4 Years, Bachelor of Technology)'>Instrumentation Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Integrated B. Tech.(IT) and M. Tech (IT) (5 Years, Integrated B. Tech. and M. Tech. /MBA)'>Integrated B. Tech.(IT) and M. Tech (IT) (5 Years, Integrated B. Tech. and M. Tech. /MBA)</option> 
<option value='Integrated B. Tech.(IT) and MBA (5 Years, Integrated B. Tech. and M. Tech. /MBA)'>Integrated B. Tech.(IT) and MBA (5 Years, Integrated B. Tech. and M. Tech. /MBA)</option> 
<option value='Life Science (5 Years, Integrated Master of Science)'>Life Science (5 Years, Integrated Master of Science)</option> 
<option value='Manufacturing Science and Engineering (4 Years, Bachelor of Technology)'>Manufacturing Science and Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))'>Manufacturing Science and Engineering with M.Tech. in Industrial and Systems Engineering and Management (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Materials Engineering (4 Years, Bachelor of Technology)'>Materials Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Materials Science and Engineering (4 Years, Bachelor of Technology)'>Materials Science and Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)'>Materials Science and Metallurgical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))'>Materials Science and Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))'>Mathematics & Computing (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option> 
<option value='Mathematics (5 Years, Integrated Master of Science)'>Mathematics (5 Years, Integrated Master of Science)</option> 
<option value='Mathematics and Computing (4 Years, Bachelor of Technology)'>Mathematics and Computing (4 Years, Bachelor of Technology)</option> 
<option value='Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mathematics and Computing (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mathematics and Computing (5 Years, Integrated Master of Science)'>Mathematics and Computing (5 Years, Integrated Master of Science)</option> 
<option value='Mathematics and Computing (5 Years, Integrated Master of Technology)'>Mathematics and Computing (5 Years, Integrated Master of Technology)</option> 
<option value='Mathematics and Scientific Computing (4 Years, Bachelor of Science)'>Mathematics and Scientific Computing (4 Years, Bachelor of Science)</option> 
<option value='Mechanical Engineering (4 Years, Bachelor of Technology)'>Mechanical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mechanical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mechanical Engineering and M. Tech. in Mechanical System Design (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mechanical Engineering and M. Tech. in Thermal Science & Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mechanical Engineering and M.Tech. in Computer Integrated Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mechanical Engineering and M.Tech. in Computer Integrated Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mechanical Engineering with M.Tech. in any of the listed specializations (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mechanical Engineering with M.Tech. in Manufacturing Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mechanical Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)'>Mechanical Engineering with specialization in Design and Manufacturing (4 Years, Bachelor of Technology)</option> 
<option value='Mechatronics Engineering (4 Years, Bachelor of Technology)'>Mechatronics Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)'>Metallurgical and Materials Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Metallurgical and Materials Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Metallurgical Engineering & Materials Science (5 Years, Bachelor and Master of Technology (Dual Degree))'>Metallurgical Engineering & Materials Science (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Metallurgical Engineering (4 Years, Bachelor of Technology)'>Metallurgical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Metallurgical Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)'>Metallurgical Engineering and Materials Science (4 Years, Bachelor of Technology)</option> 
<option value='Metallurgy and Materials Engineering (4 Years, Bachelor of Technology)'>Metallurgy and Materials Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)'>Mineral and Metallurgical Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Mining Engineering (4 Years, Bachelor of Technology)'>Mining Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mining Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Mining Machinery Engineering (4 Years, Bachelor of Technology)'>Mining Machinery Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))'>Mining Safety Engineering (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)'>Naval Architecture and Ocean Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)'>Ocean Engineering and Naval Architecture (4 Years, Bachelor of Technology)</option> 
<option value='Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))'>Ocean Engineering and Naval Architecture (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Petroleum Engineering (4 Years, Bachelor of Technology)'>Petroleum Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)'>Pharmaceutical Engineering & Technology (4 Years, Bachelor of Technology)</option> 
<option value='Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))'>Pharmaceutical Engineering & Technology (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Physics (4 Years, Bachelor of Science)'>Physics (4 Years, Bachelor of Science)</option> 
<option value='Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))'>Physics (5 Years, Bachelor of Science and Master of Science (Dual Degree))</option> 
<option value='Physics (5 Years, Integrated Master of Science)'>Physics (5 Years, Integrated Master of Science)</option> 
<option value='Polymer Science and Engineering (4 Years, Bachelor of Technology)'>Polymer Science and Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Production and Industrial Engineering (4 Years, Bachelor of Technology)'>Production and Industrial Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Production Engineering (4 Years, Bachelor of Technology)'>Production Engineering (4 Years, Bachelor of Technology)</option> 
<option value='Quality Engineering Design and Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))'>Quality Engineering Design and Manufacturing (5 Years, Bachelor and Master of Technology (Dual Degree))</option> 
<option value='Smart Manufacturing (4 Years, Bachelor of Technology)'>Smart Manufacturing (4 Years, Bachelor of Technology)</option> 
<option value='Textile Technology (4 Years, Bachelor of Technology)'>Textile Technology (4 Years, Bachelor of Technology)</option> 
<option value="DNE" style="color:red !important;">My program/ branch isn't listed!</option>
                    </select>
                    <label>Select branch/ program</label>
                </div>
            </div>
            <div class="row">
            <h5> Search for programs</h5>
        <div class="input-field col s12 m12">
          <i class="fas fa-search prefix"></i>
          <input id="icon_prefix1" type="text" onkeyup="sbranch(this);">
          <label for="icon_prefix1">Search</label>
        </div>
        </div>
        <div class="row">
            <ul id="ulb">
            </ul>
        </div>
        <script>function sbranch(s){
            document.getElementById("ulb").innerHTML="";
            var sfor=s.value.toUpperCase();
            var list=document.getElementById("branch").getElementsByTagName("option");
            var text;
            for (var i=0; i<list.length; i++){
                text=list[i].innerHTML;
                if (text.toUpperCase().indexOf(sfor) > -1) {
      document.getElementById("ulb").innerHTML+="<li onclick='selectb(this);'>"+text+"</li>";
    }
            }
        }
        function selectb(w){
            document.getElementById("branch").value=w.innerHTML;
            var e = document.getElementById("branch");
    var branchinst = M.FormSelect.init(e,{});
        }
        </script>

            <div class="row">
                <h4><i class="fas fa-school blue-text"></i> Select College</h4>
                <div class="input-field col s12">
                    <select id="college" name="college" onchange="collegenew(this);">
                    <option value="S" disabled selected>Choose your alloted college</option>
                   
<option value='Indian Institute of Technology Bhubaneswar'>Indian Institute of Technology Bhubaneswar</option> 
<option value='Indian Institute of Technology Bombay'>Indian Institute of Technology Bombay</option> 
<option value='Indian Institute of Technology Mandi'>Indian Institute of Technology Mandi</option> 
<option value='Indian Institute of Technology Delhi'>Indian Institute of Technology Delhi</option> 
<option value='Indian Institute of Technology Indore'>Indian Institute of Technology Indore</option> 
<option value='Indian Institute of Technology Kharagpur'>Indian Institute of Technology Kharagpur</option> 
<option value='Indian Institute of Technology Hyderabad'>Indian Institute of Technology Hyderabad</option> 
<option value='Indian Institute of Technology Jodhpur'>Indian Institute of Technology Jodhpur</option> 
<option value='Indian Institute of Technology Kanpur'>Indian Institute of Technology Kanpur</option> 
<option value='Indian Institute of Technology Madras'>Indian Institute of Technology Madras</option> 
<option value='Indian Institute of Technology Gandhinagar'>Indian Institute of Technology Gandhinagar</option> 
<option value='Indian Institute of Technology Patna'>Indian Institute of Technology Patna</option> 
<option value='Indian Institute of Technology Roorkee'>Indian Institute of Technology Roorkee</option> 
<option value='Indian Institute of Technology (ISM) Dhanbad'>Indian Institute of Technology (ISM) Dhanbad</option> 
<option value='Indian Institute of Technology Ropar'>Indian Institute of Technology Ropar</option> 
<option value='Indian Institute of Technology (BHU) Varanasi'>Indian Institute of Technology (BHU) Varanasi</option> 
<option value='Indian Institute of Technology Guwahati'>Indian Institute of Technology Guwahati</option> 
<option value='Indian Institute of Technology Bhilai'>Indian Institute of Technology Bhilai</option> 
<option value='Indian Institute of Technology Goa'>Indian Institute of Technology Goa</option> 
<option value='Indian Institute of Technology Palakkad'>Indian Institute of Technology Palakkad</option> 
<option value='Indian Institute of Technology Tirupati'>Indian Institute of Technology Tirupati</option> 
<option value='Indian Institute of Technology Jammu'>Indian Institute of Technology Jammu</option> 
<option value='Indian Institute of Technology Dharwad'>Indian Institute of Technology Dharwad</option> 
<option value='Dr. B R Ambedkar National Institute of Technology, Jalandhar'>Dr. B R Ambedkar National Institute of Technology, Jalandhar</option> 
<option value='Malaviya National Institute of Technology Jaipur'>Malaviya National Institute of Technology Jaipur</option> 
<option value='Maulana Azad National Institute of Technology Bhopal'>Maulana Azad National Institute of Technology Bhopal</option> 
<option value='Motilal Nehru National Institute of Technology Allahabad'>Motilal Nehru National Institute of Technology Allahabad</option> 
<option value='National Institute of Technology Agartala'>National Institute of Technology Agartala</option> 
<option value='National Institute of Technology Calicut'>National Institute of Technology Calicut</option> 
<option value='National Institute of Technology Delhi'>National Institute of Technology Delhi</option> 
<option value='National Institute of Technology Durgapur'>National Institute of Technology Durgapur</option> 
<option value='National Institute of Technology Goa'>National Institute of Technology Goa</option> 
<option value='National Institute of Technology Hamirpur'>National Institute of Technology Hamirpur</option> 
<option value='National Institute of Technology Karnataka, Surathkal'>National Institute of Technology Karnataka, Surathkal</option> 
<option value='National Institute of Technology Meghalaya'>National Institute of Technology Meghalaya</option> 
<option value='National Institute of Technology Nagaland'>National Institute of Technology Nagaland</option> 
<option value='National Institute of Technology Patna'>National Institute of Technology Patna</option> 
<option value='National Institute of Technology Puducherry'>National Institute of Technology Puducherry</option> 
<option value='National Institute of Technology Raipur'>National Institute of Technology Raipur</option> 
<option value='National Institute of Technology Sikkim'>National Institute of Technology Sikkim</option> 
<option value='National Institute of Technology Arunachal Pradesh'>National Institute of Technology Arunachal Pradesh</option> 
<option value='National Institute of Technology, Jamshedpur'>National Institute of Technology, Jamshedpur</option> 
<option value='National Institute of Technology, Kurukshetra'>National Institute of Technology, Kurukshetra</option> 
<option value='National Institute of Technology, Manipur'>National Institute of Technology, Manipur</option> 
<option value='National Institute of Technology, Mizoram'>National Institute of Technology, Mizoram</option> 
<option value='National Institute of Technology, Rourkela'>National Institute of Technology, Rourkela</option> 
<option value='National Institute of Technology, Silchar'>National Institute of Technology, Silchar</option> 
<option value='National Institute of Technology, Srinagar'>National Institute of Technology, Srinagar</option> 
<option value='National Institute of Technology, Tiruchirappalli'>National Institute of Technology, Tiruchirappalli</option> 
<option value='National Institute of Technology, Uttarakhand'>National Institute of Technology, Uttarakhand</option> 
<option value='National Institute of Technology, Warangal'>National Institute of Technology, Warangal</option> 
<option value='Sardar Vallabhbhai National Institute of Technology, Surat'>Sardar Vallabhbhai National Institute of Technology, Surat</option> 
<option value='Visvesvaraya National Institute of Technology, Nagpur'>Visvesvaraya National Institute of Technology, Nagpur</option> 
<option value='National Institute of Technology, Andhra Pradesh'>National Institute of Technology, Andhra Pradesh</option> 
<option value='Indian Institute of Engineering Science and Technology, Shibpur'>Indian Institute of Engineering Science and Technology, Shibpur</option> 
<option value='Atal Bihari Vajpayee Indian Institute of Information Technology & Management Gwalior'>Atal Bihari Vajpayee Indian Institute of Information Technology & Management Gwalior</option> 
<option value='Indian Institute of Information Technology (IIIT)Kota, Rajasthan'>Indian Institute of Information Technology (IIIT)Kota, Rajasthan</option> 
<option value='Indian Institute of Information Technology Guwahati'>Indian Institute of Information Technology Guwahati</option> 
<option value='Indian Institute of Information Technology(IIIT) Kalyani, West Bengal'>Indian Institute of Information Technology(IIIT) Kalyani, West Bengal</option> 
<option value='Indian Institute of Information Technology(IIIT) Kilohrad, Sonepat, Haryana'>Indian Institute of Information Technology(IIIT) Kilohrad, Sonepat, Haryana</option> 
<option value='Indian Institute of Information Technology(IIIT) Una, Himachal Pradesh'>Indian Institute of Information Technology(IIIT) Una, Himachal Pradesh</option> 
<option value='Indian Institute of Information Technology (IIIT), Sri City, Chittoor'>Indian Institute of Information Technology (IIIT), Sri City, Chittoor</option> 
<option value='Indian Institute of Information Technology(IIIT), Vadodara, Gujrat'>Indian Institute of Information Technology(IIIT), Vadodara, Gujrat</option> 
<option value='Indian Institute of Information Technology, Allahabad'>Indian Institute of Information Technology, Allahabad</option> 
<option value='Indian Institute of Information Technology, Design & Manufacturing, Kancheepuram'>Indian Institute of Information Technology, Design & Manufacturing, Kancheepuram</option> 
<option value='Pt. Dwarka Prasad Mishra Indian Institute of Information Technology, Design & Manufacture Jabalpur'>Pt. Dwarka Prasad Mishra Indian Institute of Information Technology, Design & Manufacture Jabalpur</option> 
<option value='Indian Institute of Information Technology Manipur'>Indian Institute of Information Technology Manipur</option> 
<option value='Indian Institute of Information Technology Srirangam, Tiruchirappalli'>Indian Institute of Information Technology Srirangam, Tiruchirappalli</option> 
<option value='Indian Institute of Information Technology Lucknow'>Indian Institute of Information Technology Lucknow</option> 
<option value='Indian Institute of Information Technology(IIIT) Dharwad'>Indian Institute of Information Technology(IIIT) Dharwad</option> 
<option value='Indian Institute of Information Technology Design & Manufacturing Kurnool, Andhra Pradesh'>Indian Institute of Information Technology Design & Manufacturing Kurnool, Andhra Pradesh</option> 
<option value='Indian Institute of Information Technology(IIIT) Kottayam'>Indian Institute of Information Technology(IIIT) Kottayam</option> 
<option value='Indian Institute of Information Technology (IIIT) Ranchi'>Indian Institute of Information Technology (IIIT) Ranchi</option> 
<option value='Indian Institute of Information Technology (IIIT) Nagpur'>Indian Institute of Information Technology (IIIT) Nagpur</option> 
<option value='Indian Institute of Information Technology (IIIT) Pune'>Indian Institute of Information Technology (IIIT) Pune</option> 
<option value='Indian Institute of Information Technology Bhagalpur'>Indian Institute of Information Technology Bhagalpur</option> 
<option value='Indian Institute of Information Technology Bhopal'>Indian Institute of Information Technology Bhopal</option> 
<option value='Indian Institute of Information Technology Surat'>Indian Institute of Information Technology Surat</option> 
<option value='Indian Institute of Information Technology, Agartala'>Indian Institute of Information Technology, Agartala</option> 
<option value='Indian institute of information technology, Raichur, Karnataka'>Indian institute of information technology, Raichur, Karnataka</option> 
<option value='Indian Institute of Information Technology, Vadodara International Campus Diu (IIITVICD)'>Indian Institute of Information Technology, Vadodara International Campus Diu (IIITVICD)</option> 
<option value='Assam University, Silchar'>Assam University, Silchar</option> 
<option value='Birla Institute of Technology, Mesra, Ranchi'>Birla Institute of Technology, Mesra, Ranchi</option> 
<option value='Gurukula Kangri Vishwavidyalaya, Haridwar'>Gurukula Kangri Vishwavidyalaya, Haridwar</option> 
<option value='Indian Institute of Carpet Technology, Bhadohi'>Indian Institute of Carpet Technology, Bhadohi</option> 
<option value='Institute of Infrastructure, Technology, Research and Management-Ahmedabad'>Institute of Infrastructure, Technology, Research and Management-Ahmedabad</option> 
<option value='Institute of Technology, Guru Ghasidas Vishwavidyalaya (A Central University), Bilaspur, (C.G.)'>Institute of Technology, Guru Ghasidas Vishwavidyalaya (A Central University), Bilaspur, (C.G.)</option> 
<option value='J.K. Institute of Applied Physics & Technology, Department of Electronics & Communication, University of Allahabad- Allahabad'>J.K. Institute of Applied Physics & Technology, Department of Electronics & Communication, University of Allahabad- Allahabad</option> 
<option value='National Institute of Electronics and Information Technology, Aurangabad (Maharashtra)'>National Institute of Electronics and Information Technology, Aurangabad (Maharashtra)</option> 
<option value='National Institute of Foundry & Forge Technology, Hatia, Ranchi'>National Institute of Foundry & Forge Technology, Hatia, Ranchi</option> 
<option value='Sant Longowal Institute of Engineering and Technology'>Sant Longowal Institute of Engineering and Technology</option> 
<option value='Mizoram University, Aizawl'>Mizoram University, Aizawl</option> 
<option value='School of Engineering, Tezpur University, Napaam, Tezpur'>School of Engineering, Tezpur University, Napaam, Tezpur</option> 
<option value='Shri Mata Vaishno Devi University, Katra, Jammu & Kashmir'>Shri Mata Vaishno Devi University, Katra, Jammu & Kashmir</option> 
<option value='HNB Garhwal University Srinagar (Garhwal)'>HNB Garhwal University Srinagar (Garhwal)</option> 
<option value='International Institute of Information Technology, Naya Raipur'>International Institute of Information Technology, Naya Raipur</option> 
<option value='University of Hyderabad'>University of Hyderabad</option> 
<option value='Punjab Engineering College, Chandigarh'>Punjab Engineering College, Chandigarh</option> 
<option value='Jawaharlal Nehru University, Delhi'>Jawaharlal Nehru University, Delhi</option> 
<option value='International Institute of Information Technology, Bhubaneswar'>International Institute of Information Technology, Bhubaneswar</option> 
<option value='Central institute of Technology Kokrajar, Assam'>Central institute of Technology Kokrajar, Assam</option> 
<option value='Pondicherry Engineering College, Puducherry'>Pondicherry Engineering College, Puducherry</option> 
<option value='Ghani Khan Choudhary Institute of Engineering and Technology, Malda, West Bengal'>Ghani Khan Choudhary Institute of Engineering and Technology, Malda, West Bengal</option> 
<option value='Central University of Rajasthan, Rajasthan'>Central University of Rajasthan, Rajasthan</option> 
<option value='National Institute of Food Technology Entrepreneurship and Management, Sonepat, Haryana'>National Institute of Food Technology Entrepreneurship and Management, Sonepat, Haryana</option> 
<option value='lndian Institute of Food Processing Technology, Thanjavur, Tamil Naidu.'>lndian Institute of Food Processing Technology, Thanjavur, Tamil Naidu.</option> 
<option value='North Eastern Regional Institute of Science and Technology, Nirjuli-791109 (Itanagar),Arunachal Pradesh'>North Eastern Regional Institute of Science and Technology, Nirjuli-791109 (Itanagar),Arunachal Pradesh</option> 

<option value="DNE">My college isn't listed here!</option>
            </select>
                    <label>Select college</label>
                </div>
            </div>

            <div class="row">
            <h5> Search for colleges</h5>
        <div class="input-field col s12 m12">
          <i class="fas fa-search prefix"></i>
          <input id="icon_prefix2" type="text" onkeyup="scollege(this);">
          <label for="icon_prefix2">Search</label>
        </div>
        </div>
        <div class="row">
            <ul id="ulc">
            </ul>
        </div>
        <script>function scollege(s){
            document.getElementById("ulc").innerHTML="";
            var sfor=s.value.toUpperCase();
            var list=document.getElementById("college").getElementsByTagName("option");
            var text;
            for (var i=0; i<list.length; i++){
                text=list[i].innerHTML;
                if (text.toUpperCase().indexOf(sfor) > -1) {
      document.getElementById("ulc").innerHTML+="<li onclick='selectc(this);'>"+text+"</li>";
    }
            }
        }
        function selectc(w){
            document.getElementById("college").value=w.innerHTML;
            var e = document.getElementById("college");
    var branchinst = M.FormSelect.init(e,{});
        }
        </script>

            <hr class="uk-divider-icon">
            <div class="row">
            <h4><i class="fas fa-sort-numeric-up blue-text"></i> Enter your JEE Advanced Rank</h4>
        <div class="input-field col s12 m12">
          <i class="fas fa-chart-line prefix"></i>
          <input id="icon_prefix" type="number" name="rank" class="validate" min="1" max="40000" required>
          <label for="icon_prefix">JEE Advanced Rank</label>
          <span class="helper-text" data-error="Enter a proper rank" data-success="Alright">Your Rank. Just a number.</span>
        </div>
        </div>
        
        <div class="row">
                <h4><i class="fas fa-users purple-text"></i> Select quota</h4>
                <div class="input-field col s12">
                    <select name="quota" id="quota">
                    <option value="S" disabled >Choose your quota</option>
                    <option value="OPEN" selected>OPEN</option>
<option value="OPEN-PWD">OPEN-PWD</option>
<option value="GEN-EWS">GEN-EWS</option>
<option value="GEN-EWS-PWD">GEN-EWS-PWD</option>
<option value="OBC-NCL">OBC-NCL</option>
<option value="OBC-NCL-PWD">OBC-NCL-PWD</option>
<option value="SC">SC</option>
<option value="SC-PWD">SC-PWD</option>
<option value="ST">ST</option>
<option value="ST-PWD">ST-PWD</option>
<option value="Female-only">Female-only</option>
            </select>
                    <label>Select quota</label>
                </div>
            </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Let's Go!
        <span id="send">
    <i class="material-icons right">send</i>
    </span>
  </button><div class="errors">
    In case of any "Page not working" error or any other difficulties after submitting, 
<a href="/contactme.php?subject=Cutoff_Form" target="_blank">contact me here.</a></div>
        </form>
    </div>
        <script>

        if(localStorage.useris =="Akshat"){
            //alert("Welcome, Ash");
        }
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, 
    {});
    
  });
  function sendit(){
      document.getElementById("flythis").classList.add("fly");
  }

  function branchnew(s){
      if(s.value=="DNE"){
         // document.getElementById("newbranch").style.display="block";
         window.location.href="http://jeenius.ga/contactme.php?subject=Branch_Missing"
      }
      else{
         // document.getElementById("newbranch").style.display="block";
         console.log(s.value);
      }
  }

  function collegenew(s){
      if(s.value=="DNE"){
          //document.getElementById("newcollege").style.display="none";
          window.location.href="http://jeenius.ga/contactme.php?subject=College_Missing"
      }
      else{
          //document.getElementById("newcollege").style.display="none";
          console.log(s.value);
      }
  }

  function validate(form) {
      var f="Select your ";
      var n=0;
      var y=0;
      if(document.getElementById("college").value=="S"){
          f+="college";
          n=1;
          y=1;
      }
      if(document.getElementById("branch").value=="S"){
          if(n==1){
              f+=" and ";
          }
          f+="branch";
          y=1;
      }
      if(y==1){
          alert(f+"!");
          return false;
      }
      else{
          return confirm("Do you want to submit your responses? You can check them again.");
      }
  }
  
  </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <footer style="text-align:center; display:block; margin-top:10px;">
        <span style="font-size:24px;">Jeenius</span><br>
        <div style="font-size:18px; color:magenta;">An Initiative By Akshat</div>
        </footer>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Jeenius</h5>
                <p class="grey-text text-lighten-4">Jeenius is just a website entirely designed and developed by Akshat Oke. There is no one else involved with this website, except for a few APIs. Check out the other pages too!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="/things/chemtricks.php">Learn</a></li>
                  <li><a class="grey-text text-lighten-3" href="/daily/physicsq.php">Questions</a></li>
                  <li><a class="grey-text text-lighten-3" href="/tests/login.php">Tests</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            No copyrights. Just fun.<br>Made in Pune. 
            <a class="grey-text text-lighten-4 right" href="/contactme.php">Contact Me</a>
            </div>
          </div>
        </footer>
    </body>
</html>