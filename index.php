<?php
// index.php - Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XKnulps - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="file.php">File</a></li>
            <li><a href="gen.php">Gen</a></li>
            <li><a href="generator.php">Generator</a></li>
            <li><a href="har.php">HAR</a></li>
            <li><a href="settings.php">Settings</a></li>
        </ul>
    </nav>
    <main>
        <h1>Welcome to XKnulps</h1>
        <p>This is the landing page for your PHP project.</p>
        <p>Use the navigation above to access different tools and pages.</p>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> XKnulps. All rights reserved.</p>
    </footer>
</body>
</html>