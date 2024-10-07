<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<pre>", print_r($_FILES, true),"</pre>";
    handleUploads(); 
    formatArray();
} else {
    echo 'POST method is required.';
}

echo "<a href=" . $_SERVER["HTTP_REFERER"] . ">Back to Uploads</a>";

function formatArray() {
    echo "<pre>";    
    if (isset($_FILES['uploads']) && is_array($_FILES['uploads']['name'])) {
        $formattedFiles = [];
        
        foreach ($_FILES['uploads']['name'] as $index => $name) {
            $formattedFiles[$index] = [
                'name' => $_FILES['uploads']['name'][$index],
                'full_path' => $_FILES['uploads']['full_path'][$index] ?? '', 
                'type' => $_FILES['uploads']['type'][$index],
                'tmp_name' => $_FILES['uploads']['tmp_name'][$index],
                'error' => $_FILES['uploads']['error'][$index],
                'size' => $_FILES['uploads']['size'][$index],
            ];
        }
        
        print_r($formattedFiles); 
    } else {
        echo "No files uploaded.\n";
    }

    echo "</pre>";
}



function handleUploads() {
    if (isset($_FILES['uploads']) && is_array($_FILES['uploads']['name'])) {
        $targetDirectory = "uploads"; 

        foreach ($_FILES['uploads']['error'] as $index => $error) {
            if ($error > 0) {
                echo "<span>File was not uploaded. Error is encountered. CODE: $error</span><br>";
            } else {
                $originalFileName = $_FILES['uploads']['name'][$index];
                $uploadFileName = $_FILES['uploads']['tmp_name'][$index];

                if (move_uploaded_file($uploadFileName, $targetDirectory . "/" . $originalFileName)) {
                    echo "<span>$originalFileName has been successfully uploaded.</span><br>";
                } else {
                    echo "<span>Error moving the uploaded file: $originalFileName</span><br>";
                }
            }
        }
    } else {
        echo "No files to upload.\n";
    }
}
