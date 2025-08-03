function validateForm(event) {
   
    event.preventDefault();

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var confPass = document.getElementById("cpass").value;
    var otherAmount = document.getElementById("oamount").value;

    
    if (!fname || !lname || !address || !city || !state || !phone || !email || !pass || !confPass) {
        alert("All fields must be filled");
        return false;
    }

    
    if (!/^[a-zA-Z]+$/.test(fname) || !/^[a-zA-Z]+$/.test(lname)) {
        alert("Name: Only alphabets (A-Z, a-z) are allowed");
        return false;
    }

    
    if (!/^\d{11}$/.test(phone)) {
        alert("Phone: Exactly 11 digits are required");
        return false;
    }

    
    var passPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
    if (!passPattern.test(pass)) {
        alert("Password: Must contain at least one uppercase, one lowercase, one digit, and one special character");
        return false;
    }

    
    if (pass !== confPass) {
        alert("Password and Confirm Password do not match");
        return false;
    }

    
    var donationAmount = document.querySelector('input[name="Damount"]:checked');
    if (!donationAmount) {
        alert("Please select a donation amount");
        return false;
    }

    
    if (donationAmount.value === "other" && !otherAmount) {
        alert("Please specify the amount for 'Other'");
        return false;
    }

    
    alert("Form submitted successfully!");
    return true;
}
