<?php
session_start();
$nombre='';

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'cliente'){
        header("Location: ../index.php");
        exit();
    }else{
        $nombre=$_SESSION['nombre_e'];
    }
}else{
    header("Location: ../Usuario/iniciar.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprendimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../Estilos/vistaIndexEmpresa.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footerEmprendimiento.css?v=<?php echo time(); ?>">

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>
</head>
<body>
    
    <?php require 'headerEmpresa.php' ?>
      
    <div id="myCarousel" class="container-fluid carousel slide contenedor-carrusel p-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="20%" src="../../Image/fotoEmprendimiento1Blur.jpg" ></img>
        <div class="container">
          <div class="carousel-caption text-start">
          <h1 >??Haz crecer tu negocio con nuestra </h1>
                <h1 >plataforma de promoci??n en l??nea!</h1>
            <p>Si tienes un negocio artesanal, sabemos que puede ser dif??cil hacerlo crecer sin los recursos y herramientas adecuados. Con nuestra plataforma de promoci??n en l??nea, podr??s hacer crecer tu negocio al promocionar tus productos a nivel nacional e internacional.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="img-car img-fluid" width="100%" height="20%" src="../../Image/fotoEmprendimiento2Blur.jpg"></img>
        <div class="container">
          <div class="carousel-caption">
          <h1 >??Quieres ahorrar tiempo y esfuerzo</h1>
                <h1 >en la administraci??n de tu negocio?</h1>
            <p>Nuestras herramientas de generaci??n de productos, gesti??n de contactos y visualizaci??n de reportes te permitir??n automatizar muchas tareas y liberar tiempo para enfocarte en lo que realmente importa: ??hacer crecer tu negocio!</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="20%" src="../../Image/fotoEmprendimiento3Blur.jpg"></img>
        <div class="container">
          <div class="carousel-caption text-end">
          <h1 >??Es tiempo de despegar y </h1>
                <h1 >alcanzar el ??xito!</h1>
            <p>Ten en cuenta la calidad de tus productos, as?? como de conocer y enfocarte en tu mercado objetivo pues son claves para hacerte conocido. Adem??s, no olvides brindar incentivos a tus clientes para mejorar las ventas.</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="img-prev carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="img-next carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <!-- <div class="portada3 container-fluid py-5 bg-light">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h2 >Descubre productos peruanos</h2>
                <h1 >de marcas emergentes</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod vehicula elit, in maximus turpis ultrices at. Ut fermentum ullamcorper tellus, et tristique sapien luctus id.</p>
            </div>
        </div>
    </div> -->

    <section class="container-fluid py-3">
        <div class="row text-center">
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-1.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Enfocados en el cumplimiento del ODS 11</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-2.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>??Contacta con clientes a lo largo de todo el territorio nacional!</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-3.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Tu trabajo, tu sudor, tu precio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-t-o container-fluid py-5">
        <div class="contenedor-t">
            <h2 class="text-center">??Bienvenido <?php echo"$nombre"; ?>! Haga click en la imagen para comenzar</h2>
                <div class="row">
                    <div class="button-container col-sm-12 col-md-12 mb-3 mt-4 text-white d-flex justify-content-center ">
                        <a href="registroProducto.php" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/imgNuevoProducto.png" alt="">
                        <span class="button-text">NUEVO PRODUCTO</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="button-container col-sm-6 col-md-6 mt-4 text-white  d-flex justify-content-center">
                        <a href="datosGraficos.php" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/imgReporte.png" alt="">
                        <span class="button-text">REPORTE</span>
                        </a>
                    </div>
                    <div class="button-container h-100 col-sm-6 col-md-6 mt-4 text-white d-flex justify-content-center">
                        <a href="verProductoEmp2.php" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/imgProducto.png" alt="">
                        <span class="button-text">PRODUCTO</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
        </div>
    </section>

      
                  

       <!-- Footer -->
        <?php require '../Usuario/footer.php' ?>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <script src="../../js/index.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


</body>
</html>