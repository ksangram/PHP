<?php

include ("db.php");
?>

<table border="2">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Pass</th>
<th>Edit</th>
<th>Delete</th>
</tr>


<?Php
$record = mysql_query("SELECT * FROM `user_table`");
while($data = mysql_fetch_array($record))
{

	?>
	<tr>
	<td><?php echo $data['id'];?></td>
	<td><?php echo $data['name'];?></td>
	<td><?php echo $data['email'];?></td>
	<td><?php echo $data['pass'];?></td>
	<td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></td>
	<td><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
	</tr>
	
	<?php
}
?>
</table>
<a href="index.php"> Add Users </a>
