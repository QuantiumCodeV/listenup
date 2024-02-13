<?PHP
$DB_HOST="localhost";
$DB_LOGIN="root";
$DB_PASSWORD="";
$DB_NAME="logs";

$mysqli = new mysqli($DB_HOST, $DB_LOGIN, $DB_PASSWORD, $DB_NAME);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

