<?php
include_once('./functions/functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScubaWorld</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="./images/file (12).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/af867aa7fa.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    navigation();
    ?>
    <section id="bg-banner">
        <div class="container-text">
            <h1>Welcome to ScubaWorld</h1>
            <p>Discover the world of submarines and scuba diving</p>

        </div>
    </section>
    <section>
        <div class="title-index">
            <h1>The Way the World Learns to Dive</h1>
            <p>Scuba World is the most recognized dive training organization
                worldwide with over 30 million divers and counting. ScubaWorld Dive Instructors undergo rigorous
                training to
                ensure your scuba certification class is fun and safe.</p>
        </div>
    </section>
    <div class="main-content-boxes">
        <div class="boxes">

            <a href="./pages/history.php"><img src="./images/box1.jpg" alt="" class="img-all"></a>
            <div class="box-text">
                <h1>Our History</h1>
            </div>
            <div class="text-below">
                <p>Learn more about us and our achievements </p>
            </div>
            <div class="btntext">
                <a href="./pages/history.php">Learn more</a>
            </div>
        </div>
        <div class="boxes">

            <a href="./pages/gallery.php"><img src="./images/box2.jpg" alt="" class="img-all"></a>
            <div class="box-text">
                <h1>Our Gallery</h1>
            </div>
            <div class="text-below">
                <p>Discover all ScubaWorld adventures</p>
            </div>
            <div class="btntext">
                <a href="./pages/gallery.php">Learn more</a>
            </div>
        </div>
        <div class="boxes">

            <a href="./pages/contact.php"><img src="./images/box4.jpg" alt="" class="img-all"></a>
            <div class="box-text">
                <h1>Contact Us</h1>
            </div>
            <div class="text-below">
                <p>Become a diver today with us at ScubaWorld</p>
            </div>
            <div class="btntext">
                <a href="./pages/contact.php">Learn more</a>
            </div>
        </div>

    </div>
    <br>
    <footer class="footer">
        <p>&copy; 2024 ScubaWolrd. All rights reserved.</p>
    </footer>
    <script src="./js/theme.js"></script>

</body>

</html>