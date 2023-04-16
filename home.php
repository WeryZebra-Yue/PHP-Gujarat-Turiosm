<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <div class="navbar">
        <div class="navlogo"></div>
        <div class="navbuttons">
            <ul>
                <a href="home.php">Home</a>
            </ul>
            <ul>
                <a href="places.php">Places</a>
            </ul>
            <ul>
                <a href="virtual.php">Virtual Tour</a>
            </ul>
           
            <ul>
                <a href="https://www.youtube.com/@GujaratTourismVideos">Learn More</a>
            </ul>
            <?php 
                session_start();
                if(isset($_SESSION['email'])){
                    echo '<ul>
                    <a href="profile.php">Profile</a>
                </ul>';
                }
                else{
                    echo '<ul>
                    <a href="login.php">Login</a>
                </ul>';
                }
            ?>
        </div>
    </div>
    <div id="home">
        <span class="quote">"નમસ્કાર, ગુજરાતમાં આપનું સ્વાગત છે"

        <?php 
            $counter = 0;
            if(isset($_COOKIE['counter'])){

                $counter = $_COOKIE['counter'];
                $counter++;
                $_COOKIE['counter'] = $counter;
                setcookie('counter', $counter);

            }
            else{
                $_COOKIE['counter'] = 1;
                setcookie('counter', 1);
            }
            echo "<br/>મુલાકાતીઓ: $counter";
        ?>
        </span>
    </div>
  

    <div id="contact">
        <div id="about">
            <p class="heading"  style="margin: 20px;font-size : 30px">About Us</p>
            <p class="about" style="margin: 20px;margin-top: 0px"><p>Welcome to the <strong>Tourism Corporation of Gujarat Ltd (TCGL)</strong>, a trusted and reliable travel partner for tourists visiting the beautiful state of Gujarat. Established in 1978, TCGL has been providing comprehensive travel assistance and services to tourists for over four decades.</p>
<p>At TCGL, we strive to offer a wide range of services to meet the diverse needs of our customers. From <strong>accommodation</strong> to <strong>conducted tours</strong> and <strong>ground transport</strong>, we aim to make your travel experience comfortable, convenient and enjoyable. Our team of experienced and dedicated professionals work tirelessly to ensure that you have a hassle-free and memorable trip to Gujarat.</p>
<p>We understand that each traveller has unique preferences and requirements, and therefore, we offer a wide range of options to choose from. Whether you are looking for luxurious accommodation, budget-friendly options or adventure tours, we have something for everyone.</p>
<p>Our services are not just limited to booking accommodation and tours, but we also provide assistance with travel permits, foreign exchange and travel insurance. Our aim is to make your travel experience in Gujarat stress-free and seamless.</p>
<p>At TCGL, we are committed to promoting tourism in Gujarat and showcasing the state's rich cultural heritage and natural beauty. We take pride in our contribution towards making Gujarat a popular tourist destination.</p>
<p>We welcome you to explore the mesmerizing state of Gujarat with TCGL and allow us to be your travel partner.</p>
        </div>
            <div class="footer">
        <div class="menu">
            <span class="heading">Menu</span>
            <a href="#home">Home</a><a href="#places">Places</a><a href="#about">About Us</a><a href="#contact">Contact
                Us</a>
        </div>
        <div class="getintouch">
            <span class="heading"> Get in touch</span>
            <ul>Mobile: +91 9517538523</ul>
            <ul>Email: info@gujarattourism.com</ul>
            <ul>Office: Udyog Bhavan, Gandhinagar</ul>
        </div>
        </div>
      
    </div>

</html>