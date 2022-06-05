@extends('layouts.app')
@push('css')
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
 <!-- Libraries Stylesheet -->

    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
@endpush

        <br>
        <br>
        <br>
        <br>
        <div style="width: 100%;height:100%">
            <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                    @if(isset($sliders))
                    @foreach ($sliders as $slider )
                    <img src="{{URL::asset('slidersimg')}}/{{$slider->image}}" class="img-fluid" style="height:600px;"  alt="">
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

@section('content')



  
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <h3>Find Out More <span>About Us</span></h3>
                    <p>Adova Pharmaceuticals Limited is one of the fastest growing manufacturer of Animal Health Care
                        products under Pharmaceuticals sector in Bangladesh.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
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

               
            </div>
      


        <!-- ======= Counts Section ======= -->
       
            <div class="container-fluid py-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">RECENTLY SHIPPED ITEMS</span></h2>
            <div class="row px-xl-5">
                <div class="col">
                    <div class="owl-carousel related-carousel">
                        @foreach($products as $key=>$product)
                        <div class="product-item bg-light" onclick="location.href='/f/products/{{$product->id}}';" style="cursor:pointer;">
                            <?php  $property_images = explode('|',$product->images);?>
                            <div class="product-img position-relative overflow-hidden">
                            <img src="{{ asset(''. $property_images[0]) }}" class="img-fluid" style="height:300px;" alt="">  
                                
                            </div>
                            <div class="text-center py-4">
                                <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                            
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
       

      
            <div class="container-fluid py-5">
                <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3">MANUFACTURING SECTORS</span></h2>
                <div class="row px-xl-5">
                    <div class="col">
                        <div class="owl-carousel related-carousel">
                            @foreach($categories as $key=>$category)
                            <div class="product-item bg-light" onclick="location.href='/products/category/{{$category->id}}';" style="cursor:pointer;">
                               
                                <div class="product-img position-relative overflow-hidden">
                                
                                <img src="{{URL::asset('categoriesimg')}}/{{$category->image}}"  class="img-fluid" style="height:300px;" alt=""/>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="">{{$category->name}}</a>
                                    
                                
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
      


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
                                <img src="https://via.placeholder.com/600" class="img-fluid" style="height:120px" alt="">
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
                            <div class="member-img mx-auto">
                                <img src="{{URL::asset('teamimg')}}/{{$team->image}}"  style="height:180px;width:250px;" alt="">
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
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
@endpush