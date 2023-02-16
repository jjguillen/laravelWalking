@extends('web.layout')

@section('main')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bienvenido a <span>Walking</span></h2>
              <p class="animate__animated animate__fadeInUp">Tu web de rutas de senderismo.</p>
              </div>
          </div>
        </div>

    </div>
  </section><!-- End Hero -->

     <!-- ======= Featured Services Section ======= -->
     <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        

        <div class="row no-gutters">
            
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-card-image"></i></div>
              <h4 class="title"><a href="">Busca rutas</a></h4>
              <p class="description">Busca las mejores y más bonitas rutas por toda España y todo el mundo</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-plus-fill"></i></div>
              <h4 class="title"><a href="">Trae a tus amigos senderistas</a></h4>
              <p class="description">Crea grupos de senderistas con tus amigos</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clipboard2-pulse"></i></div>
              <h4 class="title"><a href="">Registra las rutas realizadas</a></h4>
              <p class="description">Graba las rutas que realizas, solo o en grupo, y pon los datos y tu opinión</p>
            </div>
          </div>
          <img src="/img/walker_home.jpg" alt="" />
        </div>

      </div>
    </section><!-- End Featured Services Section -->

     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Busca tus rutas</h3>
            <p> Filtra por distancia, dificultad, etc. Al final encontrarás tu ruta perfecta.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Empieza a andar</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


@endsection