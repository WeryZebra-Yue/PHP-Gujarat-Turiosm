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
                <a href="#places">Places</a>
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
    <div  id="places"style="width : 90%; border-radius : 20px 20px 0px 0px;" >
        <p class="heading" style="margin: 20px;font-size : 25px;">Places</p>
    </div>
    <div id="places" style="width : 90%; border-radius : 0px 0px 20px 20px" >

        <a href="https://www.youtube.com/watch?v=TNTnEbR_m8w" class="placebox">
            <div id="photo6" class="photo"></div><span>Statue of Unity</span>
        </a>
        <a href="https://www.youtube.com/watch?v=2SjWraA4Wro" class="placebox">
            <div id="photo3" class="photo"></div><span>Saputara</span>
        </a>
        <a href="https://www.youtube.com/watch?v=CtHaI7ONAiM" class="placebox">
            <div id="photo4" class="photo"></div><span>Modhera</span>
        </a>
        <a href="https://www.youtube.com/watch?v=w4ra7Iuc_3U" class="placebox">
            <div id="photo1" class="photo" href=""></div><span>Vadodara</span>
        </a>
        <a href="https://www.youtube.com/watch?v=MOXZ6TH11GY" class="placebox">
            <div id="photo5" class="photo"></div><span>Kutch</span>
        </a>
        <a href="https://www.youtube.com/watch?v=4dbkKjPuM_w" class="placebox">
            <div id="photo7" class="photo"></div><span>Dwarka</span>
        </a>
        <a href="https://www.youtube.com/watch?v=JI1I1U83vZc" class="placebox">
            <div id="photo2" class="photo"></div><span>Diu</span>
        </a>
        <a href="https://www.youtube.com/watch?v=mdomTf2qjKE" class="placebox">
            <div id="photo8" class="photo"></div><span>Champaner</span>
        </a>
        
    </div>

       
        </span>
    </div>
  

   

</html>