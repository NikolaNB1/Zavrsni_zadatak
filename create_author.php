<?php include("db.php");

if (isset($_POST['submit'])) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $pol = $_POST['pol'];
    if (empty($ime) || empty($prezime) || empty($pol)) {
        echo "Neki podaci nedostaju";
    } else {
        $sql = "INSERT INTO author(ime, prezime, pol) 
        VALUES('$ime', '$prezime', '$pol')";
        $statement = $connection->prepare($sql);
        $statement->execute();

        header('Location: posts.php');
    }
}
?>

<!doctype html>
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
            <form action="create_author.php" method="POST" id="authorForma">
                <h1>Create new author</h1>
                <ul style="list-style-type: none;">
                    <li class="form-group">
                        <label for="ime" class='control-label'>Ime</label>
                        <input type="text" id="ime" name="ime" placeholder="Enter ime" class='form-control'>
                    </li>
                    <li class='form-group'>
                        <label for="prezime" class='control-label'>Prezime</label>
                        <input type="text" id="prezime" name="prezime" placeholder="Enter prezime" class='form-control'>
                    </li>
                    Pol: <br>
                    <li class="form-group">
                        <input type="radio" id="m" name="pol" value="M">
                        <label for="M">M</label>
                    </li>
                    <li class="form-group">
                        <input type="radio" id="z" name="pol" value="Ž">
                        <label for="Ž">Ž</label>
                    </li>
                    <li class="form-group">
                        <button type="submit" name="submit" class='btn btn--primary'>Submit</button>
                    </li>
                </ul>
            </form>
            <?php include("sidebar.php"); ?>
        </div>
    </main>
    <?php include("footer.php"); ?>
</body>