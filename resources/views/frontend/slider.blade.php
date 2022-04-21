<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/gumcode-image-1.png')}}" alt="/setyo" class="d-block w-100" alt="...">
        </a>

        <div class="carousel-caption d-none d-md-block">
          <h5>BERANDA</h5>
          <p> </p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="{{URL::to('/aboutus')}}"><img src="{{asset ('frontend/images/layanan.jpg')}}" alt="/aboutus" class="d-block w-100" alt="...">
        </a>
               <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p>Semua Tentang Layanan yang Bisa Kami Tawarkan</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="{{URL::to('/contacts')}}"><img src="{{asset ('frontend/images/port.jpg')}}" alt="/contacts" class="d-block w-100" alt="...">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h5>PORTOFOLIO</h5>
          <p>HASIL PEKERJAAN KAMI YANG DAPAT ANDA JADIKAN REFERENSI</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="{{URL::to('/bebasdulu')}}"><img src="{{asset ('frontend/images/narahubung.jpg')}}" alt="/abouts" class="d-block w-100" alt="...">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h5>KONTAK KAMI</h5>
          <p>HUBUNGI KAMI SESEGARA MUNGKIN DAN DAPATKAN HASIL YANG SESEGERA MUNGKIN</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="{{URL::to('/setyo')}}"><img src="{{asset ('frontend/images/alamat.png')}}" alt="/setyo" class="d-block w-100" alt="...">
        </a>
        <div class="carousel-caption d-none d-md-block">
          <h5>ALAMAT</h5>
          <p>KLIK DAN DAPATKAN ARAH MENUJU KAMI</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>