<!DOCTYPE html>
<html lang="fr">

    <?php require_once (ROOT.'app/views/head.php')?>
    <script src="https://cdn.tiny.cloud/1/cfqz2yrpjyxr5isitafno42pssq3wkmp616iwb2b6dcct7xl/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

<body id="page-top">
    <?php require_once (ROOT.'app/views/navBarAdmin.php')?>

    <section id="content"><?= $content ?></section>
    
    <?php require_once (ROOT.'app/views/footer.php')?>

    
    <!-- JS -->
    <script src="public/js/bootstrap.bundle.min.js"></script>
</body>

</html>