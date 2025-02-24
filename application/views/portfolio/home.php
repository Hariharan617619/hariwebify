<!DOCTYPE html>
<html lang="en">
    <head>
        <met#aeb3b8et="utf-8">
        <title>Hariwebify</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?= base_url('assets/img/favicon.ico'); ?>" rel="icon">


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/lib/animate/animate.min.css'); ?>" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <style>
.success-message {
    display: none;
    color: #28a745; /* Green color */
    font-weight: bold;
    font-size: 16px;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}
.fade-out {
    opacity: 0 !important;
}
    .custom-tooltip-container {
  position: relative;
  cursor: pointer;
}
.mb-0 {
    text-align: justify;
}
.custom-tooltip {
    visibility: hidden;
    background-color: #120B84; /* Purple background */
    color: #fff; /* Bright text */
    font-weight: bold; /* Bold text */
    text-align: center;
    border-radius: 5px;
    padding: 5px 10px;
    position: absolute;
    bottom: 120%; /* Position above the icon */
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s;
    font-size: 14px; /* Default size */
    width: auto; /* Adjust width automatically */
    max-width: 250px; /* Set a reasonable max width to avoid overly long tooltips */
    white-space: nowrap; /* Prevent wrapping */
}


.custom-tooltip-container:hover .custom-tooltip {
  visibility: visible;
  opacity: 1;
}

.image-container {
    position: relative;
    display: inline-block;
}

