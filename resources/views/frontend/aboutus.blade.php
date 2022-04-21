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
        <style>  h1 { color : whitesmoke}
                             h1 { font-style:oblique}
              
        
        
        </style>
    </head>
<body>
    
    <section id="two">
        <h1>{{$about_s1->title}}</h1>
        <h1>{{$about_s1->subtitle}}</h1>
    </section>
    <!-- preloader -->
    <div id="preloader"></div>
    <!-- end of preloader -->

    <div class="body-content" style="display:none;">
      
      
        <section id="one">
            <div class="container">
                <div class="one-features">
                              <div class="row">
                        <div class="col-md-8">
                       
                            <div class="section-highlight">
                                <p>
                                <h2>JADIPERGI.COM</h2>
                                </p>
                            </div>
                            <div class="section-details">
                                <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.
                                </p>
                                <a href="https://www.jadipergi.com" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                         <a><img  src="assets/images/jadipergi2.jpg" alt="Responsive image" class="img-responsive">
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
                        <img src="assets/images/meta2.png" alt="Responsive image" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <div class="section-highlight">
                                 <h2>METATRADER</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.
                                </p>
                                <a href="https://play.google.com/store/apps/details?id=ru.simcoeapp.forexteam" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
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
                                <h2>POJOKTIKET.COM</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.
                                </p>
                                <a href="https://pojoktiket.com/" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="assets/images/pojoktiket2.png" alt="Responsive image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a>
        <section id="two">
            <div class="container">
                <div class="two-features">
                    <div class="row">
                        <div class="container text-center">
                        <img src="assets/images/akurat2.png" alt="Responsive image" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <div class="section-highlight">
                                 <h2>AKUTANSI</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna. Mauris id tellus arcu. Nunc vehicula id nulla dignissim dapibus. Nullam ultrices, neque et faucibus viverra, ex nulla cursus.
                                </p>
                                <a href="https://accurate.id/" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
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