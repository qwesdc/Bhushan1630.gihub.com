<?php
session_start();

	if(isset($_SESSION['uid']))
	{
		echo"";
	}
	else
	{
		header('location:../login.php');
	}
	
?>
<?php
include('header.php');
include('titlehead.php');
include('dbcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE 'id'='$sid'";
$run=mysqli_query('$con','$sql');

?>
<form method="POST"action="updatedata.php"enctype="multipart/form-data">
<table align="center" border="1"style="width:70%;margin-top:40px;">
<tr><th>Roll No</th>
<td><input type="text"name="rollno"value=<?php echo $data['rollno'];?>required ></td></tr>
<tr><th>Full Name</th>
<td><input type="text"name="name"value=<?php echo $data['name'];?>required >></td><tr>
<tr><th>City</th>
<td><input type="text"name="city"value=<?php echo $data['city'];?>required ></td><tr>
<tr><th>Phone Number</th>
<td><input type="text"name="pcont"value=<?php echo $data['pcont'];?>required ></td><tr>
<tr><th>Standard</th>
<td><input type="number"name="stnd"value=<?php echo $data['standerd'];?>required ></td><tr>
<tr><th>Image</th>
<td><input type="file"name="simg"required></td><tr>
<tr>
<td><input type=hidden"name="sid" value="<?php echo $data['id'];?>"/>
<tr><td align="center"><input type="submit"name="submit"value="submit"></td><tr>
</table>
</form>
</body>
</html>