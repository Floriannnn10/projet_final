<!-- Navbar, Logo, barre recherche, login -->
<!-- Grande div navbarrG -->
<div id="navbarrG" style="background: #f1f7fe;">
    <nav class="navbar navbar-expand-lg body-tertiary">
        <div class="container-fluid">
            <!-- Bouton de bascule pour les petits écrans -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenu de la navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Lien vers l'accueil -->
                    <li class="nav-item">
                        <a style="color: black; font-size:20px; margin-left:20px;" class="nav-link" href="index2.php">Accueil</a>
                    </li>
                    <!-- Lien vers la boutique -->
                    <li class="nav-item">
                        <a style="color: black; font-size:20px; margin-left:20px;" class="nav-link" href="boutique.php">Boutique</a>
                    </li>
                    <!-- Lien vers la page de contact -->
                    <li class="nav-item">
                        <a style="color: black; font-size:20px; margin-left:20px;" class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <!-- Menu déroulant pour les comptes -->
                    <li class="nav-item dropdown">
                        <a style="color: black; font-size:20px; margin-left:20px;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Comptes
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Lien pour se connecter -->
                            <li><a class="dropdown-item" href="login.php">Se connecter</a></li>
                            <!-- Lien pour s'inscrire -->
                            <li><a class="dropdown-item" href="inscription.php">S'inscrire</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Logo du site -->
                <div class="image_logo">
                    <a href="index2.php"><img src="img/logo.png" alt="logo du site" height="90px" style="margin-left:15px;"></a>
                </div>

                <!-- Barre de recherche -->
                <div class="search-header">
                    <input placeholder="Search" class="search-header__input" style="background-color: rgb(103, 103, 213); color:white;" type="text" />
                    <button class="search-header__button">
                        <svg fill="none" viewBox="0 0 18 18" height="18" width="18" class="search-header__icon">
                            <path fill="#3A3A3A" d="M7.132 0C3.197 0 0 3.124 0 6.97c0 3.844 3.197 6.969 7.132 6.969 1.557 0 2.995-.49 4.169-1.32L16.82 18 18 16.847l-5.454-5.342a6.846 6.846 0 0 0 1.718-4.536C14.264 3.124 11.067 0 7.132 0zm0 .82c3.48 0 6.293 2.748 6.293 6.15 0 3.4-2.813 6.149-6.293 6.149S.839 10.37.839 6.969C.839 3.568 3.651.82 7.132.82z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Icônes favoris et panier -->
                <div class="login_sign_up">
                    <a href="#">
                        <img src="img/Panier.png" alt="Panier" style="margin-right: 10px" height="20px">
                    </a>
                    <a href="#">
                        <img src="img/Fav.png" alt="fav" style="margin-right: 10px" height="20px">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>