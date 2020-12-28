<?php require_once "partials/top.php" ?>
<?php require_once "partials/navbar.php" ?>

<div class="jumbotron">
    <h1 class="display-4">Skeniranje foldera</h1>
    <p class="lead">Napisati php funkciju koja skenira zadati folder kao ulazni argument f-je i sve podfoldere i fajlove koji se nalaze u tom folderu, a potom i prikaze njihov sadrzaj na ekranu.</p>
    <hr class="my-4">
    <p>Opcije: <br>
        * potrebno je podesiti da klikom na file, da se otvari izabrani fajl u novom prozoru <br>
        * kada se klikne na folder, sistem treba da skenira sve sto ima u izabranom folderu.</p>
    <a class="btn btn-primary btn-lg" href="skeniraj_folder.php" role="button">Skeniraj</a>
</div>

<?php require_once "partials/bottom.php" ?>