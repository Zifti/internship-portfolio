<?php

if(isset($_REQUEST["firstname"]) && isset($_REQUEST["lastname"]) && isset($_REQUEST["email"])){
    $name =  $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];

    $sql = "INSERT INTO userdata (name, lastname, email)
                VALUES ('$name','$lastname','$email')";

    // Server name must be localhost
    $servername = "localhost";
    
    // In my case, user name will be root
    $username = "root";
    
    // Password is empty
    $password = "";
    
    $dbname = "portfolio";

    // Creating a connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failure: " 
            . $conn->connect_error);
    } 

    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
    }
    // Closing connection
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ernest Hajdini - Portfolio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <div class="header">

        <a href="index.html" class="logo">Portfoli<span>o</span></a>
        <div class="container">
            <input type="checkbox" class="hamburger" id="hamburger">
            <label class="hamburger-button" for="hamburger">
                <div class="menu"></div>
            </label>
            <div= class="overlay">
                <ul class="navigation">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content">

        <div class="test-left">

            <div class="about-me">
                <!-- about me intro -->
                <h1>About Me</h1>
                <p class="intro">
                    I am Ernest, an aspiring full stack engineer who has recently started learning about coding.
                </p>
                <p class="bio">Over the past year, I have pursued a number of courses in full stack development. One of
                    these courses was designed by IBM, specialized in <a href="https://www.edx.org/microbachelors/ibm-full-stack-cloud-application-development">Cloud Application Development.</a> 
                </p>
            </div>
            <div class="hero">
                <!-- my experience and my skills -->
                <div class="experience">
                    <h2>Experience</h2>
                    <h3>2018-Current</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tempore vel molestias quisquam, at aliquam mollitia, temporibus
                        consectetur veritatis facere quasi quaerat ad, modi omnis corporis neque c
                        upiditate earum placeat nulla?</p>
                    <h3>2016-2018</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia necessitatibus iure impedit aliquam perspiciatis temporibus repellendus at tenetur possimus, a
                        lias ea nemo aperiam deserunt doloremque quos, reiciendis nesciunt vitae dolor.
                    </p>
                </div>

                <div class="skill">
                    <h2>Skills</h2>
                    <div class="tech-stack">
                        <div><img src="images/html.png" alt="html"></div>
                        <div><img src="images/css.png" alt="css"></div>
                        <div><img src="images/jss.png" alt="javascript"></div>
                        <div><img src="images/Python.png" alt="python"></div>
                        <div> <img src="images/React.png" alt="react"></div>
                        <div><img src="images/nodejs.png" alt="nodejs"></div>
                    </div>
                </div>
            </div>
        </div>

    

        <div class="test-right">
            <img class="right" src="images/avatar.png" alt="image">
        </div>

    </div>
    <!-- submission form  -->
    <div class="contact-info">
        <h2>Contact infromation</h2>
        <p>Fill up the form to submit your information</p>
        <form action="" method="post">
            <div class="first-name">
                <label for="firstname">First Name</label><br>
                <input type="text" name ="firstname" id="firstname"><br>
            </div>
            <div class="last-name">
            <label for="lastname">Last Name</label><br>
            <input type="text" name ="lastname" id="lastname"><br>
            </div>
            <div class="email">
            <label for="email">Email</label><br>
            <input type="text" name = "email" id="email"><br>
            </div>

            <button class="submit">Submit</button>
        </form>
    </div>
    <!-- contact information -->
    <footer class="social">
        <div class="image">
            <h2>Contact me</h2>
            <a href="https://www.linkedin.com/in/ernest-hajdini-891279172/"><img src="images/linkedin.png"
                    alt="linkedin"></a>
            <a href="mailto:hajdiniernest@gmail.com"><img src="images/mail.png" alt="email"></a>
            <a href="https://www.credly.com/users/ernest-hajdini/badges"><img src="images/credly.jpg" alt="credly"></a>
        </div>
    </footer>
</body>

</html>