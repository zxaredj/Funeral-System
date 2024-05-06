<?php
session_start();
include '../database/config.php';


if(isset($_GET['view'])) {
    $id = filter_var($_GET['view'], FILTER_VALIDATE_INT); 
    if($id === false) {
        echo "Error: Invalid 'view' parameter.";
        exit; 
    }
} else {
    echo "Error: Missing 'view' parameter.";
    exit; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PFS | Form</title>
    <link rel="stylesheet" href="../css/forms-style.css">
    <link rel="preconnection" href="https://fonts.googleapis.com">
    <link rel="preconnection" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<?php
        $burial_details_query = " SELECT * FROM `pl_burial` WHERE `id` = '$id'" ;
        $detail = mysqli_query($connection, $burial_details_query);

        if (mysqli_num_rows($detail) > 0){ 
            while ($fetch_detail = mysqli_fetch_assoc($detail)) {
    ?>
<button type="button" onclick="window.location.href='includes/burial_service.php'" class="submit-btn1">BACK</button>
<h1 class="title">PICK-UP OF DECEASED FORM</h1>

<div class="container">
    <div class="box-1">

    <form id="multi-step-form" action="" method="POST" enctype="multipart/form-data">
    <div class="form-1 active" id="form-1">

    <h2 class="info-title">DECEASED PERSONAL INFORMATION</h2>
        
          <div class="inputs">
                <div class="image-docu">
                    <p class="docu-name">Benefactor ID</p>
                    <a target="_blank" href="<?php echo $fetch_detail['benefactorID']; ?>">
                        <img src="<?php echo $fetch_detail['benefactorID']; ?>" style="width:70%; height:210px;">
                    </a>
                </div>
            </div>
      
            <div class="inputs">
                <label for="benefactor-firstname">Benefactor Firstname</label>
                <input value="<?php echo $fetch_detail['benefactorFirstName']; ?>" type="text" id="benefactor-firstname" name="benefactor-firstname" >
            </div>
            
            <div class="inputs">
                <label for="benefactor-lastname">Benefactor Lastname</label>
                <input value="<?php echo $fetch_detail['benefactorLastName']; ?>" type="text" id="benefactor-firstname" name="benefactor-firstname">
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="benefactor-contact">Benefactor Contact</label>
                    <input value="<?php echo $fetch_detail['benefactorContact']; ?>" type="text" id="benefactor-contact" name="benefactor-contact">
                </div>
                <div class="inputs">
                    <label for="benefactor-address">Benefactor Address</label>
                    <input value="<?php echo $fetch_detail['benefactorAddress']; ?>" type="text" id="benefactor-address" name="benefactor-address">
                </div>
                <div class="inputs">
                    <label for="benefactor-email">Benefactor Email</label>
                    <input value="<?php echo $fetch_detail['benefactorEmail']; ?>" type="email" id="benefactor-contact" name="benefactor-contact">
                </div>
            </div>
            <div class="inputs">
                    <label for="benefactor-plan">Plan For:</label>
                    <input value="<?php echo $fetch_detail['planFor']; ?>" type="text" id="benefactor-plan" name="benefactor-plan">
            </div>

            <h2 class="info-title">BENEFICIARY INFORMATION</h2>

            <div class="inputs">
                <div class="image-docu">
                    <p class="docu-name">Beneficiary ID</p>
                    <a target="_blank" href="<?php echo $fetch_detail['beneficiaryID']; ?>">
                        <img src="<?php echo $fetch_detail['benefactorID']; ?>" style="width:70%; height:210px;">
                    </a>
                </div>
            </div>

            <div class="inputs">
                <label for="beneficiary-firstname">Beneficiary Firstname</label>
                <input value="<?php echo $fetch_detail['beneficiaryFirstName']; ?>" type="text" id="beneficiary-firstname" name="beneficiary-firstname" >
            </div>
            
            <div class="inputs">
                <label for="beneficiary-lastname">Beneficiary Lastname</label>
                <input value="<?php echo $fetch_detail['beneficiaryLastName']; ?>" type="text" id="beneficiary-firstname" name="beneficiary-firstname">
            </div>

            <div class="inputs">
                <label for="beneficiary-gender">Beneficiary Gender</label>
                <input value="<?php echo $fetch_detail['beneficiaryGender']; ?>" type="text" id="beneficiary-gender" name="beneficiary-gender">
            </div>

            <div class="inputs">
                <label for="beneficiary-birthdate">Beneficiary Birthdate</label>
                <input value="<?php echo $fetch_detail['beneficiaryBirthdate']; ?>" type="text" id="beneficiary-birthdate" name="beneficiary-birthdate">
            </div>

            <div class="inputs">
                    <label for="beneficiary-address">Beneficiary Address</label>
                    <input value="<?php echo $fetch_detail['beneficiaryAddress']; ?>" type="text" id="beneficiary-address" name="beneficiary-address">
            </div>

            <div class="inputs">
                    <label for="service">Service</label>
                    <input value="<?php echo $fetch_detail['service']; ?>" type="text" id="service" name="service">
            </div>

            <div class="inputs">
                    <label for="package">Package</label>
                    <input value="<?php echo $fetch_detail['package']; ?>" type="text" id="package" name="package">
            </div>

            <div class="inputs">
                    <label for="package-price">Package Price</label>
                    <input value="<?php echo $fetch_detail['packagePrice']; ?>" type="text" id="package-price" name="package-price">
            </div>

            <div class="inputs">
                    <label for="casket">Casket</label>
                    <input value="<?php echo $fetch_detail['casket']; ?>" type="text" id="casket" name="casket">
            </div>

            <div class="inputs">
                    <label for="casket-price">Casket Price</label>
                    <input value="<?php echo $fetch_detail['casketPrice']; ?>" type="text" id="casket-price" name="casket-price">
            </div>

            <div class="inputs">
                    <label for="facility-type">Facility Type</label>
                    <input value="<?php echo $fetch_detail['facilityType']; ?>" type="text" id="facility-type" name="facility-type">
            </div>

            <div class="inputs">
                    <label for="facililty">Facility</label>
                    <input value="<?php echo $fetch_detail['facility']; ?>" type="text" id="facililty" name="facililty">
            </div>

            <div class="inputs">
                    <label for="facility-price">Facility Price</label>
                    <input value="<?php echo $fetch_detail['facilityPrice']; ?>" type="text" id="facility-price" name="facility-price">
            </div>

            <div class="inputs">
                    <label for="days">Days</label>
                    <input value="<?php echo $fetch_detail['days']; ?>" type="text" id="days" name="days">
            </div>

            <div class="inputs">
                    <label for="facililty-duration">Facility Duration</label>
                    <input value="<?php echo $fetch_detail['facilityDuration']; ?>" type="text" id="facililty-duration" name="facililty-duration">
            </div>

            <div class="inputs">
                    <label for="cemetery">Cemetery</label>
                    <input value="<?php echo $fetch_detail['cemetery']; ?>" type="text" id="cemetery" name="cemetery">
            </div>

            <div class="inputs">
                    <label for="total">Total</label>
                    <input value="<?php echo $fetch_detail['total']; ?>" type="text" id="total" name="total">
            </div>

            <h2 class="info-title">CONTACT INFORMATION</h2>

            <div class="inputs">
                    <label for="contact-firstname">Contact Firstname</label>
                    <input value="<?php echo $fetch_detail['contactFirstName']; ?>" type="text" id="contact-firstname" name="contact-firstname">
            </div>

            <div class="inputs">
                    <label for="contact-lastname">Contact Lastname</label>
                    <input value="<?php echo $fetch_detail['contactLastName']; ?>" type="text" id="contact-lastname" name="contact-lastname">
            </div>

            <div class="inputs">
                    <label for="contact-number">Contact Number</label>
                    <input value="<?php echo $fetch_detail['contactNumber']; ?>" type="text" id="contact-number" name="contact-number">
            </div>

            <div class="inputs">
                    <label for="contact-email">Contact Email</label>
                    <input value="<?php echo $fetch_detail['contactEmail']; ?>" type="email" id="contact-email" name="contact-email">
            </div>

            <div class="inputs">
                    <label for="contact-relationship">Contact Relationship</label>
                    <input value="<?php echo $fetch_detail['contactRelationship']; ?>" type="text" id="contact-relationship" name="contact-relationship">
            </div>

            <div class="inputs">
                    <label for="add-obituary">Add Obituary?</label>
                    <input value="<?php echo $fetch_detail['add_obituary']; ?>" type="text" id="add-obituary" name="add-obituary">
            </div>

            <div class="inputs">
                    <label for="timestamp">Timestamp</label>
                    <input value="<?php echo $fetch_detail['timestamp']; ?>" type="text" id="timestamp" name="timestamp">
            </div>

    </div>
            <div class="submit-btn-container">
                <button type="button" style="margin-right: 20px; width: 120px;" onclick="window.location.href = 'includes/pick_up_form.php'" class="submit-btn">ACTIVATE</button>
            </div>
    <?php 
        }
    }
    ?>
    
        </form>
        
    </div>
</div>

<script src="../js/forms.js"></script>
<script src="../js/validations.js" defer></script>
</body>
</html>
