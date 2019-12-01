<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require ('views/head.php'); ?>
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-home">
<header>
  <?php require ("views/navbar.php"); ?>
</header>
<main>
  <?php if (!isset($_GET["views"])): ?>
    <?php require ("views/main.php"); ?>
  <?php else: ?>
    <?php require ("views/".$_GET["views"].".php"); ?>
  <?php endif; ?>
</main>
<footer class="page-footer font-small blue pt-4">
    <?php  require ("views/footer.php"); ?>
</footer>
<?php require 'libraries/scrip'; ?>
</body>
</html>
