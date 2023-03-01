<?php include("db.php");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author_id = $_POST['author_id'];
    if (empty($title) || empty($author_id) || empty($body)) {
        echo "Neki podaci nedostaju";
    } else {
        $date_time = date('Y-m-d H:m:s');
        $sql = "INSERT INTO posts(title, body, created_at, author_id)
        VALUES('$title', '$body', '$date_time', '$author_id')";
        $statement = $connection->prepare($sql);
        $statement->execute();

        header('Location: index.php');
    }
}
$sql2 = "SELECT * FROM author";
$statement = $connection->prepare($sql2);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$authors = $statement->fetchAll();
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
                <ul style="list-style-type: none;">
                    <li class="form-group">
                        <label for="title" class='control-label'>Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter title" class='form-control'>
                    </li>
                    Author:
                    <select name="author_id">
                        <?php foreach ($authors as $author) { ?>
                            <option value="<?php echo $author['id']; ?>"><?php echo $author['ime'] . ' ' . $author['prezime']; ?></option>
                        <?php } ?>
                    </select> <br><br>
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