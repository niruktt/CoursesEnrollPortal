<?php
?>
<html>
<head>
<link rel="stylesheet" href="style4.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="icon"  href="img/ONLINE COURSE.jpg" type="image/x-icon" >
</head>
<title>Join-us
</title>
<body>
    <section class="header">
        <nav class="fixed-nav-bar">
        <div class="main">
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
        </div>
        </nav>
    </section>
    <section class="join-us">
        <div class="row6">
            <div class="column6">
                <div class="form">
                <form action="joinvalidation.php" method="post" enctype="multipart/form-data">
                    <label class="label">First Name</label><br><br>
                    <input class="input" type="text" name="fname" placeholder="enter your first name.." required><br><br>
                    <label class="label">Last Name</label><br><br>
                    <input class="input" type="text" name="lname" placeholder="enter your last name.." required><br><br>
                    <label class="label">Email Address</label><br><br>
                    <input class="input" type="email" name="email" placeholder="enter your email address.." required><br><br>
                    <label class="label">Phone Number</label><br><br>
                    <input class="input" type="tel" name="phoneno" placeholder="enter your phone number.." pattern="[0-9]{10}" required><br><br>
                    <label class="label">Upload Resume</label><br><br>
                    <input type="file" name="file" class="file1" required><br><br>
                    <input class="send" type="submit" name="submit" value="SEND"><br>
                    <a href="home.php"><input class="button" type="button" value="HOMEPAGE"></a>

                </form>
            </div>
            </div>
        </div>
    </section>


    <section class="footer1">
        <footer class="#" >
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
                      <img   src="img/ONLINE_COURSE.png" >
                  </div>
                </div>
            </div>
      
        </footer>
        </section>









</body>
</html>