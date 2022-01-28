<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
            
                <?php if (session()->getFlashdata('status')) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('status') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>

                <div class="card">
                    <div class="card-header">
                        <h5>Les Propriete
                            <a href="<?= base_url('propriete/ajouter') ?>" class="btn btn-primary btn-sm float-end">Ajouter</a>
                        </h5>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Categories</th>
                                    <th>Description</th>
                                    <th>Prix</th>
                                    <th>Image</th>
                                    <th>Action</th>
                               </tr>
                            </thead>
                            <tbody>
                                <?php foreach($propriete as $item): ?>
                                <tr>
                                    <td><?= $item['id'] ?></td>
                                    <td><?= $item['titre'] ?></td>
                                    <td><?= $item['categorie'] ?></td>
                                    <td><?= $item['description'] ?></td>
                                    <td><?= $item['prix'] ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/'.$item['image']) ?>" alt="Image" height="50px" width="50px">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('propriete/editer/'.$item['id']) ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url('propriete/supprimer/'.$item['id']) ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>