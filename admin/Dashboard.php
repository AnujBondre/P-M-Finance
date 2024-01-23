<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #BB84E9;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .toggle-button {
            cursor: pointer;
            font-size: 18px;
            color: #fff;
            border: none;
            background: none;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .search-input {
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
        }

        .profile-container {
            display: flex;
            align-items: center;
        }

        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .profile-name {
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }

        .content {
            margin-left: 0;
            padding: 16px;
        }

        .dashboard-container {
            text-align: center; 
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logout-button {
            background-color: #BB84E9;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 24px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
        }

        .logout-button:hover {
            background-color: #F4B382;
        }

        .logout-button a {
            text-decoration: none;
            color: white;
        }

        .table-container {
            width: 80%;
            overflow-x: auto;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
        }

        .sidebar-open .content {
            margin-left: 200px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #BB84E9;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        .logout-container {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 20px;
            cursor: pointer;
        }
        .delete-button {
        background-color: #BB84E9;
        padding: 8px 12px;
        color:white;
        border-radius: 20px;
        cursor: pointer;
        text-decoration: none;
        font-size: 14px;
    }

    .delete-button:hover {
        background-color: #F4B382; 
    }
    @media only screen and (max-width: 768px) {
            
            .table-container {
                width: 70%;
            }
        }
        .styled-button {
        padding: 12px 24px; 
        background-color: #BB84E9;
        color: white;
        border: 2px solid #BB84E9;
        border-radius: 20px; 
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s; 
    }

    .styled-button:hover {
        background-color: #4CAF50;
        color: #fff; 
        border-color: #4CAF50; 
    }
    .styled-button a {
        color: inherit; 
        text-decoration: none; 
    }
    .styled-button:hover a {
        color: #fff; 
    }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search..." action="search.php">
        </div>
        <div class="profile-container">
            <img src="./img/dp.png" alt="Profile" class="profile-image">
            <span class="profile-name">Jayant Patil</span>
        </div>
    </div>

    <div class="content" id="content">
        <div class="dashboard-container">
            <h2>Welcome to the Enquiry  Dashboard</h2>
            <button type="submit" class="logout-button" onclick="logout()">
                <a href="logout.php">Logout</a>
            </button>
        </div>
    </div>
    <div class="right-button-container">
        <button class="styled-button" onclick="confirmRedirect()" target="_blank">Applied Data </button>
    </div>
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$db = "Pm_finance";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Uncomment this line if you want to verify the connection success
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$sql = "SELECT * FROM client_data";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email address</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Loan Type</th>
                <th>Loan Amount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $e): ?>
                <tr>
                   <td><?php echo $e['Id'] ?></td>
                   <td><?php echo $e['Full name'] ?></td>
                   <td><?php echo $e['Email Address'] ?></td>
                   <td><?php echo $e['Phone Number'] ?></td>
                   <td><?php echo $e['Address'] ?></td>
                   <td><?php echo $e['Loan Type'] ?></td>
                   <td><?php echo $e['Loan Amount'] ?></td>
                   <td>
                    <a href="delete.php?id=<?php echo $e['Id']; ?>" class="delete-button" onclick="return confirm('Are you sure you want to delete <?php echo $e['Full name']; ?>')">Delete</a>    
                </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <script>
        function logout() {
            alert("You have been logged out!");
        
        }
        function deleteRecord(recordId) {
            alert('Record with ID ' + recordId + ' will be deleted.');
        }
        function confirmRedirect() {
        // Display a confirmation dialog
        var userConfirmation = window.confirm("Are you sure you want to go to the Applied Data page?");

        // If the user clicks OK, redirect to the target URL
        if (userConfirmation) {
            window.location.href = 'Apply_list.php';
        } else {
            // If the user clicks Cancel, do nothing (or handle accordingly)
        }
    }
    </script>
</body>
</html>
