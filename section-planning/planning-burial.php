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

    $chosenFacilityType = $_POST["facility-type"];
    $chosenFacility = '';
    $days = 0;
    $chosenCasketPrice = 0;
    $chosenFacilityPrice = 0;
    $chosenPackagePrice = 0;
    $facilityDuration = 0;


    if ($chosenFacilityType === "Funeral Service at Funeral Home") {
        $chosenFacility = mysqli_real_escape_string($connection, $_POST["facility1"]);
        $days = mysqli_real_escape_string($connection, $_POST["days1"]);
    } elseif ($chosenFacilityType === "Funeral Service at Home") {
        $chosenFacility = mysqli_real_escape_string($connection, $_POST["facility2"]);
        $days = mysqli_real_escape_string($connection, $_POST["days2"]);
    }

    $numberDays = $days;

    $chosenCasket = mysqli_real_escape_string($connection, $_POST["casket"]);
    $chosenPackage = mysqli_real_escape_string($connection, $_POST["package"]);
    $cementeryAddress = mysqli_real_escape_string($connection, $_POST["cementeryAddress"]);
    $contactFirstName = mysqli_real_escape_string($connection, $_POST["contact-firstname"]);
    $contactLastName = mysqli_real_escape_string($connection, $_POST["contact-lastname"]);
    $contactNumber = mysqli_real_escape_string($connection, $_POST["contact-number"]);
    $contactEmail = mysqli_real_escape_string($connection, $_POST["contact-email"]);
    $contactRelationship = mysqli_real_escape_string($connection, $_POST["relationship"]);

    
    $casketQuery = "SELECT price FROM caskets WHERE name = '$chosenCasket'";
    $casketResult = mysqli_query($connection, $casketQuery);

    if(mysqli_num_rows($casketResult) > 0) {
        $casketRow = mysqli_fetch_assoc($casketResult);
        $chosenCasketPrice = $casketRow['price'];
    } else {
        $chosenCasketPrice = 0;
    }

    $facilityQuery = "SELECT price FROM facilities WHERE name = '$chosenFacility'";
    $facilityResult = mysqli_query($connection, $facilityQuery);

    if(mysqli_num_rows($facilityResult) > 0) {
        $facilityRow = mysqli_fetch_assoc($facilityResult);
        $chosenFacilityPrice = $facilityRow['price'];
    } else {
        $chosenFacilityPrice = 0;
    }
    

    $packageQuery = "SELECT price FROM package_burial WHERE name = '$chosenPackage'";
    $packageResult = mysqli_query($connection, $packageQuery);

    if(mysqli_num_rows($packageResult) > 0) {
        $packageRow = mysqli_fetch_assoc($packageResult);
        $chosenPackagePrice = $packageRow['price'];
    } else {
        $chosenPackagePrice = 0;
    }
   
    $facilityDuration = $chosenFacilityPrice * $numberDays;
    $total = $chosenCasketPrice + $chosenPackagePrice + $facilityDuration;

    $query = "INSERT INTO pl_burial (benefactorID, benefactorFirstName, benefactorLastName, benefactorContact, benefactorAddress, 
    benefactorEmail, planFor, beneficiaryID, beneficiaryFirstName, beneficiaryLastName, beneficiaryGender, beneficiaryBirthdate, beneficiaryAddress, service, package, packagePrice, casket, casketPrice, facilityType,
    facility, facilityPrice, days, facilityDuration, cemetery, total, contactFirstName, contactLastName, contactNumber, contactEmail, contactRelationship) VALUES ('$benefactorID','$benefactorfirstname', '$benefactorlastname', 
    '$benefactornumber', '$benefactoraddress', '$benefactoremail', '$planfor', '$beneficiaryID', '$beneficiaryfirstname', '$beneficiarylastname', 
    '$beneficiarygender', '$beneficiarybirthdate', '$beneficiaryaddress', 'Burial Service', '$chosenPackage', '$chosenPackagePrice', '$chosenCasket', '$chosenCasketPrice', '$chosenFacilityType', '$chosenFacility', '$chosenFacilityPrice',
    '$days', '$facilityDuration', '$cementeryAddress', '$total', '$contactFirstName', '$contactLastName', '$contactNumber', '$contactEmail', '$contactRelationship')";

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
<title>Planning | Burial</title>
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
    <form id="multi-step-form" action="" method="POST" enctype="multipart/form-data" onsubmit="return validateBurial()">

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
        <p class="choose-service">CASKET  <a href="../section-services/caskets.php" target="_blank">See Caskets here.</a></p>
        <br>
            <div class="inputs">
            <select id="casket" name="casket" required>
                <option value="" selected disabled>Select Casket</option>
                <option value="Non-gasketed Red Casket">Non-gasketed Red Casket - ₱160,000</option>
                <option value="Non-gasketed Silver Casket">Non-gasketed Silver Casket - ₱170,000</option>
                <option value="Non-gasketed Crepe Silver Casket">Non-gasketed Crepe Silver Casket - ₱180,000</option>
                <option value="Non-gasketed White Casket">Non-gasketed White Casket - ₱165,000</option>
                <option value="Non-gasketed Light Blue Casket">Non-gasketed Light Blue Casket - ₱170,000</option>
                <option value="Non-gasketed Royal Blue Casket">Non-gasketed Royal Blue Casket - ₱170,000</option>
                <option value="Non-gasketed Yellow Casket">Non-gasketed Yellow Casket - ₱170,000</option>
                <option value="Non-gasketed Blue Casket">Non-gasketed Blue Casket - ₱160,000</option>
                <option value="Non-gasketed White Gold Casket">Non-gasketed White Gold Casket - ₱150,000</option>
                <option value="Non-gasketed White Pink Casket">Non-gasketed White Pink Casket - ₱170,000</option>
                <option value="Non-gasketed Light Pink Casket">Non-gasketed Light Pink Casket - ₱175,000</option>
                <option value="Non-gasketed Copper Casket">Non-gasketed Copper Casket - ₱180,000</option>
                <option value="Non-gasketed Rose Pink Casket">Non-gasketed Rose Pink Casket - ₱175,000</option>
                <option value="Non-gasketed Dark Green Casket">Non-gasketed Dark Green Casket - ₱180,000</option>
                <option value="Non-gasketed Green Casket">Non-gasketed Green Casket - ₱160,000</option>
                <option value="Solid Dark Mahogany Casket">Solid Dark Mahogany Casket - ₱175,000</option>
                <option value="Solid Poplar Gold Stripe Casket">Solid Poplar Gold Stripe Casket - ₱170,000</option>
                <option value="Solid Poplar Oak Casket">Solid Poplar Oak Casket - ₱180,000</option>
                <option value="Solid Poplar with Gold Casket">Solid Poplar with Gold Casket - ₱180,000</option>
                <option value="Solid Crepe Copper Casket">Solid Crepe Copper Casket - ₱165,000</option>
                <option value="Solid Poplar Brown Gold Casket">Solid Poplar Brown Gold Casket - ₱175,000</option>
                <option value="Small Hardwood Infant Casket">Small Hardwood Infant Casket - ₱20,000</option>
            </select>
        </div> <br>
        <p class="choose-service">PACKAGE  <a href="../section-services/Burial Services.html" target="_blank">See packages here.</a></p>
        <br>
            <div class="inputs">
            <select id="package" name="package" required>
                <option value="" selected disabled>Select package</option>
                <option value="Burial Package 1">Burial Package 1 - ₱45,000</option>
                <option value="Burial Package 2">Burial Package 2 - ₱40,000</option>

            </select>
        </div> 
            <br><hr>
            <br>
            
            <div class="inputs">
                <p class="choose-service">FUNERAL ARRANGEMENTS</p>
                <br>

            <div class="radio-container">
                <input type="radio" id="facility-type1" class="services-option" name="facility-type" value="Funeral Service at Funeral Home" onclick="optionFacility('facility-option1'); chosenFacility('Funeral Service at Funeral Home');">
                <label for="facility-type" class="label-name">Funeral Service at Funeral Home</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="facility-type2" class="services-option" name="facility-type" value="Funeral Service at Home" onclick="optionFacility('facility-option2'); chosenFacility('Funeral Service at Home');">
                <label for="facility-type" class="label-name">Funeral Service at Home</label>
            </div>  
            <br>
            
    <div id="facility-option1" class="hidden2">    
        <div class="inputs">
        <label for="facility1">Facility   <a href="../section-services/facilities.php" target="_blank">See facilities here.</a></label>
            <select id="facility1" name="facility1">
                <option value="" selected disabled>Select Facility</option>
                <option value="Air-Conditioned Facility 1">Air-Conditioned Facility 1 - ₱8,000/day</option>
                <option value="Air-Conditioned Facility 2">Air-Conditioned Facility 2 - ₱8,000/day</option>
                <option value="Non-Air-Conditioned Facility 1">Non-Air-Conditioned Facility 1 - ₱3,500/day</option>
                <option value="Non-Air-Conditioned Facility 2">Non-Air-Conditioned Facility 2 - ₱3,500/day</option>
            </select>
        </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="days1">Number of Days</label>
                    <input type="number" id="days1" name="days1">
                </div>
            </div>
        </div>
            <br>
            
        <div id="facility-option2" class="hidden2">
            <div class="inputs">
                <div class="inputs">
                    <label for="facility2">Address</label>
                    <input type="text" id="facility2" name="facility2" placeholder="511 A. Mabini St., Caloocan City">
                </div>

                <div class="inputs">
                <div class="inputs">
                    <label for="days2">Number of Days</label>
                    <input type="number" id="days2" name="days2">
                </div>
            </div>
        </div>
        </div>
        <br><hr>
        <br>

        <p class="choose-service">BURIAL ARRANGEMENTS</p>
        <br>

        <div class="inputs">
            <div class="inputs">
                <label for="cementeryAddress">Cemetery Address</label>
                <input type="text" id="cementeryAddress" name="cementeryAddress" placeholder=" C3 Road La Loma Compound, Caloocan, Metro Manila" required>
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
    </div>
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


  function validateBurial() {
    var facilityType1 = document.getElementById("facility-type1").checked;
    var facilityType2 = document.getElementById("facility-type2").checked;

    if (!facilityType1 && !facilityType2) {
        alert("Please select a facility type.");
        return false;
    }

    if (facilityType1) {
        var facility1 = document.getElementById("facility1").value;
        var days1 = document.getElementById("days1").value;

        if (facility1 === "" || days1 === "") {
            alert("Please select a facility and provide the number of days for Funeral Service at Funeral Home.");
            return false;
        }
    }

    if (facilityType2) {
        var facility2 = document.getElementById("facility2").value;
        var days2 = document.getElementById("days2").value;

        if (facility2 === "" || days2 === "") {
            alert("Please provide the address and number of days for Funeral Service at Home.");
            return false;
        }
    }

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
