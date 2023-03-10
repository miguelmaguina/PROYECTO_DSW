<?php
session_start();
$tipo=0;

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'cliente'){
        header("Location: ../index.php");
        exit();
    }else{
        header("Location: ../Empresa/indexEmpresa.php");
        exit();
    }
}

//session_destroy();
//session_unset();

require '../../Conexion/Conexion.php';
require '../Components/mensaje.php';

if(isset($_POST["submit1"])){
    require '../../Clases/Cliente.php';
    require '../../DAO/ClienteDAO.php';
    require 'procesoIniciarSesion.php';
}else{
    require '../../Clases/Emprendimiento.php';
    require '../../DAO/EmprendimientoDAO.php';
    require '../Empresa/procesoIniciarSesion.php';
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/styleIniciar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footer.css?v=<?php echo time(); ?>">

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
  
<?php require 'header.php';  ?>

<div class="portada1 container-fluid py-1 d-flex align-items-center justify-content-center">
        <div class="row d-flex align-items-center">
            <div class="contenedor col-lg-9 mx-auto text-center">
                <p class="title-1 fs-2 h3" style="color: white;">Crea una cuenta en Hallpa</p><p class="title-2 fs-1 fw-bold h2" style="color: #035941;">¿Eres un cliente o emprendimiento?</p>
                <p class="descripcion">Si eres un cliente podrás acceder a nuestra tienda online y realizar un recorrido por todos los productos que los emprendedores tienen para ti. Además de probar funciones que te ayudarán a contactarlos para que puedas adquirir alguno de sus productos.</p><p class="descripcion">En cambio, si eres emprendedor podrás crear una sección especial para ofertar tus productos, además de poder contar con herramientas para agilizar tus ventas y mejorar la relación con tus potenciales clientes.</p>
                <div class="btn-group" id="login-btn-user">
                <a href="#" class="btn btn-izq btn-block mx-4 rounded fw-bold">¡Soy cliente!</a>
                </div>
                <div class="btn-group" id="login-btn-emprendimiento">
                <a href="#" class="btn btn-der btn-block mx-4 rounded fw-bold">¡Soy emprendedor!</a>
                </div>
                <!-- <div id="login-btn">
                    <button class="btn1">login</button>
                    <i class="far fa-user"></i>
                </div> -->
            </div>
        </div>
    </div>

<div class="login-form-container inicio-usuario">

    <span id="close-login-form-usuario" class="fas fa-times"></span>
        
        <div class="content contenedor-newproduct content-sign-in">
        
            <form class="mx-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="text-secondary" >
                    <div class="d-flex justify-content-center">
                        <img src="../../Image/login-register/login-icon.svg" alt="login-icon" style="height: 7rem"/>
                    </div>
                    <div class="text-center fs-1 fw-bold">Inicio Usuario</div>
                        <div class="input-group mt-4">
                        
                        <div class="form-floating"> <input type="text" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email *</label></div>
                        </div>
                        <div class="input-group mt-1">
                        
                        <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required> <label for="floatingPassword">Contraseña *</label></div>
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
                            >¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                    <div >
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Iniciar Sesión" name="submit1">
                    </div>
                    
                    <div id="btn-cambio1" class="d-flex gap-1 justify-content-center mt-1">
                        <div>¿No tienes una cuenta?</div>
                        <a href="registroUsuario.php" class="text-decoration-none text-info fw-semibold"
                        >Regístrate</a>
                    </div>
                </div>
            </form>
        </div>

</div>

<div class="login-form-container inicio-emprendimiento">

    <span id="close-login-form-emprendimiento" class="fas fa-times"></span>
        
        <div class="content contenedor-newproduct content-sign-in">
        
            <form class="mx-auto" class="mx-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="text-secondary" >
                    <div class="d-flex justify-content-center">
                        <img src="../../Image/hallpa.png" alt="login-icon" style="height: 7rem"/>
                    </div>
                    <div class="text-center fs-2 fw-bold">Inicio Emprendimiento</div>
                        <div class="input-group mt-4">
                        
                        <div class="form-floating"> <input type="text" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email</label></div>
                        </div>
                        <div class="input-group mt-1">
                        
                        <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required> <label for="floatingPassword">Password</label></div>
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
                            >Forgot your password?</a>
                        </div>
                    </div>
                    <div >
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Iniciar Sesión" name="submit2">
                    </div>
                    
                    <div id="btn-cambio1" class="d-flex gap-1 justify-content-center mt-1">
                        <div>¿No tienes una cuenta?</div>
                        <a href="../Empresa/registroNuevoEmprendimiento.php" class="text-decoration-none text-info fw-semibold"
                        >Registrar</a
                        >
                    </div>
                </div>
            </form>
        </div>

</div>



 <!-- Footer -->
    
 <?php require 'footer.php'; ?>

    <script>
        document.querySelector('#login-btn-user').onclick = () =>{
        document.querySelector('.inicio-usuario').classList.toggle('active');
        }

        document.querySelector('#close-login-form-usuario').onclick = () =>{
        document.querySelector('.inicio-usuario').classList.remove('active');
        }
        document.querySelector('#login-btn-emprendimiento').onclick = () =>{
        document.querySelector('.inicio-emprendimiento').classList.toggle('active');
        }

        document.querySelector('#close-login-form-emprendimiento').onclick = () =>{
        document.querySelector('.inicio-emprendimiento').classList.remove('active');
        }
    </script>

    <script src="../../js/index.js"></script>
    <script src="../../js/carousel.js"></script>
    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>