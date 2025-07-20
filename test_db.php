<?php
include 'includes/db.php';

if (isset($conn) && $conn) {
    echo "Database connected successfully!";
} else {
    echo "Failed to connect to the database.";
}
?>