<!DOCTYPE html>

<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="IIIT Bhubaneswar.css">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body style="background-image:url(bg3.jpg);background-attachment: fixed;
    background-size: cover;">
<div class="head"; style="background-color: white; position: fixed; z-index: 4000;">
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
                <a href="">About</a>
            </li>
            <li>
                <a href="faculty.php">Faculty</a>
            
            </li>
            <li>
                <a href="javascript:void(0)">Academics</a>
            
            </li>

            <li><a href="javascript:void(0)">Admissions</a>
            </li>

            <li><a href="javascript:void(0)">Placement</a>
            </li>

            <li><a href="javascript:void(0)">Intranet</a>
            </li>

            <li><a href="javascript:void(0)">Jobs</a>
            </li>
            
            <li><a href="javascript:void(0)">Tenders</a>
            </li>
            
            <li><a href="javascript:void(0)">Contact</a>
            </li>
            </ul>
    </div>
  <br><br>
    <h1 style="text-align: center;">
        Dept. Computer Science, IIIT Bhubaneswar
    </h1>
    <form>
    <div style="float: right; width: 5%;">
    <button type="submit" class="btn btn-danger" name="logout" value="logout" onclick="javascript: form.action='logout.php';">Logout</button>
    </div>
    <div style="float: right; margin-right: 2%;">
    <button type="submit" class="btn btn-success" name="regfac" value="regfac" onclick="javascript: form.action='regfac.php';">Register New Faculty</button>    
    </div>
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "userLogin";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM facultyInfo";
    $result = $conn->query($sql);
    echo "<br>"."<br>"."<br>"."<br>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div style="width:30%;float:left;margin-left:2%;margin-bottom:5%;">';
            
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" style="margin-left:30%;width:50%;border-radius: 40px;"/>';
            echo '<br /><br />';

            echo '<i><h5 style="text-align:center;color:white;padding: 10px; border: 2px solid gray;color:white;background: rgba(0, 20, 0, 0.7);">';
            echo $row["name"]. "<br> " . "<br> " . $row["details"]. "<br>". "<br>";
            echo '</h5><i>';

            echo '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>