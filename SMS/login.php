<!DOCTYPE HTML>
<html lang="en_US">
<head>
<meta charset="UTF-8">

<title>Welcome on Login Page</title>
</head>

<body style="background:powderblue">
<a href="index.php" style="float:left;margin-left:30px;color:black;font-size:20px;">Back to</a>

<h1 align="center"style="margin-top:200px">Welcome on Login Page</h1>
<form action="login.php"method="post">
<table align="center">
<tr>
<td>Username</td><td align="center"style="margin-top:300px;"><input type="text"name="uname"></td>
</tr>
<tr>
<td>Password</td><td align="center"style="margin-center:20px";><input type="text"name="pass"></td></tr>
<tr><td colspan="2"align="center"><input type="Submit"name="login"value="Login"></td></tr>

</body>
</table>
<a href="Register.php" style="float:left;margin-left:850px;margin-top:100px;color:red;font-size:20px;">New users:Register here</a>
<h3 align="center"style="margin-top:550px;">Developed by: Bhushan B. Patil</h3>
</form>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$qry="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		?>
		<script>
		console.log('Username or password not match');
		alert("Incorrect username and password");
		window.open('login.php','_self');
		
		</script>
	<?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		session_start();
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
}
?>