<?php
    $site_url = "http://localhost/P-M-Finance-1";
?>
<style>
        body {
            margin: 0;
            overflow-x: hidden;
            font-size: 18px;
        }
        footer {
            background-color: #35596f;
            color: white;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            height: auto;
            overflow-x: hidden;
        }
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icons a {
            color: white;
            text-decoration: none;
            font-size: 30px;
        }

        .copyright {
            /* margin-top: 4px; Decrease margin between elements */
            font-size: 15px;
        }

        /* Center content in mobile view */
        @media screen and (max-width: 768px) {
            footer {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            .social-icons {
                margin-right: 150px;
            }
            .column {
                width: 80%; /* Adjust column width for better readability */
                text-align: left;
                
            }
        }
        
        /* Responsive Styles for Desktop */
        @media screen and (min-width: 768px) {
            footer {
                display: grid;
                grid-template-columns: repeat(5, minmax(0, 1fr));
                /* margin-right: -50px;  */
            }
        }
        </style>
<body>
    <footer>
        <div class="column">
            <a style="color: azure; text-decoration: none;" href="<?php echo $site_url ?>/about_us.php"><h3>About Us</h3></a>
            <p>Your trusted partner in financial success.
               Committed to excellence, integrity, and 
               personalized solutions for your financial journey.</p>
        </div>
        <div class="column">
            <h3>Address</h3>
            <p> Achraj Tower-2, 4th Floor, Sadar, <br>
    Chhaoni Square, Nagpur, India-440013. <br>
    +91 8482828233</p>
        </div>
        <div class="column">
            <h3>Enquiry</h3>
            <p>For inquiries please  <br>
             contact us at:+91 8482828233 <br>
            franchiseew@gmail.com </p>
        </div>
        <div class="column">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
        <div class="copyright">
            <br>
            <a style="color: #fff; text-decoration: none; font-size:17px;" href="<?php echo $site_url ?>/privacy_policy.php">Privacy Policy</a>
            <p>&copy; 2024 Your Website Name. All rights reserved.</p>
        </div>
    </footer>
</body>