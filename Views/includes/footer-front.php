</main>

<footer>
    <div class="footer-area section-bg" data-background="Views/assets/img/front/bg.png">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-logo">
                                <!-- <a href="index.html"><img src="Views/assets/img/front/logo/logo2_footer.png" alt=""></a> -->
                                <span class="text-white">Yona</span>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Receive updates and latest news direct from Simply enter.</p>
                                </div>
                            </div>
                            <div class="footer-number">
                                <h4><span>+383 </span>44904454</h4>
                                <p>odyssey@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Location </h4>
                                <ul>
                                    <li><a href="#">Advanced</a></li>
                                    <li><a href="#"> Management</a></li>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Customer</a></li>
                                    <li><a href="#">Information</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Explore</h4>
                                <ul>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Licenses</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Location</h4>
                                <div class="footer-pera">
                                    <p class="info1">Subscribe now to get daily updates</p>
                                </div>
                            </div>
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form class="subscribe_form relative mail_part">
                                        <input type="email" placeholder=" Email Address " class="placeholder hide-on-focus">
                                        <div class="form-icon">
                                            <button type="submit" class="email_icon newsletter-submit button-contactForm">Send</button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved 
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script src="Views/assets/js/js-web/jquery-1.12.4.min.js"></script>
<script src="Views/assets/js/js-web/jquery.slicknav.min.js"></script>
<script src="Views/assets/js/js-web/slick.min.js"></script>
<script src="Views/assets/js/js-web/jquery.validate.min.js"></script>
<script src="Views/assets/js/js-web/main.js"></script>
<script>
    // Active navbar
    var selector = '#index #navigation li';
    $(selector).on('click', function () {
        $(selector).removeClass('active');
        $(this).addClass('active');
    });
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    //Init Scrollspy
    $('body').scroll({
        target: '#navigation'
    });
    //Smooth Scrolling
    $("#navigation a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            const hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {

                window.location.hash = hash;
            });
        }
    });
</script>
</body>

</html>