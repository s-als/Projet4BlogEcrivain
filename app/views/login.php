<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="loginNav">
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
                <li class="nav-item">
                    <a class="nav-link" href="/index.php#page-top">Retour</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="msgLogin">
    <p>Bienvenue sur l'espace d'administration.</br> 
    Veuillez vous identifier s'il vous plait.</p>
</div>


<form action="admin" method="post" name="login" id="loginForm">

    <div class="form-group">
        <label for="emailForm">Adresse Email</label>
        <input type="email" name="email" class="form-control" id="emailForm" placeholder="Entrer votre email...">
        
    </div>

    <div class="form-group">
        <label for="passwordForm">Mot de passe</label>
        <input type="password" name="password" class="form-control" id="passwordForm" placeholder="Mot de passe...">
        <span class="help-block"><?php echo $errMsg; ?></span>
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Valider</button>
</form>

<?php
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>