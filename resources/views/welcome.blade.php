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
    <script src="{{ asset('assets/js/main.js') }}"></script>
</head>

<body>
    <div id="preloader"></div>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="" style="width: 100px">
                {{-- <h1>Brosy Industries  </h1> --}}
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('#hero') }}" class="nav-link scrollto">Home</a></li>
                    <li><a href="{{ url('#about') }}" class="nav-link scrollto">About Us</a></li>
                    <li><a href="{{ url('#features') }}" class="nav-link scrollto">Services</a></li>
                    <li><a href="{{ url('#services') }}" class="nav-link scrollto">Products</a></li>
                    <li><a href="{{ route('blog') }}" class="nav-link scrollto">Blog</a></li>
                    <li><a href="{{ route('gallery') }}" class="nav-link scrollto">Gallery</a></li>
                    <li><a href="{{ url('#contact') }}" class="nav-link scrollto">Contact Us</a></li>
                    {{-- <li class="dropdown megamenu"><a href="{{ url('#features') }}"
                    class="nav-link scrollto"><span>Products</span> <i
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
                    </li> --}}
                </ul>
                <i class="mobile-nav-toggle bi bi-list d-none"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <section id="hero" class="hero carousel carousel-slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-fluid">
                    <div class="row justify-content-center gy-6">

                        <div class="col-12">
                            <img src="assets/img/about.jpg" alt="" class="img img-carousel">
                        </div>

                        <div class="col-12 text-center">
                            <h2>Welcome to HeroBiz</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#about" class="btn-get-started scrollto ">Get Started</a>
                        </div>

                    </div>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row justify-content-center gy-6">

                        <div class="col-12">
                            <img src="assets/img/about.jpg" alt="" class="img img-carousel">
                        </div>

                        <div class="col-12 text-center">
                            <h2>At vero eos et accusamus</h2>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                                quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                            <a href="#about" class="btn-get-started scrollto ">Get Started</a>
                        </div>

                    </div>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <div class="container-fluid">
                    <div class="row justify-content-center gy-6">

                        <div class="col-12">
                            <img src="assets/img/about.jpg" alt="" class="img img-carousel">
                        </div>

                        <div class="col-12 text-center">
                            <h2>Temporibus autem quibusdam</h2>
                            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                            <a href="#about" class="btn-get-started scrollto ">Get Started</a>
                        </div>

                    </div>
                </div>
            </div><!-- End Carousel Item -->
        </div>

        <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

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
                        <h4 class="pt-0 pt-lg-5" style="text-align: justify">Choose Brosy Industries for Quality
                            Assurance, Expertise, and a Greener
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
                                    <h6 style="text-align: justify">Brosy Industries Private Limited is committed to
                                        creating organic, high-quality
                                        plants, and aquaculture support products. The global phenomenon of organic
                                        farming has gained significant awareness, inspiring us to take a bold step in
                                        establishing a Bio-Fertilizer unit in our home state of Assam. Our vision is to
                                        provide essential bio inputs to cultivators and the organic farming community
                                        while simultaneously reducing the reliance on chemical fertilizers.</h6>

                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6 style="text-align: justify">Understanding the paramount importance of vitamins
                                        for holistic growth, we craft
                                        products that strike the perfect balance, granting your plants and aqua life a
                                        complete evolution, higher productivity, and improved quality. Our dedication
                                        lies in maintaining and enhancing the caliber of the ecosystem with each usage
                                        of our products.</h6>
                                </div>

                            </div><!-- End Tab 1 Content -->

                            <div class="tab-pane fade show" id="tab2">


                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6 style="text-align: justify">At Brosy Industries, we are a modern, innovative,
                                        and research-driven
                                        organization dedicated to finding solutions for both Agriculture and
                                        Aquaculture. Our premium products offer optimized plant nutrition value,
                                        ensuring high efficiency, crop suitability, low chloride content, and purity.
                                    </h6>
                                </div>

                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6 style="text-align: justify">With a wide range of products catering to plants,
                                        soil, and aqua life, our
                                        expertise lies in Bio-Fertilizers, Bio-Pesticides, Growth Promoters,
                                        Micronutrients, Soil Boosters, Herbicides, and various aquaculture products like
                                        Sodium Percarbonate, Potassium Permanganate, Fish Micronutrients & Growth
                                        Promoters, among others.</h6>
                                </div>
                            </div><!-- End Tab 2 Content -->

                            <div class="tab-pane fade show" id="tab3">

                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6 style="text-align: justify">At Brosy Industries, quality is the essence of our
                                        operation. We take immense
                                        pride in delivering nothing short of excellence in each product we formulate.
                                        Rigorous research and testing are undertaken to ensure that our products meet
                                        the highest standards before they reach our customers. Our commitment to 100%
                                        assurance and quality certification sets us apart, making us the preferred
                                        choice for all your agricultural and aquacultural needs.</h6>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    {{-- <i class="bi bi-arrow-return-right"></i> --}}
                                    <h6 style="text-align: justify">Choose Brosy Industries Private Limited for premium
                                        products, unmatched
                                        expertise in organic farming solutions, and the assurance of delivering the
                                        best. Join us in cultivating a greener and sustainable future for agriculture
                                        and aquaculture.</h6>
                                </div>
                            </div><!-- End Tab 3 Content -->

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Nurturing Growth in Agriculture and Aquaculture: Explore our Comprehensive Range of Soil,
                        Fertilizers, and Pesticide Products</p>
                </div>
                <section class="accordion p-1">
                    <input type="checkbox" name="collapse" id="handle1" checked="checked">
                    <h2 class="handle">
                        <label for="handle1">Integrated Pest Management</label>
                    </h2>
                    <div class="content tab-pane">
                        <div class="row gy-4">
                            <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Integrated Pest Management</h3>
                                <p style="text-align: justify">
                                    Indiscriminate and injudicious use of chemical pesticides in agriculture has
                                    resulted in several associated adverse effects such as environmental pollution,
                                    ecological imbalances, pesticides residues in food, fruits and vegetables, fodder,
                                    soil and water, pest resurgence, human and animal health hazards, destruction of
                                    bio-control agents, development of resistance in pests etc. IPM is an eco-friendly
                                    approach which encompasses cultural, mechanical, biological and need based chemical
                                    control measures. The IPM approach is being disseminated through various
                                    schemes/projects at national and state level.
                                </p>
                                <p style="text-align: justify">
                                    As we approached 21st century there is increasing demand on organically produced
                                    food, conservation of biodiversity, unpolluted environment and sustainable
                                    agriculture. To face these challenges, bio-control agents and bio-pesticides have
                                    emerged as viable alternatives in pest & diseases control. In spite of the thrust
                                    from Govt. of India and Govt. of Assam the adoption of bio-control agents and
                                    bio-pesticides as an agro-input by farmers is still in infancy.

                                </p>
                                <p class="services-p">
                                    Tools of IPM
                                </p>
                                <ul class="fst-italic" style="text-align: justify">
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                            class="custom-span">Monitoring:</span> Keep tracks of the pests and
                                        their potential damage. This provides knowledge about the current pests and crop
                                        situation and is helpful in selecting the best possible combinations of the pest
                                        management methods.
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span class="custom-span">Pest
                                            resistant
                                            varieties:</span> Breeding for
                                        pest resistance is a continuous process. These are bred and selected when
                                        available in order to protect against key pests.
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span class="custom-span">Cultural
                                            pest
                                            control:</span> It includes crop
                                        production practices that make crop environment less susceptible to pests. Crop
                                        rotation, cover crop, row and plant spacing, planting and harvesting dates,
                                        destruction of old crop debris are a few examples. Cultural controls are based
                                        on pest biology and development.
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                            class="custom-span">Mechanical
                                            control:</span> These are based on
                                        the knowledge of pest behaviour. Hand picking, installation of bird perches,
                                        mulching and installation of traps are a few examples.
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                            class="custom-span">Biological
                                            control:</span> These include
                                        augmentation and conservation of natural enemies of pests such as insect
                                        predators, parasitoids, pathogen and weed feeders. In IPM programes, native
                                        natural enemy populations are conserved and non-native agents are released with
                                        utmost caution.
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span class="custom-span">Chemical
                                            control:</span> Pesticides are used to
                                        keep the pest population below economically damaging levels when the pests
                                        cannot be controlled by other means. It is applied only when the pest's damaging
                                        capacity is nearing to the threshold.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="accordion p-1">
                    <input type="checkbox" name="collapse2" id="handle2">
                    <h2 class="handle">
                        <label for="handle2">Integrated Disease Management</label>
                    </h2>
                    <div class="content tab-pane">
                        <div class="row gy-4">
                            <div class="col-lg-12 order-2 order-lg-1">
                                <h3>Integrated Disease Management</h3>
                                <p style="text-align: justify">
                                    Integrated Disease Management (IDM) is a holistic approach to managing plant
                                    diseases that involves combining multiple strategies and practices to effectively
                                    control and minimize the impact of diseases on crops. IDM aims to provide
                                    sustainable solutions that are environmentally friendly, economically viable, and
                                    socially acceptable. It emphasizes the integration of various tools, techniques, and
                                    practices to create a comprehensive and effective disease management plan. This
                                    approach is widely used in agriculture and horticulture to protect crops from
                                    diseases while reducing the reliance on chemical interventions.
                                </p>
                                <p class="services-p">Key components of Integrated Disease Management</p>
                                <ul class="fst-italic" style="text-align: justify">
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span class="custom-span">Cultural
                                            Practices:</span> These involve
                                        manipulating the growing environment and crop practices to reduce disease
                                        incidence. Examples include selecting disease-resistant crop varieties, using
                                        appropriate planting and spacing techniques, optimizing irrigation and nutrient
                                        management, and practicing crop rotation.</li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                            class="custom-span">Biological
                                            Control:</span> This involves the
                                        use of natural enemies such as beneficial microorganisms, predators,
                                        parasitoids, and pathogens to suppress disease-causing organisms. For instance,
                                        introducing beneficial insects that feed on pest insects can help keep pest
                                        populations in check.
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span class="custom-span">Chemical
                                            Management:</span> While IDM aims to
                                        minimize chemical inputs, judicious use of pesticides can be a part of the
                                        strategy. However, the emphasis is on using targeted and environmentally
                                        friendly pesticides only when necessary, and rotating different classes of
                                        chemicals to reduce the risk of resistance development.
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> <span class="custom-span">Cultural
                                            and
                                            Biological Amendments:</span>
                                        Utilizing techniques like crop residue management, composting, and adding
                                        beneficial microorganisms to the soil can improve the overall health of the
                                        growing environment and suppress disease development.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="accordion p-1">
                    <input type="checkbox" name="collapse3" id="handle3">
                    <h2 class="handle">
                        <label for="handle3">Plant Nutrient Management</label>
                    </h2>
                    <div class="content tab-pane">
                        <div class="row gy-4">
                            <div class="col-lg-12 order-2 order-lg-1">
                                <h3>Plant Nutrient Management</h3>
                                <p style="text-align: justify">
                                    Plant Nutrient Management refers to the maintenance of soil fertility and plant
                                    nutrients supply to an optimum level for sustaining the desired productivity through
                                    optimization of the benefits from all possible sources of organic, inorganic and
                                    biological components in an integrated manner. Brosy Industries Private Limited
                                    encourages
                                    farmers to follow the principal of
                                    conservation agriculture in order to minimize soil disturbance, promoting
                                    intercropping and crop rotations and developing a permanent soil cover to minimize
                                    the need for chemical fertilizers.

                                </p>
                                <ul class="fst-italic" style="text-align: justify">
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> Yield-targeted, site-and soil
                                        specific
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> Understanding the interrelation of
                                        different nutrients
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> Nutrients on a cropping-system /
                                        rotation basis; and more specifically
                                    </li>
                                    <li><i class="bi bi-arrow-right-circle-fill"></i> Use on-farm and off-farm waste
                                        through
                                        recycling</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="accordion p-1">
                    <input type="checkbox" name="collapse4" id="handle4">
                    <h2 class="handle">
                        <label for="handle4">Organic Farming</label>
                    </h2>
                    <div class="content tab-pane">
                        <div class="row gy-4">
                            <div class="col-lg-12 order-2 order-lg-1">
                                <h3>Organic Farming</h3>
                                <p style="text-align: justify">
                                    Organic Farming is a form of agriculture that relies on ecosystem management and
                                    attempts to reduce or eliminate chemical agricultural inputs. It is a holistic
                                    production management system that promotes and enhances agro-ecosystem health,
                                    including biodiversity, biological cycles, and soil biological activity. Organic
                                    farming excludes the use of synthetic inputs, such as synthetic fertilizers and
                                    pesticides, and genetically modified organisms (GMOs)

                                </p>
                                <p style="text-align: justify">
                                    The primary goal of organic farming is to create a healthy and balanced ecosystem
                                    that supports the long-term health of soil, plants, animals, and people, while
                                    minimizing the use of synthetic inputs such as pesticides and synthetic fertilizers.
                                    Organic farming relies on natural processes, biodiversity, and ecological principles
                                    to promote soil fertility, pest and disease management, and overall farm
                                    sustainability.

                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="accordion p-1">
                    <input type="checkbox" name="collapse5" id="handle5">
                    <h2 class="handle">
                        <label for="handle5">Urban Farming</label>
                    </h2>
                    <div class="content tab-pane">
                        <div class="row gy-4">
                            <div class="col-lg-12 order-2 order-lg-1">
                                <h3>Urban Farming</h3>
                                <p style="text-align: justify">
                                    Urban farming, also known as urban agriculture, refers to the practice of growing,
                                    cultivating, and producing food and other agricultural products within urban or
                                    suburban areas. This can take place in various forms, such as rooftop gardens,
                                    community gardens, indoor hydroponic systems, vertical farms, and more. Urban
                                    farming is gaining popularity as a response to challenges like population growth,
                                    food security concerns, limited access to fresh produce, and the desire for more
                                    sustainable and locally sourced food options.
                                </p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="services-p">
                                            Types of Urban Farming:

                                        </p>
                                        <ul class="fst-italic" style="text-align: justify">
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Rooftop
                                                    Gardens:</span> Utilizing rooftops of
                                                buildings to create green spaces for planting crops.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Community
                                                    Gardens:</span> Shared garden spaces
                                                where community members collectively grow vegetables, herbs, and fruits.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Vertical
                                                    Farms:</span> Multi-level indoor farms
                                                that use hydroponic, aeroponic, or aquaponic systems to grow crops in a
                                                controlled environment.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Container
                                                    Gardening:</span> Growing plants in
                                                containers on balconies, patios, or even windowsills.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Hydroponics
                                                    and
                                                    Aquaponics:</span> Soilless
                                                systems that use nutrient-rich water to grow plants (hydroponics) or
                                                combine
                                                fish farming with plant cultivation (aquaponics).
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Indoor
                                                    Farming:</span> Growing crops indoors
                                                using artificial lighting and controlled environmental conditions.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="services-p">
                                            Benefits of Urban Farming:
                                        </p>
                                        <ul class="fst-italic" style="text-align: justify">
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Food
                                                    Security:</span> Urban farming can
                                                contribute to local food production, reducing the reliance on distant
                                                agricultural sources.

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Fresh
                                                    Produce:</span> Residents have access to
                                                freshly harvested, nutritious produce.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Environmental
                                                    Sustainability:</span> Urban
                                                farms can reduce the carbon footprint associated with transporting food
                                                long
                                                distances.

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Green
                                                    Space:</span> Urban farming can enhance
                                                aesthetics, biodiversity, and air quality in urban areas.

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Community
                                                    Building:</span> Community gardens
                                                and urban farms foster social interaction, skill-sharing, and a sense of
                                                ownership.

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Educational
                                                    Opportunities:</span> Urban farming
                                                offers learning experiences about agriculture, nutrition, and
                                                sustainability.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Economic
                                                    Opportunities:</span> Urban farmers
                                                can generate income by selling produce to local markets or restaurants.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="services-p">
                                            Challenges of Urban Farming:
                                        </p>
                                        <ul class="fst-italic" style="text-align: justify">
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Limited
                                                    Space:</span> Urban areas often have
                                                limited land available for farming, requiring creative solutions.


                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Resource
                                                    Constraints:</span> Water and energy
                                                resources can be limited, especially in densely populated cities.

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Zoning
                                                    and
                                                    Regulations:</span> Local
                                                regulations may restrict agricultural activities in urban areas.


                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Initial
                                                    Investment:</span> Setting up urban
                                                farming systems can require financial investments in equipment and
                                                infrastructure.


                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Expertise:</span>
                                                Successful urban farming
                                                often requires specialized knowledge in areas like hydroponics, pest
                                                management,
                                                and plant nutrition.


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="accordion p-1">
                    <input type="checkbox" name="collapse6" id="handle6">
                    <h2 class="handle">
                        <label for="handle6">Hydroponics</label>
                    </h2>
                    <div class="content">
                        <div class="row gy-4">
                            <div class="col-lg-12 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Hydroponics</h3>
                                <p style="text-align: justify">
                                    Due to the shortage of land it is not possible to cultivate the agriculture crops in
                                    cities, but there is huge requirement of the agriculture produce in urban locations.
                                    Hydroponics is best technology for the agriculture cultivation where soil is not
                                    available. It can be cultivated on the roof top in the hilly area, on the concrete
                                    floor.
                                    Hydroponics is a subset of hydro culture and is a method of growing plants using
                                    mineral nutrient solutions, in water, without soil. Terrestrial plants may be grown
                                    with their roots in the mineral nutrient solution only or in an inert medium, such
                                    as perlite, gravel, mineral wool, expanded clay or coconut husk.
                                </p>
                                <p style="text-align: justify">
                                    As we approached 21st century there is increasing demand on organically produced
                                    food, conservation of biodiversity, unpolluted environment and sustainable
                                    agriculture. To face these challenges, bio-control agents and bio-pesticides have
                                    emerged as viable alternatives in pest & diseases control. In spite of the thrust
                                    from Govt. of India and Govt. of Assam the adoption of bio-control agents and
                                    bio-pesticides as an agro-input by farmers is still in infancy.

                                </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="services-p" style="text-align: justify">
                                            Some of the reasons why hydroponics is being adapted around the world for
                                            food
                                            production are the following:
                                        </p>
                                        <ul class="fst-italic" style="text-align: justify">
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> Easy to Grow & Cultivate
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> Stable and high yields
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> 80% less water than
                                                Traditional
                                                Farming
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> Pesticides Free Farming

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> It is easier to harvest
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> Chemicals free Farming
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> IOT enabled Farming (Smart
                                                Farming)
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> No personal presence
                                                needed
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="services-p">
                                            Types of Hydroponic Systems:
                                        </p>
                                        <ul class="fst-italic" style="text-align: justify">
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span class="custom-span">
                                                    Water
                                                    Culture
                                                    (DWC):</span> Plants are
                                                suspended in a nutrient solution with their roots submerged in the
                                                solution. Air
                                                pumps provide oxygen to the roots.

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Nutrient
                                                    Film
                                                    Technique (NFT):</span> A thin
                                                film of nutrient solution flows over the roots, providing nutrients and
                                                oxygen.
                                                Excess solution is collected and recirculated.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Drip
                                                    System:</span>
                                                Nutrient solution is
                                                delivered to the plants through a network of tubes and drippers, either
                                                directly
                                                onto the root system or onto a growing medium.
                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Ebb and
                                                    Flow
                                                    (Flood
                                                    and Drain):</span> The
                                                growing medium periodically floods with nutrient solution, and then
                                                drains,
                                                allowing for oxygen to reach the roots.

                                            </li>
                                            <li><i class="bi bi-arrow-right-circle-fill"></i> <span
                                                    class="custom-span">Aeroponics:</span>
                                                Plant roots are suspended in
                                                air, and nutrient solution is delivered as a fine mist. This method
                                                maximizes
                                                oxygen exposure to the roots.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        {{-- <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up"
                                        data-aos-delay="200">
                                        <img src="{{ asset('assets/img/products/6.jpg') }}" alt="" class="img-fluid
        img-custom">
        </div> --}}
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Products</h2>
                    <p>Nurturing Growth in Agriculture and Aquaculture: Explore our Comprehensive Range of Soil,
                        Fertilizers, and Pesticide Products</p>
                </div>

                <div class="row gy-5 mt-2">
                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-seedling"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Plant Growth Promoters</h3>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/2.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-flask"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Bio Fertilizers</h3>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/3.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-tools"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Bio Pesticides</h3>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/4.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Bio Fungicides</h3>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/5.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                {{-- <div class="icon">
                                    <i class="bi bi-check-circle"></i>
                                </div> --}}
                                <a href="#" class="stretched-link">
                                    <h3>Micronutrients</h3>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/6.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <a href="#" class="stretched-link">
                                    <h3>Soil Conditioner</h3>
                                </a>
                            </div>
                        </div>
                    </div><!-- End Service Item -->
                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="800">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/7.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <a href="#" class="stretched-link">
                                    <h3>Suspension Concentrates</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-6" data-aos="zoom-in" data-aos-delay="900">
                        <div class="service-item">
                            <div class="img">
                                <img src="{{ asset('assets/img/products/8.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="details position-relative">
                                <a href="#" class="stretched-link">
                                    <h3>Probiotics</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">

                    <div
                        class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
                        <h3>Join the <em>Brosy</em> Community Today!</h3>
                        <p style="text-align: justify"> Transform your farming and aquaculture ventures with us. Take
                            advantage of our exceptional
                            products and expert knowledge to maximize your yields, minimize your efforts, and contribute
                            to a greener tomorrow.</p>
                        <a class="cta-btn align-self-start" href="#">Call Now</a>
                    </div>

                    <div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
                        <div class="img">
                            <img src="{{ asset('assets/img/cta.jpg') }}" alt="" class="img-fluid">
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
                            {{-- <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p> --}}
                            <ul style="text-align: justify">
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
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion accordion-flush px-xl-5" id="faqlist" style="text-align: justify">

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        What types of products do you offer for agriculture and aquaculture?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        We offer a comprehensive range of products to support agriculture and
                                        aquaculture, including Plant Growth Promoters, Bio Fertilizers, Bio Pesticides,
                                        Bio Fungicides, Micronutrients, Soil Conditioners, Suspension Concentrates, and
                                        Probiotics. Our products are designed to nurture growth and enhance yields in
                                        these industries.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Are your products safe for the environment and sustainable farming practices?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Yes, our products are formulated with a strong commitment to environmental
                                        sustainability and responsible farming practices. They are designed to minimize
                                        harm to the environment while promoting healthy crop growth and aquaculture
                                        systems. We prioritize eco-friendly solutions for sustainable agriculture and
                                        aquaculture.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        How can I purchase your products?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        You can purchase our products through our authorized distributors and retailers.
                                        Please call us on the number provided in contact us section for further
                                        assistance and inquiries.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Do you provide any guidance or support for product application and usage?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Absolutely! We are committed to helping you get the most out of our products.
                                        Our website offers detailed product information and usage guidelines.
                                        Additionally, our customer support team is available to answer any specific
                                        questions you may have and provide guidance on proper product application for
                                        optimal results.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <i class="bi bi-question-circle question-icon"></i>
                                        Are your products environmentally friendly?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Yes, we are committed to environmentally sustainable agriculture. Our Bio
                                        Fertilizers, Bio Pesticides, and Bio Fungicides are formulated with eco-friendly
                                        ingredients that promote healthy crop growth while minimizing harm to the
                                        environment. We prioritize sustainable farming practices to protect both your
                                        crops and the planet.
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

                        <div class="C">
                            <h3>Get in touch</h3>
                            <p style="text-align: justify">Have questions or need assistance with our products or
                                services? We're here to help! Feel free to reach out to us anytime.</p>

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
                        <form action="{{ route('send-email') }}" method="post" role="form" class="laravel-email-form"
                            id="laravel-email-form">
                            @csrf
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
                                <div class="loading">Processing</div>
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
                        <p style="text-align: justify">Join our newsletter to receive exclusive content and valuable
                            tips delivered right to your inbox.</p>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var emailForm = document.getElementById('laravel-email-form');
            var sentMessage = document.querySelector('.sent-message');
            var errorMessage = document.querySelector('.error-message');
            var loadingIndicator = document.querySelector('.loading');


            emailForm.addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(emailForm);

                loadingIndicator.style.display = 'block';

                var xhr = new XMLHttpRequest();
                xhr.open('POST', emailForm.getAttribute('action'), true);

                // Set up the request headers (optional, depending on your needs)
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.setRequestHeader('Accept', 'application/json');

                xhr.onload = function () {
                    loadingIndicator.style.display = 'none';
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);

                        // Handle the success response here
                        sentMessage.textContent = response.message;
                        sentMessage.style.display = 'block';

                        // Clear the error message if it was previously displayed
                        errorMessage.style.display = 'none';
                    } else {
                        loadingIndicator.style.display = 'none';
                        var errorResponse = JSON.parse(xhr.responseText);

                        // Handle any errors
                        errorMessage.textContent = errorResponse.message;
                        errorMessage.style.display = 'block';

                        // Clear the success message if it was previously displayed
                        sentMessage.style.display = 'none';
                    }
                };

                xhr.onerror = function () {
                    // Handle network errors
                    errorMessage.textContent = 'An error occurred while sending the request.';
                    errorMessage.style.display = 'block';

                    // Clear the success message if it was previously displayed
                    sentMessage.style.display = 'none';
                };

                // Send the form data
                xhr.send(formData);
            });
        });

    </script>


</body>

</html>
