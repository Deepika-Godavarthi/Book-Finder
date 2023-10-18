<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

     <!----------font awesome links------------------->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

     <!-------------custom css file link-------------->
     <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'header.php'; ?>

<div class="heading">

    <h3>About Us</h3>
    <p><a href="home.php">Home</a> / About </p>
</div>


<section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>Why Choose Us?</h3>
                <p></p>
                <p>At Book Finder, we are passionate about books. Our commitment to literature drives us to carefully curate an exceptional collection of reads that cater to a wide range of tastes. We offer personalized book recommendations, ensuring that every reader finds their perfect match. With our dedication to quality and authenticity, we are your reliable source for an enriched reading experience.</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>

        </div>

</section>

<section class="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.jpg" alt="">
            <p>I've been an avid reader for years, and this platform has truly transformed my reading experience. The book recommendations are outstanding, and the service is top-notch. I couldn't be happier with my book finds!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Aditi</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.jpg" alt="">
            <p>The book recommendations are outstanding, I couldn't be happier with my book finds!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Meera</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.jpg" alt="">
            <p>I enjoy browsing through the well-organized sections. It's easy to find what I'm looking for, and I appreciate the clean and tidy layout.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Pierson</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.jpg" alt="">
            <p>Such an amazing collection of books! I've found everything I've ever wanted to read here. Great service and fantastic recommendations</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Lexi Rivera</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.jpg" alt="">
            <p>pleasantly surprised by the variety of genres available. It's a gem for book lovers like me. </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Brent</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"I've been a loyal customer for years, and this bookstore never disappoints. It's my go-to place for gifts and personal reading. Keep up the excellent work!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ben</h3>
        </div>

    </div>

</section>

<section class="authors">

    <h1 class="title">Great Authors</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/author-1.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
            <h3>APJ Abdul Kalam</h3>
        </div>

        <div class="box">
            <img src="images/author-2.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
            <h3>J. K. Rowling</h3>
        </div>

        <div class="box">
            <img src="images/author-3.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
            <h3>Arundhati Roy</h3>
        </div>

        <div class="box">
            <img src="images/author-4.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
            <h3>Kiran Desai</h3>
        </div>

        <div class="box">
            <img src="images/author-5.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
            <h3>Vikram Seth</h3>
        </div>

        <div class="box">
            <img src="images/author-6.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
            <h3>Chetan Bhagat</h3>
        </div>

    </div>

</section>

























<?php include 'footer.php'; ?>


<!-----------------------custom js link----------------------->
<script src="js/script.js"></script>








</body>
</html>