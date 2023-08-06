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
                    <li><a href="{{ url('/') }}" class="nav-link scrollto">Home</a></li>
                    <li><a href="{{ url('/#about') }}" class="nav-link scrollto">About</a></li>
                    <li class="dropdown megamenu"><a href="javascript:void(0);" class="nav-link scrollto"><span>Products</span> <i
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
                    <li><a href="{{ url('/#services') }}" class="nav-link scrollto">Services</a></li>
                    <li><a href="{{ route('certificate') }}" class="nav-link scrollto">Certificate</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link scrollto">Blog</a></li>
                    <li><a href="{{ route('gallery') }}" class="nav-link scrollto">Gallery</a></li>
                    <li><a href="{{ url('/#contact') }}" class="nav-link scrollto">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle bi bi-list d-none"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main" style="margin-top: 100px;">
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">

            <div class="row g-5">

              <div class="col-lg-12">

                <div class="row gy-4 posts-list">

                  <div class="col-lg-6">
                    <article class="d-flex flex-column">

                      <div class="post-img">
                        <img src="https://img.freepik.com/free-photo/large-glass-aquarium-with-fish-generative-ai_169016-28881.jpg?w=2000" alt="" class="img-fluid">
                      </div>

                      <h2 class="title">
                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                      </h2>

                      <div class="meta-top">
                        <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                        </ul>
                      </div>

                      <div class="content">
                        <p>
                          Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                        </p>
                      </div>

                      <div class="read-more mt-auto align-self-end">
                        <a href="blog-details.html">Read More</a>
                      </div>

                    </article>
                  </div><!-- End post list item -->

                  <div class="col-lg-6">
                    <article class="d-flex flex-column">

                      <div class="post-img">
                        <img src="https://imgnew.outlookindia.com/public/uploads/articles/2021/5/21/Picture_(3).jpg" alt="" class="img-fluid">
                      </div>

                      <h2 class="title">
                        <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                      </h2>

                      <div class="meta-top">
                        <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                        </ul>
                      </div>

                      <div class="content">
                        <p>
                          Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                        </p>
                      </div>

                      <div class="read-more mt-auto align-self-end">
                        <a href="blog-details.html">Read More</a>
                      </div>

                    </article>
                  </div><!-- End post list item -->

                  <div class="col-lg-6">
                    <article class="d-flex flex-column">

                      <div class="post-img">
                        <img src="https://grist.org/wp-content/uploads/2023/01/India-agriculture-pesticides.jpg" alt="" class="img-fluid">
                      </div>

                      <h2 class="title">
                        <a href="blog-details.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                      </h2>

                      <div class="meta-top">
                        <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                        </ul>
                      </div>

                      <div class="content">
                        <p>
                          Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                        </p>
                      </div>

                      <div class="read-more mt-auto align-self-end">
                        <a href="blog-details.html">Read More</a>
                      </div>

                    </article>
                  </div><!-- End post list item -->

                  <div class="col-lg-6">
                    <article class="d-flex flex-column">

                      <div class="post-img">
                        <img src="assets/img/blog/blog-4.jpg" alt="" class="img-fluid">
                      </div>

                      <h2 class="title">
                        <a href="blog-details.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
                      </h2>

                      <div class="meta-top">
                        <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                        </ul>
                      </div>

                      <div class="content">
                        <p>
                          Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                        </p>
                      </div>

                      <div class="read-more mt-auto align-self-end">
                        <a href="blog-details.html">Read More</a>
                      </div>

                    </article>
                  </div><!-- End post list item -->

                  <div class="col-lg-6">
                    <article class="d-flex flex-column">

                      <div class="post-img">
                        <img src="assets/img/blog/blog-5.jpg" alt="" class="img-fluid">
                      </div>

                      <h2 class="title">
                        <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
                      </h2>

                      <div class="meta-top">
                        <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                        </ul>
                      </div>

                      <div class="content">
                        <p>
                          In itaque assumenda aliquam voluptatem qui temporibus iusto nisi quia. Autem vitae quas aperiam nesciunt mollitia tempora odio omnis. Ipsa odit sit ut amet necessitatibus. Quo ullam ut corrupti autem consequuntur totam dolorem.
                        </p>
                      </div>

                      <div class="read-more mt-auto align-self-end">
                        <a href="blog-details.html">Read More</a>
                      </div>

                    </article>
                  </div><!-- End post list item -->

                  <div class="col-lg-6">
                    <article class="d-flex flex-column">

                      <div class="post-img">
                        <img src="assets/img/blog/blog-6.jpg" alt="" class="img-fluid">
                      </div>

                      <h2 class="title">
                        <a href="blog-details.html">Distinctio provident quibusdam numquam aperiam aut</a>
                      </h2>

                      <div class="meta-top">
                        <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                          <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                        </ul>
                      </div>

                      <div class="content">
                        <p>
                          Expedita et temporibus eligendi enim molestiae est architecto praesentium dolores. Illo laboriosam officiis quis. Labore officia quia sit voluptatem nisi est dignissimos totam. Et voluptate et consectetur voluptatem id dolor magni impedit. Omnis dolores sit.
                        </p>
                      </div>

                      <div class="read-more mt-auto align-self-end">
                        <a href="blog-details.html">Read More</a>
                      </div>

                    </article>
                  </div><!-- End post list item -->

                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                  <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                  </ul>
                </div><!-- End blog pagination -->

              </div>

            </div>

          </div>
        </section><!-- End Blog Section -->

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
