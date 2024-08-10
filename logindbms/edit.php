<?php

    session_start();

    include("php/config.php");
    if(!isset($_SESSION['valid'])){
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>
    <link rel="stylesheet" href="./all3.css">
</head>
<body>
    <div class="nav">
    <div class="logo">
                    <img src="./logo-aruk.png" width="50" height="auto" style="margin-top: 20px;" alt="Example Image">
                </div>

        <div class="right-links">
            <a href="login.php"><button class="btn">Log Out</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">

        <?php

            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $user_type = $_POST['user_type']; // Get the user type
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email' WHERE Id=$id") or die("error occurred in update query");
                if($edit_query){
                    echo"<div class = 'message'>
                            <p>Update Successfull!</p>
                         </div> </br>";
                    echo "<a href='home.php'><botton class = 'btn'>Go Home</botton></a>";
                    // change from landing.php to home.php
                }
            }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT * FROM users WHERE Id=$id");
                
                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_UserType = $result['user_type'];
                    // $res_Age = $result['Age'];
                    // is there any conflit to get id over here
                }
        ?>
            <header>Change Profile</header>
            <form action=""method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $res_Email; ?>" required>
                </div>
                <div class="field input">
                    <label for="user_type">I am a:</label>
                    <select name="user_type" id="user_type" required>
                        <option value="employee" <?php echo ($res_UserType == 'employee') ? 'selected' : ''; ?>>Employee</option>
                        <option value="employer" <?php echo ($res_UserType == 'employer') ? 'selected' : ''; ?>>Employer</option>
                    </select>
                </div>
                <!-- <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" required>
                </div> -->
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                <div class="links">
                    Already have an acount? <a href="login.php">Login Now</a>
                    <!-- change index.php to login.php -->
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>