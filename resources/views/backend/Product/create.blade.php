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
                <a href='/products' class="btn btn-primary">Back</a>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dasboard > Product > Create</a></li>
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
            <div class="col-sm-12 col-md-6 mx-auto">
                <div class="white-box">
                    <h3 class="box-title">New Product</h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <form action="{{route('pro.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="pdf">Product PDF</label>
                                            <input type="file" class="form-control" id="pdf" aria-describedby="pdf"
                                                name="pdf" placeholder="Enter Product pdf">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" class="form-control" id="name"
                                                aria-describedby="emailHelp" name="name"
                                                placeholder="Enter product name">
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Product Price</label>
                                            <input type="number" class="form-control" id="price"
                                                aria-describedby="emailHelp" name="price"
                                                placeholder="Enter product price">
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Select Product Type</label>
                                            <select class="form-control" id="type" name="type" required>
                                               
                                                <option value="recent">
                                                    Recent
                                                </option>

                                                <option value="upcoming">
                                                    Upcoming
                                                </option>

                                                <option value="regular">
                                                    Regular
                                                </option>
                                              
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Select Product Category</label>
                                            <select class="form-control" id="category" name="category" required>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Composition</label><br>
                                            <textarea name="compostion" id="compostion" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Indication </label><br>
                                            <textarea name="indication" id="indication" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Dosage</label><br>
                                            <textarea name="dosage" id="dosage" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Contraindication</label><br>
                                            <textarea name="contraindication" id="contraindication" cols="30"
                                                rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Side Effects</label><br>

                                            <textarea name="effects" id="effects" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Others</label><br>

                                            <textarea name="others" id="others" cols="30" rows="4"></textarea>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Precaution</label><br>

                                            <textarea name="precaution" id="precaution" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Interaction</label><br>

                                            <textarea name="interaction" id="interaction" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Withdrawal Period</label><br>

                                            <textarea name="withdral" id="withdral" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Storage</label><br>

                                            <textarea name="storage" id="storage" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Supply</label><br>

                                            <textarea name="supply" id="supply" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="safety">Safety</label><br>

                                            <textarea name="safety" id="safety" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Description</label><br>
                                            <textarea name="desc" id="desc" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pdf">Product Images</label>
                                            <input type="file" class="form-control" id="products" aria-describedby="products"
                                                name="products[]" multiple placeholder="Enter Product images">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

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
    <footer class="footer text-center"> 2021 © ALl Rights Reserved. <a href="https://www.yetfix.com/">yetfix.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
@endsection
@push('custom-scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#compostion' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush