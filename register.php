<?php
$con = mysqli_connect("localhost","root","12345","demo");
if(isset($_POST['submit']))
{
	$uname = $_POST['username'];
	$pass = $_POST['Password'];
	$email = $_POST['email'];
	$sql = "INSERT INTO `signup`(`username`, `password`, `email`) VALUES ('$uname','$pass','$email')";
	$res = mysqli_query($con,$sql);
	if($res)
	{
		?>
		<script>
		window.alert("Data is Inserted Successfully");
		</script>
		<?php
	}
}	
?>