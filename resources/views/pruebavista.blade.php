<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>SIAT</title>
  </head>
 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
   <style>

      body{
        background-color: #198754;
      }

      a{
        text-decoration: none;
      }

      #iconoSiat{
        margin-right: 65%;
      }

      #gray{
        color: #c9cdd1;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }


      #fondoTransp{
        background-image: url("maps ruta escolar.jpg");
      }

      
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    
  </head>
  <body>

    
    <header class="site-header sticky-top">

      <nav class="py-3 px-3 d-flex justify-content-end navbar-success bg-success">
        <div id="iconoSiat">
          <a class="navbar-brand py-1" href="#">
            <img src="img/SIAT.png" alt="SIAT" width="135" class="img-fluid bg-white">
          </a>
        </div>

        @if (Route::has('login'))
          <div>
            @auth
              <a class="px-3 py-3 d-none d-md-inline-block text-white" href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a class="px-3 py-3 d-none d-md-inline-block text-white" href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
                <a class="px-3 py- d-none d-md-inline-block text-white" href="{{ route('register') }}">Registro</a>
                @endif
            @endauth
          </div>
        @endif
    </header>

<br><br>



<div class="container d-flex justify-content-between p-3">


      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center text-justify pt-4 pt-lg-0 order-2 order-lg-1 text-white" data-aos="fade-up" data-aos-delay="200">
          <h1>Soluci??n para el transporte de los ni??os</h1>
          <h3 id="gray">Somos una compa??ia dedicada al monitoreo de transportes escolares y establecer contacto con los funcionarios responsables de llevarlos a su destino.
          </h3>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto btn btn-primary mx-2">Misi??n</a>
            <a href="" class="glightbox btn-watch-video btn btn-primary"><span>Visi??n</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 1000px; height: 400px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner justify-content-end">
      <div class="item active">
        <img src="img/transporteEscolar.jpg" alt="Transporte escolar" style="width: 1000px; height: 400px;">
      </div>

      <div class="item">
        <img src="img/maps ruta escolar.jpg" alt="Rutas escolares"  style="width: 1000px; height: 400px;">
      </div>
    
      <div class="item">
        <img src="img/choferMensajes.jpg" alt="Mensajes rutas" style="width: 1000px; height: 400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


 
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about bg-white p-3">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nuestro servicio</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Brindamos una aplicaci??n con el proposito de gestionar informaci??n de rutas escolares para informar a acudientes y funcionarios de establecimientos educativos para menores.
              Los beneficios de el monitoreo de nuestra aplicaci??n son:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Gestionar los tiempos de mejor manera. </li>
              <li><i class="ri-check-double-line"></i> Brindar datos utiles a los funcionarios de colegios para tomar desiciones. </li>
              <li><i class="ri-check-double-line"></i> Generar informes a los acudientes que le brinden tranquilidad  y le ayuden en la administracio??n de su tiempo. </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ademas de los beneficios cotidianos es importante pensar en este servicio como un generador de alertas en casos limites como accidentes o situaciones riesgosas lo que le permitiria a los diferentes roles tener mejores perspectivas de reacci??n.
              Tambien permite generar nuevas alternativas de desarrollo tecnol??gico y mayor contacto entre acudientes y roles comlo el monitor de la ruta, el conductor y el docente.
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <footer id="footer text-white bg-secondary">

    <div class="footer-top text-white bg-secondary">
      <div class="container text-white bg-secondary">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact text-white">
            <h3>SIAT</h3>
            <p>
              SENA CBA <br>
              Mosquera, Cundinamarca<br>
              Analisis y desarrollo de sistemas de informaci??n ADSI <br><br>
            </p>
          
        
           &copy; Copyright <strong><span>SIAT</span></strong>. All Rights Reserved
           Designed by <p>Ficha 2068759</p>


           Designed by <p>SIAT ADSI Ficha 2068759</p>
           </div>

               </div>
          </div>


        </div>
      </div>
    </div>

   
  </footer>
  
        
      
  </body>

</html>