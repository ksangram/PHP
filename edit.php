<?php

		include ("db.php");

		$id = $_GET['id'];
		
		$temp = mysql_query("SELECT * FROM `user_table` WHERE id ='$id'");
		$check =mysql_fetch_array($temp);
				
if (isset($_POST['done']))

{
$name =$_POST['name'];
$email =$_POST['email'];
$pass =$_POST['pass'];

$edit = mysql_query("UPDATE `user_table` SET `name`='$name',`email`='$email',`pass`='$pass' WHERE id ='$id'");
header("location:record.php");


if($edit)
{
	echo mysql_error();
}
else
{
	echo "updated...";
}

}

?>

<form method = "POST">
<input type="text" name="name" value="<?php echo $check['name'];?>" placeholder="Enter your name"/>
<input type="text" name="email" value="<?php echo $check['email'];?>" placeholder="Email"/>
<input type="text" name="pass"  value="<?php echo $check['pass'];?>" placeholder="*******"/>
<input type="submit" name="done"/>

</form>

