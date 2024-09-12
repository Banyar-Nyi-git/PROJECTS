<?php
// Database connection details
$host = 'localhost';
$dbname = 'employee_db';
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password

try {   
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statements for insertion and update
    $insertStmt = $pdo->prepare("INSERT INTO employees (employee_id, name, email, gender, phone, address, salary) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $updateStmt = $pdo->prepare("UPDATE employees SET name = ?, email = ?, gender = ?, phone = ?, address = ?, salary = ? WHERE employee_id = ?");

    // Loop through the posted data
    for ($i = 0; $i < count($_POST['employee_id']); $i++) {
        $employee_id = $_POST['employee_id'][$i];
        $name = $_POST['name'][$i];
        $email = $_POST['email'][$i];
        $gender = $_POST['gender'][$i];  // Ensure gender is handled
        $phone = $_POST['phone'][$i];
        $address = $_POST['address'][$i];
        $salary = $_POST['salary'][$i];

        // Check if the employee_id already exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM employees WHERE employee_id = ?");
        $stmt->execute([$employee_id]);
        $exists = $stmt->fetchColumn();

        if ($exists) {
            // Update existing record
            $updateStmt->execute([$name, $email, $gender, $phone, $address, $salary, $employee_id]);
        } else {
            // Insert new record
            $insertStmt->execute([$employee_id, $name, $email, $gender, $phone, $address, $salary]);
        }
    }

    // Redirect back to index.php with a success flag
    header("Location: index.php?success=1");
    exit;

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>
