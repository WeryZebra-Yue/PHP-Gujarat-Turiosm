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
    <link rel="stylesheet" href="login-signup2.css" />
</head>

<body>
    <div class="loginback">
        <div class="loginbox">
            <div class="logintext">Sign In</div>
            <form method="post" class="input-group" style="position: relative;">
                <!-- <input id="username" class="textbox" type="text" name="username" placeholder="Username" required="" autocomplete="off"/>
                <label for="username" class="input-label">Username</label>
                <input id="password" class="textbox" type="text" name="password" placeholder="Password" required="" autocomplete="off"/>
                <label for="password" class="input-label">Password</label>
                <input id="loginbtn" class="btn" type="submit" name="submit" value="Log in" /> -->

                <div class="input-group">
                    <input required="" type="text" name="username" autocomplete="off" class="input">
                    <label class="user-label">Username</label>
                </div>
                <div class="input-group">
                    <input required="" type="password" name="password" autocomplete="off" class="input">
                    <label class="user-label">Password</label>
                </div>
                <?php
                if ($_POST) {
                    $defaultusername = "admin";
                    $defaultpassword = "password";
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    if ($defaultusername == $username && $defaultpassword == $password) {
                        // header('Location: home.html');
                        echo "<script>";
                        echo "window.location.replace('home.html');";
                        echo "</script>";
                    } else {
                        echo "<span class='error'>Incorrect credentials</span>";
                    }
                }
                ?>

            </form>
            <div class="forgotpass">Forgot Password?</div>
        </div>
        <div class="loginbox2">
            <p class="linktext">Don't have an account? <a class="link" href="signup.php">Sign up</a></p>
        </div>
    </div>
    </div>

</body>

</html>