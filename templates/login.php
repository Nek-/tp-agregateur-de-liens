<div class="row justify-content-center mt-5">
    <div class="col-sm-8 shadow p-3 mb-5 bg-body rounded">
        <form action="" method="POST">
            <h1>Connexion</h1>
            <?php if (!empty($erreur)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $erreur; ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="motdepasse" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="motdepasse" name="mot_de_passe">
            </div>
            <button type="submit" class="btn btn-primary">Accéder à l'administration</button>
        </form>
    </div>
</div>