.overlay-text {
    position: absolute;
    bottom: 10px; /* Position text at the bottom */
    left: 10px;  /* Position text to the left */
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-align: left;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.image-container:hover .overlay-text {
    opacity: 1;
}

.image-container img {
    transition: opacity 0.3s ease-in-out;
}

.image-container:hover img {
    opacity: 0.7; /* Optional: reduces opacity of the image when hovered */
}
                                
</style>
    </head>
    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 sticky-lg-top vh-100">
                    <div class="d-flex flex-column h-100 text-center overflow-auto shadow">
                        <img class="w-100 img-fluid mb-4" src="<?= base_url('assets/img/hariharan.jpg'); ?>" alt="Image">
                        <h1 class="text-primary mt-2">Hariharan M</h1>
                        <div class="mb-4" style="height: 22px;">
                            <h4 class="typed-text-output d-inline-block text-light"></h4>
                            <div class="typed-text d-none">Web Developer, Software Developer</div>
                        </div>
                        <div class="d-flex justify-content-center mt-auto mb-3">
                        <a class="btn btn-secondary btn-square mx-1" href="https://github.com/Hariharan617619" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="btn btn-secondary btn-square mx-1" href="https://twitter.com/harry617617" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-secondary btn-square mx-1" href="https://www.linkedin.com/in/hariharan-m-99bb80206/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-secondary btn-square mx-1" href="https://www.instagram.com/hari_haran_617?igsh=bmgwd2hwam1sczVj" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="d-flex align-items-end justify-content-between border-top">
                            <a href="<?= base_url('assets/pdf/Hariharan_software_developer_cv.pdf'); ?>" class="btn w-50 border-end" download>Download CV</a>
                            <a href="#services" class="btn w-50 btn-scroll">Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- About Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">About Me</h1>
                        <p class="mb-0">I am a passionate web developer with a keen eye for building clean, efficient, and user-friendly web applications. I thrive on transforming ideas into innovative digital solutions and am always eager to learn and adapt to new technologies. Seeking an entry-level opportunity in a dynamic organization where I can leverage my skills while continuing to grow and expand my knowledge in the field. My curiosity drives me to stay ahead of industry trends, ensuring that my work reflects both creativity and functionality.</p>
                        <br>
                        <div class="row mb-4">
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Name:</span> Hariharan M
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Degree:</span> MCA
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Experience:</span> 1.5 Years
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Phone:</span> +91 8825494603
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Email:</span> hariharandream@gmail.com
                            </div>
                            <div class="col-sm-6 py-1">
                                <span class="fw-medium text-primary">Address:</span> Mayiladuthurai, Tamil Nadu, India
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">1.5</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Years of</p>
                                        <h5 class="mb-0">Experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-4">
                                <div class="d-flex bg-secondary p-4">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                                    <div class="ps-3">
                                        <p class="mb-0">Complete</p>
                                        <h5 class="mb-0">Projects</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- About End -->

                    <!-- Skills Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Skills</h1>
                        <div class="row">
                            <!-- First Row -->
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <i class="fab fa-html5 fa-3x" style="color: #F16529;"></i>
                                    <!-- Custom Tooltip -->
                                    <span class="custom-tooltip">HTML 5</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <i class="fab fa-css3-alt fa-3x" style="color: #1572B6;"></i> <!-- CSS3 in Original Blue -->
                                    <span class="custom-tooltip">CSS 3</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <i class="fab fa-bootstrap fa-3x" style="color: #6610f2;"></i> <!-- Bootstrap Icon in Purple -->
                                    <span class="custom-tooltip">Bootstrap</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Second Row -->
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <i class="fab fa-js-square fa-3x" style="color: #F7DF1E;"></i> <!-- JavaScript Icon in Yellow -->
                                    <span class="custom-tooltip">JavaScript</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <i class="fab fa-php fa-3x" style="color: #8993BE;"></i> <!-- PHP Logo with Original Color -->
                                    <span class="custom-tooltip">PHP</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <img src="<?= base_url('assets/img/mysql.png'); ?>" alt="MySQL" class="img-fluid" style="width: 50px; height: 35px;">
                                    <span class="custom-tooltip">MySQL</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Third Row -->
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <img src="<?= base_url('assets/img/ci.png'); ?>" alt="CodeIgniter" class="img-fluid" style="max-width: 50px;">
                                    <span class="custom-tooltip">Codeigniter</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <i class="fab fa-laravel fa-3x" style="color: #FF2D20;"></i> <!-- Laravel Logo with Original Color -->
                                    <span class="custom-tooltip">Laravel</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <img src="<?= base_url('assets/img/jquery.svg'); ?>" alt="jQuery" class="img-fluid" style="max-width: 50px;">
                                    <span class="custom-tooltip">jQuery</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Skills End -->

                    <!-- Tools Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Tools</h1>
                        <div class="row">
                            <!-- First Row -->
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <img src="<?= base_url('assets/img/git.png'); ?>" alt="CodeIgniter" class="img-fluid" style="max-width: 50px;">
                                    <span class="custom-tooltip">Git</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                     <i class="fab fa-github fa-3x" style="color: #000000;"></i> 
                                    <span class="custom-tooltip">GitHub</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <img src="<?= base_url('assets/img/vscode.png'); ?>" alt="CodeIgniter" class="img-fluid" style="max-width: 50px;">
                                    <span class="custom-tooltip">VS Code</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Second Row -->
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <img src="<?= base_url('assets/img/vercel.svg'); ?>" alt="CodeIgniter" class="img-fluid" style="max-width: 50px;">
                                    <span class="custom-tooltip">Vercel</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                <img src="<?= base_url('assets/img/netbeans.png'); ?>" alt="CodeIgniter" class="img-fluid" style="width: 90px; height: 60px;">
                                    <span class="custom-tooltip">NetBeans</span>
                                </div>
                            </div>
                            <div class="col-sm-4 mb-4">
                                <div class="text-center custom-tooltip-container">
                                    <img src="<?= base_url('assets/img/canva.webp'); ?>" alt="CodeIgniter" class="img-fluid" style="width: 60px; height: 60px;">
                                    <span class="custom-tooltip">Canva</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Tools End -->

                    <!-- Expericence Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Experience</h1>
                        <div class="border-start border-2 border-light pt-2 ps-5">
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Software Developer</h5>
                                <?php
                                $start_date = "Apr 2024";
                                $end_date = (date('Y-m') === "2025-01") ? "Present" : date('F Y');
                                ?>
                                <p class="mb-2">TradeZap Pvt Ltd | <small><?=$start_date?> - <?=$end_date?></small></p>
                                <ul>
                                    <li>Designed, developed, and maintained backend solutions using the CodeIgniter PHP framework.</li>
                                    <li>Built and optimized RESTful APIs to support seamless communication between front-end and back-end systems.</li>
                                    <li>Enhanced database design and implemented efficient queries using MySQL to ensure high performance.</li>
                                    <li>Integrated third-party APIs and services to add advanced functionality to applications.</li>
                                    <li>Implemented robust authentication and authorization mechanisms to ensure secure access control.</li>
                                    <li>Debugged and resolved application issues, ensuring a smooth user experience and system reliability.</li>
                                </ul>
                            </div>
                            <div class="position-relative mb-4">
                                <span class="bi bi-arrow-right fs-4 text-light position-absolute" style="top: -5px; left: -50px;"></span>
                                <h5 class="mb-1">Web Developer</h5>
                                <p class="mb-2">A1Ideaz IT Solutions | <small>Mar 2023 - Aug 2023</small></p>
                                <ul>
                                    <li>Developed and maintained dynamic web applications using Laravel, ensuring clean, modular, and scalable code.</li>
                                    <li>Integrated advanced features such as authentication, role-based access control, and payment gateways.</li>
                                    <li>Designed and implemented RESTful APIs to support seamless integration with third-party services.</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- Expericence End -->

                    <!-- Services Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s" id="services">
                        <h1 class="title pb-3 mb-5">Services</h1>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-laptop-code mx-auto mb-4"></i>
                                    <h5 class="mb-2">Web Design</h5>
                                    <p class="mb-0">I create visually appealing, user-friendly websites tailored to your business needs. Whether you're starting from scratch or redesigning an existing site, I ensure responsive, intuitive designs that provide a seamless experience for your visitors across all devices</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item">
                                    <i class="fa fa-2x fa-edit mx-auto mb-4"></i>
                                    <h5 class="mb-2">Content Creating</h5>
                                    <p class="mb-0" style="text-align: justify;">I provide high-quality content writing services to help businesses communicate effectively. From blog posts to website copy, I craft engaging, SEO-friendly, and tailored content that resonates with your target audience and drives results.</p>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Services End -->

                    <!-- Portfolio Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Portfolio</h1>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-center mb-2">
                                        <ul class="list-inline mb-4" id="portfolio-flters">
                                            <li class="btn btn-secondary active"  data-filter="*"><i class="fa fa-star me-2"></i>All</li>
                                            <li class="btn btn-secondary" data-filter=".second"><i class="fa fa-mobile-alt me-2"></i>Development</li>
                                            <li class="btn btn-secondary" data-filter=".first"><i class="fa fa-laptop-code me-2"></i>Design</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row portfolio-container">
                                    <div class="col-md-6 mb-4 portfolio-item second">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <div class="image-container">
                                                <img class="img-fluid w-100" src="<?= base_url('assets/img/portfolio-1.png'); ?>" alt="" style="height: 300px; object-fit: cover;">
                                                <div class="overlay-text">Charity Donation Web Application</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item first">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <a href="https://iiesolution.com/" target="_blank">
                                                <div class="image-container">
                                                <a href="https://iiesolution.com/" target="_blank"><img class="img-fluid w-100" src="<?= base_url('assets/img/port2.jpg'); ?>" alt="" style="height: 300px; object-fit: cover;"></a>
                                                    <div class="overlay-text">Business Website</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item second">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <div class="image-container">
                                                <img class="img-fluid w-100" src="<?= base_url('assets/img/port3.jpg'); ?>" alt="" style="height: 300px; object-fit: cover;">
                                                <div class="overlay-text">SMS Tracking Web Application</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 portfolio-item second">
                                        <div class="position-relative overflow-hidden mb-2">
                                            <div class="image-container">
                                                <img class="img-fluid w-100" src="<?= base_url('assets/img/portfolio-4.jpg'); ?>" alt="" style="height: 300px; object-fit: cover;">
                                                <div class="overlay-text">ERP Billing Application</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- Portfolio End -->

                    <!-- Testimonial Start -->
                    <section class="py-5 border-bottom wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="title pb-3 mb-5">Testimonial</h1>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="text-left">
                                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                <p class="fs-4 mb-4">I had the pleasure of creating a customized website for an interior design client. The project focused on showcasing their portfolio, services, and aesthetic vision with a sleek and modern design. The client was highly satisfied with the final outcome, praising its user-friendly layout and visual appeal.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="<?= base_url('assets/img/iies.png'); ?>" style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <p class="text-primary fs-5 mb-1">IIES</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Testimonial End -->

                    <!-- Contact Start -->
                    <section class="py-5 wow fadeInUp d-none" data-wow-delay="0.1s" id="contact">
                        <h1 class="title pb-3 mb-5">Contact Me</h1>
						<p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a></p>
                            <form id="contactForm">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0 bg-secondary" id="name" placeholder="Your Name" required>
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0 bg-secondary" id="email" placeholder="Your Email" required>
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0 bg-secondary" id="subject" placeholder="Subject" required>
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0 bg-secondary" placeholder="Leave a message here" id="message" style="height: 200px" required></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <button id="sendMessage" class="btn btn-primary w-100 py-3" type="button">Send Message</button>
                                    </div>
                                </div>
                            </form>
                    </section>
                    <!-- Contact End --> 

                    <!-- Subscribe Start -->
                    <section class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-secondary text-center p-5">
                            <h1 class="text-white font-weight-bold">Subscribe My Newsletter</h1>
                            <p class="text-white">Subscribe and get my latest article in your inbox</p>
                            <div class="position-relative w-100">
                                <input id="emailInput" class="form-control bg-dark border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" onclick="showSuccessMessage()">Subscribe</button>
                            </div>
                            <p id="successMessage" class="success-message"><i class="fas fa-check-circle"></i> Thank you for subscribing!</p>
                        </div>
                    </section>        
                    <!-- Subscribe End -->

                    <!-- Footer Start -->
                    <section class="wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary text-light text-center p-5">
                            <div class="d-flex justify-content-center mb-4">
                                <a class="btn btn-dark btn-square mx-1" href="https://github.com/Hariharan617619"><i class="fab fab fa-github"></i></a>
                                <a class="btn btn-dark btn-square mx-1" href="https://twitter.com/harry617617"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-square mx-1" href="https://www.linkedin.com/in/hariharan-m-99bb80206/"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-dark btn-square mx-1" href="https://www.instagram.com/hari_haran_617?igsh=bmgwd2hwam1sczVj"><i class="fab fa-instagram"></i></a>
                            </div>
                            <!-- <div class="d-flex justify-content-center mb-3 d-none">
                                <a class="text-light px-3 border-end" href="#">Privacy</a>
                                <a class="text-light px-3 border-end" href="#">Terms</a>
                                <a class="text-light px-3 border-end" href="#">FAQs</a>
                                <a class="text-light px-3" href="#">Help</a>
                            </div> -->
							
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<p class="m-0">&copy; All Rights Reserved. Designed by Hariharan🩵👻</p>
                        </div>
                    </section>
                    <!-- Footer End -->
                </div>
            </div>
        </div>
              
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

        <script>
            function showSuccessMessage() {
                var email = document.getElementById("emailInput").value;
                var successMessage = document.getElementById("successMessage");

                if (email.trim() !== "") {
                    successMessage.style.display = "block"; 
                    successMessage.style.opacity = "1"; // Fade in
                    document.getElementById("emailInput").value = ""; // Clear the input field

                    setTimeout(function() {
                        successMessage.classList.add("fade-out"); // Fade out effect
                        setTimeout(function() {
                            successMessage.style.display = "none";
                            successMessage.classList.remove("fade-out"); // Reset for next use
                        }, 1000);
                    }, 2000);
                }
            }
        </script>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('assets/lib/wow/wow.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/typed/typed.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/easing/easing.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
        <script src="<?= base_url('assets/lib/lightbox/js/lightbox.min.js'); ?>"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="<?= base_url('assets/js/main.js'); ?>"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function () {
            $("#sendMessage").click(function () {
                $.ajax({
                    url: "<?= base_url('contact/submit') ?>",
                    type: "POST",
                    data: $("#contactForm").serialize(),
                    dataType: "json",
                    success: function (response) {
                        if (response.status == 'success') {
                            alert(response.message);
                            $("#contactForm")[0].reset();
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function () {
                        alert("Something went wrong. Please try again.");
                    }
                });
            });
        });
        </script>
    </body>
</html>
