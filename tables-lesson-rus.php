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
  <link href="style.css" rel="stylesheet">

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
      <h1>Ваши уроки</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
          <li class="breadcrumb-item active">Уроки</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


<!-- Card - lesson-->
<div class="card1" style="background: linear-gradient(to right, #91CC75 9%, #fff 9% 91%);">
  <div class="card-header1" style="color: #012970;">1</div>
  <div class="card-body1">
    <h5 class="card-title1">Русский язык</h5>
    <p class="card-text1">Описание курса</p>
    <a href=questions.php class="btn1">Сложность: Легкая</a>
  </div>
</div>

<div class="card1" style="background: linear-gradient(to right, #73C0DE 9%, #fff 9% 91%);">
  <div class="card-header1" style="color: #012970;">2</div>
  <div class="card-body1">
    <h5 class="card-title1">Русский язык</h5>
    <p class="card-text1">Описание курса</p>
    <a class="btn2">Закрыто</a>
  </div>
</div>

<div class="card1" style="background: linear-gradient(to right, #73C0DE 9%, #fff 9% 91%);">
  <div class="card-header1" style="color: #012970;">3</div>
  <div class="card-body1">
    <h5 class="card-title1">Русский язык</h5>
    <p class="card-text1">Описание курса</p>
    <a class="btn2">Закрыто</a>
  </div>
</div>

<div class="card1" style="background: linear-gradient(to right, #73C0DE 9%, #fff 9% 91%);">
  <div class="card-header1" style="color: #012970;">4</div>
  <div class="card-body1">
    <h5 class="card-title1">Русский язык</h5>
    <p class="card-text1">Описание курса</p>
    <a class="btn2">Закрыто</a>
        </div>
</div>
<!-- End Card - Lesson-->

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
    </main>
</body>

</html>
