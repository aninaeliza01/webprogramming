<?php  
 include "connection.php";   
$update=$_GET["uid"];   
$sql="SELECT * FROM `regi` WHERE regID=$update";   
$result=mysqli_query($connection, $sql); 
if(isset($_POST['submit']))   
{   
$name=$_POST['name'];   
$email=$_POST['email'];   
$mobile=$_POST['mobile'];  
$sql="UPDATE `regi` SET `name`='$name', `email`='$email', `mobile`='$mobile'";
$result=mysqli_query($connection, $sql);   
}   
?>  
<form action="#" method="POST"> 
<?php   
while($row=mysqli_fetch_array($result))   
{   
?>  
<table>  
<tr>  
<td>Name</td>  
<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr> <tr>  
<td>Email</td>  
<td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>  </tr>  
<tr> <td>Mobile</td>  
<td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td></tr> <tr>  
<td align="right" colspan="2"><input type="submit" name="submit" value="update"></td></tr>  
<?php   
}   
?>  
</table>  
