<html> 
 	<head> 
 	 	<title></title> 
 	 	<style> 
 	 	 	body 
 	 	 	{ 
 	 	 	 	margin:2%; 
 	 	 	 	border:2px solid black; 
 	 	 	} 
 	 	 	table 
 	 	 	{ 
 	 	 	 	background-color:#f0f2f5;  	 	 	 	width:80%; 
 	 	 	} 
 	 	 	form{  	 	 	 	margin:2%; 
 	 	 	} 
 	 	</style> 
 	</head> 
<body style="background-color:#dbd6d0"> 
<?php 
 	$conn=new mysqli("localhost","root","","details");  	if($conn->connect_error) 
 	{ 
 	 	die("Connection fail".connect_error); 
 	} 
 	echo "<center><h1>Details</h1></center>";  	if(isset($_POST["s"])) 
 	{ 
 	 	$no=$_POST["no"]; 
 	 	$n=$_POST["n"]; 
 	 	$d=$_POST["d"]; 
 	 	$a=$_POST["a"]; 
 	 	$p=$_POST["p"]; 
 	 	$e=$_POST["e"]; 
 	 	$sql="INSERT INTO `personal 
details`(no,name,dob,address,phno,email)VALUES('$no','$n','$d','$a','$p','$e')"; 
 	 	$result=$conn->query($sql);  	 	if($result==TRUE) 
 	 	{ 
 	 	 	echo "Inserted Successfully";  	 	 	header('Location:viewdetails.php'); 
 	 	} 
 	} 
?> 
<form method="POST"> 
 	No.:<input type="text" id="no" name="no"><br><br>  	Name:<input type="text" id="n" name="n"><br><br>  	dob:<input type="date" id="d" name="d"><br><br> Address:<textarea type="text" id="a" name="a"></textarea><br><br> 
Phone number<input type="text" id="p" name="p"><br><br> 
Email Id:<input type="email" id="e" name="e"><br><br> 
<input type="submit" id="s" name="s"> 
</form> 
</body> 
</html> 
