<?= $this->extend('layouts/cart') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center" style="margin-top:45px; margin-bottom: 20px;">
        
        <?php if (session()->getFlashdata('fail')) { ?>
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <?= session()->getFlashdata('fail') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>

        <div class="col-md-4">
            <h4>Creer un compte</h4><hr>
            <form action="<?= base_url('utilisateur/save') ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="">Nom et prenom</label>
                    <input type="text" class="form-control" name="name" placeholder="Nom et prenom" value="<?= set_value('name')?>">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="tel" placeholder="Telephone" value="<?= set_value('tel')?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email')?>">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" value="<?= set_value('adresse')?>">
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Enter your password" value="<?= set_value('pwd')?>">
                </div>
                <div class="form-group">
                    <label for="">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" name="pwd_conf" placeholder="Confirm your password" value="<?= set_value('pwd_conf')?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" >Enregistrer</button>
                </div>
                <br>
                <p><a href="<?= base_url('utilisateur/signin') ?>">Si vous avez deja un compte veiller vous connecter</a></p>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>