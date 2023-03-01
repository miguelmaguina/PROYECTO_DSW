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


<div class="portada1 container-fluid py-1 d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center">
            <div class="contenedor col-lg-9 mx-auto text-center">
                <p class="title-1 fs-2 h3" style="color: white;">Crea una cuenta en Hallpa</p><p class="title-2 fs-1 fw-bold h2" style="color: #035941;">¿Eres un cliente o emprendimiento?</p>
                <p class="descripcion">Si eres un cliente podrás acceder a nuestra tienda online y realizar un recorrido por todos los productos que los emprendedores tienen para ti. Además de probar funciones que te ayudarán a contactarlos para que puedas adquirir alguno de sus productos.</p><p class="descripcion">En cambio, si eres emprendedor podrás crear una sección especial para ofertar tus productos, además de poder contar con herramientas para agilizar tus ventas y mejorar la relación con tus potenciales clientes.</p>
                <div class="btn-group" id="login-btn">
                <a href="#" class="btn btn-izq btn-block mx-4 rounded fw-bold">¡Soy cliente!</a>
                </div>
                <div class="btn-group">
                <a href="#" class="btn btn-der btn-block mx-4 rounded fw-bold">¡Soy emprendedor!</a>
                </div>
                <!-- <div id="login-btn">
                    <button class="btn1">login</button>
                    <i class="far fa-user"></i>
                </div> -->
            </div>
        </div>
    </div>

<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <!-- <form action="">
        <h3>user login</h3>
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" value="login" class="btn1">
        <p> don't have an account <a href="#">create one</a> </p>
    </form> -->

        
        
        <div class="contenedor-newproduct content-sign-in">
        
            <form class="mx-auto">
                <div class="text-secondary" >
                    <div class="d-flex justify-content-center">
                        <img src="../Image/login-register/login-icon.svg" alt="login-icon" style="height: 7rem"/>
                    </div>
                    <div class="text-center fs-1 fw-bold">Inicio Usuario</div>
                        <div class="input-group mt-4">
                        
                        <div class="form-floating"> <input type="text" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email</label></div>
                        </div>
                        <div class="input-group mt-1">
                        
                        <div class="form-floating"> <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="password" required> <label for="floatingPassword">Password</label></div>
                    </div>
                    <div class="d-flex justify-content-around mt-1">
                        <div class="d-flex align-items-center gap-1">
                        <input class="form-check-input" type="checkbox" />
                        <div class="pt-1" style="font-size: 0.9rem">Remember me</div>
                        </div>
                        <div class="pt-1">
                        <a
                            href="#"
                            class="text-decoration-none text-info fw-semibold fst-italic"
                            style="font-size: 0.9rem"
                            >Forgot your password?</a
                        >
                        </div>
                    </div>
                    <div class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">
                        Login
                    </div>
                    
                    <div id="btn-cambio1" class="d-flex gap-1 justify-content-center mt-1">
                        <div>Don't have an account?</div>
                        <a href="#" class="text-decoration-none text-info fw-semibold"
                        >Register</a
                        >
                    </div>
                </div>
            </form>
        </div>

        <div class="contenedor-newproduct content-sign-up register">

            <form class="mx-auto" >
                <div class="text-secondary" >
                    <div class="text-center fs-1 fw-bold">Registro Cliente</div>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" required> <label for="floatingNombre">Nombre *</label></div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingApellido" placeholder="Apellido" name="apellido" required> <label for="floatingApellido">Apellido *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email *</label></div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" required> <label for="floatingCelular">Celular *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDNI" placeholder="DNI" name="dni" required> <label for="floatingDNI">DNI *</label></div>
                        </div>
                        <div class="col-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDepartamento" placeholder="Departamento" name="departamento" required> <label for="floatingDepartamento">Departamento *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingUsuario" placeholder="Usuario" name="usuario" required> <label for="floatingUsuario">Usuario *</label></div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="form-floating"> <input type="file" class="form-control" id="floatingFoto" placeholder="Foto" name="foto" required> <label for="floatingFoto">Foto *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required> <label for="floatingPassword">Ingrese su contraseña *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password2" required> <label for="floatingPassword">Confirme su contraseña *</label></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around mt-1">
                        <div class="d-flex align-items-center gap-1">
                        <input class="form-check-input" type="checkbox" />
                        <div class="pt-1" style="font-size: 0.9rem">Acepto los términos y condiciones</div>
                        </div>
                    </div>
                    <div class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">
                        Login
                    </div>
                    
                    <div id="btn-cambio2" class="d-flex gap-1 justify-content-center mt-1">
                        <div>Have an account?</div>
                        <a href="#" class="text-decoration-none text-info fw-semibold"
                        >Login</a
                        >
                    </div>
                </div>
            </form>
        
            <!-- <div class="container my-5">
                
                <div class="row d-flex justify-content-center align-items-center">
                    <form>
                    <h2 class="text-center mb-4">Registro Cliente</h2>
                    <div class="row">
                        <div class="col-md-6  mb-3">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" required> <label for="floatingNombre">Nombre *</label></div>
                        </div>
                        <div class="col-md-6  mb-3">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingApellido" placeholder="Apellido" name="apellido" required> <label for="floatingApellido">Apellido *</label></div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" required> <label for="floatingCelular">Celular *</label></div>
                        </div>
                        <div class="col-md-6  mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="genero" aria-label="Floating label select example">
                                <option selected value="ejemplo1">Seleccione una opción</option>
                                <option value="ejemplo2">Femenino</option>
                                <option value="ejemeplo3">Masculino</option>
                                </select>
                                <label for="departamento">Otros</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="direccion" name="direccion" placeholder="Direccion"></textarea>
                                <label for="comment">Dirección *</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"></textarea>
                                <label for="comment">Descripción *</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class=" btn btn-success w-50 d-flex justify-content-center">Guardar</button>
                    </div>
                    </form>
                    <div class="d-flex justify-content-center" id="btn-cambio2">
                        <button class=" btn btn-success w-50 d-flex justify-content-center">Guardar</button>
                    </div>
                </div>
            </div> -->
        </div>

</div>



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

    <script>
        document.querySelector('#login-btn').onclick = () =>{
        document.querySelector('.login-form-container').classList.toggle('active');
        }

        document.querySelector('#close-login-form').onclick = () =>{
        document.querySelector('.login-form-container').classList.remove('active');
        }
        document.querySelector('#btn-cambio1').onclick = () =>{
        document.querySelector('.content-sign-in').classList.toggle('login');
        document.querySelector('.content-sign-up').classList.remove('register');
        }
        document.querySelector('#btn-cambio2').onclick = () =>{
        document.querySelector('.content-sign-up').classList.toggle('register');
        document.querySelector('.content-sign-in').classList.remove('login');
        }
    </script>

    <script src="../js/index.js"></script>
    <script src="../js/carousel.js"></script>
    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>