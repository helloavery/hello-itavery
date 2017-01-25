<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Contact and keep in touch with Avery Grimes-Farrow is- An upcoming creative I.T. and Data professional
          who is up for the challenges that the coding and developing world throws.">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript, Information Technology, I.T., Programming,
            Java, PHP, SQL, Data Mining, Analytics, Databases, Professional, Creative, Web Design ">
        <meta name="author" content="Avery Grimes-Farrow">
 
         <title>Avery Grimes-Farrow</title>
        
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
                
       
        <link rel="stylesheet" type="text/css" href="css/stylesheetcontact.css">
        
       
       <!-- Bootstrap -->
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    
    <link href="css/carousel.css" rel="stylesheet">
                
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
         
    </head>
    <body>
        <?php include_once("analyticstracking.php") ?>
        
        
        <!-- NAVBAR -->
        
        <header class="main_h" id="sticky">

    <div class="row_nav">
        <p class="logo" >A.GF</p>

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

    <h1><span></span><br>Contact Avery.</h1>
    <img src="icons/linkedin.png"><img src="icons/skype.png"><img src="icons/facebook.png">
    <br><font color="#007ab6">averygrimesf</font> | <font color="#00acf3">averygrimesf</font> | <font color="3a5896">avery.grimes106</font>
    <p>You may also contact me directly by using the form below</p>
    <div class="mouse">
        <span></span>
    </div>

</div>
        
     <hr class="featurette-divider" style="margin:2%;">
   
    
       
            <h1 style="text-align:center;">Get in touch</h1>
            <p style="font-size:20px;text-align:center;">Contact me directly with any questions and/or comments.</p>
            
        <form name="contactform" method="post" action="sendform.php" method="POST">
 
<table width="550px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
     
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" placeholder="Optional--10 digits only;no dashes" maxlength="30" size="30" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea id='autosize-example' name="comments" maxlength="1000"  style="font-size:15px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"></textarea>
 
 </td>
 
</tr>

<tr>
 
 <td valign="top">
 
 
 </td>
 
 <td valign="top" style="text-align: center;max-width:100%;">
 
   <div class="g-recaptcha" data-sitekey="6LfrUBIUAAAAAEuf6GgndYk9d2K6z6SfvzSx0U7b"></div>
<input type="submit" action="sendform.php" value="Submit" style="width:120px; height:40px; font-size:15px; color:#000;">
 </td>
 
</tr>

 
</table>
 
</form>

<div class="container marketing">
      <!-- FOOTER -->
     <div id="footer" style="margin-top:0.1%"><h5>itavery.com | Avery Grimes-Farrow</h5>
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

<br>
<footer>
          
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>· 2017 itavery.com | Avery Grimes-Farrow ·</p>
      </footer>
</div>
    
</div>
        
<script src="js/navbar.js"></script>
        <script src="js/timer.js"></script>
    
<script src='js/autosize.min.js'></script>
<script>
  autosize(document.getElementById('autosize-example'));
</script> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/tab.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs>
            <style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>
 

         </body>
</html>