<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./all3.css">

</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php
include("php/config.php");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type']; // Get the user type

    $verify_query =  mysqli_query($con,"SELECT Email from users where Email = '$email'");

    if(mysqli_num_rows($verify_query) != 0){
        echo"<div class = 'message'>
                <p>This email is used, Try another One Please!</p>
             </div> </br>";
        echo "<a href='javascript:self.history.back()'><botton class = 'btn'>Go Back</botton></a>";
    }
    else{
        mysqli_query($con,"INSERT INTO users(Username,Email,Password,user_type) values('$username','$email','$password',' $user_type')") or die("error occured");

        echo"<div class = 'message'>
                <p>Registration Successfull!</p>
             </div> </br>";
        echo "<a href='login.php'><botton class = 'btn'>Login Now</botton></a>";
        // change index.php.login.php
    }
}else {

?>

            <header>Sign Up</header>
            <form action=""method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field input">
                    <label for="user_type">I am a:</label>
                    <select name="user_type" id="user_type" required>
                        <option value="employee">Employee</option>
                        <option value="employer">Employer</option>
                    </select>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Sign Up" required>
                </div>
                
                <div class="links">
                    Already have an acount? <a href="login.php">Login Now</a>
                    <!-- change in index to login -->
                </div>
            </form>
        </div>
        <?php    } ?>
    </div>
</body>
</html>