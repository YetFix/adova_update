@extends('layouts.app')

 
@section('content')
<br>
<br>
<br>
<br>
<br>

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


@endsection
