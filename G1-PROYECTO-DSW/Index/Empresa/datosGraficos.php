<?php
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
              <h5 class="card-title">Sales <span>| Today</span></h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="fa-solid fa-cart-shopping"></i></div>
                 <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                 </div>
              </div>
           </div>
        </div>
     </div>


     <div class="col-xxl-4 col-md-6 mb-3">
        <div class="card info-card revenue-card">
           <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="fa-solid fa-dollar-sign"></i></div>
                 <div class="ps-3">
                    <h6>$3,264</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                 </div>
              </div>
           </div>
        </div>
     </div>


     <div class="col-xxl-4 col-xl-12 mb-3">
        <div class="card info-card customers-card">
           <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>
              <div class="d-flex align-items-center">
                 <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="fa-solid fa-address-card"></i></div>
                 <div class="ps-3">
                    <h6>1244</h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
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
                            <h6>Filter</h6>
                         </li>
                         <li><a class="dropdown-item" href="#">Today</a></li>
                         <li><a class="dropdown-item" href="#">This Month</a></li>
                         <li><a class="dropdown-item" href="#">This Year</a></li>
                      </ul>
                   </div>
                   <div class="card-body">
                      <h5 class="card-title">Reports <span>/Today</span></h5>
                      <div id="reportsChart"></div>
                      <script>document.addEventListener("DOMContentLoaded", () => {
                         new ApexCharts(document.querySelector("#reportsChart"), {
                           series: [{
                             name: 'Sales',
                             data: [31, 40, 28, 51, 42, 82, 56],
                           }, {
                             name: 'Revenue',
                             data: [11, 32, 45, 32, 34, 52, 41]
                           }, {
                             name: 'Customers',
                             data: [15, 11, 32, 18, 9, 24, 11]
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
                           xaxis: {
                             type: 'datetime',
                             categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                           },
                           tooltip: {
                             x: {
                               format: 'dd/MM/yy HH:mm'
                             },
                           }
                         }).render();
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
                      <h5 class="card-title">Bar Chart</h5>
                      <div id="barChart1"></div>
                      <script>document.addEventListener("DOMContentLoaded", () => {
                         new ApexCharts(document.querySelector("#barChart1"), {
                           series: [{
                             data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
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
                             categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan',
                               'United States', 'China', 'Germany'
                             ],
                           }
                         }).render();
                         });
                      </script> 
                   </div>
                </div>
                </div>
             </div>

             <!-- grafico de barras -->

             <div class="col-lg-6">
                <div class="contenedor-grafico">
                    <div class="card">
                        <div class="card-body">
                           <h5 class="card-title">Bar CHart</h5>
                           <canvas id="barChart" style="max-height: 400px;"></canvas>
                           <script>document.addEventListener("DOMContentLoaded", () => {
                              new Chart(document.querySelector('#barChart'), {
                                type: 'bar',
                                data: {
                                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                  datasets: [{
                                    label: 'Bar Chart',
                                    data: [65, 59, 80, 81, 56, 55, 40],
                                    backgroundColor: [
                                      'rgba(255, 99, 132, 0.2)',
                                      'rgba(255, 159, 64, 0.2)',
                                      'rgba(255, 205, 86, 0.2)',
                                      'rgba(75, 192, 192, 0.2)',
                                      'rgba(54, 162, 235, 0.2)',
                                      'rgba(153, 102, 255, 0.2)',
                                      'rgba(201, 203, 207, 0.2)'
                                    ],
                                    borderColor: [
                                      'rgb(255, 99, 132)',
                                      'rgb(255, 159, 64)',
                                      'rgb(255, 205, 86)',
                                      'rgb(75, 192, 192)',
                                      'rgb(54, 162, 235)',
                                      'rgb(153, 102, 255)',
                                      'rgb(201, 203, 207)'
                                    ],
                                    borderWidth: 1
                                  }]
                                },
                                options: {
                                  scales: {
                                    y: {
                                      beginAtZero: true
                                    }
                                  }
                                }
                              });
                              });
                           </script> 
                        </div>
                     </div>
                </div>
             </div>


        </div>

        <!-- grafico circular -->

        <div class="row">

            

                <div class="col-lg-6">
                    <div class="contenedor-grafico">
                    <div class="card">
                       <div class="card-body">
                          <h5 class="card-title">Polar Area Chart</h5>
                          <canvas id="polarAreaChart" style="max-height: 400px;"></canvas>
                          <script>document.addEventListener("DOMContentLoaded", () => {
                             new Chart(document.querySelector('#polarAreaChart'), {
                               type: 'polarArea',
                               data: {
                                 labels: [
                                   'Red',
                                   'Green',
                                   'Yellow',
                                   'Grey',
                                   'Blue'
                                 ],
                                 datasets: [{
                                   label: 'My First Dataset',
                                   data: [11, 16, 7, 3, 14],
                                   backgroundColor: [
                                     'rgb(255, 99, 132)',
                                     'rgb(75, 192, 192)',
                                     'rgb(255, 205, 86)',
                                     'rgb(201, 203, 207)',
                                     'rgb(54, 162, 235)'
                                   ]
                                 }]
                               }
                             });
                             });
                          </script> 
                       </div>
                    </div>
                 </div>

                </div>

<!-- grafico radar -->

                <div class="col-lg-6">
                    <div class="contenedor-grafico">
                    <div class="card">
                       <div class="card-body">
                          <h5 class="card-title">Radar Chart</h5>
                          <canvas id="radarChart" style="max-height: 400px;"></canvas>
                          <script>document.addEventListener("DOMContentLoaded", () => {
                             new Chart(document.querySelector('#radarChart'), {
                               type: 'radar',
                               data: {
                                 labels: [
                                   'Eating',
                                   'Drinking',
                                   'Sleeping',
                                   'Designing',
                                   'Coding',
                                   'Cycling',
                                   'Running'
                                 ],
                                 datasets: [{
                                   label: 'First Dataset',
                                   data: [65, 59, 90, 81, 56, 55, 40],
                                   fill: true,
                                   backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                   borderColor: 'rgb(255, 99, 132)',
                                   pointBackgroundColor: 'rgb(255, 99, 132)',
                                   pointBorderColor: '#fff',
                                   pointHoverBackgroundColor: '#fff',
                                   pointHoverBorderColor: 'rgb(255, 99, 132)'
                                 }, {
                                   label: 'Second Dataset',
                                   data: [28, 48, 40, 19, 96, 27, 100],
                                   fill: true,
                                   backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                   borderColor: 'rgb(54, 162, 235)',
                                   pointBackgroundColor: 'rgb(54, 162, 235)',
                                   pointBorderColor: '#fff',
                                   pointHoverBackgroundColor: '#fff',
                                   pointHoverBorderColor: 'rgb(54, 162, 235)'
                                 }]
                               },
                               options: {
                                 elements: {
                                   line: {
                                     borderWidth: 3
                                   }
                                 }
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