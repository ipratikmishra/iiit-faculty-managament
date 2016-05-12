
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysqli_connect("localhost", "root", "root", "userLogin");

    if (mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_error();
if(!$db)
{
echo mysql_error();
}
$name = $_POST['name'];
$details = $_POST['details'];
$image = addslashes (file_get_contents($_FILES['image']['tmp_name']));


$q ="INSERT INTO facultyInfo VALUES('','$name','$details','$image')";

$r = mysql_query($q,$conn);
if($r)
{
echo "Information stored successfully";
}
else
{
echo mysql_error();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Faculty Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="IIIT Bhubaneswar.css">
    
</head>
<body>
   <div class="head"; style="background-color: white; position: fixed; z-index: 4000;margin-top:-20px;
   margin-left: -6px;">
         <span class="college-logo">
            <a href="IIIT Bhubaneswar.htm">
                <img src="logo-small.png" alt="IIIT Logo"; style="height: 100px; width=30%;margin-left: 170px;">
            </a>
        </span>
    <h1 style="float: right;margin-right: 150px;margin-top: 1px;">
        International Institute of Information Technology, Bhubaneswar
    </h1>
        <ul class="navbar"; style="margin-right: 150px; margin-top: -55px; margin-bottom: -40px;">
            <li>
                <a href="About.html">About</a>
            </li>
            <li>
                <a href="faculty.php">Faculty</a>
            
            </li>
            <li>
                <a href="Academics.html">Academics</a>
            
            </li>

            <li><a href="Admissions.html">Admissions</a>
            </li>

            <li><a href="Placements.html">Placement</a>
            </li>

            <li><a href="intranet.iiit-bh.ac.in">Intranet</a>
            </li>

            <li><a href="Jobs.html">Jobs</a>
            </li>
            
            <li><a href="Tenders.html">Tenders</a>
            </li>
            
            <li><a href="Contact.html">Contact</a>
            </li>
            </ul>
    </div>
</body>
</html>