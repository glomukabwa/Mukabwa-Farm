<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="" type="image/x-ico">
    <!--Note the order: favicon, reset stylesheet to remove the default browser styling, external libraries like the js swiper then the personal stylesheet
    If you put the js stylesheet after ur personal stylesheet, it might override ur personal styling. You want ur personal styling to have the final say-->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../JavaScript/Swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <div class="landingpage" id="top"><!--This id is for the "back to top" button-->
    <header>
        <div class="logo">
            <img src="../images/black image.jpeg" alt="">
            <p>MUKABWA FARM</p>
        </div>
        <div class="pages">
            <ul>
                <li><a href="http://localhost/Mukabwa%20Farm/php/index.php">HOME</a></li>
                <li><a href="http://localhost/Mukabwa%20Farm/php/aboutus.php">ABOUT US</a></li>
                <li><a href="http://localhost/Mukabwa%20Farm/php/products.php">PRODUCTS</a></li>
                <li><a>TESTIMONIALS</a></li>
                <li><a href="http://localhost/Mukabwa%20Farm/php/contacts.php">CONTACTS</a></li>
                <li><a href="http://localhost/Mukabwa%20Farm/php/login.php">LOG IN</a></li>
                <li><a href="http://localhost/Mukabwa%20Farm/php/signup.php">SIGN UP</a></li>
            </ul>
        </div>
    </header>
    <main>
    <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.-->
        <section class="home">
            <div>
                <h1>MUKABWA FARM</h1>
                <p>Dealers is dairy, poultry, beef, vegetables, pork and cereals.</p>
            </div>
        </section>
