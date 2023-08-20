<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Profile</h1>
    <img src="../assets/avatar.png" alt="Avatar">
    <h2><?= $profile['name'] ?></h2>
    <p>Email: <?= $profile['email'] ?></p>
    <p><?= $profile['bio'] ?></p>
    <a href="../index.php">Back to Home</a>
</body>
</html>
