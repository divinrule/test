<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit & update items
                            <a href="<?= base_url('items') ?>" class="btn btn-danger btn-sm float-end">Back</a>
                        </h5>
                    </div>
                    <form action="<?= base_url('items/update/'.$product['id']) ?>" method="post" enctype="multipart/form-data">                   
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Item name</label>
                                        <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" required placeholder="Enter item name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" required placeholder="Enter description" rows="3"><?= $product['description'] ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Price</label>
                                        <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control" required placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                        <hr>
                                        <button type="submit" class="btn btn-primary px-4 float-end">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <img src="<?= base_url('uploads/'.$product['image']) ?>" class="w-100" alt="Product Image">
            </div>
        </div>
    </div>

<?= $this->endSection() ?>