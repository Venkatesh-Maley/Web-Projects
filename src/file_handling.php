<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Upload'])){
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES['fileupload']['name']);
    $uploadto = 1;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if the file is actually a PDF
    if ($file_type !== "pdf") {
        echo "Uploaded file is not a PDF.<br/>";
        $uploadto = 0;
    }

    // Check file size
    if ($_FILES['fileupload']['size'] > 10000000) {
        echo "Sorry, the file is too large.<br/>";
        $uploadto = 0;
    }

    if ($uploadto == 0) {
        echo "Sorry, your file was not uploaded.<br/>";
    } 
    else {
        if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $target_file)) {  
            echo "Your file was uploaded successfully.<br/>";
        } else {
            echo "Sorry, there was an error uploading your file. Please try again.<br/>";
        }
    }

    // Display download link if upload was successful
    if ($uploadto == 1) {
        echo '<a download="' . $_FILES['fileupload']['name'] . '" href="upload/' . $_FILES['fileupload']['name'] . '">Download Here</a>';
    }
}}
?>

