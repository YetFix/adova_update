<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-newsletter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>To Get Latest Updates</p>
                <form action="/news" method="post">
                    @csrf
                    <input type="email" name="email" required><input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3><span>Adova Pharmaceuticals Ltd</span>.</h3>

                <p>
                    105, Boro Rangamatia<br>
                    Durgapur, Asulia Dhaka<br>
                    Bangladesh <br><br>
                    <strong>Phone:</strong> +88 01812268837<br>
                    <strong>Email:</strong> adovapharma.bd16@gmail.com<br>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <div class="social-links mt-3">
                   
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
    </div>
</div>

<div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong><span>Adova Pharmaceuticals Ltd.</span></strong>. All Rights Reserved
    </div>

    <div class="credits">
        Designed and Developed by <a target="_blank" href="https://yetfix.com/">YetFix Ltd.</a>
    </div>
</div>
</footer><!-- End Footer -->