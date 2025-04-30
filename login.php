<?php
session_start();
require 'config.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nom'] = $user['nom']; 
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['is_logged_in'] = true;
            header('Location: dash.php'); 
            exit();
        } else {
            $errors[] = "Email ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        $errors[] = "Une erreur s'est produite lors de la connexion à la base de données : " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="auth-container">
        <h2>Connexion</h2>
    
        <form action="login.php" method="post" >
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control"   placeholder="votre email" required>
            </div>
            
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
            </div>
            <div class="error-message">
            <?php foreach ($errors as $error) { echo "<p>$error</p>"; } ?>
            </div>
            <button type="submit" class="btn">Se connecter</button>
            
            <div class="toggle-section">
                <p><a href="signup.php">Créer un compte</a></p>
            </div>
        </form>
    </div>
</body>
</html>