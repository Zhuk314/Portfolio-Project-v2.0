<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL& ~E_NOTICE);

session_start();
if (!isset($_SESSION['loggedin'])) {

    //Store the page that I'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to login
    header("location: login.php");
}

// Connect to database
$username = 'yzhukgre';
$password = 'Myx]EYjQf3[346';
$hostname = 'localhost';
$database = 'yzhukgre_grc';

$cnxn = mysqli_connect($hostname, $username, $password, $database);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <?php include '../includes/navbar.html';?>

    <h1>Admin Page</h1>
    <p>Hello Yurii</p>

    <?php
    //1. Define the base query
    $sql = "SELECT * FROM `guestbook` ORDER BY `guestbook`.`date` DESC";

    //echo "<p>POST:</p>";
    //var_dump($_POST);

    //echo "<p>$sql</p>";

    //2. Send the query to the db
    $result = mysqli_query($cnxn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo "<h2>No results found</h2>";
    }

    $count = 1;
    //3. Print the result
    //var_dump($result);
    foreach ($result as $row) {
        //var_dump($row);

        $fname = $row['fname'];
        $lname = $row['lname'];
        $jobTitle = $row['job_title'];
        $company = $row['company'];
        $linkedInURL = $row['linked_in'];
        $emailAdd = $row['email'];

        $meetingType = $row['how_meet'];
        $placeWeMet = $row['other_meet'];

        $message = $row['message'];

        $addMeCheckbox = $row['add_to_mailing'];
        $emailFormat = $row['mailing_format'];
        $time = $row['date'];

        echo "<h4><b>Guest#            $count</b></h4>";
        echo "<p>First name:          $fname</p>";
        echo "<p>Last Name:           $lname</p>";
        echo "<p>Job Title:           $jobTitle</p>";
        echo "<p>Company:             $company</p>";
        echo "<p>LinkedIn URL:        $linkedInURL</p>";
        echo "<p>Email Address:       $emailAdd</p>";
        echo "<p>Meeting Type:        $meetingType</p>";
        echo "<p>Place We Met:        $placeWeMet</p>";
        echo "<p>Message:             $message</p>";
        echo "<p>Add To Mailing List: $addMeCheckbox</p>";
        echo "<p>email format:        $emailFormat</p>";
        echo "<p>Time:                $time</p>";
        echo "<hr>";

        $count = $count+1;



        //echo "<p>$fname $lname $jobTitle $company $linkedInURL $emailAdd $meetingType $placeWeMet $message $addMeCheckbox $emailFormat $time</p>";

}
    ?>



</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>