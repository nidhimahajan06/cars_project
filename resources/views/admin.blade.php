<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin side</title>
</head>
<body style="background-color:black;">
<center><div class="container" style="border:2px solid black;width:800px;height: 650px;background-color: burlywood;">
	<h1 class="text-center">Add Data</h1>
	<form method="POST" action="/store" enctype="multipart/form-data">
		{{ csrf_field() }}
        <div class="mb-3">
			<label><b>IMAGE</b></label>
			<input type="file" name="image" class="form-control">
		</div><br>
		<div class="mb-3">
			<label><b>BRAND</b></label>
			<input type="text" name="brand" style="margin-left:68px" class="form-control">
		</div><br>
		<div class="mb-3">
			<label><b>PRICE</b></label>
			<input type="text" name="price" style="margin-left:75px" class="form-control">
		</div><br>
        <div class="mb-3">
			<label><b>DESCRIPTION</b></label>
			<input type="text" name="description" style="margin-left:15px" class="form-control">
		</div><br>
        <div class="mb-3">
			<label><b>MILEAGE</b></label>
			<input type="text" name="mileage" style="margin-left:50px" class="form-control">
		</div><br>
        <div class="mb-3">
			<label><b>SEATS</b></label>
			<input type="text" name="seats" style="margin-left:78px"  class="form-control">
		</div><br>
		<input type="submit" name="admin" value="save" class="btn btn-primary">
	</form>
</div></center>
</body>
</html>