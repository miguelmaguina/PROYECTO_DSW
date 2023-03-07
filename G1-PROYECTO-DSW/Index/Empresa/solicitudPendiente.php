<?php
session_start();

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'cliente'){
        header("Location: ../index.php");
        exit();
    }
}else{
    header("Location: ../Usuario/iniciar.php");
    exit();
}

//Llamando a una pequeña conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyfinal_dsw_g1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//Solo para el emprendedor correspondiente
//$emprendimiento=$_SESSION['id_e'];
//echo $emprendimiento;
//No es necesario, dado que solo encontraremos productos del emprendimiento correspondiente

//Rescatar el id del producto seleccionado
$id_producto_aux3 = $_GET['ID_Producto_Aux3'];
//echo $id_producto_aux3."<br>";

// Consulta SQL
$sql = "SELECT DISTINCT C.Foto_Perfil,C.ID_Cliente,C.Nombres,C.Apellidos,C.DNI,C.Email,C.Celular,P.Nombre,P.Foto_Secundaria1,R.Estado
        FROM Cliente AS C INNER JOIN Review AS R ON C.ID_Cliente=R.ID_Cliente 
        INNER JOIN Producto AS P ON R.ID_Producto=P.ID_Producto 
        WHERE R.ID_Producto={$id_producto_aux3} AND R.Estado=2";

// Ejecutar consulta
$resultado = mysqli_query($conn, $sql);

//Array de clientes solicitantes
$clientesSolicitantes = array();

// Verificar si la consulta tuvo éxito
if ($resultado) {
  // Recuperar los datos del resultado
  while ($fila = mysqli_fetch_assoc($resultado)) {
    // Utilizar los datos como sea necesario
    $fotoPerfil=$fila['Foto_Perfil'];
    $id_clienteC=$fila['ID_Cliente'];
    $nombre = $fila['Nombres'];
    $apellido = $fila['Apellidos'];
    $dni=$fila["DNI"];
    $email = $fila['Email'];
    $celular = $fila['Celular'];
    $producto = $fila['Nombre'];
    $foto = $fila['Foto_Secundaria1'];
    $estado=$fila['Estado'];
    //echo "Nombre: ".$nombre ." | Apellido: ".$apellido ." | DNI: ".$dni ." | Email: ".$email ." | Celular: ".$celular ." | Producto: ".$producto."<br>";

    //Agregar los valores al array
    $clientesSolicitantes[]=array(
        'foto_perfil'=>$fotoPerfil,
        'idCliente'=>$id_clienteC,
        'nombre'=>$nombre,
        'apellido'=>$apellido,
        'dni'=>$dni,
        'email'=>$email,
        'celular'=>$celular,
        'producto'=>$producto,
        'foto'=>$foto,
        'estado'=>$estado
    );
  }

  // Liberar memoria del resultado
  mysqli_free_result($resultado);
} else {
  // Si la consulta falló, mostrar un mensaje de error
  echo "Error: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaPendienteEmp.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>

</head>
<body>
<?php require 'headerEmpresa.php';?>

    <section class="section-t-o py-5">
        <div class="contenedor-t">
                <div class="row">
                    <div class="button-container col-sm-12 col-md-12 mb-3 mt-4 text-white d-flex justify-content-center ">
                        <a href="#" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/Productos/Foto_Secundaria1/<?= $foto ?>" alt="">
                        <span class="col-10 button-text"><?= $producto ?></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    
                    <!--<div class="button-container h-100 col-md-6 mt-4 text-white d-flex justify-content-center">
                        <a href="solicitudPendiente.php" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/solPend.png" alt="">
                        <span class="button-text">SOLICITUDES PENDIENTES</span>
                        </a>
                    </div>
                    <div class="button-container col-md-6 mt-4 text-white d-flex justify-content-center">
                        <a href="listaCompradores.php" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/listComprador.png" alt="">
                        <span class="button-text">LISTADO DE COMPRADORES</span>
                        </a>
                    </div>-->
                </div>
            </div>
        </div>
            
        </div>
        </div>
    </section>

    <section class="p-2 content-productos">
        <div class="contenedor-t">
        <div class="row">
            

            <div class=" contenedor-de-producto">
                <div class="row row-cols-lg-2 d-flex justify-content-center">

                <!--Repeticiones-->
                <?php
                foreach($clientesSolicitantes as $client)
                {
                ?>
                <div class="card card-emp col-lg-6 m-1">
                        <h4 class="text-cabecera text-center py-1"><?= $client['nombre'].' '.$client['apellido'] ?></h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/Clientes/<?= $client['foto_perfil'] ?>" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI: <span><?= $client['dni'] ?></span></p>
                                <p class="card-texto text-truncate">Email: <span><?= $client['email'] ?></span></p>
                                <p class="card-texto">Celular: <span><?= $client['celular'] ?></span></p>
            
                                <div class="row text-center">
                                    <div class="col-12 mx-auto">
                                        <form method="POST" action="cambioEstado.php">
                                            <input type="hidden" name="id_clienteCambio" value="<?= $client['idCliente'] ?>">
                                                <button class="btn btn-success w-50 m-1">Aceptar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                    

            </div>

            <!--
                <div class="row text-center">
                    <div class="col-12 mx-auto">
                        <form method="POST" action="procesar-aceptar.php">
                            <input type="hidden" name="id_cliente" value="<?= $client['id_cliente'] ?>">
                            <button type="submit" class="btn btn-success w-50 m-1">Aceptar</button>
                        </form>
                    </div>
                </div>

            -->
    
                

            <div class="row p-4">
                <div class="col-md-12">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
                  </ul>
                </div>
              </div>

        </div>
        </div>
    </section>


        <!-- Footer -->
        <footer>
            <div class="container">
                <p>Derechos reservados &copy; 2023 Mi sitio web</p>
            </div>
        </footer>

        <script src="../../js/index.js"></script>
        <script src="../../js/script.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


    </body>
</html>