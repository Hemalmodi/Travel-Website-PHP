<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">
    <!-- swriper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

</head>
<body>
    <!-- header section -->
<section class="header">
    <a href="index.php" class = "logo">travel.</a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section end -->


<!-- about section start -->
<div class="heading-about" style= "background: url(images/about-background-div.jpg) no-repeat">
    <h1> Book Now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your good name." name= "name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="text" placeholder="enter your email" name= "email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number." name= "number">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name= "address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="enter your where do you want to visit." name= "location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name= "guests">
            </div>
            <div class="inputBox">
                <span>arrival :</span>
                <input type="date" name= "arrival">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name= "leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>













<!-- footer section -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
        </div>
        <div class="box">
            <h3>extra Links</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask quesiton</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-789</a>
            <a href="#"><i class="fas fa-phone"></i> +123-456-789</a>
            <a href="#"><i class="fas fa-envelope"></i> lhemal@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> mumbai, india - 4400015</a>
        </div>
        
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

    <div class="credit">created by <span>mr. Hemal Modi</span> | all rights reserved </div>
</section>




<!-- swipper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- js file -->
    <script src="script/script.js"></script>
</body>
</html>