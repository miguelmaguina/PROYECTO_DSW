<?php
session_start();
$tipo=0;//0 no está logueado y aun puede estar en la página
// 1 está logueado como cliente

if(isset($_SESSION['tipo_usuario'])){
  if($_SESSION['tipo_usuario']== 'emprendimiento'){
      header("Location: ../index.php");
      exit();
  }else{
    $tipo=1;
  }
}//si no está logueado le aparece que necesita loguearse

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proforma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/styleProforma.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footer.css?v=<?php echo time(); ?>">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="../../js/proforma.js"></script>
<script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
</script>

</head>
<body>
<script> var sumaTotalB = 0; </script>
<?php  require 'header.php'; 
        require '../../Conexion/Conexion.php';
        require '../../Clases/Proforma.php';
        require '../../DAO/ProformaDAO.php';
        require '../../Clases/Producto.php';
        require '../../DAO/ProductoDAO.php';
        require '../../Clases/Emprendimiento.php';
        require '../../DAO/EmprendimientoDAO.php';

        $proformaDAO_conteo=new proformaDAO();
        $contadorCantProd=0;

        if($tipo==1){$proformas_conteo=$proformaDAO_conteo->listarPorIdCliente($_SESSION['id_c']);
    
        foreach($proformas_conteo as $proformaunidad)
        {
            $contadorCantProd++;
        }}
    ?>
    <section class="section-p container-fluid py-1">
        <div class="row d-flex justify-content-center">  
        
            <div class="col-lg-8">
            
            <div class="col-lg-9 d-flex justify-content-between">
                <div class="titulo-1 text-start fs-3 pt-3">Proforma</div>
                <h4 class="text-end pt-4" ><?=$contadorCantProd?> producto(s)</h4>
            </div>

            
            <?php if($tipo==0){ ?>
            <div class="row py-2">
                <div class="col-12 border border-1 p-3 text-center">                        
                    <h3>No ha iniciado sesión</h3>
                </div>
            </div>
            <?php 
                }else{
                $proformaDAO=new proformaDAO();
                $proforma=array();
                $proforma=$proformaDAO->listarPorIdCliente($_SESSION['id_c']);
                $i=0;
                if(empty($proforma)){
            ?>
            <section class="section-p container-fluid py-1">
                <div class="row py-2">
                    <div class="col-12 border border-1 p-3 text-center">  
                        <h3>No tiene ningún elemento</h3>
                    </div>
                </div>
            </section>
            <?php
                }else{
                    $contadorTotalPrecio = 0;

                    foreach($proforma as $valor){
                    
                    $idProducto=$valor->getID_Producto();
                    $producto=new Producto();
                    $productoDAO=new ProductoDAO();
                    $emprendimiento=new Emprendimiento();
                    $emprendimientoDAO=new EmprendimientoDAO();

                    $producto=$productoDAO->listarPorIdProducto($idProducto);
                    $idproduc=$producto->getID_Emprendimiento();
                    $emprendimiento=$emprendimientoDAO->listarPorIdEmprendimiento($idproduc);

                    if($producto->getDescuento()!=0){

                        $vacio=1;
                        $descuentoActual=$producto->getPrecio()-$producto->getPrecio()*$producto->getDescuento();
                    }else{
                        $descuentoActual=$producto->getPrecio();
                    }
                    $contadorTotalPrecio = $contadorTotalPrecio + $descuentoActual;
            ?>
            
            <div class="row py-2">
                    <div class="col-9 border border-1 p-3 justify-content-center fluid" style="border-radius:10px;background-color: var(--colorlight);max-width: 1000px">
                        <div class="position-absolute cerrar">
                            <a href="../Components/eliminarProforma.php?id=<?=$valor->getID_Proforma()?>" class="btn"><i class="fa-regular fa-rectangle-xmark"></i></a>
                        </div>
                        <div class="row p-3">
                        <div class="col-md-5 col-lg-6 pt-5">                     
                            <div id="carousel<?=$i?>" class="carousel carousel-dark slide " data-bs-ride="carousel">

                                <div class="carousel-inner mx-auto">
                                    <div class="carousel-item carrusel-img active">
                                    <img src="../../Image/Productos/Foto_Secundaria1/<?=$producto->getFoto_Secundaria1()?>" class="d-block img-fluid" alt="Imagen 1">
                                    </div>
                                    <div class="carousel-item carrusel-img">
                                        <img src="../../Image/Productos/Foto_Secundaria2/<?=$producto->getFoto_Secundaria2()?>" class="d-block img-fluid" alt="Imagen 2">
                                    </div>
                                    <div class="carousel-item carrusel-img">
                                        <img src="../../Image/Productos/Foto_Secundaria3/<?=$producto->getFoto_Secundaria3()?>" class="d-block img-fluid" alt="Imagen 3">
                                    </div>
                                </div>

                                <ol class="carousel-indicators">
                                <li data-bs-target="#carousel'.$i.'" data-bs-slide-to="0" class="active">
                                    <img class="img-thumbnail d-block w-100" src="../../Image/Productos/Foto_Secundaria1/<?=$producto->getFoto_Secundaria1()?>" alt="">
                                </li>
                                <li data-bs-target="#carousel'.$i.'" data-bs-slide-to="1">
                                    <img class="img-thumbnail d-block w-100" src="../../Image/Productos/Foto_Secundaria2/<?=$producto->getFoto_Secundaria2()?>" alt="">
                                </li>
                                <li data-bs-target="#carousel'.$i.'" data-bs-slide-to="2">
                                    <img class="img-thumbnail d-block w-100" src="../../Image/Productos/Foto_Secundaria3/<?=$producto->getFoto_Secundaria3()?>" alt="">
                                </li>
                                </ol>
                                
                                <a class="carousel-control-prev" href="#carousel<?=$i?>" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel<?=$i?>" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                                </a>
                            </div>

                        </div>

                        <div class="col-md-7 col-lg-6">
                            
                            <div class="row">
                                <div class="col-12 col-sm-11">
                                    <h3><?=$producto->getNombre()?></h3>
                                </div>
                            </div>
                            
                            <del>
                                <small>S/<?=round($descuentoActual,2)?></small>
                            </del>

                            <p class="fs-2">
                                S/<?=$descuentoActual?>
                                
                            </p>
                            <div class="row">
                                <div class="col-12">
                                    <p>Marca: <?=$emprendimiento->getNombre()?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>Ubicación: <?=$emprendimiento->getDepartamento()?></p>
                                </div>
                            </div>
                            <p>Fecha: <?=$valor->getFecha()?></p>
                            <div class="row">
                                <div class="col-12">
                                    <p>Departamento: <?=$emprendimiento->getDepartamento()?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p>Cantidad:
                                        <div class="align">
                                        <script>
                                            
                                        function capturarValor(value,i,precioU) {
                                            var valor = document.getElementById("cantidad-"+i).value;
                                            var precioxUnidad = valor * precioU;

                                            document.getElementById("resultado-"+i).value = precioxUnidad;

                                            base = parseFloat(document.getElementById("total-proforma").value);
                                            base = base + precioxUnidad;
                                            document.getElementById("total-proforma").value = base.toFixed(2);

                                            // Llamar a la función actualizarTotal
                                            actualizarTotal();
                                        }

                                        window.onload = function() {
                                            // Obtener todos los campos "cantidad"
                                            var cantidades = document.querySelectorAll("input[name='cantidad']");

                                            // Iterar sobre cada campo "cantidad"
                                            for (var i = 0; i < cantidades.length; i++) {
                                                var cantidad = cantidades[i].value;
                                                var precioU = cantidades[i].dataset.precio;
                                                capturarValor(cantidad, i, precioU);
                                            }

                                            // Llamar a la función actualizarTotal
                                            actualizarTotal();
                                        };

                                        function actualizarTotal() {
                                            var camposResultado = document.querySelectorAll("input[name^='resultado']");

                                            var total = 0;
                                            for (var i = 0; i < camposResultado.length; i++) {
                                                total += parseFloat(camposResultado[i].value);
                                            }

                                            document.getElementById("total-proforma").value = total.toFixed(2);
                                        }

                                        </script> 
                                            <input type="number" class="form-control" name="cantidad" id="cantidad-<?=$i?>" style="max-width:45%;" id="cantidad-<?=$i?>" min="1" max="50" value="1" data-precio="<?=$producto->getPrecio()?>" onchange="capturarValor(this.value,<?=$i?>,<?=$producto->getPrecio()?>)">
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <p >
                                        <input type="hidden" style="background-color: transparent; border: none;" id="resultado-<?=$i?>" name="resultado-<?=$i?>">
                                    </p>
                                </div>
                            </div>          
                    </div>
                    </div>

                </div>
            </div>
        <?php
        
        $i++;
          }
        }
      }

      ?>
            

        
