<?php
session_start();    

    include '../database/config.php';

    if ($_SERVER['REQUEST_METHOD']== "POST")
    {
        $username = filter_var($_REQUEST["username"], FILTER_SANITIZE_STRING);
        $password = $_REQUEST["password"];
        $firstname = filter_var($_REQUEST["fname"], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_REQUEST["lname"], FILTER_SANITIZE_STRING);
        $email = filter_var($_REQUEST["email"], FILTER_SANITIZE_EMAIL);
    }

$stmt = $connection->prepare("SELECT * FROM login WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    header("Location: signup.php?error=user_taken");
    exit();

} else {
    if (!empty($username) && !empty($password) && !empty($email))
    {
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $connection->prepare("INSERT into login (username, password, fname, lname, email) VALUES (?, ?, ?, ?, ?)") ;
        $stmt->bind_param("sssss", $username, $hash_pass, $firstname, $lastname, $email);
        $stmt->execute();

        header("Location:login.php");
        die;

    }else{
        header("Location: signup.php?error=invalid_information");
        exit();
    }
}

