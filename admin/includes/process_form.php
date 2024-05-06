<?php
include 'config.php';
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_hashed = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    $email = $_POST["email"];
    $occupation = $_POST["occupation"];

    // Prepare and bind the INSERT statement
    $sql = "INSERT INTO employee (fname, lname, username, password, email, occupation) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $fname, $lname, $username, $password_hashed, $email, $occupation);

    // Execute the statement
    if ($stmt->execute()) {
       // Display a success message using SweetAlert
        echo "<script>s
                Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: 'New record created successfully',
                });
              </script>";
    } else {
        // Insertion failed
        // Display an error message using SweetAlert
        echo "<script>
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: 'Error: " . $conn->error . "',
                });
              </script>";

    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>