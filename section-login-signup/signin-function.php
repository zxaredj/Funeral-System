<?php
session_start();    

    include '../database/config.php';

    if ($_SERVER['REQUEST_METHOD']== "POST")
    {
        $username = filter_var($_REQUEST["username"], FILTER_SANITIZE_STRING);
        $password = $_REQUEST["password"];
        $firstname = filter_var($_REQUEST["fname"], FILTER_SANITIZE_STRING);
        $lastname = filter_var($_REQUEST["lname"], FILTER_SANITIZE_STRING);
        $number = filter_var($_REQUEST["number"], FILTER_SANITIZE_STRING);
    }

$stmt = $connection->prepare("SELECT * FROM login WHERE username = ? OR number = ?");
$stmt->bind_param("ss", $username, $number);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    header("Location: signup.php?error=user_taken");
    exit();

} else {
    if (!empty($username) && !empty($password) && !empty($number))
    {
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $connection->prepare("INSERT into login (username, password, fname, lname, number) VALUES (?, ?, ?, ?, ?)") ;
        $stmt->bind_param("sssss", $username, $hash_pass, $firstname, $lastname, $number);
        $stmt->execute();

        header("Location:login.php");
        die;

    }else{
        header("Location: signup.php?error=invalid_information");
        exit();
    }
}

