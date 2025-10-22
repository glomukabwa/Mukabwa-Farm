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
                <li><a href="http://localhost/Mukabwa's%20Farm/php/index.php">HOME</a></li>
                <li><a href="http://localhost/Mukabwa's%20Farm/php/aboutus.php">ABOUT US</a></li>
                <li><a href="http://localhost/Mukabwa's%20Farm/php/products.php">PRODUCTS</a></li>
                <li><a>TESTIMONIALS</a></li>
                <li><a href="http://localhost/Mukabwa's%20Farm/php/contacts.php">CONTACTS</a></li>
                <li><a href="http://localhost/Mukabwa's%20Farm/php/login.php">LOG IN</a></li>
                <li><a href="http://localhost/Mukabwa's%20Farm/php/signup.php">SIGN UP</a></li>
            </ul>
        </div>
    </header>
    <main>
        <form action="" method="">
            <h1>FORM</h1>
            <div>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname" autocomplete="off">
            </div>
            <div>
                <label for="sname">Last name:</label>
                <input type="text" id="sname" name="sname" autocomplete="off">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" autocomplete="off">
            </div>
            <div>
                <label for="pnumber">Phone Number:
                    <br><p><span>*</span> Optional <span>*</span></p>
                </label>
                <input type="text" id="pnumber" name="pnumber" autocomplete="off">
            </div>
            <div class="comment">
                <label for="comment">Comments:</label>
                <p><span>*</span> Please fill in any inquiries or requests you may have <span>*</span></p>
                <textarea name="comment" id="comment"></textarea>
            </div>
            <button>SUBMIT</button>
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
                            <p>Kakamega</p>
                        </div>
                    </div>
                    <div class="contacts">
                        <img src="../images/email_icon_no_fill.png" alt="home icon">
                        <div>
                            <h2>Email</h2>
                            <p>mukabwasfarm@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Mukabwa's farm - All rights reserved</p>
    </footer>
</body>
</html>