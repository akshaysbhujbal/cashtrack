<?php
if (!isset($page_title)) $page_title = 'CashTrack';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=htmlspecialchars($page_title)?> — CashTrack</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="topbar">
<div class="container">
<h1 class="logo">CashTrack</h1>
<nav>
<?php if (is_logged_in()): ?>
<a href="dashboard.php">Dashboard</a>
<a href="customers.php">Customers</a>
<a href="logout.php">Logout</a>
<?php else: ?>
<a href="index.php">Login</a>
<a href="register.php">Register</a>
<?php endif; ?>
</nav>
</div>
</header>
<main class="container">