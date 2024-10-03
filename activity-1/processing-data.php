<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $degree = $_POST["degree"] ?? "";  
    $studentID = $_POST["student-id"] ?? ""; 
    $classes = isset($_POST["classes"]) ? implode(', ', $_POST["classes"]) : "";  
    $firstName = $_POST["first-name"] ?? "";  
    $lastName = $_POST["last-name"] ?? "";  // Add this line to capture the last name
    $dob = $_POST["dob"] ?? "";  // Make sure to capture the date of birth from the form

    // Check if dob is set and valid before formatting
    if (!empty($dob)) {
        $dobFormatted = date("F j, Y", strtotime($dob));
    } else {
        $dobFormatted = "";  // Assign an empty string if dob is not provided
    }

    $gender = $_POST["gender"] ?? "";
    $email = $_POST["email"] ?? ""; 
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Data</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td, th{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 5px;
        }
    </style>
</head>
<body>

    <strong>Academic Information</strong><br>
    <table>
        <tr>
            <td>Degree&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $degree ?></td>
        </tr>
        <tr>
            <td>Student ID&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $studentID ?></td>
        </tr>
        <tr>
            <td>Classes attended&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $classes ?></td>
        </tr>
    </table><br>
    <strong>Personal Details</strong><br>
    <table>
        <tr>
            <td>First Name&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $firstName; ?></td>
        </tr>
        <tr>
            <td>Last Name&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $_POST["last-name"]; ?></td>
        </tr>
        <tr>
            <td>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $dobFormatted; ?></td>
        </tr>
        <tr>
            <td>Gender&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $gender?></td>
        </tr>
        <tr>
            <td>Email&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $email?></td>
        </tr>
    </table>
    
</body>
</html>