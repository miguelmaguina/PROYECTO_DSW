<?php
session_start();
$tipo=0;//0 no está logueado
// 1 está logueado como cliente
// 2 logueado como emprendimiento

if(isset($_SESSION['tipo_usuario'])){
  if($_SESSION['tipo_usuario']== 'cliente'){
      $tipo=1;
  }else{
    $tipo=2;
  }
}

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nostros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/styleNosotros.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>
</head>
<body>

<?php require 'header.php' ?>

<div class="portada1 container-fluid py-1 d-flex align-items-center">
        <div class="row">
            <div class="contenedor col-lg-9 mx-auto text-center">
                <p class="title-1 fs-2 h3" style="color: white;">Productos elaborados</p><p class="title-2 fs-1 h2" style="color: #93CF4F;">por comunidades campesinas y nativas del Perú</p>
                <p class="descripcion">Déjese sorprender por la belleza y autenticidad de los productos hechos a mano por las comunidades peruanas. Desde ropa tejida con técnicas tradicionales hasta joyas y objetos de decoración únicos, cada uno de nuestros productos cuenta con una historia y una cultura detrás. Al comprar en nuestro e-commerce, no solo estará llevándose a casa un objeto hermoso, sino que también estará apoyando a las comunidades y preservando sus tradiciones. ¡Descubra la belleza de las comunidades peruanas hoy mismo!</p>
                <div class="btn-group">
                    <?php if($tipo==0){
                        echo '<a href="tienda1.php" class="btn btn-izq btn-block mx-4 rounded fw-bold">Ir a la tienda virtual</a>
                        <a href="registroUsuario.php" class="btn btn-der btn-block mx-4 rounded fw-bold">¡Regístrese!</a>';
                    }else{
                        echo '<a href="tienda1.php" class="btn btn-izq btn-block mx-4 rounded fw-bold">Ir a la tienda virtual</a>';
                    }
                    ?>
                <!-- <a href="../../Index/Usuario/tienda1.php" class="btn btn-izq btn-block mx-4 rounded fw-bold">Ir a la tienda virtual</a>
                <a href="iniciar.php" class="btn btn-der btn-block mx-4 rounded fw-bold">¡Regístrese!</a> -->
                </div>
            </div>
        </div>
    </div>

    <section class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row row-p1">
                <div class="col-md-6 content-img">
                  <img src="../../Image/img-1.png" class="img-fluid" alt="Imagen">
                </div>
                <div class="col-md-6 p-5">
                  <h2 >¿Qué somos?</h2>
                  <p class="texto">Somos un e-commerce dedicado a conectar a los consumidores con las comunidades campesinas y nativas peruanas. Creemos en la importancia de preservar las tradiciones y culturas locales, y queremos compartir la riqueza de estas comunidades con el mundo. Todos nuestros productos son hechos a mano por artesanos locales y están cuidadosamente seleccionados para ofrecer solo lo mejor. Al comprar en nuestro e-commerce, no solo estará obteniendo productos únicos y hermosos, sino que también estará apoyando directamente a las comunidades y a sus tradiciones. </p><p class="texto">¡Bienvenido a nuestro mundo auténtico de comunidades nativas peruanas!.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row row-p1">
                <div class="col-md-6 p-5">
                  <h2>Visión y Misión</h2>
                  <p class="texto">Nuestra misión es conectar a los consumidores con las comunidades del Perú y preservar sus tradiciones a través de nuestro e-commerce. Creemos en la importancia de apoyar directamente a las comunidades locales y compartir su riqueza cultural con el mundo.
