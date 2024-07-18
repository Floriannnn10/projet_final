<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

$admin = $_SESSION['admin'];

// PaFamille_osètres de connexion PDO
$dsn = 'mysql:host=localhost;dbname=produits;charset=utf8';
$username = 'root';
$password = '';

// Message de succès de la session
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']); // Supprimer le message après l'avoir affiché une fois

// Traitement du formulaire lorsqu'il est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $batterie_acc = $_POST['batterie_acc'];
        $Famille_os = $_POST['Famille_os'];
        $version_systeme = $_POST['version_systeme'];
        $couleurs = $_POST['couleurs'];
        $memoire_ram = $_POST['memoire_ram'];
        $stockage_main = $_POST['stockage_main'];
        $commentaires = $_POST['commentaires'];

        // Insertion de l'ordinateur
        $sql = "INSERT INTO telephone (batterie_acc, Famille_os,  version_systeme,  couleurs, stockage_main, commentaires, memoire_ram) 
                VALUES ( :batterie_acc, :Famille_os, :version_systeme, :couleurs,  :stockage_main, :commentaires, :memoire_ram)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'batterie_acc' => $batterie_acc,
            'Famille_os' => $Famille_os,
            'version_systeme' => $version_systeme,
            'couleurs' => $couleurs,
            'memoire_ram' => $memoire_ram,
            'stockage_main' => $stockage_main,
            'commentaires' => $commentaires
        ]);

        // Récupération de l'ID de l'ordinateur inséré
        $id_produit = $pdo->lastInsertId();

        // Gestion des images
        $uploadDir = '../Grande_page/img/';
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $fileName = basename($_FILES['images']['name'][$key]);
            $filePath = $uploadDir . $fileName;

            if (move_uploaded_file($tmp_name, $filePath)) {
                // Insertion du chemin de l'image dans la base de données
                $sql = "INSERT INTO images (id_produit, chemin_image) VALUES (:id_produit, :chemin_image)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['id_produit' => $id_produit, 'chemin_image' => $filePath]);
            } else {
                echo "Erreur lors du téléchargement de l'image: " . $fileName;
            }
        }

        // Stocker le message de succès dans la session
        $_SESSION['message'] = 'Le produit a été ajouté avec succès!';

        // Redirection après succès de l'insertion
        header('Location: telephone.php');
        exit;
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="dashboard.css">

    <title>AdminHub</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">InnovAdmin</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="ordinateur.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Ordinateur</span>
                </a>
            </li>
            <li>
                <a href="accessoire.php">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Accessoires</span>
                </a>
            </li>
            <li>
                <a href="telephone.php">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Téléphone</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Administrateur</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Paramètres</span>
                </a>
            </li>
            <li>
                <a href="login.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Déconnexion</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->


    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>

            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>

        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Téléphone</a>
                        </li>
                    </ul>
                </div>
                <!-- <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a> -->
            </div>

            <!-- <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>$2543</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul> -->


            <!-- Begin Page Content -->

            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Ajouter un produit</h1>
                </div>

                <?php if (!empty($message)) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

                <form method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="batterie_acc">Batterie</label>
                                <input type="text" class="form-control" id="batterie_acc" name="batterie_acc">
                            </div>

                            <div class="form-group">
                                <label for="Famille_os">Famille OS</label>
                                <input type="text" class="form-control" id="Famille_os" name="Famille_os">
                            </div>

                            <div class="form-group">
                                <label for="version_systeme">Version de systeme</label>
                                <input type="text" class="form-control" id="version_systeme" name="version_systeme">
                            </div>

                            <div class="form-group">
                                <label for="couleurs">Couleurs</label>
                                <input type="text" class="form-control" id="couleurs" name="couleurs">
                            </div>

                            <div class="form-group">
                                <label for="memoire_ram">Mémoire Ram</label>
                                <input type="text" class="form-control" id="memoire_ram" name="memoire_ram">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stockage_main">Stockage principale</label>
                                <input type="text" class="form-control" id="stockage_main" name="stockage_main">
                            </div>

                            <div class="form-group">
                                <label for="commentaires">Commentaires</label>
                                <input type="text" class="form-control" id="commentaires" name="commentaires">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="images">Images</label>
                                <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter la Tablettes</button>
                </form>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>
    <script src="path/to/fontawesome.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>



    <script>
        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

        allSideMenu.forEach(item => {
            const li = item.parentElement;

            item.addEventListener('click', function() {
                allSideMenu.forEach(i => {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });

        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');

        menuBar.addEventListener('click', function() {
            sidebar.classList.toggle('hide');
        })
    </script>


</body>

</html>