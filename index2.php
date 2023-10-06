<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangting Guest House</title>

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>

    select.inputBox,
    input[type="date"].inputBox,
    input[type="number"].inputBox {
        border: 1px solid #ccc;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        margin-top: 5px;
        font-size: 16px;
    }
</style>
</head>
<body>


    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>G</span>uest <span>H</span>ouses</a>
        <nav class="navbar">
             <a href="#home">home</a>
             <a href="#packages">packages</a>
             <a href="#services">services</a>
             <a href="#gallery">gallery</a>
             <a href="#review">review</a>
             <a href="#contact">contact</a>
             <a href="#book">book</a>
         
             <?php
        session_start();

        if (isset($_SESSION['email'])) {
            echo '<a href="#">Welcome, ' . $_SESSION['email'] . '</a>';
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<i class="fas fa-search" id="search-btn"></i>';
            echo '<i class="fas fa-user" id="login-btn"></i>';
        }
        
        ?>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>
    




    <div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <h3>login</h3>
    <form action="login.php" method="POST">
        <input type="email" class="box" name="email" placeholder="Enter your Email">
        <input type="password" class="box" name="password" placeholder="Enter your Password">
        <input type="submit" value="login now" class="btn">
        <p>forgot password? <a href="#">click here</a></p>
        <p>don't have an account? <a href="register.php">register now</a></p>
    </form>
    </div>




<section class="home" id="home">
    <div class="content">
        <h3>welcome to A global icon of luxury</h3>
        <p>dicover new places with us, luxury awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="tt2.MOV"></span>
        <span class="vid-btn" data-src="tt3.MOV"></span>
       
    </div>

    <div class="video-container">
        <video src="tt2.MOV" id="video-slider" loop autoplay muted></video>
    </div>

</section>


<section class="packages" id="packages">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>

    </h1>

    <div class="box-container">
        <div class="box">
            <img decoding="async" src="midnt.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Midnight Camper </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="ttguesthouse.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Tangting Guest House & Resturant </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="cozy.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> The Cozy Eco Camp Nepal </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="whitehouse.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Himalayan White Hut Lodge </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="holiday.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Tangting Holiday Gurung Home </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img decoding="async" src="hilltoop.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Krapu Hilltop Tent </h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>
    </div>
</section>






<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
    </div>
</section>






<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>


<div class="box-container">
    <div class="box">
        <img decoding="async" src="gallery1.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="gallery2.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="gallery3.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="gallery4.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="gallery5.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img decoding="async" src="gallery6.jpg" alt="">
        <div class="content">
            <h3>amazing places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
   
</div>
</section>





<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="pp1.jpg" alt="">
                    <h3>Niraj Giri</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="pp2.jpg" alt="">
                    <h3>Sujal Godar</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="pp3.jpg" alt="">
                    <h3>Manish Karki</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img decoding="async" src="pp4.jpg" alt="">
                    <h3>Saugat Ghimire</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                </div>
        </div>
    </div>
</section>






<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="img">
            <img decoding="async" src="contact.png" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
</section>





<section class="brand-container">
    <div class="swiper mySwiper brand-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide"><img decoding="async" src="1.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="2.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="3.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="4.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="5.jpg" alt=""></div>
            <div class="swiper-slide"><img decoding="async" src="6.jpg" alt=""></div>
        </div>
    </div>
</section>



<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="img">
            <img decoding="async" src="book.png" alt="">
        </div>

            <form action="booking.php" method="POST">
        <input type="hidden" name="idRes" value="idRes">
        <div class="inputBox">
            <h3>Where to</h3>
            <select name="guesthouse" class="inputBox">
                <option  value="Tangting Guest House & Restaurant">Tangting Guest House & Restaurant</option>
                <option value="Midnight Camper">Midnight Camper</option>
                <option value="The Cozy Eco Camp Nepal">The Cozy Eco Camp Nepal</option>
                <option value="Himalayan White Hut Lodge">Himalayan White Hut Lodge</option>
                <option value="Tangting Holiday Gurung Home">Tangting Holiday Gurung Home</option>
                <option value="Krapu Hilltop Tent">Krapu Hilltop Tent</option>
            </select>
        </div>
        <div class="inputBox">
            <h3>How many</h3>
            <input type="number" name="guests" class="inputBox" placeholder="Number of guests" min="1" max="10">
        </div>
        <div class="inputBox">
            <h3>Arrival</h3>
            <input type="date" name="arrival" class="inputBox" min="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="inputBox">
            <h3>Departure</h3>
            <input type="date" name="deprature" class="inputBox" min="<?php echo date('Y-m-d'); ?>">
        </div>
        <input type="submit" class="btn" value="Book Now">
    </form>


    </div>
</section>




<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Totam natus asperiores voluptas aliquam vitae odio. Beatae doloribus facere nostrum magni.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">USA</a>
            <a href="#">india</a>
            <a href="#">japan</a>
            <a href="#">philippines</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">package</a>
            <a href="#">service</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">book</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">likedin</a>
        </div>
    </div>
    <h1 class="credit">Guest Houses <span>Tangting</span> | all rights reserved!! </h1>
</section> <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js" defer data-deferred="1"></script>  <script src="main.js" defer data-deferred="1"></script> </body>
</html>
