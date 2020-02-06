<?php
require ("includes/connect.php");

$query = 'SELECT content FROM resources WHERE id = 2';
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
    <title>Bullying</title>
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
            <h1>Bullying</h1>
            <p><?php echo $content['content'];?></p>
        </div>
           
           <div class="paragraph2">
            <h2>Example of Good Practice</h2>
            <h4>
                <li><a href="https://www.acas.org.uk/media/304/Advice-leaflet--Bullying-and-harassment-at-work-a-guide-for-managers-and-employers/pdf/Bullying-and-harassment-in-the-workplace-a-guide-for-managers-and-employers.pdf">The Advisory, Conciliation and Arbitration Service (ACAS) for Managers and Employers</a></li>
            </h4>
            <h4>
                <li><a href="https://hospitalityaction.org.uk">Support Services to help Hospitality people back on their feet</a></li>
            </h4>
            <h4>
                <li><a href="https://www.autoenrolment.co.uk/guides/workplace-bullying">Smart Pension: A Guide to Workplace Bullying</a></li>
            </h4>
            <h4>
                <li><a href="https://www.gov.uk/workplace-bullying-and-harassment">Workplace Bullying and Harassment</a></li>
            </h4>
        </div>
           <div class="paragraph3">
            <h2>Academic Studies on Bullying</h2>
        </div>
       </main>
    </div>
</body>

</html>
