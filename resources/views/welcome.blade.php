<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'colorPrimary': '#db253b', 'colorSecondary': '#ecf1f7', 'colorTertiary': '#403f3d', 'colorQuaternary': '#1f1e1c'}">

<!-- Mirrored from www.okler.net/previews/porto/8.2.0/demo-resume-red.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 18:12:58 GMT -->
<head>
@php
  $seo=App\Seo::first();
@endphp
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ $seo->meta_title }}</title>
<meta name="keywords" content="HTML5 Template" />
<meta name="{{ $seo->meta_description  }}" content="Porto - Responsive HTML5 Template">
<meta name="meta_author" content="{{ $seo->meta_author }}">
<meta name="meta_description" content="{{ $seo->meta_description }}">

<link rel="shortcut icon" href="{{ asset($seo->meta_icon) }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="https://www.okler.net/previews/porto/8.2.0/img/apple-touch-icon.png">

<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/vendor/bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/vendor/fontawesome-free/css/all.min.css"> 
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/vendor/animate/animate.compat.css"> 
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/vendor/simple-line-icons/css/simple-line-icons.min.css"> 
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/vendor/owl.carousel/assets/owl.carousel.min.css"> <link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/vendor/owl.carousel/assets/owl.theme.default.min.css"> 
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/vendor/magnific-popup/magnific-popup.min.css">

<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/css/theme.css">
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/css/theme-elements.css">
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/css/theme-blog.css">
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/css/theme-shop.css">
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/css/demos/demo-resume.css">  
<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/css/skins/skin-resume-red.css"> 
<script src="https://www.okler.net/previews/porto/8.2.0/master/style-switcher/style.switcher.localstorage.js"></script>
<link rel="stylesheet" href="{{asset('public/frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/frontend/vendor/animate/animate.compat.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/vendor/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="https://www.okler.net/previews/porto/8.2.0/css/custom.css">

<script src="https://www.okler.net/previews/porto/8.2.0/vendor/modernizr/modernizr.min.js"></script>
</head>
<body data-spy="scroll" data-target=".wrapper-spy">
<div class="body">
<header id="header" class="header-floating-icons" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
<div class="header-body bg-transparent">
<div class="header-container container">
<div class="header-row">
<div class="header-column">
<div class="header-row">
<div class="header-nav pt-1">
<div class="header-nav-main">
<nav class="wrapper-spy collapse">
<ul class="nav" id="mainNav">
<li>
<a data-hash href="#about-me" class="nav-link text-color-dark bg-color-primary">
<i class="icon-home icons"></i>
<span class="custom-tooltip text-color-dark">About Me</span>
</a>
</li>
<li>
<a data-hash href="#experience" class="nav-link text-color-dark bg-color-primary">
<i class="icon-eye icons"></i>
<span class="custom-tooltip text-color-dark">Experience</span>
</a>
</li>
<li>
<a data-hash href="#education" class="nav-link text-color-dark bg-color-primary">
<i class="icon-graduation icons"></i>
<span class="custom-tooltip text-color-dark">Education</span>
</a>
</li>
<li>
<a data-hash href="#skills" class="nav-link text-color-dark bg-color-primary">
<i class="icon-briefcase icons"></i>
<span class="custom-tooltip text-color-dark">Skills</span>
</a>
</li>
<li>
<a data-hash href="#portfolio" class="nav-link text-color-dark bg-color-primary">
<i class="icon-diamond icons"></i>
<span class="custom-tooltip text-color-dark">Portfolio</span>
</a>
</li>
<li>
<a data-hash href="#recommendations" class="nav-link text-color-dark bg-color-primary">
<i class="icon-pencil icons"></i>
<span class="custom-tooltip text-color-dark">Recommendations</span>
</a>
</li>
{{-- <li>
<a data-hash href="#blog" class="nav-link text-color-dark bg-color-primary">
<i class="icon-bubbles icons"></i>
<span class="custom-tooltip text-color-dark">Blog</span>
</a>
</li> --}}
<li>
<a data-hash href="#say-hello" class="nav-link text-color-dark bg-color-primary">
<i class="icon-envelope-open icons"></i>
<span class="custom-tooltip text-color-dark">Say Hello</span>
</a>
</li>
</ul>
</nav>
</div>
<button class="btn header-btn-collapse-nav text-color-light border-radius-0" data-toggle="collapse" data-target=".header-nav-main nav">
<i class="fas fa-bars"></i>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</header>
<div role="main" class="main">
<section id="about-me" class="section section-no-border section-parallax bg-transparent custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/demos/resume/about-me/about-me-bg-1.jpg">
<div class="container">
<div class="row">
@php
    $user=App\Profile::first();
