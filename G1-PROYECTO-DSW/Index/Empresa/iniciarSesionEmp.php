<?php
session_start();

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'cliente'){
        header("Location: ../index.php");
        exit();
    }else{
        header("Location: indexEmpresa.php");
        exit();
    }
}

require '../../Conexion/Conexion.php';
require '../Components/mensaje.php';

require '../../Clases/Emprendimiento.php';

require '../../DAO/EmprendimientoDAO.php';

require 'procesoIniciarSesion.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../Estilos/vistaIniciarSesionEmp.css?v=<?php echo time(); ?>">
</head>
<body>
    
<div class="section-newEmpr container-fluid py-5 d-flex align-items-center">
        <div class="contenedor-newEmpr">
            <div class="container my-5 text-secondary">
                <div class="d-flex justify-content-center">
                    <img src="../../Image/hallpa.png" alt="login-icon" style="max-height: 7rem"/>
                    
                </div>
                
            <div class="text-center fs-2 fw-bold">Ingresar</div>
            <div class="text-center fs-4">Modo Emprendimiento</div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                        
                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required> <label for="floatingPassword">Ingrese su contraseña *</label></div>
                        </div>
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
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Iniciar Sesión" name="submit">
                    </div>
                    
                    <div id="btn-cambio1" class="d-flex gap-1 justify-content-center mt-1">
                        <div>¿No tienes una cuenta?</div>
                        <a href="registroNuevoEmprendimiento.php" class="text-decoration-none text-info fw-semibold"
                        >Resgístrate</a
                        >
                    </div>
                </form>
                    
            </div>
            </div>
        </div>
      </div>

    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>