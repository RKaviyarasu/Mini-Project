<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<script language="javascript">

function addnewproduct()
{
window.open("addproduct.php");
}
function electronic()
{
window.open("Home.html");
}
function whole()
{
window.open("wholesale.php");
}
function userd()
{
window.open("userdetail.php");
}
function del()
{
window.open("deleteproduct.php");
}

function order()
{
window.open("orderdetail.php");
}
function update()
{
window.open("updatem.php");
}
</script>

<body>
	<br>&nbsp;<button style="background-color:whitered;padding:18px 70px;font-size:19px;"><a href="logout.php">Logout</a></button> 
	<h3 color="green">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin User<h3>
<center>
<font family="Jokerman"size="55"color="#jsbhdfjsbfjbasjdbfsdnfoisjdf9ue8r8ujcosda9j">Online Shop.in</font><br><br>

<button onclick="electronic()"style="background-color:orange;padding:18px 90px;font-size:19px;">Electronic Item</button>

<button onclick="whole()"style="background-color:lightblue;padding:18px 90px;font-size:19px;">Wholesale Deals</button><br><br>
<button onclick="addnewproduct()"style="background-color:lightgreen;padding:17px 60px;font-size:19px;">Add New Product</button>
<button onclick="userd()"style="background-color:lightgreen;padding:17px 60px;font-size:19px;">User Details</button>
<button onclick="del()"style="background-color:lightgreen;padding:17px 60px;font-size:19px;">Delete product</button>
<button onclick="order()"style="background-color:lightgreen;padding:17px 60px;font-size:19px;">Ordered Details</button>
<button onclick="update()"style="background-color:lightgreen;padding:17px 60px;font-size:19px;">Update Product</button>


</div>
</body>
</html>