
<div class="row mt-5">
    <h1>Liste de liens intéressants</h1>
</div>

<?php if (empty($liens)): ?>
<div class="row mt-5">
    <p>Il n'y a pas encore de liens disponible, revenez plus tard !</p>
</div>
<?php endif; ?>

<div class="row">
    <?php foreach ($liens as $lien): ?>
    <div class="col-md-6 pb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $lien['titre']; ?></h5>
                <p class="card-text"><?php echo $lien['description']; ?></p>
                <a href="<?php echo $lien['lien']; ?>" class="btn btn-primary">Aller voir le site</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
