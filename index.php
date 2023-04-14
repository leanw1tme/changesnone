<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Learns</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
<?php include 'header.php'; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-house-door"></i>
        </a>
      </li><!-- End Dashboard Nav -->

        
        <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="star.php">
          <i class="bi bi-star me-1"></i>
        </a>
      </li><!-- End Star Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="bi bi-box-arrow-in-right"></i>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Ваши курсы</h1>
<button style="  font-size: 12px;
  font-weight: bold;
  background-color: #efefef;
border: 1px solid #012970;
  border-radius: 100px;
  padding: 4px 17px;
  text-decoration: none;
  cursor: pointer;
    margin-left: 550px;   color: #012970;" onclick="showCard()">Показать скрытые элементы</button>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
<style>
#threed1{
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
}

#threed1:hover {
  box-shadow: 1px 1px #6495ed,
              2px 2px #6495ed,
              3px 3px #6495ed,
              4px 4px #6495ed,
              5px 5px #6495ed,
              6px 6px #6495ed,
              7px 7px #6495ed;
  -webkit-transform: translateX(-7px);
  transform: translateX(-7px);
}
#threed2{
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
}

#threed2:hover {
  box-shadow: 1px 1px #6495ed,
              2px 2px #6495ed,
              3px 3px #6495ed,
              4px 4px #6495ed,
              5px 5px #6495ed,
              6px 6px #6495ed,
              7px 7px #6495ed;
  -webkit-transform: translateX(-7px);
  transform: translateX(-7px);
}
#threed3{
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
}

#threed3:hover {
  box-shadow: 1px 1px #6495ed,
              2px 2px #6495ed,
              3px 3px #6495ed,
              4px 4px #6495ed,
              5px 5px #6495ed,
              6px 6px #6495ed,
              7px 7px #6495ed;
  -webkit-transform: translateX(-7px);
  transform: translateX(-7px);
}
#threed9{
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  cursor: pointer;
}

