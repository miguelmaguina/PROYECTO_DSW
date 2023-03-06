<?php
session_start();
$buscarActivado=1; //0 no aparece, 1 aparece
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
require '../Components/mensaje.php';
if($tipo==1){
    if(isset($_SESSION['mensaje'])){
        exito($_SESSION['mensaje']);
        $_SESSION['mensaje']=null;
    }
}else{
    alerta("Sesión no iniciada");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/styleTienda1.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>
    <script>
        // Obtener todas las cards con la clase "card card-t mb-3 border border-none"
        const cards = document.querySelectorAll('.card.card-t.mb-3.border.border-none');
        //jdfhgjndjfkgbjdfbvhbhj
        // Recorrer todas las cards y agregar el evento de clic
        cards.forEach(card => {
            card.addEventListener('click', function() {
            const id = this.id;
            filtrarPorSubcategoria(id);
            });
        });
    </script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

</head>
<body>
    
<?php  require 'header.php' ?>

    <!-- <div class="container-fluid p-0 contenedor-carrusel"> -->
    <div id="myCarousel" class="container-fluid carousel slide contenedor-carrusel p-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada-online.png" ></img>
        <div class="container">
          <div class="carousel-caption text-center">
                <h1 > ¡Apoya a las comunidades del Perú comprando sus productos!</h1>
            <p>Puedes adquirir productos naturales y artesanales de alta calidad en nuestra tienda en línea. Cada compra que realices ayuda a mantener vivas las tradiciones ancestrales y a preservar el patrimonio cultural de estas comunidades.</p>
            <br>
            <br>
            <br>
            <br>
            
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada-online.png"></img>
        <div class="container">
          <div class="carousel-caption text-center">
                <h1 > ¡Hazte con piezas únicas y especiales hechas por nuestras comunidades!</h1>
            <p>Nuestros productos están hechos con cariño y dedicación por las manos expertas de las comunidades. Cada pieza es una obra de arte en sí misma, y al adquirirla, estás contribuyendo a mejorar la calidad de vida de estas.</p>
            <br><br><br>
            <br>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada-online.png"></img>
        <div class="container">
          <div class="carousel-caption text-center">
                <h1 >¡Compra con responsabilidad ambiental en nuestra tienda!</h1>
            <p>¿Te preocupa el impacto ambiental de tus compras? En nuestra tienda en línea, encontrarás una amplia selección de productos naturales y artesanales que se producen de manera sostenible y respetuosa con el medio ambiente.</p>
            <br><br><br>
            <br>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="img-prev carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="img-next carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    <!-- </div> -->


    <section class="container-fluid py-3">
        <div class="row text-center">
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-1.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Variedad de productos peruanos seleccionados</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-2.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Envios garantizados a nivel nacional</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-3.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Descubre los mejores alimentos y productos del Perú</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--parte estatica-->
    <?php
        require_once "../../DAO/SubCategoriaDAO.php";
        $subcategoria_tienda1 = new SubCategoriaDAO();
        $subcategorias=$subcategoria_tienda1->listar();
    ?>
    
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
                                <div class="card card-t mb-3 border border-none" id="subcategoria<?=$subcategoria->getID_Subcategoria()?>">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                        <?php
                                            $var=$subcategoria->getID_SubCategoria();
                                            $pathFotoSubcat="../../Image/Subcategorias/subcategoria_$var.png";
                                            if(!file_exists($pathFotoSubcat)){
                                                $pathFotoSubcat="../../Image/Subcategorias/none.png";  
                                            }
                                        ?>
                                        <img class="card-img" alt="Imagen" src="<?= $pathFotoSubcat?>" >
                                        </a>
                                        </div>
                                        <div class="col-8 d-flex justify-content-center align-items-center">
                                            <div class="card-body">
                                            <h5 class="card-title"><?= $subcategoria->getNombre()?></h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
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

    <!--parte dinamica-->

    <!--inicio de los productos que se mostrarán-->
    <?php 
        require_once '../../DAO/ProductoDAO.php';
        $productoDAO_Index = new ProductoDAO();
        $productos = $productoDAO_Index->listar();
        $numProd = $productoDAO_Index->contarProductos();
    ?>
    <div class="container-fluid content-productos">
        <div class="contenedor-t">
        <div class="row border">
            <div class="col-md-3">
                <h5>Todos</h5>
                <p><?= $numProd?> productos</p>
                <p></p>
                
                <h5>Categorías</h5>
                <p class="text lh-4"> 
                    <?php
                        require_once '../../DAO/ProductoConsulta.php';
                        $cateProd_Consulta = new ProductoConsulta();
                        $consulta1 = $cateProd_Consulta->listarCategoriasxProductos();
                    ?>
                </p>

                <p></p>

                <h5>SubCategorías</h5>
                <p class="text lh-4"> 
                    <?php
                        $consulta2 = $cateProd_Consulta->listarSubcategoriasxProductos();
                    ?>
                </p>

                <p></p>

                <h5>Emprendimientos</h5>
                <p class="text lh-4"> 
                    <?php
                        $consulta3 = $cateProd_Consulta->listarEmprendimientosxProductos();
                    ?>
                </p>

                <p></p>
            </div>

            <div class="col-md-9 contenedor-de-producto">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3">

                <!--repeticion PRUEBA-->
            
                
                <?php    foreach($productos as $producto) {?>
                <div class="col-sm-6 col-lg-4 mb-4" id="contenedor-productos">
                    <div class="card card-t-o position-relative m-2">
                        <a class="subcategoria-link" href="verProducto.php?id=<?= $producto->getID_Producto();?>">
                        <?php
                            $var=$producto->getFoto_Secundaria1();
                            $pathFoto="../../Image/Productos/Foto_Secundaria1/$var";
                            if(!file_exists($pathFoto)){
                                $pathFoto="../../Image/Productos/Foto_Secundaria1/Foto_Secundaria1_none.png";  
                            }
                        ?>
                        
                        <img class="card-img-top" alt="Imagen del producto" src="<?= $pathFoto?>">
              
                        <div class="position-absolute favorito">
                            <?php
                            
                            if($tipo==1){
                            echo'<a href="../Components/agregarFavorito.php?id='.$producto->getID_Producto().'" class="btn btn-light"><i class="far fa-heart"></i></a>';
                            }else{
                                echo'<a href="#" class="btn btn-light disabled" id="alert-link" ><i class="far fa-heart"></i></a>
                                ';
                            }
                            ?>
                        </div>
                        <div class="position-absolute carrito">
                            <a href="#" class="btn btn-light ms-2"><i class="fas fa-shopping-cart"></i></a>
                        </div>

                        <div class="card-body">
                                <h5 class="card-title text text-truncate">
                                    <?= $producto->getNombre() ?>
                                </h5>
                                <span class="card-text">
                                    S/<?= number_format($producto->getPrecio(),2,'.',','); ?>
                                </span> 
                                <small style="color: green">
                                <?php 
                                    $num=$producto->getDescuento();
      
                                    echo number_format($num*100);

                                    ?>% descuento
                                </small>
                        </div>
                    </div>
                    </a>
                </div>
            <?php } ?>
            
                            
        

                <!--repeticion-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-t-o position-relative m-2">
                            <img src="../../Image/Artesanos.png" class="card-img-top" alt="Imagen del producto">
                            <div class="position-absolute favorito">
                                <a href="#" class="btn btn-light"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="position-absolute carrito">
                                    <a href="#" class="btn btn-light ms-2"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text">Nombre del producto</h5>
                                <span class="card-text">S/100.00</span> <small>10% descuento</small>
                            </div>
                        </div>
                    </div>

                    <!--repeticion-->
    
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-t-o position-relative m-2">
                            <img src="../../Image/imgReporte.png" class="card-img-top" alt="Imagen del producto">
                            <div class="position-absolute favorito">
                                <a href="#" class="btn btn-light"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="position-absolute carrito">
                                    <a href="#" class="btn btn-light ms-2"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text">Nombre del producto</h5>
                                <span class="card-text">S/100.00</span> <small>10% descuento</small>
                            </div>
                        </div>
                    </div>
    
                    <!--repeticion-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-t-o position-relative m-2">
                            <img src="../../Image/juguete.png" class="card-img-top" alt="Imagen del producto">
                            <div class="position-absolute favorito">
                                <a href="#" class="btn btn-light"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="position-absolute carrito">
                                    <a href="#" class="btn btn-light ms-2"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text">Nombre del producto</h5>
                                <span class="card-text">S/100.00</span> <small>10% descuento</small>
                            </div>
                        </div>
                    </div>

                <!--repeticion-->
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-t-o position-relative">
                            <img src="../../Image/juguete.png" class="card-img-top" alt="Imagen del producto">
                            <div class="position-absolute favorito">
                                <a href="#" class="btn btn-light"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="position-absolute carrito">
                                    <a href="#" class="btn btn-light ms-2"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                            <div class="card-body">
                            <h5 class="card-title text">Nombre del producto</h5>
                            <span class="card-text">S/100.00</span> <small>10% descuento</small>
                            </div>
                        </div>
                    </div>


                    <!--repeticion-->

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
    </div>
    
                  

        <!-- Footer -->
        <?php require 'footer.php' ?>

        <script src="../../js/index.js?v=<?php echo time(); ?>"></script>
        
        <script src="../../js/script.js"></script>

        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <script src="../../js/carousel2.js?v=<?php echo time(); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        

        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>