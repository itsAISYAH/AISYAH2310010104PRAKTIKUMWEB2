<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>        

        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('kustomer/edit') ?>" method="post">

                    <input type="hidden" name="id" value="<?= $penjualan->id ?>">

                    <div class="mb-3">
                        <label>Nama Kustomer</label>
                        <input class="form-control" name="invoice" value="<?= $kustomer->invoice ?>" required>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-plus"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
