
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = trim($_POST['name']);
    $usn = trim($_POST['usn']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $department = trim($_POST['department']);
    $semester = trim($_POST['semester']);
    $address = trim($_POST['address']);

    // Server-side validation
    if (
        $name == "" ||
        $usn == "" ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        !preg_match("/^[0-9]{10}$/", $phone) ||
        $department == "" ||
        $semester == "" ||
        $address == ""
    ) {
        die("Invalid information. Please go back and check your form.");
    }

} else {
    die("Please submit the registration form first.");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Confirmation</title>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <h1>Registration Successful!</h1>
    <p>Your application has been submitted successfully.</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="resume.php">Resume</a>
    <a href="biodata.php">Bio-data</a>
    <a href="registration.php">Registration</a>
</nav>

<main>

    <h2>Submitted Student Details</h2>

    <table>

        <tr>
            <th>Name</th>
            <td><?php echo htmlspecialchars($name); ?></td>
        </tr>

        <tr>
            <th>USN</th>
            <td><?php echo htmlspecialchars($usn); ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?php echo htmlspecialchars($email); ?></td>
        </tr>

        <tr>
            <th>Phone Number</th>
            <td><?php echo htmlspecialchars($phone); ?></td>
        </tr>

        <tr>
            <th>Department</th>
            <td><?php echo htmlspecialchars($department); ?></td>
        </tr>

        <tr>
            <th>Semester</th>
            <td><?php echo htmlspecialchars($semester); ?></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><?php echo htmlspecialchars($address); ?></td>
        </tr>

    </table>

    <p>Your registration is complete!</p>

    <a href="registration.php" class="btn">
        Register Another Student
    </a>

</main>

<footer>
    <p>Copyright &copy; 2026 Ruthu K R</p>
</footer>

</body>
</html>
