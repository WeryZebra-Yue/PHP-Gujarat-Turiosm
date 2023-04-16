<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gujarat Tourism</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login-signup.css" />
</head>

<body>
    <div class="loginback">
        <div class="loginbox">
            <div class="logintext">Sign In</div>
            <form method="post">
                <input class="textbox" type="text" name="email" placeholder="Email" />
                <input class="textbox" type="password" name="password" placeholder="Password" />
                <input id="loginbtn" class="btn" type="submit" name="submit" value="Log in" />

             

            </form>
            
          
            <div class="forgotpass">   
                <?php
                session_start();
                if(isset($_SESSION['email'])){
                    header("Location: home.php");
                }
                    

                if ($_POST) {    
                    
                    $servername = "localhost";
                    $username = "root";
                    $server_password = "root";
                    $dbname = "tour";
                    if(isset($_POST['submit'])){
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                       
        
                   
                        
        
                        $conn = new mysqli($servername, $username, $server_password);
                        mysqli_select_db($conn, $dbname);
                       
                        $check = "SELECT * FROM tourist_1 WHERE email = '$email'";
                        $result = mysqli_query($conn, $check);
                        $num = mysqli_num_rows($result);
                        // try to login
                        if ($num == 1) {
                            $row = mysqli_fetch_assoc($result);
                            if ($row['password'] == $password) {
                                $_SESSION['email'] = $email;
                                header("Location: home.php");
                            } else {
                                echo "Incorrect password";
                            }
                        } else {
                            echo "Incorrect email";
                        }

                        $conn->close();
                    }

                   
                }
                ?></div>
            
        </div>
        <div class="loginbox2">
            <p class="linktext">Don't have an account? <a class="link" href="signup.php">Sign up</a></p>
        </div>
    </div>
    </div>

</body>

</html>
