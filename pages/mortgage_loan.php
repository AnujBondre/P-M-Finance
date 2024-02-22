<?php
    $site_url = "http://localhost/P-M-Finance-1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body {
            background-color: #f7f5f5;
            font-family: Calibri;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .policy {
            max-width: 1100px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            position: relative;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .l_image{
            position: absolute;
            width: 450px;
            height: 350px;
            margin-top: 30px;
            margin-left: 50%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);    
        }
    </style>
</head>
<body>
    <?php
        require("../header.php");
    ?>
<br>
<div class="policy">
    <h1>Mortgage Loan</h1>
    <img class="l_image" src="<?php echo $site_url ?>/images/mortgage_loan.jpg">
    <pre style= "padding-top:10px;line-height: 1.5; font-family: Calibri;">

    Medical emergency or wedding. You can easily apply for an ICICI Bank Personal 
    Loan, online up to Rs 50 lakh depending upon Personal Loan is an unsecured 
    loan that caters to all your financial needs such as travel, home renovation, 
    online education, your eligibility without any collateral security.
    
    With our Personal Loan EMI Calculator, you can also check the Personal Loan 
    EMI that you are entitled to pay every month. Also, with our instant Personal 
    Loan online services, you can get access to the funds within 3 seconds.

    Personal loans can be used for a variety of purposes, with no restrictions on 
    how you spend the money. Some common uses include:Debt consolidation: 
    Combining multiple high-interest debts into one loan with a lower interest rate.
    Home improvement: Covering the cost of renovations, repairs, or upgrades to 
    your home. Medical bills: Paying for unexpected medical expenses. 
    Major purchases: Financing a car, appliance, or other large purchase.

    How do personal loans work?

    Apply: You apply for a personal loan from a bank, credit union, or online lender. Get approved: The lender will review your creditworthiness and income 
    to determine if you qualify for the loan. Receive funds: If you are approved, the lender will deposit the loan amount into your bank account.Repay the 
    loan: You will make fixed monthly payments to the lender over a set period of time, typically 2 to 5 years.
        
    Key factors to consider: Interest rate: The interest rate will determine the total cost of your loan. Shop around for the best rates.Loan term: The loan term 
    is the length of time you have to repay the loan. A longer term will mean lower monthly payments, but you will pay more in interest overall.
    Fees: Some lenders charge origination fees, closing fees, or other fees. Be sure to ask about all fees before you take out a loan. Credit score: Your credit 
    score will affect your eligibility for a loan and the interest rate you will receive.
    </pre>
</div>
<?php
    require("./apply_loan_form.php");
?>
<br>
<?php
    require("../footer.php");
?>
</body>
</html>
