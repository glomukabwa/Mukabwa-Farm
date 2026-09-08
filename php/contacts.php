<?php
session_start();
include('config.php');

$success=false;

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $fname = trim($_POST['fname'] ?: '');
    $lname = trim($_POST['lname'] ?: '');
    $email = trim($_POST['email'] ?: '');
    $pnumber = trim($_POST['phone_full'] ?: '');
    $comment = trim($_POST['comment'] ?: '');

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pnumber) && !empty($comment)){
        $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, email, phone_number, comments)
                            VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $email, $pnumber, $comment);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $success=true;
        }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@29.2.3/dist/css/intlTelInput.css">
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
            <div class="modernInput" id="phoneNumber">
                <input type="tel" id="pnumber" name="pnumber" placeholder="712345678" required>
                <label for="pnumber">Phone Number</label>
            </div>
            <div class="comment">
                <p><span id="asterik">*</span> Please fill in any inquiries or requests that you may have <span id="asterik">*</span></p>
                <div class="modernTextArea">
                    <textarea name="comment" id="comment" placeholder="" required></textarea>
                    <label for="comment">Inquiries/Requests</label>
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
        <div class="successBackground">
            <div class="successDiv">
                <p class="circle">.</p>
                <img src="../images/check.png" alt="success tick">
                <h1>Success!</h1>
                <p>Your inquires/requests have been submitted successfully😊.</p>
                <button type="button" class="successOkay">OKAY</button>
            </div>
        </div>
        <div class="errorBackground">
            <div class="errorDiv">
                <p class="circle">.</p>
                <img src="../images/remove.png" alt="error X">
                <h1>Failed</h1>
                <p>Your inquires/requests have not been submitted. Please try again☹️.</p>
                <button type="button" class="errorOkay">OKAY</button>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2026 Mukabwa farm - All rights reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@29.2.3/dist/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#pnumber");

        const iti = window.intlTelInput(input, {
            loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@29.2.3/dist/js/utils.js"),

            initialCountry: "ke",

            hiddenInputs: (telInputName) => ({
                phone: "phone_full"
            })/*hiddenInputs create a HTML hidden input that will be submitted when the form is submitted
                phone: "phone_full" :phone gets the full number ie the country code plus the number entered by the user. 
                we give the combine number (country code + number entered) the name "phone_full". You'll notice that in the PHP code, that is
                the name I have assigned to the phone number variable in $_POST[]
                There are other methods you can use with Intl-tel-input, look them up in their website
               */
        });

        input.addEventListener("input", function(){
            if(input.value.trim() !== ""){
                document.getElementById("phoneNumber").classList.add("has-value");
            }else{
                document.getElementById("phoneNumber").classList.remove("has-value");
            }
        });

        const successConfirmation = document.querySelector(".successBackground");
        const errorConfirmation = document.querySelector(".errorBackground");

        <?php 
        if($_SERVER['REQUEST_METHOD'] === "POST"){/*If the button has submitted... */
            if($success == true){
                /*The reason I don't need to use onclick to check if the button has submitted first
                here is cz php does that job for me (the php at the complete top). Php receives the form and 
                only processes it if it is a "POST" (checking of submission) then assigns the value true to $success 
                So here we put another if($_SERVER['REQUEST_METHOD'] === "POST") bcz the default value of $success is false
                and we don't want the error message condition to be fulfilled before the submission button is clicked cz then
                it will diplay the error message when the page reloads. Then we check whether $success is true or false and
                display the respective popup 
                Also, sth u should know is that js runs before php so if we had used onsubmit(), it would
                be running even before a check has been done.*/
                ?>
                successConfirmation.classList.add("show");
                <?php
            }else{
                ?>
                errorConfirmation.classList.add("show");
                <?php
            }
        }
        
        ?>

        const successOkay = document.querySelector(".successOkay");
        const errorOkay = document.querySelector(".errorOkay");

        successOkay.onclick = () => {
            successConfirmation.classList.remove("show");
        }

        errorOkay.onclick = () =>{
            errorConfirmation.classList.remove("show");
        }
        
    </script>
</body>
</html>