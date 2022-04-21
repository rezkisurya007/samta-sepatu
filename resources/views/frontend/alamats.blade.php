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
        <style> h1 { color : whitesmoke}
                /* h1 {background-color: cornflowerblue} */
                h1 { font-style:oblique}
        
        
        </style>
    </head>
<body>
    
    <section id="two">
        <h1>{{$alamat_s1->title}}</h1>
        
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
                                <h2>MAPS</h2>
                                </p>
                            </div>
                            <div class="section-details">
                                <p>
                                    {{$alamat_s1->subtitle}}
                                    {{$alamat_s1->description}}
                                </p>
                                <a href="/maps" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                         <a><img  src="assets/images/maps.png" alt="Responsive image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="two">
            <div class="container">
                <div class="two-features">
                    <div class="row">
                            <div class="col-md-8">
                            <div class="container text-right">
                                <a href="{{URL::to('/contacts')}}">   <h2>HUBUNGI KAMI</h2>
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