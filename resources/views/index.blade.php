<!Doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alif Enterprise</title>
    <!-- Favicons -->
    <link rel="icon" href="{{ asset('main/img/favicon.png') }}" sizes="16x16" type="image/png">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('main/css/plugins.css') }}">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <header class="site_header fixed-top w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('home')}}"><img src="{{ url('main/img/logo.png') }}" alt="pic"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#home">Home</a>
                    <a class="nav-item nav-link" href="#about_ceo">about CEO</a>
                    <a class="nav-item nav-link" href="#about-us">about alif ent.</a>
                    <a class="nav-item nav-link" href="#businesses">businesses</a>
                    <a class="nav-item nav-link" href="#contact_us">Contact Us</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="loader">
        <div class="boxLoading blue"></div>
    </div>
</header>
<main class="main_site" id="home">
    <!--========== start hero section =============-->
    <section id="hero_section" class="blue bg_blue_grad text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6 padding_right">
                    <div class="hero_content">
                        <h1 class="text-uppercase hero_tit text_animation" data-in-effect="bounceIn">START YOUR BUSINESS WITH Alif Enterprise</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="hero_img text-center">
                        <img class="mw-100 wow fadeInUp" data-wow-delay="2s" src="{{ url('main/img/top_img.png') }}" alt="pic">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About CEO -->
    <section id="about_ceo" class="blue style_2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero_img text-center wow fadeInRight" data-wow-delay="2.2s">
                        <span class="bg_blue_grad "></span>
                        <span class="bg_blue_grad"></span>
                        <span class="bg_light_blue"></span>
                        <span class="bg_green"></span>
                        <img class="mw-100 wow fadeInUp" data-wow-delay="2s" src="{{ url('main/img/ceo.png') }}" alt="ceo">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 padding_right">
                    <div class="hero_content">
                        <h1 class="text-uppercase hero_tit text_animation text_blue" data-in-effect="fadeInLeft">about ceo</h1>
                        <p class="hero_desc wow fadeInDown" data-wow-delay="1.5s">After completing his graduation in Business Administration, our CEO, Mr. Imran Islam joined Airtel Bangladesh as Territory Manager in 2013. With proven track record and breakthrough results, he left Airtel in 2016 to join Rancon Electronic as Area Manager for South Region. Working in two of the top organizations for 4 years along with his education and heredity has pushed him to launch his own business venture. Hence, he founded Alif Enterprise with a mission to execute his innovative ideas in the business arena.</p>
                    </div>
                    <div class="social">
                        <a class="d-inline-block btn_style btn_green margin_top text-capitalize" href="https://www.linkedin.com/in/imranislamanik/" target="_blank"><i class="fab fa-linkedin-in"></i> linkedin</a>
                        <a class="d-inline-block btn_style btn_green margin_top text-capitalize" href="https://www.flickr.com/photos/186848071@N02/albums" target="_blank"><i class="fab fa-flickr"></i> flicker</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========== start about us section =============-->
    <section id="about-us" class="blue bg_blue_grad text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="about_image wow fadeInLeft">
                        <img class="w-100" src="{{ url('main/img/about-us.jpg') }}" alt="pic">
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="about_content padding_left_4 wow fadeInRight">
                        <h2 class="text-uppercase">about alif ent.</h2>
                        <p>Alif Enterprise was founded back in 2016 with a mission to bring innovation in the contemporary business world. Conforming to that mission, Alif Enterprise has initiated several ventures over the course of time. Currently, Alif Enterprise owns and operates 10 different business initiatives, working with brands like Coca-Cola, Marico, and Banglalink. The ultimate goal of this enterprise is to explore new opportunities, develop the market, achieving business growth, develop the employees and stakeholders in the process, and leaving a positive footprint in this country’s economy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========== start businesses section =============-->
    <section id="businesses" class="text-center blue">
        <div class="container">
            <h1 class="sec_title text-uppercase">Field of business</h1>
            <p class="sec_desc">Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim
            veniam quis notru exercit ation Lorem ipsum dolor sit amet.Veniam quis notru exercit.</p>
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="serv_item margin_top_4 wow fadeInUp" data-wow-delay="0s">
                        <div class="brand_logo">
                            <img src="{{ url('main/img/Banglalink.png') }}" alt="Banglalink">
                        </div>
                        <h2 class="margin_top margin_bottom serv_tit">Banglalink</h2>
                        <p class="serv_desc">Alif Enterprise is the authorized distributor of products from Banglalink throughout specified areas of Mongla and Rampal in Bangladesh. <span>Business Sector: Telecom</span></p>
                        <div class="serv_hover text-white bg_blue_grad">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="serv_item margin_top_4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="brand_logo">
                            <img src="{{ url('main/img/Marico.png') }}" alt="marico">
                        </div>
                        <h2 class="margin_top margin_bottom serv_tit">Marico</h2>
                        <p class="serv_desc">Alif Enterprise is the authorized distributor of a range of products from Marico throughout whole area of Khulna district in Bangladesh. <span>Business Sector: FMCG</span></p>
                        <div class="serv_hover text-white bg_blue_grad">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="serv_item margin_top_4 wow fadeInUp" data-wow-delay="1s">
                        <div class="brand_logo">
                            <img src="{{ url('main/img/Cocacola.png') }}" alt="Cocacola">
                        </div>
                        <h2 class="margin_top margin_bottom serv_tit">Coca-Cola</h2>
                        <p class="serv_desc">Alif Enterprise is the authorized distributor of products from Coca-Cola (Abdul Monem Beverage Unit) at Khulna district in Bangladesh. <span>Business Sector: Beverage</span></p>
                        <div class="serv_hover text-white bg_blue_grad">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="serv_item margin_top_4 wow fadeInUp" data-wow-delay="0s">
                        <div class="brand_logo">
                            <img src="{{ url('main/img/Maria-Enterprise.png') }}" alt="Maria-Enterprise">
                        </div>
                        <h2 class="margin_top margin_bottom serv_tit">Maria Enterprise</h2>
                        <p class="serv_desc">Maria Enterprise is a sister concern of Alif Enterprise working as food grain & coal merchant/importer at Khulna district in Bangladesh. <span>Business Sector: Food Grain/Coal</span></p>
                        <div class="serv_hover text-white bg_blue_grad">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="serv_item margin_top_4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="brand_logo">
                            <img src="{{ url('main/img/Hummingbird.png') }}" alt="Hummingbird">
                        </div>
                        <h2 class="margin_top margin_bottom serv_tit">Hummingbird</h2>
                        <p class="serv_desc">Hummingbird is another sister concern of Alif Enterprise performing as computer & accessories provider at Khulna district in Bangladesh. <span>Business Sector: Electronics</span></p>
                        <div class="serv_hover text-white bg_blue_grad">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="serv_item margin_top_4 wow fadeInUp" data-wow-delay="1s">
                        <div class="brand_logo">
                            <img src="{{ url('main/img/Creative-IT.png') }}" alt="Creative-IT">
                        </div>
                        <h2 class="margin_top margin_bottom serv_tit">CITI</h2>
                        <p class="serv_desc">Alif Enterprise is the authorized franchisee of CITI (Professional IT Training & IT solution provider) at Khulna Division in Bangladesh. <span>Business Sector: IT Solution</span></p>
                        <div class="serv_hover text-white bg_blue_grad">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!--========== start contact us section =============-->
    <section id="contact_us" class=" blue sec_bg_gray">
        <div class="contact__us">
            <div class="container">
                <h1 class="text-uppercase text-center"><span>Contacts & Address</span></h1>
                <p class="sec_desc margin_bottom text-center">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.</p>
                <div class="row contact-us margin_top_4 wow fadeInUp">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="contact_info text-left">
                            <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                <i class="fas fa-map-marker-alt margin_right info_icon"></i>
                                <div>
                                    <p class="text-uppercase text_bold">location</p>
                                    <p class="text-uppercase">9, Journalist Manik Shaha Road (Choto Mirzapur), Khulna-9100</p>
                                </div>
                            </div>
                            <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                <i class="fas fa-mobile-alt margin_right info_icon"></i>
                                <div>
                                    <p class="text-uppercase text_bold">phone</p>
                                    <p class="text-uppercase"> <a href="tel:+8801736477666">(+880) 1736 477 666</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                <i class="far fa-envelope margin_right info_icon"></i>
                                <div>
                                    <p class="text-uppercase text_bold">mail</p>
                                    <p class="text-uppercase"><a
                                        href="mailto:imranislamanik@gmail.com">imranislamanik@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="d-flex contact_item align-items-center margin_bottom align-content-center">
                                    <i class="far fa-clock margin_right info_icon"></i>
                                    <div>
                                        <p class="text-uppercase text_bold">WORKING HOURS</p>
                                        <p class="text-uppercase">Sat - Thu , 10:00 AM to 06:00 PM (Bangladesh Time)</p>
                                    </div>
                                </div>
                                <a id="send_message"
                                class="d-inline-block btn_style blu_grad_btn text-uppercase text-white"
                                href="#">contact us</a>
                            </div>
                            <div class="contact_popup animated fadeInUp">
                                <form id="contact_form" action="{{ route('send.mail')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input type="text" id="name" class="form-input w-100" name="name"
                                        placeholder="Full Name" required>
                                    </div>
                                    <div class="col">
                                        <input type="email" id="email" class="form-input w-100" name="email"
                                        placeholder="Email" required>
                                    </div>
                                </div>
                                <input type="text" id="phone" class="form-input w-100" name="phone"
                                placeholder="Phone">
                                <textarea class="form-input w-100" id="message" placeholder="Message"
                                name="message" required></textarea>
                                <button id="contact_submit"
                                class="blu_grad_btn btn_style br_radius w-100 text-uppercase" type="submit"
                                name="button">submit <i
                                class="float-right hidden fa-spin fas fa-circle-notch"></i></button>
                                <div id="msgSubmit" class="h3 text-center hidden">Message Submitted! Thanks :)</div>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1838.843685464826!2d89.56417290386064!3d22.814045285470833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8895b18e46772bd8!2zQ2l2aWwgU3VyZ2VvbiBPZmZpY2UsIEtodWxuYSAo4Ka44Ka_4Kat4Ka_4KayIOCmuOCmvuCmsOCnjeCmnOCmqCDgpo_gprAg4KaV4Ka-4Kaw4KeN4Kav4Ka-4KayLCDgppbgp4HgprLgpqjgpr4p!5e0!3m2!1sen!2sbd!4v1594290523771!5m2!1sen!2sbd"></iframe>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--========== start footer section =============-->
    <footer class="site_footer text-center bg_blue_grad text-white">
        <div class="container">
            <p>Alif Enterprise © 2016 All Rights Reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('main/js/jQuery-plugins.js') }}"></script>
    <script src="{{ asset('main/js/scripts.js') }}"></script>
    <script>
        @if(Session::has('success'))
        var type="{{Session::get('alert-type','info')}}"
        toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
</body>

</html>