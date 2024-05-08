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

<!-- Button trigger modal -->


     <!-- Header Start -->
   
     <?php include('include/header.php') ?>
    <!-- Header End -->
    
   



    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Projects</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Btech In CSE</h5>
                            <p class="mb-2"><strong>GGSIPU University</strong> | <small>2020 - 2024</small></p>
                            <p>Completed B.Tech in CSE from Greater Noida Institute of Technology, GGSIPU in 2024.
                                 Immersed in a comprehensive curriculum, honing technical skills and fostering a passion for innovation and problem-solving.</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Dilpoma (2 Years)</h5>
                            <p class="mb-2"><strong>GNDIT</strong> | <small>2019 - 2021</small></p>
                            <p>
Started with Chemical Engineering Diploma, then switched to Computer Science Engineering at Greater Noida Institute of Technology, GGSIPU. Passion for tech led the way. Grateful for the foundation, excited for the tech journey ahead.</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Senior-Scondary</h5>
                            <p class="mb-2"><strong>GGSSS</strong> | <small>2017 - 2019</small></p>
                            <p>
Began senior secondary at GGSSS, studying Science with PCMB. Expanded understanding of scientific principles, enhanced analytical skills, and ignited a passion for exploration across disciplines..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Projects</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Full Stack E-Commerce Website</h5>
                            <p class="mb-2"><strong>Individual</strong> | <small>27 April 2024 - 2 May 2050</small></p>
                            <p> - Developed a complete e-commerce platform using HTML, CSS, JavaScript, PHP, and  MySQL. <br> - Implemented user-friendly interfaces, and inventory management systems.   </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">E-Commerce Website (WordPress)</h5>
                            <p class="mb-2"><strong>Individual</strong> | <small>16 April 2024 - 19 April 2024</small></p>
                            <p>   - Customized an e-commerce site using WordPress and WooCommerce.<br>
                             - Configured themes, plugins, and payment gateways for seamless online transactions.</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Front-End Development (Food Website)</h5>
                            <p class="mb-2"><strong>Individual</strong> | <small>Feb 2024 - Feb 2024</small></p>
                            <p>   - Designed a responsive food website with HTML, CSS, and JavaScript.<br>
                              - Created engaging user interfaces and optimized performance for better user experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">JavaScript</h6>
                            <h6 class="font-weight-bold">55%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">60%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">SQL</h6>
                            <h6 class="font-weight-bold">70%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Wordpress</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->
    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Web Design</h4>
                    </div>
                    <p>"Crafting captivating web designs that capture your brand's essence and engage your audience from the first click to conversion."</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Web Development</h4>
                    </div>
                    <p>"From concept to code, our web development expertise ensures seamless functionality and user-friendly interfaces tailored to your unique business needs."</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-android service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Web Customization</h4>
                    </div>
                    <p>"Unlock the full potential of your online presence with expert web customization services, enhancing user experience and driving meaningful interactions."</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->



            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title fs-5" id="exampleModalLabel">Let's have a call <span>@8287647253</span> Or drop me and email at so9amgupta@gmail.com I will connect you back</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <form method="POST" id="connectForm">
  <div class="mb-3">
    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" autocomplete="off" required>
  </div>

  <div class="mb-3">
    <input type="text" name="cname" class="form-control" id="Cname" placeholder="Your Company Name or URL" autocomplete="off">
  </div>

  <div class="mb-3">
    <input type="tel" name="mobile" class="form-control" id="mobile" placeholder="Your Phone Number" autocomplete="off" required>
    <div id="mobileError" class="invalid-feedback"></div>
  </div>

  <div class="mb-3">
    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" autocomplete="off" required>
    <div id="emailError" class="invalid-feedback"></div>
  </div>

</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Submit</button>
      </div>
    </div>
  </div>
</div>

  

  

  



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
  
  if (isset($_POST['action']) && $_POST['action'] == 'save') {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email =    mysqli_real_escape_string($con, $_POST['email']);    
    $subject =  mysqli_real_escape_string($con, $_POST['subject']);
    $message =  mysqli_real_escape_string($con,$_POST['message']);

    $sql = "INSERT INTO contactus SET         
     name  = '" . $username . "',
     email  = '" . $email . "',
     subject  = '" . $subject . "',
     message = '" . $message . "'";
    //   print_r($sql);
$query  = mysqli_query($con, $sql);
if ($query) {
    echo '<script type="text/javascript">sweetAlert("Congratulations !","Successfully Record added","success")</script>'; 


} else {
echo "something wrong" . mysqli_connect_error();
}
}


 ?>