@endphp
<div class="col-lg-4 custom-sm-margin-bottom-1">
<img src="{{ asset($user->image) }}" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
</div>
<div class="col-lg-6 col-xl-5">
<h1 class="text-color-primary custom-font-size-1">{{ $user->name }}</h1>
<p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">Chief Product Officer at Okler Themes</p>
<span class="custom-about-me-infos">
<span class="custom-text-color-1 text-uppercase">{{ $user->address }}</span>
<span class="custom-text-color-1 text-uppercase mb-3">{{ $user->company_name }}</span>
<span class="custom-text-color-1 text-uppercase">
<strong class="text-color-light">Previous: </strong>
{{ $user->designation }}
<a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
</span>
<span class="custom-text-color-1 text-uppercase">
<strong class="text-color-light">Education: </strong>
Education 
<a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
</span>
</span>
</div>
<div class="col-lg-2 col-xl-3 d-none d-lg-block">
<img src="https://www.okler.net/previews/porto/8.2.0/img/demos/resume/about-me/mouse.png" custom-anim class="img-fluid custom-image-pos-1" alt />
</div>
</div>
</div>
<ul class="social-icons custom-social-icons">
<li class="social-icons-facebook">
<a href="{{ $user->facebook }}" target="_blank" title="Facebook">
<i class="fab fa-facebook-f"></i>
</a>
</li>
<li class="social-icons-instagram">
<a href="{{ $user->instagram }}" target="_blank" title="Instagram" style="background: red;">
<i class="fab fa-instagram"></i>
</a>
</li>
<li class="social-icons-linkedin">
<a href="{{ $user->linkdin }}" target="_blank" title="Linkedin" style="background: #1A81B9;">
<i class="fab fa-linkedin"></i>
</a>
</li>
</ul>
</section>
<div class="custom-about-me-links bg-color-light">
<div class="container">
<div class="row justify-content-end">
<div class="col-lg-3 text-center custom-xs-border-bottom p-0">
<a data-hash href="#say-hello" class="text-decoration-none">
<span class="custom-nav-button text-color-dark">
<i class="icon-earphones-alt icons text-color-primary"></i>
Contact Information
</span>
</a>
</div>
<div class="col-lg-2 text-center custom-xs-border-bottom p-0">
<a data-hash href="#say-hello" class="text-decoration-none">
<span class="custom-nav-button custom-divisors text-color-dark">
<i class="icon-envelope-open icons text-color-primary"></i>
Send Message
</span>
</a>
</div>
<div class="col-lg-3 text-center p-0">
<a href="{{ url('generate-pdf') }}" class="text-decoration-none">
<span class="custom-nav-button text-color-dark">
<i class="icon-cloud-download icons text-color-primary"></i>
Download Resume
</span>
</a>
</div>
</div>
</div>
</div>
<section class="section section-no-border bg-color-light m-0">
<div class="container">
<div class="row">
<div class="col">
<div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
<h4>Personal Details</h4>
<div class="row">
<div class="col-md-6">
<ul class="custom-list-style-1 p-0 mb-0">
<li>
<span class="text-color-dark">Birthday:</span>
<span class="custom-text-color-2">{{ date("d M Y", strtotime($user->dob)) }}</span>
</li>
<li>
<span class="text-color-dark">Marital:</span>
<span class="custom-text-color-2">{{ $user->marital }}</span>
</li>
<li>
<span class="text-color-dark">Nationality:</span>
<span class="custom-text-color-2">{{ $user->nationality }}</span>
</li>
</ul>
</div>
<div class="col-md-6">
<ul class="custom-list-style-1 p-0 mb-0">
<li>
<span class="text-color-dark">Skype:</span>
<span class="custom-text-color-2"><a class="custom-text-color-2" href="{{ $user->skype }}">{{ $user->skype }}</a></span>
</li>
<li>
<span class="text-color-dark">PHONE:</span>
<span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:{{ $user->phone }}">{{ $user->phone }}</a></span>
</li>
<li>
<span class="text-color-dark">EMAIL:</span>
<span class="custom-text-color-2"><a class="custom-text-color-2" href="{{ $user->email }}"><span style="letter-spacing: -1px;" >{{ $user->email }}</span></a></span>
</li>
</ul>
</div>
</div>
</div>
<h2 class="text-color-dark font-weight-extra-bold text-uppercase">About Me</h2>
<p>{!! Str::limit($user->details,200) !!}.</p>
<div class="about-me-more" id="aboutMeMore">
    {!! substr($user->details, 200) !!}
