<div class="row justify-content-center">
    <div class="col-md-8 mt-5">
        <a href="button" class="btn btn-primary">Revenir à la liste des liens</a>
    </div>
</div>
<form action="" method="POST">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <h1>Ajouter un lien</h1>
            <?php if (!empty($erreur)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $erreur; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-8">
            <div class="mb-3">
                <label for="titre" class="form-label">Titre du lien</label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="Gagner à coup sûr au loto">
            </div>
            <div class="mb-3">
                <label for="lien" class="form-label">Lien</label>
                <input type="text" class="form-control" id="lien" name="lien" placeholder="https://google.com?q=bon%20courage">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description du lien</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 text-end">
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </div>
    </div>
</form>