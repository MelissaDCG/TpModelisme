<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>PHP</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--cdn Fontawesome pour les icones  -->
    <link rel="stylesheet" href="css/fontawesome/css/all.css">

    <!-- JS -->
    <script src="js/main.js" defer></script>

</head>
<body class="w-100 p-0 m-0">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-0 m-0">
            <a class="navbar-brand" href="index.php"><img src="images/logo/logoWhite.png" alt="logo" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addBons.php">Bons de Commande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="commandes.php">Liste de Commandes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Administrateur</a>
                    </li>
                </ul>
            </div>  
        </nav>
    </header>
    <main class="m-0 p-0">
        <?php include $template.".php"; ?>
    </main>
    <!-- Pied de page commun de l'application -->
    <footer class="container-fluid bg-dark">        
        <div>
            <h4 class="text-center text-white">- Suivez-nous -</h4>
            <div class="d-flex justify-content-around">
                <i class="fab fa-facebook-f fa-2x text-white"></i>
                <i class="fab fa-instagram  fa-2x text-white"></i>
                <i class="fab fa-twitter fa-2x text-white"></i>
                <i class="fab fa-pinterest fa-2x text-white"></i>
            </div>
        </div>
        <hr class="mt-2 mb-2" style="background-color: white;">
        <div class="text-center py-1 mb-0 text-white">
            <small>© 2020 - MDC Modelisme. Tous droits réservés</small>
        </div>
    </footer>

    <!-- cdn bootstrap js jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>