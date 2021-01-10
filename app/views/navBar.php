<!--
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/index.php#page-top">Blog de Jean Forteroche</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php#about">À Propos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php#projects">Livres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php#signup">Contact</a>
                </li>
                
                <?php/*
                    if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN'){
                        echo  
                        '<li class="nav-item"><a class="nav-link" href="/admin">Espace Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout">Déconnexion</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="/admin">Connexion</a></li>';
                    }
                */?>
            </ul>
        </div>
    </div>
</nav>
-->



<nav class="navbar navbar-expand-lg navbar-mainbg navbar-light fixed-top" id="nav">
        <!--<a class="navbar-brand navbar-logo" href="/index.php#page-top">Blog de Jean Forteroche</a>-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        Menu
        </button>
        <div id="navMarg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>

                    <?php if(isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] == '/login') : ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="/index.php#page-top"><i class="bi bi-arrow-left"></i>Retour à l'acceuil</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="/index.php#page-top">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about">À Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php#projects">Livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/index.php#signup">Contact</a>
                        </li>
                        
                        <?php
                            if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN'){
                                echo  
                                '<li class="nav-item"><a class="nav-link" href="/admin">Espace Admin</a></li>
                                <li class="nav-item"><a class="nav-link" href="/logout">Déconnexion</a></li>';
                            } else {
                                echo '<li class="nav-item"><a class="nav-link" href="/admin">Connexion</a></li>';
                            }
                        ?>
                    <?php endif; ?>

                </ul>
            </div>
        </div>  
    </nav>
