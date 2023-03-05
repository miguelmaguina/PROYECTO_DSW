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

?>

<?php
include "../../Conexion/Conexion.php";
include "../../DAO/ReporteDAO.php";
$reporteDAO = new ReporteDAO();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/vistaDatosGraficos.css?v=<?php echo time(); ?>">
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
    <?php require 'headerEmpresa.php'?>


    <!--tarjetas --+ 3 -->

<section class="pt-4 d-flex justify-content-center" style="background-color: #E5E1E1;">
<div class="row container">


    <div class="col-xxl-4 col-md-6 mb-3">
        <div class="card info-card sales-card">
           <div class="card-body">
              <h5 class="card-title">Reviews</h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="fa-solid fa-cart-shopping"></i></div>
                 <div class="ps-3">
                    <h6><?php echo $reporteDAO->getNumeroDeReviewsTotal(); ?> reviews</h6>
                      <?php
                        $reviewsUltimoMes = $reporteDAO->getNumeroDeReviewsUltimoMes();
                        if ($reviewsUltimoMes == 0) {
                            echo '<span class="text-danger small pt-1 fw-bold"> +' . $reviewsUltimoMes . '</span> <span class="text-muted small pt-2 ps-1">en el ultimo mes.</span>';
                        } else {
                            echo '<span class="text-success small pt-1 fw-bold"> +' . $reviewsUltimoMes . '</span> <span class="text-muted small pt-2 ps-1">en el ultimo mes.</span>';
                        }
                       ?>
                 </div>
              </div>
           </div>
        </div>
     </div>


     <div class="col-xxl-4 col-md-6 mb-3">
        <div class="card info-card revenue-card">
           <div class="card-body">
              <h5 class="card-title">En Favoritos</h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="fa-solid fa-dollar-sign"></i></div>
                 <div class="ps-3">
                    <h6><?php echo $reporteDAO->getNumeroDeFavoritosTotal(); ?> favoritos <3</h6>
                      <?php
                        $favoritosUltimoMes = $reporteDAO->getNumeroDeFavoritosUltimoMes();
                        if ($favoritosUltimoMes == 0) {
                            echo '<span class="text-danger small pt-1 fw-bold"> +' . $favoritosUltimoMes . '</span> <span class="text-muted small pt-2 ps-1">en el ultimo mes.</span>';
                        } else {
                            echo '<span class="text-success small pt-1 fw-bold"> +' . $favoritosUltimoMes . '</span> <span class="text-muted small pt-2 ps-1">en el ultimo mes.</span>';
                        }
                      ?>
                 </div>
              </div>
           </div>
        </div>
     </div>


     <div class="col-xxl-4 col-xl-12 mb-3">
        <div class="card info-card customers-card">
           <div class="card-body">
              <h5 class="card-title">En Proforma</h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="fa-solid fa-address-card"></i></div>
                 <div class="ps-3">
                    <h6><?php echo $reporteDAO->getNumeroDeProformaTotal(); ?> proformas</h6>
                      <?php
                        $proformasUltimoMes = $reporteDAO->getNumeroDeProformaUltimoMes();
                        if ($proformasUltimoMes == 0) {
                            echo '<span class="text-danger small pt-1 fw-bold"> +' . $proformasUltimoMes . '</span> <span class="text-muted small pt-2 ps-1">en el ultimo mes.</span>';
                        } else {
                            echo '<span class="text-success small pt-1 fw-bold"> +' . $proformasUltimoMes . '</span> <span class="text-muted small pt-2 ps-1">en el ultimo mes.</span>';
                        }
                      ?>
                 </div>
              </div>
           </div>
        </div>
     </div>
