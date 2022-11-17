<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Carousel Template · Bootstrap v5.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MALWARE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
      
         
        </ul>
        <form class="d-flex" role="search">
         <button class="btn btn-outline-success" type="submit">Inicio</button>
          <button class="btn btn-outline-success" type="submit">Sobre Nosotros</button>
          <button class="btn btn-outline-success" type="submit">Descargar Manual</button>     
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="https://maldita.es/uploads/public/202102/ALERTA_MALWARE.jpg" width="1700" height="700" />
        
      <div class="container">
          <div class="carousel-caption text-start">
            <h1>¿QUE ES MALWARE?</h1>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="https://einatec.com/wp-content/uploads/2018/07/que-es-malware-tipos.jpg" width="1700" height="700" />

        <div class="container">
          <div class="carousel-caption">
            <h1>TIPOS DE MALWARE</h1>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="https://cdn.vivomeunegocio.com.br/vivo-b2b/wp-content/uploads/2019/02/10181135/malware-e1660166393569-1024x647.jpg" width="1700" height="700"  />

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>RECOMENDACIONES</h1>
            
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <br>
      <div class="container p4"> 
     <div class="row" >
        
      
      <div class="col-lg-4">
      <div align="center">
        <div class="col-md-6" >
        <h2 class="fw-normal">ASISTENTE VIRTUAL</h2>
        <p>acceso directo al bot para resolver inquietudes e informarse</p>
        <p><a class="btn btn-secondary" href="#">Dirigirme &raquo;</a></p>
        </div>
    </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">¿Quienes Somos?</h2>
        <p class="lead">La Fundación Escuela Tecnológica de Neiva “Jesús Oviedo Pérez” siendo consciente de la importancia del bienestar y considerándolo como factor fundamental para ofrecer un ambiente apropiado y favorecer los procesos de enseñanza y aprendizaje, de investigación, de extensión y de investigación, declara el Bienestar Institucional como función reconocida “por apoyar a la formación de la comunidad educativa y su articulación a los procesos académicos; a través de proyectos colectivos que potencialicen el desarrollo humano en todas sus dimensiones.”</p>
      </div>
      <div class="col-md-5">
        
        <img src="https://www.pngkey.com/png/detail/103-1037752_computer-virus-imagenes-de-virus-informaticos.png" width="500" height="500" />

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">DESCARGAR EL MANUAL.</h2>
        <p class="lead">descargar nuestro manual en el cual explicamos el proceso y los metodos que utiliza el malware y se ofrece las recomendaciones antes esta situacion.</p>
      <p><button type="button" class="btn btn-success">Descargar Manual</button></p>
    </div>
      <div class="col-md-5 order-md-1">
      <img src="https://cristianthous.com/wp-content/uploads/2022/04/antivirus-02_l.png" width="500" height="500" />

      </div>
    </div>

    <hr class="featurette-divider">

   

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    
    <p>&copy; 2022-MALWARE WEB &middot;</p>
  </footer>
</main>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

      
  </body>
</html>