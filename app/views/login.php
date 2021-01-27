<div class="container" id="loginContent">
    <div id="msgLogin">
        <p>-Pour accéder à l'espace d'administration-<br> 
        -Veuillez vous identifier s'il vous plait-</p>
    </div>

    <form action="login/checkLoginInput" method="post" name="login" class="default-form">
    
        <div class="form-group">
            <label for="emailForm">Adresse Email</label>
            <input type="email" name="email" class="form-control" id="emailForm" placeholder="Entrer votre email..." maxlength="255" required>
        </div>

        <div class="form-group">
            <label for="passwordForm">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="passwordForm" placeholder="Mot de passe..." maxlength="1500" required>
            <span class="help-block"><?php echo $errMsg; ?></span>
        </div>
        
        <button type="submit" name="submit" class="btn btn-rust">Valider</button>
    </form>
</div>



