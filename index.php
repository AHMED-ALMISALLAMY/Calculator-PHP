<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form>
        <input type="text" name="number1" placeholder="Number 1">
        <input type="text" name="number2" placeholder="Number 2">
        <select name="operators">
            <option value="None">None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select><br>
        <button name="submit" value="submit">Calculate</button>
    </form>
    <p>The Answer Is: </p>

</body>
</html>

<?php
    if (isset($_GET['submit'])) {
        $result1 = $_GET['number1'];
        $result2 = $_GET['number2'];
        $operator = $_GET['operators'];

        switch ($operator) {
            case "None":
                echo "You Need To Select A Operator!";
                break;
            case "Add":
                echo '<h3>' . $result1 + $result2 . '</h3>';
                break;
            case "Subtract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                echo $result1 * $result2;
                break;
            case "Divide":
                echo $result1 / $result2;
                break;
        }
    }
?>