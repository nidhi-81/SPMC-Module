<?php
include('database.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_code'])) {
    $delete_code = $_POST['delete_code'];

    // Assuming 'new_faculty_resume' is the table name
    $table_name_resume = 'new_faculty_resume';

    // Use prepared statement to prevent SQL injection
    $query_delete = $conn->prepare("DELETE FROM $table_name_resume WHERE code = ?");
    $query_delete->bind_param('s', $delete_code);

    // Execute the delete query
    if ($query_delete->execute()) {
        // Redirect back to the page after deletion
        header("Location: tbfac.php");
        exit();
    } else {
        // Handle deletion error
        echo "Error deleting record: " . $conn->error;
    }

    // Close the delete query
    $query_delete->close();
}

// Rest of your existing code

// Close the database connection
$conn->close();
?>
