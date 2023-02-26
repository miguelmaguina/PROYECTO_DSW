<?php

?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/styleNosotros.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<?php require 'header.php' ?>

<div class="portada1 container-fluid py-1 d-flex align-items-center">
        <div class="row">
            <div class="contenedor col-lg-9 mx-auto text-center">
                <p class="title-1 fs-2 h3" style="color: white;">Productos elaborados</p><p class="title-2 fs-1 h2" style="color: #1259C3;">por comunidades nativas del Perú</p>
                <p class="descripcion">Déjese sorprender por la belleza y autenticidad de los productos hechos a mano por las comunidades nativas peruanas. Desde ropa tejida con técnicas tradicionales hasta joyas y objetos de decoración únicos, cada uno de nuestros productos cuenta con una historia y una cultura detrás. Al comprar en nuestro e-commerce, no solo estará llevándose a casa un objeto hermoso, sino que también estará apoyando a las comunidades nativas y preservando sus tradiciones. ¡Descubra la belleza de las comunidades nativas peruanas hoy mismo!</p>
                <div class="btn-group">
                <a href="#" class="btn btn-primary btn-block mx-4 rounded fw-bold">Ir a la tienda virtual</a>
                <a href="#" class="btn btn-light btn-block mx-4 rounded fw-bold">¡Regístrese!</a>
                </div>
            </div>
        </div>
    </div>

    <section class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row row-p1">
                <div class="col-md-6 content-img">
                  <img src="../../Image/img-1.png" class="img-fluid" alt="Imagen">
                </div>
                <div class="col-md-6 p-5">
                  <h2 >¿Qué somos?</h2>
                  <p class="texto">Somos un e-commerce dedicado a conectar a los consumidores con las comunidades nativas peruanas. Creemos en la importancia de preservar las tradiciones y culturas locales, y queremos compartir la riqueza de estas comunidades con el mundo. Todos nuestros productos son hechos a mano por artesanos locales y están cuidadosamente seleccionados para ofrecer solo lo mejor. Al comprar en nuestro e-commerce, no solo estará obteniendo productos únicos y hermosos, sino que también estará apoyando directamente a las comunidades nativas y a sus tradiciones. </p><p>¡Bienvenido a nuestro mundo auténtico de comunidades nativas peruanas!.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row row-p1">
                <div class="col-md-6 p-5">
                  <h2>Visión y Misión</h2>
                  <p class="texto">Nuestra misión es conectar a los consumidores con las comunidades nativas peruanas y preservar sus tradiciones a través de nuestro e-commerce. Creemos en la importancia de apoyar directamente a las comunidades locales y compartir su riqueza cultural con el mundo.
Nuestra visión es ser líderes en la promoción de productos auténticos de las comunidades nativas peruanas y ser reconocidos como una fuente confiable y respetada de artesanías únicas.</p>
                </div>

                <div class="col-md-6 content-img">
                    <img src="../../Image/img-2.png" class="img-fluid" alt="Imagen">
                  </div>
            </div>
        </div>
    </section>

    
       <!-- Sección de co-fundadores -->


       <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <h2 class="text-center">CO-FUNDADORES</h2>
        </div>
    </div>

    <!----------------------- EMPRESAS  ------------------------------->
    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Empresas</h2>
                        <div id="carouselControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active carrusel-e">
                            <div class="row row-p2">

                                <div class="col-sm-6">
                                    <div class="card card-e mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                                        <div class="card-body">
                                            <h3 class="card-title">Manto artesanal para abrigarte</h3>
                                            <p class="card-text">Descripción del producto 1.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card card-e mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                                        <div class="card-body">
                                            <h3 class="card-title">Manto artesanal para abrigarte</h3>
                                            <p class="card-text">Descripción del producto 1.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
<!--puedes quitarle un card para que sea de uno y cambiarle col-md6 a col-md-12   -->
                            <div class="carousel-item carrusel-e">
                            <div class="row row-p2">
                                <div class="col-md-6">
                                    <div class="card card-e mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 1">
                                        <div class="card-body">
                                            <h3 class="card-title">Manto artesanal para abrigarte</h3>
                                            <p class="card-text">Descripción del producto 1.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-e mb-3">
                                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 2">
                                        <div class="card-body">
                                            <h3 class="card-title">Manto artesanal para abrigarte</h3>
                                            <p class="card-text">Descripción del producto 2.</p>
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