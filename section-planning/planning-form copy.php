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

    $benefactorID = handleFileUpload($_FILES['benefactor-ID ']);
    $beneficiaryID = handleFileUpload($_FILES['beneficiary-ID']);
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

    $chosenService = mysqli_real_escape_string($connection, $_POST["service"]);
    $chosenCasket = mysqli_real_escape_string($connection, $_POST["casket"]);
    $chosenUrn = mysqli_real_escape_string($connection, $_POST["urn"]);
    $chosenFacilityType = mysqli_real_escape_string($connection, $_POST["facility-type"]);
    $chosenFacility = mysqli_real_escape_string($connection, $_POST["facility"]);
    $days = mysqli_real_escape_string($connection, $_POST["days"]);
    $cementeryAddress = mysqli_real_escape_string($connection, $_POST["cementeryAddress"]);
    $contactFirstName = mysqli_real_escape_string($connection, $_POST["contact-firstname"]);
    $contactLastName = mysqli_real_escape_string($connection, $_POST["contact-lastname"]);
    $contactNumber = mysqli_real_escape_string($connection, $_POST["contact-number"]);
    $contactEmail = mysqli_real_escape_string($connection, $_POST["contact-email"]);
    $contactRelationship = mysqli_real_escape_string($connection, $_POST["relationship"]);

    // if ($chosenService === "Burial Service") {
        $query = "INSERT INTO pl_burial (benefactorID, benefactorFirstName, benefactorLastName, benefactorContact, benefactorAddress, 
        benefactorEmail, planFor, beneficiaryID, beneficiaryFirstName, beneficiaryLastName, beneficiaryGender, beneficiaryBirthdate, beneficiaryAddress, service, casket, facilityType,
        facility, days, cemetery, contactFirstName, contactLastName, contactNumber, contactEmail, contactRelationship) VALUES ('$benefactorID','$benefactorfirstname', '$benefactorlastname', 
        '$benefactornumber', '$benefactoraddress', '$benefactoremail', '$planfor', '$beneficiaryID', '$beneficiaryfirstname', '$beneficiarylastname', 
        '$beneficiarygender', '$beneficiarybirthdate', '$beneficiaryaddress', '$chosenService', '$chosenCasket', '$chosenFacilityType', '$chosenFacility',
        '$days', '$cementeryAddress', '$contactFirstName', '$contactLastName', '$contactNumber', '$contactEmail', '$contactRelationship')";

        if (mysqli_query($connection, $query)) {
            header("Location: planning-info-modal.html");
            exit();
        } else {
            echo '<script>alert("Submission Failed!")</script>';
        }
//     } elseif ($chosenService === "Traditional Service") {
//         // Process traditional service data
//         echo "error";
//     } elseif ($chosenService === "Memorial Gathering After Cremation") {
//         // Process memorial gathering data
//         echo "error";
//     } elseif ($chosenService === "Direct Cremation") {
//         // Process direct cremation data
//         echo "error";
//     }
// }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PFS | Planning</title>
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
            <h1><a href = '../section-about/About Us.html' class="name">PERPETUAL FUNERAL SERVICES</a></h1>
                <ul>
                    <li><a href="../section-home/index.php">HOME</a></li>
                    <li><a href="../section-about/About Us.html">ABOUT</a></li>
                    <li><a href="../section-services/Service Section.html">SERVICES</a></li>
                    <li><a href="../section-form/pickup-form.php">FORM</a></li>
                    <!-- <li><a href="../section-planning/planning-form.php">PLANNING</a></li> -->
                    <!-- <li><a href="../section-obituaries/obituaries.php">OBITUARY</a></li> -->
                    <li><a href="../section-login-signup/signup.php">SIGN UP</a></li>
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
                        <p class="docu-name">Please upload any valid ID:</p>
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
                        <button type="button" onclick="next()" class="submit-btn">NEXT</button>
                    </div>
                </div>
            </div>

    <div class="form-3" id="form-3" style="display: none;">
    <h2 class="info-title">SERVICE OPTION</h2><br>

      <p>Please pick your chosen service:</p>
      <br>
      <input type="radio" id="service-burial" name="service" value="Burial Service" onclick="optionService('option1'); serviceName('Burial Service');">
      <label for="service-burial">Burial Service</label><br>

      <input type="radio" id="service-traditional" name="service" value="Traditional Service" onclick="optionService('option2'); serviceName('Traditional Service');">
      <label for="service-traditional">Traditional Cremation Service</label><br>

      <input type="radio" id="service-memorial" name="service" value="Memorial Gathering After Cremation Service" onclick="optionService('option3'); serviceName('Memorial Gathering After Cremation Service');">
      <label for="service-memorial">Memorial Gathering After Cremation</label><br>

      <input type="radio" id="service-direct" name="service" value="Direct Cremation Service" onclick="optionService('option4'); serviceName('Direct Cremation Service');">
      <label for="service-direct">Direct Cremation</label>
    <br>

