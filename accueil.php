<?php
session_start();
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<h2>Bienvenue <?php echo htmlspecialchars($_SESSION['user_nom']); ?>!</h2>
<p>Votre email: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
<a href="logout.php">Se déconnecter</a>