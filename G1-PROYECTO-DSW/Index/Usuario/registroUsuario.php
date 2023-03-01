<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/styleRegistroUsuario.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
      <div class="section-newEmpr container-fluid py-5">
        <div class="contenedor-newEmpr">
            <div class="container my-5 text-secondary">
                <div class="d-flex justify-content-center">
                    <img id="chosen-image" src="../../Image/login-register/login-icon.svg" alt="login-icon" style="max-height: 13rem"/>
                    
                </div>
                
            <div class="text-center fs-2 fw-bold">Registro Cliente</div>
                <form action="">
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" required> <label for="floatingNombre">Nombre *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingApellido" placeholder="Apellido" name="apellido" required> <label for="floatingApellido">Apellido *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" required> <label for="floatingCelular">Celular *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDNI" placeholder="DNI" name="dni" required> <label for="floatingDNI">DNI *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDepartamento" placeholder="Departamento" name="departamento" required> <label for="floatingDepartamento">Departamento *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <!-- <input class="form-control" type="file" id="formFile" name="foto"> -->
                            <input class="input-content" type="file" id="upload-button" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-6 mt-2">
                            
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="mt-2">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password2" required> <label for="floatingPassword">Confirme su contraseña *</label></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-1">
                        <div class="d-flex align-items-center gap-1">
                        <input class="form-check-input" type="checkbox" />
                        <div class="pt-1" style="font-size: 0.9rem"><small>Acepto los términos y condiciones</small></div>
                        </div>
                    </div>
                    <div class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm">
                        Registrar
                    </div>
                    
                    <div id="btn-cambio2" class="d-flex gap-1 justify-content-center mt-1">
                        <div>¿Tienes una cuenta?</div>
                        <a href="iniciarSesion.php" class="text-decoration-none text-info fw-semibold"
                        >Iniciar Sesión</a
                        >
                    </div>
                </form>
                    
            </div>
            </div>
        </div>
      </div>

      <a href="#" class="btn-regresar"></a>

    <script>
    let uploadButton = document.getElementById("upload-button");
    let chosenImage = document.getElementById("chosen-image");
    let fileName = document.getElementById("file-name");

    uploadButton.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton.files[0]);
        reader.onload = () => {
            chosenImage.setAttribute("src",reader.result);
        }
        fileName.textContent = uploadButton.files[0].name;
    }
    </script>


      <!-- Scripts de Bootstrap 5 -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
</body>
</html>