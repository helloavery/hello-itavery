<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="photos/favicon.png">
        
        
                <!-- Fonts/Google Fonts -->
            
            <script data-cfasync="false" type="text/javascript">try{Typekit.load();}catch(e){}</script>
<style type="text/css">
  .wf-loading .blog-title,
  .wf-loading .post-title {
    /* Hide the blog title and post titles while web fonts are loading */
    visibility: hidden;
  }
</style>       
                
                
            <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Merriweather:400,900italic,300,700,900|Cinzel:400,900,700' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>

                <!-- End of Fonts -->
                
        <title>Avery Grimes-Farrow</title>
        <link rel="stylesheet" type="text/css" href="css/stylesheetformfail.css">
        
        
        
    </head>
    <body>
        <?php include_once("analyticstracking.php") ?>
        
        
        <header class="main_h" id="sticky">

    <div class="row">
        <a class="logo" >A.GF</a>

        <div class="mobile-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">ABOUT</a></li>
                <li><a href="experience.php">EXPERIENCE</a></li>
                <li><a href="education.php">EDUCATION</a></li>
                <li><a href="skills.php">SKILLS</a></li>
                <li><a href="contact.php" style="color:#4372AA;">CONTACT</a></li>
            </ul>
        </nav>

    </div> <!-- / row -->

</header>
      
       
      <div class="hero">

    <h1><span>uh oh...</span></h1>


<!--    Script placed here so it can be loaded (Needs to be placed the PHP code) -->
   
    <script src="js/navbar.js"></script>
    <script src="js/timer.js"></script>
    
<!--    INSERT PHP FORM PROCESS HERE -->
<?php

        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
          $secretKey = "6LfrUBIUAAAAAEuf6GgndYk9d2K6z6SfvzSx0U7b";
          $ip = $_SERVER['REMOTE_ADDR'];
          $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
          $responseKeys = json_decode($response,true);
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        else{
            
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "avery@itavery.com";
 
    $email_subject = "itavery.com Query/General Interest";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here

 
        echo "Ouch, there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('One or more required fields are empty.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
   
 
    $error_message = "";
    
   
    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
  
    $telephone_exp = "/^[0-9]{3}[0-9]{3}[0-9]{4}$/";
  
  if(!empty($telephone) && !preg_match($telephone_exp,$telephone)) {
 
     $error_message .= 'The Telephone Number you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
  
  
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 

 
 
 // REDIRECT TO THANK YOU PAGE //

echo("<script>location.href = 'contactconfirm.php';</script>"); 

exit();
 
}  
     
?>
        
        
<div id="footer"><h5>itavery.com | Avery Grimes-Farrow</h5>
    <table>
        <tr>
            <td><h6><div id="clockdiv"><span class="days"></span></div></h6></td>
            <td><h6>0</h6></td>
            <td><h6>&#8734;</h6></td>
        </tr>
        <tr>
            <td>Days since graduation</td>
            <td>Times I've gone to bed before 1AM this month</td>
            <td>Amount of times I've asked myself <br>"What did I do to deserve this?"
             <br>while I do one of my favorite things - Coding and Developing </td>
        </tr>
    </table>
<p id="demo"></p>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>

<body onload="startTime()">
<div id="txt"></div>

</p>
<br>
</div>

        <script>
            function startTime() {
                var today = new Date();
            var d = today.getDay();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                 h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
            }
        </script>
        
    </body>
</html>