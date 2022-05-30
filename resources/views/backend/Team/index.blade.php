@extends('backend.master')

@section('x')
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <a href='/team' class="btn btn-primary">Add New Team Member</a>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dasboard > Team</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">All Team Members</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Team Member Name</th>
                                    <th class="border-top-0">Team Member Designation</th>
                                    <th class="border-top-0">Team Member Email</th>
                                    <th class="border-top-0">Team Member Image</th>
                                    <th class="border-top-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach ($teams as $team )
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$team->name}}</td>
                                    <td>{{$team->des}}</td>
                                    <td>{{$team->email}}</td>
                                    <td>
                                        @if($team->image=='https://via.placeholder.com/600')
                                        <img src="https://via.placeholder.com/600" style="max-width:70px" alt="" />
                                        @else
                                        <img src="{{URL::asset('teamimg')}}/{{$team->image}}" style="max-width:70px"
                                            alt="" />
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('tm.edit',$team->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('tm.del',$team->id)}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © All Rights reserved <a href="https://www.yetfix.com/">yetfix.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
@endsection