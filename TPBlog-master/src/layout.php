<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Game Corner</title>

    <!-- Feuilles de style externes -->
    <link rel="stylesheet" href="css/normalize-3.0.3.min.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">

    <!-- Feuilles de style de l'application -->
    <link rel="stylesheet" href="css/blog-main.css">
    <!-- <link rel="stylesheet" href="css/blog-theme.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ui-button.css">
    <link rel="stylesheet" href="css/ui-form.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    

    <!-- Script Javascript -->
    <script src="js/style.js" defer></script>
</head>
<body>
    <!-- En-tête commune de l'application -->
    <header id="header" class="w-100 m-0" >
        <nav class="navbar navbar-expand-lg navbar-dark bgGreen w-100" style="background-color: green;">
            <a class="navbar-brand" href="index.php"><img class="h-25 w-25"src="images/logo/logo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-items-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li> <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li> <li class="nav-item">
                        <a class="nav-link" href="#">Tests</a>
                    </li> <li class="nav-item">
                        <a class="nav-link" href="#">Sorties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php"><i class="fa fa-cogs"></i> Administration</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="content" class="container-fluid p-0 mt-0">
        <!-- Chargement du template PHTML spécifié par le programme PHP -->
        <?php include 'templates/' . $template . '.php' ?>
    </main>

    <!-- Pied de page commun de l'application -->
    <footer class="container-fluid bgGreen" style="background-color: green;">        
        <div>
            <h4 class="text-center text-white">- Suivez-nous -</h4>
            <div class="d-flex justify-content-around">
                <i class="fab fa-facebook-square fa-3x text-white"></i>
                <i class="fab fa-instagram-square fa-3x text-white"></i>
                <i class="fab fa-twitter-square fa-3x text-white"></i>
                <i class="fab fa-pinterest-square fa-3x text-white"></i>
            </div>

        </div>
        <hr class="mt-2 mb-2" style="background-color: white;">
        <div class="text-center py-1 mb-0 text-white">
            <small>Copyright © 2020 - Game-Corner. Tous droits réservés</small>
        </div>
        <!-- <small>Le blog</small> -->
    </footer>

    <!-- jQuery Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>