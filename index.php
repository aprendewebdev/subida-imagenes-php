<!DOCTYPE html>
<html>
<head>
    <title>Upload Images PHP</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <img class="upload-img" src="assets/img/icon3.png" />
            <span class="file-status">No file chosen</span>
            <label class="btn" for="custom-file-input">Choose File</label>
            <input type="file" name="file" id="custom-file-input" hidden />

            <input type="submit" class="btn" name="upload" value="Upload" />
        </form>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>