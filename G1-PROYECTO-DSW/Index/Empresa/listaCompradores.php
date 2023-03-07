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

//Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyfinal_dsw_g1";

//Creación de la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificación de la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

if (isset($_POST['añadir']))
{
    //Obtención de los valores de los parámetros
    $id_review = $_POST['id_review_añadir'];
    $id_prod = $_POST['id_prod_añadir'];
    $id_cliente = $_POST['id_cliente_añadir'];
    $estadobase2 = $_POST['estadobase2'];
    $comentariobase = $_POST['comentariobase'];
    //$fechahoy = $_POST['fechahoy'];

    //Consulta SQL para obtener Estado=2
    $sql = "SELECT * FROM Review WHERE Estado = ".$id_review;
    $result = $conn->query($sql);

    //Verificación de si hay resultados
    if ($result->num_rows > 0) {
    //Recorrido de los resultados
    while($row = $result->fetch_assoc()) {
        //Haz lo que necesites con cada fila de resultados
        //...
    }
    } else {
    echo "No se encontraron resultados";
    }

    //Cierre de la conexión
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaListaCompradoresEmp.css?v=<?php echo time(); ?>">
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

    <section class="section-t-o  py-5">
        <div class="contenedor-t">
                <div class="row">
                    <div class="button-container col-sm-12 col-md-12 mb-3 mt-4 text-white d-flex justify-content-center ">
                        <a href="#" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/listCompradores.png" alt="">
                        <span class="col-10 button-text">Manta Artesanal para abrigarte</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="button-container h-100 col-md-6 mt-4 text-white d-flex justify-content-center">
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
                    </div>
                </div>
            </div>
        </div>
            
        </div>
        </div>
    </section>

    <section class="content-productos p-2">
        <div class="contenedor-t">
        <div class="row">
            

            <div class=" contenedor-de-producto">
                <div class="row row-cols-lg-2 d-flex justify-content-center">

                <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>
    
                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->
                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->

                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->

                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->

                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->

                    <div class="col-lg-6 card card-emp m-1">
                        <h4 class="text-cabecera text-center py-1">Joy Hurles Ferron Oliva</h4>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <img src="../../Image/vision.jpg" alt="Descripción de la imagen" style="max-width: 100%; max-height:100%;">
                            </div>
                            <div class="col-md-6 pt-4">
                                <p class="card-texto">DNI:  <span>79566543</span></p>
                                <p class="card-texto text-truncate">Email: <span>joy.hurles.ferroli@unmsm.edu.pe</span></p>
                                <p class="card-texto">Celular: <span>968958636</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- repeticion -->

                    
                    

                </div>
    
                

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
            <div class="contenedor-t">
                <p>Derechos reservados &copy; 2023 Mi sitio web</p>
            </div>
        </footer>

        <script src="../../js/index.js"></script>
        <script src="../../js/script.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


</body>
</html>