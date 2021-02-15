<div class="row">
    <div class="col mt-5">
        <a href="/admin/nouveau-lien" class="btn btn-success">Ajouter un lien</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Lien</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($liens as $indice => $lien): ?>
                    <tr>
                        <th scope="row"><?php echo $lien['titre']; ?></th>
                        <td><?php echo $lien['lien']; ?></td>
                        <td><?php echo $lien['description']; ?></td>
                        <td>
                            <a href="/admin/modifier-lien?lien=<?php echo $indice; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Modifier">
                                <i class="bi-pencil"></i>
                            </a>
                            <a href="/admin/supprimer-lien?lien=<?php echo $indice; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Supprimer">
                                <i class="bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
