<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="css/login.css" />
 

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
                
       <link rel="stylesheet" type="text/css" href="css/stylesheetcontact.css">
        <link rel="stylesheet" type="text/css" href="css/loginform.css">
        
       
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
   
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            Username: <input type='text' name='username' id='username' /><br>
            Email: <input type="text" name="email" id="email" /><br>
            Password: <input type="password"
                             name="password" 
                             id="password"/><br>
            Confirm password: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Return to the <a href="blogposts/login.php">login page</a>.</p>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/loginform.js"></script>
            <script src="js/tab.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
            <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs>
            <style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>

    </body>
</html>
