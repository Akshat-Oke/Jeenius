<?php
    if(isset($_GET['subject'])){
        $subject=str_replace("_", " ",$_GET['subject']);
    }
    else{
        $subject="";
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
    <script src="https://kit.fontawesome.com/f028f07279.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Thasadith|Ubuntu|Noto%20Serif%20SC|Vollkorn%20SC">
    <!-- Vollkorn SC is a font-->
     </head>
     <body>
         <div class="container">
             <h2>Jeenius - Contact</h2>
             <form action="http://jeenius.cf/formga.php" method="POST">
                 
                 <div class="row">
        <div class="input-field col s12">
          <input id="subject" type="text" name="subject" class="validate" value="<?php echo $subject;?>" required>
          <label for="subject">Subject</label>
        </div>
                 </div>

                <div class="row">
        <div class="input-field col s12">
          <input id="name" type="text" name="name" class="validate" required>
          <label for="name">Your Name</label>
        </div>
                 </div>

                 <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">Your Email (Optional)</label>
          <span class="helper-text">This is so that I can reply to you.</span>
        </div>
                 </div>
                 

                 <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" name="message" class="materialize-textarea" required></textarea>
          <label for="textarea1">Your Message</label>
        </div>
      </div>
                 <button class="btn waves-effect waves-light" type="submit" name="action">Send
        <span id="send">
    <i class="fas fa-paper-plane"></i>
    </span>
  </button>
             </form>
         </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     </body>
</html>
