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


    if (isset($_POST['submit-btn'])) {

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
        $details_query = " SELECT * FROM `pickup` WHERE `id` = '$id'" ;
        $detail = mysqli_query($connection, $details_query);

        if (mysqli_num_rows($detail) > 0){ 
            while ($fetch_detail = mysqli_fetch_assoc($detail)) {
    ?>
<button type="button" onclick="window.location.href='../section-home/index.php#services'" class="submit-btn1">BACK</button>
<h1 class="title">PICK-UP OF DECEASED FORM</h1>

<div class="container">
    <div class="box-1">

    <form id="multi-step-form" action="" method="POST" enctype="multipart/form-data">
    <div class="form-1 active" id="form-1">

    <h2 class="info-title">DECEASED PERSONAL INFORMATION</h2>
        
          <div class="inputs1">
                <div class="image-docu">
                    <p class="docu-name">Death Certificate</p>
                    <a target="_blank" href="<?php echo $fetch_detail['death']; ?>">
                        <img src="<?php echo $fetch_detail['death']; ?>" style="width:80%; height:350px;">
                    </a>
                </div>
                <div class="image-docu">
                    <p class="docu-name">Release Paper</p>
                    <a target="_blank" href="<?php echo $fetch_detail['releasepaper']; ?>">
                        <img src="<?php echo $fetch_detail['releasepaper']; ?>" style="width:80%; height:350px;" >
                    </a>
                </div>
            </div>
      
            <div class="inputs">
                <label for="deceased-firstname">First Name</label>
                <input value="<?php echo $fetch_detail['deceasedFirstName']; ?>" type="text" id="deceased-firstname" name="deceased-firstname" placeholder="Juan" required>
            </div>
            
            <div class="inputs">
                <label for="deceased-lastname">Last Name</label>
                <input value="<?php echo $fetch_detail['deceasedLastName']; ?>" type="text" id="deceased-lastname" name="deceased-lastname" placeholder="Dela Cruz" required>
            </div>

            <div class="inputs">
                <div class="inputs">
                    <label for="location">Pick Up Location</label>
                    <input value="<?php echo $fetch_detail['location']; ?>" type="text" id="location" name="location" placeholder="450 A. Mabini St, Poblacion, Caloocan, Metro Manila - Caloocan City Medical Center (South)" required>
                </div>
                <div class="inputs">
                    <label for="date">Pick Up Date</label>
                    <input value="<?php echo $fetch_detail['date']; ?>" type="text" id="pickup-date" name="pickup-date" required>
                </div>

                <div class="inputs">
                    <label for="time">Pick Up Time</label>
                    <input value="<?php echo $fetch_detail['time']; ?>"  type="text" id="pickup-time" name="pickup-time" required>
                </div>
            </div>
            <h2 class="info-title">CONTACT PERSON PERSONAL INFORMATION</h2>

            <div class="inputs">
                <label for="deceased-lastname">First Name</label>
                <input value="<?php echo $fetch_detail['contactFirstName']; ?>" type="text" id="contact-firstname" name="contact-firstname" placeholder="Juan" required>
            </div>

            <div class="inputs">
                <label for="deceased-lastname">Last Name</label>
                <input value="<?php echo $fetch_detail['contactLastName']; ?>" type="text" id="contact-firstname" name="contact-firstname" placeholder="Juan" required>
            </div>

            <div class="inputs">
                <label for="deceased-lastname">Contact Number</label>
                <input value="<?php echo $fetch_detail['number']; ?>" type="number" id="number" name="number" placeholder="09301938102" required>
            </div>
            
            <div class="inputs">
                <label for="deceased-lastname">Email</label>
                <input value="<?php echo $fetch_detail['email']; ?>" type="email" id="email" name="email" placeholder="perpetualfuneralservices@gmail.com" required>
            </div>

            <div class="inputs">
                <label for="deceased-lastname">Relationship to the Deceased</label>
                <input value="<?php echo $fetch_detail['relationship']; ?>" type="text" id="contact-firstname" name="contact-firstname" placeholder="Juan" required>
            </div>
    </div>
            <div class="submit-btn-container">
                <button type="button" onclick="window.location.href = 'includes/pick_up_form.php'" class="submit-btn">ACTIVATE  </button>
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
