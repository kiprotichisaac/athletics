<?php
session_start(); // Start session to manage user login state

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userType = $_POST['userType'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the database
    $servername = "localhost";
    $username_db = "root"; // Your database username
    $password_db = ""; // Your database password
    $dbname = "athlete";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check user credentials
    $sql = "SELECT * FROM userss WHERE user_type = '$userType' AND first_name = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, log the user in
            $_SESSION['username'] = $username;
            header("Location: main.php"); // Redirect to main page
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }

    $conn->close();
}
?>
