function optionService(optionId) {
    var options = document.querySelectorAll('[id^="option"]');
    options.forEach(option => {
        option.classList.add('hidden1');
    });
    document.getElementById(optionId).classList.remove('hidden1');
}

function optionFacility(optionId) {
    var facilityOptions = document.querySelectorAll('[id^="facility-option"]');
    facilityOptions.forEach(option => {
        option.classList.add('hidden2');
    });
    document.getElementById(optionId).classList.remove('hidden2');
}


// multi-form
var currentStep = 1;

function next() {
    document.getElementById('form-' + currentStep).style.display = 'none';
    document.getElementById('form-' + (currentStep + 1)).style.display = 'block';
    currentStep++;
}

function previous() {
    document.getElementById('form-' + currentStep).style.display = 'none';
    document.getElementById('form-' + (currentStep - 1)).style.display = 'block';
    currentStep--;
}

document.getElementById('multi-step-form').addEventListener('submit', function(event) {
    if (!validatePlanningInfo()) {
        event.preventDefault();
        return;
    } else {
        alert('Form submitted successfully!');
    }
    // window.location.href = '../section-home/index.php';
});

