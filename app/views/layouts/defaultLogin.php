<!DOCTYPE html>
<html lang="fr">

    <?php require_once (ROOT.'app/views/head.php')?>
    
<body id="page-top">
    <?php require_once (ROOT.'app/views/navBar.php')?>

    <section id="content"><?= $content ?></section>
    
    <?php require_once (ROOT.'app/views/footer.php')?>

    <!-- JS -->
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/main.js"></script>
</body>

</html>