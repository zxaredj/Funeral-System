<?php
// Include necessary files and functions
include 'config.php'; // Include database connection parameters

// Function to fetch data from the database
function fetchDataFromDatabase($sql_query) {
    global $servername, $username, $password, $database;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Execute SQL query
    $result = $conn->query($sql_query);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Output data of each row
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Close connection
        $conn->close();
        return $data;
    } else {
        // Close connection
        $conn->close();
        return [];
    }
}

// SQL query to fetch all data from the employees table
$sql = "SELECT * FROM employee";
$employees = fetchDataFromDatabase($sql);

// Function to display employee data in a table row
function displayEmployeeTableRow($employee) {
    echo "<tr>
            <td>{$employee['username']}</td>
            <td>{$employee['fname']} {$employee['lname']}</td>
            <td>{$employee['email']}</td>
            <td>{$employee['occupation']}</td>
          </tr>";
}

// Function to edit an employee by ID
function editEmployeeById($id) {
    global $servername, $username, $password, $database;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $id = mysqli_real_escape_string($conn, $id);

    // SQL query to fetch employee data by ID
    $sql = "SELECT * FROM employee WHERE id = '$id'";
    $result = $conn->query($sql);

    // Check if employee exists
    if ($result->num_rows == 1) {
        // Fetch employee data
        $employee = $result->fetch_assoc();
        // Close connection
        $conn->close();
        return $employee;
    } else {
        // Close connection
        $conn->close();
        return false;
    }
}
?>