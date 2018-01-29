<?php
include ("db.php");

if (isset($_POST['done']))
{

$name =$_POST['name'];
$email =$_POST['email'];
$pass =$_POST['pass'];

$insert = mysql_query("INSERT INTO `user_table`(`name`, `email`, `pass`) VALUES ('$name','$email','$pass')");

if($insert)
{
	echo mysql_error();
}
else
{
	echo "inserted...";
}
}
?>

<form method = "POST">
<input type="text" name="name" placeholder="Enter your name"/>
<input type="text" name="email" placeholder="Email"/>
<input type="text" name="pass" placeholder="*******"/>
<input type="submit" name="done"/>

</form>
<a href="record.php"> Show Records </a>