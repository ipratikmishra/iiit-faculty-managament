<?php
//show information
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

$q = "SELECT * FROM facutyInfo";
$r = mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
//header("Content-type: text/html");
echo "</br>";
echo $row['name'];
echo "</br>";
echo $row['details'];
echo "</br>";

//$type = "Content-type: ".$row['aphototype'];
//header($type);
echo "<img src=image.php?ano=".$row['no']." width=300 height=100/>";


}
}
else
{
echo mysql_error();
}
?>