  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <!-- <i class="icofont-envelope"></i> <a
                    href="mailto:adovapharma.bd16@gmail.com">adovapharma.bd16@gmail.com</a> -->
                <i class="icofont-phone"></i> +8801812-268837
                
                <i class="icofont-clock-time"></i>Sat - Thu 09:00 - 18:00 
                <i class="icofont-location-pin"></i>105, Boro Rangamatia,Durgapur,Asulia Dhaka, Banglaesh
            </div>
            <div class="social-links">
               
                <a href="https://www.facebook.com/adovapharma/"  target="_blank" class="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>
                 
                <a href="https://www.linkedin.com/company/adova-pharmaceuticals-ltd/" target="_blank" class="linkedin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo mr-auto"><img src="{{asset('image3.png')}}" alt=""></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="/" style="text-decoration:none;">Home</a></li>
                    <li class="drop-down "><a href="" style="text-decoration:none;">About</a>
                        <ul>
                            <li><a href="/f/what-we-do" style="text-decoration:none;">What we do</a></li>
                            <li><a href="/f/who-we-are" style="text-decoration:none;">Who we are</a></li>

                        </ul>
                    </li>
                    
                    <li class="drop-down"><a href="{{route('f.product')}}" style="text-decoration:none;">Products</a>
                        <ul>
                            @foreach($categories as $category)
                            <li class="drop-down"><a href="/products/category/{{$category->id}}" style="text-decoration:none;">{{$category->name}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </li>
                    
                    <li><a href="/f/team" style="text-decoration:none;">Management</a></li>
                    <li><a href="/f/gallery" style="text-decoration:none;">Gallery</a></li>
                    <li><a href="/f/contact" style="text-decoration:none;">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->