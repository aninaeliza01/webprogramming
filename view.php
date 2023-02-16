<?php   
include "connection.php"; ?>  
<center>  
<br><br>  
<h1><center><u> Registered Users </u></center></h1>  
<br><br>  
<table border="1">  
<tr>  
<th>USER ID</th>  
<th>NAME</th>  <th>EMAIL</th>  
<th>MOBILE</th>  
<th>GENDER</th>  
<th>ADDRESS</th>  
<th>UPDATE</th>  
<th>DELETE</th>  
</tr>  
<?php   
$res=mysqli_query($connection, 
"SELECT * FROM `regi`");  while 
($row = mysqli_fetch_array($res))   
{ ?><tr>  
<td><?php echo $row["regID"]; ?></td>  
<td><?php echo $row["name"]; ?></td>  
<td><?php echo $row["email"]; ?></td>  
<td><?php echo $row["mobile"]; ?></td>  
<td><?php echo $row["gender"]; ?></td>  
<td><?php echo $row["address"]; ?></td>  
<td><a href="update.php?uid=<?php echo $row["regID"]; ?>">UPDATE</a></td>  
<td><a href="delete.php?did=<?php echo $row["regID"]; ?>">DELETE</a></td>  
</tr>  
<?php   
} ?>  
</table>  
</center> 
