<?php
session_start();

include("php/config.php");

if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['post_id'])) {
    $post_id = mysqli_real_escape_string($con, $_POST['post_id']);
    $user_id = $_SESSION['id'];

    // Update the post status to "ongoing" or add it to the ongoing posts table
    $query1 = "INSERT INTO ongoing_posts (post_id, user_id) VALUES ('$post_id', '$user_id')";
    $query2 = "UPDATE posts SET post_status='taken' WHERE Id=$post_id";
    $result = mysqli_query($con, $query1);
    $result = mysqli_query($con, $query2);

    if ($result) {
        // Optionally delete the post from the posts table or mark it as taken
        $query = "DELETE FROM posts WHERE post_id = '$post_id'";
        mysqli_query($con, $query);
        echo "Post taken successfully";
    } else {
        echo "Error taking post";
    }
} else {
    echo "No post ID provided";
}
?>