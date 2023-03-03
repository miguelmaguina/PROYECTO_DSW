<?php  
/*session_start();

if(isset($_SESSION['nombre_c'])){
  echo 'su nombre de usuario es: '.$_SESSION['nombre_c']." ";
}else{
  echo "sesion no iniciada";
}
*/
?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaRegistroEmpren.css?v=<//?php echo time(); ?>">
    <link rel="stylesheet" href="../../Estilos/header.css?v=<//?php echo time(); ?>">
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
    

<?php/* require 'headerEmpresa.php' */?>

      

<div id="myCarousel" class="container-fluid carousel slide contenedor-carrusel p-0" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada3.png" ></img>
        <div class="container">
          <div class="carousel-caption text-start">
          <h2 >Descubre productos peruanos</h2>
                <h1 >de marcas emergentes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod vehicula elit, in maximus turpis ultrices at. Ut fermentum ullamcorper tellus, et tristique sapien luctus id</p>
            <p><a class="btn btn-lg btn-success" href="#">Iniciar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada3.png"></img>
        <div class="container">
          <div class="carousel-caption">
          <h2 >Descubre productos peruanos</h2>
                <h1 >de marcas emergentes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod vehicula elit, in maximus turpis ultrices at. Ut fermentum ullamcorper tellus, et tristique sapien luctus id</p>
            <p><a class="btn btn-lg btn-success" href="#">Iniciar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-car img-fluid" width="100%" height="100%" src="../../Image/portada3.png"></img>
        <div class="container">
          <div class="carousel-caption text-end">
          <h2 >Descubre productos peruanos</h2>
                <h1 >de marcas emergentes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod vehicula elit, in maximus turpis ultrices at. Ut fermentum ullamcorper tellus, et tristique sapien luctus id</p>
            <p><a class="btn btn-lg btn-success" href="#">¡Aprender más!</a></p>
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

    <section class="container-fluid py-3 bg-white">
        <div class="row text-center">
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6 col-md-4">
                        <img src="../../Image/t-o-1.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <p>Enfocados en el cumplimiento del ODS 11</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6 col-md-4">
                        <img src="../../Image/t-o-2.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <p>¡Contacta con clientes a lo largo de todo el territorio nacional!</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-6 col-md-4">
                        <img src="../../Image/t-o-3.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <p>Tu trabajo, tu sudor, tu precio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-newEmpr container-fluid py-5">
        <div class="contenedor-newEmpr">
            <div class="container my-5">
                <h2 class="text-center mb-4">Registro de Emprendimiento</h2>
                <div class="row">
                    <form>
                    <h5 class="pb-3">Datos</h5>
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingRuc" placeholder="Ruc" name="ruc" required> <label for="floatingRuc">Ruc Empresa *</label></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" required> <label for="floatingNombre">Nombre Empresa *</label></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingUser" placeholder="User" name="user" required> <label for="floatingUser">Usuario *</label></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email" required> <label for="floatingEmail">Email *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingCelular" placeholder="Celular" name="celular" required> <label for="floatingCelular">Celular *</label></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required> <label for="floatingPassword">Password *</label></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="departamento" aria-label="Floating label select example">
                                  <option selected value="ejemplo1">ejemplo1</option>
                                  <option value="ejemplo2">ejemplo2</option>
                                  <option value="ejemeplo3">ejemplo3</option>
                                </select>
                                <label for="departamento">Departamento</label>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" id="direccion" name="direccion" placeholder="Direccion"></textarea>
                                <label for="comment">Dirección *</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <input class="form-control" type="file" id="formFile" name="foto">
                        </div>
                    </div>

                    <h5 class="pt-2 pb-3">Redes sociales</h5>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingWeb" placeholder="Web" name="web" required> <label for="floatingWeb">Link de la web *</label></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingFacebook" placeholder="Facebook" name="facebook" required> <label for="floatingFacebook">Link de Facebook *</label></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingInstagram" placeholder="Instagram" name="instagram" required> <label for="floatingInstagram">Link de Instagram *</label></div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingOtros" placeholder="Otros" name="otros" required> <label for="floatingOtros">Link de otras redes (Opcional)</label></div>
                        </div>
                    </div>

                    <h6 class="mb-3">Los campos marcados con * son obligatorios, por favor rellenarlos</h6>

                    <div class="row mb-1">
                        <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label form-label" for="flexCheckDefault">
                                Al registrarse acepta las Condiciones del servicio, la Política de privacidad y el uso de cookies de Hallpa Biomarket.
                            </label>
                        </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                            <label class="form-check-label form-label" for="flexCheckDefault1">
                              Autorizo que se use los datos proporcionados para contactarme y recibir promociones, ofertas e información.
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success w-50 d-flex justify-content-center">Guardar</button>
                    </div>
                    </form>
                </div>
                    
                </div>
            </div>
        </div>
      </div>



      
                  

        <footer>
            <div class="container">
                <p>Derechos reservados &copy; 2023 Mi sitio web</p>
            </div>
        </footer>

        <script src="../../js/index.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


</body>
</html> -->