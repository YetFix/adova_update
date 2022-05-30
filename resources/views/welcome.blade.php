<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Adova Pharmaceutical-Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a
                    href="mailto:adovapharma.bd16@gmail.com">adovapharma.bd16@gmail.com</a>
                <i class="icofont-phone"></i> +8801812-268837
            </div>
            <div class="social-links">
               
                <a href="https://www.facebook.com/adovapharma/"  target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
               
                <a href="https://www.linkedin.com/company/adova-pharmaceuticals-ltd/" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo mr-auto"><img src="image3.png" alt=""></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>

                    <li class="drop-down active"><a href="#about">About</a>
                        <ul>
                            <li><a href="#about">What we do</a></li>
                            <li><a href="#team">Who we are</a></li>

                        </ul>
                    </li>
                    @if(isset($settings[0]))
                    @if($settings[0]->local==1)
                    <li class="drop-down"><a href="#">Our Products</a>
                        <ul>
                            @if(isset($categories))
                            @foreach($categories as $category)
                            @if($category->type==='local')
                            <li class="drop-down"><a href="#">{{$category->name}}</a>
                                <ul>
                                    @foreach($category->subcategories as $subcategory)
                                    <li><a
                                            href="{{route('pro.showBySubCat',$subcategory->id)}}">{{$subcategory->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>

                            </li>
                            @endif
                            @endforeach
                            @endif
                        </ul>
                    </li>
                    @endif
                    @endif
                    @if(isset($settings[0]))
                    @if($settings[0]->import==1)
                    <li class="drop-down"><a href="#">Imported Products</a>
                        <ul>
                            @foreach($categories as $category)
                            @if($category->type==='import')
                            <li class="drop-down"><a href="#">{{$category->name}}</a>
                                <ul>
                                    @foreach($category->subcategories as $subcategory)
                                    <li><a
                                            href="{{route('pro.showBySubCat',$subcategory->id)}}">{{$subcategory->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    @endif
                    <li><a href="#team">Management</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= slider Section ======= -->
    <br/>
    <br/>
    <br/>
    <br>
    <br>
    <br>
    <section class="portfolio-details">
        <div class="container" style="width: 100%;height:100%">
            <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                    @if(isset($sliders))
                    @foreach ($sliders as $slider )
                    <img src="{{URL::asset('slidersimg')}}/{{$slider->image}}" class="img-fluid" style="height:540px;"  alt="">
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section><!-- End Slider Details Section -->

    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Best Service</a></h4>
                            <p class="description">We provide best service in Pharmaceutical Sectior in Bangladesh.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">On Demand</a></h4>
                            <p class="description">Adova pharmaceuticals provides on demand service anytime,anywhere in
                                Bangladesh.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Client Priority</a></h4>
                            <p class="description">Customers are our first priority in our Company.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">24/7</a></h4>
                            <p class="description">We provide 24X7 any service to our customers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <h3>Find Out More <span>About Us</span></h3>
                    <p>Adova Pharmaceuticals Limited is one of the fastest growing manufacturer of Animal Health Care
                        products under Pharmaceuticals sector in Bangladesh.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>Values</h3>
                        <p class="font-italic">
                            We are committed to serve for animal kind. At Adova, we do things passionately to help
                            animal live healthier and happier.
                        </p>
                        <ul>
                            <li>
                                <i class="bx bx-store-alt"></i>
                                <div>
                                    <h5>Integrity</h5>
                                    <p>We make every effort to ensure highest level of integrity in doing business. We
                                        treat honesty, truth and fairness as the building block of our entrepreneurship.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Excellence</h5>
                                    <p>We continuously strive to achieve highest possible standard in every activities
                                        and in the quality of products and services we provide. We believe attaining
                                        excellence is an endless journey and our journey for excellence will never be
                                        ended.</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Respect for individuals</h5>
                                    <p>We foster an environment that built on openness, transparency, mutual respect,
                                        individual’s integrity. We treat people how we want to be treated. We care all
                                        individuals whom we touch or to be touched: customers, employees, partners,
                                        suppliers and communities..</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>Mission</h3>
                        <ul>
                            <li>
                                <i class="bx bx-store-alt"></i>
                                <div>
                                    <p>To provide highest possible standard quality medicine at an affordable price for
                                        the customer in the country.</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <p>To reach global market within short span of time</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <p>To focus R&D extensively by building strategic partnership</p>
                                </div>
                            </li>
                        </ul>
                        <h4>Vision</h4>
                        <p>
                            The vision of Adova Pharmaceuticals is to become a business based global pharmaceutical
                            company and help animal live healthier by delivering great medicine through innovation.
                        </p>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                         <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                            New products
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                            </i> News
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        @if($upproducts->count()>0)
                                        @foreach($upproducts as $product)
                                        <div class="card" style="width:100%; margin-bottom:2px">
                                            <div style="background-color: #F2F2F2;"
                                                class="card-header collapsed question border  rounded"
                                                data-bs-toggle="collapse">
                                                <p class="pt-2  text-center" data-toggle="collapse"
                                                    data-target="#demo{{$loop->index}}">
                                                    {{$product->name}}</p>
                                            </div>

                                            <div class="card-body collapse" id="demo{{$loop->index}}">
                                                @if($product->desc)
                                                <div class="feat">
                                                    <h5>Description</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->desc}}</p>
                                                    </p>
                                                </div>
                                                @endif
                                                <div class="feat">
                                                    @if($product->compostion)
                                                    <h5>Composition</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->compostion}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->indication)
                                                    <h5>Indication</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->indication}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->dosage)
                                                    <h5>Dosage & Administration</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->dosage}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->contraindication)
                                                    <h5>Contraindication</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->contraindication}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->interaction)
                                                    <h5>Interaction</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->interaction}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->precaution)
                                                    <h5>Precaution</h5>
                                                    <hr>
                                                    <p>
                                                    <p style="color:red"> {{$product->precaution}}
                                                    </p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->effects)
                                                    <h5>Effects</h5>
                                                    <hr>
                                                    <p>
                                                    <p style="color:red"> {{$product->effects}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->withdral)
                                                    <h5>Withdrawal</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->withdral}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->safety)
                                                    <h5>Safety</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->safety}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->storage)
                                                    <h5>Storage</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->storage}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->supply)
                                                    <h5>Supply</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->supply}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->others)
                                                    <h5>Others</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->others}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="mx-auto text-center">
                                                    <a class="btn btn-lg btn-success"
                                                        href="{{route('npro.down',$product->id)}}">Download
                                                        as
                                                        PDF</a>
                                                    <a class="btn btn-lg btn-warning"
                                                        href="{{route('npro.view',$product->id)}}">View
                                                        as
                                                        PDF</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="container mt-2">
                                            <div class="row mx-auto">
                                                <div class="col">
                                                    {{ $upproducts->links('pagination::bootstrap-4') }}
                                                </div>
                                            </div>
                                        </div>

                                        @else

                                        <div class="card">
                                            <div class="cardheader">
                                                <h4 class="pl-3">No Products Found</h3>
                                            </div>
                                        </div>

                                        @endif


                                    </div>
                                    <div class="tab-pane" id="profile" role="tabpanel">
                                        @if($upproducts->count()>0)
                                        @foreach($upproducts as $product)
                                        <div class="card" style="width:100% ; margin-bottom:2px">
                                            <div class="card-header collapsed question border rounded"
                                                style="background-color :#F5F5F5;" data-bs-toggle="collapse">
                                                <p class=" text-center pt-2" data-toggle="collapse"
                                                    data-target="#demo{{$loop->index}}">
                                                    {{$product->name}}</p>
                                            </div>

                                            <div class="card-body collapse" id="demo{{$loop->index}}">
                                                @if($product->desc)
                                                <div class="feat">
                                                    <h5>Description</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->desc}}</p>
                                                    </p>
                                                </div>
                                                @endif
                                                <div class="feat">
                                                    @if($product->compostion)
                                                    <h5>Composition</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->compostion}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->indication)
                                                    <h5>Indication</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->indication}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->dosage)
                                                    <h5>Dosage & Administration</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->dosage}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->contraindication)
                                                    <h5>Contraindication</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->contraindication}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->interaction)
                                                    <h5>Interaction</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->interaction}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->precaution)
                                                    <h5>Precaution</h5>
                                                    <hr>
                                                    <p>
                                                    <p style="color:red"> {{$product->precaution}}
                                                    </p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->effects)
                                                    <h5>Effects</h5>
                                                    <hr>
                                                    <p>
                                                    <p style="color:red"> {{$product->effects}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->withdral)
                                                    <h5>Withdrawal</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->withdral}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->safety)
                                                    <h5>Safety</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->safety}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->storage)
                                                    <h5>Storage</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->storage}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->supply)
                                                    <h5>Supply</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->supply}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="feat">
                                                    @if($product->others)
                                                    <h5>Others</h5>
                                                    <hr>
                                                    <p>
                                                    <p> {{$product->others}}</p>
                                                    </p>
                                                    @endif
                                                </div>
                                                <div class="mx-auto text-center">
                                                    <a class="btn btn-lg btn-success"
                                                        href="{{route('pro.down',$product->id)}}">Download
                                                        as
                                                        PDF</a>
                                                    <a class="btn btn-lg btn-warning"
                                                        href="{{route('pro.view',$product->id)}}">View
                                                        as
                                                        PDF</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="container mt-2">
                                            <div class="row mx-auto">
                                                <div class="col">
                                                    {{ $upproducts->links('pagination::bootstrap-4') }}
                                                </div>
                                            </div>
                                        </div>

                                        @else

                                        <div class="card">
                                            <div class="cardheader">
                                                <h4 class="pl-3">No Products Found</h3>
                                            </div>
                                        </div>

                                        @endif


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/about5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>What We do</h3>

                        <p>Adova Pharmaceuticals Limited produces nutritional products, antibiotics, disinfectants,
                            analgesic, and antihistamines at its own factory at Ashulia, Dhaka and distributes them
                            nationwide. The products are made in a controlled environment that ensures highest level of
                            quality. Adova Pharmaceuticals Limited also markets pond management products, medicinal feed
                            additives and other pharmaceuticals.</p>
                        <p> APL comprises its vision, mission, and values up on which our performance is based. We are
                            proud of all our employees who are very much dedicated to make an active contribution to the
                            company.
                            Animal husbandry is our biggest assets and their goal is to drive our business forward.
                            Their motivation is enhanced through performance management, wellness, benefit, compensation
                            and training. Shared values, beliefs, norms and behaviors enable our people to achieve the
                            goal with the right leadership.
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>History & Growth</h3>
                        <p>Adova is the trend setter in different business sectors in Bangladesh. In future Adova will
                            one of the leading group of companies in the country which includes business of health care,
                            pharmaceuticals, nutrition, financial etc. However the core of Adova Company lies in health
                            care services. 4-5 years back there was no comprehensive treatment facilities in the
                            country.</p>
                        <p>It was very difficult to have the medicine for a distressed patients from a remote area in
                            Bangladesh.
                            The lack of quality treatment and the sufferings of the patients inspired the visionary
                            leader Md. Labu Mia to set a new trend in treatment for animal husbandry. As a result Adova
                            Pharmaceuticals Limited was established with the belief that a cure is the result of an
                            accurate diagnosis.</p>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/about6.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="icofont-simple-smile"></i>
                            <span data-toggle="counter-up">102</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="icofont-document-folder"></i>
                            <span data-toggle="counter-up">15</span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-live-support"></i>
                            <span data-toggle="counter-up">1,463</span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="icofont-users-alt-5"></i>
                            <span data-toggle="counter-up">150</span>
                            <p>Hard Workers</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
        <!-- <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section> -->

        <!-- End Clients Section -->


        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
                            culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                            nisi cillum quid.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                </div>

            </div>
        </section> -->

        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Management</h2>
                    <h3>Our Hardworking <span>Members</span></h3>
                </div>

                <div class="row">


                    @foreach($teams as $team)
                    @if($team->image==='https://via.placeholder.com/600')
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="https://via.placeholder.com/600" class="img-fluid" alt="">
                                <div class="social">
                                    
                                    <a href="https://www.facebook.com/adovapharma/" target="_blank"><i class="icofont-facebook"></i></a>
                                    
                                    <a href="https://www.linkedin.com/company/adova-pharmaceuticals-ltd/" target="_blank"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{$team->name}}</h4>
                                <span>{{$team->des}}</span>
                                <span>{{$team->email}}</span>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{URL::asset('teamimg')}}/{{$team->image}}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                    <a href="#"><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{$team->name}}</h4>
                                <span>{{$team->des}}</span>
                                <span>{{$team->email}}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Contact Us</span></h3>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>105, Boro Rangamatia,Durgapur,Asulia Dhaka, Banglaesh</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p> adovapharma.bd16@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+88 01812268837</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.4929043772927!2d90.300804!3d23.907594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c31b2f7c9c6d%3A0x9668b0389c17f031!2sAdova%20Pharmaceuticals%20Limited!5e0!3m2!1sen!2sbd!4v1653906436633!5m2!1sen!2sbd"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{route('contact')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" id="subject"
                                    placeholder="Your Contact Number" required />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>To Get Latest Updates</p>
                        <form action="/news" method="post">
                            @csrf
                            <input type="email" name="email" required><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3><span>Adova Pharmaceuticals Ltd</span>.</h3>

                        <p>
                            105, Boro Rangamatia<br>
                            Durgapur, Asulia Dhaka<br>
                            Bangladesh <br><br>
                            <strong>Phone:</strong> +88 01812268837<br>
                            <strong>Email:</strong> adovapharma.bd16@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <div class="social-links mt-3">
                           
                            <a href="https://www.facebook.com/adovapharma/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                          
                            <a href="https://www.linkedin.com/company/adova-pharmaceuticals-ltd/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Adova Pharmaceuticals Ltd.</span></strong>. All Rights Reserved
            </div>
            <a href="/login" target="_blank" style="margin-left: 10vw;">Login as Admin</a>
            <div class="credits">
                Designed and Developed by <a target="_blank" href="https://yetfix.com/">YetFix Ltd.</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>

</html>