
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>Student Registration Form</h1>
    <p>Enter Your Details Carefully</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="resume.php">Resume</a>
    <a href="biodata.php">Bio-data</a>
    <a href="registration.php">Registration</a>
</nav>

<main>

    <h2>Online Application Form</h2>

    <form action="confirmation.php" method="POST"
          id="registrationForm">

        <label>Name:</label>
        <input type="text" name="name" id="name"
               placeholder="Enter your name" required>

        <label>USN:</label>
        <input type="text" name="usn" id="usn"
               placeholder="Enter your USN" required>

        <label>Email:</label>
        <input type="email" name="email" id="email"
               placeholder="Enter your email" required>

        <label>Phone Number:</label>
        <input type="tel" name="phone" id="phone"
               placeholder="Enter 10 digit phone number"
               pattern="[0-9]{10}" required>

        <label>Department:</label>
        <select name="department" id="department" required>
            <option value="">Select Department</option>
            <option value="CSE">Computer Science Engineering</option>
            <option value="ISE">Information Science Engineering</option>
            <option value="ECE">Electronics and Communication</option>
            <option value="ME">Mechanical Engineering</option>
            <option value="Civil">Civil Engineering</option>
        </select>

        <label>Semester:</label>
        <select name="semester" id="semester" required>
            <option value="">Select Semester</option>
            <option value="1">1st Semester</option>
            <option value="2">2nd Semester</option>
            <option value="3">3rd Semester</option>
            <option value="4">4th Semester</option>
            <option value="5">5th Semester</option>
            <option value="6">6th Semester</option>
            <option value="7">7th Semester</option>
            <option value="8">8th Semester</option>
        </select>

        <label>Address:</label>
        <textarea name="address" id="address"
                  placeholder="Enter your address"
                  required></textarea>

        <button type="submit">Submit</button>

    </form>

</main>

<footer>
    <p>Copyright &copy; 2026 Ruthu K R</p>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>
