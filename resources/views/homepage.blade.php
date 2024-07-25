<!DOCTYPE html>
<html lang="en-US"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Collector</title>
    <link rel="icon" href="{{ url('/') }}images/icon.png" type="image/gif" sizes="16x16">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="DMS Legal Team" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    <!-- CSS Files
        ================================================== -->
        <link id="bootstrap" href="{{ asset('tmp_assets/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link id="bootstrap-grid" href="{{ asset('tmp_assets/bootstrap-grid.min.css') }}" rel="stylesheet" type="text/css">
        <link id="bootstrap-reboot" href="{{ asset('tmp_assets/bootstrap-reboot.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/owl.carousel.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/owl.theme.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/owl.transitions.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/magnific-popup.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/jquery.countdown.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/style.css') }}" rel="stylesheet" type="text/css">
        <link id="colors" href="{{ asset('tmp_assets/scheme-07.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('tmp_assets/coloring.css') }}" rel="stylesheet" type="text/css">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/') }}images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/') }}images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/') }}images/favicon-16x16.png">
        <link rel="manifest" href="{{ url('/') }}images/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body style="display: block; background-size: cover;">
        <div id="wrapper" style="background-size: cover;">
            <header class="header-light">
                <div class="container" style="background-size: cover;">
                    <div class="row" style="background-size: cover;">
                        <div class="col-md-12" style="background-size: cover;">
                            <div class="de-flex sm-pt10" style="background-size: cover;">
                                <div class="de-flex-col" style="background-size: cover;">
                                    <div id="logo" style="background-size: cover;">
                                        <a href="{{ url('/') }}">
                                            <img alt="" class="logo" src="{{ asset('tmp_assets/logo.png') }}">
                                            <img alt="" class="logo-2" src="{{ asset('tmp_assets/logo.png') }}" style="max-width:250px; height: auto;">
                                        </a>
                                    </div>
                                </div>
                                <div class=" de-flex-col header-col-mid" style="background-size: cover;">

                                    <ul id="mainmenu">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="#lookupAccount">Sign In</a></li>
                                        <li><a href="#section-practice-areas">Practice Areas</a></li>
                                        <!-- <li><a href="#section-contact-us">Contact Us</a></li> -->
                                    </ul>

                                </div>
                                <div class="de-flex-col" style="background-size: cover;">
                                    <div class="h-phone md-hide" style="background-size: cover;"><a href="tel:+18773755986"><span>Need&nbsp;Help?</span><i class="fa fa-phone"></i>(877) 375-5986</a></div>
                                    <span id="menu-btn" style="display: none;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="no-bottom no-top" id="content" style="background-size: cover;">
                <div id="top" style="background-size: cover;"></div>
                <section aria-label="section" class="jarallax" style="z-index: 0; background-size: cover;">
                    
                    <div class="container" style="background-size: cover;">
                        <div class="row align-items-center" style="background-size: cover;">
                            <div class="col-lg-5 offset-md-7 wow fadeInRight animated" data-wow-delay=".5s" style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                                <div class="spacer-double" style="background-size: cover;"></div>
                                <div class="spacer-double" style="background-size: cover;"></div>
                                <div class="p-5 rounded" style="background: rgba(255, 255, 255, 0.85) 0% 0% / cover;">
                                    <a href="#" id="lookupAccount" name="lookupAccount" style="width: 1px;height:1px;">&nbsp;</a>
                                    <h3 class=" id-color wow fadeInUp animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Legal Issues?</h3>
                                    <h1 class="wow fadeInUp animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Let us help you!</h1>
                                    <p class="lead wow fadeInUp animated" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">Our
                                       legal team is here to help you resolve any obligations and troubles 
                                   that come your way. If we contacted you, please lookup your case below.</p>
                                   <div class="spacer-10" style="background-size: cover;"></div>
                                   <form action="https://dms.paymentsite.net/search" id="accountLookup" class="" method="get">
                                    <input type="text" class="form-control mb-3 ph p-3" name="phone_number" placeholder="Enter Your Phone Number Here" maxlength="14">
                                    <button type="submit" class="btn btn-lg w-100 py-2 btn-primary">LOOKUP MY CASE</button>
                                    <div style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;" data-lastpass-icon-root=""></div></form>
                                </div>
                                <div class="spacer-double" style="background-size: cover;"></div>
                            </div>
                        </div>
                    </div>
                    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%); background-size: cover;" id="jarallax-container-0"><img src="{{ asset('tmp_assets/2_002.jpg') }}" class="jarallax-img" alt="" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 1920px; height: 882.9px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 19.55px; transform: translate3d(0px, -19.55px, 0px);"></div></section>
                    <section class="pt40 pb40 bg-color text-light" style="background-size: cover;">
                        <div class="container" style="background-size: cover;">
                            <div class="row align-items-center" style="background-size: cover;">
                                <div class="col-md-8 mb-sm-30 text-lg-start text-sm-center" style="background-size: cover;">
                                    <h3 class="no-bottom">Did someone from our firm contact you about a case?</h3>
                                </div>
                                <div class="col-md-4 text-lg-end rtl-lg-start text-sm-center" style="background-size: cover;">
                                    <a href="#lookupAccount" class="btn-custom btn-black light">LOOKUP CASE INFORMATION</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-highlight" class="relative" data-bgcolor="#f2f2f2" style="background-color: rgb(242, 242, 242); background-size: cover;">
                        <div class="container" style="background-size: cover;">
                            <div class="row align-items-center" style="background-size: cover;">
                                <div class="col-md-4" style="background-size: cover;">
                                    <h2>
                                        Integrity.<br>Reputation. Results.
                                    </h2>
                                    <div class="small-border sm-left" style="background-size: cover;"></div>
                                </div>
                                <div class="col-md-8" style="background-size: cover;">
                                    <p>Our firm specializes personal and 
                                        commercial asset retention and recovery. If you were contacted by 
                                        someone from our firm, please use the lookup form above to get more 
                                        information about your case. Alternatively, you are welcome to call into
                                    our offices to speak to a legal representative about your case.</p>
                                </div>
                            </div>
                            <div class="spacer-double" style="background-size: cover;"></div>
                        </div>
                    </section>
                    <section class="no-top relative z1000" style="background-size: cover;">
                        <div class="container" style="background-size: cover;">
                            <div class="row mt-100" style="background-size: cover;">
                                <div class="col-md-4 wow fadeInRight animated" data-wow-delay=".2s" style="background-size: cover; visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    <div class="mask" style="background-size: cover;">
                                        <div class="cover" style="background-size: cover;">
                                            <div class="c-inner" style="background-size: cover;">
                                                <h3><i class="icofont-building"></i><span>Commercial Recovery</span></h3>
                                            </div>
                                        </div>
                                        <img src="{{ asset('tmp_assets/1.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-4 wow fadeInRight animated" data-wow-delay=".4s" style="background-size: cover; visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <div class="mask" style="background-size: cover;">
                                        <div class="cover" style="background-size: cover;">
                                            <div class="c-inner" style="background-size: cover;">
                                                <h3><i class="icofont-shopping-cart"></i><span>Small Business</span></h3>
                                            </div>
                                        </div>
                                        <img src="{{ asset('tmp_assets/2.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-4 wow fadeInRight animated" data-wow-delay=".6s" style="background-size: cover; visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                                    <div class="mask" style="background-size: cover;">
                                        <div class="cover" style="background-size: cover;">
                                            <div class="c-inner" style="background-size: cover;">
                                                <h3><i class="icofont-law-order"></i><span>Judgement Offers &amp; Demands</span></h3>
                                            </div>
                                        </div>
                                        <img src="{{ asset('tmp_assets/3.jpg') }}" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="section-practice-areas" style="background-size: cover;">
                        <div class="container" style="background-size: cover;">
                            <div class="row" style="background-size: cover;">
                                <div class="col-lg-12" style="background-size: cover;">
                                    <div class="text-center" style="background-size: cover;">
                                        <h2>Practice Areas</h2>
                                        <div class="small-border" style="background-size: cover;"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3 text-center" style="background-size: cover;">
                                    <p>We practice law in the following areas. 
                                        If you or someone you know is dealing with hardships or potential 
                                        litigation that falls under these categories, please reach out to our 
                                    team to see if we can help you!</p>
                                </div>
                                <div class="spacer-single" style="background-size: cover;"></div>
                                <div class="col-md-4" style="background-size: cover;">
                                    <ul class="ul-style-2 wow fadeInRight animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                        <li>Corporate and M&amp;A</li>
                                        <li>Real Estate / Construction</li>
                                        <li>Dispute Resolution</li>
                                        <li>Mediation</li>
                                    </ul>
                                </div>
                                <div class="col-md-4" style="background-size: cover;">
                                    <ul class="ul-style-2 wow fadeInRight animated" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                        <li>Investment Disputes</li>
                                        <li>Reposession Defense</li>
                                        <li>Commercial Litigation</li>
                                        <li>Intellectual Property Rights</li>
                                    </ul>
                                </div>
                                <div class="col-md-4" style="background-size: cover;">
                                    <ul class="ul-style-2 wow fadeInRight animated" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                                        <li>Bankruptcy</li>
                                        <li>Chapter 7</li>
                                        <li>Lawsuit Defense</li>
                                        <li>Credit Discrimination</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <a href="#" id="back-to-top" class="show hide"></a>

                <footer>
                    <div class="container" style="background-size: cover;">
                        <div class="row" style="background-size: cover;">
                            <div class="col-lg-4" style="background-size: cover;">
                                <div class="widget" style="background-size: cover;">
                                    <a href="{{ url('/') }}index.html"><img alt="" class="img-fluid mb20" src="{{ asset('tmp_assets/logo.png') }}" style="max-width: 250px"></a>
                                    <address class="s1">
                                        <span><i class="id-color fa fa-map-marker fa-lg"></i>1299 Ocean Ave Santa Monica, CA 90401</span>
                                        <span><i class="id-color fa fa-phone fa-lg"></i>(877) 375-5986</span>
                                        <span><i class="id-color fa fa-envelope-o fa-lg"></i><a href="mailto:contact@dmslegalteam.com">contact@dmslegalteam.com</a></span>
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-4" style="background-size: cover;">
                                <h5 class="id-color mb20">Practice Areas</h5>
                                <ul class="ul-style-2">
                                    <li>Corporate and M&amp;A</li>
                                    <li>Real Estate / Construction</li>
                                    <li>Dispute Resolution</li>
                                    <li>Mediation</li>
                                    <li>Reposession Defense</li>
                                </ul>
                            </div>
                            <div class="col-lg-4" style="background-size: cover;">
                                <div class="widget" style="background-size: cover;">
                                    <h5 class="id-color">Lookup Your Case</h5>
                                    <p>We occasionally reach out to consumers 
                                        who have a pending legal matter with our office. If you received a call 
                                        from us, please lookup your case information by clicking the button 
                                    below.</p>
                                    <a href="#lookupAccount" class="btn btn-md btn-secondary">Lookup Case Information</a>
                                    <div class="spacer-10" style="background-size: cover;"></div>
                                    <small>Your email is safe with us. We don't spam.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subfooter" style="background-size: cover;">
                        <div class="container" style="background-size: cover;">
                            <div class="row g-4 align-items-center" style="background-size: cover;">
                                <div class="col-lg-6" style="background-size: cover;">
                                    © Copyright 2024 - DMS Legal Team
                                </div>
                                <div class="col-lg-6 text-lg-end" style="background-size: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <div id="preloader" style="background-size: cover; display: none;">
                    <div class="spinner" style="background-size: cover;">
                        <div class="bounce1" style="background-size: cover;"></div>
                        <div class="bounce2" style="background-size: cover;"></div>
                        <div class="bounce3" style="background-size: cover;"></div>
                    </div>
                </div>
            </div>
            <script src="{{ asset('tmp_assets/jquery.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/bootstrap.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/wow.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/jquery.mask.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/jquery.isotope.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/easing.js') }}"></script>
            <script src="{{ asset('tmp_assets/owl.carousel.js') }}"></script>
            <script src="{{ asset('tmp_assets/validation.js') }}"></script>
            <script src="{{ asset('tmp_assets/jquery.magnific-popup.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/enquire.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/jquery.stellar.min.js') }}"></script>
            <script src="{{ asset('tmp_assets/jquery.plugin.js') }}"></script>
            <script src="{{ asset('tmp_assets/typed.js') }}"></script>
            <script src="{{ asset('tmp_assets/jarallax.js') }}"></script>
            <script src="{{ asset('tmp_assets/jquery.countTo.js') }}"></script>
            <script src="{{ asset('tmp_assets/jquery.countdown.js') }}"></script>
            <script src="{{ asset('tmp_assets/typed.js') }}"></script>
            <script src="{{ asset('tmp_assets/jarallax.js') }}"></script>
            <script src="{{ asset('tmp_assets/designesia.js') }}"></script>
            <script>
                $('.ph').mask('(000) 000-0000');
            </script>


            <div style="position: absolute !important; top: 0px !important; left: 0px !important; height: 0px !important; width: 0px !important;" data-lastpass-root=""></div></body></html>