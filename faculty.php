<?php
    session_start();

    if (isset($_POST['submit'])) {
        include("connection.php");
        $username = strip_tags($_POST['name']);
        $password = strip_tags($_POST['password']);
        
        $sql = "SELECT id, username, password FROM loginData WHERE username = '$username' LIMIT 1";
        
        $query = mysqli_query($dbCon, $sql); 
         if ($query) 
         {
            $row = mysqli_fetch_row($query); 
            $userId = $row[0];
            $dbUsername = $row[1];
            $dbPassword = $row[2];
           
         }
        if ($username == $dbUsername && $password == $dbPassword) 
        {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $userId;
            header('Location: user.php');
        } else {
            echo '<script language="javascript">';
echo 'alert("Incorrect Password. Please try again!")';
echo '</script>';

        }
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
      <div class="login" style="height: 600px;">
        <div style="width: 30%; margin-left: 40%;position: relative;top: 40%;">
            <h1 style="color: orange;">Login System</h1>
            <br>
            <form role="form" method="post" action="faculty.php">
                <input type="text" class="form-control" name="name" placeholder="Name" style="width:80%; height:50px;" /><br />
                <input type="password" class="form-control" name="password" placeholder="Password" style="width:80%;height:50px;"
                /><br />
                 <button type="submit" class="btn btn-warning" name="submit" value="Login" style="float:right; margin-right:19%;">Submit</button>

                 <button type="submit" class="btn btn-warning" name="register" value="register" onclick="javascript: form.action='register.php';">Sign Up</button>
            </form>
        </div>
      </div>
    </body>

</html>