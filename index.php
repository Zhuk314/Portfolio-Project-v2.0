<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">


    <title>Portfolio Project: HTML Resume</title>

    <!-- Insert Favicon-->
    <link href="images/favicon-resume-logo.png" type="image/png" rel="icon">
</head>
<body>
<div class="container jumbotron" id="main">
    <?php include 'includes/navbar.html';?>

    <!--Photo-->
    <div class="text-center">
        <img src="images/photo.jpg" alt="photo" class="img-thumbnail" width="250">
    </div>

    <h1 class="display-4 text-center">Yurii Zhuk</h1>


    <!--Contact Info Part-->
    <div id="contactInfo" class="row">

        <div class="col-3">
            <a href="mailto:iamyuriizhuk@gmail.com" class="text-decoration-none text-dark">
                <p class="mb-0">iamyuriizhuk@gmail.com</p>
            </a>
            <p>(206)822-2222</p>
        </div>

        <div class="col-5 offset-4">
            <a href="https://www.linkedin.com/in/yurii-zhuk-131654203/" class="text-decoration-none text-dark">
                <p class="mb-0">www.linkedin.com/in/yurii-zhuk-131654203/</p>
            </a>

            <a href="https://www.github.com/Zhuk314" class="text-decoration-none text-dark">
                <p>github.com/Zhuk314</p>
            </a>
        </div>

    </div> <!--contact info-->


    <!--Summary Part-->
    <div id="summaryDiv" >
        <h3>Summary</h3>
        <p class="text-justify">
            Software development student, which currently pursuing
            bachelor degree, seeking a summer internship for a
            front-end and back-end development.
        </p>
    </div>


    <!--Education Part-->
    <div id="educationDiv">

        <h3>Education</h3>

        <!--Bachelor of Applied Science-->
        <div  class="row">
            <div class="col-8">
                <p class="mb-0">
                    <span class="font-weight-bold">Green River College</span> – Auburn, WA<br>
                </p>
            </div>

            <div class="col-3 offset-1">
                <p class="mb-0">2020 to Present</p>
            </div>
        </div>

        <div>
            <p class="mb-0">
                Bachelor of Applied Science, expected Spring 2022<br>
                Major: Software Development (Applied Computer Science)<br>
                Relevant Coursework:
            </p>
        </div>

        <div class="row">
            <div class="col">
                <ul>
                    <li>Object-Oriented Programming</li>
                </ul>
            </div>

            <div class="col">
                <ul>
                    <li>Web Development</li>
                </ul>
            </div>
        </div>

        <!--Associate of Applied Science-->
        <div  class="row">
            <div class="col-8">
                <p class="mb-0">
                    <span class="font-weight-bold">Green River College</span> – Auburn, WA<br>
                </p>
            </div>

            <div class="col-3 offset-1">
                <p class="mb-0">2017 to 2020</p>
            </div>
        </div>

        <div>
            <p class="mb-0">
                Associate of Applied Science<br>
                Major: Snformation Technology - System and Security, GPA: 3.7<br>
                Relevant Coursework:
            </p>
        </div>

        <div class="row">
            <div class="col">
                <ul>
                    <li>Basic Object-Oriented Programming</li>
                    <li>Data Structures</li>
                    <li>Systems Programming (networking)</li>
                </ul>
            </div>

            <div class="col">
                <ul>
                    <li>Web Development Fundamentals</li>
                    <li>Database Fundamentals</li>
                </ul>
            </div>
        </div>

    </div> <!--educationDiv-->


    <!--Skills and Certifications Part-->
    <div>
        <h3>Skills and Certifications</h3>

        <div id="skillsDiv" class="row">
            <div class="col">
                <ul>
                    <li>Languages: Java, JavaScript, MySQL, Python</li>
                    <li>Web: HTML/CSS, Bootstrap, jQuery, JSON</li>
                    <li>Agile: pair programming, working in sprints</li>
                </ul>
            </div>

            <div class="col">
                <ul>
                    <li>Tools: Visual Studio Code, IntelliJ IDEA, PhpStorm</li>

                </ul>
            </div>
        </div>
    </div><!--skills and certifications-->


    <!--Experience Part-->
    <div id="experienceDiv">

        <h3>Experience</h3>

        <!--Work-->
        <div>
            <h5 class="text-center">Work</h5>
            <!--Office Assistant, Green River College-->
            <div>
                <div  class="row">
                    <div class="col-8">
                        <p class="mb-0">
                            <span class="font-weight-bold">Green River College</span> – Auburn, WA<br>
                        </p>
                    </div>

                    <div class="col-3 offset-1">
                        <p class="mb-0">2018 to Present</p>
                    </div>
                </div>

                <div>
                    <p>Office Assistant</p>
                </div>

                <ul>
                    <li>Organize the working space in the office</li>
                    <li>Help college students fill out forms and applications.</li>
                </ul>
            </div>

            <!--Teacher Assistant, Green River College-->
            <div>
                <div  class="row">
                    <div class="col-8">
                        <p class="mb-0">
                            <span class="font-weight-bold">Green River College</span> – Auburn, WA<br>
                        </p>
                    </div>

                    <div class="col-3 offset-1">
                        <p class="mb-0">January 2018 - May 2018</p>
                    </div>
                </div>

                <div>
                    <p class="mb-0">Instructor Assistant</p>
                </div>

                <ul>
                    <li>Helped the teacher to fix basic computer issues</li>
                    <li>Taught new students how to use computers</li>
                    <li>Explained to students how to navigate in the educational services</li>
                </ul>
            </div>
        </div>

        <!--Projects-->
        <div>
            <h5 class="text-center">Projects</h5>
            <!--Project #1-->
            <div>
                <p class="font-italic mb-0" style="padding-left:5em;">Team Project</p>
                <p class="mb-0"><span class="font-weight-bold">Coneybeare Sustainability Catalog Web Site</span> - January 2021</p>
                <p class="mb-1">Tools: HTML, CSS, JavaScript, PHP, MySQL</p>
                <p class="text-justify">
                    The team project to create a web page which contains catalog of sustainability
                    companies. The user of web page had to have ability to submit information
                    and be added to the catalog.
                </p>
            </div>

            <!--Project #2-->
            <div>
                <p class="font-italic mb-0" style="padding-left:5em;">Individual Project</p>
                <p class="mb-0"><span class="font-weight-bold">HTML Validator</span> - May 2020</p>
                <p class="mb-1">Tools: Java</p>
                <p class="text-justify">
                    A Java program that can validate HTML code.
                </p>
            </div>
        </div>

    </div><!--experience-->


    <!--Achievements and Activities Part-->
    <div>
        <h3>Achievements and Activities</h3>


        <div>
            <ul>
                <li>Green River College Foundation Scholarship, Awardee, 2019</li>
                <li>Green River College Foundation Scholarship, Awardee, 2020</li>
                <li>Agile: pair programming, working in sprints</li>
            </ul>
        </div>

    </div><!--skills and certifications-->




</div> <!--main container-->



</body>
</html>