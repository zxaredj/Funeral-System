<?php
// session_start();    

    include '../database/config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
        $stmt = $connection->prepare("SELECT * FROM login WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($user = $result->fetch_assoc()) {

            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                header("Location: ../section-home/index.php");
                exit();
            } else {
                header("Location: login.php?error=invalid_credentials");
                exit();
            }
        } else {
            header("Location: login.php?error=invalid_credentials");
            exit();
        }
        $_SESSION['username'] = $username;  // Set username in session

        // Redirect to the originally intended page or default to a specific page
        $redirect_url = $_SESSION['redirect_url'] ?? 'default-page.php';
        header("Location: $redirect_url");
        exit();
    }


?>