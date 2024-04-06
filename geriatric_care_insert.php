<?php
include 'config/conn.php'; // Include the database connection

try {
    // Check if the database connection is established
    if (!$pdo) {
        throw new Exception("Database connection failed.");
    }

    // Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO geriatric_care (full_name, email, phone_number, area, city, state, message) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters dynamically based on keys from $_POST
    $index = 1; // Start index for binding parameters
    $keys = ['full_name', 'email', 'phone_number', 'area', 'city', 'state', 'message']; // List of keys

    foreach ($keys as $key) {
        // Check if key exists in $_POST
        if (isset($_POST[$key])) {
            $stmt->bindParam($index++, $_POST[$key]);
        } else {
            // If key is missing in $_POST, bind null value
            $stmt->bindParam($index++, null);
        }
    }

    // Execute statement
    $stmt->execute();

    // Response
    echo "Data inserted successfully";
} catch (PDOException $e) {
    // Handle database connection error
    echo "Error: " . $e->getMessage();
} catch (Exception $e) {
    // Handle other exceptions
    echo "Error: " . $e->getMessage();
}
?>
