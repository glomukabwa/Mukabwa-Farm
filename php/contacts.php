<?php
session_start();
include('config.php');

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $fname = trim($_POST['fname'] ?: '');
    $lname = trim($_POST['lname'] ?: '');
    $email = trim($_POST['email'] ?: '');
    $pnumber = trim($_POST['pnumber'] ?: '');
    $comment = trim($_POST['comment'] ?: '');

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pnumber) && !empty($comment)){
        $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, phone_number, comments)
                            VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $email, $pnumber, $comment);
        $stmt->execute();
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts Page</title>
    <link rel="icon" href="" type="image/x-ico">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/contacts.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../images/black image.jpeg" alt="">
            <p>MUKABWA'S FARM</p>
        </div>
        <div class="pages">
            <ul>
                <li><a href="http://localhost/MukabwaFarm/php/index.php">HOME</a></li>
                <li><a href="http://localhost/MukabwaFarm/php/aboutus.php">ABOUT US</a></li>
                <li><a href="http://localhost/MukabwaFarm/php/products.php">PRODUCTS</a></li>
                <!--<li><a>TESTIMONIALS</a></li>-->
                <li><a href="http://localhost/MukabwaFarm/php/contacts.php">CONTACTS</a></li>
                <li><a href="http://localhost/MukabwaFarm/php/login.php">LOG IN</a></li>
                <li><a href="http://localhost/MukabwaFarm/php/signup.php">SIGN UP</a></li>
            </ul>
        </div>
    </header>
    <main>
        <form method="POST">
            <h1>Contact Form</h1>
            <div class="modernInput">
                <input type="text" id="fname" name="fname" placeholder="" required>
                <label for="fname">First name</label>
            </div>
            <div class="modernInput">
                <input type="text" id="lname" name="lname" placeholder="" required>
                <label for="lname">Last name</label>
            </div>
            <div class="modernInput">
                <input type="email" id="email" name="email" placeholder="" required>
                <label for="email">Email</label>
            </div>
            <div class="modernInput">
                <input type="text" id="pnumber" name="pnumber" placeholder="" required>
                <label for="pnumber">Phone Number</label>
            </div>
            <div class="comment">
                <p><span>*</span> Please fill in any inquiries or requests you may have <span>*</span></p>
                <div class="modernTextArea">
                    <textarea name="comment" id="comment" placeholder="" required></textarea>
                    <label for="comment">Comments</label>
                </div>
            </div>
            <button id="submitbtn">SUBMIT</button>
        </form>
        <section class="other-contacts">
            <h1>Other Modes of Contact</h1>
            <div class="content">
                <div class="info">
                    <div class="contacts">
                        <img src="../images/phone_icon_no_fill.png" alt="phone icon">
                        <div>
                            <h2>Phone Number</h2>
                            <p>+254729183672</p>
                        </div>
                    </div>
                    <div class="contacts">
                        <img src="../images/home_icon_no_fill.png" alt="home icon">
                        <div>
                            <h2>Address</h2>
                            <p>Khayega, Kakamega</p>
                        </div>
                    </div>
                    <div class="contacts">
                        <img src="../images/email_icon_no_fill.png" alt="home icon">
                        <div>
                            <h2>Email</h2>
                            <p>mukabwafarm7@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 Mukabwa farm - All rights reserved</p>
    </footer>
</body>
</html>