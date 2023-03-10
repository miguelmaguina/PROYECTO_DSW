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

require '../Components/mensaje.php';
if($tipo==1){
    if(isset($_SESSION['mensaje'])){
        exito($_SESSION['mensaje']);
        $_SESSION['mensaje']=null;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/styleVerProducto.css?v=<?php echo time(); ?>">
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
    function scrollToDiv() {
      // Desplazarse hasta el div
      var div = document.getElementById("seccion-destino");
      div.scrollIntoView();

      // Resaltar el rectángulo por 2 segundos
      div.classList.add("resaltar");
      setTimeout(function() {
        div.classList.remove("resaltar");
      }, 7000);
    }
  </script>

</head>
<body>
    <?php  require 'header.php' ?>
    <?php
      require_once '../../DAO/ProductoDAO.php';
    
      $idP = $_GET['id'];

      $productoDAO_ver = new ProductoDAO();
      $producto = $productoDAO_ver->listarPorIdProducto($idP);

      $var1=$producto->getFoto_Secundaria1();
      $var2=$producto->getFoto_Secundaria2();
      $var3=$producto->getFoto_Secundaria3();

      $pathFoto1="../../Image/Productos/Foto_Secundaria1/$var1";
      $pathFoto2="../../Image/Productos/Foto_Secundaria2/$var2";
      $pathFoto3="../../Image/Productos/Foto_Secundaria3/$var3";

      if(!file_exists($pathFoto1)){
          $pathFoto1="../../Image/Productos/Foto_Secundaria1/Foto_Secundaria1_none.png";  
      }
      if(!file_exists($pathFoto2)){
          $pathFoto2="../../Image/Productos/Foto_Secundaria2/Foto_Secundaria2_none.png";  
      }
      if(!file_exists($pathFoto3)){
          $pathFoto3="../../Image/Productos/Foto_Secundaria3/Foto_Secundaria3_none.png";  
      }

    ?> 
    
    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                  <div class="ms-5 col-sm-10 col-md-12 col-lg-6 pl-2 h-75 border d-flex align-items-center justify-content-center">
                      <div id="carouselExampleIndicators" class="carousel carousel-dark slide " data-bs-ride="carousel">

                            <div class="carousel-inner mx-auto">
                                <div class="carousel-item carrusel-img active">
                                  <img src="<?= $pathFoto1?>" class="d-block img-fluid" alt="Imagen 1">
                                </div>
                                <div class="carousel-item carrusel-img">
                                    <img src="<?= $pathFoto2?>" class="d-block img-fluid" alt="Imagen 2">
                                </div>
                                <div class="carousel-item carrusel-img">
                                    <img src="<?= $pathFoto3?>" class="d-block img-fluid" alt="Imagen 3">
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                                <img class="img-thumbnail d-block w-100" src="<?= $pathFoto1?>" alt="">
                              </li>
                              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                                <img class="img-thumbnail d-block w-100" src="<?= $pathFoto2?>" alt="">
                              </li>
                              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                                <img class="img-thumbnail d-block w-100" src="<?= $pathFoto3?>" alt="">
                              </li>
                            </ol>
                            
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Siguiente</span>
                            </a>
                        </div>
                      </div>
                    
                                        
                    <div class="p1 col-sm-12 col-md-12 col-lg-5 pt-4">
                        <div class="row mb-2 ">
                            <div class="col-9 col-sm-10 pb-3">
                                <h2><?php echo $producto->getNombre();?></h2>
                            </div>
                            <div class="col-3 col-sm-2">
                              <?php
                                if($tipo==1){
                                  echo '<a href="../Components/agregarFavorito.php?id='.$producto->getID_Producto().'" class="btn btn-light"><i class="far fa-heart"></i></i></a>';
                                }else{
                                  echo '<a href="#" class="btn btn-light disabled"><i class="far fa-heart"></i></i></a>';
                                }
                              ?>
                            </div>
                        </div>
                        <del><medium>S/<?= number_format($producto->getPrecio(),2,'.',','); ?></medium></del>
                        <p class="fs-2 mt-2">
                          S/<?= 
                              $precioBase=$producto->getPrecio();
                              $desc=$producto->getDescuento();
                              $precioFinal=number_format($desc*$precioBase);
                              number_format($precioFinal,2,'.',','); 
                            ?>  
                          <small class="desc">
                            <?= 
                              $num=$producto->getDescuento();
                              number_format($num*100);
                            ?>% descuento
                          </small> 
                        </p>
                        <?php
                          require_once '../../DAO/EmprendimientoDAO.php';

                          $idEmp = $producto->getID_Emprendimiento();

                          $emprendimientoDAO_ver = new EmprendimientoDAO();
                          $emprendimiento = $emprendimientoDAO_ver->listarPorIdEmprendimiento($idEmp);
                        ?>
                        <div class="row pt-3">
                          <div class="col-sm-2">
                            <p>Marca:</p>
                          </div>
                          <div class="col-sm-10">
                            <p> <?php echo $emprendimiento->getNombre(); ?> </p>
                          </div>
                       
                          <div class="col-sm-2">
                            <p>Dirección:</p>
                          </div>
                          <div class="col-sm-10">
                            <p> <?php echo $emprendimiento->getDireccion(); ?> </p>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col-sm-10">
                          <?php
                            if($tipo==1){
                              $idUsuario = $_SESSION['id_c'];
                              require_once "../../DAO/ReviewDAO.php";
                              $review_admitirReview = new ReviewDAO();
                              $review_ultima = new ReviewDAO();
                              $reviewsPendientesUsuarioxProductoActual = $review_admitirReview->listarReviewsxCliente($idUsuario,$idP);
                            
                            $contador0=0;
                            $contador1=0;
                            $contador2=0;

                              $revisiónPendiente = false;
                              $revisiónEnviada = false;
                              $reviewestadobase = false;
                              foreach ($reviewsPendientesUsuarioxProductoActual as $reviewU) {
                                if ($reviewU->getEstado() == 1) {
                                  $revisiónEnviada = true;
                                  $contador1++;
                                } elseif ($reviewU->getEstado() == 0) {
                                  $revisiónPendiente = true;
                                  $contador0++;
                                  $reviewActual = $reviewU->getID_Review();
                                } elseif ($reviewU->getEstado() == 2){
                                  $reviewestadobase = true;
                                  $contador2++;
                                } 
                              }
                              //echo "contador 0: ".$contador0." - contador 1 : ".$contador1." - contador 2: ".$contador2;
                              ?>
                              <?php if ($contador0==1 || $contador1>1) { ?>
                                <button href="#seccion-destino" onclick="scrollToDiv()" type="button" class="btn btn-izq w-100 ">Escriba su review</button>    
                              
                              <?php } elseif ($contador2>1 || $contador2==1){ ?>
                                <button type="button" class="btn btn-izq w-100" disabled>Pendiente</button>
                              <?php }else{ 
                                $ReviewIDBase=$review_ultima->obtenerUltimoIdReview()+1;
                                $estadobase2=2;
                                $fechaahoyPreliminar='2023-01-01';
                                $descripcionPreliminar=null;
                                
                              ?>
                                <form method="POST" action="../../Agregar/AgregarReview.php">
                                  <input type="hidden" class="btn-outline-white" name="id_review_añadir" id="id_review_añadir" value="<?=$ReviewIDBase?>"></input>
                                  <input type="hidden" class="btn-outline-white" name="id_prod_añadir" id="id_prod_añadir" value="<?=$idP?>"></input>
                                  <input type="hidden" class="btn-outline-white" name="id_cliente_añadir" id="id_cliente_añadir" value="<?=$idUsuario?>"></input>
                                  <input type="hidden" class="btn-outline-white" name="estadobase2" id="estadobase2" value="<?=$estadobase2?>"></input>
                                  <input type="hidden" class="btn-outline-white" name="comentariobase" id="comentariobase" value="<?$descripcionPreliminar?>"></input>
                                  <input type="hidden" class="btn-outline-white" name="fechahoy" id="fechahoy" value="<?=$fechaahoyPreliminar?>"></input>
                                  
                                  <button type="submit" name="añadir" class="btn btn-izq w-100 ">Contactar</button>
                                  <p></p>
                                </form>
                          <?php } ?>
                          <?php }elseif($tipo==0){ ?>
                            <button href="iniciarSesion.php" type="button" class="btn btn-izq w-100 " disabled>Contactar</button>    
                            
                          <?php } ?>

                          <!--Comentando el boton antiguo-->
                          </div>
                          <div class="col-sm-2">
                          <?php
                            
                            if($tipo==1){
                            echo'<a href="../Components/agregarProforma.php?id='.$producto->getID_Producto().'" class="btn btn-light"><i class="fa-sharp fa-solid fa-file"></i></a>';
                            }else{
                                echo'<a href="#" class="btn btn-light disabled" id="alert-link" ><i class="fa-sharp fa-solid fa-file"></i></a>
                                ';
                            }
                            ?>
                          </div>
                        </div>
                    </div>
            </div>
            
            <div class="row accordion-p">
              <div class="accordion accordion-flush"  id="accordionFlushExample">


                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Detalles del Vendedor:    <?=$emprendimiento->getNombre(); ?>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="row pt-3">
                          <div class="col-md-4 rounded border" style="border-color: #707070; border-radius: 10px;text-align: center;">
                            <img src="../../Image/Emprendimientos/logo_<?=$emprendimiento->getID_Emprendimiento();?>.png" alt="Imagen del Emprendimiento<?=$emprendimiento->getNombre();?>" class="img-fluid" style=" object-fit: contain;max-height: 240px;">
                          </div>
                          <div class="col-md-4 pt-5">

                            <div class="row align-items-center">
                              <div class="col-4">
                                <p>Nombre:</p>
                              </div>
                              <div class="col-8">
                                <p><?php echo $emprendimiento->getNombre(); ?> </p>
                              </div>
                              <div class="col-4">
                                <p>Celular:</p>
                              </div>
                              <div class="col-8">
                                <p><?php echo $emprendimiento->getCelular(); ?> </p>
                              </div>
                              <div class="col-4">
                                <p>Dirección:</p>
                              </div>
                              <div class="col-8">
                                <p><?php echo $emprendimiento->getDireccion(); ?> </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 pt-5">
                            <div class="row align-items-center">
                              <div class="col-4">
                                <p>Email:</p>
                              </div>
                              <div class="col-8">
                                <p><?php echo $emprendimiento->getEmail(); ?> </p>
                              </div>
                              <div class="col-4">
                                <p>Departamento:</p>
                              </div>
                              <div class="col-8">
                                <p><?php echo $emprendimiento->getDepartamento(); ?> </p>
                              </div>
                              <div class="col-4">
                                <p>Redes y/o Web:</p>
                              </div>
                              <div class="col-8 d-flex align-items-center">
                                <?php if ($emprendimiento->getURL_Web()) { ?>
                                <a href="<?=$emprendimiento->getURL_Web()?>" class="fa fa-globe me-2" style="font-size: 23px; color: #1A2B42;" target="_blank"></a>
                                <?php } ?>
                                <?php if ($emprendimiento->getURL_Facebook()) { ?>
                                <a href="<?=$emprendimiento->getURL_Facebook()?>" class="fa fa-facebook me-2" style="font-size: 23px; color: #1A2B42;" target="_blank"></a>
                                <?php } ?>
                                <?php if ($emprendimiento->getURL_Instagram()) { ?>
                                <a href="<?=$emprendimiento->getURL_Instagram()?>" class="fa fa-instagram me-2" style="font-size: 23px; color: #1A2B42;" target="_blank"></a>
                                <?php } ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>


                <div class="accordion-item">
                 
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Detalles del Producto:    <?=$producto->getNombre(); ?>
                      </button>
                    </h2>
                    <?php
                      require_once "../../DAO/CategoriaDAO.php";
                      require_once "../../DAO/SubcategoriaDAO.php";
                      $subcategoriaindexR = new SubCategoriaDAO();
                      $categoriaindexR = new CategoriaDAO();

                      $categoria = $categoriaindexR->listarPorIdCategoria($producto->getID_Categoria());
                      $subcategoria = $subcategoriaindexR->listarPorIdSubCategoria($producto->getID_Subcategoria());

                    ?>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        <div class="row pt-3">
                          <div class="col-md-4 rounded border" style="border-color: #707070; border-radius: 10px;text-align: center;">
                            <img src="../../Image/Productos/Foto_Secundaria1/<?=$producto->getFoto_Secundaria1();?>" alt="Imagen del Producto <?=$producto->getNombre();?>" class="img-fluid" style=" object-fit: contain;max-height: 290px;"/>
                          </div>
                          <div class="col pt-3">

                            <div class="row align-items-center">
                                <div class="col-3 text-end ym-1">
                                  <p>Nombre:</p>
                                </div>
                                <div class="col-9">
                                  <p><?php echo $producto->getNombre(); ?> </p>
                                </div>
                                <div class="col-3 text-end ym-1">
                                  <p>Descripcion:</p>
                                </div>
                                <div class="col-9">
                                  <p><?php echo $producto->getDescripcion(); ?> </p>
                                </div>
                                <div class="col-3 text-end ym-1">
                                  <p>Categoria:</p>
                                </div>
                                <div class="col-9">
                                  <p><?php echo $categoria->getNombre(); ?> </p>
                                </div>
                                <div class="col-3 text-end ym-1">
                                  <p>Subcategoria:</p>
                                </div>
                                <div class="col-9">
                                  <p><?php echo $subcategoria->getNombre(); ?> </p>
                                </div>
                                <div class="col-3 text-end ym-1">
                                  <p>Precio:</p>
                                </div>
                                <div class="col-9">
                                  <p>     
                                    S/<?= 
                                      $precioBase=$producto->getPrecio();
                                      $desc=$producto->getDescuento();
                                      $precioFinal=number_format($desc*$precioBase);
                                      number_format($precioFinal,2,'.',','); 
                                    ?>       
                                  </p>
                                </div>
                                <div class="col-3 text-end ym-1">
                                  <p>Disponibilidad:</p>
                                </div>
                                <div class="col-9">
                                  <p>Contactar con el emprendimiento para más información</p>
                                </div>
                              </div>
                            </div>

                        </div>
                      </div>
                    </div>

                </div>


                  
              </div>
            </div>

        <!--Seccion comentarios-->
        
        <div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
              <div class="card text-dark">
                
                <div class="card-body p-4">

                  <h4 class="mb-0">Review</h4>
                  <p class="fw-light mb-4 pb-2">Últimos comentarios de los usuarios</p>
                  <?php
                    require_once "../../DAO/ReviewDAO.php";
                    $review_tienda = new ReviewDAO();
                    $reviews1 = $review_tienda->listarReviewsxProducto($idP);
                  ?>
                  <?php if (empty($reviews1)) { ?>
                  <!--si no hay reviews-->  
                  <div class="card-body p-4">
                    <div class="d-flex flex-start">
                      <img class="rounded-circle shadow-1-strong me-3"
                        src="../../Image/usuario_review.png" alt="" width="60" height="60" />
                      <div>
                        <h6 class="fw-bold mb-1">Usuario</h6>
                        <div class="d-flex align-items-center mb-3">
                          <p class="mb-0">
                            <?php
                              $fecha_actual = date("F j, Y", strtotime("now"));
                              echo $fecha_actual;
                            ?>
                          </p>
                        </div>
                        <p class="mb-0">Todavía no existen reviews para este producto.</p>
                      </div>
                    </div>
                  </div>

                  <!--si hay reviews-->
                  <?php }else{
                    require_once "../../DAO/ClienteDAO.php";
                    $cliente_buscar = new ClienteDAO();
                  ?>
                  <?php foreach($reviews1 as $review1) {
                    $cliente=$cliente_buscar->listarPorIdCliente($review1->getID_Cliente());
                   if($review1->getEstado()==1){
                  ?>
                 
                  <div class="card-body p-4">
                    <div class="d-flex flex-start">
                      <img class="rounded-circle shadow-1-strong me-3"
                        src="../../Image/Clientes/<?=$cliente->getFoto_Perfil()?>" alt="" width="60" height="60" />
                      <div>
                      <h6 class="fw-bold mb-1">
                        <?php echo $cliente->getNombres();?> <?php echo $cliente->getApellidos();?>
                      </h6>
                      <div class="d-flex align-items-center mb-3">
                        <?php
                            $fecha = DateTime::createFromFormat('Y-m-d', $review1->getFecha());

                            $fecha_formateada = $fecha->format('F j, Y');
                        ?>
                        <p class="mb-0">
                          <?php echo $fecha_formateada?>
                        </p>
                      </div>
                        <p class="mb-0">
                          <?php echo $review1->getComentario()?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <?php }else{ ?>
                  <!--si no hay reviews-->  
                  <div class="card-body p-4">
                    <div class="d-flex flex-start">
                      <img class="rounded-circle shadow-1-strong me-3"
                        src="../../Image/usuario_review.png" alt="" width="60" height="60" />
                      <div>
                        <h6 class="fw-bold mb-1">Usuario</h6>
                        <div class="d-flex align-items-center mb-3">
                          <p class="mb-0">
                            <?php
                              $fecha_actual = date("F j, Y", strtotime("now"));
                              echo $fecha_actual;
                            ?>
                          </p>
                        </div>
                        <p class="mb-0">Todavía no existen reviews para este producto.</p>
                      </div>
                    </div>
                  </div>
                <?php }}} ?> 
                </div>
                
                
              </div>
            </div>
          </div>


          <!--AÑADIR MI COMENTARIO/REVIEW-->
          <?php if($tipo==1){?>
          <div id="seccion-destino" >
          
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <div class="card" style="padding-left: 20px;">
                    <div  class="card-body p-4">
                      <div class="d-flex flex-start w-100">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="../../Image/Clientes/<?=$_SESSION['foto_c']?>" alt="avatar" width="60" height="60" />
                        <div class="w-100">
                          <h5>Añade una review</h5>
                          
                                                 
                            <?php if($contador0>=1){ 
                              $estadobase1=1;
                            ?>
                                          
                            <form method="POST" action="../../Actualizar/ActualizarReview.php">
                              <div class="form-outline">
                              <textarea class="form-control" id="textAreaExample" name="comentario" rows="3" style="padding-right: 40px;"></textarea>
                              <label class="form-label" for="textAreaExample">Cuentanos mas acerca del producto que compraste.</label>
                              </div>
                              <div class="d-flex justify-content-between mt-3">
                                <input type="hidden" class="btn-outline-white" name="id_review" id="id_review" value="<?=$reviewActual?>"></input>
                                <input type="hidden" class="btn-outline-white" name="estadobase1" id="estadobase1" value="<?=$estadobase1?>"></input>
                                <input type="hidden" class="btn-outline-white" name="id_prod" id="id_prod" value="<?=$idP?>"></input>
                                <input type="hidden" class="btn-outline-white" name="id_cliente" id="id_cliente" value="<?=$idUsuario?>"></input>

                                <button type="submit" class="btn btn-success" name="actualizar"> 
                                  Enviar <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                </button>
                              </div>
                            </form> 
                            <?php }else{
                            ?>
                              <div class="form-outline">
                              <textarea class="form-control" id="textAreaExample" rows="3" style="padding-right: 40px;" disabled></textarea>
                              <label class="form-label" for="textAreaExample">Cuentanos mas acerca del producto que compraste.</label>
                              </div>
                              <div class="d-flex justify-content-between mt-3">
                                <a type="hidden" class="btn btn-outline-white" disabled></a>
                                <button type="button" class="btn btn-success" disabled>
                                  Enviar <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                </button>
                              </div>
                            <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           
          <?php }elseif($tipo==0){?>
          <div >
          
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <div class="card" style="padding-left: 20px;">
                    <div  class="card-body p-4">
                      <div class="d-flex flex-start w-100">
                      <img class="rounded-circle shadow-1-strong me-3"
                        src="../../Image/usuario_review.png" alt="" width="60" height="60" />
                        <div class="w-100">
                          <h5>Añade una review</h5>
                          
                          <div class="form-outline">
                              <textarea class="form-control" id="textAreaExample" name="comentario" rows="3" style="padding-right: 40px;" disabled>Debe iniciar sesion para acceder a esta función.</textarea>
                              <label class="form-label" for="textAreaExample">Cuentanos mas acerca del producto que compraste.</label>
                              </div>
                              <div class="d-flex justify-content-between mt-3">
                          
                                <button class="btn btn-success" name="actualizar" disabled> 
                                  Enviar <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                </button>
                              </div>
 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>   
        </div>
      
       <?php } ?>

      </div>

        <!-- Footer -->
        <?php require 'footer.php' ?>

        <script src="../../js/index.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        
        <!-- Scripts Boton de Review -->
        <script src="../../js/botonreview.js"></script>
</body>
</html>