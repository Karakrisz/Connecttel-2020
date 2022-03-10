    <!-- Preloader -->
    <div class="preloader">
        <div class="box"></div>
    </div>

    <!-- Ink Transition -->
    <div class="cd-transition-layer visible opening">
        <div class="bg-layer"></div>
    </div>
    <!--/Preloader -->

    <!--Header Start-->

    <?php if ((isset($_SESSION['shop']))): ?>
    <header class="cursor-light" id="header">

        <!--Navigation-->
        <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon alt-font">
            <div class="container">
                <a class="logo link scroll" href="javascript:void(0)" title="Logo">
                    <!--Logo Default-->
                    <img alt="logo" class="logo-dark default" src="agency/img/connecttel_logo.png">
                </a>


                <!--Nav Links-->
                <div class="collapse navbar-collapse" id="agency">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link link scroll active" href="#home">Kezdőlap</a>
                        <a class="nav-link link scroll" href="#about-us">Rólunk</a>
                        <a class="nav-link link scroll" href="#portfolio">Galléria</a>
                        <a class="nav-link link scroll" href="#shop">Üzleteink</a>
                        <a class="nav-link link scroll flashit_nav-link nav-link__formating"
                            href="/mobilcsereprogram">Mobilcsere
                            program</a>
                        <a class="nav-link link scroll" href="#blog">Blog</a>
                        <a class="nav-link link scroll" href="#contact">Kapcsolat</a>
                        <span class="menu-line"><i aria-hidden="true" class="fa fa-angle-down"></i></span>
                    </div>
                </div>

                <!--Menu Button-->
                <button class="fullnav-toggler link" id="full-menu-1" type="button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

                <!--Slider Social-->
                <div class="slider-social">
                    <ul class="list-unstyled">

                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "kaposvartesco")): ?>

                        <li class="animated-wrap"><a target="_blank" class="animated-element"
                                href="https://www.facebook.com/connecttel.kaposvar"><i aria-hidden="true"
                                    class="fab fa-facebook-f"></i></a></li>

                        <?php endif?>

                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "kaposvarplaza")): ?>

                        <li class="animated-wrap"><a target="_blank" class="animated-element"
                                href="https://www.facebook.com/connecttel.kaposvar"><i aria-hidden="true"
                                    class="fab fa-facebook-f"></i></a></li>

                        <?php endif?>

                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "keszthely")): ?>

                        <li class="animated-wrap"><a target="_blank" class="animated-element"
                                href="https://www.facebook.com/connecttelkeszthely"><i aria-hidden="true"
                                    class="fab fa-facebook-f"></i></a></li>

                        <?php endif?>

                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "tapolca")): ?>

                        <li class="animated-wrap"><a target="_blank" class="animated-element"
                                href="https://www.facebook.com/connectteltapolca"><i aria-hidden="true"
                                    class="fab fa-facebook-f"></i></a></li>

                        <?php endif?>

                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "zalaegerszeg")): ?>

                        <li class="animated-wrap"><a target="_blank" class="animated-element"
                                href="https://www.facebook.com/connecttelzeg"><i aria-hidden="true"
                                    class="fab fa-facebook-f"></i></a></li>

                        <?php endif?>

                        <?php if ((isset($_SESSION['shop']) && $_SESSION["shop"] == "balatonboglar")): ?>

                        <li class="animated-wrap"><a target="_blank" class="animated-element"
                                href="https://www.facebook.com/connecttelboglar"><i aria-hidden="true"
                                    class="fab fa-facebook-f"></i></a></li>

                        <?php endif?>

                        <li class="animated-wrap"><a target="_blank" class="animated-element"
                                href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                        <!-- <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter"></i></a></li> -->
                    </ul>
                </div>

            </div>
        </nav>

        <!--Full menu-->
        <div class="nav-holder main style-2 alt-font">

            <!--Menu Button-->
            <button class="fullnav-close link" type="button">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

            <div class="container">
                <div class="shape-left">
                    <nav class="navbar full-menu-navigation left">
                        <ul class="list-unstyled">
                            <li><a class="link scroll" href="#home">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Kezdőlap</span>
                                </a></li>
                            <li><a class="link scroll" href="#about-us">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Rólunk</span>
                                </a></li>
                            <li><a class="link scroll" href="#portfolio">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Galléria</span>
                                </a></li>
                            <li><a class="link scroll" href="#shop">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Üzleteink</span>
                                </a></li>
                            <li><a class="link scroll" href="#blog">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Blog</span>
                                </a></li>
                            <li><a class="link scroll" href="#contact">
                                    <span class="anchor-circle"></span>
                                    <span class="anchor-text">Kapcsolat</span>
                                </a></li>
                        </ul>
                        <span class="full-menu-dot" style="transform: scale(0);"></span>
                    </nav>
                    <img class="shape-left__img" alt="shape" src="agency/img/shape-8.png">
                </div>
                <!-- <div class="shape-right">
                    <div class="full-menu-detail hide-cursor">
                        <h6 class="title">Press Contact</h6>
                        <p><i class="fas fa-user-alt"></i>David Warrior</p>
                        <p><i class="fas fa-mobile-alt"></i>+97 53 49 24 78 36</p>
                        <p><i class="fas fa-envelope"></i>contact@megaone.com</p>
                    </div>
                </div> -->
            </div>
        </div>

        <!--Get Quote Model Popup-->
        <div class="animated-modal hidden quote-content" id="animatedModal">
            <!--Heading-->
            <div class="heading-area pb-2 mx-570">
                <span class="sub-title">We are megaone company</span>
                <h2 class="title mt-2">Lets start your <span class="alt-color js-rotating">project, website</span></h2>
            </div>
            <!--Contact Form-->
            <form class="contact-form">
                <div class="row">
                    <!--Result-->
                    <div class="col-12" id="quote_result"></div>

                    <!--Left Column-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="quote_name" name="quote_name" placeholder="Name" required=""
                                type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="quote_contact" name="quote_contact" placeholder="Contact #"
                                required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="quote_type" name="quote_type" placeholder="Project type"
                                required="" type="text">
                        </div>
                    </div>

                    <!--Right Column-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="quote_email" name="quote_email" placeholder="Email"
                                required="" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="quote_address" name="quote_address"
                                placeholder="City / Country" required="" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="quote_budget" name="quote_budget" placeholder="Budget"
                                required="" type="text">
                        </div>
                    </div>

                    <!--Full Column-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="quote_message" name="quote_message"
                                placeholder="Please explain your project in detail."></textarea>
                        </div>
                    </div>

                    <!--Button-->
                    <div class="col-md-12">

                        <div class="form-check">
                            <label class="checkbox-lable">Contact by phone ins preffered
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <a class="btn btn-large btn-rounded btn-blue btn-hvr-pink" href="javascript:void(0);"
                            id="quote_submit_btn">Send Message
                            <div class="btn-hvr-setting">
                                <ul class="btn-hvr-setting-inner">
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                </ul>
                            </div>
                        </a>
                    </div>

                </div>
            </form>
        </div>

    </header>
    <?php endif;?>
    <!--Header End-->