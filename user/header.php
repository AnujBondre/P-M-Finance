    <?php
    $SITE_NAME = "http://localhost/Finance/P-M-Finance/";
    ?>
    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
            font-family: Calibri;
        }
        nav{
            width: 100%;
            background-color: #13d6d6;
            height: 80px;
        }
        .logo{
            width: 6%;
            height: 85%;
            margin-left: 20px;
            margin-top: 6px;
            border-radius: 25px;
        }
        nav ul{
            float: right;
        }
        nav ul li{
            float: left;
            list-style: none;
            position: relative;
            line-height: 80px;
            position: relative;
            z-index: 2;
        }
        nav ul li a{
            text-decoration: none;
            font-size: 20px;
            color: white;
            padding: 8px 20px;
            border-radius: 7px;
        }
        nav ul li a:hover{
            background-color: #18757d;
        }
        nav ul li ul{
            position: absolute;
            display: none;
            background-color: #13d6d6;
            border-radius: 7px 7px 7px 7px;
        }
        nav ul li:hover ul{
            display: block;
        }
        nav ul li ul li{
            line-height: 40px;
            width:280px;
            border-radius: 5px;
            padding: 6px;
        }
        nav ul li ul li a{
            padding: 10px 16px;
            border-radius: 7px;
        }
        nav ul li ul li a:hover{
            background-color: #18757d;
        }
        .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24;
        vertical-align: middle;
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
    <nav>
        <img src="<?php $SITE_NAME?>images/ax.png" class="logo">
        <ul>
            <li><a href="<?php $SITE_NAME?>index.php">Home</a></li>
            <li><a>Loans<span class="material-symbols-outlined">expand_more</span></a>
                <ul>
                    <li><a href="<?php $SITE_NAME?>pages/personal_loan.php">Personal Loan</a></li>
                    <li><a href="<?php $SITE_NAME?>pages/business_loan.php">Business Loan</a></li>
                    <li><a href="./pages/instant_loan.php">Instant Loan</a></li>
                    <li><a href="./pages/home_loan.php">Home Loan</a></li>
                    <li><a href="./pages/mortgage_loan.php">Mortgage Loan</a></li>
                    <li><a href="./pages/education_loan.php">Govt. Subsidy Loan</a>
                        <ul>
                            <li><a href="./pages/pmegp_loan.php">PMEGP Loan</a></li>
                            <li><a href="./pages/cmegp_loan.php">CMEGP Loan</a></li>
                        </ul>
                    </li>
                    <li><a href="./pages/mudra_loan.php">Mudra Loan</a></li>
                    <li><a href="./pages/project_loan.php">Project Loan</a></li>
                    <li><a href="./pages/education_loan.php">Education Loan</a></li>
                </ul>
            </li>
            <li><a onclick="scrollPage()" href="#">Lending Partners</a></li>
            <li><a href="./about_us.php">About us</a></li>
            <li><a href="./enquiry_form.php">Enquiry Form</a></li>
            <li style="padding-right:30px"><a href="./privacy_policy.php">Privacy policy</a></li>
        </ul>
    </nav>