<?php
session_start();

include("php/config.php");

if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['post_id'])) {
    $post_id = mysqli_real_escape_string($con, $_POST['post_id']);

    // Delete the post from the ongoing posts table
    $query1 = "DELETE FROM ongoing_posts WHERE post_id = '$post_id'";
    $query2 = "DELETE FROM posts WHERE Id='$post_id'" ;
    $result = mysqli_query($con, $query1);
    $result = mysqli_query($con, $query2);

    if ($result) {
        echo "Post completed successfully";
    } else {
        echo "Error completing post";
    }
} else {
    echo "No post ID provided";
}