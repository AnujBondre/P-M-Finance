<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
<title>dropdown Menu</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Calibri;
    }
    body {
        font-family: sans-serif;
    }
    .logo{
            width: 6%;
            height: 85%;
            margin-left: 20px;
            margin-top: 6px;
            border-radius: 25px;
    }
    .menu-bar {
        background-color: #3498db;
        height: 80px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 12px;
        position: relative;
    }
    .menu-bar ul {
        list-style: none;
        display: flex;
    }
    .menu-bar ul li {
        padding: 10px 25px;
        position: relative;
        z-index: 2;
    }
    .menu-bar ul li a {
        font-size: 20px;
        color: white;
        text-decoration: none;
    }
    .menu-bar ul li a:hover {
        color: black;
    }
    .fas {
        float: right;
        margin-left: 10px;
        padding-top: 3px;
    }
    .dropdown-menu {
        display: none;
    }
    .menu-bar ul li:hover .dropdown-menu {
        display: block;
        position: absolute;
        left: 0;
        top: 100%;
        background-color: #3498db;
    }
    .menu-bar ul li:hover .dropdown-menu ul {
        display: block;
        margin: 10px;
    }
    .menu-bar ul li:hover .dropdown-menu ul li {
        width: 220px;
        padding: 10px;
    }
    .dropdown-menu-1 {
        display: none;
    }
    .dropdown-menu ul li:hover .dropdown-menu-1 {
        display: block;
        position: absolute;
        left: 220px;
        top: 0;
        background-color: #3498db;
    }
</style>
<script>
        function scrollPage() {
      window.scrollBy({
        top: 4360,
        left: 0,
        behavior: 'smooth'});
    }
</script>
</head>
<body>
    <div class="menu-bar">
      <img src="./images/ax.png" class="logo">
      <ul>
        <li><a href="./index.php">Home</a></li>
        <li><a>Loans <i class="fas fa-caret-down"></i></a>

            <div class="dropdown-menu">
                <ul>
                  <li><a href="./pages/personal_loan.php">Personal Loan</a></li>
                  <li><a href="./pages/business_loan.php">Business Loan</a></li>
                  <li><a href="./pages/instant_loan.php">Instant Loan</a></li>
                  <li><a href="./pages/home_loan.php">Home Loan</a></li>
                  <li><a href="./pages/mortgage_loan.php">Mortgage Loan</a></li>
                  <li>
                    <a href="#">Govt. Subsidy Loan <i class="fas fa-caret-right"></i></a>
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="./pages/govt_loan/pmegp_loan.php">PMEGP Loan</a></li>
                        <li><a href="./pages/govt_loan/cmegp_loan.php">CMEGP Loan</a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="./pages/mudra_loan.php">Mudra Loan</a></li>
                  <li><a href="./pages/project_loan.php">Project Loan</a></li>
                  <li><a href="./pages/education_loan.php">Education Loan</a></li>
                </ul>
              </div>
        </li>
        <li><a onclick="scrollPage()" href="#">Lending Partners</a></li>
        <li><a href="./about_us.php">About Us</a></li>
        <li><a href="./enquiry_form.php">Enquiry Form</a></li>
        <li><a href="./privacy_policy.php">Privacy Policy</a></li>
      </ul>
    </div>
</body>
</html>