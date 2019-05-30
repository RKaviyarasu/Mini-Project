<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="contact form example">
    <title>buy*portal*online</title>
<style>
body
{
    background-image: url("f.jpg");


  height: 100%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<div class="bg"></div>
<center>
<font family="MS Reference Sans Serif"size="5"color="orange">
<font color="#wsdfgg909kx"size="15"family="Lucida Handwriting">Please Fillup Your Details.....</font> 
      <br>
<br>


    <form id="gform" method="POST" class="pure-form pure-form-stacked" data-email="from_email@example.com"
          action="index.php">




        <label for="Name of Cust">Name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" id="namei" name="namei" placeholder="Please Enter The Name" style="padding:6px 65px;"></input>

        <br>
       
        <br>

	<label for="product_id">Product_Id</label>&nbsp;&nbsp;
	<input type="text" id="pid" name="pid" value="<?php

$main=$_POST["idmain"];
$connect = mysqli_connect("localhost", "root", "", "order");

$query = "SELECT id FROM tbl_images26 where id= $main";  
            $result = mysqli_query($connect, $query);  
              while($row = mysqli_fetch_array($result)) {
echo $row['id'];
}
 
   ?>" placeholder="like this **SAMSUNG8943"style="padding:6px 65px;"></input>

        <br>
 	<br>
	<label for="productname">Product_Name</label>&nbsp;
	<input id="pname" id="pname" name="pname"value="<?php
$main=$_POST["idmain"];
$connect = mysqli_connect("localhost", "root", "", "order");

$query = "SELECT pname FROM tbl_images26 where id= $main";  
            $result = mysqli_query($connect, $query);  
              while($row = mysqli_fetch_array($result)) {
echo $row['pname'];
}?>" placeholder="name_of_product"style="padding:6px 49px;"></input>	
	<br>
        <br>
	<label for="producPrice">Price</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" id="pprice" name="pprice"value="<?php
$main=$_POST["idmain"];
$connect = mysqli_connect("localhost", "root", "", "order");
  
$query = "SELECT * FROM tbl_images26 where id=$main";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result)) {
   echo $row['price'] ;
 }
   ?>"
   style="padding:6px 65px; "></input>	
	

        <br><br>
        <label for="email">Your Email Address:</label>
        <input type="text" id="email" name="email" type="email"
               required placeholder="your.name@email.com"style="padding:6px 25px;"/>
<br><br>
<label for="address">Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input id="Address" name="Address" placeholder="address landmark,pincode"style="padding:6px 65px;required"></input>	
	<br><br>

 <label>quantity:</label>&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="number" name="qt" placeholder="Minimum Order 15"style="padding:9px 70px;required">

<br>
<br>
        <label for="message[quaries]">Message:[Quaries] </label>
        <textarea id="message" name="message" rows="6"cols="32"
                  placeholder="if you have any quaries please write here....."></textarea>
<br>
<br>

        <button class="button-success pure-button button-xlarge"style="background-color:lightgreen;padding:8px 100px;font-weight:700;font-size:19px;font-family:Kristen ITC;">
            <i class="fa fa-paper-plane"></i>&nbsp;Place an Order
        </button>

    </form>

  </body>

</html>


