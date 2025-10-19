<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="icon" href="" type="image/x-ico">
    <!--Note the order: favicon, reset stylesheet to remove the default browser styling, external libraries like the js swiper then the personal stylesheet
    If you put the js stylesheet after ur personal stylesheet, it might override ur personal styling. You want ur personal styling to have the final say-->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../JavaScript/Swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="content">
        <img src="../images/tiny_growing_plant.jpg" alt="Tiny Plant">
        <form action="" method="">
            <h1>Log In</h1>
            <div>
                <label for="email">Enter email: </label>
                <input type="email" id="email" name="email" autocomplete="off"><!--This prevents it from auto filling when u open the page, initially it was filling it with my php developer username and password-->
            </div>
            <div>
                <label for="password">Enter password: </label>
                <input type="password" id="password" name="password" autocomplete="new-password">
            </div>
            <div class="nav">
                <button type="submit">Log In</button>
                <p>Don't have an account? <a href="http://localhost/Mukabwa's%20Farm/php/signup.php">Sign Up</a></p>
            </div>
        </form>
    </div>
</body>
</html>