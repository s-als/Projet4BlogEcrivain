<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="loginNav">
    <div class="container">
        <a class="navbar-brand" href="/index.php#page-top">Blog de Jean Forteroche</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                
                <?php
                    if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN'){
                        echo  
                        '<li class="nav-item"><a class="nav-link" href="/admin">Espace Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout">Déconnexion</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="/admin">Connexion</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>












<!--
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/index.php#page-top">Blog de Jean Forteroche</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php#about">À Propos</a></li>
                <li class="nav-item"><a class="nav-link" href="/index.php#projects">Livres</a></li>
                <li class="nav-item"><a class="nav-link" href="/index.php#signup">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="/admin">Espace Admin</a></li>
                <?php
                    if (isset($_SESSION["userRole"])){
                        echo '<li class="nav-item"><a class="nav-link" href="">Déconnexion</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
-->
