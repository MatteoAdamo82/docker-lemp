<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <title>Upload test</title>
</head>
<body class="container">
<form action="upload-test.php" method="post" enctype="multipart/form-data">
    <label for="file">Upload a file:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Upload" name="submit">
</form>
<?php
if(isset($_POST["submit"])) {
    echo "<hr>";
    $file = "uploads/". basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
        echo "file". htmlspecialchars( basename( $_FILES["file"]["name"])) ." uploaded!";
    } else {
        echo "Oops, something went wrong uploading the file";
    }
}
?>

</body>
</html>