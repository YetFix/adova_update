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
    <link href="{{URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a
                    href="mailto:adovapharma.bd16@gmail.com">adovapharma.bd16@gmail.com</a>
                <i class="icofont-phone"></i> +88 01739176123
            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="skype"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo mr-auto"><img src="{{URL::asset('image3.png')}}" alt=""></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>

                    <li class="drop-down active"><a href="#about">About</a>
                        <ul>
                            <li><a href="/#about">What we do</a></li>
                            <li><a href="/#team">Who we are</a></li>

                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Our Products</a>
                        <ul>
                            @foreach($categories as $category)
                            @if($category->type==='local')
                            <li class="drop-down"><a href="#">{{$category->name}}</a>
                                <ul>
                                    @foreach($category->products as $product)
                                    <li><a href="/product/{{$product->id}}">{{$product->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="drop-down"><a href="#">Export Products</a>
                        <ul>
                            @foreach($categories as $category)
                            @if($category->type==='import')
                            <li class="drop-down"><a href="#">{{$category->name}}</a>
                                <ul>
                                    @foreach($category->products as $product)
                                    <li><a href="/product/{{$product->id}}">{{$product->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="/#team">Management</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->


    <!-- ======= slider Section ======= -->
    <section class="portfolio-details">
        <div class="container" style="width: 100%;height:100%">
            <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                    @isset($sliders)
                    @foreach ($sliders as $slider )
                    <img src="{{URL::asset('slidersimg')}}/{{$slider->image}}" class="img-fluid" alt="">
                    @endforeach
                    @endisset
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider Details Section -->

    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  mx-auto">
                    <div class="card" style="width:100%">
                        <div class="card-header">
                            <h5 class="card-title text-center">{{$product->name}}</h5>
                        </div>
                        <div class="card-body">
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
                                <p style="color:red"> {{$product->precaution}}</p>
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
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <main id="main">




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
                            <p>contact@adovapharma.com.bd</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+88 01739176123</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.6982653586647!2d90.29971631429144!3d23.900315984515718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDU0JzAxLjEiTiA5MMKwMTgnMDYuOSJF!5e0!3m2!1sen!2sbd!4v1625774541170!5m2!1sen!2sbd"
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
                        <h3><span>Adova Pharmaceutical Ltd</span>.</h3>

                        <p>
                            105, Boro Rangamatia<br>
                            Durgapur, Asulia Dhaka<br>
                            Bangladesh <br><br>
                            <strong>Phone:</strong> +88 01739176123<br>
                            <strong>Email:</strong> contact@adovapharma.com.bd<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Adova Pharmaceutical Ltd.</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed and Developed by <a target="_blank" href="https://yetfix.com/">YetFix Ltd.</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{URL::asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
    <script src="{{URL::asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{URL::asset('assets/js/main.js')}}"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

</body>

</html>