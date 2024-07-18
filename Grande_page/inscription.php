<?php
session_start();

// Configuration de la base de données
$dsn = 'mysql:host=localhost;dbname=utilisateur;charset=utf8';
$username = 'root';
$password = '';

// Traitement du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $titre = $_POST['titre'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);

        // Préparation et exécution de la requête d'insertion
        $sql = "INSERT INTO client (titre, nom, email, mot_de_passe) 
                VALUES (:titre, :nom, :email, :mot_de_passe)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titre' => $titre,
            ':nom' => $nom,
            ':email' => $email,
            ':mot_de_passe' => $mot_de_passe
        ]);

        // Récupération de l'ID du client nouvellement inscrit
        $client_id = $pdo->lastInsertId();

        // Mise à jour de la session avec l'ID du client
        $_SESSION['client_id'] = $client_id;

        // Redirection après inscription réussie
        $_SESSION['success'] = "Inscription réussie !";
        header('Location: index2.php');
        exit;
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="inscription.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            color: black;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 700px;
            position: relative;
            z-index: 1;
        }

        .registration-form {
            width: 400px;
            padding: 30px;
            border-radius: 15px;
            background: #ffff;
            /* Arrière-plan blanc légèrement transparent */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="background" style="background: linear-gradient(#5B2886, #B61C28); height: 800px; background-position: center; background-size: cover;">

        <div class="container">
            <div class="registration-form">
                <h1>Inscription</h1>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['success']; ?>
                    </div>
                    <?php unset($_SESSION['success']); ?>
                <?php endif; ?>
                <form action="inscription.php" method="POST">
                    <div class="mb-3">
                        <div>
                            <input type="radio" id="mr" name="titre" value="Mr" required>
                            <label for="mr">Mr</label>
                            <input type="radio" id="mme" name="titre" value="Mme">
                            <label for="mme">Mme</label>
                            <input type="radio" id="mlle" name="titre" value="Mlle">
                            <label for="mlle">Mlle</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mot_de_passe" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
                    </div>

                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>




    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>