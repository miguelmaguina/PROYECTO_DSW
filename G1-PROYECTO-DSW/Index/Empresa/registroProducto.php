<?php
session_start();

require '../Components/mensaje.php';

require '../../DAO/ProductoDAO.php';

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
                                <select class="form-select" id="categorias" aria-label="Floating label select example">
                                    <option value="">Seleccione una opción</option>
                                    <option value="1">Hogar y Decoración</option>
                                    <option value="2">Bebidas</option>
                                    <option value="3">Alimentos</option>
                                    <option value="4">Moda y Accesorios</option>
                                </select>
                                <label for="categorias">Categoría *</label>
                            </div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="form-floating">
                                <select class="form-select" id="subcategorias" aria-label="Floating label select example">
                                    <option value="">Seleccione una categoría primero</option>
                                </select>
                                <label for="subcategorias">Subcategoría *</label>
                            </div>
                        </div>

                        <script>
                            // Obtener referencias a los elementos select
                            var pais = document.getElementById("categorias");
                            var ciudad = document.getElementById("subcategorias");
                            
                            var opcionesCiudades = {
                                "1": ["Utensilios de cocina", "Decoración", "Joyería", "Jardinería"],
                                "2": ["Piscos", "Vinos", "Cafes", "Infusiones"],
                                "3": ["Quesos", "Yogurts", "Chocolates", "Verduras", "Frutas", "Alimentos organicos", "Snacks"],
                                "4": ["Carteras, bolsos y accesorios", "Textil decorativo", "Cómputo y de Escritorio", "Complementos", "Gorros y sombreros", "Calzados", "Bufandas y pashminas"]
                            };
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

                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="categoria" placeholder="categoria" name="categoria" maxlength="20" required> <label for="categoria">Categoría *</label></div>
                        </div>

                        <div class="col-sm-6 mt-2">
                            <div class="form-floating"> <input type="text" class="form-control" id="subcategoria" placeholder="subcategoria" name="subcategoria" maxlength="20" required> <label for="subcategoria">Subcategoría *</label></div>
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
                        <div class="col-sm-12 mt-2">
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
                        <input class="btn btn-success text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" value="Registrar" name="submit">
                    </div>
                </form>
                    
            </div>
            </div>
        </div>
        </div>
    </div>

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


      <!-- Scripts de Bootstrap 5 -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
</body>
</html>