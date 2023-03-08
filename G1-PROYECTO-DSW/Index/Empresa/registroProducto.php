<?php


require 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Index/Components/mensaje.php';
require 'C:/xampp/htdocs/PROYECTO_DSW/G1-PROYECTO-DSW/Agregar/AgregarProducto.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro_Producto</title>
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

                <!--Formulario registar producto-->
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
                                <option value="">Seleccione una opción</option>
                            </select>
                            <label for="categoria">Categoría *</label>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                            <select class="form-select" id="subcategoria" name="subcategoria" aria-label="Floating label select example">
                                <option value="">Seleccione una categoría primero</option>
                            </select>
                            <label for="subcategoria">Subcategoría *</label>
                            </div>
                        </div>
                    </div>

                    <script>
                        // Obtener referencias a los elementos select
                        var pais = document.getElementById("categoria");
                        var ciudad = document.getElementById("subcategoria");

                        // Definir las opciones de la lista de categorías
                        var opcionesCategorias = {
                            "1": "Hogar y Decoración",
                            "2": "Bebidas",
                            "3": "Alimentos",
                            "4": "Moda y Accesorios"
                        };

                        // Definir las opciones de la lista de subcategorías
                        var opcionesCiudades = {
                            "1": ["Utensilios de cocina", "Decoración", "Joyería", "Jardinería"],
                            "2": ["Piscos", "Vinos", "Cafes", "Infusiones"],
                            "3": ["Quesos", "Yogurts", "Chocolates", "Verduras", "Frutas", "Alimentos organicos", "Snacks"],
                            "4": ["Carteras, bolsos y accesorios", "Textil decorativo", "Cómputo y de Escritorio", "Complementos", "Gorros y sombreros", "Calzados", "Bufandas y pashminas"]
                        };

                        // Agregar las opciones de la lista de categorías al primer select
                        for (var valorCategoria in opcionesCategorias) {
                            var opcionCategoria = document.createElement("option");
                            opcionCategoria.value = valorCategoria;
                            opcionCategoria.textContent = opcionesCategorias[valorCategoria];
                            pais.appendChild(opcionCategoria);
                        }

                        // Función que actualiza las opciones del segundo select según la selección del primero
                        function actualizarCategorias() {
                            // Obtener el valor seleccionado en el primer select
                            var valorPais = pais.value;

                            // Obtener la lista de ciudades correspondiente al valor seleccionado
                            var ciudades = opcionesCiudades[valorPais] || [];
                            // Limpiar las opciones del segundo select
                            ciudad.innerHTML = "";
                            // Agregar las nuevas opciones al segundo select
                            for (var i = 0; i < ciudades.length; i++) {
                            var opcion = document.createElement("option");
                            opcion.value = ciudades[i];
                            opcion.textContent = ciudades[i];
                            ciudad.appendChild(opcion);
                            }
                            // Deshabilitar el segundo select si no hay opciones disponibles
                            ciudad.disabled = ciudades.length == 0;
                        }

                        // Actualizar las opciones del segundo select cuando cambia la selección del primer select
                        pais.addEventListener("change", actualizarCategorias);

                        // Actualizar las opciones del segundo select al cargar la página
                        actualizarCategorias();
                    </script>

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
                        <div class="col-sm-12 mt-2">
                            <div class="form-floating"> <input type="number" class="form-control" id="floatingDisp" placeholder="disp" name="disp" maxlength="4" required> <label for="floatingDisp">Disponibilidad *</label></div>
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
                            <label class="label-button" for="upload-button1">
                                <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name1"></figcaption>
                        </div>

                        <!--Foto 2-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button2" name="upload-button2" accept="image/*">
                            <label class="label-button" for="upload-button2">
                                <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name2"></figcaption>
                        </div>

                        <!--Foto 3-->
                        <div class="col-md-6 mt-2">
                            <input class="input-content" type="file" id="upload-button3" name="upload-button3" accept="image/*">
                            <label class="label-button" for="upload-button3">
                                <i class="fas fa-upload"></i> &nbsp; Subir una foto
                            </label>
                        </div>
                        <div class="col-md-6 mt-2">
                            <figcaption class="text-center text-truncate" id="file-name3"></figcaption>
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
    
    //Foto 1
    let uploadButton1 = document.getElementById("upload-button1");
    let chosenImage1 = document.getElementById("chosen-image1");
    let fileName1 = document.getElementById("file-name1");

    uploadButton1.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(uploadButton1.files[0]);
    reader.onload = () => {
        chosenImage1.setAttribute("src",reader.result);
    }
    fileName1.textContent = uploadButton1.files[0].name;
    }

    //Foto 2
    let uploadButton2 = document.getElementById("upload-button2");
    let chosenImage2 = document.getElementById("chosen-image2");
    let fileName2 = document.getElementById("file-name2");

    uploadButton2.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(uploadButton2.files[0]);
    reader.onload = () => {
        chosenImage2.setAttribute("src",reader.result);
    }
    fileName2.textContent = uploadButton2.files[0].name;
    }

    //Foto 3
    let uploadButton3 = document.getElementById("upload-button3");
    let chosenImage3 = document.getElementById("chosen-image3");
    let fileName3 = document.getElementById("file-name3");

    uploadButton3.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(uploadButton3.files[0]);
    reader.onload = () => {
        chosenImage3.setAttribute("src",reader.result);
    }
    fileName3.textContent = uploadButton3.files[0].name;
    }

    </script>


      <!-- Scripts de Bootstrap 5 -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
</body>
</html>