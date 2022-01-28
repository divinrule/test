<?= $this->extend('layouts/customers') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row" style="margin-top: 40px">
        <h4 class="col-md-6">Dashboard - Customer informations</h4><hr>
        <div class="col-md-4">
            <form action="<?= base_url('customers/save') ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Enter your password" value="<?= set_value('pwd')?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pwd') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="">Confirm password</label>
                    <input type="password" class="form-control" name="pwd_conf" placeholder="Confirm your password" value="<?= set_value('pwd_conf')?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'pwd_conf') : '' ?></span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" >Update</button>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>

<?= $this->endSection() ?>