<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../Estilos/styleIndex.css?v=<?php echo time(); ?>">

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

<header>
<nav class="navbar p-3 navbar-expand-md">
        <div class="container-fluid col">
            <div class="d-flex align-items-center justify-content-between"> 
                <a href="#" class="logo d-flex align-items-center text-decoration-none"> <img src="../Image/hallpa.png" alt=""> <span class="titulo-logo d-none d-lg-block">Hallpa</span> </a>
             </div>
             <div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#"> <input type="text" name="query" placeholder="Buscar..." title="Escriba"> <button type="submit" title="Buscar"><i class="fa-solid fa-magnifying-glass"></i></button></form>
             </div>
            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mavbar-btand collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tienda Online</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="container-fluid col ">
            <nav class="header-nav ms-auto position-absolute" style="right: 20px; top:16px;">
                <ul class="d-flex align-items-center">
                    <li class="nav-item d-block d-xl-none p-1">
                        <a class="nav-link nav-icon search-bar-toggle " href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="nav-item nav-carrito car">
                        <a href="#" class="nav-link nav-icon" ><i class="icono-1 fa-solid fa-cart-shopping"></i></a>
                    </li>
                   <li class="nav-item dropdown pe-3">
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
                   </li>
                </ul>
             </nav>
        </div>
    </nav>
</header>

    
<div class="portada1 container-fluid py-1 d-flex align-items-center">
        <div class="row">
            <div class="contenedor col-lg-9 mx-auto text-center">
                <p class="title-1 fs-2 h3" style="color: white;">Productos elaborados</p><p class="title-2 fs-1 fw-bold h2" style="color: #035941;">por comunidades nativas del Perú</p>
                <p class="descripcion">Déjese sorprender por la belleza y autenticidad de los productos hechos a mano por las comunidades nativas peruanas. Desde ropa tejida con técnicas tradicionales hasta joyas y objetos de decoración únicos, cada uno de nuestros productos cuenta con una historia y una cultura detrás. Al comprar en nuestro e-commerce, no solo estará llevándose a casa un objeto hermoso, sino que también estará apoyando a las comunidades nativas y preservando sus tradiciones. ¡Descubra la belleza de las comunidades nativas peruanas hoy mismo!</p>
                <div class="btn-group">
                <a href="#" class="btn btn-izq btn-block mx-4 rounded fw-bold">Ir a la tienda virtual</a>
                <a href="#" class="btn btn-der btn-block mx-4 rounded fw-bold">¡Regístrese!</a>
                </div>
            </div>
        </div>
    </div>



    <!----------------------- PRODUCTOS MAS VENDIDOS  ------------------------------->
    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Productos más vendidos</h2>
                        <div id="carouselControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner carousel-p">
                            <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="card card-p mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Manto artesanal</h5>
                                            <p class="card-text">Descripción del producto 1.</p>
                                            <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-p mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                            <p class="card-text">Descripción del producto 2.</p>
                                            <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <div class="card card-p mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                            <p class="card-text">Descripción del producto 3.</p>
                                            <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-p mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                            <p class="card-text">Descripción del producto 1.</p>
                                            <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-p mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                            <p class="card-text">Descripción del producto 2.</p>
                                            <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-4">
                                    <div class="card card-p mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                            <p class="card-text">Descripción del producto 3.</p>
                                            <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
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

        <!-- Sección de opiniones -->


    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Opiniones</h2>
                    <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Bolsita</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Artesania</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-4">
                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Queso</h5>
                                        <p class="card-text">Descripción de la opinion.</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Queso</h5>
                                        <p class="card-text">Descripción de la opinion.</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Queso</h5>
                                        <p class="card-text">Descripción de la opinion.</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Artesania</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Sección beneficios -->


    <div class="section-p container-fluid py-1">
        <div class="contenedor-p text-center">
            <h2>AQUI VA LOS BENEFICIOS</h2>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Derechos reservados &copy; 2023 Mi sitio web</p>
        </div>
    </footer>

    <script src="../js/index.js"></script>
    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    


</body>
</html>