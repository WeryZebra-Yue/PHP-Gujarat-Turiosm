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
            <div class="logintext">Sign up</div>
            <form method="post">
                <input class="textbox" type="text" name="fname" placeholder="First Name" />
                <input class="textbox" type="text" name="lname" placeholder="Last Name" />
                <input class="textbox" type="text" onblur="(this.type='text')" onfocus="(this.type='date')" name="bdate" placeholder="Birthdate" />
                <input class="textbox" type="email" name="email" placeholder="Email" />
                <input class="textbox" type="password" name="password" placeholder="Password" />
                <input class="textbox" type="password" name="cpassword" placeholder="Confirm Password" />
                <select  class="textbox" name="question">
                    <option value="1"> 
                        What is your favourite color?
                    </option>
                    <option value="2"> 
                        What is your favourite food?
                    </option>
                    <option value="3"> 
                        What is your favourite movie?
                    </option>
                    <option value="4"> 
                        What is your favourite sport?
                    </option>


                    </select>
                <input class="textbox" type="text" name="answer" placeholder="Answer" />

                
                <input id="signup" class="btn" type="submit" name="submit" value="Sign up" />
            </form>
            <?php
            session_start();
            if(isset($_SESSION['email'])){
                header("Location: home.php");
            }
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "tour";
            if(isset($_POST['submit'])){
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $birthdate=$_POST["bdate"];
                $email = $_POST["email"];
                $cpassword=$_POST["cpassword"];
                $question=$_POST["question"];
                $answer=$_POST["answer"];

           
                

                $conn = new mysqli($servername, $username, $password);
                mysqli_select_db($conn, $dbname);
               
                $check = "SELECT * FROM tourist_1 WHERE email = '$email'";
                $result = mysqli_query($conn, $check);
                $num = mysqli_num_rows($result);
                if ($num == 1) {
                    echo "Email already exists";
                    exit();
                }


                if ($conn->connect_error) {
                    die("connection failed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO tourist_1(firstname, lastname, birthdate, email, password,  question , answer  ) VALUES('$fname', '$lname','$birthdate','$email','$cpassword', '$question', '$answer')";

                if ($conn->query($sql) === TRUE) {
                    $last_id = $conn->insert_id;
                    // set session variables
                    $_SESSION["email"] = $email;
                    // redirect to profile page
                    header("Location: profile.php");
                } else {
                    echo "Error: " . $sql . "<br> " . $conn->error;
                }
                $conn->close();
            }
            ?>

        </div>
        <div class="loginbox2">
            <p class="linktext">have an account? <a class="link" href="login.php">Log in</a></p>
        </div>
    </div>
    </div>

</body>

</html>