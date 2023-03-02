<?php
require '../../DAO/ClienteDAO.php';

$name = $apellido = $email = $celular = $contrasena = $contrasena2 = $departamento = $usuario = $dni = $fecha = $nuevo_nombre = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["nombre"])){
        alerta("Se requiere el nombre");
    }else{
        $nombre=test_input($_POST["nombre"]);
    }

    if(empty($_POST["apellido"])){
        alerta("Se requiere el apellido");
    }else{
        $apellido=test_input($_POST["apellido"]);
    }

    if(empty($_POST["email"])){
        alerta("Se requiere el email");
    }else{
        $email=test_input($_POST["email"]);
    }

    if(empty($_POST["celular"])){
        alerta("Se requiere el celular");
    }else{
        $celular=test_input($_POST["celular"]);
    }

    if(empty($_POST["password"])){
        alerta("Se requiere el contrasena");
    }else{
        $contrasena=test_input($_POST["password"]);
    }

    if(empty($_POST["password2"])){
        alerta("Se requiere el contrasena2");
    }else{
        $contrasena2=test_input($_POST["password2"]);
    }

    if(empty($_POST["departamento"])){
        alerta("Se requiere el departamento");
    }else{
        $departamento=test_input($_POST["departamento"]);
    }

    if(empty($_POST["usuario"])){
        alerta("Se requiere el usuario");
    }else{
        $usuario=test_input($_POST["usuario"]);
    }

    if(empty($_POST["dni"])){
        alerta("Se requiere el dni");
    }else{
        $dni=test_input($_POST["dni"]);
    }
    
    // $apellido=$_POST["apellido"];
    // $email=$_POST["email"];
    // $celular=$_POST["celular"];
    // $contrasena=$_POST["password"];
    // $contrasena2=$_POST["password2"];
    // $departamento=$_POST["departamento"];
    // $usuario=$_POST["usuario"];
    // $dni=$_POST["dni"];
    $fecha=date('Y/m/d');

    $archivo_nombre = $_FILES['upload-button']['name'];
    $archivo_tipo = $_FILES['upload-button']['type'];
    //$archivo_tamano = $_FILES['upload-button']['size'];
    $archivo_tmp = $_FILES['upload-button']['tmp_name'];
      
    $archivo_ext = pathinfo($archivo_nombre, PATHINFO_EXTENSION);
    
    $nuevo_nombre = $usuario.'.'.$archivo_ext;
    

    $clienteDAO=new ClienteDAO();

    if($clienteDAO->verificaUsuario($usuario)==0){
        if($contrasena==$contrasena2){
            if (move_uploaded_file($archivo_tmp, '../../tmp/usuario/'.$nuevo_nombre)) {
                $client=new Cliente();
                $client->setNombres($nombre);
                $client->setApellidos($apellido);
                $client->setEmail($email);
                $client->setCelular($celular);
                $client->setContrasena($contrasena);
                $client->setDepartamento($departamento);
                $client->setUsuario($usuario);
                $client->setDNI($dni);
                $client->setFecha_Creacion($fecha);
                $client->setFoto_Perfil($nuevo_nombre);
                // $clienteDAO->insert($client);
                exito("Cliente registrado exitosamente");
            } else {
                peligro("Hubo un error al subir la imagen, vuelva a intentarlo");
            }

        }else{
            alerta("Las contraseñas no son iguales");
        }
    }else{
        alerta("El usuario ya existe");
    }

    

    
    

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function alerta($mensaje){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i> '.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

function peligro($mensaje){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-triangle me-2"></i>'.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

function info($mensaje){
    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-info-circle me-2"></i>'.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
function exito($mensaje){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>'.$mensaje.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}


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
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" pattern="[A-Za-z\s]*" maxlength="20" required> <label for="floatingNombre">Nombre *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingApellido" placeholder="Apellido" name="apellido" pattern="[A-Za-z\s]*"" maxlength="20" required> <label for="floatingApellido">Apellido *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" maxlength="40" required> <label for="floatingEmail">Email *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" maxlength="9" required> <label for="floatingCelular">Celular *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDNI" placeholder="DNI" name="dni" maxlength="12" required> <label for="floatingDNI">DNI *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingDepartamento" placeholder="Departamento" name="departamento" maxlength="20" required> <label for="floatingDepartamento">Departamento *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <input class="input-content" type="file" id="upload-button" name="upload-button" accept="image/*">
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
                    <div class="d-flex justify-content-start mt-1">
                        <div class="d-flex align-items-center gap-1">
                        <input class="form-check-input" type="checkbox" required/>
                        <div class="pt-1" style="font-size: 0.9rem"><small>Acepto los términos y condiciones</small></div>
                        </div>
                    </div>
                    <div >
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Registrar" name="submit">
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