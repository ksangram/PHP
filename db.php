<?php
mysql_connect("localhost","root","rootpass");
$db = mysql_select_db("crud_db");

if(!$db)
{
   echo "Not Connected";  
}
else
{
   echo "Connected Sucessfully.....";
}   
?>