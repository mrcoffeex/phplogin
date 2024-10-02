<?php  
    include '../db.php';
    include '_session.php';
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
    <p>Hello, <?php echo $user['username']; ?>. You are logged in as an admin.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
