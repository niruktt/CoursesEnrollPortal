<?php
?>
 <html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style3.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="icon" href="img/ONLINE COURSE.jpg" type="image/x-icon">
    </head>
    <title>Contact Us</title>
    <body >
        <section class="header">
            <nav class="fixed-nav-bar">
            <header>
                <img class="logo" src="img/ONLINE COURSE.jpg" alt="logo ">
                <nav>
                    <ul class="nav_links">
                        <li><a href="home.php"><span class="material-icons">home</span>HOME</a></li>
                        <li><a href="courses.php"><span class="material-icons">work</span>COURSES</a></li>
                        <li><a href="join-us.php"><span class="material-icons">work</span> JOIN US</a></li>
                        <li><a href="about.php"><i class="fas fa-address-card"></i> ABOUT</a></li>
                    </ul>
                </nav>
                <a class="btn" href="Contact-Us.php"><button><span class="material-icons">contacts</span> CONTACT</button></a>
            </header>
            </nav>
        </section>

      <section class="contact">
          <div class="contact1">
          <div class="row10">
              <div class="column10">
                <div class="ct">
                    <img src="img/contact.jpg">
                </div>
                <div class="ct">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.828890647764!2d77.28610191489348!3d28.63488998241685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb55c4f9ce65%3A0xdb2f629d6d6b4690!2sNirman%20Vihar%2C%20Preet%20Vihar%2C%20New%20Delhi%2C%20Delhi%20110092!5e0!3m2!1sen!2sin!4v1645507215836!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
              <div class="column10">
                <form action="contactvalidation.php" method="post">
                    <label class="label">First Name</label><br>
                    <input class="text" type="text" name="fname" placeholder="enter your first name.." required><br>
                    <label class="label">Last Name</label><br>
                    <input class="text" type="text" name="lname" placeholder="enter your last name.." required><br>
                    <label class="label">Email Address</label><br>
                    <input class="text" type="email" name="email" placeholder="enter your email address.." required><br>
                    <label class="label">Message</label><br>
                    <textarea class="textarea" name="message" placeholder="write your message here.." required></textarea><br>
                    <input type="submit" name="submit" class="submit" value="SEND"><br>
                    <a href="home.php"><input type="button" class="button" value="HOMEPAGE"></a>

                </form>
            </div>
          </div>
        </div>
      </section>


        <section class="footer1">
        <footer class="footer1" >
            <div class="container1">
                <div class="row1">
                    <div class="footer-col1">
                       <h5>Company</h5>
                        <ul>
                        <li><a href="home.php"><span class="material-icons">home</span>HOME</a></li>
                        <li><a href="courses.php"><span class="material-icons">work</span>COURSES</a></li>
                        <li><a href="join-us.php"><span class="material-icons">work</span> JOIN US</a></li>
                        <li><a href="about.php"><i class="fas fa-address-card"></i> ABOUT</a></li>
                         
                        </ul>
                    </div>
                    <div class="footer-col1">
                      <h5>Get Help</h5>
                      <ul>
                        <li><a href="Contact-Us.php"><span class="material-icons">contacts</span> Contact</a></li>
                                        
                      </ul>
                  </div>
                    <div class="footer-col1">
                      <h5>Follow Us</h4>
                      <div class="social-links">
                      <ul>
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                      </ul>
                  </div>
                  </div>
                  <div class="footer-col1">
                      <img src="img/ONLINE_COURSE.png" >
                  </div>
                </div>
            </div>
      
        </footer>
        </section>
    </body>
</html>
