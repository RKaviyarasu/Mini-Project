<!DOCTYPE html>
<html>
<head><title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
<script type="text/javascript">
	function vel()
	{
		var user=document.getElementById('value1').value;
		var password=document.getElementById('pass1').value;
		if(user=="rajavel" && password=="rajavelm1999@gmail.com")
		{
			window.open('admin.php');
		}
		else
		{
			alert('you are not an "ADMIN" ');
		}
	}
</script>
	<body>
		<center><h1>welcome Online Shopping</h1></center>
		
<div class="container">
	<div class="row-lg">
		<div class="col-lg-20">

			<h2>Admin Login</h2>
			
<div class="form-group">
	<label>username</label>
	<input type="text" id="value1" class="form-control">

</div>
<div class="form-group">
	<label>password</label>
	<input type="password" id="pass1" class="form-control">

</div>
<div><center><button onclick="vel()" class="btn btn-primary">Login</button></center></div>
			</form>

		</div>

			
</div>



	</body>
</html>