<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/styleTienda1.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <div class="carousel-caption text-start">
          <h2 >Descubre productos peruanos</h2>
                <h1 >de marcas emergentes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod vehicula elit, in maximus turpis ultrices at. Ut fermentum ullamcorper tellus, et tristique sapien luctus id</p>
            <p><a class="btn btn-lg btn-primary" href="#">Iniciar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada-online.png"></img>
        <div class="container">
          <div class="carousel-caption">
          <h2 >Descubre productos peruanos</h2>
                <h1 >de marcas emergentes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod vehicula elit, in maximus turpis ultrices at. Ut fermentum ullamcorper tellus, et tristique sapien luctus id</p>
            <p><a class="btn btn-lg btn-primary" href="#">Iniciar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada-online.png"></img>
        <div class="container">
          <div class="carousel-caption text-end">
          <h2 >Descubre productos peruanos</h2>
                <h1 >de marcas emergentes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod vehicula elit, in maximus turpis ultrices at. Ut fermentum ullamcorper tellus, et tristique sapien luctus id</p>
            <p><a class="btn btn-lg btn-primary" href="#">¡Aprender más!</a></p>
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
                        <p>Envios garantizados a nivel snacional</p>
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

    <section class="section-t-o container-fluid py-1">
        <div class="contenedor-t">
        <div class="row">
            <div class="col-md-12 mx-auto text-center">
                    <div id="carouselControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-md-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none ">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        </div>

                        <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-sm-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <div class="col-sm-3 col-md-4 col-lg-3">
                                <div class="card card-t mb-3 border border-none">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="../../Image/juguete.png" class="card-img" alt="Imagen">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                            <h5 class="card-title">JUGUETE</h5>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                        </div>
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>

            </div>
        </div>
        </div>
    </section>

    <!--parte dinamica-->

    <!--inicio de los productos que se mostrarán-->

    <div class="container-fluid content-productos">
        <div class="contenedor-t">
        <div class="row border">
            <div class="col-md-3">
                <h5>Todos</h5>
                <p>25 productos</p>
                <p></p>
                <h5>Tipos (Sub)</h5>
                <p>Ropa, Calzado y Sombrero (4)</p>
                <p>Cerámicas, Juguetes y Bolsos (7)</p>
                <p>Joyas, Anillos y Pulseras (8)</p>
                <p>Frutas, Verduras, Bebidas y Postres (6)</p>
                <p></p>
                <h5>Ordenar</h5>
                <p>Ascendente</p>
                <p>Descendente</p>
                <p></p>
                <h5>Tipos (Sub)</h5>
                <p>Seleccione una ubicacion</p>
            </div>

            <div class="col-md-9 contenedor-de-producto">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3">


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
                    
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-t-o position-relative">
                            <img src="../../Image/juguete.png" class="card-img-top" alt="Imagen del producto">
                            <div class="position-absolute favorito">
                                <a href="#" class="btn btn-light"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="position-absolute carrito">
                                    <a href="#" class="btn btn-light"><i class="fas fa-shopping-cart"></i></a>
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
                                    <a href="#" class="btn btn-light"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                            <div class="card-body">
                            <h5 class="card-title text">Nombre del producto</h5>
                            <span class="card-text">S/100.00</span> <small>10% descuento</small>
                            </div>
                        </div>
                    </div>

                    <!--repeticion-->

                    <div class="col-sm-6 col-lg-4 mb-4">
                        <div class="card card-t-o position-relative ">
                            <img src="../../Image/juguete.png" class="card-img-top" alt="Imagen del producto">
                            <div class="position-absolute favorito">
                                <a href="#" class="btn btn-light"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="position-absolute carrito">
                                    <a href="#" class="btn btn-light"><i class="fas fa-shopping-cart"></i></a>
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