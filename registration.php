<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    print_r($_POST);

    // Retrieve form data
    $userType = $_POST['userType'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $password = $_POST['password']; // Note: This is the plain-text password from the form

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $country = $_POST['country'];

    // Process the form data (e.g., save to database)
    // Here, you would typically insert the data into your MySQL database
    // Example MySQL connection and insertion (replace with your actual database details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "athlete";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL statement to insert data into a table (replace with your table name and column names)
    $sql = "INSERT INTO userss (user_type, first_name, last_name, password, country)
            VALUES ('$userType', '$firstName', '$lastName', '$hashedPassword', '$country')";

    if ($conn->query($sql) === TRUE) {
        header("Location: main.php");
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
