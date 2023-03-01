<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

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





 <!-- Footer -->
    
 <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../Image/hallpa.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2023 <b>Grupo 1</b> - Todos los Derechos Reservados.</small>
            <p>Derechos reservados &copy; 2023 Mi sitio web</p>
        </div>
    </footer>

    <script src="../js/index.js"></script>
    <script src="../js/carousel.js"></script>
    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>