<?php
include 'config.php';

try {
    // Récupération des ordinateurs
    $stmt_ordinateurs = $pdo->query('
        SELECT ordinateurs.id_ordinateur AS id, ordinateurs.modele, ordinateurs.processeur, ordinateurs.stockage, ordinateurs.prix, ordinateurs.giga_ram, images.chemin_image 
        FROM ordinateurs 
        LEFT JOIN images ON ordinateurs.id_ordinateur = images.id_produit
    ');
    $ordinateurs = $stmt_ordinateurs->fetchAll(PDO::FETCH_ASSOC);

    // Récupération des téléphones
    $stmt_telephone = $pdo->query('
        SELECT telephone.id_telephone AS id, telephone.batterie_acc, telephone.Famille_os, telephone.version_systeme, telephone.couleurs, telephone.memoire_ram, images.chemin_image 
        FROM telephone 
        LEFT JOIN images ON telephone.id_telephone = images.id_produit
    ');
    $telephones = $stmt_telephone->fetchAll(PDO::FETCH_ASSOC);

    // Récupération des appareils
    $stmt_appareils = $pdo->query('
        SELECT appareil.id_appareil AS id, appareil.modele_app, appareil.ram, appareil.giga, appareil.prix, images.chemin_image 
        FROM appareil
        LEFT JOIN images ON appareil.id_appareil = images.id_produit
    ');
    $appareils = $stmt_appareils->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de requête : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boutiq.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <br><br>
    <div class="buttons">
        <a href="produits_ordi.php"><button class="button"><span class="button-content">Ordinateurs</span></button></a>
        <a href="produits_acc.php"><button class="button"><span class="button-content">Accessoires & Périphériques</span></button></a>
        <a href="produits_tel.php"><button class="button"><span class="button-content">Téléphone</span></button></a>
    </div>
    <br>

    <h1 class="dispo-pc" style="margin-left: 20px; text-decoration:underline">Nos Produits</h1>
    <br><br><br>

    <!-- Section des Ordinateurs -->
    <div class="products-section">
        <h3 style="font-family: impact;"><b>Ordinateurs</b></h3>
        <div class="row">
            <?php foreach ($ordinateurs as $ordinateur) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product" style="background-color:whitesmoke;">
                        <a href="detail_produit.php?id=<?= htmlspecialchars($ordinateur['id']) ?>&type=ordinateur">
                            <img src="<?= htmlspecialchars($ordinateur['chemin_image'] ?: 'images/default.jpg') ?>" alt="<?= htmlspecialchars($ordinateur['modele']) ?>" style="height:200px; width: 100%; object-fit: cover;">
                            <h3 class="product-title"><?= htmlspecialchars($ordinateur['modele']) ?></h3>
                        </a>
                        <p>Processeur: <?= htmlspecialchars($ordinateur['processeur']) ?></p>
                        <p>Stockage: <?= htmlspecialchars($ordinateur['stockage']) ?> Go</p>
                        <p>RAM: <?= htmlspecialchars($ordinateur['giga_ram']) ?> Go</p>
                        <p>Prix: <?= htmlspecialchars($ordinateur['prix']) ?> FCFA</p>
                        <div class="price-add-to-cart">
                            <a href="detail_produit.php?id=<?= htmlspecialchars($ordinateur['id']) ?>&type=ordinateur">
                                <i class="bi bi-info-circle"></i> Détails du produit
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Section des Téléphones -->
    <div class="products-section">
        <h3 style="font-family: impact;"><b>Téléphones</b></h3>
        <div class="row">
            <?php foreach ($telephones as $telephone) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product" style="background-color:whitesmoke;">
                        <a href="detail_produit.php?id=<?= htmlspecialchars($telephone['id']) ?>&type=telephone">
                            <img src="<?= htmlspecialchars($telephone['chemin_image'] ?: 'images/default.jpg') ?>" alt="<?= htmlspecialchars($telephone['Famille_os']) ?>" style="height:200px; width: 100%; object-fit: cover;">
                            <h3 class="product-title"><?= htmlspecialchars($telephone['Famille_os']) ?></h3>
                        </a>
                        <p>Batterie: <?= htmlspecialchars($telephone['batterie_acc']) ?> mAh</p>
                        <p>OS: <?= htmlspecialchars($telephone['Famille_os']) ?> <?= htmlspecialchars($telephone['version_systeme']) ?></p>
                        <p>Couleurs: <?= htmlspecialchars($telephone['couleurs']) ?></p>
                        <p>RAM: <?= htmlspecialchars($telephone['memoire_ram']) ?> Go</p>
                        <p>Prix: <?= htmlspecialchars($telephone['prix']) ?> FCFA</p>
                        <div class="price-add-to-cart">
                            <a href="detail_produit.php?id=<?= htmlspecialchars($telephone['id']) ?>&type=telephone">
                                <i class="bi bi-info-circle"></i> Détails du produit
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Section des Appareils -->
    <div class="products-section">
        <h3 style="font-family: impact;"><b>Appareils</b></h3>
        <div class="row">
            <?php foreach ($appareils as $appareil) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="product" style="background-color:whitesmoke;">
                        <a href="detail_produit.php?id=<?= htmlspecialchars($appareil['id']) ?>&type=appareil">
                            <img src="<?= htmlspecialchars($appareil['chemin_image'] ?: 'images/default.jpg') ?>" alt="<?= htmlspecialchars($appareil['modele_app']) ?>" style="height:200px; width: 100%; object-fit: cover;">
                            <h3 class="product-title"><?= htmlspecialchars($appareil['modele_app']) ?></h3>
                        </a>
                        <p>RAM: <?= htmlspecialchars($appareil['ram']) ?> Go</p>
                        <p>Stockage: <?= htmlspecialchars($appareil['giga']) ?> Go</p>
                        <p>Prix: <?= htmlspecialchars($appareil['prix']) ?> FCFA</p>
                        <div class="price-add-to-cart">
                            <a href="detail_produit.php?id=<?= htmlspecialchars($appareil['id']) ?>&type=appareil">
                                <i class="bi bi-info-circle"></i> Détails du produit
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>