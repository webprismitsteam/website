<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- navigation start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="./">Computer Blog</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- navigation end -->

    <!-- jumbotron start -->
    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
    <!-- jumbotron end -->

    <!-- cards start -->
    <div class="container-fluid py-5">
      <div class="card-deck">
        <div class="card">
          <img src="assets/images/01.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="assets/images/02.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="assets/images/03.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <!-- cards end -->

    <!-- slider start -->
    <div class="">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>

    <style>
      /* Make the image fully responsive */
      .carousel-inner img {
        width: 100%;
        height: 100%;
      }
    </style>
    <!-- slider end -->

    <!-- footer start -->
    <div class="container-fluid py-5 bg-secondary">
      <div class="row">
        <div class="col-md-4">
          <div class="font-weight-bold">Imporrtant Links</div>
          <ul>
            <li><a href="./"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
            <li><a href="about-us.php">About Us</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <div class="font-weight-bold">Address</div>
          <ul>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Kolkata, WB, India</li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> info@webprismits.com</li>
          </ul>
        </div>

        <div class="col-md-4">
          <div class="font-weight-bold">News Letter</div>
          <form class="form-inline my-2 my-lg-0 subscribe_form">
            <input class="form-control mr-sm-2" type="text" placeholder="Email address" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Subscribe</button>
          </form>

          <div>
            <a href="https://facebook.com/arnabmunshi" target="blank">
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>

            <a href="https://twitter.com/arnabmunshi" target="blank">
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- footer end -->

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>