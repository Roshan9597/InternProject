<?php
require ("includes/connect.php");

$query = 'SELECT content FROM resources WHERE id = 4';
$result = mysqli_query($conn, $query);
$content = mysqli_fetch_assoc($result);
mysqli_free_result($result);

mysqli_close($conn);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel=stylesheet href="style.css">
    <title>Male Domination</title>
</head>
<body>
<div id="wrapper">
    <header>
        <div class="top-nav">
            <span>Gender Equality in Tourism</span>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="resources.php">Resources</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

        <main id="paragraph-wrapper">
           
            <div class="paragraph">
                <h1>Male Domination</h1>
                <p><?php echo $content['content'];?></p>
            </div>
            <div class="paragraph2">
                <h2>Example of Good Practice</h2>
            </div>
            <div class="paragraph3">
                <h2>Academic Studies on Male Domination</h2>
            </div>
        </main>
</div>
</body>

</html>
