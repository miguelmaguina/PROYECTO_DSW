<?php
session_start();
$tipo=0;//0 no está logueado
// 1 está logueado como cliente
// 2 logueado como emprendimiento

if(isset($_SESSION['tipo_usuario'])){
  if($_SESSION['tipo_usuario']== 'cliente'){
      $tipo=1;
  }else{
    $tipo=2;
  }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <!-- Enlace a Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <style>
        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .card {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php require 'header.php' ?>
    <div class="container vh-100 border border-5">
        <div class="card">
            <img class="card-img-top avatar" src="https://via.placeholder.com/150" alt="Avatar">
            <div class="card-body">
                <h5 class="card-title">Nombre de usuario</h5>
                <p class="card-text">Correo electrónico: usuario@ejemplo.com</p>
                <p class="card-text">Fecha de nacimiento: 1 de enero de 1990</p>
                <a href="#" class="btn btn-primary">Editar perfil</a>
            </div>
        </div>
    </div>
    <!-- Enlace a Bootstrap 5 y a los archivos de JavaScript requeridos -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
