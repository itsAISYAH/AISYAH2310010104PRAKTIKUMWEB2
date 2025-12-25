<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('satuan') ?>">Satuan</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>        

        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('satuan/edit') ?>" method="post">

                    <input type="hidden" name="id" value="<?= $satuan->id ?>">

                    <div class="mb-3">
                        <label>Name</label>
                        <input class="form-control" name="barcode" value="<?= $satuan->name ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <input class="form-control" name="name" value="<?= $satuan->deskripsi ?>" required>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-plus"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
