<?= $this->extend('layouts/cart') ?>
<?= $this->section('content') ?>
<div class="py-5 text-center">
    <h2>Commande</h2>
    <p class="lead"></p>
</div>

<div class="container">
    <main>
        <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Votre pannier</span>
                    <span class="badge bg-primary rounded-pill"><?= count($items) ?></span>
                </h4>
                <ul class="list-group mb-3">
                    <?php if ($items) : ?>
                        <?php foreach ($items as $item) : ?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div><h6 class="my-0"><?= $item['titre'] ?></h6></div>
                            <span class="text-muted">x <?= $item['qty'] ?></span>
                            <span class="text-muted"><?= $item['prix']*$item['qty'] ?></span>
                        </li>
                        <?php endforeach ?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div class="text-success"><h6 class="my-0">Shipping</h6></div>
                            <span class="text-muted">0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BIF)</span>
                            <strong><?= $total ?></strong>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Votre adresse</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Prenon</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Prenom" value="" required>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Nom" value="" required>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Telephone</label>
                            <input type="text" class="form-control" id="address" placeholder="79 000 000" required>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="address" placeholder="rohero, av, no" required>
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Province</label>
                            <select class="form-select" id="country" required>
                                <option value="">Choisir...</option>
                                <option>Bujumbura Mairie</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Commune</label>
                            <select class="form-select" id="state" required>
                                <option value="">Choisir...</option>
                                <option>Muha</option>
                                <option>Mukaza</option>
                                <option>Ntahangwa</option>
                            </select>
                        </div>
                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Checkout</button>
                        <p></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
<?= $this->endSection() ?>