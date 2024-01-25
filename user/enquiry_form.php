<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
    <style>
    *{
        margin:0px;
        padding:0px;
        font-family: Calibri;
    }
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
<script>
    function redirectToNewPage() {
        var designation = document.getElementById("desig").value;
        var redirectPage;

        if (designation === "business") {
            redirectPage = "business_form.php"; 
        } else if (designation === "salary") {
            redirectPage = "salary_form.php"; 
        } else {
            alert("Invalid designation selected");
        return;
        }

        window.location.href = redirectPage;
    }
</script>
</head>
<body>
<?php
    require("./header.php");
?>
<div class="container">
    <h2>Enquiry Form</h2>
    <br>
    <form action="enquiry_action.php" method="post">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="phone">Whats App Number:</label>
        <input type="tel" id="phone" name="whats_app_phone" required>

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

        <label for="desig">Designation:</label>
        <select id="desig" name="designation" required>
            <option value="business">Business Person</option>
            <option value="salary">Salaried Person</option>
        </select>

        <button type="button" onclick="redirectToNewPage()">Submit</button>
    </form>
</div>
<?php
    require("./footer.php");
?>
</body>
</html>
<!-- ============================================================================== -->
