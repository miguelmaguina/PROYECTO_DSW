<?php

require '../../Conexion/Conexion.php';
require '../../Clases/Emprendimiento.php';
require '../Components/mensaje.php';

require '../../DAO/EmprendimientoDAO.php';

require 'procesoRegistro.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaRegistroNuevoEmprendimiento.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<div class="section-newEmpr container-fluid py-5">

        <div class="contenedor-newEmpr">
        <div class="container my-5 text-secondary">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid" id="chosen-image" src="../../Image/login-register/login-icon.svg" alt="login-icon" style="max-height: 200px; object-fit:cover;"/>
                        
                </div>
            </div>
            <div class="row">
                <div class="text-center fs-2 fw-bold">Registro Emprendimiento</div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                    <h5 class="pb-3">Datos</h5>
                    <div class="row">

                        
                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" pattern="[A-Za-z\s]*" maxlength="30" required> <label for="floatingNombre">Nombre Empresa *</label></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" maxlength="9" required> <label for="floatingCelular">Celular *</label></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        

                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" maxlength="50" required> <label for="floatingEmail">Email *</label></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingDepartamento" placeholder="Departamento" name="departamento" maxlength="20" required> <label for="floatingDepartamento">Departamento *</label></div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" id="direccion" name="direccion" placeholder="Direccion" maxlength="70" required></textarea>
                                <label for="comment">Dirección *</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="input-content" type="file" id="upload-button" name="upload-button" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mb-3">
                            
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingUsuario" placeholder="Usuario" name="usuario" maxlength="20" required> <label for="floatingUsuario">Usuario *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" maxlength="20" required> <label for="floatingPassword">Ingrese su contraseña *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-2">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" maxlength="20" name="password2" required> <label for="floatingPassword">Confirme su contraseña *</label></div>
                        </div>
                    </div>

                    <h5 class="pt-2 pb-3">Redes sociales</h5>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingWeb" placeholder="Web" name="web" maxlength="500"> <label for="floatingWeb">Link de la web *</label></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingFacebook" placeholder="Facebook" maxlength="500" name="facebook"> <label for="floatingFacebook">Link de Facebook *</label></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingInstagram" placeholder="Instagram" name="instagram" maxlength="500"> <label for="floatingInstagram">Link de Instagram *</label></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingOtros" placeholder="Otros" name="otros" maxlength="500"> <label for="floatingOtros">Link de otras redes (Opcional)</label></div>
                        </div>
                    </div>

                    <h6 class="mb-3">Los campos marcados con * son obligatorios, por favor rellenarlos</h6>

                    <div class="row mb-1">
                        <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                            <label class="form-check-label form-label" for="flexCheckDefault">
                                <small>Al registrarse acepta las Condiciones del servicio, la Política de privacidad y el uso de cookies de Hallpa Biomarket.</small>
                            </label>
                        </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" required>
                            <label class="form-check-label form-label" for="flexCheckDefault1">
                              <small>Autorizo que se use los datos proporcionados para contactarme y recibir promociones, ofertas e información.</small>
                            </label>
                        </div>
                        </div>
                    </div>
                    <div >
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Registrar" name="submit">
                    </div>
                    <div id="btn-cambio2" class="d-flex gap-1 justify-content-center mt-1">
                        <div>¿Tienes una cuenta?</div>
                        <a href="iniciarSesionEmp.php" class="text-decoration-none text-info fw-semibold"
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