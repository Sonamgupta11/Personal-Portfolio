<?php
  
  include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sonam's Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
  
  
       <!-- Header Start -->
       <?php include('include/header.php') ?>
    <!-- Header End -->
    
   
  
  <!-- Portfolio Start -->
   <!-- About Start -->
   <div class="container-fluid py-4" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Welcome</h1>
                <h1 class="position-absolute text-uppercase text-primary">Welcome to Sonam's World </h1>
            </div>
        </div>

    </div>

    <!-- About End -->


    <div id="welcome">
        <div class="container welcome_text mb-3" style="background-color:#FE6E00;">
            <h6 class="py-4 text-white text-center">Hey there, fellow wanderer of the digital realm! Welcome to my
                little corner of the internet. I'm Sonam, and I'm thrilled you've stumbled upon my digital abode.
                So, grab a virtual cup of coffee, settle in, and let's embark on a journey through pixels and prose.
            </h6>
        </div>
    </div>

    <div class="container text-center mt-4 p-5">
        <h2>Who Am I?</h2>
        <p>
            Ah, the age-old question! Well, I like to think of myself as a curious soul with a penchant for all things
            creative. By day, I'm a Web Developer, navigating the ins and outs of Softwere Development. But when the sun
            sets and the stars emerge, that's when the real magic happens. That's when I dive headfirst into the realms
            of writing, design, and all things imaginative.
        </p>
    </div>




    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-80" src="img/sonam-img.jpeg" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">UI/UX Designer & Web Developer</h3>
                    <p>With a fresh perspective and a graduate degree under my belt, I am eager to embark on this professional adventure,
                         eager to contribute innovative solutions to the digital landscape. Though my experience is in its infancy, 
                         my enthusiasm and commitment to excellence drive me to continuously learn and grow in this ever-evolving field.</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2">
                            <h6>Name: <span class="text-secondary">Sonam</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Birthday: <span class="text-secondary">11 August 2001</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Degree: <span class="text-secondary">Graduate</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Experience: <span class="text-secondary">Fresher</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Phone: <span class="text-secondary">+91-8287647253</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Email: <span class="text-secondary">sonamgupta8287@gmail.com</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Address: <span class="text-secondary">A-604, Nangloi, DELHI</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Work: <span class="text-secondary">Available</span></h6>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-outline-primary mr-4">Hire Me</a>
                    <a href="portfolio.php" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container">
        <div class="row mt-5 py-4">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">What Drives Me?</h5>
                        <p class="card-text">
                        <p>
                            Curiosity, my dear friend. The insatiable desire to explore, learn, and create. Whether it's
                            unraveling the mysteries of the universe or concocting stories that transport readers to
                            faraway lands, I'm always seeking that spark of inspiration. I believe in the power of
                            storytelling to connect, inspire, and ignite change. And hey, if I can sprinkle a little bit
                            of magic along the way, then all the better.
                        </p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body my-0">
                        <h5 class="card-title">Why Am I Here?</h5>
                        <p class="card-text">Well, besides the fact that the internet is a vast playground just waiting
                            to be explored, I'm here to share my passions, insights, and maybe even a few nuggets of
                            wisdom. Whether you're a fellow dreamer, a curious soul, or just someone looking for a bit
                            of entertainment, I hope you'll find something here that resonates with you.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2 py-4">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">What Can You Expect?</h5>
                        <p class="card-text">
                            Ah, the million-dollar question! Here's the lowdown: expect a smorgasbord of content that
                            spans the spectrum from thought-provoking essays to whimsical tales, from practical tips to
                            flights of fancy. Whether you're here for a dose of inspiration, a chuckle or two, or just a
                            momentary escape from the everyday grind, I've got you covered.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body my-0">
                        <h5 class="card-title">Let's Connect!</h5>
                        <p class="card-text">But hey, enough about me. I want to hear from you! Whether you've got a
                            burning question, a story to share, or just want to say hello, don't be shy. Drop me a line,
                            and let's start a conversation. After all, the beauty of the internet lies in its ability to
                            connect us across vast distances, weaving a tapestry of shared experiences and ideas.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio End -->



    

    <!-- Footer Start -->
    <?php include('include/footer.php') ?>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>
<?php
  