</div>
</section>

    <section class="container-fluid py-1 dashboard">

        
    <!-- grafico principal -->
        <div class="row">

        <div class="col-12">
            <div class="contenedor-grafico">
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="fa-solid fa-chevron-down d-flex justify-content-end"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filtros</h6>
                            </li>
                            <li><a class="dropdown-item" href="#" data-value="review">Review</a></li>
                            <li><a class="dropdown-item" href="#" data-value="favoritos">Favoritos</a></li>
                            <li><a class="dropdown-item" href="#" data-value="proforma">Proforma</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="reportsChart"></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const chartData = {
                    review: <?php echo json_encode($reporteDAO->getArrayNumeroDeReviewsPorMes()); ?>,
                    favoritos: <?php echo json_encode($reporteDAO->getArrayNumeroDeFavoritosPorMes()); ?>,
                    proforma: <?php echo json_encode($reporteDAO->getArrayNumeroDeProformasPorMes()); ?>
                };

                const chart = new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                        name: 'Reviews',
                        data: chartData.review
                    }],
                    chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                            show: false
                        },
                    },
                    markers: {
                        size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                        type: "gradient",
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2
                    },
                    title: {
                      text: 'Recuento histórico de Reviews',
                      align: 'center',
                      style: {
                        fontSize: '24px',
                        color: '#4154f1'
                      }
                    },
                    xaxis: {
                        type: 'datetime',
                        categories: ['01-01-23', '02-01-23', '03-01-23', '04-01-23', '05-01-23', '06-01-23', '07-01-23', '08-01-23', '09-01-23', '10-01-23', '11-01-23', '12-01-23'],
                        labels: {
                            datetimeFormatter: {
                                year: 'YYYY',
                                month: 'MMMM'
                            }
                        }
                    },
                    tooltip: {
                        x: {
                            format: 'MMMM'
                        },
                    },
                });

                const filterLinks = document.querySelectorAll('.dropdown-item');
                filterLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        const filterValue = link.dataset.value;
                        let color = '#4154f1'; // color por defecto
                        let titleText = 'Recuento histórico de Reviews'; // título por defecto
                        if (filterValue == 'review') {
                          color = '#4154f1';
                          titleText = 'Recuento histórico de Reviews';
                        } else
                          if(filterValue == 'favoritos'){
                            color = '#2eca6a';
                            titleText = 'Recuento histórico de Favoritos';
                          } else
                            if(filterValue == 'proforma'){
                              color = '#ff771d';
                              titleText = 'Recuento histórico de Proforma';
                            }
                            chart.updateOptions({
                              colors: [color],
                              title: {
                                  text: titleText,
                                  style: {
                                    color: color
                                  }
                              }
                            });
                        chart.updateSeries([{
                            data: chartData[filterValue]
                        }]);
                    });
                });

                chart.render();
            });
        </script>
                   </div>
                </div>
             </div>
          </div>
        </div>

        <!-- grafico de barras -->

        <div class="row">

            <div class="col-lg-6">
                <div class="contenedor-grafico">
                <div class="card">
                   <div class="card-body">
                      <h5 class="card-title">Productos más deseados</h5>
                      <div id="barChart1"></div>
                      <script>document.addEventListener("DOMContentLoaded", () => {
                         new ApexCharts(document.querySelector("#barChart1"), {
                           series: [{
                             data: <?php echo json_encode($reporteDAO->getArrayNroProductosPopulares()); ?>,
                             /*colors: [
                              'rgb(255, 99, 132)',
                              'rgb(75, 192, 192)',
                              'rgb(255, 205, 86)',
                              'rgb(201, 203, 207)',
                              'rgb(54, 162, 235)'
                            ],*/
                           }],
                           chart: {
                             type: 'bar',
                             height: 350
                           },
                           plotOptions: {
                             bar: {
                               borderRadius: 4,
                               horizontal: true,
                             }
                           },
                           dataLabels: {
                             enabled: false
                           },
                           xaxis: {
                              categories: <?php echo json_encode($reporteDAO->getArrayProductosPopulares()); ?>,
                           }
                         }).render();
                         });
                      </script> 
                   </div>
                </div>
                </div>
             </div>
             
             <!-- grafico circular -->

             <div class="col-lg-6">
              <div class="contenedor-grafico">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">Reseñas por productos</h5>
                          <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
                          <script>
                            
                              // Generar un color aleatorio en formato RGB
                              function generarColor() {
                                  var r = Math.floor(Math.random() * 256);
                                  var g = Math.floor(Math.random() * 256);
                                  var b = Math.floor(Math.random() * 256);
                                  return "rgb(" + r + "," + g + "," + b + ")";
                              }

                              // Obtener los nombres de los productos y el número de reseñas
                              var nombresProductos = <?php echo json_encode($reporteDAO->getArrayNombresProductos()); ?>;
                              var nroReviewsProductos = <?php echo json_encode($reporteDAO->getArrayNroDeReviewsProductos()); ?>;

                              // Crear una lista de colores aleatorios con la misma longitud que la lista de productos
                              var backgroundColors = [];
                              for (var i = 0; i < nombresProductos.length; i++) {
                                  backgroundColors.push(generarColor());
                              }

                              // Crear la gráfica polar
                              document.addEventListener("DOMContentLoaded", () => {
                                  new Chart(document.querySelector('#polarAreaChart'), {
                                      type: 'polarArea',
                                      data: {
                                          labels: nombresProductos,
                                          datasets: [{
                                              label: 'Reseñas por productos',
                                              data: nroReviewsProductos,
                                              backgroundColor: backgroundColors
                                          }]
                                      }
                                  });
                              });
                          </script> 
                      </div>
                  </div>
              </div>
          </div>
        </div>

    </section>
        <!-- Footer -->
        <footer>
            <div class="container">
                <p>Derechos reservados &copy; 2023 Mi sitio web</p>
            </div>
        </footer>

        <script src="../../js/index.js"></script>  
      <script src="../../js/apexcharts.min.js"></script>
        <script src="../../js/chart.min.js"></script>
        <script src="../../js/echarts.min.js"></script>
      
        <!-- Scripts de Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        


</body>
</html>