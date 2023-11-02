<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gallery Section- Brosy Industries </title>
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
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <style>
        #header {
            box-shadow: 0px 2px 20px rgba(var(--color-primary-dark-rgb), 0.2);
        }
    </style>
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
            <a href="{{ url('/') }}" class=""><button class="btn nav-btn-back"><i class="bi bi-arrow-left"></i> Back to Home</button></a>
            {{-- <nav id="navbar" class="navbar">

                <ul>
                    <li></li>
                    <li><a href="{{ route('gallery') }}" class="nav-link scrollto">Gallery</a></li>
                </ul>
                <i class="mobile-nav-toggle bi bi-list d-none"></i>
            </nav><!-- .navbar --> --}}

        </div>
    </header><!-- End Header -->


    <main id="main" style="margin-top: 80px;">
        <section id="portfolio" class="portfolio" data-aos="fade-up">

            <div class="container">

              <div class="section-header">
                <h2>Explore Our Gallery</h2>
                <p style="text-align: justify">The Farming Arsenal Unveiled: Explore Our Gallery and Discover an Array of Tools and Solutions Designed to Enhance Crop Health and Aquatic Prosperity, Showcasing the Products that Empower Farmers and Aquaculturists to Achieve Optimal Yields and Healthier Ecosystems, Paving the Way for a Greener Tomorrow.</p>
              </div>

            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

              <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                <ul class="portfolio-flters mt-3">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-agri">Agri</li>
                  <li data-filter=".filter-aqua">Aqua</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row g-0 portfolio-container">

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-agri">
                    <img src="{{ asset('assets/img/portfolio/agri-1.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Agri 1</h4>
                      <a href="{{ asset('assets/img/portfolio/agri-1.jpg') }}" title="Agri 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-aqua">
                    <img src="{{ asset('assets/img/portfolio/aqua-1.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Aqua 1</h4>
                      <a href="{{ asset('assets/img/portfolio/aqua-1.jpg') }}" title="Aqua 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-agri">
                    <img src="{{ asset('assets/img/portfolio/agri-2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Agri 2</h4>
                      <a href="{{ asset('assets/img/portfolio/agri-2.jpg') }}" title="Agri 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-aqua">
                    <img src="{{ asset('assets/img/portfolio/aqua-2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Aqua 2</h4>
                      <a href="{{ asset('assets/img/portfolio/aqua-2.jpg') }}" title="Aqua 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-agri">
                    <img src="{{ asset('assets/img/portfolio/agri-3.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Agri 3</h4>
                      <a href="{{ asset('assets/img/portfolio/agri-3.jpg') }}" title="Agri 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-aqua">
                    <img src="{{ asset('assets/img/portfolio/aqua-3.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Aqua 3</h4>
                      <a href="{{ asset('assets/img/portfolio/aqua-3.jpg') }}" title="Aqua 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-agri">
                    <img src="{{ asset('assets/img/portfolio/agri-4.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Agri 4</h4>
                      <a href="{{ asset('assets/img/portfolio/agri-4.jpg') }}" title="Agri 4" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-aqua">
                    <img src="{{ asset('assets/img/portfolio/aqua-4.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Aqua 4</h4>
                      <a href="{{ asset('assets/img/portfolio/aqua-4.jpg') }}" title="Aqua 4" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-agri">
                    <img src="{{ asset('assets/img/portfolio/agri-5.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Agri 5</h4>
                      <a href="{{ asset('assets/img/portfolio/agri-5.jpg') }}" title="Agri 5" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-aqua">
                    <img src="{{ asset('assets/img/portfolio/aqua-5.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Aqua 5</h4>
                      <a href="{{ asset('assets/img/portfolio/aqua-5.jpg') }}" title="Aqua 5" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-agri">
                    <img src="{{ asset('assets/img/portfolio/agri-6.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Agri 6</h4>
                      <a href="{{ asset('assets/img/portfolio/agri-6.jpg') }}" title="Agri 6" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-aqua">
                    <img src="{{ asset('assets/img/portfolio/aqua-6.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Aqua 6</h4>
                      <a href="{{ asset('assets/img/portfolio/aqua-6.jpg') }}" title="Aqua 6" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      {{-- <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> --}}
                    </div>
                  </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

              </div>

            </div>
          </section>

      </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <strong>Office Location:</strong>
                            <p>H/No. 10, Dr. B. Borooah Road, Ulubari,<br>
                                Guwahati, Kamrup(M), Assam, 781007<br><br>
                                <strong>Factory Location:</strong>
                                <p>H/No. 8, Bokulban Path, Opp. Postal Training<br>
                                    Centre, Kerakuchi, Guwahati, Kamrup (M),<br>Assam, 781040<br><br>
                                    <strong>Phone:</strong> +91- 8638198860 / 8134957275<br><br>
                                    <strong>Email:</strong> brosyindustries@aol.com<br>
                                </p>
                        </div>
                    </div>

                    {{-- <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Products</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a>Plant Growth Promoters</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Bio Fertilizers</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Bio Pesticides</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Bio Fungicides</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Micronutrients</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Soil Conditioner</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Suspension Concentrates</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Probiotics</a></li>
                        </ul>
                    </div> --}}

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a>Integrated Pest Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Integrated Disease Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Plant Nutrient Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Organic Farming</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Urban Farming</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a>Hydroponics</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p style="text-align: justify">Join our newsletter to receive exclusive content and valuable tips delivered right to your inbox.</p>
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
                    {{-- <div class="credits">
                        Designed by <a href="https://kangkanrajkhowa.netlify.app/">Kangkan Rajkhowa</a>
                    </div> --}}
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


    <script src="{{ asset('assets/js/lottie.js') }}"></script>

</body>

</html>