</div>   

        <section class="vision">
            <div class="upper">
                <div class="title">
                    <h1>Our</h1>
                    <h1>Vision</h1>
                </div>
                <div class="image">
                    <img src="../images/chicken_coop.jpg" alt="Chicken in a coop">
                </div>
            </div>
            <div class="lower">
                <div class="image">
                    <img src="../images/egss_in_grass.jpg" alt="Eggs">
                </div>
                <div class="text"> 
                    <p>To transform our village from dependency to <br>self-sufficiency by producing high-quality farm products that sustain livelihoods and empower the community.</p>
                </div>
            </div>
        </section>

        <section class="about-us">
            <div class="image">
                <img src="../images/maize_plantation.jpg" alt="">
            </div>
            <div class="text">
                <h1 class="title">About Us</h1><!--h1 is not an inline elememt so u don't need to put it in a div to specify block element properties-->
                <div class="content">
                    <p>Nestled in the fertile lands of Kakamega County, our farm was founded with a simple yet powerful vision — to transform our village from dependency to self-sufficiency through sustainable agriculture. What began as a small dream has grown into a thriving farm that produces fresh eggs, chicken, milk, bulls, pigs, maize, and kales — all nurtured with care and dedication.</p>
                    <p>Driven by the belief that our community is a sleeping giant, our founder took the first step to awaken its potential. Today, the farm not only delivers high-quality produce but also creates employment opportunities and inspires others to invest in the rich promise of our soil.</p>
                </div>
                <div class="anchortag">
                    <a href="http://localhost/Mukabwa%20Farm/php/aboutus.php">SEE MORE</a>
                </div>
            </div>
        </section>

        <section class="products">
            <h1>Our Products</h1>
            <div class="swiper productSwiper"><!--This div has to have 2 names, see why below-->
                <!--The above div is for specifying to js that this is the html element which will be an object of the swiper class from the Swiper.js library. It includes all slides, navigation buttons and the pagination-->
                <!--Above we need to write swiper before the name we want to give it eg productSwiper cz Swiper library in js requires this. It has its own css that targets a class called swiper so if we don't do this, we won't see the swiping effect-->
                <!--Also, it helps us have as many swipers as we want in the same file eg (swiper testimonialsSwiper), (swiper moreinfoSwiper) etc-->
                <div class="swiper-wrapper"><!--This wrapper contains all the pages(slides) that will be shown. Plz note that it doesn't include the navigation buttons(left or right arrow) and the pagination(the dots at the bottom)-->
                    <div class="swiper-slide"><!--This div tells the swiper that the div inside me is a single page/slide. Note that every content is wrapped with this specific class. Chat said that u can't put all the swiper-content in one div with this name cz there is a specific structure that needs to be followed-->
                        <!--If you put all the swiper-content in one single div called swiper-slide, you are gonna have one single slide that displays all the slides u want in a squeezed manner cz swiper class in js will register that the swiper created has only one page-->
                        <!--So plz follow the structure: swiper name, wrapper, slide, content-->
                        <div class="swiper-content">
                            <div class="image">
                                <img src="../images/chicken.jpg" alt="Chicken">
                            </div>
                            <div class="about">
                                <h2>Chicken</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <a href="http://localhost/Mukabwa's%20Farm/php/products.php#chicken">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <div class="image">
                                <img src="../images/bull.jpeg" alt="Bull">
                            </div>
                            <div class="about">
                                <h2>Bulls</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <a href="http://localhost/Mukabwa's%20Farm/php/products.php#bull">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <div class="image">
                                <img src="../images/dairy.jpg" alt="Dairy">
                            </div>
                            <div class="about">
                                <h2>Dairy</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <a href="http://localhost/Mukabwa's%20Farm/php/products.php#dairy">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <div class="image">
                                <img src="../images/eggs.jpg" alt="Eggs">
                            </div>
                            <div class="about">
                                <h2>Eggs</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <a href="http://localhost/Mukabwa's%20Farm/php/products.php#eggs">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <div class="image">
                                <img src="../images/Pigs.jpeg" alt="Pigs">
                            </div>
                            <div class="about">
                                <h2>Pigs</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <a href="http://localhost/Mukabwa's%20Farm/php/products.php#pigs">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <div class="image">
                                <img src="../images/maize_harvested.jpg" alt="Maize">
                            </div>
                            <div class="about">
                                <h2>Maize</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <a href="http://localhost/Mukabwa's%20Farm/php/products.php#maize">READ MORE</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-content">
                            <div class="image">
                                <img src="../images/Kales.jpg" alt="Kales">
                            </div>
                            <div class="about">
                                <h2>Kales</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <a href="http://localhost/Mukabwa's%20Farm/php/products.php#kales">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Pagination dots -->
                <div class="swiper-pagination"></div>
            </div>

        </section>

        <!--<section class="testimonials">
            <h1>Testimonials</h1>
            <div class="content">
                <div>
                    <img src="../images/profile_icon.png" alt="profile icon">
                    <h2>Name</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                </div>
                <div>
                    <img src="../images/profile_icon.png" alt="profile icon">
                    <h2>Name</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                </div>
                <div>
                    <img src="../images/profile_icon.png" alt="profile icon">
                    <h2>Name</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                </div>
            </div>
        </section>-->

        <section class="beforefooter">
            <ul>
                <li class="logo">
                    <img src="../images/black image.jpeg" alt="">
                    <h1>MUKABWA'S FARM</h1>
                </li>
                <li class="pages">
                    <h1>Company</h1>
                    <div><a href="http://localhost/Mukabwa's%20Farm/php/aboutus.php">About Us</a></div>
                    <div><a href="http://localhost/Mukabwa's%20Farm/php/products.php">Products</a></div>
                    <div><a href="#">Testimonials</a></div>
                    <div><a href="http://localhost/Mukabwa's%20Farm/php/login.php">Log In</a></div>
                    <div><a href="http://localhost/Mukabwa's%20Farm/php/signup.php">Sign Up</a></div>
                </li>
                <li>
                    <div class="content">
                        <h1>Get In Touch</h1>
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
                            <div class="contacts">
                                <img src="../images/form_icon_no_fill.png" alt="form icon">
                                <div>
                                    <h2>Form</h2>
                                    <br>
                                    <a href="http://localhost/Mukabwa's%20Farm/php/contacts.php">Open form</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="backhome"><a href="#top">BACK TO TOP</a></div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Mukabwa's farm - All rights reserved</p>
    </footer>
    <script src="../JavaScript/Swiper/swiper-bundle.min.js"></script>
    <script src="../JavaScript/swiper.js"></script>
    <!--The Swiper library must be loaded before your custom JS — otherwise new Swiper(...) will give an error because Swiper won’t be defined yet.-->
</body>
</html>