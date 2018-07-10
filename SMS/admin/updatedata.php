<?php
	include('../dbcon.php');
	
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcont=$_POST['pcont'];
	$stnd=$_POST['stnd'];
	$id=$_POST['sid'];
	$img=$_FILES['simg']['name'];
	$qry="UPDATE`student`SET`rollno`='$rollno' `name`='$name', `city`='$city', `pcont`='$pcont'=, `standard`='$stnd','id'='$id';";
	
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("data update successfully");
		
		window.open('updateform.php'?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}
}
?>
