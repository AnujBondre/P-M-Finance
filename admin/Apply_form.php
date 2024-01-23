<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application Form</title>
    <!-- Include your styles here if needed -->
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Apply For Loan</h2>
    <br>
    <form action="apply_loan_action.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <!-- Include your form fields here based on the structure in your original form -->
        <!-- Ensure that the input names match those used in your PHP script -->
        <label for="id">Id:</label>
        <input type="text" id="id" name="id" required disabled>

        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phone" required>

        <label for="whatsapp_phone">WhatsApp Number:</label>
        <input type="tel" id="whatsapp_phone" name="whatsapp_phone" required>

        <label for="loanType">Loan Type:</label>
        <select id="loanType" name="loanType" required>
            <option value="businessLoan">Business Loan</option>
            <option value="personalLoan">Personal Loan</option>
            <option value="homeLoan">Home Loan</option>
            <option value="educationLoan">Education Loan</option>
            <option value="instantLoan">Instant Loan</option>
            <option value="mortgageLoan">Mortgage Loan</option>
            <option value="mudraLoan">Mudra/Govt. Subsidy Loan</option>
            <option value="projectLoan">Project Loan</option>
            <!-- Add more options as needed -->
        </select>

        <label for="loanAmount">Loan Amount:</label>
        <input type="number" id="loanAmount" name="loanAmount" required>

        <label for="pancard">Pan Card (Max size: 10 MB):</label>
        <input type="file" id="pancard" name="pancard" required>

        <label for="aadharcard">Aadhar Card (Max size: 10 MB):</label>
        <input type="file" id="aadharcard" name="aadharcard" required>

        <label for="bankstate">Bank Statement (Max size: 10 MB, last three months):</label>
        <input type="file" id="bankstate" name="bankstat" required>

        <label for="passphoto">Passport Photo (Selfie) (Max size: 10 MB):</label>
        <input type="file" id="passphoto" name="passphoto" required>

        <label for="designation">Designation:</label>
        <select id="designation" name="designation" onchange="toggleFields()" required>
            <option>Select</option>
            <option value="business">Business Person</option>
            <option value="salary">Salaried Person</option>
        </select>

        <div id="businessFields" style="display: none;">
            <label for="incometax">Income Tax Return (ITR) (Max size: 10 MB):</label>
            <input type="file" id="incometax" name="incometax">
        </div>

        <div id="salariedFields" style="display: none;">
            <label for="salaryslip">Salary Slip (Max size: 10 MB):</label>
            <input type="file" id="salaryslip" name="salaryslip">
        </div>

        <input type="submit" value="Submit">
    </form>
</div>

<script>
    function toggleFields() {
        var designation = document.getElementById('designation').value;
        var businessFields = document.getElementById('businessFields');
        var salariedFields = document.getElementById('salariedFields');

        if (designation === 'business') {
            businessFields.style.display = 'block';
            salariedFields.style.display = 'none';
        } else if (designation === 'salary') {
            businessFields.style.display = 'none';
            salariedFields.style.display = 'block';
        } else {
            businessFields.style.display = 'none';
            salariedFields.style.display = 'none';
        }
    }

    function validateForm() {
        var maxFileSize = 10 * 1024 * 1024; // 10 MB
        var files = document.querySelectorAll('input[type="file"]');

        for (var i = 0; i < files.length; i++) {
            var fileInput = files[i];
            var file = fileInput.files[0];

            // Check if a file is selected
            if (file) {
                // Check if the file is an image (you can extend this check based on your requirements)
                var isImage = file.type.startsWith('image/');

                if (!isImage) {
                    alert('Please select a valid image file.');
                    return false;
                }

                // Check file size
                if (file.size > maxFileSize) {
                    alert('Image size exceeds the allowed limit (10 MB). Please choose a smaller image.');
                    return false;
                }
            }
        }

        return true;
    }
</script>

</body>
</html>
