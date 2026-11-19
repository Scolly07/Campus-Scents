<?php
// Find out which page is open so we can highlight it in the menu
$currentPage = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js" defer></script>
</head>
<body>

<header class="site-header">
    <div class="nav-wrap">
        <a class="logo" href="index.php">campus<span>scents</span></a>

        <button class="menu-toggle" id="menuToggle">&#9776;</button>

        <nav class="main-nav" id="mainNav">
            <a href="index.php" <?php if ($currentPage == "index.php") { echo 'class="current"'; } ?>>Home</a>
            <a href="about.php" <?php if ($currentPage == "about.php") { echo 'class="current"'; } ?>>About</a>
            <a href="contact.php" <?php if ($currentPage == "contact.php") { echo 'class="current"'; } ?>>Contact</a>
            <button class="language-toggle" id="languageToggle" type="button">EN / ZU</button>
        </nav>
    </div>
</header>
