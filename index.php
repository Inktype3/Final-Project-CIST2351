<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cloverleaf National Park</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Welcome to Cloverleaf National Park</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                
                <!--PHP TIME AND DATE -->
                <body> <?php
                       echo "The time is " . date("h:i:sa");
                         ?>
                </body>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--PHP Email Form-->
        <body>

         Welcome <?php echo $_GET["name"]; ?><br>
         Your email address is: <?php echo $_GET["email"]; ?>

         </body>


        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">CloverLeaf National Park</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">"Discover the natural beauty of Cloverleaf National Park and create unforgettable memories in the great outdoors."</h2>
                        <a class="btn btn-primary" href="#about"> Learn More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">About Cloverleaf National Park</h2>
                        <p class="text-white-50">
                            Welcome to Cloverleaf National Park, a beautiful and serene campsite located in the heart of Georgia. Our park offers a one-of-a-kind outdoor experience where you can escape from the hustle and bustle of everyday life and immerse yourself in nature. With a variety of amenities and activities available, our park is the perfect destination for families, couples, and solo adventurers alike.

                            At Cloverleaf National Park, we offer campsite memberships that give you exclusive access to our campsites and facilities throughout the year. Whether you're looking to stay for a weekend getaway or a long-term vacation, our memberships provide you with affordable and convenient options for your camping needs.

                            Our park is nestled in a picturesque location surrounded by forests, lakes, and trails that are perfect for hiking, fishing, boating, and other outdoor activities. We also have a range of amenities that will make your stay comfortable and enjoyable, including picnic areas, fire pits, showers, and more.

                            We take pride in providing a safe and family-friendly environment for our visitors, and our friendly staff is always available to assist you with any questions or concerns you may have. So, come and experience the beauty of Cloverleaf National Park and create unforgettable memories that will last a lifetime.
                            <a href="https://www.nps.gov/state/ga/index.htm">Georgia National Park partner.</a>
                            
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/homepagecover.jpg" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/mountains.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Cabin Rentals at the Cormier Mountains</h4>
                            <p class="text-black-50 mb-0">Escape to the peaceful serenity of Cormier Mountains and indulge in the ultimate outdoor getaway. Our rental cabins offer the perfect retreat for those seeking a comfortable and relaxing mountain vacation. Nestled in the heart of the mountains, our cabins are surrounded by stunning natural beauty and offer breathtaking views of the surrounding landscapes. With a range of amenities including fully equipped kitchens, cozy bedrooms, and private outdoor spaces, our cabins provide the perfect home away from home. Book your stay today and experience the magic of Cormier Mountains!</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/kids-hiking.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Trails</h4>
                                    <p class="mb-0 text-white-50"> With over 20 miles of trails winding through forests, lakes, and rolling hills, our park offers a unique outdoor experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/deer.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Wildlife</h4>
                                    <p class="mb-0 text-white-50">Our Park is home to the rare and white-spotted deer, a unique subspecies of the white-tailed deer that can be spotted roaming the park's meadows.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to Cloverleaf National Park to receive updates!</h2>
        
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>

                                   
                                   
                                   <-- PHP COOKIES-->
                                   
                                   <?php
                                    $cookie_name = "user";
                                    $cookie_value = "Bella Cormier";
                                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                                     ?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?> 





                                    
                                    <!--PHP FORM-->
                                    <body>
                                    <form action="welcome_get.php" method="get">
                                        Name: <input type="text" name="name"><br>
                                        E-mail: <input type="text" name="email"><br>
                                        <input type="submit">
                                        </form>
                                        
                                    </body>

                                 <!--PHP Function--> 

                                 <?php
                                 function familyName($fname) {
                                 echo "$fname Cormier.<br>";
                                  }

                                familyName("Emily");
                                familyName("Diego");
                                familyName("Diana");
                                familyName("Walker");
                                familyName("Bella");
                                ?>

                                   
                
                                    <br />
                                   
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"> 13 Cloverleaf Road, McDonough GA, 30252</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">CloverleafNationalPark.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+1 (770) 133-3331</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                   
                </div>
            </div>

            <-- PHP Do While Loop --> 

         <?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 3);
?>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Cloverleaf National Park 2023</div></footer>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        
    </body>
</html>
