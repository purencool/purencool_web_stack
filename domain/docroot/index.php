<h1>Congratulations!! Docker setup connection is successful.</h1>

<h4>Checking MySQL integration with php.</h4>
<?php
$database = "drupal";
$host = 'mysql';
$user = 'drupal';
$pass = 'drupal123';
$port = "3306";
$conn = new mysqli($host, $user, $pass, $database, $port);

if ($conn->connect_error) {
    die("MySql connection is failed: " . $conn->connect_error);
} else {
    echo "MySql connection is successful!";
}

echo "<h1>Test</h1>";

echo phpinfo();

?>
