<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include("connection.php");
if(!$conn)
{
echo mysql_error();
}
$db = mysql_select_db("facultyData",$conn);
if(!$db)
{
echo mysql_error();
}
$id = $_GET['id'];
$q = "SELECT photoe FROM facultyInfo where id='$id'";
$r = mysql_query("$q",$conn);
if($r)
{

$row = mysql_fetch_array($r);
echo $row['photo'];
}
else
{
echo mysql_error();
}

?>