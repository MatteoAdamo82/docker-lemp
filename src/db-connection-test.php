<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <title>Mysql test</title>
</head>

<body class="container">
<?php
static $hostname = "mysql";
static $username = "root";
static $password = "password";

$conn = new mysqli($hostname, $username, $password);
if ($conn->connect_error) {
  die("Oops, something went wrong: ". $conn->connect_error);
}
echo "MySql connected!";
?>
</body>
