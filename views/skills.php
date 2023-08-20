<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>My Skills</h1>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?= $skill['name'] ?> (Experience: <?= $skill['experience'] ?>)</li>
        <?php endforeach; ?>
    </ul>
    <a href="../index.php">Back to Home</a>
</body>
</html>
