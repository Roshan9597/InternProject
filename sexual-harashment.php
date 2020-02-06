<?php
require ("includes/connect.php");

$query = 'SELECT content FROM resources WHERE id = 1';
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
    <title>Sexual Harashment</title>
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
                    <h1>Sexual Harassment</h1>
                    <p><?php echo $content['content'];?></p>
                </div>
                    
                    <div class="paragraph2">
                    <h2>Good Practices</h2>
                    <h4>
                        <li><a href="https://www.acas.org.uk/index.aspx?articleid=6078">The Advisory, Conciliation and Arbitration Service (ACAS)</a></li>
                    </h4>
                    <h4>
                        <li><a href="https://www.gov.uk/government/consultations/consultation-on-sexual-harassment-in-the-workplace">Consultation on Sexual Harassment in the Workplace</a></li>
                    </h4> 
                    </div> 
                    <div class="paragraph3">  
                    <h2>Academic Studies</h2>
                    <p>
                        <li>Yael Ram (2018)<em> Hostility or hospitality? A review on violence, bullying and sexual harassment in the tourism and hospitality industry,</em> Current Issues in Tourism, 21:7, 760-774, DOI: 10.1080/13683500.2015.1064364.</li>
                    </p>

                    <p>
                        <li>Morgan, N and Pritchard, A. (2018)<em> Gender Matters in Hospitality (invited paper for 'luminaries' special issue of International Journal of Hospitality Management).</em></li>
                    </p>
                    </div>
               
                
            </main>
    </div>
        
</body>


</html>
