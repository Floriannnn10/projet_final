<!-- backend pas encore fait. Pour l'envoie des messages vers leur mail mail -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* boutton envoyer contact */
        .cssbuttons-io {
            position: relative;
            font-family: inherit;
            font-weight: 500;
            font-size: 18px;
            letter-spacing: 0.05em;
            border-radius: 0.8em;
            cursor: pointer;
            border: none;
            background: linear-gradient(to right, #8e2de2, #4a00e0);
            color: ghostwhite;
            overflow: hidden;
        }

        .cssbuttons-io svg {
            width: 1.2em;
            height: 1.2em;
            margin-right: 0.5em;
        }

        .cssbuttons-io span {
            position: relative;
            z-index: 10;
            transition: color 0.4s;
            display: inline-flex;
            align-items: center;
            padding: 0.8em 1.2em 0.8em 1.05em;
        }

        .cssbuttons-io::before,
        .cssbuttons-io::after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .cssbuttons-io::before {
            content: "";
            background: #000;
            width: 120%;
            left: -10%;
            transform: skew(30deg);
            transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
        }

        .cssbuttons-io:hover::before {
            transform: translate3d(100%, 0, 0);
        }

        .cssbuttons-io:active {
            transform: scale(0.95);
        }
    </style>

</head>

<body>

    <!-- L'instruction 'include' en PHP est utilisée pour inclure le contenu d'un fichier externe, Cela permet de réutiliser le même code de navigation sur plusieurs pages de votre site web, ce qui facilite la maintenance et la mise à jour du site. -->
    <?php include 'navbar.php'  ?>

    <!-- Design contact  -->
    <h1 class="contact_1" style="text-align:center; background-color:rgb(103, 103, 213); color: white;">Contactez-nous plus facilement !</h1>

    <br>
    <br>

    <div class="container-image">
        <div class="telephone">
            <img src="img/smartphone-with-front-camera_65961.png" height="40px" alt="image-contact" class="image-contact">
            <h5>Téléphone</h5>
            <br>
            <p>WhatsApp: (+225) 07 79 79 71 04</p>
            <p>Fix : (+225) 27 21 39 62 24</p>
        </div>

        <div class="adresse">
            <img src="img/placeholder_202790.png" height="40px" alt="image-contact" class="image-contact">
            <h5>Adresse</h5>
            <br>
            <p><img src="img/pointer-spot-tool-maps_40028.png" height="20px" alt=" position Géographique">: Abidjan, Côte d'Ivoire</p>
            <p><img src="img/pointer-spot-tool-maps_40028.png" height="20px" alt=" position Géographique">: Koumassi Remblais</p>
        </div>

        <div class="email">
            <img src="img/email_2099199.png" height="40px" alt="image-contact" class="image-contact">
            <h5>Email</h5>
            <br>
            <p><img src="img/email_2099199.png" height="20px" alt="Mail"> : infos@innovinvest.ci</p>
        </div>
    </div>

    <!-- formulaire de contact  -->
    <br><br>
    <h2 class="Question-Formulaire" style="text-align:center;">Si vous avez des questions <br> n'hésitez pas à nous envoyer des messages.</h2>
    <div class="container mt-5">
        <form action="contact.php" method="post">
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" required>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" required>
            </div>
            <div class="form-group">
                <label for="subject"></label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet" required>
            </div>
            <div class="form-group">
                <label for="message"></label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="boutton-envoyer" style="text-align:center;">
                <button class="cssbuttons-io">
                    <button name="envoyer_message" type="submit" class="btn btn-primary">Envoyer le message </button>
                </button>
            </div>
        </form>
    </div>
    <br><br>
    <?php include 'footer.php'  ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>