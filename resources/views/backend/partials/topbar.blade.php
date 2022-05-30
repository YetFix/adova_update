 <!-- Topbar header - style you can find in pages.scss -->
 <!-- ============================================================== -->
 <header class="topbar" data-navbarbg="skin5">
     <nav class="navbar top-navbar navbar-expand-md navbar-dark">
         <div class="navbar-header" data-logobg="skin6">
             <!-- ============================================================== -->
             <!-- Logo -->
             <!-- ============================================================== -->
             <a class="navbar-brand" href="/home">
                 <!-- Logo icon -->
                 <b class="logo-icon">

                     <!-- Dark Logo icon -->
                     <!-- <img src="{{URL::asset('backend/plugins/images/logo-icon.png')}}" alt="homepage" /> -->
                 </b>
                 <!--End Logo icon -->
                 <!-- Logo text -->
                 <span class="logo-text">
                     <!-- dark Logo text -->
                     <img src="{{URL::asset('image2.png')}}"
                         style="max-width:200px;height:50px;margin-left:70px;margin-top:20px" alt="homepage" />
                 </span>

             </a>
             <!-- ============================================================== -->
             <!-- End Logo -->
             <!-- ============================================================== -->
             <!-- ============================================================== -->
             <!-- toggle and nav items -->
             <!-- ============================================================== -->
             <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i
                     class="ti-menu ti-close"></i></a>
         </div>
         <!-- ============================================================== -->
         <!-- End Logo -->
         <!-- ============================================================== -->
         <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

             <!-- ============================================================== -->
             <!-- Right side toggle and nav items -->
             <!-- ============================================================== -->
             <ul class="navbar-nav ms-auto d-flex align-items-center">

                 <!-- ============================================================== -->
                 <!-- Search -->
                 <!-- ============================================================== -->

                 <li class=" in">
                     <form role="search" class="app-search d-none d-md-block me-3">
                         <input type="text" placeholder="Search..." class="form-control mt-0">
                         <a href="" class="active">
                             <i class="fa fa-search"></i>
                         </a>
                     </form>
                 </li>
                 <!-- ============================================================== -->
                 <!-- User profile and search -->
                 <!-- ============================================================== -->
                 <li>
                     <a class="profile-pic" href="#">
                         <img src="{{URL::asset('backend/plugins/images/users/varun.jpg')}}" alt="user-img" width="36"
                             class="img-circle"><span class="text-white font-medium">
                             <span>{{Auth::user()->name}}</span>
                 </li>
                 <!-- ============================================================== -->
                 <!-- User profile and search -->
                 <!-- ============================================================== -->
             </ul>
         </div>
     </nav>
 </header>
 <!-- ============================================================== -->
 <!-- End Topbar header -->
 <!-- ============================================================== -->