<?php

?>
<nav class="navbar p-3 navbar-expand-md">
        <div class="container-fluid col">
            <div class="d-flex align-items-center justify-content-between"> 
                <a href="indexEmpresa.php" class="logo d-flex align-items-center text-decoration-none"> <img src="../../Image/hallpa.png" alt=""> <span class="d-none d-lg-block">Hallpa</span> </a>
             </div>
            <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mavbar-btand collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="indexEmpresa.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registroProducto.php">Nuevo Producto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datosGraficos.php">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="verProductoEmp2.php">Mis Productos</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="container-fluid col ">
            <nav class="header-nav ms-auto position-absolute" style="right: 20px; top:16px;">
                <ul class="d-flex align-items-center">
                    <li class="nav-carrito car">
                        <a class="nav-link nav-icon" ><i class="fa-solid fa-store"></i></a>
                    </li>
                    <li class="nav-item dropdown pe-3">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown"> <img src="../../Image/Emprendimientos/<?php echo $_SESSION['foto_e'];?>" alt="Profile" class="rounded-circle"> <span class="d-none d-md-block dropdown-toggle ps-2" ></span> </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header">
                                    <h6><?php echo"".$_SESSION['nombre_e'].""?></h6>
                                    <span>Desarrollo de Sistema Web</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li> <a class="dropdown-item d-flex align-items-center" href="perfilEmprendimiento.php"> <i class="fa-solid fa-shop"></i> <span>Mi perfil</span> </a></li>
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
