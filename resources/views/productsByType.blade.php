@extends('layouts.app')

@push('css')
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">

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

    <!-- Shop Start -->
    <div class="container-fluid mt-3">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-4">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3">Filter by Categories</h5>
                <div class="bg-light p-4 mb-30">
                    <form>
                        <a href="/f/products">
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                           
                           <label class="custom-control-label" for="price-all">All Categories</label>
                           <span class="badge border font-weight-normal">{{$categories->count()}}</span>
                       </div>
                        </a>
                        @foreach($categories as $category)
                            <a href="/products/category/{{$category->id}}">
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                
                                <label class="custom-control-label" for="price-1">{{$category->name}}</label>
                                <span class="badge border font-weight-normal">{{$category->products->count()}}</span>
                            </div>
                            </a>
                        @endforeach
                       
                    </form>
                </div>
                <!-- Price End -->
                
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                               
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/products/type/regular">Regular</a>
                                        <a class="dropdown-item" href="/products/type/recent">Recent</a>
                                        <a class="dropdown-item" href="/products/type/upcoming">Upcoming</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($products->count()==0)
                        <h2 style="text-align:center;color:red;">No products of this category</h2>
                    @else
                    @foreach($products as $product)
                        <a href="/f/products/{{$product->id}}">
                            <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                                <div class="product-item bg-light mb-4">
                                    <div class="product-img position-relative overflow-hidden">
                                        <?php  $property_images = explode('|',$product->images);?>
                                    
                                        <img src="{{ asset(''. $property_images[0]) }}" class="img-fluid w-100" style="height:300px;" alt="">   
                                        
                                    </div>
                                    <div class="text-center py-4">
                                        <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <h5>{{$product->price}} tk.</h5>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    @endif
                   <br>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


  



@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
@endpush