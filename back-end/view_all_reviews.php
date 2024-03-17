<!-- view_all_reviews.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reviews</title>
    <style>
        /* CSS for centering and aligning reviews */
        body {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
}

.review-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around; /* Change to space-around to equally distribute items */
    align-items: flex-start; /* Align items at the top */
    gap: 20px;
    max-width: 800px; /* Adjust as needed */
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.review {
    flex: 0 1 calc(33.33% - 20px); /* Each review takes up 1/3 of the container width minus gap */
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.review p {
    margin: 0;
    font-size: 16px;
    line-height: 1.5;
}
    </style>
</head>
<body>

<div class="review-container">
    <?php
        // Connect to your database
        include('config.php');

        $sql = "SELECT * FROM review";
        $result = mysqli_query($connection, $sql);

        // Output review data in HTML
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // Output review data
                echo "<div class='review'>";
                echo "<p>Name: " . $row["review_name"]. "</p>";
                echo "<p>Date: " . $row["review_date"]. "</p>";
                echo "<p>Testimonial: <br>" . $row["review_testimonial"]. "</p>";
                echo "</div>";
            }
        } else {
            echo "No reviews found.";
        }
    ?>
</div>

</body>
</html>
