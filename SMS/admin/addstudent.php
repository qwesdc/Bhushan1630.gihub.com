
<?php
include('header.php');
include('titlehead.php');
?>





<div class ="adddash">
<form method="POST"action="addstudent.php"enctype="multipart/form-data">
<table align="center" border="1"style="width:70%;margin-top:40px;">
<tr><th>Roll No</th>
<td><input type="text"name="rollno"placeholder="enter rollno here"></td><tr>
<tr><th>Full Name</th>
<td><input type="text"name="name"placeholder="enter full name here"></td><tr>
<tr><th>City</th>
<td><input type="text"name="city"placeholder="enter city here"></td><tr>
<tr><th>Phone Number</th>
<td><input type="text"name="pcont"placeholder="enter phone number  here"></td><tr>
<tr><th>Standard</th>
<td><input type="number"name="stnd"placeholder="enter standard here"></td><tr>
<tr><th>Image</th>
<td><input type="file"name="simg"required></td><tr>
<tr><td align="center"><input type="submit"name="submit"value="submit"></td><tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcont=$_POST['pcont'];
	$stnd=$_POST['stnd'];
	$img=$_FILES['simg']['name'];
	$qry="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standard`) VALUES ('$rollno','$name','$city','$pcont','$stnd')";
	if($qry)
	{
		echo "bhushaasasan";
	}
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("data insert successful"):
		</script>
		<?php
	}
}
?>
