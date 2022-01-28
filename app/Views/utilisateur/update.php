<?= $this->extend('layouts/customers') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row" style="margin-top: 40px">
        <h4 class="col-md-6">Dashboard - Customer informations</h4><hr>
        <div class="col-md-4">
            <form action="<?= base_url('customers/update/'.$userInfo['id']) ?>" method="post">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="">First/Last name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your first and last name" value="<?= $userInfo['name'] ?>" required>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="tel" placeholder="Enter your telephone number" value="<?= $userInfo['tel'] ?>" required>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'tel') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email" value="<?= $userInfo['email'] ?>" required>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter your address" value="<?= $userInfo['address'] ?>" required>
                    <span class="text-danger"><?= isset($validation) ? display_error($validation, 'address') : '' ?></span>
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