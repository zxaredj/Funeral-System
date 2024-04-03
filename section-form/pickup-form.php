<?php
include '../database/config.php';

if (isset($_POST['submit-btn'])) {
    function handleFileUpload($file) {
        $img_name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $img_upload_path = '';

        if (!empty($img_name)) {
            $new_name = uniqid("IMG-", true) . '.' . pathinfo($img_name, PATHINFO_EXTENSION);
            $img_upload_path = '../pictures/documents-pictures/' . $new_name;
            move_uploaded_file($tmp_name, $img_upload_path);
        }

        return $img_upload_path;
    }

    $deathcert = handleFileUpload($_FILES['death-cert']);
    $releasepaper = handleFileUpload($_FILES['release-paper']);
    
    $deceasedfirstname = mysqli_real_escape_string($connection, $_POST["deceased-firstname"]);
    $deceasedlastname = mysqli_real_escape_string($connection, $_POST["deceased-lastname"]);
    $location = mysqli_real_escape_string($connection, $_POST["location"]);
    $date = mysqli_real_escape_string($connection, $_POST["pickup-date"]);
    $time = mysqli_real_escape_string($connection, $_POST["pickup-time"]);
    
    $contactfirstname = mysqli_real_escape_string($connection, $_POST["contact-firstname"]);
    $contactlastname = mysqli_real_escape_string($connection, $_POST["contact-lastname"]);
    $number = mysqli_real_escape_string($connection, $_POST["number"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $relationship = mysqli_real_escape_string($connection, $_POST["relationship"]);

    $query = "INSERT INTO pickup (death, releasepaper, deceasedFirstName, deceasedLastName, location, date, time, contactFirstName, contactLastName, number, email, relationship) VALUES ('$deathcert', '$releasepaper', '$deceasedfirstname', '$deceasedlastname', '$location', '$date', '$time', '$contactfirstname', '$contactlastname', '$number', '$email', '$relationship')";

    if (mysqli_query($connection, $query)) {
        header("Location: form-modal.html");
        exit();
        
    } else {
        echo '<script>alert("Not added!")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
    <link rel="stylesheet" href="../css/forms-style.css">
    <link rel="preconnection" href="https://fonts.googleapis.com">
    <link rel="preconnection" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
</head>
<body>
  <main>
        <section class="form-section">
            <div class="background-image">
                    <nav>
                        <!-- <img src="/front-end/pictures/pigeon.png" alt="Logo"> -->
                        <ul>
                            <li><a href="../section-home/index.php">HOME</a></li>
                            <li><a href="../section-about/About Us.html">ABOUT</a></li>
                            <li><a href="../section-services/Service Section.html">SERVICES</a></li>
                            <li><a href="../section-form/pickup-form.php">FORM</a></li>
                            <li><a href="../section-planning/planning-form.php">PLANNING</a></li>
                            <li><a href="../section-obituaries/obituaries.php">OBITUARIES</a></li>
                            <li><a href="../section-login-signup/signup.html">SIGN IN</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
      </main>

<h1 class="title">PICK-UP OF DECEASED FORM</h1>
<p class="form-intro">Provide information about picking up the deceased before proceeding to funeral arrangements. After submitting the form, wait for the confirmation.</p>

<div class="container">
    <div class="box-1">

    <form action="" method="POST" onsubmit="return validateInfo()" enctype="multipart/form-data">
      
        <h2 class="docu-text">Please upload the following documents:</h2>
          <div class="inputs">
                <p class="docu-name">Death Certificate</p>
                <input type="file" id="death-cert" name="death-cert" required>
            </div>

            <div class="inputs">
                <p class="docu-name">Release Paper</p>
                <input type="file" id="release-paper" name="release-paper" required>
            </div>

        <h2 class="info-title">Deceased Personal Information</h2>
      
            <div class="inputs">
                <label for="deceased-firstname">First Name</label>
                <input type="text" id="deceased-firstname" name="deceased-firstname" placeholder="Juan" required>
            </div>
            
            <div class="inputs">
                <label for="deceased-lastname">Last Name</label>
                <input type="text" id="deceased-lastname" name="deceased-lastname" placeholder="Dela Cruz" required>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="location">Pick Up Location</label>
                    <input type="text" id="location" name="location" placeholder="450 A. Mabini St, Poblacion, Caloocan, Metro Manila - Caloocan City Medical Center (South)" required>
                </div>
                <div class="inputs">
                    <label for="date">Pick Up Date</label>
                    <input type="date" id="pickup-date" name="pickup-date" required>
                </div>

                <div class="inputs">
                    <label for="time">Pick Up Time</label>
                    <input type="time" id="pickup-time" name="pickup-time" required>
                </div>
            </div>

        <h2 class="info-title">Contact Person Personal Information</h2>
            
            <div class="inputs">
                <div class="inputs">
                    <label for="contact-firstname">First Name</label>
                    <input type="text" id="contact-firstname" name="contact-firstname" placeholder="Juan" required>
                </div>

                <div class="inputs">
                    <label for="contact-lastname">Last Name</label>
                    <input type="text" id="contact-lastname" name="contact-lastname" placeholder="Dela Cruz" required>
                </div>
            </div>

            <div class="inputs">
                <label for="number">Contact Number</label>
                <input type="number" id="number" name="number" placeholder="09301938102" required>
            </div>

            <div class="inputs">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="perpetualfuneralservices@gmail.com" required>
            </div>

            <div class="inputs">
                <label for="relationship">Relationship to the Deceased</label>
                <select id="relationship" name="relationship" required>
                    <option value="" selected disabled>Select Relationship</option>
                    <option value="parent">Parent</option>
                    <option value="sibling">Sibling</option>
                    <option value="spouse">Spouse</option>
                    <option value="child">Child</option>
                    <option value="friend">Friend</option>
                    <option value="others">Others</option>
                </select>
            </div>

            <div class="inputs">
                <div class="submit-btn-container">
                    <input type="submit" value="SUBMIT" id="submit-btn" name="submit-btn" class="submit-btn">
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../js/validations.js" defer></script>
</body>
</html>
