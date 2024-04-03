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