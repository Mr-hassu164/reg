<?php
// submit.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting the submitted form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);

    // Display the submitted information
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Phone:</strong> " . $phone . "</p>";
    echo "<p><strong>Gender:</strong> " . $gender . "</p>";
}
?>
