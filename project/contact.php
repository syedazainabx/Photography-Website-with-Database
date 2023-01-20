<?php

$sname="localhost";
$uname="root";
$pass="";

$mydb="photography"; //database name
$conn=mysqli_connect($sname,$uname,$pass); // building connection

if(!$conn)
{
    echo("Connetion to server failed.");
    die();
}
else
{
    echo("Connection to server successful.");
}

$DB=mysqli_select_db($conn,$mydb);
if(!$DB)
{
    echo("<br>Connection to Database Failed.");
    die();
}
else
{
    echo("<br>Connection to Database successful.");    
}

?>

<!-- Connection code -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Photography Site</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="contact.css?ve= <?php echo time(); ?>">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <style><?php include "contact.css" ?></style>
    </head>
    <body>
        
        <!-- header -->
        <header class = "header">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name">
                        PHOTOLAB
                    </span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.html">Home</a></li>
                        <li><a href = "gallery.html">Gallery</a></li>
                        <li><a href = "packages.html" >Packages</a></li>
                        <li><a href = "contact.php" class = "active">Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>

            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "images/about-img.jpg" alt = "photographer img">
                    </div>
                    <h2>I'm Ammara Awan</h2>
                    <h3>Photographer | Student </h3>
                    <blockquote>
                        "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                        <span>-Aaron Siskind</span>
                    </blockquote>
                </div>

                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href = "https://www.facebook.com/ammarah.awan.7/" target="_blank"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "https://twitter.com/" target="_blank"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href = "https://www.instagram.com/ammarahawann" target="_blank"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href = "https://pin.it/37quI2u" target="_blank"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        <section class = "section-five">
            <div class = "container">
                <div class = "contact-top">
                    <h3>CONTACT ME</h3>
                    <p>For any further queries, contact on the information given below.</p>
                </div>

                <div class = "contact-middle">
                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-map-signs"></i>
                        </span>
                        <span>Address</span>
                        <p>NED UNIVERSITY, Karachi</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-phone"></i>
                        </span>
                        <span>Contact Number</span>
                        <p>0323 4673269</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-paper-plane"></i>
                        </span>
                        <span>Email Address</span>
                        <p>ammarah.s.awan@gmail.com</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-globe"></i>
                        </span>
                        <span>Website</span>
                        <p>www.abc.com</p>
                    </div>
                </div>
    
  
            <div class="contact-bottom">

            
            <form action="" method="post" id="form1">
      
              <h1>Booking</h1>
        
            <fieldset>
              <legend><span class="number">*</span>Add your details</legend>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name">
          
              <label for="mail">Email:</label>
              <input type="email" id="mail" name="email">
          
              <label>Booking Date:</label>
              <input type="date" name="bdate"><label for="under_13" class="light"></label><br>
            </fieldset>
        
        
            <fieldset>
               <label for="package">Packages:</label>
                <select id="package" name="package">
                <optgroup label="Choose:">
                <option value="pk1">classic</option>
                <option value="pk2">deluxe</option>
                <option value="pk3">ultimate</option>
        
                </optgroup>
                </select>
            </fieldset>
            <fieldset>
               <label>Photographer:</label>
                <input type="radio" name="photographer" value="1"><label class="light" for="development">Ammara Awan</label><br>
                <input type="radio" name="photographer" value="2"><label class="light" for="design">Anum Hasan</label><br>
                <input type="radio" name="photographer" value="3"><label class="light" for="business">Syeda Zainab</label><br>
        
            </fieldset>
               <div class="button1"><button type="submit" name='sub' onclick="popup()">SUBMIT</button></div>
            </form>
            <!-- Data insertion code. -->
            <?php
                if (isset($_POST['sub'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $bdate=$_POST['bdate'];
                    $package=$_POST['package'];
                    $photographer=$_POST['photographer'];
                    $result=mysqli_query($conn,"INSERT INTO photography (name, email, bdate , package, photographer, cdate)  
                    VALUES ( '$name', '$email' , '$bdate' , '$package', '$photographer', current_timestamp())");
                    
                }
                ?>
                
                    <!-- Map -->
                    <div>
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" 
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=ned university&amp;
                        t=&amp;z=9&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;tex
                                t-align:right;width:100%;height:800px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:800px;}.gmap_iframe {height:400px!important;}</style></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of main -->

       
<!-- footer -->
<footer class = "footer">
    <div class = "footer-container container">
        <div>
            <h2>AMMARA AWAN</h2>
            <p>MIXING DIGITAL & FILM IN A DOCUMENTARY APPROACH TO CREATE GENUINE IMAGES THAT STAND THE TEST OF TIME.</p>
        </div>
        <div>
            <h3>Free Subscription!</h3>
            <p>Subscribe to us for free and be the first person to know about updates and our limited time packages.</p>

            <div class = "subs">
                <i class = "fas fa-envelope"></i>
                <input type = "email" id = "email" name="semail" placeholder="Email Address">
                <button type = "submit" name='esub'>SUBSCRIBE</button>
                
            </div>
        </div>
    </div>
    <p>&copy; SESE Undergraduate | Batch 2020
    </p>
</footer>
<!-- end of footer -->

    
        <script src="script.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>