    <!--Footer Start-->
    <footer class="footer-style-1 bg-light" id="footer">
        <div class="container">
            <div class="row align-items-center">
                <!--Social-->
                <div class="col-md-6">
                    <div class="footer-social">
                        <ul class="list-unstyled">

                            <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "kaposvartesco")) : ?>

                                <li><a target="_blank" class="wow fadeInUp" href="https://www.facebook.com/connecttel.kaposvar"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>

                            <?php endif ?>

                            <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "kaposvarplaza")) : ?>

                                <li><a target="_blank" class="wow fadeInUp" href="https://www.facebook.com/connecttel.kaposvar"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>

                            <?php endif ?>

                            <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "keszthely")) : ?>

                                <li><a target="_blank" class="wow fadeInUp" href="https://www.facebook.com/connecttelkeszthely"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>

                            <?php endif ?>

                            <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "tapolca")) : ?>

                                <li><a target="_blank" class="wow fadeInUp" href="https://www.facebook.com/connectteltapolca"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>

                            <?php endif ?>

                            <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "zalaegerszeg")) : ?>

                                <li><a target="_blank" class="wow fadeInUp" href="https://www.facebook.com/connecttelzeg"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>

                            <?php endif ?>

                            <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "balatonboglar")) : ?>

                                <li><a target="_blank" class="wow fadeInUp" href="https://www.facebook.com/connecttelboglar"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>

                            <?php endif ?>
                            <!-- <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
                            <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a></li> -->
                            <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                            <!-- <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-pinterest-p"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <!--Text-->
                <div class="col-md-6 text-md-right">
                    <p class="company-about fadeIn">© 2020 karaKrisz. Minden jog fenntartva
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <!--Animated Cursor-->
    <div id="aimated-cursor">
        <div id="cursor">
            <div id="cursor-loader"></div>
        </div>
    </div>
    <!--Animated Cursor End-->

    <!--Scroll Top Start-->
    <span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
    <!--Scroll Top End-->

    <!-- JavaScript -->
    <script src="vendor/js/bundle.min.js"></script>
    <!-- Plugin Js -->
    <script src="vendor/js/jquery.appear.js"></script>
    <script src="vendor/js/jquery.fancybox.min.js"></script>
    <script src="vendor/js/owl.carousel.min.js"></script>
    <script src="vendor/js/swiper.min.js"></script>
    <script src="vendor/js/morphext.min.js"></script>
    <script src="vendor/js/TweenMax.min.js"></script>
    <script src="vendor/js/wow.min.js"></script>
    <script src="vendor/js/jquery.cubeportfolio.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="vendor/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="vendor/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.video.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
    <script src="agency/js/map.js"></script>
    <!-- custom script -->
    <script src="agency/js/script.js"></script>
    <script src="karaKrisz/js/app.js"></script>