<br><br>Nuestra visión es ser líderes en la promoción de productos auténticos de las comunidades peruanas y ser reconocidos como una fuente confiable y respetada de artesanías únicas.</p>
                </div>

                <div class="col-md-6 content-img">
                    <img src="../../Image/img-2.png" class="img-fluid" alt="Imagen">
                  </div>
            </div>
        </div>
    </section>

    
       <!-- Sección de co-fundadores -->

    <section class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row row-p1">
                <h2 class="text-center">CO-FUNDADORES</h2>
            </div>
            <div class="cofundadores">
                <div class="cofundador">
                    <a href="https://www.linkedin.com/in/nicolas-leonardo-anicama-espinoza-446b29208/" target="_blank">
                        <img  src="../../Image/Cofundadores/Nicolas.png" class="img-fluid" alt="Nicolas Anicama">
                    </a>
                    <div class="nombres">
                        <p>Nicolas Anicama</p>
                    </div>
                </div>
                <div class="cofundador">
                    <a href="https://www.linkedin.com/in/diana-bardon/" target="_blank">
                        <img  src="../../Image/Cofundadores/Diana.png" class="img-fluid" alt="Diana Bardon">
                    </a>
                    <div class="nombres">
                        <p>Diana Bardon</p>
                    </div>
                </div>
                <div class="cofundador">
                    <a href="https://www.linkedin.com/in/yan-franco-huaman-flores-9326391b2/" target="_blank">
                        <img  src="../../Image/Cofundadores/Yan.png" class="img-fluid" alt="Yan Huaman">
                    </a>
                    <div class="nombres">
                        <p>Yan Huaman</p>
                    </div>
                </div>
                <div class="cofundador">
                    <a href="https://www.linkedin.com/in/miguel-maguina/" target="_blank">
                        <img src="../../Image/Cofundadores/Miguel.png" class="img-fluid" alt="Miguel Maguiña">
                    </a>
                    <div class="nombres">
                        <p>Miguel Maguiña</p>
                    </div>
                </div>
                <div class="cofundador">
                    <a href="https://www.linkedin.com/in/luis-angel-mayta-chipana-9141a7264/" target="_blank">
                        <img src="../../Image/Cofundadores/Luis.png" class="img-fluid" alt="Luis Mayta">
                    </a>
                    <div class="nombres">
                        <p>Luis Mayta</p>
                    </div>
                </div>
                <div class="cofundador">
                    <a href="https://www.linkedin.com/in/ivan-diego-saenz-cotrina-406b6a251/" target="_blank">
                        <img src="../../Image/Cofundadores/Ivan.png" class="img-fluid" alt="Ivan Saenz">
                    </a>
                    <div class="nombres">
                        <p>Ivan Saenz</p>
                    </div>
                </div>
                <div class="cofundador">
                    <a href="https://www.linkedin.com/in/renzo-paolo-tacuri-espinoza-2a64a0263/" target="_blank">
                        <img src="../../Image/Cofundadores/Renzo.png" class="img-fluid" alt="Renzo Tacuri">
                    </a>
                    <div class="nombres">
                        <p>Renzo Tacuri</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
       

    <!----------------------- EMPRESAS  ------------------------------->
    <?php
    require "../../DAO/EmprendimientoDAO.php";

    $emprendimiento_dao = new EmprendimientoDAO();
    $emprendimientos = $emprendimiento_dao->listar();
    ?>

    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Empresas y/o Emprendimientos</h2>
                    <div id="carouselControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach(array_chunk($emprendimientos, 2) as $index => $emprendimientoChunk) { ?>
                                <div class="carousel-item<?= $index === 0 ? ' active' : '' ?>">
                                    <div class="row">
                                        <?php foreach($emprendimientoChunk as $emprendimiento){?>
                                            <div class="col-sm-6">
                                                <div class="card card-e mb-3">
                                                                                            
                                                    <img src="../../Image/Emprendimientos/logo_<?=$emprendimiento->getID_Emprendimiento();?>.png" class="card-img-top" alt="Emprendimiento <?=$emprendimiento->getNombre();?> Imagen">
                                                    <div class="card-body">
                                                    <h3 class="card-title"><?=$emprendimiento->getNombre();?></h3>
                                                    <p class="card-text"><?=$emprendimiento->getEmail();?></p>
                                                    <div class="red-social">
                                                        <?php if ($emprendimiento->getURL_Web()) { ?>
                                                        <a href="<?=$emprendimiento->getURL_Web()?>" class="fa fa-globe" style="font-size: 25px; color: #1A2B42;margin-right: 15px;" target="_blank"></a>
                                                        <?php } ?>
                                                        <?php if ($emprendimiento->getURL_Facebook()) { ?>
                                                        <a href="<?=$emprendimiento->getURL_Facebook()?>" class="fa fa-facebook" style="font-size: 25px; color: #1A2B42;margin-right: 15px;" target="_blank"></a>
                                                        <?php } ?>
                                                        <?php if ($emprendimiento->getURL_Instagram()) { ?>
                                                        <a href="<?=$emprendimiento->getURL_Instagram()?>" class="fa fa-instagram" style="font-size: 25px; color: #1A2B42;margin-right: 15px;" target="_blank"></a>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
       

        <!-- Footer -->
        <?php require 'footer.php'; ?>

        <script src="../../js/index.js"></script>

        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        


</body>
</html>