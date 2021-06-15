<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Choose admin or user</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>CARS.COM</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      <form class="d-flex">
      <a class="btn btn-primary" href="/show" role="button">ADMIN</a>&nbsp;
      <a class="btn btn-primary" href="/showlist" role="button">USER</a>
      </form>
    </div>
  </div>
</nav>
    <center><img src="{{url('/images/carmain.jpg')}}" style="width:1200px;height:400px" alt="Image"/></center><br>
    <center><div class="container">
   <div class="row">
    <div class="col-md-4">
    <img src="{{url('/images/car1.jpg')}}" style="width:380px;height:190px" alt="Image"/></div>
    <div class="col-md-4">
    <img src="{{url('/images/car2.jpg')}}" style="width:380px;height:190px" alt="Image"/></div>
    <div class="col-md-4">
    <img src="{{url('/images/car3.jpg')}}" style="width:380px;height:190px" alt="Image"/></div>
    </div>
    </div> </center><br>
    <footer style="text-align: center; background-color: black;color:white;">
  <span><b>Contact Us</b><span>
   <p>+91 0123456789</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