<!-- BURIAL SERVICE !-->
  <div id="option1" class="hidden1">
        <br><br>

        <p class="choose-service">CASKET  <a href="../section-services/caskets.php" target="_blank">See Caskets here.</a></p>
        <br>
            <div class="inputs">
            <select id="casket" name="casket" required>
                <option value="" selected disabled>Select Casket</option>
                <option value="Non-gasketed Red Casket">Non-gasketed Red Casket</option>
                <option value="Non-gasketed Silver Casket">Non-gasketed Silver Casket</option>
                <option value="Non-gasketed Crepe Silver Casket">Non-gasketed Crepe Silver Casket</option>
                <option value="Non-gasketed White Casket">Non-gasketed White Casket</option>
                <option value="Non-gasketed Light Blue Casket">Non-gasketed Light Blue Casket</option>
                <option value="Non-gasketed Royal Blue Casket">Non-gasketed Royal Blue Casket</option>
                <option value="Non-gasketed Yellow Casket">Non-gasketed Yellow Casket</option>
                <option value="Non-gasketed Blue Casket">Non-gasketed Blue Casket</option>
                <option value="Non-gasketed White Gold Casket">Non-gasketed White Gold Casket</option>
                <option value="Non-gasketed White Pink Casket">Non-gasketed White Pink Casket</option>
                <option value="Non-gasketed Light Pink Casket">Non-gasketed Light Pink Casket</option>
                <option value="Non-gasketed Copper Casket">Non-gasketed Copper Casket</option>
                <option value="Non-gasketed Rose Pink Casket">Non-gasketed Rose Pink Casket</option>
                <option value="Non-gasketed Dark Green Casket">Non-gasketed Dark Green Casket</option>
                <option value="Non-gasketed Green Casket">Non-gasketed Green Casket</option>
                <option value="Solid Dark Mahogany Casket">Solid Dark Mahogany Casket</option>
                <option value="Solid Poplar Gold Stripe Casket">Solid Poplar Gold Stripe Casket</option>
                <option value="Solid Poplar Oak Casket">Solid Poplar Oak Casket</option>
                <option value="Solid Poplar with Gold Casket">Solid Poplar with Gold Casket</option>
                <option value="Solid Crepe Copper Casket">Solid Poplar Brown Gold Casket</option>
                <option value="Small Hardwood Infant Casket">Small Hardwood Infant Casket</option>
            </select>
        </div> 
            <br><hr>
            <br>
            
            <div class="inputs">
                <p class="choose-service">FUNERAL ARRANGEMENTS</p>
                <br>

            <div class="radio-container">
                <input type="radio" id="facility-funeralhome1" class="services-option" name="facility-type" value="Funeral Service at Funeral Home" onclick="optionFacility('facility-option1'); chosenFacilitiy('Funeral Service at Funeral Home');">
                <label for="facility-funeralhome1" class="label-name">Funeral Service at Funeral Home</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="facility-home2" class="services-option" name="facility-type" value="Burial Service" onclick="optionFacility('facility-option2'); chosenFacilitiy('Funeral Service at Home');">
                <label for="facility-home2" class="label-name">Funeral Service at Home</label>
            </div>  

            <input type="hidden" id="chosen-facility" name="chosen-facility">
            <br>
            
    <div id="facility-option1" class="hidden2">    
        <div class="inputs">
        <label for="facility">Facility   <a href="../section-services/facilities.php" target="_blank">See facilities here.</a></label>
            <select id="facility" name="facility" required>
                <option value="" selected disabled>Select Facility</option>
                <option value="Air-Conditioned Facility 1">Air-Conditioned Facility 1</option>
                <option value="Air-Conditioned Facility 2">Air-Conditioned Facility 2</option>
                <option value="Non-Air-Conditioned Facility 1">Non-Air-Conditioned Facility 1</option>
                <option value="Non-Air-Conditioned Facility 2">Non-Air-Conditioned Facility 2</option>
            </select>
        </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="days">Number of Days</label>
                    <input type="number" id="days" name="days" required>
                </div>
            </div>
        </div>
            <br>
            
        <div id="facility-option2" class="hidden2">
            <div class="inputs">
                <div class="inputs">
                    <label for="facility">Address</label>
                    <input type="text" id="facility" name="facility" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>

                <div class="inputs">
                <div class="inputs">
                    <label for="days">Number of Days</label>
                    <input type="number" id="days" name="days" required>
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
</div>
    
