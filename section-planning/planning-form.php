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

<style>
    .button-container {
        margin-top: 40px;
        margin-bottom: 60px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .button-container button {
        width: calc(50% - 5px);
        height: 80px;
        box-sizing: border-box;
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        color: #fff;
        background-color: #144067;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .button-container button:hover {
        background-color: #144067;
        opacity: 0.8;
    }

    .button-container button:active {
        transform: translateY(8px);
    }

</style>
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
    <h2 class="info-title">SERVICE OPTION</h2><br>
     <h3>Please choose your preferred service:</h3>
     <div class="button-container">
        <button onclick="window.location.href = 'planning-burial.php';">Burial Service</button>
        <button onclick="window.location.href = 'planning-traditional.php';">Tradional Cremation Service</button>
        <button onclick="window.location.href = 'planning-gathering.php';">Memorial Gathering After Cremation Service</button>
        <button onclick="window.location.href = 'planning-direct.php';">Direct Cremation Service</button>
    </div>
</form>
</div>
</div>
</body>
</html>
