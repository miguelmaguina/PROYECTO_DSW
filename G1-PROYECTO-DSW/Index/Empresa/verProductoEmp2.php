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
    <?php
        require_once "../../DAO/SubCategoriaDAO.php";
        $subcategoria_tienda1 = new SubCategoriaDAO();
        $subcategorias=$subcategoria_tienda1->listar();
    ?>

<div class="float-button d-none">
    <a href="#"><i class="fa-solid fa-eye"></i></a>
</div>
    

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
                            <?php foreach($subcategorias as $subcategoria){?>
                                <div>
                                <a href="#" id="boton-car" class="categoria text-decoration-none" data-categoria="<?= $subcategoria->getNombre()?>">
                                <div class="card card-t mb-3 border border-none">
                                
                                
                                    <div class="row no-gutters ">
                                    
                                        
                                        <div class="col-4">
                                        <?php
                                            $var=$subcategoria->getID_SubCategoria();
                                            $pathFotoSubcat="../../Image/Subcategorias/subcategoria_$var.png";
                                            if(!file_exists($pathFotoSubcat)){
                                                $pathFotoSubcat="../../Image/Subcategorias/none.png";  
                                            }
                                        ?>
                                        <img class="card-img" alt="Imagen" src="<?= $pathFotoSubcat?>" >
                                        
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title"><?= $subcategoria->getNombre()?></h5>
                                            
                                            </div>
                                        </div>
                                   </div>
                                
                                </div> 
                                    </a>
                                        </div>
                                <?php } ?>
                            
                                
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
     require_once '../../DAO/ReviewDAO.php';
     //$conexion=new Conexion();
     $productoDAO_Index = new ProductoDAO();
     $reviewDAO_Index = new ReviewDAO();
     $productos = $productoDAO_Index->listarPorEmprendimiento();
                        
                        
    ?>

    <section class="container-fluid content-productos">
        <div class="contenedor-t">
        <div class="row border">
            
            <div class=" contenedor-de-producto">
                <div class="row row-cols-sm-2">

                    <!-- repeticion -->
                    
                    <?php    foreach($productos as $producto) {
                        $idsubc=$producto->getID_Subcategoria();
                        $subcatego=new SubCategoriaDAO();
                        $subcat=$subcatego->listarPorIdSubCategoria($idsubc);
                        $nombresubcategoria=$subcat->getNombre();
                    ?>
                    <div class="tarjeta col-sm-6 mb-4" data-categoria="<?php echo $nombresubcategoria; ?>">
                        <div class="card card-emp m-2">
                        
                            <h5 class="text-cabecera text-center py-1"><?= $producto->getNombre() ?></h5>
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
                                    
                                    <p class="card-texto">Código <span><?= $producto->getID_Producto() ?></span></p>
                                    <p class="card-texto">Disponible: <span><?= $producto->getDisponibilidad() ?></span></p>
                                    <p >S/ <span><?= number_format($producto->getPrecio(),2,'.',','); ?></span></p>
                                    <div class="row text-center">
                                        <div class="col-lg-6">
                                        <form action="../Empresa/actualizarProducto.php" method="get" >
                                            <input type="hidden" name="$ID_producto_actu" value="<?= $producto->getID_Producto() ?>">
                                            <button name="update" class="btn btn-success mb-3 w-100 text-trunc">Editar</button>
                                        </form>
                                        
                                        </div>
                                        <div class="col-lg-6">
                                        <form action="../../Eliminar/EliminarProducto.php" method="post" >
                                            <input type="hidden" name="ID_Producto_Aux" id="ID_Producto_Aux" value="<?= $producto->getID_Producto() ?>">
                                            <button name= "delete" class="btn btn-danger mb-3 w-100"> Eliminar</button>
                                        </form>
                                        
                                        </div>
                                        
                                    </div>
                                    <div class="row text-center">
                                        <div class="col-12">

                                        <form action="listaCompradores.php" method="post">
                                            <input type="hidden" name="ID_Producto_Aux2" id="ID_Producto_Aux2" value="<?= $producto->getID_Producto() ?>">
                                            <button name="compradores" class="btn btn-primary position-relative w-100 m-1">
                                                    Compradores
                                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                        <?= $reviewDAO_Index->getNroDeReviewsPendientes($producto->getID_Producto()) ?>
                                                    </span>
                                            </button>
                                        </form>
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

    <script>
        const categorias = document.querySelectorAll('.categoria');
        const botonFlotante = document.querySelector('.float-button');

        botonFlotante.addEventListener('click', () => {

            botonFlotante.classList.add('boton-flotante-animacion');
        
            const productos = document.querySelectorAll('.tarjeta');
            productos.forEach(producto => {
                producto.classList.remove('d-none');
                setTimeout(() => {
                    botonFlotante.classList.remove('boton-flotante-animacion');
                    botonFlotante.classList.add('d-none');
                }, 300);
                
            });
        });
        

        categorias.forEach(categoria => {
        categoria.addEventListener('click', () => {
            const categoriaSeleccionada = categoria.dataset.categoria;
            
            const productos = document.querySelectorAll('.tarjeta');
            productos.forEach(producto => {
            if (producto.dataset.categoria === categoriaSeleccionada) {
                producto.classList.remove('d-none');
            } else {
                producto.classList.add('d-none');
            }
            });
            botonFlotante.classList.add('boton-flotante-animacion');
            setTimeout(() => {
                    botonFlotante.classList.remove('boton-flotante-animacion');
                    botonFlotante.classList.remove('d-none');
                }, 300);
            
        });
        });
  </script>

        <script src="../../js/index.js"></script>
        <script src="../../js/script.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        

        <script src="../../js/carousel2.js?v=<?php echo time(); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>