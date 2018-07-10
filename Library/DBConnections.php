//DBConnection.php
 
<?php
$con=mysqli_connect('127.0.0.1:3307','root','','Library');
if($con==false)
{
	echo "connection is not done";
}	
else
{
	echo "connection done successfully";
}

?>