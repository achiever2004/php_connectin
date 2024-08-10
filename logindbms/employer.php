<?php
    session_start();
    include("php/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Homepage</title>
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
    <div class="nav">
        <div class="logo">
            <p><a href="./employer.php">CONNECT-IN</a></p>
        </div>
        <div class="right-links d-flex flex-row ">
            <div>
                <a href="post.php"><button class="btn">Posts</button></a>
            </div>

            <div>
                <a href="logout.php"><button class="btn">Log Out</button></a>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="card-deck posts_box">
            <?php
                // Fetch posts from the database where post_status is pending
                $query = "SELECT p.*, i.image_url 
                        FROM posts p 
                        LEFT JOIN image i ON p.post_title = i.post_title 
                        WHERE p.post_status = 'pending'";
                $result = mysqli_query($con, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $post_id = $row['id'];
                        $post_title = $row['post_title'];
                        $post_dur = $row['post_dur'];
                        $post_price = $row['post_price'];
                        $post_count = $row['post_count'];
                        $post_timestamp = $row['post_timestamp'];
                        
                        $image_src = $row['image_url'] ? $row['image_url'] : "https://res.cloudinary.com/dmdiia2yv/image/upload/v1700379599/video_editor_hhbnep.jpg"; // Placeholder image
            ?>
                <div class="card col-sm-5">
                    <h4>Pending Posts</h4>
                    <img src="<?php echo $image_src; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $post_title; ?>
                        </h5>
                        <div class="d-flex flex-row">
                            <h4>
                                <?php echo $post_dur; ?> hr
                            </h4>
                            <div class="circle_post">
                                <?php echo $post_count; ?>
                            </div>
                        </div>
                        <h4>Rs.
                            <?php echo $post_price; ?> /-
                        </h4>
                        <p class="card-text"><small class="text-muted">Last updated
                                <?php echo $post_timestamp; ?>
                            </small></p>
                    </div>
                    
                </div>
                <?php
                    }
                } else {
                    echo "<div><p>No posts available</p></div>";
                }
            ?>
            </div>
        </div>
    </main>
</body>

</html>