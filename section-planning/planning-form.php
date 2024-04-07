<?php
include '../database/config.php';
if (isset($_POST['submit-btn'])) {
    function handleFileUpload($file) {
        $img_name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $img_upload_path = '';

        if (!empty($img_name)) {
            $new_name = uniqid("IMG-", true) . '.' . pathinfo($img_name, PATHINFO_EXTENSION);
            $img_upload_path = '../pictures/deceased-pictures/' . $new_name;
            move_uploaded_file($tmp_name, $img_upload_path);
        }

        return $img_upload_path;
    }

    $benefactorfirstname = mysqli_real_escape_string($connection, $_POST["benefactor-firstname"]);
    $benefactorlastname = mysqli_real_escape_string($connection, $_POST["benefactor-lastname"]);
    $benefactornumber = mysqli_real_escape_string($connection, $_POST["benefactor-number"]);
    $benefactoraddress = mysqli_real_escape_string($connection, $_POST["benefactor-address"]);
    $benefactoremail = mysqli_real_escape_string($connection, $_POST["benefactor-email"]);
    $planfor = mysqli_real_escape_string($connection, $_POST["plan-for"]);

    $beneficiaryPicture = handleFileUpload($_FILES['beneficiary-pic']);
    $beneficiaryfirstname = mysqli_real_escape_string($connection, $_POST["beneficiary-firstname"]);
    $beneficiarylastname = mysqli_real_escape_string($connection, $_POST["beneficiary-lastname"]);
    $beneficiarygender = mysqli_real_escape_string($connection, $_POST["beneficiary-gender"]);
    $beneficiarybirthdate = mysqli_real_escape_string($connection, $_POST["beneficiary-birthdate"]);
    $beneficiaryaddress = mysqli_real_escape_string($connection, $_POST["beneficiary-address"]);


    $query = "INSERT INTO planninginfo (benefactorFirstName, benefactorLastName, benefactorContact, benefactorAddress, 
    benefactorEmail, planFor, beneficiaryPicture, beneficiaryFirstName, beneficiaryLastName, beneficiaryGender, beneficiaryBirthdate, beneficiaryAddress) VALUES ('$benefactorfirstname', '$benefactorlastname', 
    '$benefactornumber', '$benefactoraddress', '$benefactoremail', '$planfor', '$beneficiaryPicture', '$beneficiaryfirstname', '$beneficiarylastname', 
    '$beneficiarygender', '$beneficiarybirthdate', '$beneficiaryaddress')";

    if (mysqli_query($connection, $query)) {
        header("Location: planning-modal.html");
        exit();
        
    } else {
        echo '<script>alert("Submission Failed!")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Planning</title>
<link rel="stylesheet" href="../css/forms-style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<main>
    <section class="form-section">
        <div class="background-image">
            <nav>
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

<h1 class="title">PLANNING FORM</h1>
<p class="form-intro">Take charge of your final arrangements by planning ahead, ensuring your loved ones are spared the burden and your wishes are honored with peace of mind.</p>

<div class="container">
    <div class="box-1">
    <form id="multi-step-form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-1 active" id="form-1">
                <h2 class="info-header">PERSONAL DETAILS</h2>
                <h3 class="info-title">Benefactor's Personal Information</h3>
                <div class="inputs">
                    <label for="benefactor-firstname">First Name</label>
                    <input type="text" id="benefactor-firstname" name="benefactor-firstname" placeholder="Juan" required>
                </div>
                <div class="inputs">
                    <label for="benefactor-lastname">Last Name</label>
                    <input type="text" id="benefactor-lastname" name="benefactor-lastname" placeholder="Dela Cruz" required>
                </div>
                <div class="inputs">
                    <label for="benefactor-number">Contact Number</label>
                    <input type="number" id="benefactor-number" name="benefactor-number" placeholder="09301938102" required>
                </div>
                <div class="inputs">
                    <label for="benefactor-address">Address</label>
                    <input type="text" id="benefactor-address" name="benefactor-address" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>
                <div class="inputs">
                    <label for="benefactor-email">Email</label>
                    <input type="email" id="benefactor-email" name="benefactor-email" placeholder="perpetualfuneralservices@gmail.com" required>
                </div>
                <div class="inputs">
                    <label for="plan-for">This plan is for my:</label>
                    <select id="plan-for" name="plan-for" required>
                        <option value="" selected disabled>Select Relationship</option>
                        <option value="parent">Parent</option>
                        <option value="sibling">Sibling</option>
                        <option value="spouse">Spouse</option>
                        <option value="child">Child</option>
                        <option value="friend">Friend</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="inputs">
                    <div class="submit-btn-container">
                        <button type="button" onclick="next()" class="submit-btn">NEXT</button>
                    </div>
                </div>
            </div>
            <div class="form-2" id="form-2" style="display: none;">
                <h2 class="docu-text">Please upload the beneficiary's picture:</h2>
                <div class="inputs">
                    <p class="docu-name">Beneficiary's Picture</p>
                    <input type="file" id="beneficiary-pic" name="beneficiary-pic" required>
                </div>
                <h2 class="info-title">Beneficiary's Personal Information</h2>
                <div class="inputs">
                    <label for="beneficiary-firstname">First Name</label>
                    <input type="text" id="beneficiary-firstname" name="beneficiary-firstname" placeholder="Juan" required>
                </div>
                <div class="inputs">
                    <label for="beneficiary-lastname">Last Name</label>
                    <input type="text" id="beneficiary-lastname" name="beneficiary-lastname" placeholder="Dela Cruz" required>
                </div>
                <div class="inputs">
                    <label for="beneficiary-gender">Gender</label>
                    <select id="beneficiary-gender" name="beneficiary-gender" required>
                        <option value="" selected disabled>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="inputs">
                    <label for="beneficiary-birthdate">Birthdate</label>
                    <input type="date" id="beneficiary-birthdate" name="beneficiary-birthdate" required>
                </div>
                <div class="inputs">
                    <label for="beneficiary-address">Address</label>
                    <input type="text" id="beneficiary-address" name="beneficiary-address" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>
                <div class="inputs">
                    <div class="submit-btn-container">
                        <button type="button" onclick="back()" class="submit-btn">BACK</button>
                        <button type="submit" class="submit-btn" name="submit-btn">SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    
// date picker - disable future dates for birthdate
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;

  var datepicker = document.getElementById('beneficiary-birthdate');
  datepicker.setAttribute('type', 'date');
  datepicker.setAttribute('max', today);

</script>
<script src="../js/forms.js"></script>
<script src="../js/validations.js" defer></script>
</body>
</html>
