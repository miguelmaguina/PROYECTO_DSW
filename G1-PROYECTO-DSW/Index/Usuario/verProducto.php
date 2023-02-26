<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/styleVerProducto.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php  require 'header.php' ?>
      
    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">

                    <div class=" col-sm-12 col-md-12 col-lg-6 border boder-5  d-flex align-items-center justify-content-center">
                        <div id="carouselExampleIndicators" class="carousel carousel-dark slide " data-bs-ride="carousel">

                            <div class="carousel-inner mx-auto">
                                <div class="carousel-item carrusel-img active">
                                  <img src="../../Image/juguete.png" class="d-block img-fluid" alt="Imagen 1">
                                </div>
                                <div class="carousel-item carrusel-img">
                                    <img src="../../Image/juguete.png" class="d-block img-fluid" alt="Imagen 2">
                                </div>
                                <div class="carousel-item carrusel-img">
                                    <img src="../../Image/vision.jpg" class="d-block img-fluid" alt="Imagen 3">
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
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
                    <div class="p1 col-sm-12 col-md-12 col-lg-5">
                        <div class="row">
                            <div class="col-9 col-sm-10">
                                <h2>MANTA ARTESANAL PARA ABRIGARTE</h2>
                            </div>
                            <div class="col-3 col-sm-2">
                                <button class="btn btn-light w-75 "><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                        <del><small>S/333.00</small></del>
                        <p class="fs-2">S/300.00  <small class="desc">10% descuento</small> </p>
                        <div class="row">
                            <div class="col-sm-2">
                                <p>Marca</p>
                            </div>
                            <div class="col-sm-10">
                                <p>Mantas ecológicas del Perú (Nombre largo)</p>
                            </div>
                        </div>
                        <p>Ubicación: Lima</p>
                        <div class="row mt-5">
                            <div class="col-sm-10">
                                <button class="btn btn-primary w-100 ">Contactar</button>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-light w-100 "><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row accordion-p">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Detalles del Vendedor
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, quisquam sapiente, qui sit error debitis maxime ipsum, alias dolore nulla veniam unde delectus officia animi perferendis a nihil autem fuga.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Detalles del producto
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident omnis molestiae itaque modi totam obcaecati quam accusantium cupiditate perferendis dolor natus, dolores amet minus nulla ratione quisquam sint nihil voluptatibus.</div>
                      </div>
                    </div>
                    
                  </div>
            </div>

            


        </div>
    </div>
                  

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>Derechos reservados &copy; 2023 Mi sitio web</p>
            </div>
        </footer>

        <script src="../../js/index.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


</body>
</html>