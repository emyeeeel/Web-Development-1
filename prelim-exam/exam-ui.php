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
    <form action="exam-data-process.php" method="post">
        <h1>Number to Words Converter</h1>
        <label>Enter a number from 0 to 99 thousand: </label>
        <input type="text" name="input-value">
        <br>
        <button name="button" type="submit" value="Send Form">Convert to Words</button>
        <button name="button" type="reset" value="Clear Form">Clear</button>
    </form>
</body>
</html>