<!-- TRADITIONAL CREMATION SERVICE -->
  <div id="option2" class="hidden1">
  <br><br>

        <p class="choose-service">CASKET  <a href="../section-services/caskets.php" target="_blank">See Caskets here.</a></p>
        <br>
            <div class="inputs">
            <select id="casket" name="casket" required>
                <option value="" selected disabled>Select Casket</option>
                <option value="Non-gasketed Red Casket">Non-gasketed Red Casket</option>
                <option value="Non-gasketed Silver Casket">Non-gasketed Silver Casket</option>
                <option value="Non-gasketed Crepe Silver Casket">Non-gasketed Crepe Silver Casket</option>
                <option value="Non-gasketed White Casket">Non-gasketed White Casket</option>
                <option value="Non-gasketed Light Blue Casket">Non-gasketed Light Blue Casket</option>
                <option value="Non-gasketed Royal Blue Casket">Non-gasketed Royal Blue Casket</option>
                <option value="Non-gasketed Yellow Casket">Non-gasketed Yellow Casket</option>
                <option value="Non-gasketed Blue Casket">Non-gasketed Blue Casket</option>
                <option value="Non-gasketed White Gold Casket">Non-gasketed White Gold Casket</option>
                <option value="Non-gasketed White Pink Casket">Non-gasketed White Pink Casket</option>
                <option value="Non-gasketed Light Pink Casket">Non-gasketed Light Pink Casket</option>
                <option value="Non-gasketed Copper Casket">Non-gasketed Copper Casket</option>
                <option value="Non-gasketed Rose Pink Casket">Non-gasketed Rose Pink Casket</option>
                <option value="Non-gasketed Dark Green Casket">Non-gasketed Dark Green Casket</option>
                <option value="Non-gasketed Green Casket">Non-gasketed Green Casket</option>
                <option value="Solid Dark Mahogany Casket">Solid Dark Mahogany Casket</option>
                <option value="Solid Poplar Gold Stripe Casket">Solid Poplar Gold Stripe Casket</option>
                <option value="Solid Poplar Oak Casket">Solid Poplar Oak Casket</option>
                <option value="Solid Poplar with Gold Casket">Solid Poplar with Gold Casket</option>
                <option value="Solid Crepe Copper Casket">Solid Poplar Brown Gold Casket</option>
                <option value="Small Hardwood Infant Casket">Small Hardwood Infant Casket</option>
            </select>
        </div> 
        <br>

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
        </div> 

            <br><hr>
            <br>

            <div class="inputs">
                <p class="choose-service">FUNERAL ARRANGEMENTS</p>
                <br>

            <div class="radio-container">
                <input type="radio" id="facility-funeralhome3" class="services-option" name="facility-type" value="Funeral Service at Funeral Home" onclick="optionFacility('facility-option3')">
                <label for="facility-funeralhome3" class="label-name">Funeral Service at Funeral Home</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="facility-home4" class="services-option" name="facility-type" value="Burial Service" onclick="optionFacility('facility-option4')">
                <label for="facility-home4" class="label-name">Funeral Service at Home</label>
            </div>
 
            <br>
            
    <div id="facility-option3" class="hidden2">    
    <div class="inputs">
        <label for="facility">Facility   <a href="../section-services/facilities.php" target="_blank">See facilities here.</a></label>
            <select id="facility" name="facility" required>
                <option value="" selected disabled>Select Facility</option>
                <option value="Air-Conditioned Facility 1">Air-Conditioned Facility 1</option>
                <option value="Air-Conditioned Facility 2">Air-Conditioned Facility 2</option>
                <option value="Non-Air-Conditioned Facility 1">Non-Air-Conditioned Facility 1</option>
                <option value="Non-Air-Conditioned Facility 2">Non-Air-Conditioned Facility 2</option>
            </select>
        </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="days">Number of Days</label>
                    <input type="number" id="days" name="days" required>
                </div>
            </div>

        </div>
            <br>
            
        <div id="facility-option4" class="hidden2">
            <div class="inputs">
                <div class="inputs">
                    <label for="facility">Address</label>
                    <input type="text" id="facility" name="facility" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="number-days4">Number of Days</label>
                    <input type="number" id="number-days4" name="number-days4" required>
                </div>
            </div>
        </div>
        </div>
        <hr><br>

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

