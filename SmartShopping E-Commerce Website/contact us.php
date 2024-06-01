<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="main-style.css">


</head>


<body>
    <div class="main-container">
        <div class="container-fluid navbar-upper-side">
            <div class="logo-icons container row no-gutters d-flex">
                <div class="col-3 logo">
                    <a href="home.php" >
                        <img src="logo/3536452.jpg" alt="">
                    </a>

                </div>
                <div class="col-md-3 col-6 icons">
                    <ul class="list-unstyled text-dark d-flex">
                        <li> <a href="#instagram"><i class="fa-brands fa-instagram"></i></a></li>
                        <li> <a href="#facebook"><i class="fa-brands fa-facebook"></i></a> </li>
                        <li> <a href="#linkedin"><i class="fa-brands fa-linkedin"></i></a> </li>
                        <li> <a href="#whatsapp"><i class="fa-brands fa-whatsapp"></i></a> </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid header-wrapper bg-danger">
            <header class="container">



                <div class="row no-gutters">
                    <nav class="col-12 navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse  navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav upper-nav-list navbar-links w-100 bg-danger mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link pl-0 home text-dark" href="home.php">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-lg-4 about-us text-dark" 
                                        href="about us.php">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-lg-4 products text-dark" 
                                        href="products.php">PRODUCTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pl-lg-4 contact-us text-dark" 
                                        href="contact us.php">CONTACT US</a>
                                </li>

                            </ul>
                        </div>
                    </nav>



                </div>




            </header>
        </div>




    </div>
   
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8">
            <h1>Contact Us</h1>

            <?php
if (isset($_SESSION['message']) && isset($_SESSION['messageType'])) {
    echo "<div class='alert {$_SESSION['messageType']}'>{$_SESSION['message']}</div>";
    // Clear message after displaying
    unset($_SESSION['message']);
    unset($_SESSION['messageType']);
}
?>

<form id="contactForm" method="post" action="submit_contact.php">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" id="phone" name="phone" value="+92" required>
    </div>

    <div class="form-group">
        <label>Role:</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="student" id="roleStudent" name="role">
            <label class="form-check-label" for="roleStudent">Student</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="teacher" id="roleTeacher" name="role">
            <label class="form-check-label" for="roleTeacher">Teacher</label>
        </div>
    </div>

    <div class="form-group">
        <label for="city">City:</label>
        <select class="form-control" id="city" name="city" required>
            <option value="lahore" selected>Lahore</option>
            <option value="karachi">Karachi</option>
            <option value="islamabad">Islamabad</option>
        </select>
    </div>

    <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="4" ></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
      
           

            <aside class="col-md-4">
                <h4>Our Address</h4>
                <p>123 Smart Street</p>
                <p>Cityville, Country</p>

                <h4>Google Maps</h4>
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.2954277559233!2d74.3587!3d31.5204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904c7a7b938bd%3A0x2330f06c3de862c6!2sBadshahi%20Mosque!5e0!3m2!1sen!2sus!4v1640969129922!5m2!1sen!2sus"
                ></iframe>
            
            </aside>
        </div>
    </div>



    <footer>
        <div class="container-fluid bg-dark text-light py-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-12 mb-4 mb-lg-0">
                        <h5 class="mb-4 text-danger">Latest News</h5>
                        <p class="text-justify">
                            In the fast-paced world of retail technology, Smart Shopping is making headlines with its
                            revolutionary approach to modern living. Stay ahead of the curve with our curated selection
                            of smart devices that redefine convenience and connectivity.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-4 footer-icons  text-md-center">
                        <h5 class="mb-4 text-danger">Follow Us</h5>

                        <a href="#facebook" class="text-light mr-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#twitter" class="text-light mr-3"><i class="fab fa-twitter"></i></a>
                        <a href="#instagram" class="text-light"><i class="fab fa-instagram"></i></a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 col">
                        <h5 class="mb-4 text-danger">Quick Links</h5>
                        <ul class="footer-links list-unstyled mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link pl-0 pt-0 home text-white"  href="home.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0 text-white" href="about us.php">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0 text-white"  href="products.php">PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0 text-white"  href="contact us.php">CONTACT
                                    US</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <!-- <script src="contact.js"></script> -->
   
</body>