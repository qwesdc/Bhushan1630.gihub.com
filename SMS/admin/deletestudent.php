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
?>



<div class ="dashboard">
<table align="center" border="1"style="width:70%;margin-top:40px;">  
<form method="POST"action="deletestudent.php">

<tr><th>Standerd</th>
<td><input type="number"name="standerd"placeholder="enter standerd here"required="required"></td>
<th>Full Name</th>
<td><input type="text"name="name"placeholder="enter name"required="required"></td>
<td align="center"><input type="submit"name="submit"value="search"></td></tr>

</form>
</table>
<table align="center"width="80%"border="1"style="margin-top:10px;">
<tr>
<th>No</th>
<th>Image</th>
<th>Name</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$standerd=$_POST['standerd'];
	$name=$_POST['name'];
	$sql="select * from 'student'where 'standerd'='$standerd'AND 'name' LIKE'%$name%'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)<1)
	{
		echo"<tr><td colspan='5'>no records found</td></tr>";
	}
	else
	{
		$count=0;
		while($data=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
			<tr align="center">
			<td><?php echo $count;?></td>
			<td><img src="../dataimg/<?php echo $data['image'];?>"style="max-width:100px;"/></td>
           <td><?php echo $data['name'];?></td>
             <td><?php echo $sdata['rollno'];?></td>
           <td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
            </tr>
		
	
	      <?php 
		}
	}
}
?>
</table>
