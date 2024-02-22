<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : null;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pm_finance";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $whatsAppPhone = $_POST['whatsapp_phone'];
    $loanType = $_POST['loanType'];
    $Loan_Date = $_POST['hiddenLoanDate'];
    $loanAmount = $_POST['loanAmount'];
    $designation = isset($_POST['designation']) ? $_POST['designation'] : null;

    // Function to sanitize and generate a safe filename
    function sanitizeFilename($filename, $filetype) {
        // Remove unwanted characters and spaces
        $filename = preg_replace("/[^a-zA-Z0-9.]/", "", $filename);

        // Append .pdf extension if the file type is PDF
        if ($filetype === 'application/pdf') {
            $filename .= '.pdf';
        }

        return $filename;
    }

    // Upload files to a folder on the server (adjust the path as needed)
    $uploadFolder = "../../admin/uploads/";
    $errors = [];

    // Function to handle file upload and check for errors
    function uploadFile($fileKey) {
        global $uploadFolder, $errors;

        if (!isset($_FILES[$fileKey])) {
            $errors[] = "Error: File '$fileKey' not found.";
            return null;
        }

        $file = $_FILES[$fileKey];
        $sanitizedFilename = sanitizeFilename($file['name'], $file['type']);
        $destination = $uploadFolder . $sanitizedFilename;

        // Check file size
        $maxFileSize = 10 * 1024 * 1024; // 10 MB
        if ($file['size'] > $maxFileSize) {
            $errors[] = "Error: File '$fileKey' size exceeds the allowed limit (10 MB).";
            return null;
        }
        $allowedFileTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        if (!in_array($file['type'], $allowedFileTypes)) {
        $errors[] = "Error: Invalid file type for '$fileKey'. Please select a valid image file.";
        return null;
        }


        if (move_uploaded_file($file['tmp_name'], $destination)) {
            return $sanitizedFilename;
        } else {
            $errors[] = "Error uploading file '$fileKey'.";
            return null;
        }
    }

    $pancard = uploadFile('pancard');
    $aadharcard = uploadFile('aadharcard');
    $bankStatement = uploadFile('bankstat');
    $passportPhoto = uploadFile('passphoto');

    // Additional fields based on designation
    $incomeTaxReturn = '';
    $salarySlip = '';

    if ($designation === 'business') {
        $incomeTaxReturn = uploadFile('incometax');
    } elseif ($designation === 'salary') {
        $salarySlip = uploadFile('salaryslip');
    }

    // Check for upload errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        $conn->close();
        exit();
    }

    // Prepare SQL statement
    $sql = "";

    if ($designation === 'business') {
        $sql = "INSERT INTO `apply_data` (`Id`, `fullName`, `email`, `phone`, `whatsapp_phone`, `loan_Type`, `loan_Amount`,`Loan_Date`, `pancard`, `aadharcard`, `bankstat`, `passphoto`, `Desigination`, `income_tax_return`, `salary_slip`)
                VALUES 
                ('$id', '$fullName', '$email', '$phone', '$whatsAppPhone', '$loanType', '$loanAmount', '$Loan_Date', '$pancard', '$aadharcard', '$bankStatement', '$passportPhoto', '$designation', '$incomeTaxReturn', NULL)";
    } elseif ($designation === 'salary') {
        $incomeTaxReturn = '';
        $sql = "INSERT INTO `apply_data` (`Id`, `fullName`, `email`, `phone`, `whatsapp_phone`, `loan_Type`, `loan_Amount`,`Loan_Date`,  `pancard`, `aadharcard`, `bankstat`, `passphoto`, `Desigination`, `income_tax_return`, `salary_slip`)
                VALUES 
                ('$id', '$fullName', '$email', '$phone', '$whatsAppPhone', '$loanType', '$loanAmount','$Loan_Date', '$pancard', '$aadharcard', '$bankStatement', '$passportPhoto', '$designation', NULL, '$salarySlip')";
    } else {
        $errors[] = "Error: Invalid designation value.";
    }

    // Check for SQL query errors
    if (!empty($sql)) {
        if ($conn->query($sql) === TRUE) {
            echo '<script>
    alert("Application submitted successfully!");
    setTimeout(function() {
        window.location.href = "../index_res.php";
    }, 1000);
</script>';

            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }

    // Close the database connection
    $conn->close();
}
?>
