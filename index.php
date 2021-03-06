<?php
if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');
} else {
    exit('Echec lors de l\'ouverture du fichier source.xml.');
}

$show = 0;

if (isset($_GET["page"]) && $_GET["page"] == "accueil") {
    $show = 0;
}
if (isset($_GET["page"]) && $_GET["page"] == "quiSommesNous") {
    $show = 1;
}
if (isset($_GET["page"]) && $_GET["page"] == "nosClients") {
    $show = 2;
}
if (isset($_GET["page"]) && $_GET["page"] == "contact") {
    $show = 3;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">

    <title>ORCODO TESTE NICO</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand aa text-light">Maçonnerie Ocordo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex justify-content-lg-end justify-content-start w-100">
                     <ul class="navbar-nav mb-2 mb-lg-0 text-light">
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="1.html"><?php echo $xml->page[0]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="2.html"><?php echo $xml->page[1]->menu; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="3.html"><?php echo $xml->page[2]->menu; ?></a>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="4.html"><?php echo $xml->page[3]->menu; ?></a>
                    </li>
                </ul>
                </div>
               
            </div>
        </div>
    </nav>
    <div class="p-2">
    <?php if (isset($show)) {
        echo $xml->page[$show]->content;
    }
    ?>
    </div>
    <footer>
        <div class="container-fluid text-center bg-dark shadow text-white  ">
            <div class="row">
                <div class="col-sm mt-3 mb-5">
                    Réseaux sociaux
                    <div>
                        <i class="fab fa-facebook "></i>
                        <i class="fab fa-linkedin"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <div class="col-sm mt-3">
                <i class="far fa-copyright"> Copyright : Nicolas, Houlé, Victor, Flavie: 2021</i>
                <div>
                    Plus les 20 autres personnes dans la tête de Victor. <i class="far fa-smile"></i>
                </div>
                </div>
                <div class="col-sm mt-3">
                    Contact
                    <div>
                        <i class="fas fa-phone-square-alt"> 02.51.84.18.24</i>
                        <div>
                            <i class="fas fa-envelope-square"> contact@ocordo-travaux.fr</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>