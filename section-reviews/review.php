<?php 
    require '../database/config.php';

    $sql = "SELECT * FROM reviews";
    $result = mysqli_query($connection, $sql);

    // Step 3: Fetch Data
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["review_name"]. "<br>";
            echo "Email: " . $row["review_email"]. "<br>";
            echo "Testimonial: " . $row["review_testimonial"]. "<br>";
            echo "<hr>"; // Add a horizontal line between each review for better readability
        }
    } else {
        echo "0 results";
    }

    // Step 4: Close Connection
    mysqli_close($conn);
?>