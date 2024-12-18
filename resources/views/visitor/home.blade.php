 @extends('layouts.index')

 @section('content')
     <!-- Hero Section -->
     <section id="hero" class="hero section">
         <div class="hero-bg">
             <img src="assets/img/hero-bg-light.webp" alt="">
         </div>
         <div class="container text-center">
             <div class="d-flex flex-column justify-content-center align-items-center">
                 <h1 data-aos="fade-up">India rides with <span>Flip Share</span></h1>
                 <p data-aos="fade-up" data-aos-delay="100">
                     Flip Share is transforming urban travel with bike taxis, autos, and cabs designed for everyday
                     convenience. Now in 150+ cities and trusted by millions, Flip Share offers safe, affordable, and
                     seamless rides tailored to your needs.
                     <br>
                 </p>
                 <div class="d-flex gap-2" data-aos="fade-up" data-aos-delay="200">
                     <a href="#about" class="btn-get-started ">Download FlipShare</a>
                     <a href="" class="btn-get-started bg-dark"><span>Sign-Up as
                             Driver</span></a>
                 </div>
                 <img src="assets/img/rapido/Main_Banner.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out"
                     data-aos-delay="300">
             </div>
         </div>
     </section>
     <!-- /Hero Section -->

     <!-- Featured Services Section -->
     {{-- <section id="featured-services" class="featured-services section light-background">

         <div class="container">

             <div class="row gy-4">

                 <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="service-item d-flex">
                         <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                         <div>
                             <h4 class="title"><a href="#" class="stretched-link">Lorem Ipsum</a></h4>
                             <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                 molestias
                                 excepturi</p>
                         </div>
                     </div>
                 </div>
                 <!-- End Service Item -->

                 <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                     <div class="service-item d-flex">
                         <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                         <div>
                             <h4 class="title"><a href="#" class="stretched-link">Dolor Sitema</a></h4>
                             <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                 aliquip exa</p>
                         </div>
                     </div>
                 </div><!-- End Service Item -->

                 <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="service-item d-flex">
                         <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                         <div>
                             <h4 class="title"><a href="#" class="stretched-link">Sed ut perspiciatis</a>
                             </h4>
                             <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                 cillum</p>
                         </div>
                     </div>
                 </div><!-- End Service Item -->

             </div>

         </div>

     </section> --}}
     <!-- /Featured Services Section -->
     <!-- Clients Section -->
     {{-- <section id="clients" class="clients section">

         <div class="container" data-aos="fade-up">

             <div class="row gy-4">

                 <div class="col-xl-2 col-md-3 col-6 client-logo">
                     <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                 </div><!-- End Client Item -->

                 <div class="col-xl-2 col-md-3 col-6 client-logo">
                     <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                 </div><!-- End Client Item -->

                 <div class="col-xl-2 col-md-3 col-6 client-logo">
                     <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                 </div><!-- End Client Item -->

                 <div class="col-xl-2 col-md-3 col-6 client-logo">
                     <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                 </div><!-- End Client Item -->

                 <div class="col-xl-2 col-md-3 col-6 client-logo">
                     <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                 </div><!-- End Client Item -->

                 <div class="col-xl-2 col-md-3 col-6 client-logo">
                     <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                 </div><!-- End Client Item -->

             </div>

         </div>

     </section> --}}
     <!-- /Clients Section -->
     {{-- <section id="safety" class="safety section light-background">
         <div class="container">
             <div class="row gy-4">
                 <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                     <img src="assets/img/rapido/safety.jpg" class="img-fluid" alt="">
                 </div>
                 <div class="col-lg-6 pt-4 pt-lg-0 " data-aos="fade-up" data-aos-delay="200">
                     <div class="content">
                         <h3>SAFETY</h3>
                         <p class="fst-italic">
                             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                             labore et dolore
                             magna aliqua.
                         </p>
                         <ul>
                             <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                             <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                             <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                         </ul>
                         <p>
                             Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                             in voluptate
                             velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                             proident, sunt in
                             culpa qui officia deserunt mollit anim id est laborum
                         </p>
                         <a href="#" class="btn more-btn bg-dark text-white">Learn More</a>
                     </div>
                 </div>
             </div>
         </div>

     </section> --}}
     <section id="features-details" class="features-details section">

         <div class="container">

             <div class="row gy-4 justify-content-between features-item">

                 <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                     <img src="assets/img/rapido/safety1.jpg" class="img-fluid" alt="">
                 </div>

                 <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                     <div class="content">
                         <h3>Safety is our priority.</h3>
                         <p>
                             At Flip Share, we put your well-being first. Our commitment to safety drives us to continuously
                             enhance our measures, ensuring that every ride with us is secure, reliable, and worry-free.
                             Your comfort is at the heart of everything we do.
                         </p>
                         <a href="#" class="btn more-btn">Learn More</a>
                     </div>
                 </div>

             </div><!-- Features Item -->

             <div class="row gy-4 justify-content-between features-item">

                 <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                     <div class="content">
                         <h3>Discover Flip Share</h3>
                         <p>
                             Founded in 2017, Flip Share introduced a fresh approach to urban travel with its innovative
                             bike-taxi services. Today, we’re expanding rapidly, empowering India to move smarter and
                             faster. With a growing presence in app-based auto services, cabs, and intra-city deliveries
                             through Flip Share Parcel, we’re redefining convenience and reliability for millions of users.
                         </p>
                         {{-- <ul>
                             <li><i class="bi bi-easel flex-shrink-0"></i> Et corporis ea eveniet ducimus.</li>
                             <li><i class="bi bi-patch-check flex-shrink-0"></i> Exercitationem dolorem sapiente.
                             </li>
                             <li><i class="bi bi-brightness-high flex-shrink-0"></i> Veniam quia modi magnam.</li>
                         </ul> --}}
                         {{-- <p></p> --}}
                         <a href="#" class="btn more-btn">Learn More</a>
                     </div>

                 </div>

                 <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                     <img src="assets/img/rapido/know-us.jpg" class="img-fluid" alt="">
                 </div>

             </div><!-- Features Item -->

         </div>

     </section>

     <!-- Features Details Section -->
     {{-- <section id="features-details" class="features-details section">

         <div class="container">

             <div class="row gy-4 justify-content-between features-item">

                 <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                     <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                 </div>

                 <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                     <div class="content">
                         <h3>Corporis temporibus maiores provident</h3>
                         <p>
                             Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                             reprehenderit in voluptate
                             velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                             proident.
                         </p>
                         <a href="#" class="btn more-btn">Learn More</a>
                     </div>
                 </div>

             </div><!-- Features Item -->

             <div class="row gy-4 justify-content-between features-item">

                 <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

                     <div class="content">
                         <h3>Neque ipsum omnis sapiente quod quia dicta</h3>
                         <p>
                             Quidem qui dolore incidunt aut. In assumenda harum id iusto lorena plasico mares
                         </p>
                         <ul>
                             <li><i class="bi bi-easel flex-shrink-0"></i> Et corporis ea eveniet ducimus.</li>
                             <li><i class="bi bi-patch-check flex-shrink-0"></i> Exercitationem dolorem sapiente.
                             </li>
                             <li><i class="bi bi-brightness-high flex-shrink-0"></i> Veniam quia modi magnam.</li>
                         </ul>
                         <p></p>
                         <a href="#" class="btn more-btn">Learn More</a>
                     </div>

                 </div>

                 <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                     <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                 </div>

             </div><!-- Features Item -->

         </div>

     </section> --}}
     <!-- /Features Details Section -->
     <!-- More Features Section -->
     <section id="more-features" class="more-features section">

         <div class="container">

             <div class="row justify-content-around gy-4">

                 <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up"
                     data-aos-delay="100">
                     <h3>Our Impact</h3>
                     <p>We’re revolutionizing intra-city travel by making last-mile connectivity seamless, reliable, and
                         accessible to everyone. Our presence has redefined urban mobility, bringing affordable and
                         convenient travel solutions to communities across the country.
                     </p>

                     <div class="row">

                         <div class="col-lg-6 icon-box d-flex">
                             <i class="bi bi-download flex-shrink-0"></i>
                             <div>
                                 <h4>2k Downloads</h4>
                                 <p>we have 2k downloads </p>
                             </div>
                         </div><!-- End Icon Box -->

                         <div class="col-lg-6 icon-box d-flex">
                             <i class="bi bi-building flex-shrink-0"></i>
                             <div>
                                 <h4>50+ cities</h4>
                                 <p>we provide services in 50+ cities </p>
                             </div>
                         </div><!-- End Icon Box -->

                         <div class="col-lg-6 icon-box d-flex">
                             <i class="bi bi-people flex-shrink-0"></i>
                             <div>
                                 <h4>10k+ Captains</h4>
                                 <p>we have 10k+ Captains who rides bikes, auto and other vehicles</p>
                             </div>
                         </div><!-- End Icon Box -->

                         <div class="col-lg-6 icon-box d-flex">
                             <i class="bi bi-people flex-shrink-0"></i>
                             <div>
                                 <h4>20k+ Customers</h4>
                                 <p>we have 20k+ customers</p>
                             </div>
                         </div><!-- End Icon Box -->

                     </div>

                 </div>

                 <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                     <img src="assets/img/rapido/safety.jpg" alt="">
                 </div>

             </div>

         </div>

     </section>
     <!-- /More Features Section -->
     <!-- Faq Section -->
     {{-- <section id="faq" class="faq section">

         <!-- Section Title -->
         <div class="container section-title" data-aos="fade-up">
             <h2>Frequently Asked Questions</h2>
         </div><!-- End Section Title -->

         <div class="container">

             <div class="row justify-content-center">

                 <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                     <div class="faq-container">

                         <div class="faq-item faq-active">
                             <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                             <div class="faq-content">
                                 <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                     laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                     rhoncus dolor purus non.</p>
                             </div>
                             <i class="faq-toggle bi bi-chevron-right"></i>
                         </div><!-- End Faq item-->

                         <div class="faq-item">
                             <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                             <div class="faq-content">
                                 <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                     interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                     scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                     Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                             </div>
                             <i class="faq-toggle bi bi-chevron-right"></i>
                         </div><!-- End Faq item-->

                         <div class="faq-item">
                             <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                             <div class="faq-content">
                                 <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                     Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                     suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                     convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                 </p>
                             </div>
                             <i class="faq-toggle bi bi-chevron-right"></i>
                         </div><!-- End Faq item-->

                         <div class="faq-item">
                             <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                             <div class="faq-content">
                                 <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                     interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                     scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                     Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                             </div>
                             <i class="faq-toggle bi bi-chevron-right"></i>
                         </div><!-- End Faq item-->

                         <div class="faq-item">
                             <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                             <div class="faq-content">
                                 <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                     in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                     suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                 </p>
                             </div>
                             <i class="faq-toggle bi bi-chevron-right"></i>
                         </div><!-- End Faq item-->

                         <div class="faq-item">
                             <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                             <div class="faq-content">
                                 <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed
                                     in suscipit sequi. Distinctio ipsam dolore et.</p>
                             </div>
                             <i class="faq-toggle bi bi-chevron-right"></i>
                         </div><!-- End Faq item-->

                     </div>

                 </div><!-- End Faq Column-->

             </div>

         </div>

     </section> --}}
     <!-- /Faq Section -->

     <section id="clients" class="clients section">

         <div class="container" data-aos="fade-up">

             <div class="section-title" data-aos="fade-up">
                 <h2>What's In It for you</h2>
             </div>
             <div class="d-flex justify-content-center">
                 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                         <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                             role="tab" aria-controls="pills-home" aria-selected="true">Customers</a>
                     </li>
                     <li class="nav-item" role="presentation">
                         <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                             role="tab" aria-controls="pills-profile" aria-selected="false">Riders</a>
                     </li>
                 </ul>
             </div>
             <div class="tab-content" id="pills-tabContent">
                 <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                     aria-labelledby="pills-home-tab">
                     <div class="row">
                         <div class="col">
                             <div class="d-flex justify-content-center align-items-center">
                                 <img src="assets/img/rapido/Bike.webp" width="300px" class="img-fluid" alt="">
                             </div>
                             <div class="text-center">
                                 <h3>India’s Favorite Bike Rides</h3>
                                 <p> Dodge the traffic, stay punctual, and travel affordably. With Flip Share Bike Rides,
                                     commuting has never been this easy and efficient. </p>
                             </div>
                         </div>
                         <div class="col">
                             <div class="d-flex justify-content-center align-items-center">
                                 <img src="assets/img/rapido/Auto.webp" width="300px" class="img-fluid" alt="">
                             </div>
                             <div class="text-center">
                                 <h3>Quick Auto Rides</h3>
                                 <p>Experience a safe and convenient way to commute. With Flip Share Auto Rides, you can
                                     get to your destination in no time. </p>
                             </div>
                         </div>
                         <div class="col">
                             <div class="d-flex justify-content-center align-items-center">
                                 <img src="assets/img/rapido/Cab.webp" width="300px" class="img-fluid" alt="">
                             </div>
                             <div class="text-center">
                                 <h3>Affordable Cab Rides</h3>
                                 <p>More comfort, more convenience, and prices that fit your budget. Flip Share Cabs offer
                                     the best value for your journey. </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                     <div class="row">
                         <div class="col">
                             <div class="d-flex justify-content-center align-items-center">
                                 <img src="assets/img/rapido/captain_care_1.webp" width="300px" class="img-fluid"
                                     alt="">
                             </div>
                             <div class="text-center">
                                 <h3>Flexible Ride Schedules</h3>
                                 <p>Enjoy complete flexibility with Flip Share. Captains have the freedom to choose when
                                     to take their next ride, ensuring their day remains balanced and stress-free.</p>
                             </div>
                         </div>
                         <div class="col">
                             <div class="d-flex justify-content-center align-items-center">
                                 <img src="assets/img/rapido/captain_care_2.webp" width="300px" class="img-fluid"
                                     alt="">
                             </div>
                             <div class="text-center">
                                 <h3>Instant Earnings Access</h3>
                                 <p>Your hard-earned money, available when you need it. Easily transfer your Flip Share
                                     earnings from your wallet to your bank account at your convenience.</p>
                             </div>
                         </div>
                         <div class="col">
                             <div class="d-flex justify-content-center align-items-center">
                                 <img src="assets/img/rapido/captain_care_3.webp" width="300px" class="img-fluid"
                                     alt="">
                             </div>
                             <div class="text-center">
                                 <h3>Secured Rides</h3>
                                 <p>Every ride is protected. With Flip Share, Captains and their families are covered
                                     with accidental insurance and medical benefits up to ₹5 lakh, ensuring peace of
                                     mind on every trip.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>


     </section>

     <!-- New Section with Tabs for Customer and Rider -->
     <section id="tabs-section" class="tabs-section section">
         <div class="container" data-aos="fade-up">
             <!-- Section Title -->
             <div class="section-title">
                 <h2>Reviews</h2>
                 {{-- <p>See what our customers and riders have to say about us</p> --}}
             </div><!-- End Section Title-->
             <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                 <li class="nav-item" role="presentation">
                     <a class="nav-link active" id="pills-customer-tab" data-bs-toggle="pill" href="#pills-customer"
                         role="tab" aria-controls="pills-customer" aria-selected="true">Customer Reviews</a>
                 </li>
                 <li class="nav-item" role="presentation">
                     <a class="nav-link" id="pills-rider-tab" data-bs-toggle="pill" href="#pills-rider" role="tab"
                         aria-controls="pills-rider" aria-selected="false">Rider Reviews</a>
                 </li>
             </ul>
             <div class="tab-content" id="pills-tabContent">
                 <div class="tab-pane fade show active" id="pills-customer" role="tabpanel"
                     aria-labelledby="pills-customer-tab">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="card text-center">
                                 <img src="assets/img/testimonials/customer-1.webp"
                                     class="card-img-top rounded-circle mt-3 mx-auto" alt=""
                                     style="width: 100px;">
                                 <div class="card-body">
                                     <p class="card-text">"I am so impressed with the service provided by Flip Share. The
                                         captains are very friendly and the app is so easy to use."</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card text-center">
                                 <img src="assets/img/testimonials/customer-2.webp"
                                     class="card-img-top rounded-circle mt-3 mx-auto" alt=""
                                     style="width: 100px;">
                                 <div class="card-body">
                                     <p class="card-text">"Flip Share is the best bike taxi service I have ever used. I use
                                         it
                                         every day to commute to work."</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card text-center">
                                 <img src="assets/img/testimonials/customer-3.webp"
                                     class="card-img-top rounded-circle mt-3 mx-auto" alt=""
                                     style="width: 100px;">
                                 <div class="card-body">
                                     <p class="card-text">"I was skeptical at first but Flip Share has been a game changer
                                         for
                                         me. The prices
                                         are reasonable and the service is fast and reliable."</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="tab-pane fade" id="pills-rider" role="tabpanel" aria-labelledby="pills-rider-tab">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="card text-center">
                                 <img src="assets/img/testimonials/rider-1.webp"
                                     class="card-img-top rounded-circle mt-3 mx-auto" alt=""
                                     style="width: 100px;">
                                 <div class="card-body">
                                     <p class="card-text">"I was skeptical at first but Flip Share has been a game changer
                                         for me. The prices
                                         are reasonable and the service is fast and reliable."</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card text-center">
                                 <img src="assets/img/testimonials/rider-2.webp"
                                     class="card-img-top rounded-circle mt-3 mx-auto" alt=""
                                     style="width: 100px;">
                                 <div class="card-body">
                                     <p class="card-text">"I was skeptical at first but Flip Share has been a game changer
                                         for me. The prices
                                         are reasonable and the service is fast and reliable."</p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="card text-center">
                                 <img src="assets/img/testimonials/rider-3.webp"
                                     class="card-img-top rounded-circle mt-3 mx-auto" alt=""
                                     style="width: 100px;">
                                 <div class="card-body">
                                     <p class="card-text">"I was skeptical at first but Flip Share has been a game changer
                                         for me. The prices
                                         are reasonable and the service is fast and reliable."</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Testimonials Section -->
     <section id="testimonials" class="testimonials section light-background">

         <!-- Section Title -->
         <div class="container section-title" data-aos="fade-up">
             <h2>Testimonials</h2>
             <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
         </div><!-- End Section Title -->

         <div class="container" data-aos="fade-up" data-aos-delay="100">

             <div class="swiper init-swiper">
                 <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
                 <div class="swiper-wrapper">

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <div class="stars">
                                 <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i>
                             </div>
                             <p>
                                 Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                 rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                 risus at semper.
                             </p>
                             <div class="profile mt-auto">
                                 <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                     alt="">
                                 <h3>Saul Goodman</h3>
                                 <h4>Ceo &amp; Founder</h4>
                             </div>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <div class="stars">
                                 <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i>
                             </div>
                             <p>
                                 Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                 cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                 legam anim culpa.
                             </p>
                             <div class="profile mt-auto">
                                 <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                     alt="">
                                 <h3>Sara Wilsson</h3>
                                 <h4>Designer</h4>
                             </div>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <div class="stars">
                                 <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i>
                             </div>
                             <p>
                                 Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                 veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                 minim.
                             </p>
                             <div class="profile mt-auto">
                                 <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                     alt="">
                                 <h3>Jena Karlis</h3>
                                 <h4>Store Owner</h4>
                             </div>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <div class="stars">
                                 <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i>
                             </div>
                             <p>
                                 Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                 fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                 quem
                                 dolore labore illum veniam.
                             </p>
                             <div class="profile mt-auto">
                                 <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                     alt="">
                                 <h3>Matt Brandon</h3>
                                 <h4>Freelancer</h4>
                             </div>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <div class="stars">
                                 <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                     class="bi bi-star-fill"></i>
                             </div>
                             <p>
                                 Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                 veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse
                                 veniam
                                 culpa fore nisi cillum quid.
                             </p>
                             <div class="profile mt-auto">
                                 <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                     alt="">
                                 <h3>John Larson</h3>
                                 <h4>Entrepreneur</h4>
                             </div>
                         </div>
                     </div><!-- End testimonial item -->

                 </div>
                 <div class="swiper-pagination"></div>
             </div>

         </div>

     </section>
     <!-- /Testimonials Section -->
 @endsection
