<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <title>Index test</title>
</head>
<body>
    <div class="container">
        <h1>Test</h1>
        <ul>
            <li><a href="/db-connection-test.php">MySQL test</a></li>
            <li><a href="/upload-test.php">Upload test</a></li>
            <li><a href="http://localhost:81">PhpMyAdmin</a></li>
        </ul>
    </div>
    <?php echo phpinfo(); xdebug_info(); ?>
</body>
