<?php ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/vistaRegistroProduct.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <?php require '../components/headerEmpresa.php';?>

      

    <div id="myCarousel" class="container-fluid carousel slide contenedor-carrusel p-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="100%" src="../img/portada3.png" ></img>
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
        <img class="img-car img-fluid" width="100%" height="100%" src="../img/portada3.png"></img>
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
        <img class="img-car img-fluid" width="100%" height="100%" src="../img/portada3.png"></img>
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

  <section class="container-fluid py-3">
        <div class="row text-center">
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../img/t-o-1.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Enfocados en el cumplimiento del ODS 11</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../img/t-o-2.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>¡Contacta con clientes a lo largo de todo el territorio nacional!</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../img/t-o-3.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Tu trabajo, tu sudor, tu precio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="section-newproduct container-fluid py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="contenedor-newproduct">
            
            
                    <div class="container my-5">
                        <h2 class="text-center mb-4">Añadir nuevo producto</h2>
                        <div class="row">
                            <form>
                            <div class="row">
                                <div class="col-md-6  mb-3">
                                    <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" required> <label for="floatingNombre">Nombre *</label></div>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <div class="form-floating"> <input type="text" class="form-control" id="floatingApellido" placeholder="Apellido" name="apellido" required> <label for="floatingApellido">Apellido *</label></div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email *</label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" required> <label for="floatingCelular">Celular *</label></div>
                                </div>
                                <div class="col-md-6  mb-3">
                                    <div class="form-floating">
                                        <select class="form-select" id="genero" aria-label="Floating label select example">
                                        <option selected value="ejemplo1">Seleccione una opción</option>
                                        <option value="ejemplo2">Femenino</option>
                                        <option value="ejemeplo3">Masculino</option>
                                        </select>
                                        <label for="departamento">Otros</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="direccion" name="direccion" placeholder="Direccion"></textarea>
                                        <label for="comment">Dirección *</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"></textarea>
                                        <label for="comment">Descripción *</label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50 d-flex justify-content-center">Guardar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container contenedor-choose">
                    <figure class="image-container">
                        <img id="chosen-image">
                        <figcaption id="file-name"></figcaption>
                    </figure>
            
                    <input class="input-content" type="file" id="upload-button" accept="image/*">
                    <label class="label-button" for="upload-button">
                        <i class="fas fa-upload"></i> &nbsp; Subir una foto
                    </label>
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

        <script src="../js/index.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
<script>
    let uploadButton = document.getElementById("upload-button");
let chosenImage = document.getElementById("chosen-image");
let fileName = document.getElementById("file-name");

uploadButton.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(uploadButton.files[0]);
    reader.onload = () => {
        chosenImage.setAttribute("src",reader.result);
    }
    fileName.textContent = uploadButton.files[0].name;
}
</script>

</body>
</html>