<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>test producten</title>
</head>
<body>
<h1> product php </h1>
<br / > 
<button class="button" style="vertical-align:middle"><a href="http://localhost/woordenboektest/index.php?product=Dr\.\_Hauschka">Dr. Hauschka</button>
<button class="button" style="vertical-align:middle"><a href="http://localhost/woordenboektest/index.php?product=YUN">YUN</button>
<button class="button" style="vertical-align:middle"><a href="http://localhost/woordenboektest/formulier.php">formulier</button>
<hr / >

<?php
    $servername ="localhost";
    $port ="3306";
    $username ="root";
    $password ="root";
    $database ="el_website";

    $product = '';
    if(isset($_GET['product'])){
        $product = $_GET['product'];
    }

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    //SQL uitvoeren 
    if($product){
        $stmt = $conn->prepare("SELECT * FROM `producten` WHERE `merk` = '" . $product . "'");

    }
    else {
        $stmt = $conn->prepare("SELECT * FROM producten");
    }


    $stmt->execute();
    //Restultaten ophalen van de sql
    $result=$stmt -> setFetchMode(PDO:: FETCH_ASSOC);
    $rows= $stmt ->fetchAll();
    //var_dump($rows);
    // TODO: Loop door de rijen via FOREACH 
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

<?php 
foreach ($rows as $row) { 
            ?>
            <div class="row">
            <h2>Productnaam: <?php echo $row['Naam']  ?></h2>
            <h2>Prijs: <?php echo $row['Prijs']; ?></h2>
                <p>Omschrijving: <?php echo $row['omschrijving']; ?></p>
                <p>Kenmerken: <?php echo $row['kenmerken']; ?></p>
                <hr / >
         </div> 
         <?php 
}
?>


</body>
</html>