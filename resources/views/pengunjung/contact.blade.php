@extends('pengunjung.layout')

@section('title' , 'Contact | Hotel')

@section('container')
<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/contact-bg.jpg">
    <div class="hero-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact</h1>
                </div>
            </div>
            <div class="page-nav">
                <a href="{{ url('/news') }}" class="left-nav"><i class="lnr lnr-arrow-left"></i> News</a>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-left">
                    <div class="contact-information">
                        <h2>Contact Information</h2>
                        <ul>
                            <li><img src="img/placeholder-copy.png" alt=""> <span>Jl.Di.Pandjaitan No.77
                                    Indramayu - West Java
                                    Indonesia 45213</span></li>
                            <li><img src="img/phone-copy.png" alt=""> <span>(0234) 272 022</span></li>
                            <li><img src="img/envelop.png" alt=""> <span>reservation@grandtrisulahotel.com</span></li>
                            <li><img src="img/clock-copy.png" alt=""> <span>Everyday: 06:00 -22:00</span></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <h2>Follow us on:</h2>
                        <a href="https://web.facebook.com/grandtrisula"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/grandtrisulahotel/"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/grand-trisula-hotel-indramayu"><i class="fa fa-linkedin"></i></a>
                        <a href="https://twitter.com/grandtrisula"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h5>Write us ...</h5>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>From</p>
                                <div class="input-group">
                                    <input type="text" placeholder="Full Name">
                                    <img src="img/edit.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="email" placeholder="Email">
                                    <img src="img/envelop-copy.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group phone-num">
                                    <input type="text" placeholder="Phone">
                                    <img src="img/phone-copy.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="message">
                                    <p>Message</p>
                                    <div class="textarea">
                                        <textarea placeholder="Hi ..."></textarea>
                                        <img src="img/speech-copy.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit">Send <i class="lnr lnr-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4501153131523!2d108.3304079143113!3d-6.335693063753053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb88ae2325cd3%3A0x55c670af516e6a62!2sGrand%20Trisula%20Hotel!5e0!3m2!1sid!2sid!4v1615576031824!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- Map Section End -->

@endsection