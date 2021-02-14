<?php

if (isset($_FILES['file'])) {

    $file = $_FILES['file'];
    $filename = $file['name'];
    $mimetype = $file['type'];

    $allowed_types = array("image/jpg", "image/jpeg", "image/png");
    if (!in_array($mimetype, $allowed_types)) {
        header("Location:index.php");
    }

    // crear directorio uploads
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777);
    }

    // mover archivo a uploads
    move_uploaded_file($file['tmp_name'], 'uploads/'.$filename);
} else {
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Images PHP</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="upload-container">
            <h1>File Uploaded Successfully</h1>
            <img src="uploads/<?= $filename ?>" />
            <a class="btn upload-more-btn" href="index.php">Upload more</a>
        </div>
    </div>
</body>
</html>