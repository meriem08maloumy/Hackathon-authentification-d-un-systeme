<?php
session_start();
require 'config.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Validation
    if (empty($nom)) {
        $errors[] = "Le nom est obligatoire.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Adresse email invalide.";
    }
    if (strlen($password) < 8) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
    }

    if (empty($errors)) {
        try {
            // Vérifier si l'email existe
            $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
            $stmt->execute([$email]);

            if ($stmt->fetch()) {
                $errors[] = "Cet email est déjà utilisé.";
            } else {
                // Hash du mot de passe
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Insertion avec nom
                $stmt = $pdo->prepare('INSERT INTO users (nom, email, password) VALUES (?, ?, ?)');
                $stmt->execute([$nom, $email, $hashedPassword]);

                header('Location: login.php');
                exit();
            }
        } catch (PDOException $e) {
            $errors[] = "Une erreur est survenue lors de l'inscription : " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-container">
        <h2>Inscription</h2>

        <?php if (!empty($errors)): ?>
            <div class="error-message">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="signup.php" method="post">
            
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="entrer ton nom" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="votre mail" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" id="password" class="form-control"  placeholder="password" required>
                <small class="password-requirements">(8 caractères minimum)</small>
            </div>

            <button type="submit" class="btn">S'inscrire</button>
            

            <div class="toggle-section">
            <p>deja un compte ?<a href="login.php"> se connecter</a></p>
            </div>
        </form>
    </div>
</body>
</html>