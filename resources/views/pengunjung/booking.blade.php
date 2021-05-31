<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<title>Pesan Kamar Hotel</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="/booking/css/bootstrap.min.css">
        <link rel="stylesheet" href="/booking/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/booking/css/fontAwesome.css">
        <link rel="stylesheet" href="/booking/css/hero-slider.css">
        <link rel="stylesheet" href="/booking/css/owl-carousel.css">
        <link rel="stylesheet" href="/booking/css/datepicker.css">
        <link rel="stylesheet" href="/booking/css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <style>
            .logo {
                margin: auto;
                padding-right: 5%; 
            }

            .copyright{
                color: white;
            }

            .input{
                width: 100%;
                padding: 10px ;
                margin: 5px -2;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                height: px;
                }
            
        </style>

        <script src="/booking/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>


 
    
    <section class="banner" style="filter: grayscale(30%) drop-shadow(5px 5px 8px gray) contrast(120%);" id="top">
        
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">
                            <a href="{{url ('/')}}"><img src="{{ asset('/img/trisula/logo-trisula.png') }}" class="logo" alt="Trisula"></a>
                        </div>
                        <div class="tabs-content">
                            <h4>Social Media:</h4>
                            <ul class="social-links">
                                <li><a href="https://web.facebook.com/grandtrisula">Find us on <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/grandtrisula">Follow Our <em>Twitter</em><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/grandtrisulahotel/">Follow our <em>instagram</em><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/grand-trisula-hotel-indramayu">Find us on <em>LinkedIn</em><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="page-direction-button">
                            <a href="{{url('/contact')}}"><i class="fa fa-phone"></i>Contact Us Now</a>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="container">
                        <div class="right-side">
                            <a href="{{ route('logout') }}" class="btn btn-primary "><i class="fa fa-arrow-left">  Logout</i></a>
                        </div>
                    </div>
                    <section id="first-tab-group" class="tabgroup">
                        <form action="{{url('/pesan')}}/{{$room->id}}" method="POST">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Cek kamar <em>hotel</em>:</h4>
                                <form id="form-submit" action="" method="get">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label for="nama">Nama Lengkap: </label>
                                                <input type="text" name="pemesan" id="nama" autocomplete="off" placeholder="Masukkan nama.." class="input" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label for="email">Alamat email: </label>
                                                <input type="text" name="email" id="email" autocomplete="off" placeholder="Masukkan email.." class="input" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label for="alamat">Alamat: </label>
                                                <input type="text" name="alamat" id="alamat" autocomplete="off" placeholder="Masukkan alamat lengkap.." class="input" required>
                                            </fieldset>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label for="kota">Kota: </label>
                                                <input type="text" name="kota" id="kota" autocomplete="off" placeholder="Masukkan kota anda.." class="input" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label for="no_hp">No Handphone: </label>
                                                <input type="text" name="no_hp" id="no_hp" autocomplete="off" placeholder="Masukkan no handphone.." class="input" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label for="kewarganegaraan">Kewarganegaraan: </label>
                                                <input type="text" name="kewarganegaraan" id="kewarganegaraan" autocomplete="off" placeholder="Masukkan kewarganegaraan lengkap.." class="input" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset>
                                                <label for="room">Pilih kamar:</label>
                                                <select required name='tipe_kamar' onchange='this.form.()'>
                                                    <option value="">Select Room:</option>
                                                    <option value="suite">Suite Room</option>
                                                    <option value="superior">Superior Room</option>
                                                    <option value="deluxe">Deluxe Room</option>
                                                    <option value="Executive">Executive Room</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="date">Tanggal:</label>
                                                <input name="date" type="text" class="form-control date" id="date" placeholder="Pilih tanggal..." required onchange='this.form.()'>
                                            </fieldset>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <fieldset>
                                                    <label for="lama">Lama inap: </label>
                                                    <input type="text" name="lama_inap" id="lama_inap" autocomplete="off" placeholder="Lama Inap" class="input" required>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="btn">Pesan Kamar Sekarang</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-logo">
                            <a href="#" class="scroll-top"><img src="{{ asset('/img/trisula/logo-trisula.png') }}" alt="" style="width: 120px;"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top">Back To Top</a>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="container">
                        <div class="copyright-text copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Grand Trisula Hotel. All rights reserved</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="privacy-links">
                            <a href="#">Privacy Policy</a>
                            <a href="#">Photo Requests</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/booking/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="/booking/js/vendor/bootstrap.min.js"></script>
    
    <script src="/booking/js/datepicker.js"></script>
    <script src="/booking/js/plugins.js"></script>
    <script src="/booking/js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>