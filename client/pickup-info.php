<?php
session_start();
include '../database/config.php';

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "SELECT * FROM pickup WHERE id = '$id'";
    $result = mysqli_query($connection, $query);


    if(mysqli_num_rows($result) > 0) {
   
        $row = mysqli_fetch_assoc($result);
        
        $id = $row['id'];
        $type = $row['type'];
        $death = $row['death'];
        $release = $row['releasepaper'];
        $deceasedFirstName = $row['deceasedFirstName'];
        $deceasedLastName = $row['deceasedLastName'];
        $location = $row['location'];
        $date = $row['date'];
        $time = $row['time'];
        $contactFirstName = $row['contactFirstName'];
        $contactLastName = $row['contactLastName'];
        $number = $row['number'];
        $email = $row['email'];
        $relationship = $row['relationship'];
        $status = $row['status'];
        $timestamp = $row['timestamp'];

    } else {
        echo "No data found!";
    }
} else {
    echo "Invalid request!";
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
<h1 class="review-title">INBOX</h1>

    <div class="box1">
        <div class="inbox-section1">
        <button type="button" onclick="window.location.href='../client/client-inbox.php'" class="submit-btn1">BACK</button>
        <h2 class="info-title">PICK-UP INFORMATION</h2>
        <br>
        <p class="info-header"><b>Pick-up ID:</b> <?php echo $id; ?></p>
        <div class="document-box">
            <div class="box-1">
                <p class="info-header"><b>Death Certificate:</b></p>
                <a href="<?php echo $death; ?>" target="_blank"><img src="<?php echo $death; ?>" class="document-image" alt="Death Certificate"></a>
            </div>

            <div class="box-2">
                <p class="info-header"><b>Release Paper:</b></p>
                <a href="<?php echo $release; ?>" target="_blank"><img src="<?php echo $release; ?>" class="document-image" alt="Release Paper"></a>
            </div>
        </div>
        <br><br>
        <p class="info-header"><b>Deceased Name:</b> <?php echo $deceasedFirstName . " " . $deceasedLastName; ?></p>
        <p class="info-header"><b>Location:</b> <?php echo $location; ?></p>
        <p class="info-header"><b>Date and Time:</b> <?php echo date("F j, Y", strtotime($date)) . " " . date("g:i A", strtotime($time)); ?></p>
        <br><br>
        <h2 class="info-title">CONTACT PERSON INFORMATION</h2>
        <br>
        <p class="info-header"><b>Name:</b> <?php echo $contactFirstName . " " . $contactLastName; ?></p>
        <p class="info-header"><b>Number:</b> <?php echo $number; ?></p>
        <p class="info-header"><b>Email:</b> <?php echo $email; ?></p>
        <p class="info-header"><b>Relationship:</b> <?php echo $relationship; ?></p>
        <p class="info-header"><b>Status:</b> <?php echo $status; ?></p>

        <br><br><br>

        <p class="note">Please wait for admin approval. If not approved, it might be due to their availability or oversight. Thank you.</p>

        <br><br><br>
        </div>
        </div>
        <br><br><br><br>

</body>
</html>
