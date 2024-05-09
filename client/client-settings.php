<?php
session_start();
include '../database/config.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect user to login page if not logged in
    header("Location: ../section-login-signup/login.php");
    exit();
}

// Get the username of the logged-in user
$username = $_SESSION['username'];

// Query to fetch user information based on the username
$query = "SELECT fname, lname, username, password FROM login WHERE username = '$username'";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if (!$result) {
    // Handle error if query fails
    echo "Error: " . mysqli_error($connection);
    exit();
}

// Fetch the row from the result
$row = mysqli_fetch_assoc($result);

// Assign the values to variables, handling potential null values
$fname = isset($row['fname']) ? $row['fname'] : '';
$lname = isset($row['lname']) ? $row['lname'] : '';
$username = isset($row['username']) ? $row['username'] : '';
$password = isset($row['password']) ? $row['password'] : '';

// Check if the form is submitted
if (isset($_POST['submit-btn'])) {
    // Get the new user information from the form
    $new_fname = $_POST['user-firstname'];
    $new_lname = $_POST['user-lastname'];
    $new_username = $_POST['user-username'];
    $new_password = $_POST['user-password'];

    $hashed_password = '';
    if (!empty($new_password)) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    }

    // Query to update user information in the database
    $query1 = "UPDATE login SET fname = '$new_fname', lname = '$new_lname', username = '$new_username'";
    // Add password update to query if password is not empty
    if (!empty($hashed_password)) {
        $query1 .= ", password = '$hashed_password'";
    }
    $query1 .= " WHERE username = '$username'";
    $result1 = mysqli_query($connection, $query1);

    $query2 = "UPDATE pickup SET username = '$new_username' WHERE username = '$username'";
    $result2 = mysqli_query($connection, $query2);

    // Check if the query was successful
    if ($result1 && $result2) {
        // Set a session variable to indicate success
        $_SESSION['update_success'] = true;
    } else {
        // Set a session variable to indicate failure
        $_SESSION['update_failed'] = true;
    }

    // Redirect back to the settings page
    header("Location: ../client/client-settings.php");
    exit();
}

if (isset($_SESSION['update_success'])) {
    // Set the session variables again
    $_SESSION['update_success'] = true;
    echo "<script>alert('Profile updated successfully');</script>";
    unset($_SESSION['update_success']);
} elseif (isset($_SESSION['update_failed'])) {
    // Set the session variables again
    $_SESSION['update_failed'] = true;
    echo "<script>alert('Failed to update profile. Please try again later.');</script>";
    unset($_SESSION['update_failed']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PFS | Inbox</title>
    <link rel="stylesheet" href="../css/client-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/53e9ba7f8c.js" crossorigin="anonymous"></script>
</head>
<body>
<main>
        <section class="form-section">
            <div class="background-image">
                    <nav>
                        <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                        <h1><a href = '../section-about/About Us.php' class="name">PERPETUAL FUNERAL SERVICES</a></h1>
                        <ul>
                            <li><a href="../section-home/index.php">HOME</a></li>
                            <li><a href="../section-about/About Us.php">ABOUT</a></li>
                            <li><a href="../section-services/Service Section.php">SERVICES</a></li>
                            <li><a href="../section-form/pickup-form.php">FORM</a></li>
                            <?php if(isset($_SESSION['username'])): ?>
                            <li class="dropdown">
                            <button class="dropbtn"><i class="fas fa-user"></i></button>
                            <div class="dropdown-content" id="myDropdown">
                                <a href="../client/client-inbox.php">Inbox</a>
                                <a href="../client/client-settings.php">Settings</a>
                            </div>
                        </li>
                        <li><a href="../logout.php">LOGOUT</a></li>
                    <?php else: ?>
                        <li><a href="../section-login-signup/signup.php">SIGN UP</a></li>
                    <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </section>
            </main>
            <br><br><br><br>
<br>

<h1 class="review-title">SETTINGS</h1>


    <div class="box2">
        <div class="inbox-section2">
        
        <h2 class="info-title">EDIT PROFILE</h2>
        <br>
        <form action="" method="POST">
        <div class="inputs">
                <label for="user-firstname">First Name</label>
                <input type="text" id="user-firstname" name="user-firstname" value="<?php echo $fname; ?>" required>
            </div>
            <div class="inputs">
                <label for="user-lastname">Last Name</label>
                <input type="text" id="user-lastname" name="user-lastname" value="<?php echo $lname; ?>" required>
            </div>
            <div class="inputs">
                <label for="user-username">Username</label>
                <input type="text" id="user-username" name="user-username" value="<?php echo $username; ?>" required>
            </div>
            <div class="inputs">
                <label for="user-password">Password</label>
                <input type="password" id="user-password" name="user-password">
            </div>
            <button type="submit" name="submit-btn" class="submit-btn2">SAVE CHANGES</button>
        </form>
        </div>
        </div>
        
        <br><br><br><br>

</body>
</html>
