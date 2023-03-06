<?php
session_start();

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'cliente'){
        header("Location: ../index.php");
        exit();
    }
}else{
    header("Location: iniciar.php");
    exit();
}
require '../Components/mensaje.php';
if(isset($_SESSION['mensaje'])){
    exito($_SESSION['mensaje']);
    $_SESSION['mensaje']=null;
}
require '../../DAO/EmprendimientoDAO.php';
$emprendimiento=new Emprendimiento();
$emprendimientoDAO=new EmprendimientoDAO();
$emprendimiento=$emprendimientoDAO->listarPorIdEmprendimiento($_SESSION['id_e']);


require 'procesoActualizarEmprendimiento.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaActualizaEmprendimiento.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<div class="float-button">
    <a href="perfilEmprendimiento.php"><i class="fa-solid fa-angles-left"></i></a>
</div>

    
    <div class="section-newEmpr container-fluid py-5">
        <div class="contenedor-newEmpr">
        <div class="container my-5 text-secondary">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid" id="chosen-image" src="../../Image/Emprendimientos/<?php echo $emprendimiento->getLogo(); ?>" alt="login-icon" style="max-height: 200px; object-fit:cover;"/>
                        
                </div>
            </div>
            <div class="row">
                
            <div class="text-center fs-2 fw-bold">Actualiza tus datos</div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                <div class="row">

                        
                <div class="col-md-6 mb-3">
                    <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" pattern="[A-Za-z\s]*" maxlength="30" required value="<?php echo $emprendimiento->getNombre(); ?>"> <label for="floatingNombre">Nombre Empresa *</label></div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" maxlength="9" required value="<?php echo $emprendimiento->getCelular(); ?>"> <label for="floatingCelular">Celular *</label></div>
                </div>
                </div>

                <div class="row">


                <div class="col-md-6 mb-3">
                    <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" maxlength="50" required disabled value="<?php echo $emprendimiento->getEmail(); ?>"> <label for="floatingEmail">Email *</label></div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-floating"> <input type="text" class="form-control" id="floatingDepartamento" placeholder="Departamento" name="departamento" maxlength="20" required value="<?php echo $emprendimiento->getDepartamento(); ?>"> <label for="floatingDepartamento">Departamento *</label></div>
                </div>

                </div>
                <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" id="direccion" name="direccion" placeholder="Direccion" maxlength="70" required ><?php echo $emprendimiento->getDireccion(); ?></textarea>
                        <label for="direccion">Dirección *</label>
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

                <h5 class="pt-2 pb-3">Redes sociales</h5>

                <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-floating"> <input type="text" class="form-control" id="floatingWeb" placeholder="Web" name="web" maxlength="500" value="<?php echo $emprendimiento->getURL_Web(); ?>"> <label for="floatingWeb">Link de la web *</label></div>
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-floating"> <input type="text" class="form-control" id="floatingFacebook" placeholder="Facebook" maxlength="500" name="facebook" value="<?php echo $emprendimiento->getURL_Facebook(); ?>"> <label for="floatingFacebook">Link de Facebook *</label></div>
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-floating"> <input type="text" class="form-control" id="floatingInstagram" placeholder="Instagram" name="instagram" maxlength="500" value="<?php echo $emprendimiento->getURL_Instagram(); ?>"> <label for="floatingInstagram">Link de Instagram *</label></div>
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-floating"> <input type="text" class="form-control" id="floatingOtros" placeholder="Otros" name="otros" maxlength="500" value="<?php echo $emprendimiento->getURL_Otros(); ?>"> <label for="floatingOtros">Link de otras redes (Opcional)</label></div>
                </div>
                </div>

                <h6 class="mb-3">Los campos marcados con * son obligatorios, por favor rellenarlos</h6>

                <div >
                <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Actualizar" name="submit">
                </div>
                </form>
                    
            </div>
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