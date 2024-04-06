<?php
include 'config/conn.php'; // Include the database connection

try {
    // Insert data into medical_tourism table
    $stmt1 = $pdo->prepare("INSERT INTO medical_tourism (full_name, email, phone_number, treatment_selection_id, message) VALUES (?, ?, ?, ?, ?)");
    $stmt1->bindParam(1, $_POST['full_name']);
    $stmt1->bindParam(2, $_POST['email']);
    $stmt1->bindParam(3, $_POST['phone_number']);
    $stmt1->bindParam(4, $_POST['treatment_selection_id']);
    $stmt1->bindParam(5, $_POST['message']);
    $stmt1->execute();

    // Get the last inserted ID
    $medical_tourism_id = $pdo->lastInsertId();

    // Insert file data into medical_tourism_files table
    $stmt2 = $pdo->prepare("INSERT INTO medical_tourism_files (medical_tourism_id, file, file_type) VALUES (?, ?, ?)");
    $stmt2->bindParam(1, $medical_tourism_id);

    // Check if files are uploaded
    if (isset($_FILES['files'])) {
        $file = $_FILES['files']['name'];
        $file_type = $_FILES['files']['type'];
        $file_temp = $_FILES['files']['tmp_name'];
        
        // Move uploaded file to desired location
        move_uploaded_file($file_temp, 'uploads/' . $file);
        
        // Bind file data to the prepared statement
        $stmt2->bindParam(2, $file);
        $stmt2->bindParam(3, $file_type);
        $stmt2->execute();
    }

    // Response
    echo "Data inserted successfully";
} catch (PDOException $e) {
    // Handle database connection error
    echo "Error: " . $e->getMessage();
}
?>
