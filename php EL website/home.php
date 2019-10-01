<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
home pagina

<div id="wrapper">
    <div id="banner">
    </div>



    <nav id="navigation">
        <ul id="nav">
            <li><a href="home.php">home</a></li>
            <li><a href="#">Spa</a></li>
            <li><a href="product.php">Shop</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div id="content_area">
        <?php echo $content; ?>
    </div>

    <div id="sidebar">

    </div>

    <footer>
    <nav id="navigationFooter">
        <ul id="nav">
            <li><a href="home.php">home</a></li>
            <li><a href="#">Spa</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
    </nav>
    <p> All right reserverd </p>
    </footer>
</div>

</body>
</html>