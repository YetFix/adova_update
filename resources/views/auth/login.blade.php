@extends('layouts.app')
@push('css')
<link rel="stylesheet" type="text/css" href="des/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="des/css/util.css">
<link rel="stylesheet" type="text/css" href="des/css/main.css">
<!--===============================================================================================-->
@endpush
@section('content')
<div class="container mx-auto" style="max-width: 1000px;height:800px">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <span class="login100-form-title p-b-43">
                        Login to continue
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="eamil" name="email">
                       
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                       
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
                <div class="login100-more img-fluid" style="background-image: url('des/images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<!--===============================================================================================-->
<script src="des/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="des/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="des/vendor/bootstrap/js/popper.js"></script>
<script src="des/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="des/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="des/vendor/daterangepicker/moment.min.js"></script>
<script src="des/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="des/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="des/js/main.js"></script>

@endpush