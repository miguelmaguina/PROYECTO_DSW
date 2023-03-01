<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/styleInicio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/footer.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">

    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector(".navbar");
            header.classList.toggle("bg-white",window.scrollY>0);
            header.classList.toggle("fixed-top",window.scrollY>0);
		})
	</script>
</head>
<body>

<header>
<?php require 'header.php';  ?>

    
<div class="portada1 container-fluid py-1 d-flex align-items-center">
        <div class="row">
            <div class="contenedor col-lg-9 mx-auto text-center">
                <p class="title-1 fs-2 h3" style="color: white;">Productos elaborados</p><p class="title-2 fs-1 fw-bold h2" style="color: #035941;">por comunidades nativas del Perú</p>
                <p class="descripcion">Déjese sorprender por la belleza y autenticidad de los productos hechos a mano por las comunidades nativas peruanas. Desde ropa tejida con técnicas tradicionales hasta joyas y objetos de decoración únicos, cada uno de nuestros productos cuenta con una historia y una cultura detrás. Al comprar en nuestro e-commerce, no solo estará llevándose a casa un objeto hermoso, sino que también estará apoyando a las comunidades nativas y preservando sus tradiciones. ¡Descubra la belleza de las comunidades nativas peruanas hoy mismo!</p>
                <div class="btn-group">
                <a href="#" class="btn btn-der btn-block mx-4 rounded fw-bold">¡Iniciar!</a>
                </div>
            </div>
        </div>
    </div>



    <!----------------------- PRODUCTOS MAS VENDIDOS  ------------------------------->
    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Productos más vendidos</h2>

                    <div class="carousel">
                        <div class="carousel__contenedor">
                            <button aria-label="Anterior" class="carousel__anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>

                            <div class="carousel__lista">
                                
                                <div class="card card-p mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                        <p class="card-text">Descripción del producto 3.</p>
                                        <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                    </div>
                                </div>
                                
                                <div class="card card-p mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                        <p class="card-text">Descripción del producto 3.</p>
                                        <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                    </div>
                                </div>

                                <div class="card card-p mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                        <p class="card-text">Descripción del producto 3.</p>
                                        <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                    </div>
                                </div>

                                <div class="card card-p mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Manto artesanal para abrigarte</h5>
                                        <p class="card-text">Descripción del producto 3.</p>
                                        <span class="fs-4">S/300.00 <small>10% desc.</small> </span>
                                    </div>
                                </div>
                                
                            </div>

                            <button aria-label="Siguiente" class="carousel__siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <div role="tablist" class="carousel__indicadores"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

        <!-- Sección de opiniones -->


    <div class="section-p container-fluid py-1">
        <div class="contenedor-p">
            <div class="row">
                <div class="col-md-11 mx-auto text-center">
                    <h2 class="">Opiniones</h2>

                    <div class="carousel">
                        <div class="carousel__contenedor">
                            <button aria-label="Anterior" class="carousel__anterior anterior">
                                <i class="fas fa-chevron-left"></i>
                            </button>

                            <div class="carousel__lista lista">
                                

                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Artesania</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Artesania</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Artesania</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Artesania</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="card card-o mb-3">
                                    <img src="https://via.placeholder.com/300x200" class="card-img-top mx-auto d-block" alt="Producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Artesania</h5>
                                        <p class="card-text">Descripción de la opinion</p>
                                        <div class="contenido-img-span">
                                            <img src="../Image/perfil-img.png" alt="Producto 1"><i>por Isabela Merced</i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <button aria-label="Siguiente" class="carousel__siguiente siguiente">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>

                        <div role="tablist" class="carousel__indicadores indicadores"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Sección beneficios -->


    <div class="section-p container-fluid py-1">
        <div class="contenedor-p text-center">
            <h2>AQUI VA LOS BENEFICIOS</h2>
        </div>
    </div>

    <!-- Footer -->
    
    <?php require 'footer.php'; ?>

    <script src="../../js/index.js"></script>
    <script src="../../js/carousel.js"></script>
    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    


</body>
</html>