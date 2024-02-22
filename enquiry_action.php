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
    $loanDate = mysqli_real_escape_string($conn, $_POST["hiddenLoanDate"]); 

    // Insert data into the database
    $sql = "INSERT INTO `client_data`(`Full name`, `Email Address`, `Phone Number`, `Address`, `Loan Type`, `Loan Amount`,`loanDate`)
    VALUES ('$fullName', '$email', '$phone', '$address', '$loanType', '$loanAmount' , '$loanDate')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Application submitted successfully!'); window.location.href='enquiry_form.php'; </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>