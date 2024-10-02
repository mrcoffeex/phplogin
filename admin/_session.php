<?php
    session_start();

    if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'admin') { // check if the session is valid as admin and the id is present
        header('Location: ../');
        exit;
    }

    $userId = $_SESSION['id'];

    $getUser=$conn->prepare("SELECT * FROM users
                            Where
                            id = :id");
    $getUser->execute([
        'id' => $userId
    ]);

    $user=$getUser->fetch(PDO::FETCH_ASSOC);
?>