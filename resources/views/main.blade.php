@extends('navbar')

@section('activebar')
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="partner">Partnership</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact Us</a>
        </li>
@endsection

@section('link_rel')
    <title>Grand Order, The Ultimate Digital Game Distributor</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mainPg.css"></link>
    <link rel="stylesheet" href="js/bootstrap.js"></link>
@endsection

@section('content')

<div class = "tbnewpage">
      <!-- from here -->

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="css/smtcov.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="css/genshincov.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="css/samucov.webp" alt="Third slide">
    </div>
  </div>
  <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- to here -->

    </div>
    <br><br>
    <h1><strong>Best Selling Games This Month</strong></h1>
    <br><br><br>

    <div class = "tb">
    <div class="gif1"></div>
    <div class="gif2"></div>
    <div class="img"></div>
    <h2>Grand Order is the ultimate destination</h2>
    <h2>for playing, discussing, and creating games.</h2>
    <br><br><br><br><br><br><br><br>
    <div class = "tb">
    <h1>LEARN MORE</h1>
    <div class="img3"></div>
    </div>
    <br><br><br><br><br><br>
    <div class = "tb">
    <div class="coverleft1"></div>
    <div class="coverright1"></div>
    </div>
    <div class = "tb">
    <div class = "tbsm">
    <div class="smollcoverleft"></div>
    </div>
    <h1><strong>Access Games Instantly</strong></h1>
    <p>With nearly 30,000 games from AAA to indie and everything in-between.</p>
    <p>Enjoy exclusive deals, automatic game updates,</P>
    <p>and other great perks.</p>
    </div>
    <div class = "tb">
    <div class="coverleft2"></div>
    <div class="coverright2"></div>
    </div>
    <br>
    <div class = "tbsm">
    <div class="smollcoverright"></div>
    </div>
    <br><br><br><br><br><br>
    <h1><strong>And So Much More...</strong></h1>
    <p>Earn achievements, read reviews,</p>
    <p>explore custom recommendations, and more.</p>
    <br><br><br>
    
@endsection