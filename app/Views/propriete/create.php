<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Ajouter une propriete
                            <a href="<?= base_url('propriete') ?>" class="btn btn-danger btn-sm float-end">Back</a>
                        </h5>
                    </div>
                    <form action="<?= base_url('propriete/enregistrer') ?>" method="post" enctype="multipart/form-data">                   
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Titre</label>
                                        <input type="text" name="titre" class="form-control" required placeholder="titre">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Categorie</label>
                                        <input type="text" name="categorie" class="form-control" required placeholder="Categorie">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Adresse</label>
                                        <input type="text" name="adresse" class="form-control" required placeholder="Adresse">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" required placeholder="Description" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Prix</label>
                                        <input type="text" name="prix" class="form-control" required placeholder="Prix">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <hr>
                                        <button type="submit" class="btn btn-primary px-4 float-end">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>