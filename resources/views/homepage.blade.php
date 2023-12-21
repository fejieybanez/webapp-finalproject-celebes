<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cheat Time Bakehouse</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" integrity="sha384-wONeM9RPsGvjgK4zO6dw5XiZZ6EG4JcfCFL/AsX3BRfKA9F9L5kaQQ3e5DRu2mYc" crossorigin="anonymous"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-oZRasf5C7LfiSA8Q+3mL4xkO1rRSKLGbN5P9TZ9z8TfNp4yC3K2pNgyMIJkA6MlL" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">       
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- This javascript is intended to make sliders in the announcement section work. Once the user added announcements, image will be displayed in a slider -->
 <!-- JavaScript -->
 <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> 
        <script type="text/javascript">
            $('.main-carousel').flickity({
  // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true
        });

        </script>
         <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> 

  @include('homepage.includes.nav')


  <!-- ======= Hero Section ======= -->
  <!-- everything makita sa home -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Cheat Time Bakehouse</span></h1>
          <h2>The only CHEAT we allow!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#gallery" class="btn-book animated fadeInUp scrollto">Gallery</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtube.com/embed/Ez_5m5z5ymk?si=6uK3RgA7P2prcTcZ" class="glightbox play-btn"></a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
<!-- since ang about is giseparate man ug file para di ra kaayo taas ni nga file, we should link it here para maapil ra gihapon syas landing page -->
  @include('homepage.includes.about') 

  <!--  -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant!</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Delicious Treats</h4>
              <p>Craving the ultimate comfort food combo? Dive into a smorgasbord of flavors at Cheat Time Bakehouse!   Pile high a customizable platter with juicy burgers, creamy pastas, and cheesy pizzas - guaranteed to satisfy any stomach rumble. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Budget Friendly</h4>
              <p> Forget overpriced, underwhelming meals! At Cheat Time Bakehouse, we're serving up heaping helpings of satisfaction without denting your wallet. We're passionate about bringing fresh, flavorful dishes to the table, using quality ingredients without the gourmet price tag. </p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Instagramable</h4>
              <p>Step into a whimsical wonderland of vibrant hues and mouthwatering delights at Cheat Time Bakehouse! Snapping a pic of towering, rainbow-hued freakshake, its frothy peak adorned with candies, against a backdrop of neon murals depicting playful jungle creatures.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

  
        <!-- ======= Announcement Section ======= -->
        <section class="page-section bg-light announcement-section" id="announcement">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-bold text-black text-uppercase">Announcement</h2>
            <h3 class="section-subheading text-muted"></h3>
        </div>
<!-- Displays a carousel of images, likely for showcasing important announcements. -->
<!-- Uses the Flickity library for carousel functionality. -->
        <div class="carousel" data-flickity='{ "autoPlay": true }'>
            @foreach ($sliders as $sliderItem)
                <div class="carousel-cell" style="background-image: url({{ asset($sliderItem->image)}})"></div>
            @endforeach
        </div>
    </div>
</section>

<!-- Announcement -->
<!-- Container with a "news-container" class -->
<div class="news-container">
    <div class="title">
        Announcement
    </div>

    <ul>
        @foreach($sliders as $SliderItem)
            <li>{{$SliderItem->description}}</li>
        @endforeach
    </ul>
</div> <!-- End of Announcement Section -->

