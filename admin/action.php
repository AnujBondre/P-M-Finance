<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "pm_finance";

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent SQL injection
    // $id = mysqli_real_escape_string($conn,$_POST["id"]);
    $fullName = mysqli_real_escape_string($conn, $_POST["fullName"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $loanType = mysqli_real_escape_string($conn, $_POST["loanType"]);
    $loanAmount = mysqli_real_escape_string($conn, $_POST["loanAmount"]);


    // Insert data into the database
    $sql = "INSERT INTO `client_data`( `Full name`, `Email Address`, `Phone Number`, `Address`, `Loan Type`, `Loan Amount`) VALUES ('$fullName', '$email', '$phone', '$address', '$loanType', '$loanAmount')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully!";
        // header("location:Dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>