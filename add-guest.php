<?php
    //Make sure the user is coming from the form
    if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {

        //Send user to guestbook page
        header("location: guestbook.php");
    }

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Connect to database
    $username = 'yzhukgre';
    $password = 'Myx]EYjQf3[346';
    $hostname = 'localhost';
    $database = 'yzhukgre_grc';

    $cnxn = mysqli_connect($hostname, $username, $password, $database)
    or die("Error connecting to database");
    //echo "Connected!";

    /*
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    */

        /*
        array(11) {
            ["fname"]=>
          string(5) "Yurii"
            ["lname"]=>
          string(4) "Zhuk"
            ["jobTitle"]=>
          string(0) ""
            ["company"]=>
          string(0) ""
            ["linkedInURL"]=>
          string(0) ""
            ["emailAdd"]=>
          string(22) "iamyuriizhuk@gmail.com"
            ["meetingType"]=>
          string(6) "meetup"
            ["placeWeMet"]=>
          string(0) ""
            ["message"]=>
          string(0) ""
            ["addMeCheckbox"]=>
          string(3) "yes"
            ["emailFormat"]=>
          string(4) "html"
        }
        */

    // assign all given information from POST method to variables.
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $jobTitle = $_POST['jobTitle'];
    $company = $_POST['company'];
    $linkedInURL = $_POST['linkedInURL'];
    $emailAdd = $_POST['emailAdd'];

    $meetingType = $_POST['meetingType'];
    $placeWeMet = $_POST['placeWeMet'];

    $message = $_POST['message'];

    // check does checkbox and email format exist
    if (!empty( $_POST['addMeCheckbox']) | !empty( $_POST['emailFormat'])) {
        //if $addMeCheckbox or $emailFormat was provided
        $addMeCheckbox = $_POST['addMeCheckbox'];
        $emailFormat = $_POST['emailFormat'];
    }else{
        //if $addMeCheckbox or $emailFormat was not provided assign them to empty strings
        $addMeCheckbox = "";
        $emailFormat="";
    }


    //VALIDATE DATA BEFORE INSERTING INTO DATABASE

    //if $addMeCheckbox or $emailFormat was not provided assign them to empty strings

    // Write the SQL statement and save as `$sql`
    $sql = "INSERT INTO guestbook VALUES ('$fname', '$lname', '$jobTitle', '$company', '$linkedInURL',
                                  '$emailAdd', '$meetingType', '$placeWeMet', '$message', '$addMeCheckbox', '$emailFormat',CURRENT_TIMESTAMP)";
    //echo $sql;    //test sql statement

    $success = mysqli_query($cnxn, $sql);

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
    <?php include 'includes/navbar.html';?>

    <?php
    if ($success) {
        echo "<h1 class='text-center mt-5'>You were added!</h1>";
        echo "<h3 class='text-center'>Thank you for your request. I will contact you soon.</h3>";
    } else {
        echo "Something went wrong";
    }
    ?>

</div>

</body>
</html>
