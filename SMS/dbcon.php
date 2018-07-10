<?php
$con=mysqli_connect('127.0.0.1:3307','root','','sms');
if($con==false)
{
	echo "connection is not done";
}	
else
{
	echo "connection done successfully";
}

?>