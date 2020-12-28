<?php require_once "partials/top.php" ?>
<?php require_once "partials/navbar.php" ?>


<div class="jumbotron">
    <h1 class="display-4">Skeniranje foldera</h1>
    <p class="lead"> </p>
    <hr class="my-4">
    <p> 
        <?php
        require_once "Scanner.php";

        $scanner = new Scanner();
        $scanner->directory('folder');

        ?>
    </p>
    <a class="btn btn-primary btn-lg" href="index.php" role="button">Nazad</a>
</div>

<?php require_once "partials/bottom.php" ?>