<header>
    @extends('layouts.frontend')
</header>


@section('title')
    Home
@endsection


@section('content')

<div class="col-md-12 text-center">
    <h1>WELCOME TO GUMCODE</h1></div>

    @include('frontend.slider')

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                        <h1><a href="{{URL::to('/layanans')}}">LAYANAN</h1>
                            <p>
                                <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_android1.jpg')}}">
                                    <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_website.jpg')}}">
                                        <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_ioss.png')}}">
                                            <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_design.jpg')}}">
                                                <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_olshop.jpg')}}">
                                                    <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_2pt.jpg')}}">
                            </p>
        <div>
          
            <div class="col-md-12 text-center">
            <h1><a href="{{URL::to('/aboutus')}}">PORTOFOLIO</h1>
            <p>
                <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_1amalia.jpg')}}">
                    <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_1mang.jpg')}}">
                        <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_jadipergi.jpg')}}">
                            <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/rsz_pojok.jpg')}}">
            </p>
                </div>

                <div class="col-md-12 text-center">
                    <h1> <a href="{{URL::to('/contacts')}}">NARAHUBUNG</h1>
                    <p>
                        <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/wa.png')}}">
                           <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/telegram.png')}}">
                    </p>
                        </div>

                        <div class="col-md-12 text-center">
                            <h1> <a href="{{URL::to('/alamats')}}">ALAMAT</h1>
                            <p>
                                JALAN EMAS NOMER 20
                                MALANG, JAWA TIMUR
                            </p>
                            <p>
                                {{-- <a href="{{URL::to('https://www.google.co.id/maps/place/Gumcode/@-7.9559131,112.6471656,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629b406309787:0xce65d061055fc67a!8m2!3d-7.9559184!4d112.6493543')}} ">< img src="{{asset ('frontend/images/rsz_alamat2.jpg')}}"> --}}
                                    <a href="{{URL::to('https://www.google.co.id/maps/place/Gumcode/@-7.9559131,112.6471656,17z/data=!3m1!4b1!4m5!3m4!1s0x2dd629b406309787:0xce65d061055fc67a!8m2!3d-7.9559184!4d112.6493543')}}"><img src="{{asset ('frontend/images/rsz_alamat2.jpg')}}">
                            </p>
                                </div>

            @include('layouts.inc.footer')
            
       
            </div>


        </div>


@endsection

@section('scripts')
    
@endsection


{{-- <footer>

@include('layouts.inc.navbar')
</footer> --}}
