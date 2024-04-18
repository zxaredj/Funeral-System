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

    $benefactorID = handleFileUpload($_FILES['benefactor-ID']);
    $beneficiaryID = handleFileUpload($_FILES['beneficiary-ID']);
    $benefactorfirstname = mysqli_real_escape_string($connection, $_POST["benefactor-firstname"]);
    $benefactorlastname = mysqli_real_escape_string($connection, $_POST["benefactor-lastname"]);
    $benefactornumber = mysqli_real_escape_string($connection, $_POST["benefactor-number"]);
    $benefactoraddress = mysqli_real_escape_string($connection, $_POST["benefactor-address"]);
    $benefactoremail = mysqli_real_escape_string($connection, $_POST["benefactor-email"]);
    $planfor = mysqli_real_escape_string($connection, $_POST["plan-for"]);

    $beneficiaryfirstname = mysqli_real_escape_string($connection, $_POST["beneficiary-firstname"]);
    $beneficiarylastname = mysqli_real_escape_string($connection, $_POST["beneficiary-lastname"]);
    $beneficiarygender = mysqli_real_escape_string($connection, $_POST["beneficiary-gender"]);
    $beneficiarybirthdate = mysqli_real_escape_string($connection, $_POST["beneficiary-birthdate"]);
    $beneficiaryaddress = mysqli_real_escape_string($connection, $_POST["beneficiary-address"]);

    

    $chosenUrn = mysqli_real_escape_string($connection, $_POST["urn"]);
    $chosenPackage = mysqli_real_escape_string($connection, $_POST["package"]);
    $contactFirstName = mysqli_real_escape_string($connection, $_POST["contact-firstname"]);
    $contactLastName = mysqli_real_escape_string($connection, $_POST["contact-lastname"]);
    $contactNumber = mysqli_real_escape_string($connection, $_POST["contact-number"]);
    $contactEmail = mysqli_real_escape_string($connection, $_POST["contact-email"]);
    $contactRelationship = mysqli_real_escape_string($connection, $_POST["relationship"]);

        $query = "INSERT INTO pl_directcremation (benefactorID, benefactorFirstName, benefactorLastName, benefactorContact, benefactorAddress, 
        benefactorEmail, planFor, beneficiaryID, beneficiaryFirstName, beneficiaryLastName, beneficiaryGender, beneficiaryBirthdate, beneficiaryAddress, service, package, urn, contactFirstName, contactLastName, contactNumber, contactEmail, contactRelationship) VALUES ('$benefactorID','$benefactorfirstname', '$benefactorlastname', 
        '$benefactornumber', '$benefactoraddress', '$benefactoremail', '$planfor', '$beneficiaryID', '$beneficiaryfirstname', '$beneficiarylastname', 
        '$beneficiarygender', '$beneficiarybirthdate', '$beneficiaryaddress', 'Direct Cremation Service', '$chosenPackage', '$chosenUrn', '$contactFirstName', '$contactLastName', '$contactNumber', '$contactEmail', '$contactRelationship')";

        if (mysqli_query($connection, $query)) {
            header("Location: planning-info-modal.html");
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
<title>Planning | Direct Cremation</title>
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
    <form id="multi-step-form" action="" method="POST" enctype="multipart/form-data" onsubmit="return validateDirect()">

    <br>        
        <div class="form-1 active" id="form-1">

            <h2 class="info-title">BENEFACTOR'S PERSONAL INFORMATION</h2>
            <br>
                <div class="inputs">
                    <p class="docu-name">Please upload any valid ID</p>
                    <input type="file" id="benefactor-ID" name="benefactor-ID" required>
                </div>
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
            </div><br>

            <div class="form-2" id="form-2" style="display: none;">
                <h2 class="info-title">BENEFICIARY'S PERSONAL INFORMATION</h2>
                <br>
                <div class="inputs">
                    <div class="inputs">
                        <p class="docu-name">Please upload any valid ID</p>
                        <input type="file" id="beneficiary-ID" name="beneficiary-ID" required>
                    </div>
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
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
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
                        <button type="button" onclick="next()" class="submit-btn">NEXT</button>
                    </div>
                </div>
            </div>

    <div class="form-3" id="form-3" style="display: none;">
        <p class="choose-service">URN  <a href="../section-services/urns.php" target="_blank">See Urns here.</a></p>
        <br>
            <div class="inputs">
            <select id="urn" name="urn" required>
                <option value="" selected disabled>Select Urn</option>
                <option value="Plain Brass">Plain Brass</option>
                <option value="Plain Silver">Plain Silver</option>
                <option value="Dark Brown Gold Plated">Dark Brown Gold Plated</option>
                <option value="Plain Gold">Plain Gold</option>
                <option value="Bronze">Bronze</option>
                <option value="Radiance">Radiance</option>
                <option value="Gatsby">Gatsby</option>
                <option value="Chantique Gold">Chantique Gold</option>
                <option value="Plain Gray">Plain Gray</option>
                <option value="Marble Blue">Marble Blue</option>
                <option value="Marble Pink">Marble Pink</option>
                <option value="Marble Red">Marble Red</option>
                <option value="Marble Black">Marble Black</option>
                <option value="Marble White">Marble White</option>
                <option value="Glass Forest">Glass Forest</option>
                <option value="Glass Sea">Glass Sea</option>
                <option value="Glass Ocean">Glass Ocean</option>
                <option value="Glass Tree">Glass Tree</option>
                <option value="Glass Leaves">Glass Leaves</option>
                <option value="Marble Baby Blue">Marble Baby Blue</option>
                <option value="Marble Baby Brown">Marble Baby Brown</option>
                <option value="Marble Baby Pink">Marble Baby Pink</option>
                <option value="Marble Baby White">Marble Baby White</option>
            </select>
        </div> <br>
        <p class="choose-service">PACKAGE  <a href="../section-services/Cremation Services.html" target="_blank">See packages here.</a></p>
        <br>
            <div class="inputs">
            <select id="package" name="package" required>
                <option value="" selected disabled>Select package</option>
                <option value="Direct Cremation Package 1">Direct Cremation Package 1</option>
                <option value="Direct Cremation Package 2">Direct Cremation Package 2</option>

            </select>
        </div> 
            <br><hr>
            <br>

        <p class="choose-service">CONTACT PERSON PERSONAL INFORMATION</p>
        <br>

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
            <label for="contact-number">Contact Number</label>
            <input type="number" id="contact-number" name="contact-number" placeholder="09301938102" required>
        </div>

        <div class="inputs">
            <label for="contact-email">Email</label>
            <input type="email" id="contact-email" name="contact-email" placeholder="perpetualfuneralservices@gmail.com" required>
        </div>

        <div class="inputs">
            <label for="relationship">Relationship to the Beneficiary</label>
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
            <button type="button" onclick="back()" class="submit-btn">BACK</button>
            <button type="submit" class="submit-btn" name="submit-btn">SUBMIT</button>
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


  function validateDirect() {
   
    var contactfirstName = document.getElementById("contact-firstname").value;
    var contactlastName = document.getElementById("contact-lastname").value;
    var contactNumber = document.getElementById("contact-number").value;

    var textValidation = /^[a-zA-Z.]+(?:\s[a-zA-Z.]+)*$/;
    var numberValidation = /^[0-9]{11}$/;

    if(!textValidation.test(contactfirstName)) {
        alert("Invalid first name. Please input proper first name.");
        return false;
    }

    if(!textValidation.test(contactlastName)) {
        alert("Invalid last name. Please input proper last name.");
        return false;
    }

    if(!numberValidation.test(contactNumber)) {
        alert("Invalid contact number.");
        return false;
    }

    return true;
}



</script>
<script src="../js/forms.js"></script>
<script src="../js/validations.js" defer></script>
<script src="../js/planning-data.js" defer></script>

</body>
</html>