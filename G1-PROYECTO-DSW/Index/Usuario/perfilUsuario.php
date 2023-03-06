<?php
session_start();
$tipo=0;//0 no está logueado
// 1 está logueado como cliente

if(isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario']== 'cliente'){
      $tipo=1;
}else{
    header("Location: ../index.php");
    exit();
}

require '../../DAO/ClienteDAO.php';
$cliente=new Cliente();
$clienteDAO=new ClienteDAO();
$cliente=$clienteDAO->listarPorIdCliente($_SESSION['id_c']);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footer.css?v=<?php echo time(); ?>">

    <!-- Estilos personalizados -->
    <style>
        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .card {
            width: 300px;
            padding: 15px;
            margin: auto;
        }
        .container{
            padding:auto;
        }
    </style>
    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>
</head>
<body>
    <?php require 'header.php' ?>
    <div class="container-fluid py-5" style="background-color:#E5E1E1;">
        <div class="card">
            <img class="card-img-top avatar img-fluid"  src="../../Image/Clientes/<?php echo $cliente->getFoto_Perfil(); ?>" alt="Avatar">
            <div class="card-body">
                <h5 class="card-title"><?php echo $cliente->getNombres()." ".$cliente->getApellidos(); ?></h5>
                <p class="card-text ">DNI: <?php echo " ".$cliente->getDNI().""; ?></p>
                <p class="card-text">Correo: <?php echo " ".$cliente->getEmail().""; ?></p>
                <p class="card-text">Celular: <?php echo " ".$cliente->getCelular().""; ?></p>
                <p class="card-text">Departamento: <?php echo " ".$cliente->getDepartamento().""; ?></p>
                <p class="card-text">Usuario: <?php echo " ".$cliente->getUsuario().""; ?></p>
                <a href="actualizaUsuario.php" class="btn btn-primary">Editar perfil</a>
            </div>
        </div>
    </div>
    <?php require 'footer.php' ?>
    <!-- Enlace a Bootstrap 5 y a los archivos de JavaScript requeridos -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    
</body>
</html>
