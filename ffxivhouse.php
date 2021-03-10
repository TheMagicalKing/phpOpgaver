<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Denne side er baseret på hvor meget Gil du mangler før du har råd til et hus I online MMORPG spillet Final Fantasy 14</h1>
    <form action="ffxivhouse.php" method="post">
    <label for="plotSize">Choose a plot size:</label>
    <select name="plotSizeSelect" id="plotSizeSelectID">
    <option value="1">small</option>
    <option value="2">Medium</option>
    <option value="3">Large</option>
    </select>
    <label for="plotClass">Choose a plot class:</label>
    <select name="plotClassSelect" id="plotClassSelectID">
    <option value="1">First-class plot</option>
    <option value="2">Second-class plot</option>
    <option value="3">Third-class plot</option>
    <option value="4">Fourth-class plot</option>
    <option value="5">Fifth-class plot</option>
    </select>
    <label for="gilAmount">Amount of gil you have:</label>
    <input type="number" name="gilGot">
    <input type="submit" name="submit" value="confirm">
    </form>
    
</body>
</html>

<?php

$price = 0;

if(isset($_POST['submit'])){
    
    if(!empty($_POST['plotSizeSelect']) && !empty($_POST['plotClassSelect'])) {
        $plotSize = $_POST['plotSizeSelect'];
        $plotClass = $_POST['plotClassSelect'];

        switch($plotSize){
            case 1:
                switch($plotClass){
                    case 1:
                        echo "Price for a small First-Class plot is: 3.750.000 Gil";
                        $price = 3750000;
                        break;
                    case 2:
                        echo "Price for a small Second-Class plot is: 3.562.500 Gil";
                        $price = 3562500;
                        break;
                    case 3:
                        echo "Price for a small Third-Class plot is: 3.375.000 Gil";
                        $price = 3375000;
                        break;
                    case 4:
                        echo "Price for a small Fourth-Class plot is: 3.187.500 Gil";
                        $price = 3187500;
                        break;
                    case 5:
                        echo "Price for a small Fifth-Class plot is: 3.000.000 Gil";
                        $price = 3000000;
                        break;
                }
            break;
            case 2:
                switch($plotClass){
                    case 1:
                        echo "Price for a medium First-Class plot is: 20.000.000 Gil";
                        $price = 20000000;
                        break;
                    case 2:
                        echo "Price for a medium Second-Class plot is: 19.000.000 Gil";
                        $price = 19000000;
                        break;
                    case 3:
                        echo "Price for a medium Third-Class plot is: 18.000.000 Gil";
                        $price = 18000000;
                        break;
                    case 4:
                        echo "Price for a medium Fourth-Class plot is: 17.000.000 Gil";
                        $price = 17000000;
                        break;
                    case 5:
                        echo "Price for a medium Fifth-Class plot is: 16.000.000 Gil";
                        $price = 16000000;
                        break;
                }
            break;
            case 3:
                switch($plotClass){
                    case 1:
                        echo "Price for a large First-Class plot is: 50.000.000 Gil";
                        $price = 50000000;
                        break;
                    case 2:
                        echo "Price for a large Second-Class plot is: 47.500.000 Gil";
                        $price = 47500000;
                        break;
                    case 3:
                        echo "Price for a large Third-Class plot is: 45.000.000 Gil";
                        $price = 45000000;
                        break;
                    case 4:
                        echo "Price for a large Fourth-Class plot is: 42.500.000 Gil";
                        $price = 42500000;
                        break;
                    case 5:
                        echo "Price for a large Fifth-Class plot is: 40.000.000 Gil";
                        $price = 40000000;
                        break;
                }
            break;
        }
        
    } else {
        echo 'Please select the value.';
    }
    }
echo "<br> I need ", $price - $_POST['gilGot'], " gil, for the house I want";
?>