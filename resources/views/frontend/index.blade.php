@extends('frontend.master')
@section('content')
    <!-- ===================================================
                        Herro part Start
    =====================================================-->
    <div id="ts-hero" class="ts-animate-hero-items">
        <div class="container position-relative h-100 ts-align__vertical">
            <div class="row w-100">
                <div class="col-md-8">
                    <figure class="ts-social-icons mb-4">
                        <a href="#" class="mr-3"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-pinterest"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-slack"></i></a>
                        <a href="#" class="mr-3"><i class="fab fa-instagram"></i></a>
                    </figure>
                    <h1>I am Sajib Mia</h1>
                    <h1 class="ts-bubble-border">
                        <span class="ts-title-rotate">
                            <span class="active">Web Designer</span>
                            <span>Web Developer</span>
                            <span>Creative Person</span>
                        </span>
                    </h1>
                </div>
            </div>

            <a href="#my-services" class="ts-btn-effect position-absolute ts-bottom__0 ts-left__0 ts-scroll ml-3 mb-3">
                <span class="ts-visible ts-circle__sm rounded-0 ts-bg-primary">
                    <i class="fa fa-arrow-down text-white"></i>
                </span>
                <span class="ts-hidden ts-circle__sm rounded-0">
                    <i class="fa fa-arrow-down text-white"></i>
                </span>
            </a>
        </div>
        <div class="ts-background">
            <div class="ts-background-image" data-bg-image="{{ asset('frontend') }}/img/banner5.jpg"></div>
        </div>
        <div class="banner_image">
            <img src="{{ asset('frontend') }}/img/me.jpg" alt="me.jpg">
        </div>
    </div>
    <!-- ===================================================
                        Herro part End
    =====================================================-->
    <main id="ts-content">
        <!-- ===================================================
                        Service part Start
        =====================================================-->
        <section id="my-services" class="ts-block ts-xs-text-center pb-0">
            <div class="container">
                <div class="ts-title text-center">
                    <h2>{{ __('My Services') }}</h2>
                </div>
                <div class="row">
                    @forelse ( $services as $service )
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="ts-item" data-animate="ts-fadeInUp">
                            <div class="ts-item-content">
                                <div class="ts-item-header service-call">
                                    <figure class="icon">
                                        <img src="{{ asset('uploads/service') }}/{{ $service->icon }}" width="60" alt="web-design.png">
                                    </figure>
                                </div>
                                <div class="ts-item-body">
                                    <h4>{{ $service->service_name }}</h4>
                                    <p class="mb-0"> {{ $service->service_short_description }}</p>
                                </div>
                                <!--end ts-item-body-->
                                <div class="ts-item-footer">
                                    <a href="#" data-toggle="modal" data-target="#modal" class="ts-link-arrow-effect">
                                        <span>{{ ('Read More') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p>Service is Empty</p>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- ===================================================
                        Service part End
        =====================================================-->
        <!-- ===================================================
                        About part Start
        =====================================================-->
        <section id="about-me" class="ts-block pb-4">
            <div class="container">
                <div class="ts-title text-center">
                    <h2>About Me</h2>
                </div>
                <div class="row ts-align__vertical">
                    <div class="col-md-6">
                        <img src="{{ asset('frontend') }}/img/me.jpg" alt="" class="mw-100 mb-5">
                    </div>

                    <div class="col-md-6">
                        <h4 class="ts-bubble-border">Hi There</h4>
                        <p>
                            Hi There, My name is Sajib Mia. I am an experienced web design & Development. I am an expert to design/development landing pages and Multi pages/web pages,Email templates, I have more then 2+ years of experience in HTML, CSS, JavaScript, JQUEREE, Bootstrap, Materialize, SASS, PHP, Laravel and many more. I am professional enough to understand your requirement and provide an amazing output. I always first priority is client's 100% Satisfaction.
                        </p>
                        <dl class="ts-column-count-2">
                            <dt>Name:</dt>
                            <dd>Sajib Mia</dd>
                            <dt>Phone:</dt>
                            <dd>+088 01304460275</dd>
                            <dt>Email:</dt>
                            <dd>sajib03.dev@gmail.com</dd>
                            <dt>Twitter:</dt>
                            <dd>Sajib Mia</dd>
                        </dl>
                        <hr class="ts-hr-light mb-5">
                        <a href="#contact" class="ts-btn-effect mr-2">
                            <span class="ts-visible btn btn-primary ts-btn-arrow">Contact Me</span>
                            <span class="ts-hidden btn btn-primary ts-btn-arrow" data-bg-color="#d44729">Contact Me</span>
                        </a>
                        <a href="{{ asset('uploads/admin/Sajib Mia (Laravel web developer) .pdf') }}" target="_blank" class="ts-btn-effect mr-2">
                            <span class="ts-visible btn btn-outline-light">
                                <i class="fa fa-download small mr-2"></i>
                                Download CV
                            </span>
                            <span class="ts-hidden btn btn-light bg-white">
                                <i class="fa fa-download small mr-2"></i>
                                Download CV
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===================================================
                        About part End
        =====================================================-->
        <!-- ===================================================
                        Block part Start
        =====================================================-->
        <section class="ts-block">
            <div class="container">
                <div class="text-center px-5 pt-5 position-relative">
                    <h3 class="my-3">
                        Let’s Work Together On Your Next Project!
                    </h3>
                    <a href="#contact" class="btn btn-primary mr-2 ts-push-down__50 ts-has-talk-arrow">Hire Me Now!</a>
                    <div class="ts-background ts-opacity__20" data-bg-image="{{ asset('frontend') }}/img/bg-keyboard.jpg"></div>
                </div>
            </div>
        </section>
        <!-- ===================================================
                        Block part End
        =====================================================-->
        <!-- ===================================================
                        My Skill part Start
        =====================================================-->
        <section id="my-skills" class="ts-block pb-5">
            <div class="container">
                <div class="ts-title text-center">
                    <h2>My Skills</h2>
                </div>
                <h4>Every Day is a  New Challenge</h4>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Curating a consistent and easily maintainable web development process is one of the biggest challenges that businesses face. Some companies are unable to follow a standard roadmap and end up making losses. They often experiment with different approaches, which can meet their requirements for the short term but are bound to introduce unpredictable vulnerabilities in the future. This increases the time-to-market and makes maintenance activities more complex and time-consuming. 
                        </p>
                        <p>
                            Many companies focus on micromanagement rather than optimizing their development stages. They make undefined strategies to accelerate the process but fail to notice its negative impact. This leads to many web development problems that need regular pivoting and iteration. 
                        </p>
                        <a href="#contact" class="btn btn-outline-light mb-5">Contact Me</a>
                    </div>

                    <div class="col-md-6">
                        <div class="progress" data-progress-width="90%">
                            <h5 class="ts-progress-title">PHP</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" data-progress-width="100%">
                            <h5 class="ts-progress-title">Laravel</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" data-progress-width="70%">
                            <h5 class="ts-progress-title">OOP</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" data-progress-width="100%">
                            <h5 class="ts-progress-title">Web-design</h5>
                            <figure class="ts-progress-value"></figure>
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===================================================
                        My Skill part End
        =====================================================-->
        <!-- ===================================================
                        Portfolio part Start
        =====================================================-->
        <section class="ts-block pb-5" id="portfolio">
            <div class="container">
                <div class="ts-title">
                    <h2>Portfolio</h2>
                </div>
                <div class="card-columns ts-gallery ts-column-count-4">
                    <a href="{{ asset('frontend') }}/img/hancok.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__item-description">
                            <h6 class="ts-opacity__50">Branding</h6>
                            <h4>Honkok</h4>
                        </div>
                        <img src="{{ asset('frontend') }}/img/game.jpg" class="card-img" alt="game.jpg">
                    </a>

                    <a href="{{ asset('frontend') }}/img/wolmart.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Webdesign</h6>
                                <h4>woolmart</h4>
                            </div>
                            <img src="{{ asset('frontend') }}/img/woolmat.jpg" class="card-img" alt="woolmat.jpg">
                        </div>
                    </a>

                    <a href="{{ asset('frontend') }}/img/ecomerch.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <img src="{{ asset('frontend') }}/img/eCommerch.jpg" class="card-img" alt="eCommerch.jpg">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Typography</h6>
                                <h4>E-commerch</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('frontend') }}/img/holmart.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <img src="{{ asset('frontend') }}/img/holomber.jpg" class="card-img" alt="holomber.jpg">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Identity</h6>
                                <h4>Holomber</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('frontend') }}/img/hunt.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <img src="{{ asset('frontend') }}/img/hunt.jpg" class="card-img" alt="hunt.jpg">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Coding</h6>
                                <h4>Hant</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('frontend') }}/img/agency.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <img src="{{ asset('frontend') }}/img/agency.jpg" class="card-img" alt="agency.jpg">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Webdesign</h6>
                                <h4>Agency</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('frontend') }}/img/constaction.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <img src="{{ asset('frontend') }}/img/constaction.jpg" class="card-img" alt="constaction.jpg">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Experiment</h6>
                                <h4>Constraction</h4>
                            </div>
                        </div>
                    </a>

                    <a href="{{ asset('frontend') }}/img/personal_04.png" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
                        <div class="ts-gallery__image">
                            <img src="{{ asset('frontend') }}/img/portfolio.jpg" class="card-img" target="_blank" alt="portfolio.jpg">
                            <div class="ts-gallery__item-description">
                                <h6 class="ts-opacity__50">Product Design</h6>
                                <h4>potfolio</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- ===================================================
                        Portfolio part End
        =====================================================-->
        <!-- ===================================================
                        block part Start
        =====================================================-->
        <section class="ts-block" data-bg-image="{{ asset('frontend') }}/img/banner.jpg" style="background: no-repeat center/cover;">
            <div class="container ts-promo-numbers">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="{{ $works->clients }}">0</figure>
                            <h5>{{ __('Clients') }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="{{ $works->projects }}"> 0</figure>
                            <h5>{{ __('Projects') }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="{{ $works->awards }}">0</figure>
                            <h5>{{ __('Awards') }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="ts-promo-number text-center">
                            <figure class="odometer" data-odometer-final="{{ $works->experience }}">0</figure>
                            <h5>{{ __('Years Experience') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===================================================
                        block part End
        =====================================================-->
        <!-- ===================================================
                        testimonial part Start
        =====================================================-->
        <section id="testimonials" class="ts-block text-center pb-5">
            <div class="container">
                <div class="ts-title">
                    <h2>Testimonials</h2>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="owl-carousel" data-owl-dots="1" data-owl-loop="1" data-animate="ts-fadeInUp">
                            <div class="slide mb-5">
                                <figure class="d-inline-block p-3 ts-bg-primary text-white ts-has-talk-arrow">
                                    <i class="fa fa-quote-right"></i>
                                </figure>
                                <p class="ts-h5">
                                    The service is smooth and straightforward. My advisor was helpful. I would recommend deal direct.
                                </p>
                                <div class="ts-circle__lg mb-3" data-bg-image="{{ asset('frontend') }}/img/testi2.jpg"></div>
                                <h5>Jane Doe</h5>
                                <h6 class="ts-opacity__40">Bristol Creative</h6>
                            </div>
                            <div class="slide mb-5">
                                <figure class="d-inline-block p-3 ts-bg-primary text-white ts-has-talk-arrow">
                                    <i class="fa fa-quote-right"></i>
                                </figure>
                                <p class="ts-h5">
                                    A fantastic organisation! Great cutomer support from beginning to end of the process. The team are really informed and go the extra mile at every stage. I would recommend them unreservedly.
                                </p>
                                <div class="ts-circle__lg mb-3" data-bg-image="{{ asset('frontend') }}/img/testi1.jpg"></div>
                                <h5>John Brown</h5>
                                <h6 class="ts-opacity__40">ABC Architects</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===================================================
                        testimonial part End
        =====================================================-->
        <!-- ===================================================
                        parrents part Start
        =====================================================-->
        <section id="partners" class="ts-block py-4">
            <div class="container">
                <div class="d-block d-md-flex justify-content-between align-items-center text-center ts-partners py-3">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/t-1.jpg" alt="t-1.jpg">
                    </a>
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/t_02.png" alt="t-2.jpg">
                    </a>
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/t-3.jpg" alt="t-3.jpg">
                    </a>
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/t-4.jpg" alt="t-4.jpg">
                    </a>
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/t-5.jpg" alt="t-5.jpg">
                    </a>
                </div>
            </div>
        </section>
        <!-- ===================================================
                        parrents part End
        =====================================================-->
    </main>
    <!-- ===================================================
                   Modal part start
    =====================================================-->
    <div class="modal fade text-dark" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content border-0 rounded-0">
                <div class="modal-header bg-light px-5 pt-0 pb-5">
                    <div class="ts-title mb-0">
                        <figure class="ts-circle__md bg-dark rounded-0">
                            <img src="{{ asset('uploads/admin/65e2e78e42bca.jpg') }}" alt="work-detail-04.jpg">
                        </figure>
                        <h4 class="mb-0">{{ __('Full Stack Developer') }}</h4>
                    </div>

                    <button type="button" class="close position-absolute ts-top__0 ts-right__0 m-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>

                <div class="modal-body p-5">
                    <h5 class="mb-4">{{ __('Latest Works') }}</h5>
                    <div class="owl-carousel" data-owl-dots="1">
                        @foreach ( $model_services as $model_service )
                        <div class="slide">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('uploads/service') }}/{{ $model_service->image }}" alt="work-detail-01.jpg">
                                    </div>
                                    <div class="col-md-8">
                                        <h4 class="mb-3">{{ $model_service->service_name }}</h4>
                                        <p>
                                            {{ $model_service->service_description }}
                                        </p>
                                        <a href="{{ $model_service->service_link }}" class="mb-4 text-dark d-block">
                                            <i class="fa fa-globe ts-opacity__50 mr-2"></i>
                                            https://{{ $model_service->service_name }}
                                        </a>
                                        <hr>
                                        <h6>{{ __('Services Included') }}</h6>
                                        @php
                                        $after_exploads = explode(',',$model_service->service_list)
                                        @endphp
                                        <ul class="list-unstyled ts-opacity__50">
                                            @foreach ( $after_exploads as $list )
                                                <li>{{ App\Models\ServiceList::find($list)->service_name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================================
                    Modal part End
    =====================================================-->
@endsection