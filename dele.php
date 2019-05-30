 <?php  
 $deletev=$_POST["dele"];
 $connect = mysqli_connect("localhost", "root", "", "order");  
$sql = " DELETE from tbl_images26 where id= '$deletev' ";  
if ($connect->query($sql) === TRUE) {
   echo '<center>
                <table align="center"border="2">  
                     <tr bgcolor="blue">  
                         <th>Product ID</th>
                          <th>Image</th> 
                          <th>Product_Name</th>
                          <th>Price-of-Product</th>
                         
                     </tr> ';  
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
    echo '<script>alert("Record deleted successfully")</script>';
} else {
    echo "Error deleting record: " . $connect->error;
}
 ?>