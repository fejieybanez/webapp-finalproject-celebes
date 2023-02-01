@extends('homepage.layouts.app')
 
 
@section('content')

        @include('homepage.includes.nav')
        <!-- <div class="news-container">
        <div class="title">
            Announcement
        </div>

        <ul>
            <li>
                INSERT ANY TEXT HERE!
            </li>
        </ul>
    </div>  -->
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
       
        <section class="page-section bg-light" id="announcement">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading font-bold text-uppercase">Announcement</h2>
                    <h3 class="section-subheading text-muted"></h3>
                
                <div class="carousel" data-flickity='{ "autoPlay": true }'>
                @foreach ($sliders as $sliderItem)
                    <div class="carousel-cell" style="background-image: url({{ asset($sliderItem->image)}})"></div>
                @endforeach
                </div>
            </div>
        </section>

            @include('homepage.includes.about') 

         <!-- Announcement -->
            <div class="news-container">
                    <div class="title">
                        Announcement
                    </div>

                    <ul>
                        @foreach($sliders as $SliderItem)
                            <li>
                            {{$SliderItem->description}}
                            </li>
                        @endforeach
                    </ul>
            </div> 
        </section>

       @include('homepage.includes.product')

        <!-- Signup-->
        <!-- <section class="signup-section" id="signup">
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
                        <!-- <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN"> -->
                            <!-- Email address input-->
                            <!-- <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            Submit success message -->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <!-- <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div> -->
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section> --> 

        @include('homepage.includes.contact')

        <!-- Footer-->
        <footer class="footer small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Celebes Coconut Corporation 2023</div></footer>
        
@endsection
        