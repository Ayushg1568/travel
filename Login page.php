<!DOCTYPE>
<html>
<style>
body
{
	background-image: url("1920x1080_hd_wallpapers_travel_001.jpg");
	background-repeat: no-repeat,no-repeat;
	background-position: top left,top right;
	background-size: 100%;

}
p{
	position: relative;
	top: 15%;
	text-align: center;
	font-size: 38px;
	color: GREEN;
}
</style>
<body>
<?php
		extract($_POST);
		$con =new mysqli('localhost','root','','registeration');

		$query = "INSERT INTO `login details`(`Name`, `Mail`, `Contact`, `Password`) VALUES ('$Name','$Mail','$Contact','$Password')";
		$run= mysqli_query($con,$query);
		if($run==TRUE)
		{
			echo " <p> <b>DATA Insert Successfully</p>";
			echo "<br><br> <p> <b>WELCOME $Name</p>";
		}
		else {
			echo "<p> <b>Errorr  !</p>";
		}
	?>

</body>
</html>
