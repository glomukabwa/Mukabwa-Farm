<?php
session_start();
include 'config.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $fname = trim($_POST['fName'] ?: '');
    $lname = trim($_POST['lName'] ?: '');
    $email = trim($_POST['email'] ?: '');
    $pNumber = trim($_POST['pNumber'] ?: '');
    $password = trim($_POST['password'] ?: '');

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare(
        "INSERT INTO users (first_name, last_name, email, phone_number, password_hash) 
                     VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fname, $lname, $email, $pNumber, $hashedPassword);
    if($stmt->execute()){
        $newUserId = $conn->insert_id; //Gets the auto-generated ID that was inserted

        session_regenerate_id(true);
        /*Give this user a brand‑new session ID and deletes the old session data at the same time.Why this is important:
            Prevents session fixation attacks: Without regeneration, an attacker could trick a user into using a known 
            session ID, then hijack it after login.
            Ensures clean state:When a user logs in or signs up, you don’t want leftover session data from before (like guest
            state or error flags).
            Professional practice:Most secure apps regenerate the session ID at key points: login, signup, logout, privilege 
            changes.Plz note that u only do this when you start a session in the pages mentioned above.
        */

        $_SESSION['user_id'] = $newUserId;
        $_SESSION['user_name'] = $fname;

        header("Location: index.php"); //After successfully signing up, users should be directed to index.php
        exit;
    }else{
        ?>
        <script>alert("Sign up failed. Please try again")</script>
        <?php
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="icon" href="" type="image/x-ico">
    <!--Note the order: favicon, reset stylesheet to remove the default browser styling, external libraries like the js swiper then the personal stylesheet
    If you put the js stylesheet after ur personal stylesheet, it might override ur personal styling. You want ur personal styling to have the final say-->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../JavaScript/Swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
    <div class="content">
        <img src="../images/little_plant.jpeg" alt="Little Plant">
        <form method="POST">
            <h1>Sign Up</h1>
            <div>
                <label for="fName">First Name: </label>
                <input type="text" id="fName" name="fName" autocomplete="off">
            </div>
            <div>
                <label for="lName">Last Name: </label>
                <input type="text" id="lName" name="lName" autocomplete="off">
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" autocomplete="off"><!--This prevents it from auto filling when u open the page, initially it was filling it with my php developer username and password-->
            </div>
            <div>
                <label for="pNumber">Phone number: </label>
                <input type="text" id="pNumber" name="pNumber" autocomplete="off">
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" autocomplete="new-password"><!--Sometimes the browser might ignore off so we use new-password into tricking it that a user has to enter a new password so it has to be empty-->
<!--I've noticed that just autocomplete="new-password" in password will clear both fields but autocomplete="off" in email doesn't reflect anything if u haven't also put autocomplete="new-password" in password but for consistency I'm keeping both. 
Also, autocomplete="off" in the <form> brackets is supposed to clear every field and ensure they are all empty but it isn't working. I've tried to also just put autocomplete="new-password" in form and it is also not working just do what I've done rn-->
            </div>
            <div class="nav">
                <button type="submit">Sign Up</button>
                <p>Have an account? <a href="http://localhost/MukabwaFarm/php/login.php">Log In</a></p>
            </div>
        </form>
    </div>
</body>
</html>