</div>
<a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">View More</a>
</div>
</div>
</div>
</section>
@php
    $experience=App\Experience::limit(3)->get();
@endphp
<section id="experience" class="section section-secondary section-no-border m-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-color-dark text-uppercase font-weight-extra-bold">Experience</h2>
                <section class="timeline custom-timeline" id="timeline">
                <div class="timeline-body">
                    @foreach($experience as $row)
                    <article class="timeline-box right custom-box-shadow-2">  
                    <div class="row">
                        <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                            <span class="from text-color-light text-uppercase">
                                From
                                <span class="font-weight-semibold">
                                  {{ date("M Y", strtotime($row->start_date)) }}
                                  
                                </span>
                            </span>
                            <span class="to text-color-light text-uppercase">
                                To
                                <span class="font-weight-semibold">{{ date("M Y", strtotime($row->end_date)) }}</span>
                            </span>
                           
                        {{--     <p class="text-color-light">({{ $start->diff($end) }})</p> --}}
                            <span class="company text-color-light font-weight-semibold">
                            {{ $row->company_name }}
                                <span class="company-location text-color-light font-weight-normal text-uppercase">{{ $row->company_ads }}</span>
                            </span>
                        </div>
                        <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                            <h4 class="text-color-dark font-weight-semibold">{{ $row->designation }}</h4>
                            <p class="custom-text-color-2">{!! $row->details !!}</p>
                        </div>
                    </div>
                </article>
                @endforeach
                <div class="timeline-bar"></div>
                </div>
                </section>
            </div>
        </div>
    </div>
</section>
<section id="education" class="section section-no-border bg-color-light m-0">
<div class="container">
<div class="row">
<div class="col">
<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">Education</h2>
<div class="owl-carousel nav-bottom custom-dots-style-1 custom-dots-color-1 custom-dots-color-1-dark mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
@php
    $education=App\Education::limit(2)->get();
@endphp
<div class="row">
        @foreach($education as $row)
    <div class="col-lg-6 col-sm-6 pb-4">
            <div class="custom-box-details-2 bg-color-light custom-box-shadow-3">
            <i class="icon-graduation icons text-color-primary"></i>
            <h4 class="font-weight-semibold text-color-dark m-0">{{ $row->name }}</h4>
            <p class="custom-text-color-2 mb-1">{{ $row->degree }}</p>
            <strong class="text-color-primary">{{ date("Y", strtotime($row->start_date)) }} - {{ date("Y", strtotime($row->end_date)) }}</strong>
        </div>
    </div>
        @endforeach
</div>
@php
    $education1=App\Education::limit(2)->skip(2)->get();
