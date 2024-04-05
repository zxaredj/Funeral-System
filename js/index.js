// Get the form container and close button
var formContainer = document.getElementById("reviewFormContainer");
var closeButton = document.querySelector(".close-btn");

// Get the "Write A Review" button
var writeReviewButton = document.getElementById("openReviewFormModal");

// Function to show the form
function showForm() {
    formContainer.style.display = "block";
}

// Function to hide the form
function hideForm() {
    formContainer.style.display = "none";
}

// Event listener for the "Write A Review" button
writeReviewButton.addEventListener("click", showForm);

// Event listener for the close button (X)
closeButton.addEventListener("click", hideForm);
