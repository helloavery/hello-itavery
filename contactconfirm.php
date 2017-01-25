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
        <link rel="stylesheet" type="text/css" href="css/stylesheetcontact.css">
        <style>
            body {
                background-image:url('photos/moving_through_space.gif');
            }
            
            .hero {
                background-color:rgba(0, 0, 0, 0);
            }
        </style>
    </head>
    <body>
        <?php include_once("analyticstracking.php") ?>
        
        <!-- NAVBAR -->
        
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

    <h1><span>Thank you for reaching out to me.</span><br>I'll be in touch with you very soon.</h1>
    <br>
    If you see this page, your email was sent and is now in the hands of the Internet Gods.
    <div class="mouse">
        <span></span>
    </div>

</div>
        

        <div id="footer"><h5>itavery.com | Avery Grimes-Farrow</h5>
    <table>
        <tr>
            <td><h6><div id="clockdiv"><span class="days"></span></div></h6></td>
            <td><h6>0</h6></td>
            <td><h6>&#8734;</h6></td>
        </tr>
        <tr>
            <td>Days until graduation</td>
            <td>Times I've gone to bed before 2AM this month</td>
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

<script src="js/navbar.js"></script>
<script src="js/timer.js"></script>

    </body>
</html>
        