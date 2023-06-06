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
    <div class="container-fluid">
    <div class=" text-center row">
        <div>
            <img>
        </div>
        <!-- contact en email -->
        <div class="row pt-xl-5 text-start ">
            <div class="col-1"></div>
            <h2 class="col-4 "> Contact</h2>
            <div class="col-7"></div>
            <!-- email -->
            <div class="col-1"></div>
            <div class="col-4 bg-dark fs-5 text-light">
                <h2 class="text-start">Mail</h2>
                <p> DeUnievanVooruitgang@tweedekamer.nl</p>
            </div>
        </div>
        <!--telefoon -->
        <div class="row text-start  fs-5 pt-xl-5">
            <div class="col-1"></div>
            <div class="col-4 bg-dark text-light">
                <h2 class="text-start">Telefonisch becschikbaar</h2>
                <p> +31 39482759</p>
            </div>
        </div>
        <!-- addres -->
        <div class="row text-start  fs-5 pt-xl-5">
            <div class="col-1"></div>
            <div class="col-4 bg-dark text-light">
                <h2 class="text-start">Adres</h2>
                <p>
                    Vooruitganglaan 87
                    Alkmaar 1638 VL
                    Nederland
                </p>
            </div>
            <div class="col-7"></div>

            <!-- meer vragen -->
        </div class="row justify-content-center">
        <div class=" border-bottom border-dark mt-xl-3 ">
            <h2> Heb je meer vragen laat het ons weten.</h2>
        </div>
        <!-- first row --> 
        <form class="row justify-content-around ">
        <div class="col-1"></div>
            <div class="col-5 flex-md-column d-md-flex">
                <label class="text-start" for="fname">Naam</label>
                <input class="form-control" type="text" id="fname" name="firstname" placeholder="Naam">   
            </div>
            
            <!-- second row --> 
            <div class="col-5 flex-md-column d-md-flex">   
                <label  class="text-start" for="fname">Email Adderes</label>
                <input class="form-control" type="text" id="fname" name="firstname" placeholder="Email Adderes">
            </div>
            <div class="col-1"></div>
            <div class="col-10  flex-md-column d-md-flex"> 
            <div class="col-1"></div>
            <label class="text-start"  for="subject">Vragen</label>
            <textarea class="form-control" class="col-12  flex-md-column d-md-flex" id="subject" name="subject" placeholder="Setel hier je vraag"></textarea>
        </div>
        </form>
        <div class="col-1 "> </div>
        <div class="col-3"> 
        <button class="mt-xl-3 form-control btn btn-dark" type="submit" >Verzenden</button>
       </div>
       <div class="col-8"> </div>
</div>
</div>
    </div>
    <?php include '../include/footer.php'; ?>
</body>

</html>