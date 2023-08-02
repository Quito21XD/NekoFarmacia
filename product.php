<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Neko Farm</title>
  <style>
    @font-face {
      font-family: 'RobotoMono';
      src: url('/fonts/RobotoMono/static/RobotoMono-Light.ttf') format('truetype');
      /* Agrega otros formatos si tienes más archivos de la fuente */
    }
  </style>

  <link rel="stylesheet" href="assets/css/templatemo.css">
  <link rel="stylesheet" href="assets/css/custom.css">


  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <!-- Otros elementos head -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- Load fonts style after rendering the layout styles -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <div class="image-and-text">
              <img src="images/logo11.png" alt="" />
              <span>FARMACIAS NEKO</span>
            </div>
            
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> Acerca de </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.php"> Productos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Iniciar Sesion</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end hero area -->



<!-- Start Content -->
  <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Filtros</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Especie
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Gatos</a></li>
                            <li><a class="text-decoration-none" href="#">Perros</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Categorias
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Antiflamatorios</a></li>
                            <li><a class="text-decoration-none" href="#">Cancer / Tumorales</a></li>
                            <li><a class="text-decoration-none" href="#">Cardíacos</a></li>
                            <li><a class="text-decoration-none" href="#">Cicatrizantes</a></li>
                            <li><a class="text-decoration-none" href="#">Cognitivos / Neurológicos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                      <h2 style="font-family: Arial, sans-serif;">
                        FARMACIAS NEKO
                      </h2>
                      <p style="font-family: Arial, sans-serif;">
                        La Mejor Farmacia Veterinaria para Gatos
                      </p>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>--</option>
                                <option>Precio: más bajos primero</option>
                                <option>Precio: más altos primero</option>
                                <option>Nombre: de A a Z</option>
                                <option>Nombre: de Z a A</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr1.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Kit Feliway Optimum Difusor Y Recambio Para Gatos</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>                
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">                   
                            <img class="card-img rounded-0 img-fluid" src="images/pr2.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Bayer Antialérgico Vetriderm Para Propietarios De Mascotas</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr3.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Probióticos Pro Plan Fortiflora Para Gatos</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr4.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Bayer Antialérgico Vetriderm Para Propietarios De Mascotas</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr5.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Bayer Antialérgico Vetriderm Para Propietarios De Mascotas</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr6.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Bayer Antialérgico Vetriderm Para Propietarios De Mascotas</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr7.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Bayer Antialérgico Vetriderm Para Propietarios De Mascotas</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr8.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Bayer Antialérgico Vetriderm Para Propietarios De Mascotas</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="images/pr9.jpg">
                            <div class="description-overlay">Descripción de la Imagen 1</div>
                            <div class="card-body">
                                <p class="p-product">Bayer Antialérgico Vetriderm Para Propietarios De Mascotas</p>
                                <p class="p-product">$50.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->


   <!-- info section -->
   <section class="info_section layout_padding">
    <div class="container layout_padding-top  layout_padding2-bottom">
      <div class="logo-box">
        <a class="navbar-brand" href="index.html">
          <div class="image-and-text1">
            <img src="images/logo11.png" alt="" />
            <span>FARMACIAS NEKO</span>
          </div> 
        </a>
      </div>
      <div class="info_items">
        <a href="">
          <a href="https://goo.gl/maps/8Nm5RYtNmaaMm1Dq7" target="_blank">

          <div class="item ">
            <div class="img-box box-1">
              <img src="images/ubicacion1.png" alt="" />
            </div>
            <div class="detail-box">
              <p>
                Los esperamos en Neko Farm entre la Av. D'Orbigny y C. Adrian Patiño - Cochabamba - Bolivia
              </p>
            </div>
          </div>
        </a>
        <a href="mailto:nekofarm@gmail.com">
          <div class="item ">
            <div class="img-box box-3">
              <img src="images/correo5.png" alt="" />
            </div>
            <div class="detail-box">
              <p>
                nekofarm@gmail.com
              </p>
            </div>
          </div>
        </a>
        <a href="https://wa.me/59171356177">
          <div class="item ">
            <div class="img-box box-2">
              <img src="images/whatsapp.png" alt="" />
            </div>
            <div class="detail-box">
              <p>
                +591 71356177
              </p>
            </div>
          </div>
        </a>

      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 Nekofarm
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
      <!-- Start Script -->
      <script src="assets/js/jquery-1.11.0.min.js"></script>
      <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/templatemo.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- End Script -->
</body>

</html>