<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Brosy Industries </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/variables-green.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>
    <div id="preloader"></div>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                {{-- <h1>Brosy Industries  </h1> --}}
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('#hero-fullscreen') }}" class="nav-link scrollto">Home</a></li>
                    <li><a href="{{ url('#about') }}" class="nav-link scrollto">About</a></li>
                    <li class="dropdown megamenu"><a href="{{ url('#features') }}" class="nav-link scrollto"><span>Products</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li>
                                <a href="#">Agricultural Products</a>
                                <a href="#">Product Name 1</a>
                                <a href="#">Product Name 2</a>
                            </li>
                            <li>
                                <a href="#">Aquacultural Products</a>
                                <a href="#">Product Name 1</a>
                                <a href="#">Product Name 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('#services') }}" class="nav-link scrollto">Services</a></li>
                    <li><a href="{{ route('certificate') }}" class="nav-link scrollto">Certificate</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link scrollto">Blog</a></li>
                    <li><a href="{{ route('gallery') }}" class="nav-link scrollto">Gallery</a></li>
                    <li><a href="{{ url('#contact') }}" class="nav-link scrollto">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle bi bi-list d-none"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center position-relative" data-aos="zoom-out">
            <h2>Welcome to <span>Brosy Industries</span></h2>
            <p>Embrace Excellence in Farming with Our Premium Bio-Products and Commitment to Quality Assurance.</p>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                    class="glightbox btn-watch-video d-flex align-items-center"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section>

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About Us</h2>
                    <p>Pioneering Sustainable Agriculture and Aquaculture: Delivering Premium Organic Solutions for
                        Optimal Growth and Environmental Health Worldwide.</p>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt=""
                                style="height: 300px;">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <h4 class="pt-0 pt-lg-5">Choose Brosy Industries for Quality Assurance, Expertise, and a Greener
                            Future in Farming and Aquaculture.</h4>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Who We Are</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">What We Do</a></li>
                            <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Why Choose Us</a></li>
                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">
                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6>Brosy Industries Private Limited is committed to creating organic, high-quality
                                        plants, and aquaculture support products. The global phenomenon of organic
                                        farming has gained significant awareness, inspiring us to take a bold step in
                                        establishing a Bio-Fertilizer unit in our home state of Assam. Our vision is to
                                        provide essential bio inputs to cultivators and the organic farming community
                                        while simultaneously reducing the reliance on chemical fertilizers.</h6>

                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6>Understanding the paramount importance of vitamins for holistic growth, we craft
                                        products that strike the perfect balance, granting your plants and aqua life a
                                        complete evolution, higher productivity, and improved quality. Our dedication
                                        lies in maintaining and enhancing the caliber of the ecosystem with each usage
                                        of our products.</h6>
                                </div>

                            </div><!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">


                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6>At Brosy Industries, we are a modern, innovative, and research-driven
                                        organization dedicated to finding solutions for both Agriculture and
                                        Aquaculture. Our premium products offer optimized plant nutrition value,
                                        ensuring high efficiency, crop suitability, low chloride content, and purity.
                                    </h6>
                                </div>

                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6>With a wide range of products catering to plants, soil, and aqua life, our
                                        expertise lies in Bio-Fertilizers, Bio-Pesticides, Growth Promoters,
                                        Micronutrients, Soil Boosters, Herbicides, and various aquaculture products like
                                        Sodium Percarbonate, Potassium Permanganate, Fish Micronutrients & Growth
                                        Promoters, among others.</h6>
                                </div>
                            </div><!-- End Tab 2 Content -->

                            <div class="tab-pane fade show" id="tab3">

                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6>At Brosy Industries, quality is the essence of our operation. We take immense
                                        pride in delivering nothing short of excellence in each product we formulate.
                                        Rigorous research and testing are undertaken to ensure that our products meet
                                        the highest standards before they reach our customers. Our commitment to 100%
                                        assurance and quality certification sets us apart, making us the preferred
                                        choice for all your agricultural and aquacultural needs.</h6>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6>Choose Brosy Industries Private Limited for premium products, unmatched
                                        expertise in organic farming solutions, and the assurance of delivering the
                                        best. Join us in cultivating a greener and sustainable future for agriculture
                                        and aquaculture.</h6>
                                </div>
                            </div><!-- End Tab 3 Content -->

                        </div>

                    </div>

                </div>

            </div>
            <!-- ======= Featured Services Section ======= -->
            <div id="featured-services" class="featured-services mt-5" data-aos="fade-up">
                <div class="container">
                    <div class="row gy-4">

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-activity icon"></i></div>
                                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                                <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                                <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                            <div class="service-item position-relative">
                                <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>
            </div><!-- End Featured Services Section -->
            <!-- ======= Clients Section ======= -->
            <div id="clients" class="clients mt-5" data-aos="fade-up">
                <div class="container" data-aos="zoom-out">

                    <div class="clients-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-1.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-3.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-4.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-5.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-6.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-7.png') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-8.png') }}"
                                    class="img-fluid" alt=""></div>
                        </div>
                    </div>

                </div>
            </div><!-- End Clients Section -->
        </section><!-- End About Section -->
        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Our Products</h2>
                    <p>Nurturing Growth in Agriculture and Aquaculture: Explore our Comprehensive Range of Soil,
                        Fertilizers, and Pesticide Products</p>
                </div>
                <ul class="nav nav-tabs row gy-4 d-flex">

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="bi bi-1-square color-cyan"></i>
                            <h4>Bhoomi</h4>
                        </a>
                    </li><!-- End Tab 1 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="bi bi-2-square color-indigo"></i>
                            <h4>Energy(Agri)</h4>
                        </a>
                    </li><!-- End Tab 2 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="bi bi-3-square color-teal"></i>
                            <h4>Energy(Tea)</h4>
                        </a>
                    </li><!-- End Tab 3 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="bi bi-4-square color-red"></i>
                            <h4>Nutrimax</h4>
                        </a>
                    </li><!-- End Tab 4 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                            <i class="bi bi-5-square color-blue"></i>
                            <h4>Oxylife(Fisheries)</h4>
                        </a>
                    </li><!-- End Tab 5 Nav -->

                    <li class="nav-item col-6 col-md-4 col-lg-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                            <i class="bi bi-6-square color-orange"></i>
                            <h4>Oxylife(Aquarium)</h4>
                        </a>
                    </li><!-- End Tab 6 Nav -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>EcoCrops Bhoomi: Elevating Soil Health</h3>
                                <p class="fst-italic">
                                    Soil health is the cornerstone of robust crop nutrition, influencing up to 60% of
                                    agricultural yield. EcoCrops Bhoomi, our soil booster, revitalizes soil by enhancing
                                    fertility, nutrient availability, and structure.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Enhances soil fertility and structure
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Promotes microbial activity and pH
                                        balance</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Prevents erosion and conserves water
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Stimulates root and shoot development
                                    </li>
                                </ul>
                                <p>
                                    Join us in cultivating sustainable agriculture with EcoCrops Bhoomi. Together, we
                                    nurture soil health for a thriving future.
                                </p>
                            </div>

                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="{{ asset('assets/img/products/1.jpg') }}" alt="" class="img-fluid img-custom">
                            </div>
                        </div>
                    </div><!-- End Tab Content 1 -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>EcoCrops Energy: Redefining Agriculture</h3>
                                <p class="fst-italic">
                                    Discover the innovation of EcoCrops Energy in agriculture, unlocking transformative
                                    benefits:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Increase crop yield and productivity
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Enhance nutrient absorption and
                                        efficiency</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Boost stress tolerance and resilience
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Accelerate growth and maturation</li>
                                </ul>
                                <p>
                                    Energize your agricultural practices with EcoCrops Energy, driving efficiency,
                                    quality, and sustainability.
                                </p>
                            </div>

                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/products/2.jpeg') }}" alt=""
                                    class="img-fluid img-custom">
                            </div>
                        </div>
                    </div><!-- End Tab Content 2 -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>EcoCrops Energy: Empowering Tea Cultivation</h3>
                                <p class="fst-italic">
                                    Elevate your tea plantations with EcoCrops Energy, a Boron-based herbal extract of
                                    specific seaweeds and beneficial herbs. Experience transformative benefits:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Enhance growth, yield, and crop quality
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Boost stress tolerance and resilience
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Regulate flowering, fruiting, and growth
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Improve drought tolerance and tea
                                        quality</li>
                                </ul>
                                <p>
                                    Discover the future of tea cultivation with EcoCrops Energy, unlocking success,
                                    sustainability, and superior harvests.
                                </p>
                            </div>

                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/products/3.jpg') }}" alt="" class="img-fluid img-custom">
                            </div>
                        </div>
                    </div><!-- End Tab Content 3 -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>EcoCrops Nutrimax: Empowering Crop Nutrition</h3>
                                <p class="fst-italic">
                                    Micronutrients are the foundation of successful agriculture, crucial for optimal
                                    crop growth and development. Discover the power of Ecocrops Nutrimax:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Act as enzymatic catalysts for growth
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Strengthen plant immunity and defense
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Enhance nutrient uptake and synergy</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Boost yield potential and resilience
                                    </li>
                                </ul>
                                <p>
                                    Elevate your farming with EcoCrops Nutrimax, nurturing robust crops, balanced
                                    nutrition, and a sustainable future.
                                </p>
                            </div>

                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/products/4.jpg') }}" alt="" class="img-fluid img-custom">
                            </div>
                        </div>
                    </div><!-- End Tab Content 4 -->

                    <div class="tab-pane" id="tab-5">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1">
                                <h3>EcoFeeds Oxylife: Elevating Fish Health and Production</h3>
                                <p class="fst-italic">
                                    Elevate your fisheries with Oxylife and experience these transformative benefits:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Optimal oxygen levels for fish health
                                        and growth</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Prevent oxygen depletion and mitigate
                                        fish kills</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Enhance water quality and natural
                                        processes</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Alleviate stress during transport or
                                        overcrowding</li>
                                </ul>
                                <p>
                                    Discover the power of EcoFeeds Oxylife in promoting thriving fish, cleaner water,
                                    and efficient oxygenation.
                                </p>
                            </div>

                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/products/5.png') }}" alt="" class="img-fluid img-custom">
                            </div>
                        </div>
                    </div><!-- End Tab Content 5 -->

                    <div class="tab-pane" id="tab-6">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>EcoFeeds Oxylife: Enhancing Aquarium Environments</h3>
                                <p class="fst-italic">
                                    Elevate your aquarium experience with Oxylife and enjoy these key advantages:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Optimal oxygen levels for fish health
                                        and growth</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Increased fish growth and improved
                                        production</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Enhanced water quality and waste
                                        breakdown</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Alleviation of temporary oxygen
                                        depletion</li>
                                </ul>
                                <p>
                                    Discover the convenience of EcoFeeds Oxylife tablets, a cost-effective solution
                                    supporting aquatic life and plant health.
                                </p>
                            </div>

                            <div class="col-lg-4 order-1 order-lg-2 text-center">
                                <img src="{{ asset('assets/img/products/6.png') }}" alt="" class="img-fluid img-custom">
                            </div>
                        </div>
                    </div><!-- End Tab Content 6 -->

                </div>

            </div>
        </section><!-- End Features Section -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                        dolores adipisci aliquam.</p>
                </div>

                <div class="row gy-5">
                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-seedling"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Optimized Plant Nutrition</h3>
                                </a>
                                <p>We provide modern, research-driven solutions for agriculture and aquaculture. Our
                                    premium products offer optimized plant nutrition for high efficiency,
                                    crop-suitability, low chloride content, and purity.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-flask"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Organic Farming Support</h3>
                                </a>
                                <p>We create high-quality organic plants and aquaculture products. Our focus on organic
                                    farming aims to establish bio-fertilizer units, reducing chemical fertilizer use and
                                    enhancing ecosystem health.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-tools"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Bio-Fertilizers & Bio-Pesticides</h3>
                                </a>
                                <p>Expertise in bio-fertilizers, bio-pesticides, and growth promoters. Our products
                                    promote sustainable agriculture and aquaculture practices.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Enhanced Growth & Quality</h3>
                                </a>
                                <p>We help achieve higher productivity and improved quality in your plants and aqua
                                    life. Our products maintain and improve ecosystem health.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-5.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-check-circle"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Assured Quality & Certification</h3>
                                </a>
                                <p>Quality is our priority. Our products undergo rigorous research and are certified for
                                    assurance. We deliver the best for your agriculture and aquaculture needs.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-6.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-heart-fill"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Passionate Team</h3>
                                </a>
                                <p>Our dedicated team is passionate about delivering the best. We are committed to
                                    providing innovative solutions for sustainable agriculture and aquaculture.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section>



        <!-- ======= Call To Action Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>Join the <em>Brosy</em> Community Today!</h3>
                        <p> Transform your farming and aquaculture ventures with us. Take advantage of our exceptional
                            products and expert knowledge to maximize your yields, minimize your efforts, and contribute
                            to a greener tomorrow.</p>
                        <a class="cta-btn align-self-start" href="#">Call To Action</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMIAAAEDCAMAAABQ/CumAAAANlBMVEXMzMzPz8+RkZHJycnCwsK5ubnHx8exsbG9vb21tbWTk5OYmJiZmZmqqqrBwcG7u7ujo6OkpKTY3tpoAAADLklEQVR4nO3d226jMBCAYY8P4APG8P4vu2MD6UHJam+2pNL/VdUa4qgzeDCTm6wxAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH4ZUV8Hn0Z/m2/+bf7/52pZ5h6ApKXU45yeSi9iknXLx4vStrJN49ys77wxhyXnbDUHma2OFo1ErlPPxD7LasDS+qg4nV/7aL8rB/3z1bjF6mrYZTLVJpFwnJqezl/yKtOS9cWio9ST8XZzZrPxp2O/9Osu0UaNZtVR2US2ogN/LcNR5VetT2PBvGYa9dfIlvtV6NnetgzxiNS7EXgPx5h+ZfVyb0fsaYu92jc/5nsbpK/YrHXXayhZf8w83n8DDWR1oRk5Q9Yi8lO/vEb2ckxxeekX/0hIB8dtEGRbzpRMHinP2d2TQs0xW1u8kRGIrsq6jqrWV84ps6a0X3eGjpJrZblWSfN1YyH7etyTwl6WZa65GBnlYzR+zeKI/JpUymofe6bez9ZmL2cKGr8bq2bCXSlsWe9fDbe9TkGabpmPN+x5TzUv7n1S2HPrt6dW0atCGnk+HnRRMxVZtXY+CinfW0h1/OEe/6vbWRMsjw3z2IfGjfA2t3MaVdOj+L6plu0Ku+btmPUoL43/bTZVvYp1PNrCl0dbb4UeHYZOcaPxMGOVYh/pspyPtnI92uxdjzbdYIL4ksf+3xsMfXL1BkN7iLMu9E6Y9JKHI0CXyypu74faYJj5ajDcjQ3Gqk1b7hH1Ns/moyb6qWsR2qira0/SxdJNdTzoYp9/tnm6z97W5vXmuWztbLaXq9lePprtufYoW73uhrhpc36N9rFU2mwvLxrbn/Hkg8vnjzDX56HP89/sIw8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4Dfz375xW6Kc352sL0zT5Ez/0aNJD8/xm0nJN+ecd8FEH/WfIC1Mq3gJEv3s6jT7oNGHVVJcq6lP/7eKW9UQvE8pprAmU1MzmoIJPk2S2twP5uCbSHRimgQ9er8UVonJpDj54KIJ0acma1plFhPFu15Vzmt6Lmk2aYrGv18KT0n7EijfCP2W/gAqCRjRJP4mFQAAAABJRU5ErkJggg=="
                                alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= On Focus Section ======= -->
        <section id="onfocus" class="onfocus">
            <div class="container-fluid p-0" data-aos="fade-up">

                <div class="row g-0">
                    <div class="col-lg-6 video-play position-relative">
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="content d-flex flex-column justify-content-center h-100">
                            <h3>Explore the World of Agriculture and Aquaculture</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Discover how our innovative aquacultural
                                    solutions promote sustainable practices, enhance aquatic environments, and ensure
                                    healthy yields.</li>
                                <li><i class="bi bi-check-circle"></i> Explore how our cutting-edge agricultural
                                    technologies empower farmers to optimize crop growth, conserve resources, and
                                    maximize productivity.</li>
                                <li><i class="bi bi-check-circle"></i> Hear from our satisfied customers who have
                                    achieved remarkable success with our products. Learn how our solutions have
                                    transformed their aquaculture and agriculture endeavors.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End On Focus Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist">

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Non consectetur a erat nam at lectus urna duis?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                        suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                        Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                        turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
                </div>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    {{-- <p>Do give a visit if you have any query for us</p> --}}
                </div>

            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3582.4625851044184!2d91.76508667541232!3d26.116456177130814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDA2JzU5LjIiTiA5McKwNDYnMDMuNiJF!5e0!3m2!1sen!2sin!4v1691324703021!5m2!1sen!2sin"
                    frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>Get in touch</h3>
                            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia
                                commodi minus.</p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>H/No. 10, Dr. B. Borooah Road, Ulubari, Guwahati, Kamrup(M), Assam, 781007</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>brosyindustries@aol.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+91 - 8638198860 / 8134957275
                                    </p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <strong>Office Location:</strong>
                            <p>H/No. 10, Dr. B. Borooah Road, Ulubari,<br>
                                Guwahati, Kamrup(M), Assam, 781007<br><br>
                                <strong>Factory Location:</strong>
                                <p>H/No. 8, Bokulban Path, Opp. Postal Training<br>
                                    Centre, Kerakuchi, Guwahati, Kamrup (M),<br>Assam, 781040<br><br>
                                    <strong>Phone:</strong> +91- 8638198860 / 8134957275<br>
                                    <strong>Email:</strong> brosyindustries@aol.com<br>
                                </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Link 1</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Link 2</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Link 3</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Link 4</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Link 5</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Service 1</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Service 2</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Service 3</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Service 4</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Service 5</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Brosy Industries</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://kangkanrajkhowa.netlify.app/">Kangkan & Gitertha</a>
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/lottie.js') }}"></script>

</body>

</html>
