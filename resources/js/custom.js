// Define a function to select an element using a CSS selector
const selectElement = (el) => {
    return document.querySelector(el);
}

// Hide the element with class "spinningIcon"
selectElement(".spinningIcon").style.display = "none";

// Add a submit event listener to the element with class "nonAjaxForm"
selectElement(".nonAjaxForm").addEventListener("submit", function() {
    // Display the element with class "spinningIcon" when the form is submitted
    selectElement(".spinningIcon").style.display = "block";
});

// Initialize an empty string for password checking hint
let passwordCheckingHint = "";

// Add a keyup event listener to the element with id "confirmPassword"
selectElement("#confirmPassword").addEventListener("keyup", function(e) {
    // Get the values of password and confirm password fields
    const confirmPassword = this.value;
    const password = selectElement("#password").value;

    // Check if passwords match
    if (password !== confirmPassword) {
        passwordCheckingHint = "Password not matched";
    } else {
        passwordCheckingHint = "";
    }

    // Display the password checking hint in the element with id "passwordChecker"
    selectElement("#passwordChecker").innerHTML = passwordCheckingHint;
});
