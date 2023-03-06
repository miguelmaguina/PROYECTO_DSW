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

// session_destroy();
// session_unset();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../Estilos/styleIndex.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../Estilos/footer.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>
</head>
<body>

<header>

<nav class="navbar p-3 navbar-expand-md">
        <div class="container-fluid col">
            <div class="d-flex align-items-center justify-content-between"> 
                <a href="#" class="logo d-flex align-items-center text-decoration-none"> <img src="../Image/hallpa.png" alt=""> <span class="titulo-logo d-none d-lg-block">Hallpa</span> </a>
             </div>
             <!-- <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query" placeholder="Buscar..." title="Escriba"> <button type="submit" title="Buscar"><i class="fa-solid fa-magnifying-glass"></i></button></form>
             </div> -->
            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mavbar-btand collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Usuario/nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Usuario/tienda1.php">Tienda Online</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="container-fluid col ">
            <nav class="header-nav ms-auto position-absolute" style="right: 20px; top:16px;">
                <ul class="d-flex align-items-center">
                    <!-- <li class="nav-item d-block d-xl-none p-1">
                        <a class="nav-link nav-icon search-bar-toggle " href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li> -->
                    <li class="nav-item nav-carrito car">
                        <a href="Usuario/proforma.php" class="nav-link nav-icon" ><i class="icono-1 fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <!--<li class="nav-item dropdown pe-3">
                      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../Image/perfil-img.png" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">admin</span> </a>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                         <li class="dropdown-header">
                            <h6>admin</h6>
                            <span>Desarrollo de Sistema Web</span>
                         </li>
                         <li>
                            <hr class="dropdown-divider">
                         </li>
                         <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="bi bi-person"></i> <span>Mi perfil</span> </a></li>
                         <li>
                            <hr class="dropdown-divider">
                         </li>
                         <li> <a class="dropdown-item d-flex align-items-center" href="#"> <span>Iniciar Sesión</span> </a></li>
                         <li>
                            <hr class="dropdown-divider">
                         </li>
                         <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="bi bi-question-circle"></i> <span>Crear cuenta</span> </a></li>
                         <li>
                            <hr class="dropdown-divider">
                         </li>
                         <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="bi bi-box-arrow-right"></i> <span>Cerrar Sesión</span> </a></li>
                      </ul>
                    </li>-->
                    <?php
                        if($tipo==0){
                            echo'<li class="nav-item dropdown pe-3">';

                            echo '
                            <a href="Usuario/iniciar.php"><button href="#" type="button" class="btn btn-outline-success">Iniciar ahora</button></a>
                            ';

                            echo '</li>';
                        }elseif($tipo==1){//tipo cliente
                            echo'<li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../Image/Clientes/'.$_SESSION['foto_c'].'" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2"></span> </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>'.$_SESSION['nombre_c'].'</h6>
                                    <span>Desarrollo de Sistema Web</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="fa-solid fa-circle-user"></i><span>Mi perfil</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="Usuario/favorito.php"><i class="fa-solid fa-heart"></i> <span>Favorito</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="Uusario/proforma.php"> <i class="fa-solid fa-flag"></i></i> <span>Proforma</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="Components/cerrarSesionUsuario.php"><i class="fa-solid fa-right-to-bracket"></i><span>Cerrar Sesión</span> </a></li>
                            </ul>
                            </li>';
                        }else{//tipo emprendimiento
                            echo'<li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../Image/Emprendimiento/'.$_SESSION['foto_e'].'" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2" ></span> </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>'.$_SESSION['nombre_e'].'</h6>
                                    <span>Desarrollo de Sistema Web</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="fa-solid fa-shop"></i> <span>Mi perfil</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="fa-solid fa-chart-column"></i><span>Reporte</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="fa-solid fa-layer-group"></i><span>Aqui va algo</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="Components/cerrarSesionEmprendimiento.php"> <i class="fa-solid fa-right-to-bracket"></i> <span>Cerrar Sesión</span> </a></li>
                            </ul>
                            </li>';
                        }

                    ?>
                </ul>
             </nav>
        </div>
    </nav>
