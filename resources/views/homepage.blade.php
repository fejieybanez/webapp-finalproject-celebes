@extends('homepage.layouts.app')
 
 
@section('content')

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">    
            <div style="text-align: left;"><img src="assets/favicon.png" width="50" alt="..." /></div>
                <a class="navbar-brand" href="#page-top">Celebes Coconut Corporation</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#mission">Announcements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Celebes Coconut Corporation</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Manufacturer of Organic and Fair Trade Certified Coconut Products</h2>
                        <a class="btn btn-primary" href="#about">See more...</a>
                    </div>
                </div>
            </div>
        </header> 
       
        <!-- About-->
        <section class="about-section text-center" id="about">
        <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <div class="skills">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span>
            </div>
        </div>
    </div>

        <!--<section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">About</h2>
                        <p class="text-white-50">
                        Like the coconut trees that dot the tropical landscape of the Philippines, Celebes stands tall and proud today. 
                        Its corporate odyssey began without much fanfare in 1981 when it manufactured wood products from timber sourced from its forest concession in Butuan City, Philippines located in the island of Mindanao.
                        Yet from this modest start emerged one of the country’s largest export oriented enterprises, right at the onset of the New Millennium.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." width="1650" height="20" />
            </div>
        </section>
         <!-- Mission-->
       <!-- <section class="mission-section text-center" id="mission">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-black mb-4">Corporate Mission</h2>
                        <p class="text-black-50">
                        To be the No. 1 producer and exporter of world-class coconut products in the Philippines 
                        </p>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- Product --> 
    <section class="products-section bg-light" id="products">
    <div class="container px-4 px-lg-55">
                <!-- Featured Product Row-->
          <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/product1.jpg" alt="..." width="650" height="20"/></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Celebes Coconut Products</h4>
                            <p class="text-black-50 mb-0"></p>Celebes Coconut Corporation is a trusted manufacturer and exporter of the "Organic Certified" Banana Chips, Coconut Charcoal, Coconut Cream, Coconut Flour, Coconut Juice, Coconut Milk, Coconut Sugar, Coconut Water, Creamed Coconut, Crude Coconut Oil, Dehydrated Fruits, Desiccated Coconut, Frozen Coconut Meat, RBD Coconut Oil, Virgin Coconut Oil and Coconut Water Concentrate.</p>
                        </div>
                    </div>
                </div>
    <div class="container"> 
    <div id="slider" class="carousel slide" data-ride="carousel"> 
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>
            <li data-target="#slider" data-slide-to="3"></li>
            <li data-target="#slider" data-slide-to="4"></li>
            <li data-target="#slider" data-slide-to="5"></li>
            <li data-target="#slider" data-slide-to="6"></li>
            <li data-target="#slider" data-slide-to="7"></li>
        </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic Coconut Water</h3>
                                    <p> It is actually the juice found inside a fresh coconut. Its water is an all-natural electrolyte-filled and it is one of the nature's most refreshing drinks consumed worldwide for its nutritious and health benefiting properties.</p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/product2.jpg">
                        </div>
                    </div>
                </div>
             <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic Coconut Cream</h3>
                                    <p> A sweet, milky white cooking base derived from the meat of a mature coconut. The color and taste of the milk can be attributed to the high oil content ans sugar. It is extracted from the grated flesh of the mature coconut. </p> 
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/product3.jpg">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic Coconut Milk</h3>
                                    <p> A creamy tropical taste that is utilized mostly to make pastries, additive flavors to your favorite food or dessert recipes, soup and other cooking. Coconut milk provides 50% more calcium than dairy milk. </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/product4.jpg">
                        </div>
                    </div>
                </div><div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic Virgin Oil</h3>
                                    <p> It is a healthy cooking option, which can likewise be used to condition the skin and hair care. Virgin coconut oil is known for its pleasant scent, taste, antioxidants, medium chain fatty acids (MCFA), and vitamins, not to mention a variety of other things.</p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/productb.jpg">
                        </div>
                    </div>
                </div><div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic Desiccated Coconut</h3>
                                    <p>
                                        It is known for completing the exact Quality Standard Tests that ensure purity, as well as chemical and microbiological superiority, before handed over the best tables around the globe. 
                                    </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/product11.jpg">
                        </div>
                    </div>
                </div><div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic Creamed Coconut</h3>
                                    <p> It is the unsweetened dehydrated fresh meat of a mature fruit of coconut ground to a semi-solid white creamy paste. It is fundamentally the same to coconut milk however contains less water. The difference is mainly consistency. 
                                        </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/product7.jpg">
                        </div>
                    </div>
                </div><div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic RDB Coconut Oil</h3>
                                    <p> It originates from the seeds of Coconut produced using dried whole coconut (Copra). RDB Coconut oil is mormally utilized as a part of numerous skincare formulations and products including soap, lotion, creams, ointments and toiletry industry.
                                        </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/product8.jpg">
                        </div>
                    </div>
                </div><div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div>
                                <h3> Organic Banana Chips</h3>
                                    <p> Very crispy and have high nutritional value banana chips made with all natural ingredients and with no artificial flavors, colors or preservatives. 
                                         </p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                                    <img src="assets/img/product9.jpg">
                        </div>
                    </div>
                </div>
            </div><!--Carousel Inner Ends Here-->
            <!--Left and Right Controls-->
           <a class= "left carousel-control" href="#slider" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only"> Previous</span>    
        </a>
        <a class= "right carousel-control" href="#slider" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only"> Next</span>    
        </a>
    </div> <!--Carousel Ends  Here-->
</div> <!--Container Ends Here-->
</section>
<!-- Projects-->
<!--<section class="products-section bg-light" id="products">
            <div class="container px-4 px-lg-5">
                <!-- Featured Product Row-->
<!--<<div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/product1.jpg" alt="..." width="650" height="20"/></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Celebes Coconut Products</h4>
                            <p class="text-black-50 mb-0"></p>Celebes Coconut Corporation is a trusted manufacturer and exporter of the "Organic Certified" Banana Chips, Coconut Charcoal, Coconut Cream, Coconut Flour, Coconut Juice, Coconut Milk, Coconut Sugar, Coconut Water, Creamed Coconut, Crude Coconut Oil, Dehydrated Fruits, Desiccated Coconut, Frozen Coconut Meat, RBD Coconut Oil, Virgin Coconut Oil and Coconut Water Concentrate.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
<!--<<div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/producta.jpg" alt="..." width="700" height="500" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Coconut Juice</h4>
                                    <p class="mb-0 text-white-50"> Description here...</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
               <!--< <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/productb.jpg" alt="..." width="700" height="500"/></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Coconut Oil</h4>
                                    <p class="mb-0 text-white-50"> Description here...</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
<!--<<div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/producta.jpg" alt="..." width="700" height="500" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Coconut Juice</h4>
                                    <p class="mb-0 text-white-50"> Description here...</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
              <!--<  <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Mountains</h4>
                                    <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
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
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
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
        <section class="contact-section">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Celebes Coconut Corporation, Purok 4, Barangay Banza, Butuan City, Philippines, 8600</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!">celebes.marketing@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-phone-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Telephone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">+63 85 225-9852</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://twitter.com/celebescoconut/"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="https://web.facebook.com/celebescoconutcorp"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/celebes_coconut_corporation/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Celebes Coconut Corporation 2023</div></footer>
        
@endsection
        