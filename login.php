<?php
$con = mysqli_connect("localhost","root","12345","demo");
if(isset($_POST['login']))
{
	$email = $_POST["email"];
	$pass = $_POST["pass"];
	$sql = "SELECT * FROM `signup` WHERE email = '$email' AND password = '$pass'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_num_rows($res);
	if($row<1)
	{
		?>
		<script>
		window.alert("Email and Password is not match");
		window.location.href="index.php";
		</script>
		<?php
	}
	else
	{
		header("Location:thankyou.php");
	}
}

?>