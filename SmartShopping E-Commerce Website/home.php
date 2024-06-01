<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="main-style.css">
    <style>
       
    </style>

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

        <li class="nav-item ml-auto admin-login">
                <a class="nav-link text-dark" href="admin_login.php">ADMIN LOGIN</a>
            </li>

    </ul>
</div>
</nav>



                </div>




            </header>
        </div>




    </div>
    <div class="container-fluid p-0 banner-slider mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">

                    <img src="slider-banner/Home-Appliances.webp" class="d-block w-100" alt="Home-Appliances">
                </div>
                <div class="carousel-item">

                    <img src="slider-banner/cloths.webp" class="d-block w-100" alt="cloths">
                </div>
                <div class="carousel-item">

                    <img src="slider-banner/toys.webp" class="d-block w-100" alt="toys">
                </div>
                <div class="carousel-item">

                    <img src="slider-banner/footwear.webp" class="d-block w-100" alt="footwear">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
    <section class="content ">
        <div class="container mt-5">
            <h1 class="text-center mt-5 mb-3 font-weight-bold">Welcome to Smart Shopping</h1>

            <h1 class="mb-3 mt-5 latest-prod">Latest Products</h1>
            <div class="row">


<div class="col-lg-4 col-md-6 mb-4 product-card">
<a href="product details.php" class="d-block text-decoration-none text-dark w-100">
                    <div class="card">
                        <img src="products/smart-watch.webp" class="card-img-top" alt="Smartwatch">
                        <div class="card-body">
                            <h5 class="card-title">Smartwatch</h5>
                            <p class="card-text">Stay connected and track your fitness with our cutting-edge smartwatch.</p>
                        </div>
                    </div>
</a>
                </div>

                

                <div class="col-lg-4 col-md-6 mb-4 product-card" >
                <a href="product details.php" class="d-block text-decoration-none text-dark w-100">
                    <div class="card">
                        <img src="products/shoes.webp" class="card-img-top" alt="Sneakers">
                        <div class="card-body">
                            <h5 class="card-title">Sneakers</h5>
                            <p class="card-text">Step out in style with our trendy and comfortable sneakers.</p>
                        </div>
                    </div>
</a>
                </div>

    
                <div class="col-lg-4 col-md-6 mb-4 product-card" >
                <a href="product details.php" class="d-block text-decoration-none text-dark w-100">
                    <div class="card">
                        <img src="products/hoodies.webp" class="card-img-top" alt="Winter Hoodies">
                        <div class="card-body">
                            <h5 class="card-title">Winter Hoodies</h5>
                            <p class="card-text">Stay warm and cozy in our fashionable winter hoodies.</p>
                        </div>
                    </div>
</a>
                </div>

            </div>

        </div>
    </section>

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

 
</body>

</html>