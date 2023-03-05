<?php
session_start();

if(isset($_SESSION['tipo_usuario'])){
    if($_SESSION['tipo_usuario']== 'producto'){
        header("Location: ../Empresa/indexEmpresa.php");
        exit();
    }else{
        header("Location: ../index.php");
        exit();
    }
}

include '../../Conexion/Conexion.php';
require '../../Clases/Producto.php';
require '../Components/mensaje.php';

require '../../DAO/ProductoDAO.php';

require 'procesoRegistroProducto.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaRegistroProduct.css?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
    <div class="section-newEmpr container-fluid py-5">
        <div class="contenedor-newEmpr">
        <div class="container my-5 text-secondary">
            <div class="row">
                <div class="col-12 text-center">
                    <img class="img-fluid" id="chosen-image" src="../../Image/nvoProd.png" alt="login-icon" style="max-height: 200px; object-fit:cover;"/>
                        
                </div>
            </div>
            <div class="row">
                
            <div class="text-center fs-2 fw-bold">Añadir nuevo producto</div>
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
                                <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example">
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
                                <select class="form-select" id="subcategoria" name="subcategoria" aria-label="Floating label select example">
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
                                <select class="form-select" id="emprendimiento" name="emprendimiento" aria-label="Floating label select example">
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
                            <p>Colocar fotos del nuevo producto</p>
                        </div>
                    </div>

                    <!--Sección de fotos-->
                    <div class="row">

                        <!--Foto 1-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button1" name="upload-button1" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>

                        <!--Foto 2-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button2" name="upload-button2" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>

                        <!--Foto 3-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button3" name="upload-button3" accept="image/*">
                            <label class="label-button" for="upload-button">
                            <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name"></figcaption>
                        </div>
                    </div>

                    <div >
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Registrar" name="submit">
                    </div>
                </form>
                    
            </div>
            </div>
        </div>
        </div>
    </div>

    <script>
    let uploadButton1 = document.getElementById("upload-button1");
    let uploadButton2 = document.getElementById("upload-button2");
    let uploadButton3 = document.getElementById("upload-button3");
    let chosenImage = document.getElementById("chosen-image");
    let fileName = document.getElementById("file-name");

    uploadButton1.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton1.files[0]);
        reader.onload = () => {
            chosenImage.setAttribute("src",reader.result);
        }
        fileName.textContent = uploadButton1.files[0].name;
    }

    uploadButton2.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton2.files[0]);
        reader.onload = () => {
            chosenImage.setAttribute("src",reader.result);
        }
        fileName.textContent = uploadButton2.files[0].name;
    }

    uploadButton3.onchange = () => {
        let reader = new FileReader();
        reader.readAsDataURL(uploadButton3.files[0]);
        reader.onload = () => {
            chosenImage.setAttribute("src",reader.result);
        }
        fileName.textContent = uploadButton3.files[0].name;
    }
    </script>


      <!-- Scripts de Bootstrap 5 -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
</body>
</html>