#threed9:hover {
  box-shadow: 1px 1px #6495ed,
              2px 2px #6495ed,
              3px 3px #6495ed,
              4px 4px #6495ed,
              5px 5px #6495ed,
              6px 6px #6495ed,
              7px 7px #6495ed;
  -webkit-transform: translateX(-7px);
  transform: translateX(-7px);
}
#threedyellow{
   -webkit-transition: all 0.3s ease;;
  -moz-transition: all 0.3s ease;;
  -o-transition: all 0.3s ease;;
  transition: all 0.3s ease;
}
#threedyellow:hover {
  box-shadow:
    1px 1px #ffd700,
    2px 2px #ffd700,
    3px 3px #ffd700,
    4px 4px #ffd700,
    5px 5px #ffd700,
    6px 6px #ffd700,
    7px 7px #ffd700;
  -webkit-transform: translateX(-7px);
  transform: translateX(-7px);
}
</style>              

            <!-- Card -->
           <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" id="threed1" style="border: 2px solid #6495ED; background:  linear-gradient(to bottom, #6495ED 50%, #fff 50%);">
            

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="#">В Избранное</a></li>
<li><a class="dropdown-item" href="#" onclick="hideCard('threed1')">Скрыть</a></li>

                  </ul>
                </div>

                <div class="card-body">
                    <a href="tables-lesson-rus.php">
                  <h6 class="card-title"> <span>Уроков: 6</span></h6>
                    <h5 class="card-title">Русский язык</h5>

                  <h5 class="card-text"><span>Тут описание какого то урока</span></h5></a>
                </div>

              </div>
            </div><!-- End Card -->

            <!-- Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" id="threed2" style="border: 2px solid #6495ED; background:  linear-gradient(to bottom, #6495ED 50%, #fff 50%);">
                

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="#">В Избранное</a></li>
<li><a class="dropdown-item" href="#" onclick="hideCard('threed2')">Скрыть</a></li>
                  </ul>
                </div>

                <div class="card-body">
                    <a href="tables-lesson-rus.php">
                  <h6 class="card-title"> <span>Уроков: 6</span></h6>
                    <h5 class="card-title">Русский язык</h5>

                  <h5 class="card-text"><span>Тут описание какого то урока</span></h5></a>
                </div>

              </div>
            </div><!-- End Card -->
              
                          <!-- Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" id="threed3" style="border: 2px solid #6495ED; background:  linear-gradient(to bottom, #6495ED 50%, #fff 50%);">
                

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="#">В Избранное</a></li>
<li><a class="dropdown-item" href="#" onclick="hideCard('threed3')">Скрыть</a></li>
                  </ul>
                </div>

                <div class="card-body">
                    <a href="tables-lesson-rus.php">
                  <h6 class="card-title"> <span>Уроков: 6</span></h6>
                    <h5 class="card-title">Русский язык</h5>

                  <h5 class="card-text"><span>Тут описание какого то урока</span></h5></a>
                </div>

              </div>
            </div><!-- End Card -->
              
                          <!-- Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" id="threedyellow"style="border: 2px solid #FFD700; background:  linear-gradient(to bottom, #FFD700 50%, #fff 50%);">
                

                  <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="#">В Избранное</a></li>
                    <li><a class="dropdown-item" href="#">Скрыть</a></li>
                  </ul>
                </div>

                <div class="card-body">
                    <a href="tables-lesson-litr.php">
                  <h6 class="card-title"> <span>Уроков: 6</span></h6>
                    <h5 class="card-title">Русская литература</h5>

                  <h5 class="card-text"><span>Тут описание какого то урока</span></h5></a>
                </div>

              </div>
            </div><!-- End Card -->
              
                          <!-- Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card"  id="threedyellow" style="border: 2px solid #FFD700; background:  linear-gradient(to bottom, #FFD700 50%, #fff 50%);">
                

                 <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="#">В Избранное</a></li>
                    <li><a class="dropdown-item" href="#">Скрыть</a></li>
                  </ul>
                </div>

                <div class="card-body">
                    <a href="tables-lesson-litr.php">
                  <h6 class="card-title"> <span>Уроков: 6</span></h6>
                    <h5 class="card-title">Русская литература</h5>

                  <h5 class="card-text"><span>Тут описание какого то урока</span></h5></a>
                </div>

              </div>
            </div><!-- End Card -->
              
                          <!-- Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card" id="threed9" style="border: 2px solid #6495ED; background:  linear-gradient(to bottom, #6495ED 50%, #fff 50%);">
                

                 <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    <li><a class="dropdown-item" href="#">В Избранное</a></li>
                    <li><a class="dropdown-item" href="#">Скрыть</a></li>
                  </ul>
                </div>

                <div class="card-body">
                    <a href="tables-lesson-rus.php">
                  <h6 class="card-title"> <span>Уроков: 6</span></h6>
                    <h5 class="card-title">Русский язык</h5>

                  <h5 class="card-text"><span>Тут описание какого то урока</span></h5></a>
                </div>

              </div>
            </div><!-- End Card -->


          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Rus Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title text-center">Русский язык <span>| Прогресс</span></h5>

              <div id="trafficChartRus" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChartRus")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '2%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Прогресс',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1,
                          name: 'Не пройдено',
                        itemStyle: {
                        color: '#efefef'
                         }
                          
                        },
                        {
                          value: 3,
                          name: 'Пройдено',
                        itemStyle: {
                        color: '#6495ED'
                         }
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Rus Traffic -->
            
          <!-- Lit Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title text-center">Русская литература <span>| Прогресс</span></h5>

              <div id="trafficChartLit" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChartLit")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '2%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Прогресс',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1,
                          name: 'Не пройдено',
                        itemStyle: {
                        color: '#efefef'
                         }
                          
                        },
                        {
                          value: 1,
                          name: 'Пройдено',
                        itemStyle: {
                        color: '#FFD700'
                         }
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Lit Traffic -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>LastLearns</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by LastLearns
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/holl.js"></script>

</body>

</html>