</header>  

    
<div class="portada1 container-fluid py-1 d-flex align-items-center">
        <div class="row">
            <div class="contenedor col-lg-9 mx-auto text-center">
                <p class="title-1 fs-2 h3" style="color: white;">Productos elaborados</p><p class="title-2 fs-1 fw-bold h2" style="color: #F2AC57;">por comunidades del Perú</p>
                <p class="descripcion">Déjese sorprender por la belleza y autenticidad de los productos hechos a mano por las comunidades campesinas y nativas peruanas. Desde ropa tejida con técnicas tradicionales hasta joyas y objetos de decoración únicos, cada uno de nuestros productos cuenta con una historia y una cultura detrás. Al comprar en nuestro e-commerce, no solo estará llevándose a casa un objeto hermoso, sino que también estará apoyando a las comunidades nativas y preservando sus tradiciones. ¡Descubra la belleza de las comunidades nativas peruanas hoy mismo!</p>
                <div class="btn-group">
                <a href="#" class="btn btn-der btn-block mx-4 rounded fw-bold">Empezar a comprar ahora</a>
                </div>
            </div>
        </div>
    </div>



    <!----------------------- PRODUCTOS MAS VENDIDOS  ------------------------------->
    <?php
        require_once "../DAO/ProductoDAO.php";
        require_once "../DAO/ReviewDAO.php";
        require_once "../DAO/ClienteDAO.php";

        $clientexreview = new ClienteDAO();
        $review_index = new ReviewDAO();
        $productoxreview = new ProductoDAO();

        $producto_index = new ProductoDAO();
        $productos = $producto_index->listarProductosPopulares();
    ?>
    
    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Productos más vendidos</h2>

                    <div class="carousel">
                        <div class="carousel__contenedor">
                            <button aria-label="Anterior" class="carousel__anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>

                            <div class="carousel__lista">
                                
                                <?php  foreach($productos as $producto){ ?>
                                <?php
                                    $var=$producto->getFoto_Secundaria1();
                                    $pathFoto="../Image/Productos/Foto_Secundaria1/$var";
                                    if(!file_exists($pathFoto)){
                                        $pathFoto="../Image/Productos/Foto_Secundaria1/Foto_Secundaria1_none.png";  
                                    }
                                ?>
                                <div class="card card-p mb-3">
                                   
                                    <a href="Usuario/verProducto.php?id=<?= $producto->getID_Producto()?>">
                                    <img class="card-img-top" alt="" src="<?=$pathFoto?>" >
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title line-clamp-2 text-truncate">
                                            <?= $producto->getNombre()?>
                                        </h5>
                                        <p class="card-text line-clamp-2 text-truncate">
                                            <?= $producto->getDescripcion()?>
                                        </p>
                                        <span class="fs-4">
                                            S/<?= 
                                                $precioBase=$producto->getPrecio();
                                                $desc=$producto->getDescuento();
                                                $precioFinal=number_format($desc*$precioBase);
                                                number_format($precioFinal,2,'.',','); 
                                                ?>  
                                            <small class="desc">
                                                <?php 
                                                $num=$producto->getDescuento();
                                                
                                                if($num!=null){
                                                }else{
                                                    echo number_format($num*100)." % descuento";
                                                }
                                                ?>
                                            </small> 
                                        </span>
                                    </div>
                                    
                                </div>
                                
                                <?php } ?>
                            </div>

                            

                            <button aria-label="Siguiente" class="carousel__siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <div role="tablist" class="carousel__indicadores"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

        <!-- Sección de opiniones -->
    
    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Reviews</h2>

                    <div class="carousel">
                        <div class="carousel__contenedor">
                            <button aria-label="Anterior" class="carousel__anterior anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>

                            <div class="carousel__lista lista">
                            
                            <?php
                                
                                $reviews = $review_index->listarAlgunasReviews();
                                
                                foreach($reviews as $review) {
                                $producto1 = $productoxreview->listarPorIdProducto($review->getID_Producto());
                                $cliente1 = $clientexreview->listarPorIdCliente($review->getID_Cliente());
                                
                                $var1=$producto1->getFoto_Secundaria1();
                                $pathR="../Image/Productos/Foto_Secundaria1/$var1";
                                if(!file_exists($pathR)){
                                    $pathR="../Image/Productos/Foto_Secundaria1/Foto_Secundaria1_none.png";  
                                }

                                $var2=$cliente1->getFoto_Perfil();
                                $pathC="../Image/Clientes/$var2";
                                if(!file_exists($pathC)){
                                    $pathC="../Image/Clientes/fotoPerfil_none.png";  
                                }

                            ?>
                                <div class="card card-o mb-3">
                                
                                    <img src="<?= $pathR ?>" class="card-img-top2" alt="" style="border-radius: 10px;object-fit: contain;max-height: 240px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-truncate"><?= $producto1->getNombre(); ?></h5>
                                        <p class="card-text"><?= $review->getComentario(); ?></p>
                                        <div class="contenido-img-span">
                                            <img src="<?=$pathC?>" alt="">
                                            <i>
                                                <?=
                                                    $cliente1->getNombres()." ".$cliente1->getApellidos()
                                                ?>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

 
                            </div>

                            <button aria-label="Siguiente" class="carousel__siguiente siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <div role="tablist" class="carousel__indicadores indicadores"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Sección beneficios -->


    <div class="section-p container-fluid py-1">
        <div class="contenedor-p text-center">
            <h2>Beneficios</h2>
            <div class="container px-4 py-1" id="featured-3">
            <div class="row g-4 py-1 row-cols-1 row-cols-lg-5">
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <img src="../Image/Beneficios/pic1.png"></img>                    </div>
                    <h2>1</h2> 
                    <h3 class="fs-5">Ingresa a nuestra tienda virtual</h3>

                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <img src="../Image/Beneficios/pic2.png"></img>                    </div>
                    <h2>2</h2>
                    <h3 class="fs-5">Registra nuestros datos personales</h3>

                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <img src="../Image/Beneficios/pic3.png"></img>                    </div>
                    <h2>3</h2>
                    <h4 class="fs-5">Selecciona los productos de tu preferencia</h4>

                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <img src="../Image/Beneficios/pic4.png"></img>
                    </div>
                    <h2>4</h2>
                    <h4 class="fs-5">Obten una proforma personalizada</h4>
           
                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <img src="../Image/Beneficios/pic5.png"></img>                    </div>
                    <h2>5</h2>
                    <h4 class="fs-5">Contacta a los emprendimientos</h4>
                    
                </div>
                
            </div>
        </div>
        </div>
    </div>

    
    <!-- Footer $_SERVER['DOCUMENT_ROOT'] es mi caso es C:/xampp/htdocs-->
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/PROYECTO_DSW/G1-PROYECTO-DSW/Index/Usuario/footer.php'; ?>
    <script src="../js/index.js?v=<?php echo time(); ?>"></script>
    <script src="../js/carousel.js?v=<?php echo time(); ?>"></script>
    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    


</body>
</html>