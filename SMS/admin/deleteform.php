<?php

	include('../dbcon.php');
	$sid=$_REQUEST['sid'];
	
	$qry="DELETE from 'student'WHERE'id'='$id';";
	
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert("data delete successfully"):
		window.open('deletestudent.php'?sid=<?php echo $is;?>','_self');
		</script>
		<?php
	}
}
?>
