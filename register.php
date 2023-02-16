<?php
include "connection.php"; 
if(isset($_POST['submit']))   
{   
    $name=$_POST["name"];   
    $email=$_POST["email"];   
    $mobile=$_POST["mobile"];   
    $gender=$_POST["gender"];   
    $address=$_POST["address"];   
$sql="INSERT INTO `regi`(`name`,`email`,`mobile`, `gender`, `address`) VALUES   
('$name','$email','$mobile','$gender','$address')";   
$result=mysqli_query($connection, $sql);   
}   
?>  
<form action="#" method="POST">  
<center>  
<br><br>  
<h1><center><u> Registration 
From</u></center></h1>  
<br><br>  
<table border="1px">  
<tr>  
<td>Name</td>  
<td><input type="text" name="name"></td>  
</tr>  
<tr>  
<td>Email</td>  
<td><input type="text" name="email"></td>  
</tr>  
<tr>  
<td>Mobile</td>  
<td><input type="text" name="mobile"></td>  
</tr>  
<tr>  
<td>Gender</td>  
<td>  
<input type="radio" name="gender" value="Male"> 
Male    
<input type="radio" name="gender" value="Female"> Female   
</td>  
</tr>  
<tr>  
<td>Address</td>  
<td><textarea name="address" rows="5" cols="20"></textarea></td></tr>  
<tr>  
<td align="right" colspan="2"><input type="submit" name="submit" value="submit"></td></tr>  
</table>  
</center> 
 </form>
 
