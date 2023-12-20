<?php
define("DB_SERVER", "buamgwiozuszhauz21pi-mysql.services.clever-cloud.com");
define("DB_USERNAME", "ujprvknj6xccrrnm");
define("DB_PASSWORD", "fTPWpFssMmD2JPIpB3XO");
define("DB_NAME", "buamgwiozuszhauz21pi");

# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
