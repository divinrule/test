<?= $this->extend('layouts/frontend') ?>
<?= $this->section('content') ?>
    <div class="row mb-2">
        <?php foreach($propriete as $item): ?>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?= $item['categorie'] ?></strong>
                    <h3 class="mb-0"><?= $item['titre'] ?></h3>
                    <p class="card-text mb-auto"><?= $item['description'] ?></p>
                    <a href="<?= base_url('shopping_cart/buy/'.$item['id']) ?>" class="stretched-link">ajouter au panier</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                    <img src="<?= base_url('uploads/'.$item['image']) ?>" width="200" height="250" alt="image">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


<?= $this->endSection() ?>