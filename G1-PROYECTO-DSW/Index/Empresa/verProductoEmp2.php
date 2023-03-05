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

$db_name = 'mysql:host=localhost;dbname=proyfinal_dsw_g1';
$user_name = 'root';
$user_password = '';

$conexion = new PDO($db_name, $user_name, $user_password);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaVerProductoEmp2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

</head>

<body>    
    <?php require 'headerEmpresa.php';?>

    <section class="section-t-o container-fluid py-1">
        <div class="contenedor-t">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
            <div class="carousel">
                        <div class="carousel__contenedor">
                            <button aria-label="Anterior" class="carousel__anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>

                            <div class="carousel__lista">
                                
                            <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                            </div>

                            <button aria-label="Siguiente" class="carousel__siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                    </div>

            </div>
        </div>
        </div>
    </section>

    <?php
     require_once '../../DAO/ProductoDAO.php';
     //$conexion=new Conexion();
     $productoDAO_Index = new ProductoDAO();
      $productos = $productoDAO_Index->listarPorEmprendimiento();
                        
                        
    ?>

    <section class="container-fluid content-productos">
        <div class="contenedor-t">
        <div class="row border">
            
            <div class=" contenedor-de-producto">
                <div class="row row-cols-sm-2">

                    <!-- repeticion -->
                    
                    <?php    foreach($productos as $producto) {?>
                    <div class="col-sm-6 mb-4">
                        <div class="card card-emp m-2">
                        
                            <h4 class="text-cabecera text-center py-1">Lorem Lorem Lorem Lorem Lorem</h4>
                            <div class="row">

                                <div class="col-md-6 d-flex justify-content-center">
                                <?php
                                    $var=$producto->getFoto_Secundaria1();
                                    $pathFoto="../../Image/Productos/Foto_Secundaria1/$var";
                                    if(!file_exists($pathFoto)){
                                        $pathFoto="../../Image/Productos/Foto_Secundaria1/Foto_Secundaria1_none.png";  
                                    }
                                ?>
                                <img src="<?= $pathFoto?>" alt="Descripción de la imagen" style="max-width: 55%; max-height:55%;">
                                </div>
                                <div class="col-md-6">
                                    <p class="card-titulo"><?= $producto->getNombre() ?></p>
                                    <p class="card-texto">Código <span><?= $producto->getID_Producto() ?></span></p>
                                    <p class="card-texto">Disponible: <span><?= $producto->getDisponibilidad() ?></span></p>
                                    <p class="text-center">S/ <span><?= number_format($producto->getPrecio(),2,'.',','); ?></span></p>
                                    <div class="row text-center">
                                        <div class="col-lg-6">
                                        <a href="actualizarProducto.php" target="_self">
                                            <button class="btn w-100 m-1 btn-success">Editar</button>
                                        </a>
                                        </div>
                                        <div class="col-lg-6">
                                        <form action="../../Eliminar/EliminarProducto.php" method="post" >
                                            <input type="hidden" name="ID_Producto_Aux" id="ID_Producto_Aux" value="<?= $producto->getID_Producto() ?>">
                                            <button name= "delete" class="btn btn-danger mb-3 w-100"> Eliminar<?= $producto->getID_Producto() ?></button>
                                        </form>
                                        
                                        </div>
                                        
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12">
                                        <a href="listaCompradores.php" target="_self">
                                            <button class="btn btn-primary w-100 m-1">Compradores</button>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    
                    
                    </div>
                    <?php } ?>
                    <!-- repeticion -->
                    
                </div>
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
            <div class="container">
                <p>Derechos reservados &copy; 2023 Mi sitio web</p>
            </div>
        </footer>

        <script src="../../js/index.js"></script>
        <script src="../../js/script.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        

        <script src="../../js/carousel2.js?v=<?php echo time(); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>