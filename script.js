
$(document).ready(function() {

    $("#registrationForm").submit(function(event) {

        // Get form values
        let name = $("#name").val().trim();
        let usn = $("#usn").val().trim();
        let email = $("#email").val().trim();
        let phone = $("#phone").val().trim();
        let department = $("#department").val();
        let semester = $("#semester").val();
        let address = $("#address").val().trim();

        // Validate Name
        if (name === "") {
            alert("Please enter your name");
            event.preventDefault();
            return;
        }

        // Validate USN
        if (usn === "") {
            alert("Please enter your USN");
            event.preventDefault();
            return;
        }

        // Validate Email
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address");
            event.preventDefault();
            return;
        }

        // Validate Phone Number
        if (!/^[0-9]{10}$/.test(phone)) {
            alert("Please enter a valid 10 digit phone number");
            event.preventDefault();
            return;
        }

        // Validate Department
        if (department === "") {
            alert("Please select your department");
            event.preventDefault();
            return;
        }

        // Validate Semester
        if (semester === "") {
            alert("Please select your semester");
            event.preventDefault();
            return;
        }

        // Validate Address
        if (address === "") {
            alert("Please enter your address");
            event.preventDefault();
            return;
        }

        alert("Form validation successful!");

    });

});
