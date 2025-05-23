<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/contactUs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css">
    <link rel="icon" href="assets/logo2.png" type="image/x-icon">
    <title>Contact Us</title>
</head>

<body style="background-image: url(assets/contactus1.jpg); background-size: cover;background-repeat: no-repeat; background-attachment: fixed;">
    <nav>
        <div class="nav__logo">
            <a href="#"><img src="assets/logo2.png" alt="logo" /></a>

        </div>
        <button class="nav__toggle" aria-label="toggle navigation">
            <span class="nav__hamburger"></span>
            <span class="nav__hamburger"></span>
            <span class="nav__hamburger"></span>
        </button>
        <ul class="nav__links">
            <li class="link"><a href="index.html">Home</a></li>
            <li class="link"><a href="programs.html">Programs</a></li>
            <li class="link"><a href="index.html#service-header">Service</a></li>
            <li class="link"><a href="plans.html">Memberships</a></li>
            <li class="link"><a href="schedule.html">Schedule</a></li>
            <li class="link"><a href="about us.html">About Us</a></li>
            <li class="link"><a href="blogs.html">Blog</a></li>
            <li class="link"><a href="#">Contact Us</a></li>
        </ul>

        <button class="btn" onclick="window.location.href='login_form.php'">Login</button>

    </nav>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>
                Whether you need assistance with membership options,
                have inquiries about our classes, or want personalized
                guidance, we’re here to help! Simply fill out the form,
                give us a call, or visit us in person. Our team at FitZone
                Fitness Center is ready to support you on your fitness journey!
            </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="ri-map-pin-line"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>FitZone Fitness Center,<br>
                            123 Wellness Avenue,<br>
                            Kurunegala, Sri Lanka</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="ri-phone-line"></i></div>
                    <div class="text">
                        <h3>Telephone</h3>
                        <p>037-2343567</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="ri-mail-line"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Fitzone@mail.com</p>
                    </div>

                </div>
            </div>
            <div class="contactForm">
                <form method="post" action="#">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="fullName" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="message"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="send">
                    </div>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "gym_management";

                    
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        $fullName = $conn->real_escape_string($_POST['fullName']);
                        $email = $conn->real_escape_string($_POST['email']);
                        $message = $conn->real_escape_string($_POST['message']);

                        
                        $sql = "INSERT INTO queries (name, email, message) VALUES ('$fullName', '$email', '$message')";

                        if ($conn->query($sql) == TRUE) {
                            echo "Message sent successfully!";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        
                        $conn->close();
                    }
                    ?>

                </form>


            </div>
        </div>
    </section>

    <footer class="section__container footer__container" style="background-color: black;">
        <div class="footer__col">
            <div class="footer__logo"><img src="assets/logo2.png" alt="logo" /></div>
            <p>
                Begin your journey to a healthier, stronger you with our unbeatable membership
                options. Let’s work, achieve, and succeed together!
            </p>
            <div class="footer__socials">
                <a href="https://web.facebook.com/"><i class="ri-facebook-fill"></i></a>
                <a href="https://www.instagram.com/"><i class="ri-instagram-line"></i></a>
                <a href="https://x.com/"><i class="ri-twitter-fill"></i></a>
            </div>
        </div>

        <div class="footer__col">
            <h4>About Us</h4>
            <a href="blogs.html">Blogs</a>
            <a href="#">Security</a>
            <a href="#">Careers</a>
        </div>
        <div class="footer__col">
            <h4>Contact</h4>
            <a href="contact us.php">Contact Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">BMI Calculator</a>
        </div>
    </footer>
    <div class="footer__bar" style="background-color: black;">
        Copyright © 2024 Designed by Rajitha Joseph. All rights reserved.
    </div>
    <script>
        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');

            if (window.scrollY > lastScrollY) {
                
                nav.classList.add('hidden');
            } else {
                
                nav.classList.remove('hidden');
            }

            lastScrollY = window.scrollY;
        });

        document.querySelector('.nav__toggle').addEventListener('click', () => {
            document.querySelector('.nav__links').classList.toggle('active');
            document.querySelector('.nav__toggle').classList.toggle('active');
        });
        const menuButton = document.querySelector('.nav__toggle');
        const navLinks = document.querySelector('.nav__links');

        
        menuButton.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });
    </script>
</body>

</html>
</body>

</html>