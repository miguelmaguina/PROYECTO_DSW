<?php
session_start();

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'emprendimiento'){
        header("Location: ../Empresa/indexEmpresa.php");
        exit();
    }
}else{
    header("Location: iniciar.php");
    exit();
}

require '../Components/mensaje.php';
require '../../DAO/ClienteDAO.php';
$cliente=new Cliente();
$clienteDAO=new ClienteDAO();
$cliente=$clienteDAO->listarPorIdCliente($_SESSION['id_c']);


require 'procesoActualizarUsuario.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/styleActualizaUsuario.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
    <div class="section-newEmpr container-fluid py-5 vh-100">
        <div class="contenedor-newEmpr">
        <div class="container my-5 text-secondary">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid" id="chosen-image" src="../../Image/Clientes/<?php echo $cliente->getFoto_Perfil(); ?>" alt="login-icon" style="max-height: 200px; object-fit:cover;"/>
                        
                </div>
            </div>
            <div class="row">
                
            <div class="text-center fs-2 fw-bold">Actualiza tus datos</div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" pattern="[A-Za-z\s]*" maxlength="20" required value="<?php echo "".$cliente->getNombres(); ?>"> <label for="floatingNombre" >Nombre *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingApellido" placeholder="Apellido" name="apellido" pattern="[A-Za-z\s]*" maxlength="20" required value="<?php echo $cliente->getApellidos(); ?>"> <label for="floatingApellido">Apellido *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" maxlength="40" disabled value="<?php echo $cliente->getEmail(); ?>"> <label for="floatingEmail">Email *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" maxlength="9" required value="<?php echo $cliente->getCelular(); ?>"> <label for="floatingCelular">Celular *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDNI" placeholder="DNI" name="dni" maxlength="12" required value="<?php echo $cliente->getDNI(); ?>"> <label for="floatingDNI">DNI *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingDepartamento" placeholder="Departamento" name="departamento" maxlength="20" required value="<?php echo $cliente->getDepartamento(); ?>"> <label for="floatingDepartamento">Departamento *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button" name="upload-button" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>
                    </div>
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