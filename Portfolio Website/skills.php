<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Zaman's Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="main.css">
    <!-- <link rel="stylesheet" href="home.css"> -->
    <link rel="stylesheet" href="skills.css">
    <style>
        .intro-section {
            position: relative;
        }
    
    </style>
</head>

<body>

    <header class="main-header">
        <nav class="navbar max-area-of-container">
            <div class="logo-container">
                <a href="index.php">Ali Zaman Co.</a>
             
            </div>
            <button class="nav-toggle" aria-label="toggle navigation">
                <i class="fas fa-bars"></i> 
            </button>

            <div class="nav-links-container">
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="skills.php">Skills</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="skills-section">
        <h2 class="skills-title">Technical Skills</h2>
        <div class="skills-list">
          <div class="skill-category">
            <h3>Programming Languages</h3>
            <ul>
              <li>HTML5</li>
              <li>CSS3</li>
              <li>JavaScript</li>
              <li>PHP</li>
              <li>Python</li>
            </ul>
          </div>
          <div class="skill-category">
            <h3>Frameworks & Libraries</h3>
            <ul>
              <li>React.js</li>
              <li>Node.js</li>
              <li>Express.js</li>
              <li>Laravel</li>
              <li>Django</li>
            </ul>
          </div>
          <div class="skill-category">
            <h3>Tools & Platforms</h3>
            <ul>
              <li>Git</li>
              <li>Docker</li>
              <li>Webpack</li>
              <li>VS Code</li>
              <li>MySQL</li>
            </ul>
          </div>
        </div>
      </section>
      
    
    <footer class="site-footer">
        <div class="footer-container">
            <div class="contact-info">
                <p> <span class="contact-head"> Contact me:</span><br><a href="mailto:alizaman6780@gmail.com">alizaman6780@@gmail.com</a></p>
                <p>Ali Zaman</p>
                <p>123 UCP A, University of Central Punjab, Lahore, Pakistan</p>
            </div>
            
            <div class="social-icons">
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            </div>

            <!-- <a href="#" class="download-resume">DOWNLOAD RESUME</a> -->

        
            
        </div>
        <div class="copy-rights">
            <p align="center">&copy; 2024 Ali Zaman. All rights reserved.</p>
        </div>
    </footer>
    
    <script src="script.js"></script>

</body>

</html>