@endphp
<div class="row">
        @foreach($education1 as $row)
    <div class="col-lg-6 col-sm-6 pb-4">
            <div class="custom-box-details-2 bg-color-light custom-box-shadow-3">
            <i class="icon-graduation icons text-color-primary"></i>
            <h4 class="font-weight-semibold text-color-dark m-0">{{ $row->name }}</h4>
            <p class="custom-text-color-2 mb-1">{{ $row->degree }}</p>
            <strong class="text-color-primary">{{ date("Y", strtotime($row->start_date)) }} - {{ date("Y", strtotime($row->end_date)) }}</strong>
        </div>
    </div>
        @endforeach
</div>

</div>
</div>
</div>
</div>
</section>
@php
    $skill=App\Skill::limit(4)->get();
@endphp
<section id="skills" class="section section-no-border bg-color-light m-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-color-dark text-uppercase font-weight-extra-bold">Skills & Language</h2>
                        <div class="progress-bars custom-progress-bars">
                            @foreach($skill as $row)
                            <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
                            <span>{{ $row->name }}</span>
                            </div>
                            <div class="progress mb-2">
                            <div class="progress-bar" data-appear-progress-animation="{{ $row->percent }}%"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
    @php
        $skill1=App\Skill::limit(4)->skip(4)->get();
    @endphp
                    <div class="col-lg-6">
                        <h2 class="text-color-dark text-uppercase font-weight-extra-bold">Skills & Language</h2>
                        <div class="progress-bars custom-progress-bars">
                            @foreach($skill1 as $row)
                            <div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
                            <span>{{ $row->name }}</span>
                            </div>
                            <div class="progress mb-2">
                            <div class="progress-bar" data-appear-progress-animation="{{ $row->percent }}%"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="row">
                <div class="col">
                <div class="custom-box-details bg-color-light custom-box-shadow-1">
                <h4 class="text-color-dark">Languages</h4>
                <ul class="custom-list-style-1 p-0">
                <li>
                <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="https://www.okler.net/previews/porto/8.2.0/img/blank.gif" class="flag flag-us mr-1" alt="English">English:</span>
                <span class="custom-text-color-2">Basic</span>
                </li>
                <li>
                <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="https://www.okler.net/previews/porto/8.2.0/img/blank.gif" class="flag flag-bd mr-1" alt="Spanish">Bangla:</span>
                <span class="custom-text-color-2">Advanced</span>
                </li>
                {{-- <li>
                <span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="https://www.okler.net/previews/porto/8.2.0/img/blank.gif" class="flag flag-fr mr-1" alt="Française">French:</span>
                <span class="custom-text-color-2">Basic</span>
                </li> --}}
                </ul>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@php
    $category=App\Category::orderBy('id','DESC')->get();
    // $category1=App\Category::orderBy('id','DESC')->skip(1)->first();
    // $category2=App\Category::orderBy('id','DESC')->skip(2)->first();
    // $category3=App\Category::orderBy('id','DESC')->skip(3)->first();
@endphp
<section id="portfolio" class="section section-no-border bg-color-secondary m-0">
    <div class="container">
        <div class="row">
            <div class="col">
            <h2 class="text-color-dark font-weight-extra-bold text-uppercase">Portfolio</h2>
            <ul class="nav nav-pills sort-source custom-nav-sort mb-4" data-sort-id="portfolio" data-option-key="filter">
                <li class="nav-item active" data-option-value="category_all"><a class="nav-link active" href="#">Show All</a></li>

                @foreach($category as $row)
                <li class="nav-item" data-option-value="category{{ $row->id }}"><a class="nav-link" href="#">{{ $row->category_name }}</a></li>
                @endforeach
            </ul>
@php
    $product=App\Product::orderBy('id','DESC')->limit(8)->get();
