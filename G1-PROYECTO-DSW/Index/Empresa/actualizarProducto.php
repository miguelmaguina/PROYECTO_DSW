<?php
session_start();

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'cliente'){
        header("Location: ../index.php");
        exit();
    }
}else{
    header("Location: ../Usuario/iniciar.php");
    exit();
}

require '../../Conexion/Conexion.php';


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaRegistroProduct.css?v=<?php echo time(); ?>">
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
    <?php require 'headerEmpresa.php';?>

  <section class="container-fluid py-3">
        <div class="row text-center">
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-1.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Enfocados en el cumplimiento del ODS 11</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-2.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>¡Contacta con clientes a lo largo de todo el territorio nacional!</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mx-auto">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <img src="../../Image/t-o-3.png" class="img-fluid p-2" alt="Producto 1">
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <p>Tu trabajo, tu sudor, tu precio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="section-newEmpr container-fluid py-5">
        <div class="contenedor-newEmpr">
        <div class="container my-5 text-secondary">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid" id="chosen-image" src="../../Image/nvoProd.png" alt="login-icon" style="max-height: 200px; object-fit:cover;"/>
                        
                </div>
            </div>
            <div class="row">
                
            <div class="text-center fs-2 fw-bold">Actualizar producto</div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingNombre" placeholder="nombre" name="nombre" pattern="[A-Za-z\s]*" maxlength="20" required> <label for="floatingNombre">Nombre *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingPrecio" placeholder="precio" name="precio" maxlength="9" maxlength="20" required> <label for="floatingPrecio">Precio *</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="floatingDesc" placeholder="descripcion" name="descripcion" maxlength="500" required> <label for="floatingDesc">Descripción *</label></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <select class="form-select" id="categoria" aria-label="Floating label select example">
                                <option selected value="ejemplo1">Seleccione una opción</option>
                                <option value="ejemplo2">Hogar y Decoración</option>
                                <option value="ejemplo3">Bebidas</option>
                                <option value="ejemplo4">Alimentos</option>
                                <option value="ejemplo5">Moda y Accesorios</option>
                                </select>
                                <label for="departamento">Categoria</label>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <select class="form-select" id="categoria" aria-label="Floating label select example">
                                <option selected value="ejemplo1">Seleccione una opción</option>
                                <!--<option value="ejemplo2">Hogar y Decoración</option>
                                <option value="ejemplo3">Bebidas</option>
                                <option value="ejemplo4">Alimentos</option>
                                <option value="ejemplo5">Moda y Accesorios</option>-->
                                </select>
                                <label for="departamento">Subcategoria</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDscto" placeholder="dscto" name="dscto" maxlength="6" required> <label for="floatingDscto">Descuento *</label></div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="date" class="form-control" id="floatingFecha" placeholder="Fecha" name="fecha" required> <label for="floatingFecha">Fecha *</label></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <select class="form-select" id="categoria" aria-label="Floating label select example">
                                <option selected value="ejemplo1">Seleccione una opción</option>
                                <!--<option value="ejemplo2">Hogar y Decoración</option>
                                <option value="ejemplo3">Bebidas</option>
                                <option value="ejemplo4">Alimentos</option>
                                <option value="ejemplo5">Moda y Accesorios</option>-->
                                </select>
                                <label for="departamento">Emprendimiento</label>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDisp" placeholder="disp" name="disp" maxlength="6" required> <label for="floatingDisp">Disponibilidad *</label></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <p>Actualizar fotos del producto</p>
                        </div>
                    </div>

                    <!--Sección de fotos-->
                    <div class="row">

                        <!--Foto 1-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button" name="upload-button" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>

                        <!--Foto 2-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button" name="upload-button" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>

                        <!--Foto 3-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button" name="upload-button" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>
                    </div>

                    <div >
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Actualizar" name="submit">
                    </div>
                </form>
                    
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