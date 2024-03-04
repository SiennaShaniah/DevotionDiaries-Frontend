<?php
// Start the session at the very beginning
session_start();

// Database connection parameters
$host = 'localhost';
$db_user = 'root'; 
$db_password = ''; 
$db_name = 'Devotion_Diaries'; 

// Create database connection
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['entryDate'];
    $title = $_POST['promptTitle'];
    $promptText = $_POST['promptText'];

    // SQL to insert data
    $sql = "INSERT INTO prompts (date, title, prompt_text) VALUES (?, ?, ?)";

    // Prepare SQL statement
    $stmt = $mysqli->prepare($sql);
    if ($stmt) {
        // Bind parameters and execute statement
        $stmt->bind_param("sss", $date, $title, $promptText);
        if ($stmt->execute()) {
            $_SESSION['message'] = "New record created successfully";
        } else {
            $_SESSION['message'] = "Error: " . $stmt->error;
        }
        $stmt->close(); // Close statement
    } else {
        $_SESSION['message'] = "Error: Could not prepare the query.";
    }
    $mysqli->close(); // Close database connection

    // Redirect back to the form page (or to a specific page where the modal will be triggered)
    header("Location:admin.php#uploadPrompt"); 
    exit();
}
?>



