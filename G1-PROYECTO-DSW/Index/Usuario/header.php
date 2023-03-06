<?php

?>
<nav class="navbar p-3 navbar-expand-md">
        <div class="container-fluid col">
            <div class="d-flex align-items-center justify-content-between"> 
                <a href="../index.php" class="logo d-flex align-items-center text-decoration-none"> <img src="../../Image/hallpa.png" alt=""> <span class="titulo-logo d-none d-lg-block">Hallpa</span> </a>
             </div>
             <?php
             if(isset($buscarActivado)){
             echo '<div class="search-bar">
                <form class="search-form d-flex align-items-center" method="POST" action="#"> <input id="busqueda" type="text" name="query" placeholder="Buscar..." title="Escriba" class="search-form d-flex align-items-center"> <button type="submit" title="Buscar"><i class="fa-solid fa-magnifying-glass"></i></button></form>
             </div>';
             }
             ?>
            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mavbar-btand collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tienda1.php">Tienda Online</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid col ">
            <nav class="header-nav ms-auto position-absolute" style="right: 20px; top:16px;">
                <ul class="d-flex align-items-center">
                    <?php
                    if(isset($buscarActivado)){
                    echo '<li class="nav-item d-block d-xl-none p-1">
                        <a class="nav-link nav-icon search-bar-toggle " href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>';
                    }
                    ?>
                    <li class="nav-item nav-carrito car">
                        <a class="nav-link nav-icon" href="#" ><i class="icono-1 fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <?php
                        if($tipo==0){
                            echo'<li class="nav-item dropdown pe-3">';

                            echo '
                            <a href="iniciar.php"><button href="#" type="button" class="btn btn-outline-success">Iniciar ahora</button></a>
                            ';

                            echo '</li>';
                        }elseif($tipo==1){//tipo cliente
                            echo'<li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../../Image/Clientes/'.$_SESSION['foto_c'].'" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2"></span> </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6>'.$_SESSION['nombre_c'].'</h6>
                                    <span>Desarrollo de Sistema Web</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="perfilUsuario.php"> <i class="fa-solid fa-circle-user"></i><span>Mi perfil</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="favorito.php"><i class="fa-solid fa-heart"></i> <span>Favorito</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="proforma.php"> <i class="fa-solid fa-flag"></i></i> <span>Proforma</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="../Components/cerrarSesionUsuario.php"><i class="fa-solid fa-right-to-bracket"></i><span>Cerrar Sesión</span> </a></li>
                            </ul>
                            </li>';
                        }else{//tipo emprendimiento
                            echo'<li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../../Image/Emprendimiento/'.$_SESSION['foto_e'].'" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2" ></span> </a>
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
                                <li> <a class="dropdown-item d-flex align-items-center" href="../Empresa/datosGraficos.php"> <i class="fa-solid fa-chart-column"></i><span>Reporte</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="#"> <i class="fa-solid fa-layer-group"></i><span>Aqui va algo</span> </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="../Components/cerrarSesionEmprendimiento.php"> <i class="fa-solid fa-right-to-bracket"></i> <span>Cerrar Sesión</span> </a></li>
                            </ul>
                            </li>';
                        }

                    ?>
                </ul>
             </nav>
        </div>
    </nav>
