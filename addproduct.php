 <?php  
 $connect = mysqli_connect("localhost", "root", "", "order");  

 if(isset($_POST["insert"]))  
 {  $pid=$_POST["pid"];
$pname=$_POST["pname"];
$price=$_POST["price"];
$specification=$_POST["specification"];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images26(pid, pname, price, specification, pimage) VALUES ('$pid', '$pname', '$price', '$specification', '$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("New Product Added Sucessfully")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Adding New Products</title>  
      </head> 
      <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 100px;
  background-color:   #907865;
  padding: 5px;
}
</style>
 <script language="javascript">
function func()
{
	window.open('acbc1n.php')
}
 </script>
      <body> <div> <center>
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Adding New Products</h3>  
                <br />  <font size="5"color="#1a000d">
                <form method="post" enctype="multipart/form-data">  

Product unique id:<input type="text" name="pid"></input> <br>
Product Name:<input type="text" name="pname"></input><br>
Product Price:<input type="text" name="price"></input><br>
Specification of product:<textarea rows="4" cols="50" name="specification"></textarea>
add product image:<input type="file" name="image" id="image" style="width:410px;padding: 22px;background-color: #0066ff
;"></input>  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Upload New Product" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <center>
                <table class="table table-bordered"border="5"bgcolor="skyblue"height="20"width="4">  
                     <tr bgcolor="blue">  
                         <th>
                           Pid
                         </th>
                          <th>Image</th> 
                          <th>Product_Name</th>
                          <th>Price-of-Product</th>
                          <th>Specification_product</th>
                          <th>Buy now</th>
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images26 ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  <form action="acbcn26.php" method="POST">
                          <tr> <input type="hidden" name="idmain" value='.$row['id'].'></input>
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['pimage'] ).'" height="290" width="250" class="img-thumnail" />  
                               </td>  
                               <td>'.$row['pname'].'
                               </td>
                               <td>'.$row['price'].'</td>
                               <td>
                               		'.$row['specification'].'
                              </td>
                              <td>
                              <button type="submit"style="font-size:15px;background-color:lightgreen;padding:100px;";>BUYNOW</button></td>
			
                          </tr>  </form>
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','jfif']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  