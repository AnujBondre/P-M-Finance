<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html,body{
            width: 100%;
            height: 100%;
        }
        .about{
            background-color: #f7f5f5;
            margin: 60px 150px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .ab_img{
            border-radius: 15px;
            margin: 0px 70px;
        }
    </style>
</head>
<body>
    <?php
        require("./header.php");
    ?>
    <div class="about">
        <h1>ABOUT US</h1>
        <br>
        <h2>Empower your future with smart financial choices today</h2>
        <br>
        <pre style="font-size: 18px;">
MU Global Multi Services Pvt. Ltd. is working as DSA. We are in the service from 2017. Our monthly business is up to 3 to 4 Crores. We provide all 
types of loans to the customers. Our products are Instant Loan, Home Loan, Personal Loan, Business Loan, Mortgage Loan, Loan against Property, 
Gold Loan, Used Vehicle Loan, Education Loan, Property Consultancy, Solar Installation Loan, etc. We work ONLINE as well as OFFLINE also. 

We are working in metropolitan cities like Mumbai, Pune, Delhi and many other cities. We also working on PAN India level. Our experience in the 
finance sector helps our customers to get loan at exciting rate of interest.
        </pre>
        <img class="ab_img" src="./images/about_us.png">
    </div>
    <?php
        require("./footer.php");
    ?>
</body>
</html>