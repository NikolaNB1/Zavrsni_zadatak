<?php include("db.php");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    if (empty($title) || empty($author) || empty($body)) {
        echo "Neki podaci nedostaju";
    } else {
        $date_time = date('Y-m-d H:m:s');
        $sql = "INSERT INTO posts(title, body, author, created_at)
        VALUES('$title', '$body', '$author', '$date_time')";
        $statement = $connection->prepare($sql);
        $statement->execute();

        header('Location: posts.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Create new post</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
    <?php include("header.php"); ?>
    <main role="main" class="container">

        <div class="row">
            <form action="create_post.php" method="POST" id="postsForma">
                <h1>Create new post</h1>
                <ul>
                    <li class="form-group">
                        <label for="title" class='control-label'>Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter title" class='form-control'>
                    </li>
                    <li class="form-group">
                        <label for="author" class='control-label'>Author</label>
                        <input type="text" id="author" name="author" placeholder="Enter author" class='form-control'>
                    </li>
                    <li class="form-group">
                        <label for="body" class='control-label'>Body</label>
                        <textarea rows="10" id="body" name="body" placeholder="Enter body" class='form-control'></textarea>
                    </li>
                    <li class="form-group">
                        <button type="submit" name="submit" class='btn'>Submit</button>
                    </li>
                </ul>
            </form>
            <?php include("sidebar.php"); ?>
        </div>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>