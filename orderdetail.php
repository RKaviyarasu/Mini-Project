 <?php  
 Echo '<center>
 <br><br><h1>Product Orderdetails</h1></center>';
 echo '<table border="10" align="center">
  <tr align="center">
  <th>Username</th>&nbsp;
  <th>Product id</th>&nbsp;
 <th>Product name</th>&nbsp;
  <th>Email</th>&nbsp;
<th>Location</th>&nbsp;
<th>quantity</th>
 <th>Quaries</th>&nbsp;';
 $connect = mysqli_connect("localhost", "root", "", "order");  
$query = "SELECT * FROM orderdetails";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo ' <center>
                          <tr> <td>'.$row['Username'].'</td>&nbsp;
                               <td>'.$row['Pid'].' </td>  &nbsp;
                               <td>'.$row['ProductName'].'</td>&nbsp;
                               <td>'.$row['Email'].'</td>&nbsp;
                               <td>
                               		'.$row['Address'].'
                              </td>&nbsp;
                              <td>'.$row['Quantity'].'</td>
                              <td>
                              '.$row['Quaries'].'
                             </td>&nbsp;
			
                          </tr>  </form>
                     ';  
                }  
                
                

 ?>