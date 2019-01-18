<?php

include("database_configuration.php");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "<div align='center'><img src='assets/connected.gif' width='50%'/><br>";
    echo "<h1><font color='green'>Connection Successful</font></h1></div>";
}

?>