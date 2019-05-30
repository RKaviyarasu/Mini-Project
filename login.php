<!DOCTYPE html>
<html>
<head><title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>

	<body>
		<center><h1>Welcome To Online Shopping</h1></center>
		
<div class="container">
	<div class="row">
		<div class="col-lg-6">

			<h2>login form</h2>
			<form method="POST" action="validation.php">
<div class="form-group">
	<label>username</label>
	<input type="text" name="user" class="form-control">

</div>
<div class="form-group">
	<label>password</label>
	<input type="password" name="password" class="form-control">

</div>
<button type="submit" class="btn btn-primary">Login</button>
			</form>
<h2>&nbsp;Login as&nbsp;<font color="green"><a href="master.php">Master</a></font></h2>
		</div>

			<div class="col-lg-6">
			<h2>Sign Up</h2>
<form action="registration.php" method="POST"autocomplte="off">
	<div class="form-group">
	<label>first name</label>
	<input type="text" name="n1" class="form-control">
	<label>last name</label>
	<input type="text" name="n2" class="form-control">
	<label>email </label>
	<input type="text" name="n3" class="form-control">
		
	<label>username</label>
	<input type="text" name="user" class="form-control">
	</div>
	
	<div class="form-group">
	<label>password</label>
	<input type="password" name="password" class="form-control">
	</div>
	
	<button type="submit"class="btn btn-primary">Signin</button>
		
</form>
		
	</div>
</div>



	</body>
</html>