<!-- link to the separated file for menu -->
    @include('homepage.includes.menu')

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Banca Platter</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Monster Freakshake</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Creamy Halo Halo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Mini Burgers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Cheesy Pizza</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Variety of Platter</h3>
                    <p class="fst-italic"> Twelve tempting banca platter,  delicious foods ready to be devoured!</p>
                    <p>Dive into a fiesta of flavor with the Twelve Tempting Banca Platter!  Crave-worthy chicken, crispy lumpia, fresh seafood, and fluffy bihon noodles dance with juicy burgers, cheesy pizza, and a sweet bento cake.  Wash it all down with free juice and grab your chopsticks – this platter is a party for your taste buds!</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>  
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Monster Freakshake</h3>
                    <p class="fst-italic">Overloaded freakshakes for sweet loving peeps!</p>
                    <p>These monstrous masterpieces promise to fix all your sugar cravings at once — with layers and layers of flavours, you’d surely have your senses in alert before you can even take a sip. Freak shakes are those towering glasses of rich, milky goodness rich topped with moist cake or cookie chunks, generous lashings of cream and a carnival of colorful toppings.  You sure are ready to take on that monstrous glass and even social media for that matter. Snap chat!</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Creamiest Halo Halo in town!</h3>
                    <p class="fst-italic">The Perfect Cool-Down: Halo-halo, your creamy escape from the heat, one refreshing spoonful after another.</p>
                    <p> A mountain of shaved ice, bathed in rich, smooth coconut milk, overflowing with sweet delights. Chewy ube halaya peeks from beneath, golden leche flan adds a luxurious touch, and vibrant jellies dance like confetti. Every spoonful is a cool explosion of textures and flavors, all crowned with a sprinkle of crispy pinipig.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tasty Mini Burgers</h3>
                    <p class="fst-italic"> Tiny Tummies, Big Smiles: Mini Burgers, the Kid-Approved Champions of Mealtime</p>
                    <p>Forget boring burgers! These ain't your average patties. We're talking flavor bombs disguised as miniature masterpieces, ready to explode on your tongue. Ditch the boring and embrace the bold! Mini burgers are the tastebud-tingling, pocket-pleasing answer to your next food adventure.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cheesy Pizza</h3>
                    <p class="fst-italic">Get Your Cheese Pull On: Every Bite a Stretchy, Gooey Symphony of Flavor!</p>
                    <p>Forget fancy toppings and gourmet crusts. Sometimes, all you crave is a classic, cheesy pizza that hits the spot without denting your wallet. We're talking molten mozzarella, gooey goodness, stretching from slice to glorious slice. Indulge your cheese cravings! This isn't just a meal, it's an experience. It's sharing laughter and memories with loved ones, one cheesy slice at a time.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant/Cafe</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/1.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/1.png" alt="" class="img-fluid">
              </a>
            </div>  
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/2.png" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I just wanted to take a moment to express my immense satisfaction with my recent visit to your incredible bakehouse. From the moment I stepped in, I was swept away by the delightful symphony of flavors, inviting ambiance, and picture-perfect corners that make your space truly special. Indeed a place to visit!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Jen Ybanez</h3>
                <h4>Customer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Your menu is a masterpiece! Every dish I tried was a burst of flavor, showcasing the freshest ingredients and meticulous preparation. The juicy, dripping burgers were pure indulgence, while the creamy pastas were pure comfort in a bowl. And can we talk about those overloaded freakshakes?
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Fejj Ybanez</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Cheat Time Bakehouse is so much more than just good food. The ambiance you've created is truly magical. The warm lighting, cozy nooks, and pops of greenery create a haven of peace and tranquility amidst the city's hustle. I felt myself instantly relax and unwind, whether I was engrossed in a good book or catching up with friends.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Idyyy</h3>
                <h4>Customer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  In a world that often feels chaotic and overwhelming, Cheat Time Bakehouse offered me a much-needed escape. It wasn't just about satisfying my taste buds; it was about nourishing my soul. I left feeling refreshed, inspired, and incredibly grateful for the experience. Thank you for making my cheat day so incredibly special!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Van Ybanez</h3>
                <h4>Supervisor</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I just had to drop you a line and express my unadulterated delight with my recent visit to your incredible bakehouse! From the moment I stepped through the door, I was enchanted by the warm ambiance, the Insta-worthy décor, and the intoxicating aroma of deliciousness wafting from the kitchen.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Jeff Ybanez</h3>
                <h4>Satisfied Customer</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    @include('homepage.includes.contact')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cheat Time Bakehouse</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>