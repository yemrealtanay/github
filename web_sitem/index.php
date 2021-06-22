<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="styles/style.css" rel="stylesheet">

    <title>Yunus Emre Altanay</title>
  </head>
  <body>
    <div class="container-lg">
  <div class="row">
    <div class="col-sm-12">
    <!-- navbar başlangıç alanı-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Yunus Emre Altanay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">İçerik Ekle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">İçerik Düzenle</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-info" onclick="openForm()">Giriş Yap</button>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'">Üye Ol</button>
        </li>
      </ul>
    </div>
  </div>
  <!--açılır kapanır login menüsü-->
  <div class="form-popup" id="myForm">
  <form action="login.php" class="form-container">
    <h1>Giriş Yap</h1>

    <label for="email"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adı" name="username" required>

    <label for="psw"><b>Parola</b></label>
    <input type="password" placeholder="Parola" name="psw" required>

    <button type="submit" class="btn btn-success">Giriş Yap</button>
    <button type="button" class="btn btn-danger" onclick="closeForm()">Kapat</button>


  </form>
</div>

<!--Popup signup formu-->


<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Üye Ol</h1>
      <p>Lütfen üye olmak için tüm formları doldurun.</p>
      <hr>
      <label for="username"><b>Kullanıcı Adı</b></label>
      <input type="text" placeholder="Kullanıcı Adı" name="username" required>

      <label for="psw"><b>Parola</b></label>
      <input type="password" placeholder="Parola" name="psw" required>

      <label for="psw-repeat"><b>Parolayı Tekrar Edin</b></label>
      <input type="password" placeholder="Parolayı Tekrar Edin" name="psw-repeat" required>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Çıkış</button>
        <button type="submit" class="signup">Üye Ol</button>
      </div>
    </div>
  </form>
</div>

</nav>
    </div>
    <div class="col-sm-6">
      Column
    </div>
    <div class="col-sm-6">
      Column
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="scripts/scripts.js"></script>

  </body>
</html>
