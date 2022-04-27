<?php
?>
<html>
<head>
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style3.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="icon" href="img/ONLINE COURSE.jpg" type="image/x-icon">
</head>
<title>Enroll
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



    <section class="enroll1">
        <p><h1>ENROLL NOW</h1></p>
        <div class="row4">
            <div class="column4">
                <div class="fm">
                <form method="post" action="enrollvalidation.php">
                    <label class="label4">Full Name</lavel><br>
                    <input class="input" type="text" name="fullname" placeholder="enter your full name.." required><br>
                    <label class="label4">Phone Number</lavel><br>
                    <input class="input" type="tel" name="phoneno" placeholder="enter your phone no.."  pattern="[0-9]{10}" required><br>
                    <label class="label4">Email Address</lavel><br>
                    <input class="input" type="email" name="emailaddress" placeholder="enter your email address.." required><br>
                    <label class="label4"> Select Course</label><br>
                    <div class="select1">
                    <select class="select" name="course" required>
                        <option >Choose Course</option>
                        <option class="option">CCNA NETWORKING</option>
                        <option class="option">CCNP ROUTING&SWITCHING</option>
                        <option class="option">WEB DEVELOPMENT</option>
                        <option class="option">CYBER SECURITY</option>
                        <option class="option">ETHICAL HACKING</option>
                    </select><br><br>
                </div>
                    <input class="enroll3" type="submit" name="submit" value="ENROLL">
                    
                    <a href="courses.php"><input class="enroll3"  type="button" value="View Courses"></a>
                    
                </form>
            </div>
            </div>
            <div class="column4">
                <p><img src="img/ENROLL.gif"></p>
                
            </div>
        </div>
    </section>

    
    <section class="footer1">
    <footer class="footer1">
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
                    <h5>Follow Us</h5>
                        <div class="social-links">
                            <ul>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </ul>
                        </div>
                </div>
                <div class="footer-col1">
                    <img src="img/ONLINE_COURSE.png">
                </div>
            </div>
        </div>

    </footer>

    </section>







</body>
</html>