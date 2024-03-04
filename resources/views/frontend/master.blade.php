
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/odometer-theme-default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
	<title>sajib - Personal Portfolio Template</title>

</head>
<body data-spy="scroll" data-target=".navbar" class="has-loading-screen">

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/65e5b0f29131ed19d974b886/1ho4jmd1q';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
        <!--End of Tawk.to Script-->
        <div class="ts-page-wrapper" id="page-top">
        <!-- ===================================================
                        Navber part start
        =====================================================-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
            <div class="container">
                <a class="navbar-brand ts-push-down__50 position-absolute ts-bottom__0 bg-white pb-0 ts-z-index__1 ts-scroll" href="#page-top">
                    <img src="{{ asset('frontend') }}/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav d-block d-lg-flex ml-auto text-right">
                        <a class="nav-item nav-link active ts-scroll" href="#page-top">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link ts-scroll" href="#my-services">Services</a>
                        <a class="nav-item nav-link ts-scroll" href="#about-me">About Me</a>
                        <a class="nav-item nav-link ts-scroll" href="#my-skills">Skills</a>
                        <a class="nav-item nav-link ts-scroll" href="#portfolio">Portfolio</a>
                        <a class="nav-item nav-link ts-scroll" href="#testimonials">Clients</a>
                        <a class="nav-item nav-link ts-scroll mr-2" href="#form-contact">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ===================================================
                            Navber part End
        =====================================================-->
        @yield('content')
        <!-- ===================================================
                            footer part start
        =====================================================-->
        <footer id="ts-footer" class="mt-5">

            <section id="contact" class="ts-block ts-separate-bg-element" data-bg-image="{{ asset('frontend') }}/img/bg-man-wall.jpg" data-bg-image-opacity=".1">
                <div class="container">
                    <div class="ts-title text-center">
                        <h2 class="ts-bubble-border">Get In Touch</h2>
                    </div>
                    <div class="row ts-xs-text-center ">
                        <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp">
                            <img src="{{ asset('frontend') }}/img/address.png" width="40" alt="address.png">
                            <h5 class="mt-2">Address</h5>
                            <div class="ts-opacity__50">
                                <figure class="mb-0">Board Bazar,</figure>
                                <figure>Gazipur,Dhaka </figure>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".1s">
                            <img src="{{ asset('frontend') }}/img/phone-call.png" width="40" alt="address.png">
                            <h5 class="mt-2">Phone</h5>
                            <div class="ts-opacity__50">
                                <figure class="mb-0">+880 1304460275</figure>
                                <figure>+880 01875023059</figure>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".2s">
                            <img src="{{ asset('frontend') }}/img/email.png" width="40" alt="address.png">
                            <h5 class="mt-2">Email</h5>
                            <div class="ts-opacity__50">
                                <figure class="mb-0">sajib03.dev@gmail.com</figure>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".3s">
                            <img src="{{ asset('frontend') }}/img/facebook_cat.png" width="40" alt="address.png">
                            <h5 class="mt-2">Facebook Chat</h5>
                            <div class="ts-opacity__50">
                                <figure>Sajib Mia</figure>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Let’s Connect</h3>
                                <div class="ts-column-count-sm-2">
                                    <a href="https://www.facebook.com/Sajibdev4858/" target="_blank" class="mb-3 d-flex text-white ts-align__vertical">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4">
                                        <i class="fab fa-facebook-f"></i>
                                    </span>
                                        <span>{{ __('Facebook') }}</span>
                                    </a>
                                    <a href="https://twitter.com/Sajib03Dev" target="_blank" class="mb-3 d-flex text-white ts-align__vertical">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4">
                                        <i class="fab fa-twitter"></i>
                                    </span>
                                        <span>{{ __('Twitter') }}</span>
                                    </a>
                                    <a href="https://www.instagram.com/sajib_dev4858/" target="_blank" class="mb-3 d-flex text-white ts-align__vertical">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4">
                                        <i class="fab fa-instagram"></i>
                                    </span>
                                        <span>{{ __('Instagram') }}</span>
                                    </a>
                                    <a href="https://www.pinterest.com/sajib03dev/" target="_blank" class="mb-3 d-flex text-white ts-align__vertical">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4">
                                        <i class="fab fa-pinterest-p"></i>
                                    </span>
                                        <span>{{ __('Pinterest') }}</span>
                                    </a>
                                    <a href="https://join.skype.com/invite/yKaZyC8ioA4t" target="_blank" class="mb-3 d-flex text-white ts-align__vertical">
                                    <span class="ts-circle__xs border border-white ts-border-light mr-4">
                                        <i class="fab fa-skype"></i>
                                    </span>
                                        <span>Skype</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h3>Send Me a Message</h3>
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <form action="{{ route('contact') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="">{{ __('Name *') }}</label>
                                                <input type="text" class="form-control" id="" name="name" placeholder="Name">
                                            </div>
                                            @error('name')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="">{{ __('Email *') }}</label>
                                                <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        @error('email')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">{{ __('Subject *') }}</label>
                                        <input type="text" class="form-control" id="" name="subject" placeholder="Subject" required>
                                    </div>
                                    @error('subject')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">{{ __('Message *') }}</label>
                                                <textarea class="form-control" id="" rows="5" name="message" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @error('message')
                                        <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                    <div class="form-group clearfix">
                                        <button type="submit" class="btn btn-primary float-right ts-btn-arrow">{{ __('Send a Message') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-dark bg-white">
                <div class="container py-3 position-relative text-center">
                    <small>&copy; {{ carbon\carbon::now()->format('Y') }}, All Rights are Reserved. Design By Sajib Mia</small>
                    <a href="#page-top" class="ts-circle__xs rounded-0 bg-dark position-absolute ts-right__0 ts-top__0 ts-push-up__50 ts-scroll">
                        <i class="fa fa-arrow-up text-white"></i>
                    </a>
                </div>
            </div>

        </footer>
        <!-- ===================================================
                            footer part End
        =====================================================-->
    </div>

{{-- <!-- ===================================================
                   Modal part start
=====================================================-->
<div class="modal fade text-dark" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0 rounded-0">
            <div class="modal-header bg-light px-5 pt-0 pb-5">
                <div class="ts-title mb-0">
                    <figure class="ts-circle__md bg-dark rounded-0">
                        <img src="{{ asset('frontend') }}/img/work-detail-07.jpg" alt="work-detail-04.jpg">
                    </figure>
                    <h4 class="mb-0">Web Design</h4>
                </div>

                <button type="button" class="close position-absolute ts-top__0 ts-right__0 m-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>

            <div class="modal-body p-5">
                <h5 class="mb-4">Latest Works</h5>
                <div class="owl-carousel" data-owl-dots="1">
                    <div class="slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('frontend') }}/img/work-detail-01.jpg" alt="work-detail-01.jpg">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="mb-3">Creative Lights</h4>
                                    <p>
                                        Are you looking to make a website? Starting a website can be a terrifying thought specially when you’re not techy. Don’t worry, you’re not alone. Having helped over 130,000+ people make a website with PHP Laravel, we have decided to create the most comprehensive step by step guide on how to a make a website without learning how to code.
                                    </p>
                                    <a href="#" class="mb-4 text-dark d-block">
                                        <i class="fa fa-globe ts-opacity__50 mr-2"></i>
                                        https://github.com/Sajib-dev1
                                    </a>
                                    <hr>
                                    <h6>Services Included</h6>
                                    <ul class="list-unstyled ts-opacity__50">
                                        <li>Design</li>
                                        <li>Coding</li>
                                        <li>SEO Optimization</li>
                                        <li>Hosting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('frontend') }}/img/work-detail-03.jpg" alt="work-detail-03.jpg">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="mb-3">Wood Ceiling</h4>
                                    <p>
                                        A Web Developer, or Website Developer, is responsible for using their knowledge of programming languages to code websites and web applications. Their duties include communicating with clients to determine their needs and design preferences, creating code for the front and back-end of a website and running tests to ensure that they used the correct code strings.
                                    </p>
                                    <a href="#" class="mb-4 text-dark d-block">
                                        <i class="fa fa-globe ts-opacity__50 mr-2"></i>
                                        https://github.com/Sajib-dev1
                                    </a>
                                    <hr>
                                    <h6>Services Included</h6>
                                    <ul class="list-unstyled ts-opacity__50">
                                        <li>Design</li>
                                        <li>Coding</li>
                                        <li>SEO Optimization</li>
                                        <li>Hosting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===================================================
                   Modal part End
=====================================================--> --}}
<!-- ===================================================
                   Js all link start
=====================================================-->
<script src="{{ asset('frontend') }}/js/custom.hero.js"></script>
<script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('frontend') }}/js/popper.min.js"></script>
<script src="{{ asset('frontend') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('frontend') }}/js/isInViewport.jquery.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend') }}/js/scrolla.jquery.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery.validate.min.js"></script>
<script src="{{ asset('frontend') }}/js/jquery-validate.bootstrap-tooltip.min.js"></script>
<script src="{{ asset('frontend') }}/js/odometer.min.js"></script>
<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/js/custom.js"></script>

</body>
</html>