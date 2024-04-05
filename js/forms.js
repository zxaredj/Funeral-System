// radio button for planning service

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

// Planning multi-form
var currentStep = 1;

function next() {
    if (!validateStep(currentStep)) {
        return;
    }

    document.getElementById('form-' + currentStep).style.display = 'none';
    document.getElementById('form-' + (currentStep + 1)).style.display = 'block';
    currentStep++;
}

function back() {
    document.getElementById('form-' + currentStep).style.display = 'none';
    document.getElementById('form-' + (currentStep - 1)).style.display = 'block';
    currentStep--;
}

function validateStep(step) {
    var inputs = document.getElementById('form-' + step).querySelectorAll('input, select');
    var isValid = true;

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].hasAttribute('required') && inputs[i].value.trim() === '') {
            alert('Please fill in all required fields before proceeding.');
            isValid = false;
            break;
        }
    }

    if (isValid && step === 1) {
        isValid = validateBenefactorInfo();
    } else if (isValid && step === 2) {
        isValid = validateBeneficiaryInfo();
    }

    return isValid;
}

document.getElementById('multi-step-form').addEventListener('submit', function(event) {
    if (!validateStep(currentStep)) {
        event.preventDefault();
        return;
    } else {

    }
});


// Pick-up multi-form
var page = 1;

function next1() {
    if (!stepValidate(page)) {
        return;
    }

    document.getElementById('form-' + page).style.display = 'none';
    document.getElementById('form-' + (page + 1)).style.display = 'block';
    page++;
}

function back1() {
    document.getElementById('form-' + page).style.display = 'none';
    document.getElementById('form-' + (page - 1)).style.display = 'block';
    page--;
}

function stepValidate(step) {
    var inputs = document.getElementById('form-' + step).querySelectorAll('input, select');
    var isValid = true;

    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].hasAttribute('required') && inputs[i].value.trim() === '') {
            alert('Please fill in all required fields before proceeding.');
            isValid = false;
            break;
        }
    }

    if (isValid && step === 1) {
        isValid = validateDeceasedInfo();
    } else if (isValid && step === 2) {
        isValid = validateContactInfo();
    }

    return isValid;
}

document.getElementById('multi-step-form').addEventListener('submit', function(event) {
    if (!stepValidate(page)) {
        event.preventDefault();
        return;
    } else {
        // alert('Form submitted successfully!');
    }
});