@endphp
            <div class="sort-destination-loader sort-destination-loader-showing">
                <div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                    @foreach($product as $row)
                    
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item category_all">
                        <div class="image-gallery-item mb-4 pb-3">
                            <a href="{{ asset($row->image) }}" class="lightbox-portfolio">
                                <span class="thumb-info custom-thumb-info-1">
                                    <span class="thumb-info-wrapper">
                                        <span class="thumb-info-plus"></span>
                                        <img src="{{ asset($row->image) }}" class="img-fluid" alt="">
                                        <div class="text-center p-1">
                                            <span>{{ $row->code }}</span>
                                        </div>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @php
                    
                    $cat_product=App\Product::orderBy('id','DESC')->limit(8)->get();
                @endphp
                    @foreach($cat_product as $row)
                    <div class="col-12 col-sm-6 col-lg-3 isotope-item category{{ $row->category_id }}">
                        <div class="image-gallery-item mb-4 pb-3">
                            <a href="https://www.okler.net/previews/porto/8.2.0/img/demos/resume/portfolio/portfolio-1.jpg" class="lightbox-portfolio">
                            <span class="thumb-info custom-thumb-info-1">
                                <span class="thumb-info-wrapper">
                                    <span class="thumb-info-plus"></span>
                                    <img src="{{ asset($row->image) }}" class="img-fluid" alt="">
                                    <div class="text-center p-1">
                                        <span>{{ $row->code }}</span>
                                    </div>
                                </span>
                            </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@php
    $recommend=App\Recommend::all();
@endphp
<section id="recommendations" class="section section-no-border bg-color-primary m-0">
    <div class="container">
        <div class="row">
        <div class="col">
        <h2 class="text-color-light font-weight-extra-bold text-uppercase">Recommendations</h2>
        </div>
        <div class="col-lg-12 p-0">
            <div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-color-1-light custom-dots-position-1 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
            @foreach($recommend as $row)
            <div>
                <div class="col">
                    <div class="testimonial custom-testimonial-style-1 custom-testimonial-style-1-light testimonial-with-quotes mb-0">
                    <blockquote class="pb-2">
                    <p class="custom-text-color-3">{!! $row->details !!}</p>
                    </blockquote>
                    <div class="testimonial-author float-left">
                    <p><strong class="text-uppercase text-color-light">{{ $row->name }}</strong><span class="custom-text-color-3 font-weight-light">{{ $row->designation }}</span></p>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
</section>
<div id="say-hello" class="container-fluid">
<div class="row">
<div class="col-lg-6 p-0">
<section class="section section-no-border bg-color-primary h-100 m-0">
<div class="row justify-content-end m-0">
<div class="col-half-section col-half-section-right mr-3">
<h2 class="text-color-light text-uppercase font-weight-extra-bold">Say Hello</h2>
<form id="contactForm" class="contact-form custom-form-style form-errors-light" action="{{ route('send.messege') }}" method="post">
    @csrf
