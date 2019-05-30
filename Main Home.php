<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<script language="javascript">
function electronic()
{
window.open("Home.html");
}

function whole()
{
window.open("wholesale.php");
}
</script>

<body>
	<div class="container">
<h2 class="text-center text-success">welcome <?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">Logout</a>
<font family="Jokerman"size="55"color="#jsbhdfjsbfjbasjdbfsdnfoisjdf9ue8r8ujcosda9j">Online Shop.in</font><br><br>
<button onclick="electronic()"style="background-color:orange;padding:18px 150px;font-size:19px;">Electronic_Item</button>

<button onclick="whole()"style="background-color:green;padding:18px 150px;font-size:19px;">Wholesale_Deals</button>

</div>
</body>
</html>>