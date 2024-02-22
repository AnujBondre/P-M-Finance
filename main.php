<?php
    $site_url = "http://localhost/P-M-Finance-1";
?>
<style>
    body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #fff;
        font-family: Calibri;
    }
    .bg-img{
        margin: 30px 150px;
        height: 500px;
        border-radius: 20px;
        filter: blur(1.5px);
        width: 80%;
    }
    .main_container{
        display: flex;
        justify-content: space-between;
    }
    .buto{
        margin: 2.2vh 7.5vw;
    }
    .container{
        margin: 25px;
        width: 35vw;
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
        background-color: #627e8f;
    }
    .carts{
        margin: 50px 200px;
        background-color: #f7f5f5;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }
    .cart1{
        display: flex;
        padding:20px 40px 40px 40px;
    }
    .btn{
        position:absolute;
        margin:20px 160px;
        padding: 10px 20px;
        border-radius: 8px; 
        background-color: #1e465f;
        font-size: large;
        border: none;
        color: #fff;
    }
    .partner{
        text-align: center;
    }
    .cart8{
        display: flex;
        padding:20px 40px 0px 40px;
        flex-wrap: wrap;
    }
    .btn_gv{
        position:absolute;
        margin:40px 0px 50px 775px;
        padding: 10px 20px;
        border-radius: 8px; 
        background-color: #1e465f;
        font-size: large;
        border: none;
        color: #fff;
    }
    .hidden-content{
        display: flex;
        display: none;
    }
</style>

<script>
        function toggleContent() {
            var additionalContent = document.getElementById("additional-content");
            var toggleButton = document.getElementById("toggle-button");

            if (additionalContent.style.display === "none") {
                additionalContent.style.display = "flex";
                toggleButton.textContent = "View Less";
            } else {
                additionalContent.style.display = "none";
                toggleButton.textContent = "View More";
            }
        }
</script>

<!-- ========================================================= -->
<div class="main_container">
    <div class="buto">
        <img src="<?php echo $site_url ?>/images/logo.jpg">
    </div>


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
            <button type="submit" style="background-color: #1e465f;">Submit</button>
        </form>
    </div>

</div>
<!-- ========================================================= -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Personal Loan</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/personal_loan.jpg" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
    
    Personal Loan is an unsecured credit provided by 
    financial institutions based on criteria like employment 
    history, repayment capacity, income level, profession
    and credit history. Personal Loan, which is also known
    as a consumer loan is a multi-purpose loan, which you
    can use to meet any of your immediate needs.
    The maximum amount that you can avail depends 
    on your income level, your profession and the lender’s
    assessment of your loan application.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/personal_loan.php'">Apply</button>
    </pre>
</div>
</div>
<!-- ======cart1========== -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Business Loan</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/business_loan.jpg" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
    A business loan is a sum of money issued to a business 
    exclusively for use in the company. The borrowed money 
    is repaid – with interest – over an agreed loan term. 
    From buying stock ahead of a seasonal peak to accessing 
    new plant and machinery, business loans can be used for 
    a range of operational and growth purposes.Like a personal 
    loan, you’ll need to apply for a business loan through a 
    lender who will decide whether they want to lend to your 
    business. If you accept the lender’s offer you’ll receive
    the loan amount and begin to repay it, plus interest, on 
    a monthly basis over the agreed loan term. 
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/business_loan.php'">Apply</button>
    </pre>
</div>
</div>
<!-- ======cart2========== -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Instant Loan</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/Instant_loan.png" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">

    An instant loan offering is nothing but a Personal 
    Loan that is extended by lenders to borrowers. A  
    personal loan is an unsecured loan that people can
    take to meet their personal needs. Personal loans, 
    unlike secured loans, do not require any security 
    collateral. The lender determines the loan amount, 
    interest rate, and repayment period based on the 
    borrower’s credit score, income, and other factors.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/instant_loan.php'">Apply</button>
    </pre>
</div>
</div>
<!-- ======cart3========== -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Home Loan</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/home_loan.png" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
            
    Home loans help you realize your dream of owning 
    a house. You do not need to break your savings 
    and investments or impact your other important 
    financial goals such as children’s higher education
    or retirement. The loan comes with a host of benefits
    and features. However, before applying for home 
    loans, you should be aware of every aspect. So, 
    here we are unravelling everything related to the 
    housing loans so that you make an informed choice.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/home_loan.php'">Apply</button>
    </pre>
</div>
</div>
<!-- ======cart4========== -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Mortgage Loan</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/mortgage_loan.jpg" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
            
    A mortgage is an agreement between you and a lender 
    that gives the lender the right to take your property
    if you fail to repay the money you've borrowed plus 
    interest. Costs such as homeowner's insurance, property
    taxes, and private mortgage insurance are typically 
    added to your monthly mortgage payment, so be sure 
    to include these costs when calculating how much you 
    can afford.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/mortgage_loan.php'">Apply</button>
    </pre>
</div>
</div>
<!-- ======cart5========== -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Mudra Loan</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/mudra_loan.png" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
            
    Pradhan Mantri Mudra Yojana (PMMY) in India 
    offers collateral-free loans for micro-enterprises 
    categorized as Shishu, Kishor, and Tarun. Ranging 
    from Rs. 50,000 to Rs. 10,00,000, these loans 
    promote entrepreneurship. Government subsidy loans 
    may also be available globally, supporting specific 
    sectors or individuals; details vary, and checking 
    official sources is recommended for the latest 
    information.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/mudra_loan.php'">Apply</button>
    </pre>
</div>
</div>
<!-- ======cart6========== -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Project Loan</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/project_loan.png" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
            
    In India, project loans are financial tools designed
    to support business ventures, infrastructure 
    development, or new projects. These loans are 
    extended by banks and financial institutions, 
    accommodating the diverse needs of entrepreneurs 
    and companies. The terms, interest rates, and repayment 
    structures are tailored to the specific requirements of 
    the project, making them a crucial resource for 
    businesses seeking capital for expansion, development, 
    or innovative initiatives.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/project_loan.php'">Apply</button>
    </pre>
</div>
</div>
<!-- ======cart7========== -->
<div class="carts">
    <h1 style="text-align:center;padding-top:20px;">Education loans</h1>
    <div class="cart1">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/education_loan.png" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
            
        Education loans in India are financial products 
        designed to assist students in funding their 
        higher education expenses. Offered by banks and 
        financial institutions, these loans cover tuition 
        fees, living expenses, and other educational costs. 
        Typically, repayment starts after the completion of 
        the course. Interest rates and terms vary, making 
        education loans accessible to a broad range of 
        students seeking academic advancement.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/education_loan.php'">Apply</button>
    </pre>
</div>
</div>

<!-- ======cart8========== -->
<div id="content" class="carts" style="padding-bottom:100px;">
    <h1 style="text-align:center;padding-top:20px;">Govt. Subsidy loans</h1>
    <div class="cart8">
        <img style="border-radius:10px;width:390px;height:300px;" src="<?php echo $site_url ?>/images/govt_loan.png" alt="personal loan Image">
        <pre style="padding-left:75px;font-size:22px;">
            
        Education loans in India are financial products 
        designed to assist students in funding their 
        higher education expenses. Offered by banks and 
        financial institutions, these loans cover tuition 
        fees, living expenses, and other educational costs. 
        Typically, repayment starts after the completion of 
        the course. Interest rates and terms vary, making 
        education loans accessible to a broad range of 
        students seeking academic advancement.....
        </pre>
</div>
<!-- ======================================================================================= -->
        <div id="additional-content" class="hidden-content">
            <div>
                <h1 style="text-align:center;padding-top:20px;">PMEGP loans</h1>
                <br>
                <img style="border-radius:10px;width:390px;height:300px;margin-left:90px;" src="<?php echo $site_url ?>/images/pmegp_loan.png" alt="personal loan Image">
                <pre style="padding-left:30px;font-size:22px;">
            
        Under the Prime Minister's Employment Generation 
        Programme (PMEGP), the maximum loan limit is Rs25
        lakh for manufacturing businesses and Rs. 10 lakh
        for the service sector.Interest rates and terms 
        vary, making education loans accessible to a broad
        range of students seeking academic advancement.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/govt_loan/pmegp_loan.php'">Apply</button>
                </pre>
            </div>
            <div>
                <h1 style="text-align:center;padding-top:20px;padding-left:40px;">CMEGP loans</h1>
                <br>
                <img style="border-radius:10px;width:390px;height:300px;margin-left:85px;" src="<?php echo $site_url ?>/images/cmegp_loan.png" alt="personal loan Image">
                <pre style="padding-left:40px;font-size:22px;">
            
        The Government of Karnataka has introduced 
        the Chief Minister Self Employment Scheme 
        (CMEGP) to create self-employment opportunities 
        in the State. Under CMEGP scheme, Government 
        provides a subsidy on loan for the rural 
        entrepreneurs to start a new business.
        <button class="btn" onclick="window.location.href = '<?php echo $site_url ?>/pages/govt_loan/pmegp_loan.php'">Apply</button>
                </pre>
            </div>
        </div>
<!-- ======================================================================================= -->
<button class="btn_gv" id="toggle-button" onclick="toggleContent()">View More</button>
</div>


<div class="partner">
    <h1>Lending Partners</h1>
    <img src="<?php echo $site_url ?>/images/partners.png">
</div>