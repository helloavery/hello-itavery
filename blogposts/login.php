<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="../css/login.css" />
        <script type="text/JavaScript" src="../js/sha512.js"></script> 
        <script type="text/JavaScript" src="../js/forms.js"></script> 

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Contact and keep in touch with Avery Grimes-Farrow is- An upcoming creative I.T. and Data professional
          who is up for the challenges that the coding and developing world throws.">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript, Information Technology, I.T., Programming,
            Java, PHP, SQL, Data Mining, Analytics, Databases, Professional, Creative, Web Design ">
        <meta name="author" content="Avery Grimes-Farrow">
 
         <title>Avery Grimes-Farrow</title>
        
        <link rel="shortcut icon" href="../photos/favicon.png">
     
<script data-cfasync="false" type="text/javascript">try{Typekit.load();}catch(e){}</script>


                
            <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Merriweather:400,900italic,300,700,900|Cinzel:400,900,700' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>
            <link href="https://fonts.googleapis.com/css?family=Caveat:700|Covered+By+Your+Grace|Just+Another+Hand|Kalam:300|Satisfy" rel="stylesheet"> 

                <!-- End of Fonts -->
                
       
        <link rel="stylesheet" type="text/css" href="css/stylesheetskills.css">
           
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

                
                
            <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Merriweather:400,900italic,300,700,900|Cinzel:400,900,700' rel='stylesheet' type='text/css'>
            <link href='//fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>

                <!-- End of Fonts -->
                
       <link rel="stylesheet" type="text/css" href="../css/stylesheetcontact.css">
        <link rel="stylesheet" type="text/css" href="../css/loginform.css">
        
       
       <!-- Bootstrap -->
    
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
    
    <link href="../css/carousel.css" rel="stylesheet">
   
         
    </head>
    <body>
   



<div class="container">
  <div class="row">

    <div class="main">


      <div class="login-or">
        
      
                <?php
        if (isset($_GET['error'])) {
            echo '
<div class="alert alert-danger">
  <strong>Error!</strong> Incorrect email and/or password. Please try again.
</div>';
        }
        ?> 
      </div>
<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="../includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '

                        <h3>Please Log In, or <a href="../register.php">Sign Up</a></h3>
<hr class="hr-or">
      <div class="login-or"><div class="alert alert-info">
  <p style="font-size:15px;">You are currently logged ' . $logged . '.</p>
</div>
        
      <form role="form" action="../includes/process_login.php" method="post" name="login_form">
        <div class="form-group">
          <label for="inputUsernameEmail">Email</label>
          <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          <label for="inputPassword">Password</label>
          <input type="password" class="form-control" id="password"">
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Remember me </label>
        </div>
        <button type="submit" value="Login" class="btn btn btn-primary"
        onclick="formhash(this.form, this.form.password);" /> 
          Log In
        </button>
      </form>
    
    </div>
    
  </div>
</div>
';
                        
                }
?>  


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/loginform.js"></script>
            <script src="../js/tab.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs>
            <style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>
    </body>
</html>