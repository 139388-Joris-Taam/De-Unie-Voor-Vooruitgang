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
    <!-- content -->
    <div class="container-fluid row">
        <div class="ps-xxl-5 ms-xxl-5 col-4 mt-xxl-2 pt-xxl-3 text-start">
                    <a class="text-decoration-none text-dark" href="../page/mensen.php">
                    <button type="submit" href="../page/mensen.php" class="col-6 btn btn-dark">
                    <h4>< Alle mensen</h4>
                </button>
                    </a>
                </div>
        </div>
        <!-- Robin -->
        <div class="ps-xxl-3 d-flex mt-xxl-2 pt-xxl-3 form-group flex-row justify-content-around">
            <div class="d-flex flex-column">
                <a href="../page/mensen-robin.php"> <img style="max-width: 250px" src="../img/mensen-robin.jpg" class="img-fluid" alt="Profiel Robin"> </a>
                <div class="bg-primary text-left text-light">
                    <p>ㅤGeboorte datum: 01 - 03 - 2006</p>
                    <p>ㅤWoonplaats: Alkmaar</p>
                </div>
            </div>
            <div class="col-4 pt-xl-5">
                <h1> Robin</h1>
                <h2><strong>Taakverdeling</strong></h2>
                <ul>
                <li>
                        <p>Woningsnood Pagina</p>
                    </li>
                    <li>
                        <p>Klimaat Pagina</p>
                    </li>
                    <li>
                        <p>Immigratie Pagina</p>
                    </li>
                </ul>
            </div>
            <div class="col-2"> </div>
        </div>
    </div>
</div>
    <?php include '../include/footer.php'; ?>
</body>

</html>