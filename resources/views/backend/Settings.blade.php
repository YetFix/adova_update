@extends('backend.master')

@section('x')
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

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
            <div class="col-sm-12 col-md-6 mx-auto">
                <div class="white-box">
                    <h3 class="box-title">All Settings</h3>
                    <div class="table-responsive">
                        <form action="{{route('set.store')}}" method="POST">
                            @csrf
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="ep" id="ep"
                                    {{  ($settings[0]->import == 1 ? ' checked' : '') }}>
                                <label class="form-check-label" name="ep" for="ep">Import Product</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="lp" id="lp"
                                    {{  ($settings[0]->local == 1 ? ' checked' : '') }}>
                                <label class="form-check-label" name="lp" for="lp">Local Product</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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
    <footer class="footer text-center"> 2021 © All Rights Reserved <a href="https://www.yetfix.com/">yetfix.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
@endsection