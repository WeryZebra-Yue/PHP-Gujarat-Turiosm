

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
    <div id="home" style="display : flex; flex-direction : column;">
        <p class="heading" style="margin: 20px;color : white;" >Virtual 360</p>
    <iframe width="100%" height="60%"  allowFullScreen="true" 
allow="accelerometer; magnetometer; gyroscope" 
style="display:block; margin:10px auto; border:0 none; 
max-width:880px;border-radius:8px;
 box-shadow: 0 1px 1px rgba(0,0,0,0.11),
 0 2px 2px rgba(0,0,0,0.11),0 4px 4px rgba(0,0,0,0.11),0 6px 8px 
 rgba(0,0,0,0.11),0 8px 16px rgba(0,0,0,0.11);" 
src="https://panoraven.com/embed/U0vKkC2MQb"></iframe>
    </div>
    

</html>