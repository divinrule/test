<?= $this->extend('layouts/cart') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center" style="margin-top:45px; margin-bottom: 20px;">
        <?php if (session()->getFlashdata('success')) { ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
        <?php if (session()->getFlashdata('fail')) { ?>
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <?= session()->getFlashdata('fail') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php } ?>
        
        <div class="col-md-4">
            <h4>Se connecter</h4><hr>
            <form action="<?= base_url('customers/check') ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="email" value="<?= set_value('email')?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control" id="mypwd" name="pwd" placeholder="mot de passe" value="<?= set_value('pwd')?>">                 
                    <input type="checkbox" onclick="myFunction()">Visualiser
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pwd') : '' ?></span>
                </div>
                <br>
                <p class="row float-end"><a href="#">Mot de passe oublier</a></p>
                <p></p>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" >Connexion</button>
                </div>
                <br>
                <p><a href="<?= base_url('customers/signup') ?>">Veuillez vous inscrire si vous n'avez pas de compte</a></p>
            </form>
        </div>
        <script>
            function myFunction(){
                var x = document.getElementById("mypwd");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </div>
</div>

<?= $this->endSection() ?>