<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
  display: none;
  position: absolute;
  top: 25%;
  left: 25%;
  width: 50%;
  height: 60%;
  padding: 16px;
  border: 2px solid blue;
  background-color: white;
  z-index: 1002;
  overflow: auto;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
.rates{
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rates:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rates:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rates:not(:checked) > label:before {
    content: '★ ';
}
.rates > input:checked ~ label {
    color: #ffc700;    
}
.rates:not(:checked) > label:hover,
.rates:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rates > input:checked + label:hover,
.rates > input:checked + label:hover ~ label,
.rates > input:checked ~ label:hover,
.rates > input:checked ~ label:hover ~ label,
.rates > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
  </style>

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
      <a class="btn btn-primary" href="#row" role="button">Choose your dream car</a>
      </form>
    </div>
  </div>
</nav>

<div class="form-group">


<p><center><img src="{{asset('images/'. $big->image)}}" style="height:200px;width:200px;"></center></p>
 <h5 class="text-center"><b>CAR ID</b>-{{$big->id}}</h5>
<h5 class="text-center"><b>CAR ID</b>-{{$big->brand}}</h5>
<h5 class="text-center"><b>CAR ID</b>-{{$big->price}}</h5>
<h5 class="text-center"><b>CAR ID</b>-{{$big->description}}</h5>
<h5 class="text-center"><b>CAR ID</b>-{{$big->mileage}}</h5>
<h5 class="text-center"><b>CAR ID</b>-{{$big->seats}}</h5> 

</div>
<p> <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" role="button" class="btn btn-info">Rate This Car</a>
  <div id="light" class="white_content"> <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"role="button" class="btn btn-inline-danger text-danger">Close</a>
  <br>
  <h5>RATE THIS CAR</h5><br>

  <h6>Mileage</h6>

<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>
  <h6>Maintanance</h6>
  <div class="rates">
    <input type="radio" id="star15" name="rate3" value="15" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star14" name="rate3" value="14" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star13" name="rate3" value="13" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star12" name="rate3" value="12" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star11" name="rate3" value="11" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>
  <h6>Cost</h6>
  <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>
  <h6>Comfort</h6>
  <div class="rate">

    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>

  <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"role="button" class="btn btn-secondary ">submit</a>
  </div>
  <div id="fade" class="black_overlay">
  </div>
   
        </div>
        </div>
    </div>
</div>
<footer style="text-align: center; background-color: black;color:white;">
  <span><b>Contact Us</b><span>
   <p>+91 0123456789</p>
</footer>
</body>
</html>