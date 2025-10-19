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
        <form action="" method="">
            <h1>Sign Up</h1>
            <div>
                <label for="email">Enter email: </label>
                <input type="email" id="email" name="email" autocomplete="off"><!--This prevents it from auto filling when u open the page, initially it was filling it with my php developer username and password-->
            </div>
            <div>
                <label for="password">Enter password: </label>
                <input type="password" id="password" name="password" autocomplete="new-password"><!--Sometimes the browser might ignore off so we use new-password into tricking it that a user has to enter a new password so it has to be empty-->
<!--I've noticed that just autocomplete="new-password" will clear both fields but autocomplete="off" doesn't reflect anything if u haven't put autocomplete="new-password" but for consistency I'm keeping both. 
Also, autocomplete="off" in the <form> brackets is supposed to clear every field and ensure they are all empty but it isn't working. I've tried to also just put autocomplete="new-password" in form and it is also not working just do what I've done rn-->
            </div>
            <div class="nav">
                <button type="submit">Sign Up</button>
                <p>Have an account? <a href="http://localhost/Mukabwa's%20Farm/php/login.php">Log In</a></p>
            </div>
        </form>
    </div>
</body>
</html>