<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Calandly Widget CSS-->
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="main.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid background">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
      <div class="row">
        <div class="col mx-3 my-2 bg-grey">
          <h3 class="text-center">Over Ons</h3>
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-4 ms-3 me-2 my-2 h-auto card">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-M_6hLIRCA4HnsiU3i3a264c1hhIQsYo-_g&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title text-center">Card title</h1>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/login.html" class="btn btn-primary">Login</a>
  </div>
</div>
           <div class="col ms-2 me-3 my-2 bg-grey">
             <h3 class="text center">Data</h3>
               <p class="text center">Dit is de beschrijving van een afspraak waarvoor je kan inschrijven.</p>
      <!-- Calendly link widget begin -->
<a href="" class="btn btn-primary" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/bossie-jo/lmf-gmd'});return false;">Inschrijven</a>
<!-- Calendly link widget end -->
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Calendly Widget -->
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
  </body>
</html>