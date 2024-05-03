<?php
// Include the database configuration file
include('../../../database/config.php');

// Check if the ID is set in the GET request
if (isset($_GET['id'])) {
    // Sanitize the input ID to prevent SQL injection
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    // Query to fetch data from the database based on the provided ID
    $query = "SELECT * FROM pl_gatheringcremation WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch the data
            $row = mysqli_fetch_assoc($result);

            // Output the fetched data in JSON format
            echo json_encode($row);
        } else {
            // No matching record found
            echo json_encode(array("error" => "No data found for the provided ID."));
        }
    } else {
        // Query failed
        echo json_encode(array("error" => "Error: " . mysqli_error($connection)));
    }
} else {
    // ID parameter is not set
    echo json_encode(array("error" => "Error: ID parameter is not set."));
}

// Close the database connection
mysqli_close($connection);
?>