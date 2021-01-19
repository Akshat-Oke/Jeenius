<?php
    $content="";
    $contents="";
    $filename="heyehey";
    if(isset($_GET['table'])){
        $table= $_GET['table'];
        $filename = "Tab/TABLE".$table.".txt";
        
        if(file_exists($filename)==1){
        $contents = file_get_contents($filename);
        $content="hey";
       // echo $filename;
        }
        else{
            echo $filename;
            $contents="null";
            $content="null";
        }
    }
    else{
        $table="null";
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Jeenius - TimeTable</title>
    <meta name="theme-color" content="#000000">
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Noto%20Serif%20SC|Vollkorn%20SC|Ovo">
    <style>
        td{
            min-width:50px;
        }
        #url span:hover{
            cursor:pointer;
        }
        #showmore{
            display:none;
        }
        .copy{
            color:blue;
        }
        .copy:hover{cursor:pointer;}
        </style>
  </head>
  <body>
      <h2>Timetable</h2>
     
            <table class="striped highlight centered responsive-table" id="table">
        <thead >
          <tr id="head">
              <th>Day/Hour</th>
              
          </tr>
        </thead>

        <tbody id="body">
         
        </tbody>
      </table>
      <table style="display:none;" id="blanktable">
      <?php echo $contents;?>
      
      </table>
