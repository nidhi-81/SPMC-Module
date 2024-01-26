<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Assuming you have the username in the URL
$username = isset($_GET['username']) ? $_GET['username'] : 'Unknown';

// Fetch user data from the database
// Replace this with your actual database connection and query
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$dbname = "websitedb";
$conn = new mysqli($db_server, $db_user, $db_pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Use prepared statements to prevent SQL injection
$query = $conn->prepare("SELECT * FROM new_faculty_resume WHERE username = ? LIMIT 1");
$query->bind_param("s", $username);
$query->execute();
$result = $query->get_result();

// Initialize $user with default values
$user = array(
    'image' => '', // Update this to store the image path or URL
    'title' => '',
    'name' => '',
    'designation' => '',
    'username' => $username,
    'department' => '',
    'email' => '',
    'security_Question' => "",
    'security_Answer' => "",
    'resume' => "",

    // Add other fields as needed
);

if ($result->num_rows > 0) {
    // Update $user if data is available
    $row = $result->fetch_assoc();
    $user['title'] = $row['title'];
    $user['name'] = $row['name'];
    $user['designation'] = $row['designation'];
    $user['department'] = $row['department'];
    $user['email'] = $row['email'];
    // Assuming 'image' is the column in your database storing the image path or URL
    $user['image'] = $row['image'];
    $user['resume'] = $row['resume'];


    // Store user data in the session
    $_SESSION['user'] = $user;
}

// Close the database connection and the query

?>