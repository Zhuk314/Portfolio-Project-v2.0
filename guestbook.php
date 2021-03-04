<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/guestbookStyles.css">



    <title>Guestbook</title>

    <!-- Insert Favicon-->
    <link href="images/favicon-resume-logo.png" type="image/png" rel="icon" sizes="16x16">
</head>
<body>
    <div class="container jumbotron" id="main">

        <?php include 'includes/navbar.html';?>

        <h1 class="text-center">Guestbook Form</h1>

        <form id="guestbookForm" action="add-guest.php" method="post">
            <fieldset id="contactInfo" class="form-group">
                <legend>Contact Information</legend>

                <div class="form-group">
                    <label class="form-control-label" for="fname">First Name</label>
                        <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter First Name">
                    <span class="err" id="err-fname">
                        Please enter a first name
                    </span>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="lname">Last Name</label>
                    <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter Last Name">
                    <span class="err" id="err-lname">
                        Please enter a last name
                    </span>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="jobTitle">Job Title</label>
                    <input class="form-control" type="text" id="jobTitle" name="jobTitle" placeholder="Enter your Job Title">
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="company">Company</label>
                    <input class="form-control" type="text" id="company" name="company" placeholder="Enter your Company">
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="linkedInURL">LinkedIn URL</label>
                    <input class="form-control" type="text" id="linkedInURL" name="linkedInURL" placeholder="https://linkedin.com/in/... .com">
                    <span class="err" id="err-linkedInURL">
                        Wrong format. URL should begins with "http" and ends with ".com"
                    </span>
                </div>

                <div class="form-group">
                    <label class="form-control-label" for="emailAdd">Email Address</label>
                    <input class="form-control" type="text" id="emailAdd" name="emailAdd" placeholder="Enter your Email">
                    <span class="err" id="err-emailRequired">
                        Email is required if you add me to your mailing list.
                    </span>
                    <span class="err" id="err-emailFormat">
                        Use a proper format: sample@gmail.com
                    </span>
                </div>
            </fieldset>


            <fieldset id="howMet" class="form-group">
                <legend>How We Met</legend>
                <div class="form-group">
                    <label for="meetingType">How Did We Meet</label>
                    <select class="custom-select" id="meetingType" name="meetingType" onchange='showOther(this.value);'>
                        <option value="choose" hidden>Choose</option>
                        <option value="meetup">Meetup</option>
                        <option value="job">Job</option>
                        <option value="college">College</option>
                        <option value="noMeet">Haven't meet yet</option>
                        <option value="other">Other</option>
                    </select>
                    <span class="err" id="err-meetingType">
                        Choose how we met.
                    </span>

                    <input class="form-control mt-2" type="text" name="placeWeMet"
                           placeholder="Please Specify" id="placeWeMet">
                </div>



                <div class="form-group">
                    <label class="form-control-label" for="message" >Message</label>
                    <textarea id="message" class="form-control" name="message"></textarea>
                </div>

            </fieldset>


            <fieldset class="form-group">
                <legend>Mailing List</legend>

                <div class="custom-control custom-checkbox mb-2">
                    <input id="addMeCheckbox" name="addMeCheckbox" value="yes" type="checkbox" class="custom-control-input" onchange='showEmailFormat();'>
                    <label class="custom-control-label" for="addMeCheckbox">Please add me to a mailing list</label>
                </div>

                <div id="emailFormat" class="form-group">
                    <label class="form-control-label d-block">Please choose an email format: </label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="emailFormat-html" name="emailFormat" value="html">
                        <label class="form-check-label" for="emailFormat-html">HTML</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="emailFormat-text" name="emailFormat" value="text">
                        <label class="form-check-label" for="emailFormat-text">Text</label>
                    </div>
                </div>


            </fieldset>


            <button class="btn btn-primary" type="submit" id="submit">Submit</button>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="guestbook.js"></script>
</body>

</html>
