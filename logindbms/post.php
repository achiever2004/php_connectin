<?php
session_start();
include("php/config.php");

if (isset($_POST['submit'])) {
    $post_title = mysqli_real_escape_string($con, $_POST['post_title']);
    $post_dur = mysqli_real_escape_string($con, $_POST['post_dur']);
    $post_price = mysqli_real_escape_string($con, $_POST['post_price']);
    $post_count = mysqli_real_escape_string($con, $_POST['post_count']);

    $query = "INSERT INTO posts (post_title, post_dur, post_price, post_count) VALUES ('$post_title', '$post_dur', '$post_price', '$post_count')";
    if (mysqli_query($con, $query)) {
        // Redirect back to the form page after successful submission
        header("Location: employer.php?success=true");
        exit();
    } else {
        echo "<div class='message'>Error: Could not add post</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="./all3.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Add Post</header>
            <?php
            if (isset($_GET['success']) && $_GET['success'] == 'true') {
                echo "<div class='message'>Post added successfully</div>";
            }
            ?>
            <form action="post.php" method="post">
                <div class="field input">
                    <label for="post_title">Post Title</label>
                    <input type="text" name="post_title" id="post_title" required>
                </div>
                <div class="field input">
                    <label for="post_dur">Post Duration (hours)</label>
                    <input type="number" step="0.1" name="post_dur" id="post_dur" required>
                </div>
                <div class="field input">
                    <label for="post_price">Post Price (Rs.)</label>
                    <input type="number" step="0.01" name="post_price" id="post_price" required>
                </div>
                <div class="field input">
                    <label for="post_count">Post Count</label>
                    <input type="number" name="post_count" id="post_count" required>
                </div>
                <div class="field submit">
                    <input type="submit" class="btn" name="submit" value="Add Post">
                </div>
            </form>
        </div>
    </div>
</body>

</html>