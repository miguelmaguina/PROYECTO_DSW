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

$aux=$_POST['ID_Producto_Aux2'];
//echo $aux; //ID requerido

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compradores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaListaCompradoresEmp.css?v=<?php echo time(); ?>">
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

    <section class="section-t-o  py-5">
        <div class="contenedor-t">
                <div class="row">
                    <div class="button-container col-sm-12 col-md-12 mb-3 mt-4 text-white d-flex justify-content-center ">
                        <a href="#" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/listCompradores.png" alt="">
                        <span class="col-10 button-text">Manta Artesanal para abrigarte</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="button-container h-100 col-md-6 mt-4 text-white d-flex justify-content-center">
                        <!--<a href="solicitudPendiente.php" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/solPend.png" alt="">
                        <input type="hidden" name="ID_Producto_Aux3" id="ID_Producto_Aux3" value="<?= $aux ?>">
                        
                        <span class="button-text">SOLICITUDES PENDIENTES</span>
                        </a>-->

                        <a href="solicitudPendiente.php?ID_Producto_Aux3=<?= $aux ?>" class="btn boton-Vista-Empresa image-button">
                            <img class="rounded img-fluid mx-auto d-block" src="../../Image/solPend.png" alt="">
                            
                            <span class="button-text">SOLICITUDES PENDIENTES</span>
                        </a>

                    </div>
                    <div class="button-container col-md-6 mt-4 text-white d-flex justify-content-center">
                        <a href="listaCompradores.php" class="btn boton-Vista-Empresa image-button">
                        <img class="rounded img-fluid mx-auto d-block" src="../../Image/listComprador.png" alt="">
                        <span class="button-text">LISTADO DE COMPRADORES</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
        </div>
    </section>

        <!-- Footer -->
        <footer>
            <div class="contenedor-t">
                <p>Derechos reservados &copy; 2023 Mi sitio web</p>
            </div>
        </footer>

        <script src="../../js/index.js"></script>
        <script src="../../js/script.js"></script>
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


</body>
</html>