<!--repeticion-->


            </div>


            <div class="col-lg-2">
            
            <?php $contadorTotalPrecio=0; ?>
            <?php if($contadorTotalPrecio>0){ ?>
                    <div class="titulo-1 text-start fs-3 pt-3">Resumen</div>
                    <div class="contenedor-p">
                        <h3>Total:</h3>
                        <h4 style="display: inline-block;">S/. <input id="total-proforma" name="total-proforma" value="0" style="background-color: transparent; border: none; display: inline-block;width: 80px;"></h4>
                        <form action="DescargarReporte_PDF.php" method="post" accept-charset="utf-8">
                            <button class="btn btn-izq w-100 mt-2">Generar</button>
                        </form>
                        
                        
                    </div>
                    </div>

            <?php }elseif($contadorTotalPrecio==0){ ?>
                    <div class="titulo-1 text-start fs-3 pt-3">Resumen</div>
                    <div class="contenedor-p">
                        <h3>Total:</h3>
                        <span> Seleccione productos para calcular el total.</span>
                        <form action="DescargarReporte_PDF.php" accept-charset="utf-8">
                            <button class="btn btn-izq w-100 mt-2" disabled>Generar</button>
                        </form>
                        
                    </div>
                    </div>
            <?php }elseif($tipo==0){ ?>
                    <div class="titulo-1 text-start fs-3 pt-3">Resumen</div>
                    <div class="contenedor-p">
                        <h3>Total:</h3>
                        <span> Inicie sesión para calcular el total.</span>
                        <form action="DescargarReporte_PDF.php" accept-charset="utf-8">
                            <button class="btn btn-izq w-100 mt-2" disabled>Generar</button>
                        </form>
                        
                    </div>
                    </div>
            <?php }?>
                
            </div>

        </div>
    </section>

        <!-- Footer -->
        <?php require 'footer.php' ?>

        <script src="../../js/index.js"></script>
        <script src="../../js/script.js"></script>

        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>


</body>
</html>