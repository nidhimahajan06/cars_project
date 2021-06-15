<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
<div class="container">
	<table class="table table-bordered shadow text-center table-striped">
		<tr>
			<th>Id</th>
			<th>Image</th>
			<th> Brand</th>
			<th>Price </th>
			<th> Description</th>
      <th> Mileage</th>
      <th> Seats</th>
		</tr>
		@foreach($cars as $cars)
		<tr>
			<td>{{$cars->id}}</td>
			<td><img src="{{asset('images/'. $cars->image)}}" style="height:20px;width:20px;"></td>
			<td>{{$cars->brand}}</td>
            <td>{{$cars->price}}</td>
            <td>{{$cars->description}}</td>
            <td>{{$cars->mileage}}</td>
            <td>{{$cars->seats}}</td>
	
		</tr>
		@endforeach
	</table>
</div> 

<footer style="text-align: center; background-color: black;color:white;">
  <span><b>Contact Us</b><span>
   <p>+91 0123456789</p>
</footer>
</body>
</html>