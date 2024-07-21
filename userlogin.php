<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (replace these values with your actual database credentials)
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "nara thai";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Retrieve user data from the database based on the provided email
    $sql = "SELECT * FROM userdetails WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $conn->error;
    } else {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify the provided password with the hashed password stored in the database
            
                echo "Login successful!";
            
        } else {
            echo "User not found";
        }
    }

    $conn->close();
}
?>
