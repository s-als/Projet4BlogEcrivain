<nav class="navbar navbar-expand-lg navbar-mainbg navbar-light fixed-top" id="nav">
    <button class="navbar-toggler" id="responsiveNavBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div id="navMarg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                
                <!--If on login page, show only Back to home-->
                <?php if(isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] == '/login') : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/index.php#page-top"><i class="bi bi-arrow-left"></i>Retour à l'acceuil</a>
                    </li>

                <!--If on admin page, show admin option-->
                <?php elseif(isset($_SERVER['REDIRECT_URL']) && $_SERVER['REDIRECT_URL'] == '/admin'): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin#page-top"><i class="bi bi-wrench"></i>Espace administration</a>
                    </li>
                    <li class="nav-item">
                        <a class="" data-bs-toggle="collapse" href="#collapseProfile" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Modifier mon profil
                        </a>
                    </li>
                    <li>
                        <a class="" data-bs-toggle="collapse" href="#collapseChptCom" role="button" aria-expanded="false" aria-controls="collapseChptCom">
                        Editer des chapitres et des commentaires
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/index.php#page-top">Acceuil du blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Déconnexion</a>
                    </li>


                <?php else: ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="/index.php#page-top">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">À Propos de moi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php#projects">À Propos du livre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/articles">Sommaire du livre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php#signup">Contact</a>
                    </li>

                    <!--If Admin is connected, show admin navigation options-->
                    <?php
                        if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 'ADMIN'){
                            echo  
                            '<li class="nav-item"><a class="nav-link" href="/admin">Espace Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="/logout">Déconnexion</a></li>';
                        } else {
                            echo '<li class="nav-item"><a class="nav-link" href="/login">Connexion</a></li>';
                        }
                    ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>  
</nav>