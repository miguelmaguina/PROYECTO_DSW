<?php

?>
<nav class="navbar p-3 navbar-expand-md">
        <div class="container-fluid col">
            <div class="d-flex align-items-center justify-content-between"> 
                <a href="../index.php" class="logo d-flex align-items-center text-decoration-none"> <img src="../../Image/hallpa.png" alt=""> <span class="d-none d-lg-block">Hallpa</span> </a>
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
                        <a href="#" class="nav-link nav-icon" ><i class="fa-solid fa-store"></i></a>
                    </li>
                   <!-- <li class="nav-item dropdown pe-3">
                      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../../Image/perfil-img.png" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2">admin</span> </a>
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
                   </li> -->
                   <li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../../Image/perfil-img.png" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2" ></span> </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6><?php echo"".$_SESSION['nombre_e'].""?></h6>
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
                                <li> <a class="dropdown-item d-flex align-items-center" href="../Components/cerrarSesionEmprendimiento.php"> <i class="fa-solid fa-right-to-bracket"></i> <span>Cerrar Sesión</span> </a></li>
                            </ul>
                        </li>
                </ul>
             </nav>
        </div>
    </nav>