<div class='flow-text center-align'>Edit a cell by clicking on it</div>
<div style="text-align:center;" >
<button class="btn waves-effect blue" onclick="addrow();" style="margin:auto; margin-bottom:10px; font-size:1.2em;">Add hour</button>
<br>
<div style="margin:0;padding:0;" id="buttonsDiv">
<button class="btn waves-effect" id="pdfbutton" onclick="geturl();" style="margin:auto; font-size:1.2em;">Get Url for sharing</button><!--javascript:demoFromHTML()-->
</div>
<div style="font-size:24px;" ><a href="javascript:void(0);" onclick="showmore()">What is this?</a></div>
<div id="showmore">You can save your timetable and get its link which you can visit later or share with people</div>
<div id="url" style="font-family:'Noto Serif SC', serif; font-size:26px;"></div>
</div>
      <script>
      var i, j;
      function showmore(){
          document.getElementById("showmore").style.display="block";
               }
      var table = '<?php echo $table;?>';
      var contents = ' <?php echo $content;?> ';
      contents= contents.trim();
      var content = document.getElementById("blanktable").innerHTML.trim();
      console.log(contents);
          document.addEventListener('DOMContentLoaded', function() {
              if(table=="null"){
             var t =  document.getElementById("head");
             var s="";
             for ( i=1; i<11; i++){
                 s+="<th ondblclick=\"remove(this)\" contenteditable=\"true\">"+i+"</th>";
             }
             t.innerHTML+=s;
             var incontent="";
             for ( j=0; j<7;j++){
                 incontent+="<tr id='row"+j+"'><td contenteditable=\"true\" >Day "+(j+1)+"</td>";
                 for(var foo=0;foo<10;foo++){
                 incontent+="<td id='t"+foo+"' contenteditable=\"true\"></td>";
                 }
                 incontent+="</tr>";
             }
             document.getElementById("body").innerHTML+=incontent;
             var elems = document.querySelectorAll('.tap-target');
    var instances = M.TapTarget.init(elems, {});
    //instances.next(0);
    $('.tap-target').tapTarget('open');
              }
              else{
                  if(contents.trim()!="null"){
                      console.log("getg");
                      document.getElementById("table").innerHTML=document.getElementById("blanktable").innerHTML;
                      document.getElementById("buttonsDiv").innerHTML+="<button class=\"btn waves-effect red\" onclick=\"confirmEdit();\" style=\"margin:auto; font-size:1.2em;\">Edit and save</button>";
                  }
                  
                  if(content=="null"||contents=="null"||document.getElementById("blanktable").innerHTML.trim()=="null") {
             document.getElementById("table").innerHTML="<thead><tr>Table requested does not exist!</tr></thead>";
             document.getElementById("buttonsDiv").style.display="none";
    var mod = document.getElementById("modal1");
    var modalis = M.Modal.init(mod, {});
        modalis.open();
                  }
              }
             
    //document.getElementById("t1").innerHTML="Click here";
          });
          function addrow(){
             
              document.getElementById("head").innerHTML+="<th contenteditable=\"true\">"+i+"</th>";
              ++i;
              var ht;
              for(var intt=0; intt<7; intt++){
                  ht = document.getElementById("row"+intt);
                  ht.innerHTML+="<td contenteditable=\"true\"></td>";
              }
             
          }
          var removing;
          function remove(ele){ 
              removing=ele;
              var mod = document.getElementById("modal3");
    var modalis = M.Modal.init(mod, {});
        modalis.open();
          }
          function proceedrem(){
              removing.remove();
          }
      </script>
        <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Table does not exist!</h4>
      <p>The table requested through the url does not exist. A blank timetable will be displayed instead.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="javascript:window.location.replace('/timetable');">Okay man</a>
    </div>
  </div>

   <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>URL copied to clipboard!</h4>
      <p>The url <span id="copied"></span> has been copied to your device's clipboard.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cool!</a>
    </div>
  </div>
     <!-- Modal Structure -->
  <div id="modal3" class="modal">
    <div class="modal-content">
      <h4>Remove row?</h4>
      <p>The selected row will be removed.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green green-text btn-flat">Nah let it live</a>
      <a href="#!" class="modal-close waves-effect waves-red red-text btn-flat" onclick="proceedrem();">Destroy that row!</a>
    </div>
  </div>

     <!--Modal - Edit and Save confirm modal-->
  <div id="modalConfirm" class="modal">
    <div class="modal-content">
      <h4>Save changes?</h4>
      <p>The table will be updated and cannot the previous version cannot be recovered. Do you want to proceed?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green green-text btn-flat">No, perhaps later</a>
      <a href="#!" class="modal-close waves-effect waves-red red-text btn-flat" onclick="getEditedUrl();">Just do it</a>
    </div>
  </div>

   <!--Modal - after edited and saved-->
  <div id="modalDone" class="modal">
    <div class="modal-content">
      <h4>Table saved!</h4>
      <p id="editedurl">Table has been updated successfully!</p>
    </div>
    <div class="modal-footer">
      
      <a href="#!" class="modal-close waves-effect waves-red red-text btn-flat" >Nice!</a>
    </div>
  </div>
        <!-- Tap Target Structure -->
  <div class="tap-target" data-target="t1" id="tapthis">
    <div class="tap-target-content">
      <h5>Edit cells</h5>
      <p>Click on the cell to edit them!</p>
    </div>
  </div>

   

  <div style="height:20px;"></div>
      <footer class="page-footer blue lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Jeenius</h5>
                <p class="grey-text text-lighten-4">Jeenius is just a website entirely designed and developed by Akshat Oke. There is no one else involved with this website, except for a few APIs. Check out the other pages too!</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="http://jeenius.ga/">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://jeenius.ga/things/chemtricks.php">Learn</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://jeenius.ga/daily/physicsq.php">Questions</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://jeenius.ga/tests/login.php">Tests</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            No copyrights. Just fun.<br>Made in Pune. 
            <a class="grey-text text-lighten-4 right" href="http://jeenius.ga/index.php/contactme.php">Contact Me</a>
            </div>
          </div>
        </footer>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <script>
                   function geturl() {
                       var xhttp = new XMLHttpRequest();
                       var sendthis = encodeURIComponent(document.getElementById("table").innerHTML);
                       //sendthis.replace("remove", "double");
                       xhttp.open("POST", "geturl.php", true);//?table="+sendthis,true);
                       //Send the proper header information along with the request
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        var sendthis1="table="+sendthis;
                       xhttp.send(sendthis1);
                       
                       xhttp.onreadystatechange = function(){
                           if(this.readyState==4 && this.status == 200){
                                theurl = this.responseText;
                               document.getElementById("url").innerHTML="<span class='copy' id=\"copyurl\" onclick='copy_password(this);' >"+theurl+"</span>";

                               document.getElementById("url").innerHTML+="<br>Or </br><a href='"+theurl+"' >Click here to view</a>";
                               document.getElementById("url").innerHTML+="<input id='copythis' value='"+theurl+"' type='text' style='display:none;'>";
                             
                           }
                       }
                   }
                   function confirmEdit(){
                       var mod = document.getElementById("modalConfirm");
    var modalis = M.Modal.init(mod, {});
        modalis.open();
                   }
                   function getEditedUrl(){
                       var xhttp = new XMLHttpRequest();
                       var sendthis = encodeURIComponent(document.getElementById("table").innerHTML);
                       xhttp.open("POST", "editurl.php", true);
                       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                       var sendContent = "table="+sendthis+"&code="+table;
                       xhttp.send(sendContent);
                       xhttp.onreadystatechange = function(){
                           if(this.readyState == 4 && this.status==200){
                               theurl = this.responseText;
                               var mod = document.getElementById("modalDone");
    var modalis = M.Modal.init(mod, {});
        modalis.open();
                               document.getElementById("url").innerHTML="The table has been updated! <br><span class=\"copy\" onclick='copy_password(this);'>"+theurl+"</span>"+ " (Click to copy)";
                           }
                       }
                   }
                   var theurl="";
                   function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("copythis");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  //alert("Copied the text: " + copyText.value);
  var mod = document.getElementById("modal2");
  document.getElementById("copied").innerHTML=copyText.value;
    var modalis = M.Modal.init(mod, {});
        modalis.open();
}
  function copy_password(copyText) {
    //var copyText = document.getElementById("copyurl");
    var textArea = document.createElement("textarea");
    textArea.value = copyText.textContent;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("Copy");
    textArea.remove();
    var mod = document.getElementById("modal2");
  document.getElementById("copied").innerHTML=theurl;
    var modalis = M.Modal.init(mod, {});
        modalis.open();
}
        </script>
  </body>
</html>