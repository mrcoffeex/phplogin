<?php
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') { // check if the session is valid as admin
        header('Location: ../');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <p>Hello, <?php echo $_SESSION['username']; ?>. You are logged in as an admin.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
