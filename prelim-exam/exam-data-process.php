<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input-value'];
        $message = $errorRange = $errorInput = '';

        if (is_numeric($input) && intval($input) >= 0 && intval($input) <= 99000) {
            $message = "Converted from your input of: " . intval($input) . '.';
        }
        else if(is_numeric($input) && (intval($input) < 0 || intval($input) > 99000)){
            $errorRange = "Please enter a valid number between 0 and 99,000.";
        } 
        else {
            $errorInput = "Invalid input is detected.";
        }
    }

    function numToWordsRec($number) {
        $words = array(
            0 => 'zero', 1 => 'one', 2 => 'two',
            3 => 'three', 4 => 'four', 5 => 'five',
            6 => 'six', 7 => 'seven', 8 => 'eight',
            9 => 'nine', 10 => 'ten', 11 => 'eleven',
            12 => 'twelve', 13 => 'thirteen', 
            14 => 'fourteen', 15 => 'fifteen',
            16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
            19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
            40 => 'forty', 50 => 'fifty', 60 => 'sixty',
            70 => 'seventy', 80 => 'eighty',
            90 => 'ninety'
        );
    
        if ($number < 20) {
            return $words[$number];
        }
    
        if ($number < 100) {
            return $words[10 * floor($number / 10)] .
                   ' ' . $words[$number % 10];
        }
    
        if ($number < 1000) {
            if(numToWordsRec($number % 100) == 'zero'){
                return $words[floor($number / 100)] . ' hundred';
            }
            else{
                return $words[floor($number / 100)] . ' hundred ' 
                   . numToWordsRec($number % 100);
            }
        }
    
        if ($number < 1000000) {
            if(numToWordsRec($number % 1000) == 'zero'){
                return numToWordsRec(floor($number / 1000)) . ' thousand';
            }
            else{
                return numToWordsRec(floor($number / 1000)) .
                   ' thousand ' . numToWordsRec($number % 1000);
            }
        }
    
        return numToWordsRec(floor($number / 1000000)) .
               ' million ' . numToWordsRec($number % 1000000);
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: arial, sans-serif;
        }
    </style>
</head>
<body>
    <?php
        if (!empty($message)) {
            echo '<h1>' . $message . '</h1>';
            echo '<h1>' . ucfirst(numToWordsRec($input)) . '.' . '</h1>';
        }else{
            if(!empty($errorRange)){
                echo '<h1 style="color: red;">' . $errorRange . '</h1>';
            }
            else{
                echo '<h1 style="color: red;">' . $errorInput . '</h1>';
            }
        }
    ?>
    <p><a href="exam-ui.php">Back to Input</a></p>
</body>
</html>
