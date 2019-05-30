<?php
$nameofCust=$_POST['namei'];
$pidv=$_POST['pid'];
$pnamev=$_POST["pname"];
$pricev=$_POST["pprice"];
$gmail=$_POST["email"];
$addressv=$_POST["Address"];
$qty=$_POST["qt"];
$quarie=$_POST["message"];
//echo $pidv;

$con =new mysqli("localhost","root","","order");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }



//$sql =$con->query( CREATE TABLE orderdetails(id int(255) AUTO_INCREMENT not null PRIMARY KEY, Username varchar(250)NOT null, Pid varchar(250)NOT null, ProductName varchar(255)not null, Price varchar(250)not null, Email varchar(255)not null, Address varchar(250)not null, Quaries varchar(250)not null))");
//echo "Table selected database<br>";
$res=$con->query("INSERT INTO orderdetails(Username, Pid, ProductName, Price, Email, Address, Quantity, Quaries)VALUES ('$nameofCust', '$pidv', '$pnamev', '$pricev', '$gmail', '$addressv', '$qty', '$quarie')");
//echo $res;
//echo "Record created"; 
mysqli_close($con);

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rajavelm07@gmail.com';                 // SMTP username
$mail->Password = 'Rajavel26@1999';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('rajavelm07@gmail.com', 'OnlineShop_Team');
$mail->addAddress ($gmail,'order_details');     // Add a recipient

$mail->Subject = 'Confirmation Ordering';
$mail->Body    = 'Thankyou for trusting us &nbsp;<b>Get back you soon</b><br><font color="green"size="5">Ordered Product Was Confirmed.you Product id Number is</font>'.'$pidv';
$mail->AltBody = 'something went wrong try later';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo '<center>'; 
	echo '<img src="1.gif"align="center"></img>'.'<br>';
    echo '<font size="8"color="green">Product confirmed....</font>'.'<br>';
    echo '<font size="8"color="green">We Will Get Back Soon Through Email....</font>'.'<br>';
    echo '<font size="8"color="light green">Thankyou For Trusting Us...</font>';
    echo '</center>';
}
?>