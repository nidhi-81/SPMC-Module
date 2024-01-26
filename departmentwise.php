<?php
// Include your database connection file
include('database.php');

// Assuming $conn is your database connection variable

// Initialize variables
$departments = [];

// Assuming 'new_faculty_resume' is the table name
$table_name_resume = 'new_faculty_resume';

// Use prepared statement to prevent SQL injection
$query_departments = $conn->prepare("SELECT DISTINCT department FROM $table_name_resume");
$query_departments->execute();
$result_departments = $query_departments->get_result();

// Check if there are departments in the result
if ($result_departments->num_rows > 0) {
    while ($row = $result_departments->fetch_assoc()) {
        $departments[] = $row;
    }
}

// Close the database connections

?>