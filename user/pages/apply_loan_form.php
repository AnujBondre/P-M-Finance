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
<script>
        function toggleFields() {
            var designation = document.getElementById('desig').value;
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

        function validateFileInput(fileInput, maxSizeInBytes) {
            if (fileInput.files.length > 0) {
                var fileSize = fileInput.files[0].size; // in bytes
                var maxSize = maxSizeInBytes; // Max size in bytes (1 MB)

                if (fileSize > maxSize) {
                    alert('File size must be 1 MB or less.');
                    fileInput.value = ''; // Clear the file input
                }
            }
        }
</script>


<div class="container">
    <h2>Apply For Loan</h2>
    <br>
    <form action="apply_loan_action.php" method="post" novalidate>
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="whatsapp">Whats App Number:</label>
        <input type="tel" id="whatsapp" name="whats_app_phone" required>

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

        <label for="pancard">Pan Card:</label>
        <input type="file" id="pancard" name="pancard" accept=".jpg, .jpeg, .png" onchange="validateFileInput(this, 1024 * 1024)" required>

        <label for="aadharcard">Aadhar Card:</label>
        <input type="file" id="aadharcard" name="aadharcard" accept=".jpg, .jpeg, .png" onchange="validateFileInput(this, 1024 * 1024)" required>

        <label for="bankstate">Bank Statement(last three months):</label>
        <input type="file" id="bankstate" name="bankstate" accept=".jpg, .jpeg, .png" onchange="validateFileInput(this, 1024 * 1024)" required>

        <label for="passphoto">Passport Photo (Selfie):</label>
        <input type="file" id="passphoto" name="passphoto" accept=".jpg, .jpeg, .png" onchange="validateFileInput(this, 1024 * 1024)" required>

        <label for="desig">Designation:</label>
        <select id="desig" name="designation" onchange="toggleFields()" required>
            <option >Select option</option>
            <option value="business">Business Person</option>
            <option value="salary">Salaried Person</option>
        </select>

        <div id="businessFields" style="display: none;">
            <label for="incometax">Income Tax Return (ITR):</label>
            <input type="file" id="incometax" name="incometax" accept=".jpg, .jpeg, .png" onchange="validateFileInput(this, 1024 * 1024)" required>
        </div>

        <div id="salariedFields" style="display: none;">
            <label for="salaryslip">Salary Slip:</label>
            <input type="file" id="salaryslip" name="salary" accept=".jpg, .jpeg, .png" onchange="validateFileInput(this, 1024 * 1024)" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>