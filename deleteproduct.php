 <?php  
 $connect = mysqli_connect("localhost", "root", "", "order");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Delete Existing Product</title>  
      </head> 
     
 <script language="javascript">
function func()
{
	window.open('acbc1n.php')
}
 </script>
      <body> <div> <center>
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h1 align="center">Delete Existing Products</h1>  
                <br />  <font size="5"color="#1a000d">
                <form action="dele.php" method="POST" enctype="multipart/form-data">  

Enter Product id:<input type="text" name="dele"></input> <br></input>  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Delete Product" style="padding: 15px 75px;color: lightgreen"/>  
                </form>  
                
                <center>
                <table align="center"border="2">  
                     <tr bgcolor="blue">  
                         <th>Product ID</th>
                          <th>Image</th> 
                          <th>Product_Name</th>
                          <th>Price-of-Product</th>
                         
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images26 ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo ' 
                          <tr> <td><input type="text" name="idmain" value='.$row['id'].'></input></td>
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['pimage'] ).'" height="290" width="250" class="img-thumnail" />  
                               </td>  
                               <td>'.$row['pname'].'
                               </td>
                               <td>'.$row['price'].'</td>
                               
                          </tr>  </form>
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 