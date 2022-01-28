<?= $this->extend('layouts/cart') ?>
<?= $this->section('content') ?>
<h2 class="display-6 text-center mb-4">Pannier<i class="bi-cart4" role="img"></i></h2>
<div class="container">
<div class="table-responsive">
<form action="<?= base_url('shopping_cart/update') ?>" method="post">
    <table class="table text-center">
        <thead>
            <tr>
                <th>Ajouter</th>
                <th>ID</th>
                <th>Titre</th>
                <th>Image</th>
                <th>Prix</th>
                <th>Qte <button type="submit" class="btn btn-success btn-sm" value=""><i class="bi-arrow-repeat" role="img"></i>Actualiser</button></th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($items) : ?>
                <?php foreach ($items as $item) : ?>
                <tr>
                    <td align="center">
                        <a href="<?= base_url('shopping_cart/remove/'.$item['id']) ?>" class="btn btn-danger btn-sm"><i class="bi-trash" role="img"></i></a>
                    </td>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['titre'] ?></td>
                    <td>
                        <img src="<?= base_url() ?>/uploads/<?= $item['image'] ?>" alt="img" width="100" height="50">
                    </td>
                    <td><?= $item['prix'] ?></td>
                    <td>
                        <input type="number" min="1" value="<?= $item['qty'] ?>" style="width: 50px" name="qty[]">    
                    </td>
                    <td><?= $item['prix']*$item['qty'] ?></td>
                </tr>
                <?php endforeach ?>
                <tr>
                    <th colspan="6">Total</th>
                    <th><?= $total ?></th>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
    </form>
</div>
<div class="row">
    <a href="<?= base_url() ?>" class="btn btn-primary col-md-5 col-sm-12" style="margin-left:auto; margin-right:auto;"> Continue shopping</a>
    <a href="<?= base_url('shopping_cart/checkout') ?>" class="btn btn-success col-md-5 col-sm-12" style="margin-left:auto; margin-right:auto;">Continue to checkout</a>
</div>
<br>

</div>
<?= $this->endSection() ?>