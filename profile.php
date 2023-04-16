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
    <?php 
     
        if(isset($_SESSION['email'])){
            // get the user name from the database
            $servername = "localhost";
            $username = "root";
            $password = "root";

            // Create connection
            $conn = new mysqli($servername, $username, $password);
            $conn->select_db("tour");
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM tourist_1 WHERE email = '$email'";
            // get number of rows
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $name = $fname . " " . $lname;
            $birthdate = $row['birthdate'];
            $email = $row['email'];


        }
        else{
            header("Location: login.php");
        }
                
    ?>
    <div id="home">
        <!-- <span class="quote">"નમસ્કાર, ગુજરાતમાં આપનું સ્વાગત છે" -->
        <div>
            
            <div class="profile">
                <div class="profilepic"></div>
                <div class="profileinfo">
                    <div class="name">Welcome, <?php echo $name; ?></div>
                    <div class="birthdate"> Birthddate : <?php echo $birthdate; ?></div>
                    <div class="email">Email :   <?php echo $email; ?></div>
                    <!-- sign out -->
                    <div class="signout" style="padding : 20px; padding-left: 0px">
                        <form action="signout.php" method="POST">
                            <button type="submit" name="signout">Sign Out</button>
                        </form>
                    
                </div>
            </div>
            
        </div>
      
      
      
    </div>

</html>