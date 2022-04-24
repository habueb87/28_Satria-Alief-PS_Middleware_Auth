@extends('navbar')

@section('activebar')
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="partner">Partnership</a>
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
    <br><br>

         <div class="tengah">
             <div class="kol">
                 <h2><strong>Our Partnership</strong></h2>
             </div>
             <div class="list">
                 <div class="kartu-tutor">
                     <img src="css/ubscon.png" width="200" height="200"/>
                     <h1>Ubisoft</h1>
                     <p>We've been partner since 2002</p>
                 </div>
                 <div class="kartu-tutor">
                     <img src="css/mhycon.png" width="300" height="200"/>
                     <h1>MiHoYo</h1>
                     <p>Recently Partnered With</p>
                 </div>
                 <div class="kartu-tutor">
                     <img src="css/bancon.png" width="200" height="200"/>
                     <h1>BANDAI</h1>
                     <p>Strong Relations From 1998</p>
                 </div>
             </div>
             <div class="list">
                 <div class="kartu-tutor">
                     <img src="css/koncon.png" width="300" height="200"/>
                     <h1>KONAMI</h1>
                     <p>Recently Partnered With</p>
                 </div>
             </div>
         </div>

    <br><br><br><br><br><br>
    
@endsection