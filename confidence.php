<?php
require ("includes/connect.php");

$query = 'SELECT content FROM resources WHERE id = 3';
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
    <title>Confidence</title>
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
                <h1>Confidence</h1>
                <p><?php echo $content['content'];?></p>
            </div>
            <div class="paragraph2">
                <h2>Example of Good Practice</h2>
                <h4>
                    <li><a href="https://www.myworldofwork.co.uk/my-career-options/how-build-confidence">How to build confidence, Why confidence is important?</a></li>
                </h4>
                <h4>
                <li><a href="http://www.aggs.trafford.sch.uk/wp-content/uploads/2015/12/Your-Daughters-Future.pdf">Your daughter's future : Research by Warwick University</a></li>
            </h4>
            </div>
            <div class="paragraph3">
                <h2>Academic Studies on Confidence</h2>
            </div>
        </main>
    </div>
</body>

</html>
