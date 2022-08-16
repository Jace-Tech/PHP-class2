<?php  


if(isset($_POST['calculate'])) {
    $firstNumber = floatval($_POST["first"]); // float
    $secondNumber = floatval($_POST["second"]); // float
    $operator = $_POST["operator"];

    $result = null;

    switch($operator) {
        case "add":
            $result = $firstNumber + $secondNumber;
            break;
        
        case "minus": 
            $result = $firstNumber - $secondNumber;
            break;
        
        case "multiply": 
            $result = $firstNumber * $secondNumber;
            break;
        
        case "divide": 
            $result = $firstNumber / $secondNumber;
            break;
        
        default:
        break;
    }

    // Redirect to the index page with the result
    header("Location: ./index.php?result=$result");
}