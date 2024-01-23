<?php
// Define the admin credentials
$adminEmail = 'patiljayant2023@gmail.com';
$adminPassword = '8806';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if ($userEmail === $adminEmail && $userPassword === $adminPassword) {
        // Successful login
        header("location:Dashboard.php");
        exit();
        // You can redirect to another page or perform other actions here
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid email or password!'); window.location='admin.php';</script>";
        die();
    }
}
?>

<style>    
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	overflow: hidden;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #BB84E9;
	background-color: #BB84E9;
    cursor: pointer;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #BB84E9;
	background: -webkit-linear-gradient(to right, #BB84E9, #BB84E9);
	background: linear-gradient(to right,  #BB84E9);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}



.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: #BB84E9;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
.profile-picture {
            border-radius: 50%;
            width: 100px; /* Adjust the width as needed */
            height: 100px; /* Adjust the height as needed */
            object-fit: cover;
            margin-bottom: 20px;
        }
		h2 {
    		font-size: 28px;
    		color: #BB84E9; /* Change the color to your preference */
    		font-family: 'Arial', sans-serif; /* Change the font family to your preference */
    		text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle text shadow */
		}
		    .form-container.sign-in-container h1 {
        font-size: 28px;
        color: #333;
        margin-bottom: 20px;
    }
</style>
<h2>Admin Pannel login </h2>
<div class="container" id="container">
	<div class="form-container sign-in-container">
	<form method="post" action="">
		    <img src="./img/dp.png" alt="Profile Picture" class="profile-picture">
			<h1>Login</h1>
			<input type="email" name="email" placeholder="Email" required />
        	<input type="password" name="password" placeholder="Password" required />
			<a href="#">Forgot your password?</a>
			<button>Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Admin!</h1>
                <p>Welcome Back !</p>
			</div>
		</div>
	</div>
</div>

