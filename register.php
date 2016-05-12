<?php
   if (isset($_POST['submit'])) {
        include("connection.php"); //connection.php
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
       //shoudl do validation on passwords before submitting form
    $sql = "INSERT INTO loginData (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($dbCon, $sql)) {
    echo "<p style='width: 30%; margin-left: 40%;position: relative;top: 90%;'>"."Registered Successfuly"."</p>";
        } 
        else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbCon);
    }

       mysqli_close($dbCon);
   }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Faculty Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="IIIT Bhubaneswar.css">
    
</head>
<body>
   <div class="head"; style="background-color: white; position: fixed; z-index: 4000;margin-top:-25px;
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
    <div class="login" style="height: 600px;">
        <div style="width: 30%; margin-left: 40%;position: relative;top: 40%;">
        <h1 style="color: orange;">Register for Membership</h1><br><br>
        <form method="post" action="register.php">
            <p>Enter your name:
            <input type="text" class="form-control" name="name" placeholder="Enter Name" /><br />
            Please Enter new Password
            <input type="password" class="form-control" name="password" placeholder="Enter Password" /><br />
            Confirm Password
            <input type="password" class="form-control" name="password" placeholder="Re-Enter Password" /><br />
            <input type="submit" class="btn btn-warning" name="submit" value="Sign Up!" />
            </p>

        </form>
        </div>

    </div>

    </body>

</html>