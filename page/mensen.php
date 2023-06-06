<!DOCTYPE html>
<html lang="en">

<head>
  <title>De Unie voor Vooruitgang</title>
  <link rel="icon" href="../img/logo-tp.png" type="image/x-icon" />
  <?php include '../include/bootstrap.php'; ?>
</head>

<body>
  <!-- logo -->
  <div class="container-fluid bg-primary text-center">
    <a class="text-decoration-none text-light" href="../page/index.php"><img width="150px" src="../img/logo-tp.png" alt="Social Media Icon"></a>
    <!--navbar -->
    <nav class="navbar navbar-expand-sm  bg-primary  navbar-dark  border-top border-light">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="../page/index.php"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../page/doelen.php"><strong>Over ons</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../page/standpunten.php"><strong>Standpunten</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../page/mensen.php"><strong>Mensen</strong></a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="https://gofundme.com"><strong>Doneer</strong></a>
          </li>
        </ul>
      </div>
  </div>
  </nav>
    <!-- onze mensen -->
    <div class="container-fluid">
    <div class="flex-row pt-xl-5 mb-xxl-5">
        <div class="row text-center justify-content-center">
            <h3>Onze mensen</h3>
        </div>
        <div class="row text-center justify-content-center">
            <h3>Die werken aan een betere toekomst</h3>
        </div>
    </div>
    <!-- de mensen img en namen -->
    <div class="d-flex flex-row justify-content-evenly">
        <div class="d-flex-flex-column bg-primary">
            <h3 class="bg-primary text-center text-light">Joris</h3>
            <a class="text-decoration-none text-light" href="../page/mensen-joris.php"><img style="max-width: 250px" src="../img/mensen-joris.png" class="img-fluid" alt="Profiel Joris"></a>
        </div>
        <div class="d-flex-flex-column bg-primary">
            <h3 class="bg-primary text-center text-light">Robin</h3>
            <a class="text-decoration-none text-light" href="../page/mensen-robin.php"><img style="max-width: 250px" src="../img/mensen-robin.jpg" class="img-fluid" alt="Profiel Robin"></a>
        </div>
    </div>
    <div>ㅤ</div>
    <div>ㅤ</div>
    <div>ㅤ</div>
    <div>ㅤ</div>
    <div>ㅤ</div>
</div>
    <?php include '../include/footer.php'; ?>
</body>

</html>