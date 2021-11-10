<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Jeux de dés</title>
</head>
<body>
    <h1>Jeux de dés</h1>
    <div>
    <form action="index.php" method="POST">
            <div>
                <label for="num1" class="label-form">
                number 1
                </label>
                <input type="number" name="num1" id ="num1"placeholder="Number of dice">

                <label for="Number of face">Number of face</label>
                <select name="face" id="face">
    <option value="NumberFace">--Number of face</option>
    <option value="6">6</option>
    <option value="8">8</option>
    <option value="10">10</option>
    <option value="12">12</option>
    <option value="20">20</option>
                ></select>

                <button type="submit">lance</button>
            </div>

<?php 
$num1 = $_POST['num1'];
$NomberFace = $_POST['NomberFace'];
$diceValue = rend(1, $NomberFace);


echo "Dice rolled": $number <br>;







?>
</body>
</html>