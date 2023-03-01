<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/styleIniciarSesion.css?v=<?php echo time(); ?>">
</head>
<body>
    
<div class="section-newEmpr container-fluid py-5 d-flex align-items-center">
        <div class="contenedor-newEmpr">
            <div class="container my-5 text-secondary">
                <div class="d-flex justify-content-center">
                    <img src="../../Image/hallpa.png" alt="login-icon" style="max-height: 7rem"/>
                    
                </div>
                
            <div class="text-center fs-2 fw-bold">Ingresar</div>
            <div class="text-center fs-4">Modo Usuario</div>
                <form action="">
                                        
                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingUsuario" placeholder="Usuario" name="usuario" required> <label for="floatingUsuario">Usuario *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required> <label for="floatingPassword">Ingrese su contraseña *</label></div>
                        </div>
                    </div>
                    
                    <div class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm">
                        IniciarSesión
                    </div>
                    
                    <div id="btn-cambio1" class="d-flex gap-1 justify-content-center mt-1">
                        <div>¿No tienes una cuenta?</div>
                        <a href="registroUsuario.php" class="text-decoration-none text-info fw-semibold"
                        >Resgístrate</a
                        >
                    </div>
                </form>
                    
            </div>
            </div>
        </div>
      </div>

</body>
</html>