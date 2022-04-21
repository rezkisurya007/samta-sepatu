<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.inc.navbar')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>gumcode</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <style> h1 { color : black}
              
              
        
        
        </style>
    </head>
<body>
    
    <!-- preloader -->
    <div id="preloader"></div>
    <!-- end of preloader -->

    <div class="body-content" style="display:none;">
      
        {{-- @include('frontend.slider') --}}
        <a href="{{URL::to('/berandas')}}"> <section id=banner>
            <div class="container">
                <div class="row">
                      <div class="col-md-12">
                        {{-- <h2>GUMCODE INDONESIA</h2> --}}
                     
                         <h2>{{$beranda_s1->title}}</h2>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12"> 
                        {{-- <p>YOUR MIND IS OUR CODE <a href="http://www.themewagon.com"></a></p> --}}
                        <p>{{$beranda_s1->subtitle}}</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="one">
            <div class="container">
                <div class="one-features">
                              <div class="row">
                        <div class="col-md-8">
                         
                            <div class="container text-center">
                                <a href="{{URL::to('/layanans')}}">
                                  
                                <h1>LAYANAN KAMI</h1>
                            </div>
                            <div class="section-highlight">
                                <p>
                                <h3>ANDROID APPS</h3>
                                </p>
                            </div>
                            <div class="section-details">
                                <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.
                                </p>
                                <a href="/layanans" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                         <a href="{{URL::to('/layanans')}}"><img  src="assets/images/android.png" alt="Responsive image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="two">
            <div class="container">
                <div class="two-features">
                    <div class="row">
                        <div class="container text-center">
                        <img src="assets/images/web.png" alt="Responsive image" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <div class="section-highlight">
                                 <h2>WEBSITE</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.
                                </p>
                                <a href="/layanans" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="three">
            <div class="container">
                <div class="three-features">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section-highlight">
                                <h2>MAINTENANCE</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.
                                </p>
                                <a href="/layanans" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/images/main.png" alt="Responsive image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="four">
                <div class="container">
                    <div class="four-top">
                        <div class="section-heading">
                            <div class="title">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>CEK PORTOFOLIO KAMI</h2>
                                    </div>
                                </div>
                            </div>
        
                            <div class="subtitle">
                                <div class="row">                                       
                                    <div class="col-md-9 col-md-offset-1">
                                        <p>
                                            Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urnamauris id tellus arcu.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="four-features four-features-left-bottom">
                                <div class="features-img">
                                    <a href="{{URL::to('https://www.jadipergi.com/')}}"> <img src="assets/images/jadipergi.jpg" alt="Responsive image" class="img-responsive">
                                </div>
                                <div class="features-content">
                                    <h3>jadipergi.com</h3>
                                    <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis Nunc sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla
                                    </p>
                                    <a href="https://www.jadipergi.com" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="four-features four-features-right-bottom">
                                <a href="{{URL::to('https://play.google.com/store/apps/details?id=ru.simcoeapp.forexteam')}}"><img src="assets/images/meta.png" alt="Responsive image" class="img-responsive">
                                <div class="features-content">
                                    <h3>metatrader</h3>
                                    <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis Nunc sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla
                                    </p>
                                    <a href="https://play.google.com/store/apps/details?id=ru.simcoeapp.forexteam" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="four-features four-features-left-top">
                            <img src="assets/images/pojoktiket.png"  alt="Responsive image" class="img-responsive">
                                <div class="features-content">
                                    <h3>pojoktiket</h3>
                                    <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis Nunc sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla
                                    </p>
                                    <a href="https://pojoktiket.com/" class="btn btn-learn-more">
                                    LEARN MORE <i class="ion-ios-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="four-features four-features-right-top">
                                <img src="assets/images/akurat.png" alt="Responsive image" class="img-responsive">
                                <div class="features-content">
                                    <h3>akuntansi</h3>
                                    <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis Nunc sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla
                                    </p>
                                    <a href="https://accurate.id/" class="btn btn-learn-more">
                                    LEARN MORE <i class="ion-ios-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/abouts" class="btn btn-expand-all">EXPAND ALL</a>
                        </div>
                    </div>
                </div>
        </section>
        
       
        <section id="footer">
            <div class="container">
                <div class="two-features">
                <div class="footer-top">
                    <div class="section-heading">
                        <div class="title">
                            <div class="row">
                                <div class="">
                                <h2>NARAHUBUNG DAN ALAMAT</h2>
                                </div>
                            </div>
                        </div>
                        <div class="subtitle">
                            <div class="row">
                                <div class="">
                                    <p>
                                        HUBUNGI KAMI SECEPATNYA
                                        DATANG SECEPATNYA
                                        DAN JADIKAN KEINGINAN ANDA SECEPATNYA
                                        {{-- Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-features">
                    <div class="row">
                        <div class="col-md-6">
                           
                                <form action="{{ url('/telegram') }}" method="POST">
			
                                    @csrf

                                <div class="form-group">
                                    <input type="id" name="id" class="form-control form-footer" placeholder="ID TELEGRAM" required="">
                                </div>
                               
                                <div class="form-group">
                                    <input type="pesan" name="pesan" textarea class="form-control form-footer" rows="5" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-solid-state">Send Message</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-list">
                                <ul class="list-unstyled">
                                    <li class="list-table">
                                        <i class="ion-ios-home"></i><p> JALAN EMAS NOMER 20 MALANG, JAWA TIMUR</p>
                                    </li>
                                    
                                    <li class="list-table">
                                        <i class="ion-email"></i><p>GUMCODE@gmail.com</p>
                                    </li>
                                </ul>
                                <div class="list-solid-state">
                                    <ul class="list-inline">
                                        <li>
                                          
                                            <p>
                                                <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/wa.png')}}">
                                                   <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/telegram.png')}}">
                                              <a href="{{URL::to('https://www.google.co.id/maps/place/Gumcode/@-7.9559131,112.6471656,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629b406309787:0xce65d061055fc67a!8m2!3d-7.9559184!4d112.6493543')}}"><img src="{{asset ('frontend/images/rsz_alamat2.jpg')}}">
                            </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.inc.navbar')
                 </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>
  
</html>