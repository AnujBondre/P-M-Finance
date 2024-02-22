<?php
    $site_url = "http://localhost/P-M-Finance-1";
?>
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
        width: 5%;
        height: 80%; 
        margin-left: 1.5vw;
        margin-top: 0.3vh;
        border-radius: 20%;
    }
    .menu-bar {
        background-color: #1e465f;
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
        color: #8fa3af;
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
        background-color: #1e465f;
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
        background-color: #1e465f;
    }
</style>

<body>
    <div class="menu-bar">
      <img src="<?php echo $site_url ?>/images/logo.jpg" class="logo">
      <ul>
        <li><a href="<?php echo $site_url ?>/index.php">Home</a></li>
        <li><a>Loans <i class="fas fa-caret-down"></i></a>

            <div class="dropdown-menu">
                <ul>
                  <li><a href="<?php echo $site_url ?>/pages/personal_loan.php">Personal Loan</a></li>
                  <li><a href="<?php echo $site_url ?>/pages/business_loan.php">Business Loan</a></li>
                  <li><a href="<?php echo $site_url ?>/pages/instant_loan.php">Instant Loan</a></li>
                  <li><a href="<?php echo $site_url ?>/pages/home_loan.php">Home Loan</a></li>
                  <li><a href="<?php echo $site_url ?>/pages/mortgage_loan.php">Mortgage Loan</a></li>
                  <li>
                    <a href="#">Govt. Subsidy Loan <i class="fas fa-caret-right"></i></a>
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="<?php echo $site_url ?>/pages/govt_loan/pmegp_loan.php">PMEGP Loan</a></li>
                        <li><a href="<?php echo $site_url ?>/pages/govt_loan/cmegp_loan.php">CMEGP Loan</a></li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="<?php echo $site_url ?>/pages/mudra_loan.php">Mudra Loan</a></li>
                  <li><a href="<?php echo $site_url ?>/pages/project_loan.php">Project Loan</a></li>
                  <li><a href="<?php echo $site_url ?>/pages/education_loan.php">Education Loan</a></li>
                </ul>
              </div>
        </li>
        <li><a onclick="scrollPage()" href="#">Lending Partners</a></li>
        <li><a href="<?php echo $site_url ?>/about_us.php">About Us</a></li>
      </ul>
    </div>

    <script>
        function scrollPage() {
            window.scrollBy({
            top: 4995,
            left: 0,
            behavior: 'smooth'});
    }
    </script>
</body>
