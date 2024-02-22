<?php
    $site_url = "http://localhost/P-M-Finance-1";
?>
    <style>
    .container {
        max-width: 30vw;
        margin: 1.7%;
        margin-left: 68%;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 4px;
    }
    input,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        background-color: #3498db;
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
        function fillCurrentDate() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
            var yyyy = today.getFullYear();

            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("loanDate").value = today;
        }
    }
</script>

<body>

<div class="container">
    <h2>Enquiry Form</h2>
    <br>
    <form action="<?php echo $site_url ?>/enquiry_action.php" method="post">

        <input type="text" id="id" name="id" required disabled hidden>

        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Address:</label>
        <input id="address" name="address" rows="4" required>

        <label for="loanType">Loan Type:</label>
        <select id="loanType" name="loanType" required>
            <option>Select</option>
            <option value="businessLoan">Business Loan</option>
            <option value="personalLoan">Personal Loan</option>
            <option value="homeLoan">Home Loan</option>
            <option value="educationLoan">Education Loan</option>
            <option value="instantLoan">Instant Loan</option>
            <option value="mortgageLoan">Mortgage Loan</option>
            <option value="mudraLoan">Mudra Loan</option>
            <option value="mudraLoan">Govt. Subsidy Loan</option>
            <option value="projectLoan">Project Loan</option>
            <!-- Add more options as needed -->
        </select>

        <label for="loanAmount">Loan Amount:</label>
        <input type="number" id="loanAmount" name="loanAmount" required>

        <input type="hidden" name="hiddenLoanDate" value="<?php echo date("d/m/Y"); ?>">
        <button type="submit">Submit</button>
    </form>
</div>

</body>