<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$tenant = $_POST['tenant'];
$email = $_POST['email'];
$contno = $_POST['contactno'];
$address = $_POST['address'];
$checkin = $_POST['cin'];
$Aadharno = $_POST['Aadharno'];
$Roomname = $_POST['rin'];
$mem = $_POST['Members'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'phpcrud');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, gender, tenant, email, contactno, address, duration, Aadharno, Roomname, Members) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('sssssissisi', $fname, $lname, $gender, $tenant, $email, $contno, $address, $checkin, $Aadharno, $Roomname, $mem);
    $stmt->execute();

    echo "<script>alert('Booking Successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'in.php'; </script>";

    $stmt->close();
    $conn->close();
}
?>
