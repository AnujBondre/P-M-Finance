<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied loan List</title>
    <!-- Include your styles here if needed -->
    <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        .view-button {
            display: inline-block;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid #bbb;
            border-radius: 20px;
            background-color: #3498db;
            color: white;
        }

        .view-button:hover {
            background-color: #2c648a;
        }
        .navbar {
            background-color: #3498db;
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
        .logout-container {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 20px;
            cursor: pointer;
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
            background-color: #3498db;
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
            background-color: #2c648a;
        }

        .logout-button a {
            text-decoration: none;
            color: white;
        }
        .styled-button {
        padding: 12px 20px; 
        background-color: #3498db;
        color: white;
        border: none; 
        border-radius: 20px; 
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s, color 0.3s, border-color 0.3s; 
    }

    .styled-button:hover {
        background-color: #2c648a;
        color: #fff; 
        border-color: #4CAF50; 
    }
    .styled-button a {
        color: inherit; 
        text-decoration: none; 
    }
    .table-container {
            width: 90%;
            overflow-x: auto;
            margin: 20px auto;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
        }
    table {
        width: 100%;
        border-collapse: collapse;
        padding: auto;
    }
    
    </style>
</head>
<body>
<div class="navbar">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
        </div>
        <div class="profile-container">
            <img src="./img/dp.png" alt="Profile" class="profile-image">
            <span class="profile-name">Jayant Patil</span>
        </div>
    </div>
    <div class="content" id="content">
        <div class="dashboard-container">
            <h2>Welcome to the Applied User Dashboard</h2>
            <button type="submit" class="logout-button" onclick="logout()">
                <a href="logout.php">Logout</a>
            </button>
        </div>
    </div>
    <div class="right-button-container">
    <button class="styled-button" onclick="confirmRedirect()">Enquiry Data</button>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pm_finance";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM apply_data";
$result = $conn->query($sql);

if ($result === false) {
    die("Query failed: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<div class='table-container'>
        <table>
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>WhatsApp Phone</th>
                <th>Loan Type</th>
                <th>Loan Amount</th>
                <th>Pancard</th>
                <th>Aadharcard</th>
                <th>Bank Statement</th>
                <th>Passport Photo</th>
                <th>Designation</th>
                <th>Income Tax Return </th>
                <th>Salary Slip</th>
                <th>Action</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['fullName']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['whatsapp_phone']}</td>
                <td>{$row['loan_Type']}</td>
                <td>{$row['loan_Amount']}</td>
                <td><a class='view-button' href='uploads/{$row['pancard']}' target='_blank'>View</a></td>
                <td><a class='view-button' href='uploads/{$row['aadharcard']}' target='_blank'>View</a></td>
                <td><a class='view-button' href='uploads/{$row['bankstat']}' target='_blank'>View</a></td>
                <td><a class='view-button' href='uploads/{$row['passphoto']}' target='_blank'>View</a></td>
                <td>" . (isset($row['Desigination']) ? $row['Desigination'] : 'N/A') . "</td>
                <td>" . (isset($row['income_tax_return']) && $row['income_tax_return'] !== '' ? '<a class="view-button" href="uploads/' . $row['income_tax_return'] . '" target="_blank">View</a>' : 'N/A') . "</td>
                <td>" . (isset($row['salary_slip']) && $row['salary_slip'] !== '' ? '<a class="view-button" href="uploads/' . $row['salary_slip'] . '" target="_blank">View</a>' : 'N/A') . "</td>
                <td><a href='Apply_delete.php?id={$row['id']}' class='view-button' onclick=\"return confirm('Are you sure you want to delete {$row['fullName']}?')\">Delete</a>
                </td>
            </tr>";
        
    }

    echo "</table></div>";
} else {
    echo "0 results";
}

$conn->close();
?>
<script>
     function logout() {
            alert("You have been logged out!");
        
        }
        function deleteRecord(recordId) {
            alert('Record with ID ' + recordId + ' will be deleted.');
        }
        
        function confirmRedirect() {
        var userConfirmation = window.confirm("Are you sure you want to go to the Enquiry Data page?");

        if (userConfirmation) {
            window.location.href = 'Dashboard.php';
        } else {
        }
    }
</script>

</body>
</html>
