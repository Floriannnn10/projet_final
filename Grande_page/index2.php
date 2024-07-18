<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Customiser accordion */
        .custom-accordion-container {
            max-width: 600px;
            margin: 0 auto;
            /* Centrer l'élément */
        }

        /* témoignage css */
        .testimonial-section {
            background-color: white;
            padding: 60px 0;
        }

        .testimonial-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            margin: 15px;
            transition: transform 0.3s;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
        }

        .testimonial-image {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .testimonial-content {
            text-align: center;
            padding: 20px;
        }

        .testimonial-content h5 {
            margin-top: 15px;
        }

        .testimonial-content p {
            font-style: italic;
            color: #555;
        }
    </style>

</head>

<body>

    <!-- L'instruction 'include' en PHP est utilisée pour inclure le contenu d'un fichier externe, Cela permet de réutiliser le même code de navigation sur plusieurs pages de votre site web, ce qui facilite la maintenance et la mise à jour du site. -->
    <?php include 'navbar.php'; ?>


    <!-- Premier Titre + image titre (soit avec un ordinateur soit 
     avec une representation directe de 1 étudiant - 1 ordinateur)  EN ATTENDANT-->
    <!-- avec carousel  -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item" style="background-image: url(img/Vis_1.png); height: 1000px; background-position: center; background-size: cover;">
            </div>

            <div class="carousel-item" style="background-image: url(img/Vis_2.png); height: 1000px;background-position: center; background-size: cover;">
            </div>

            <div class="carousel-item active" style="background-image: url(img/Vis_3g.png); height: 1000px; background-position: center; background-size: cover;">
            </div>
        </div>
    </div>

    <!-- Qu'est ce que "I Computer"?  -->
    <!-- computer 1 -->
    <div class="container my-5">
        <h1 class="text-center">Découvrez un ICOMPUTER </h1>
        <br>
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2">
                <img class="img-fluid" src="img/pc.jpg-removebg-preview.png" alt="///">
            </div>
            <div class="col-md-6 order-md-1 text-center text-md-start">
                <h1>COMPUTER 1</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat commodi dolor, asperiores ad natus error id blanditiis ducimus accusamus repellat minus veritatis. Eos praesentium veniam laudantium dolore, perferendis optio voluptatum eum quaerat exercitationem. Aliquam nobis eum obcaecati quia at ipsam vitae non eius sint fuga nulla sapiente necessitatibus ea, modi corporis alias eveniet soluta laudantium ducimus, ex qui unde excepturi accusantium iusto! Inventore voluptatem, velit dolorem, unde provident id debitis deleniti exercitationem amet error delectus molestias eos, quis atque illum possimus fuga asperiores magnam soluta quae doloremque est facere molestiae. Similique laboriosam fugiat inventore sunt animi eum dolorum dicta illum?</p>
            </div>
        </div>
    </div>

    <br><br>

    <!-- computer 2 -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img class="img-fluid" src="img/pc2.jpg-removebg-preview.png" alt="///">
            </div>
            <div class="col-md-6 text-center text-md-start">
                <h1 class="paragraphe" style="margin-top:50px;">COMPUTER 2</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat commodi dolor, asperiores ad natus error id blanditiis ducimus accusamus repellat minus veritatis. Eos praesentium veniam laudantium dolore, perferendis optio voluptatum eum quaerat exercitationem. Aliquam nobis eum obcaecati quia at ipsam vitae non eius sint fuga nulla sapiente necessitatibus ea, modi corporis alias eveniet soluta laudantium ducimus, ex qui unde excepturi accusantium iusto! Inventore voluptatem, velit dolorem, unde provident id debitis deleniti exercitationem amet error delectus molestias eos, quis atque illum possimus fuga asperiores magnam soluta quae doloremque est facere molestiae. Similique laboriosam fugiat inventore sunt animi eum dolorum dicta illum?</p>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Pourquoi utiliser des << I Computer ? >> -->
    <!-- mettre les titres au lieu de ... raison  -->
    <div class="container my-5 custom-accordion-container">
        <h1 class="text-center">Pourquoi utiliser un ICOMPUTER ?</h1>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Première raison
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">les ordinateurs ICOMPUTER avec des batteries allant de 4 à 8 secteurs offrent des options variées pour répondre aux besoins de différents types d'utilisateurs, allant des usages légers à intensifs. Ces caractéristiques font de Nos ICOMPUTER une marque appréciée pour son autonomie et sa performance.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Deuxième raison
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Le système de traçabilité intégré aux ordinateurs ICOMPUTER offre une solution complète pour la sécurité, la gestion des actifs et la conformité réglementaire. Cela en fait un choix idéal pour les entreprises, les institutions éducatives, et les utilisateurs individuels qui cherchent à protéger et gérer leurs appareils de manière efficace.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Troisième raison
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Le système de stockage en ligne intégré à nos ordinateurs ICOMPUTER offre une solution complète et sécurisée pour la gestion des données, répondant aux besoins des professionnels, des éducateurs et des particuliers. Il combine la sauvegarde, la synchronisation et le partage de fichiers dans une plateforme unique, facile à utiliser et hautement sécurisée.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Quatrième raison
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Les ordinateurs Nos ICOMPUTER équipés d'un clavier bilingue offrent une solution efficace et pratique pour les utilisateurs multilingues. En facilitant une transition rapide et sans effort entre deux langues, ces claviers améliorent la productivité, réduisent les erreurs de saisie et soutiennent l'apprentissage des langues. Cette fonctionnalité fait de Nos ICOMPUTER un choix idéal pour une large gamme d'utilisateurs, allant des professionnels aux étudiants et aux familles multilingues.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Cinquième raison
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">La proximité des concessionnaires de nos ICOMPUTER est un atout majeur pour les clients, offrant un accès facile et rapide à une gamme complète de services et de produits. Que ce soit pour l'achat, l'assistance technique, ou la maintenance, la présence de concessionnaires locaux assure une expérience client de haute qualité, renforçant ainsi la satisfaction et la fidélité des utilisateurs.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- temoignages -->
    <!-- responsive pas complet  -->
    <div class="temoignage">
        <div class="container testimonial-section">
            <h2 class="text-center mb-5">Témoignages</h2>
            <div class="row justify-content-center">

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/80" alt="Client 1" class="testimonial-image rounded-circle mb-3">
                            </div>
                            <div class="testimonial-content text-center">
                                <h5>Koffi Martin</h5>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/80" alt="Client 2" class="testimonial-image rounded-circle mb-3">
                            </div>
                            <div class="testimonial-content text-center">
                                <h5>Ana Marie Marion</h5>
                                <p>"Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/80" alt="Client 3" class="testimonial-image rounded-circle mb-3">
                            </div>
                            <div class="testimonial-content text-center">
                                <h5> Digopieu Angelle Jessica</h5>
                                <p>"Praesent quis risus ut odio tempor interdum. Nunc eget libero nec urna."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/80" alt="Client 3" class="testimonial-image rounded-circle mb-3">
                            </div>
                            <div class="testimonial-content text-center">
                                <h5>Kouakou Paul-Yves</h5>
                                <p>"Praesent quis risus ut odio tempor interdum. Nunc eget libero nec urna."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/80" alt="Client 3" class="testimonial-image rounded-circle mb-3">
                            </div>
                            <div class="testimonial-content text-center">
                                <h5>Aboua Jean Bernard</h5>
                                <p>"Praesent quis risus ut odio tempor interdum. Nunc eget libero nec urna."</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>