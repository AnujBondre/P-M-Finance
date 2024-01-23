<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Pm_finance";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Check if 'Id' is set in the request
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the ID is an integer

    try {
        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM apply_data WHERE Id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Redirect back to the page where the deletion was initiated
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit();
        alert("Rercord Deleted Sucesfully");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: 'Id' not provided in the request.";
}

$conn = null;
?>