<!-- MEMORIAL GATHERING AFTER CREMATION SERVICE -->
  <div id="option3" class="hidden1">
  <br><br>

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
        </div> 
            <br><hr>
            <br>

            <div class="inputs">
                <p class="choose-service">MEMORIAL GATHERING ARRANGEMENTS</p><br>
            <div class="radio-container">
                <input type="radio" id="facility-funeralhome5" class="services-option" name="facility-type" value="Funeral Service at Funeral Home" onclick="optionFacility('facility-option5')">
                <label for="facility-funeralhome5" class="label-name">Memorial Gathering at Funeral Home</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="facility-home5" class="services-option" name="facility-type" value="Burial Service" onclick="optionFacility('facility-option6')">
                <label for="facility-home5" class="label-name">Memorial Gathering at Home</label>
            </div><br>
            
    <div id="facility-option5" class="hidden2">    
            <div class="inputs">
            <label for="facility">Facility   <a href="../section-services/facilities.php" target="_blank">See facilities here.</a></label>
            <select id="facility" name="facility" required>
                <option value="" selected disabled>Select Facility</option>
                <option value="Air-Conditioned Facility 1">Air-Conditioned Facility 1</option>
                <option value="Air-Conditioned Facility 2">Air-Conditioned Facility 2</option>
                <option value="Non-Air-Conditioned Facility 1">Non-Air-Conditioned Facility 1</option>
                <option value="Non-Air-Conditioned Facility 2">Non-Air-Conditioned Facility 2</option>
            </select>
        </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="days">Number of Days</label>
                    <input type="number" id="days" name="days" required>
                </div>
            </div>
        </div>
            <br>
            
        <div id="facility-option6" class="hidden2">
            <div class="inputs">
                <div class="inputs">
                    <label for="facility">Address</label>
                    <input type="text" id="facility" name="facility" placeholder="511 A. Mabini St., Caloocan City" required>
                </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="number-days6">Number of Days</label>
                    <input type="number" id="number-days6" name="number-days6" required>
                </div>
            </div>
        </div>
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

<!-- DIRECT CREMATION SERVICE -->
<div id="option4" class="hidden1">
  <br><br>
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
        </div> 
        <br><hr><br>

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
        <div class="inputs">
            <div class="submit-btn-container">
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