<div class="contact-form-error alert alert-success d-none mt-4" id="contactSuccess">
<strong>Success!</strong> Your message has been sent to us.
</div>
<div class="contact-form-success alert alert-danger d-none mt-4" id="contactError">
<strong>Error!</strong> There was an error sending your message.
<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
</div>
<div class="form-content">
<div class="form-control-custom form-control-custom-light">
<input type="text" class="form-control" name="name" placeholder="Your Name *" data-msg-required="This field is required." id="name" required="" />
</div>
<div class="form-control-custom form-control-custom-light">
<input type="text" class="form-control" name="phone" placeholder="Your Phone *" data-msg-required="This field is required." id="phone" required="" />
</div>
<div class="form-control-custom form-control-custom-light">
<input type="text" class="form-control" name="email" placeholder="Your E-mail *" data-msg-required="This field is required." id="email" required="" />
</div>
<div class="form-control-custom form-control-custom-light">
<input type="text" class="form-control" name="subject" placeholder="Subject *" data-msg-required="This field is required." id="subject" required="" />
</div>
<div class="form-control-custom form-control-custom-light">
<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" placeholder="Message*" id="message" required="" aria-required="true"></textarea>
</div>
<input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Submit" />
</div>
</form>
</div>
</div>
</section>
</div>
<div class="col-lg-6 p-0">
<section class="section section-no-border h-100 m-0" style="background: url(https://www.okler.net/previews/porto/8.2.0/img/demos/resume/contact/contact-bg-1.jpg); background-size: cover;">
<div class="row m-0">
<div class="col-half-section col-half-section-left ml-3">
<span class="feature-box custom-feature-box align-items-center mb-4">
<span class="custom-feature-box-icon">
<i class="icon-envelope icons text-color-light"></i>
</span>
<span class="feature-box-info">
<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1 line-height-5">Email</span>
<strong class="font-weight-light text-color-light custom-opacity-effect-1"><span>{{ $user->email }}</span></strong>
</span>
</span>
</a>
<span class="feature-box custom-feature-box align-items-center mb-4">
<span class="custom-feature-box-icon">
<i class="icon-phone icons text-color-light"></i>
</span>
<span class="feature-box-info">
<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1 line-height-5">Phone</span>
<strong class="font-weight-light text-color-light custom-opacity-effect-1">{{ $user->phone }}</strong>
</span>
</span>
</a>
<span class="feature-box custom-feature-box align-items-center mb-4">
<span class="custom-feature-box-icon">
<i class="icon-social-skype icons text-color-light"></i>
</span>
<span class="feature-box-info">
<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1 line-height-5">Skype</span>
<strong class="font-weight-light text-color-light custom-opacity-effect-1">{{ $user->skype }}</strong>
</span>
</span>
</a>
<span class="feature-box custom-feature-box align-items-center">
<span class="custom-feature-box-icon">
<i class="icon-share icons text-color-light"></i>
</span>
<a href="{{ $user->facebook }}" class="d-flex text-decoration-none">
<span class="feature-box-info">
<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1 line-height-5">Follow me</span>
<strong class="font-weight-light text-color-light custom-opacity-effect-1">Facebook</strong>
</span>
</a>
<a href="{{ $user->instagram }}" class="d-flex text-decoration-none">
<span class="feature-box-info custom-both-side-border mt-2">
<strong class="font-weight-light text-color-light custom-opacity-effect-1">Instagram</strong>
</span>
</a>
<a href="{{ $user->linkdin }}" class="d-flex text-decoration-none">
<span class="feature-box-info p-0 mt-2">
<strong class="font-weight-light text-color-light custom-opacity-effect-1">Linkedin</strong>
</span>
</a>
</span>
</div>
</div>
</section>
</div>
</div>
</div>
<footer id="footer" class="m-0 p-0">
<div class="footer-copyright bg-color-light m-0">
<div class="container">
<div class="row">
<div class="col-lg-12 m-0">
<p class="custom-text-color-2">© Copyright 2020. All Rights Reserved.</p>
</div>
</div>
</div>
</div>
</footer>
</div>

<script data-cfasync="false" src="https://www.okler.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery/jquery.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery.appear/jquery.appear.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery.easing/jquery.easing.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery.cookie/jquery.cookie.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src="master/less/skin-resume.less"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/popper/umd/popper.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/bootstrap/js/bootstrap.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/common/common.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery.validation/jquery.validate.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery.gmap/jquery.gmap.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/jquery.lazyload/jquery.lazyload.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/isotope/jquery.isotope.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/owl.carousel/owl.carousel.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/vide/jquery.vide.min.js"></script> 
<script src="https://www.okler.net/previews/porto/8.2.0/vendor/vivus/vivus.min.js"></script>

<script src="https://www.okler.net/previews/porto/8.2.0/js/theme.js"></script>


<script src="https://www.okler.net/previews/porto/8.2.0/js/views/view.contact.js"></script>

<script src="https://www.okler.net/previews/porto/8.2.0/js/demos/demo-resume.js"></script>

<script src="https://www.okler.net/previews/porto/8.2.0/js/theme.init.js"></script>
<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-42715764-5', 'auto');
            ga('send', 'pageview');
        </script>
</body>

<!-- Mirrored from www.okler.net/previews/porto/8.2.0/demo-resume-red.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 18:12:58 GMT -->
</html>
