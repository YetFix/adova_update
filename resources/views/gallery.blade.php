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
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <?php  $property_images = explode('|',$product->images);?>
                    <img src="{{ asset(''. $property_images[0]) }}" class="img-fluid w-100" style="height:300px;" alt="">
                </div>
            @endforeach
        </div>
    </div>

<br>
    <div class="container">
        <div class="row">
            @foreach($sliders as $slider)
                <div class="col-md-4">
                <img src="{{URL::asset('slidersimg')}}/{{$slider->image}}" class="img-fluid w-100" style="height:300px" alt=""/>
                </div>
            @endforeach
        </div>
    </div>



@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
@endpush