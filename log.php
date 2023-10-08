<?php
include('dbc.php');

try {
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {

        // Retrieve user inputs
        $username = mysqli_real_escape_string($link, $_POST["username"]);
        $password = mysqli_real_escape_string($link, $_POST["password"]);

        // Implement secure authentication logic
        $sql = "SELECT id, password FROM users WHERE username = '$username'";
        $result = $link->query($sql);

        if (!$result) {
            throw new Exception("Query failed: " . $link->error);
        }

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row["password"];

            // Verify password
            if (password_verify($password, $hashedPassword)) {
                // Authentication successful
                session_start();
                $_SESSION["user_id"] = $row["id"];
                $_SESSION['valid_user'] = true;
                header("Location: /"); // Redirect to dashboard or any other page
                exit();
            } else {
                // Invalid password
                throw new Exception("Invalid username or password.");
            }
        } else {
            // Invalid username
            throw new Exception("Invalid username or password.");
        }
    }
} catch (Exception $e) {
    // Return error message to login.php
    echo $e->getMessage();
}

$link->close();
