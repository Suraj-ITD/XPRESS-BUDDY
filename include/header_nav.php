   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
       <a href="index.php" class="navbar-brand ps-5 me-0">
           <!-- <h1 class="text-white m-0">Industro</h1> -->
           <img src="img/logo.png" alt="logo" srcset="">
       </a>
       <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
           <div class="navbar-nav ms-auto p-4 p-lg-0">
               <a href="index.php" class="nav-item nav-link active">Home</a>
               <a href="about.php" class="nav-item nav-link">About</a>
               <a href="service.php" class="nav-item nav-link">Services</a>
               <div class="nav-item dropdown">
                   <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                   <div class="dropdown-menu bg-light m-0">
                       <a href="project.php" class="dropdown-item">Projects</a>
                       <a href="feature.php" class="dropdown-item">Features</a>
                       <a href="team.php" class="dropdown-item">Our Team</a>
                       <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                       <a href="404.php" class="dropdown-item">404 Page</a>
                   </div>
               </div>
               <a href="contact.php" class="nav-item nav-link">Contact</a>
           </div>
           <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
       </div>
   </nav>
   <!-- Navbar End -->

   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.navbar-nav a').each(function(e, i) {
                if (window.location.href.indexOf($(this).attr('href')) >= 0) {
                    $("a.active").removeClass("active");
                    $(this).addClass("active");
                }
            });
        });
    </script>    