function validateAndSubmit() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;


    var nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(name)) {
        showError("Name should contain only characters.");
        return;
    }

    // Validate Email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email) || email.length < 9) {
        showError("Invalid email format. It should contain @ and be at least 9 characters long.");
        return;
    }


    var phoneRegex = /^\+92\d{10}$/;
    if (!phoneRegex.test(phone) || phone.length < 13) {
        showError("Invalid phone number. It should be more than 10 characters and contain with +92.");
        return;
    }

    var roleStudent = document.getElementById("roleStudent").checked;
    var roleTeacher = document.getElementById("roleTeacher").checked;
    if (!roleStudent && !roleTeacher) {
        showError("Please select at least one role.");
        return;
    }


    submitForm();
}

function showError(message) {

    var errorAlert = document.getElementById("errorAlert");
    errorAlert.innerHTML = '<div class="alert alert-danger" role="alert">' + message + '</div>';
}

function submitForm() {
    alert("Form submitted successfully!");
}