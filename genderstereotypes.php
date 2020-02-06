<?php
require ("includes/connect.php");

$query = 'SELECT content FROM resources WHERE id = 5';
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
    <title>Gender Stereotypes</title>
</head>

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

<body>
   <main id="paragraph-wrapper">
    <div class="paragraph">
        <h1>Gender Stereotypes</h1>
        <p><?php echo $content['content'];?></p>
       </div>
       <div class="paragraph2">
        <h2>Example of Good Practice</h2>
        <h4>
                        <li><a href="http://womeninhospitality.org/men-can-champion-gender-diversity/">Why men can champion gender diversity too</a></li>
                    </h4>
       </div>
       <div class="paragraph3">
        <h2>Academic Studies on Sexual Harassment</h2> 
        <p>
                        <li>Camille Kapoor, Nicole Solomon, (2011) <em>"Understanding and managing generational differences in the workplace",</em> Worldwide Hospitality and Tourism Theme, Vol. 3 Issue: 4, pp.308-318, https://doi.org/10.1108/17554211111162435</li>
                    </p>
    </div>
    </main>
</body>
    </div>
</html>