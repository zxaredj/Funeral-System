function validateInfo() {
    var deceasedfirstName = document.getElementById("deceased-firstname").value;
    var deceasedlastName = document.getElementById("deceased-lastname").value;
    var contactfirstName = document.getElementById("contact-firstname").value;
    var contactlastName = document.getElementById("contact-lastname").value;
    var contactNumber = document.getElementById("number").value;

    var textValidation = /^[a-zA-Z.]+(?:\s[a-zA-Z.]+)*$/;
    var numberValidation = /^[0-9]{11}$/;

    if(!textValidation.test(deceasedfirstName)) {
        alert("Invalid first name");
        return false;
    }

    if(!textValidation.test(deceasedlastName)) {
        alert("Invalid last name");
        return false;
    }
    
    if(!textValidation.test(contactfirstName)) {
        alert("Invalid first name");
        return false;
    }

    if(!textValidation.test(contactlastName)) {
        alert("Invalid last name");
        return false;
    }

    if(!numberValidation.test(contactNumber)) {
        alert("Invalid contact number");
        return false;
    }
    return true;
}

// date picker - disable past dates
  var today = new Date();
  var year = today.getFullYear();
  var month = String(today.getMonth() + 1).padStart(2, '0');
  var day = String(today.getDate()).padStart(2, '0');
  var minDate = year + '-' + month + '-' + day;

  
  document.getElementById('pickup-date').setAttribute('min', minDate);

  
  // validation for time, pick up time should be 1 hour ahead
  function validateTime() {
    var selectedTime = document.getElementById('pickup-time').value;
    var currentTime = new Date();
    var selectedTimeParts = selectedTime.split(':');
    var hour = parseInt(selectedTimeParts[0]);
    var minute = parseInt(selectedTimeParts[1]);
  
    var time = new Date();
    time.setHours(hour, minute, 0, 0);
  
    var checkTime = time.getTime() - currentTime.getTime();
    var milliseconds = 60 * 60 * 1000;
  
    if (checkTime < milliseconds) {
      alert("Please select a time that is 1 hour ahead of the current time.");
      document.getElementById('pickup-time').value = '';
    }
  }
  
  document.getElementById('pickup-time').addEventListener('change', validateTime);
  