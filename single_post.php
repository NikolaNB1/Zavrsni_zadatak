<?php include("db.php");

$id = $_GET['id'];
$sql = "SELECT posts.*, author.ime, author.prezime, author.pol 
FROM posts JOIN author ON posts.author_id = author.id WHERE posts.id = $id";
$statement = $connection->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$post = $statement->fetch();

$sql2 = "SELECT comments.*, author.ime, author.prezime, author.pol FROM comments JOIN author ON comments.author_id = author.id WHERE post_id = $id";
$statement = $connection->prepare($sql2);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$comments = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Single post page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
    <?php include("header.php"); ?>
    <main role="main" class="container">

        <div class="row">

            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title"><a class="header" href="single_post.php?id=<?php echo $post['id'] ?>"><?php echo ($post['title']) ?></a></h2>
                    <p class="blog-post-meta"><?php echo ($post['created_at']) ?>. by
                        <span class="<?php echo ($post['pol'] == 'M') ? 'text-primary' : 'text-danger'; ?>">
                            <?php echo $post['ime'] . ' ' . $post['prezime']; ?>
                        </span>
                    </p>
                    <p><?php echo ($post['body']) ?></p>
                </div>
                <?php include("comments.php"); ?>
            </div>
            <?php include("sidebar.php"); ?>
        </div>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>