<?php   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/styleFavorito.css?v=<?php echo time(); ?>">
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
    <?php require 'header.php';  ?>

    <section class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <h2 class="titulo fw-bold py-2 text-center">Lista de Favoritos</h2>
            
            <!-- aqui se repite varias veces, puede ir dentro de un ciclo-->
            
            <div class="row py-2">
                <div class="col-12 border border-1 p-3 position-relative">
                    <div class="position-absolute cerrar">
                        <a href="#" class="btn"><i class="fa-regular fa-rectangle-xmark"></i></a>
                    </div>
                    <div class="row p-3">
                    <div class="col-md-5 col-lg-6">
                         <!---para usar el carrusel deben cambiar los id de cada carrusel para que al hacer click en la pequeña imagen haga efecto su cambio, sino no lo reconoce como parte del carrusel--->                        
                        <div id="carousel1" class="carousel carousel-dark slide " data-bs-ride="carousel">

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
                              <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carousel1" data-bs-slide-to="1">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carousel1" data-bs-slide-to="2">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                            </ol>
                            
                            <a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Siguiente</span>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-7 col-lg-6">
                        
                        <div class="row">
                            <div class="col-12 col-sm-11">
                                <h3>MANTA ARTESANAL PARA ABRIGARTE</h3>
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

                    </div>
                    </div>

                </div>
            </div>

            <div class="row py-2">
                <div class="col-12 border border-1 p-3 position-relative">
                    <div class="position-absolute cerrar">
                        <a href="#" class="btn"><i class="fa-regular fa-rectangle-xmark"></i></a>
                    </div>
                    <div class="row p-3">
                    <div class="col-md-5 col-lg-6">
                                                
                        <div id="carousel2" class="carousel carousel-dark slide " data-bs-ride="carousel">

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
                              <li data-bs-target="#carousel2" data-bs-slide-to="0" class="active">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carousel2" data-bs-slide-to="1">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carousel2" data-bs-slide-to="2">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                            </ol>
                            <!---para usar el carrusel deben cambiar los id de cada carrusel para que al hacer click en la pequeña imagen haga efecto su cambio, sino no lo reconoce como parte del carrusel--->
                            <a class="carousel-control-prev" href="#carousel2" role="button" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel2" role="button" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Siguiente</span>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-7 col-lg-6">
                        
                        <div class="row">
                            <div class="col-12 col-sm-11">
                                <h3>MANTA ARTESANAL PARA ABRIGARTE</h3>
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

                    </div>
                    </div>

                </div>
            </div>

            <div class="row py-2">
                <div class="col-12 border border-1 p-3 position-relative">
                    <div class="position-absolute cerrar">
                        <a href="#" class="btn"><i class="fa-regular fa-rectangle-xmark"></i></a>
                    </div>
                    <div class="row p-3">
                    <div class="col-md-5 col-lg-6">
                                                
                        <div id="carousel3" class="carousel carousel-dark slide " data-bs-ride="carousel">

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
                              <li data-bs-target="#carousel3" data-bs-slide-to="0" class="active">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carousel3" data-bs-slide-to="1">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                              <li data-bs-target="#carousel3" data-bs-slide-to="2">
                                <img class="img-thumbnail d-block w-100" src="../../Image/juguete.png" alt="">
                              </li>
                            </ol>
                            
                            <a class="carousel-control-prev" href="#carousel3" role="button" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel3" role="button" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Siguiente</span>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-7 col-lg-6">
                        
                        <div class="row">
                            <div class="col-12 col-sm-11">
                                <h3>MANTA ARTESANAL PARA ABRIGARTE</h3>
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

                    </div>
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
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


</body>
</html>