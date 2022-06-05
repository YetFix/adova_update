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

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <!-- Shop Detail Start -->
 <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-4 mb-30">
                <?php  $property_images = explode('|',$product->images);?>
                <!-- <img src="{{ asset(''. $property_images[0]) }}" class="img-fluid" alt="">    -->
                <div style="width: 100%;height:100%">
                    <div class="portfolio-details-container">
                      <div class="owl-carousel portfolio-details-carousel">
                            
                            @foreach ($property_images as $slider )
                            <img src="{{asset(''.$slider)}}" class="img-fluid" style="height:400px"  alt="">
                            @endforeach
                           
                      </div>
                </div>
            </div>
            </div>

            <div class="col-lg-8 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>{{$product->name}}</h3>
                    
                    <h3 class="font-weight-semi-bold mb-4">{{$product->price}} tk.</h3>
                    <p class="mb-4">{!! $product->desc !!}</p>
                   
                  
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Withdral Period</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Dosage</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-4">Side Effects</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-5">Storage</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-6">Supply</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-7">Others</a>

                        
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            {!!$product->desc!!}
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Withdral Period</h4>
                            {!!$product->withdral!!}
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <h4 class="mb-3">Dosage</h4>
                            {!!$product->dosage!!}
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <h4 class="mb-3">Side Effects</h4>
                            {!!$product->effects!!}
                        </div>
                        <div class="tab-pane fade" id="tab-pane-5">
                            <h4 class="mb-3">Storage</h4>
                            {!!$product->storage!!}
                        </div>
                        <div class="tab-pane fade" id="tab-pane-6">
                            <h4 class="mb-3">Supply</h4>
                            {!!$product->supply!!}
                        </div>
                        <div class="tab-pane fade" id="tab-pane-5">
                            <h4 class="mb-3">Others</h4>
                            {!!$product->others!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">You May Also Like</span></h2>
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
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>{{$product->price}} tk.</h5>
                            </div>
                           
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


  



@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
@endpush