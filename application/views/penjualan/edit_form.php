<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('penjualan') ?>">Penjualan</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>        

        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('penjualan/edit') ?>" method="post">

                    <input type="hidden" name="id" value="<?= $penjualan->id ?>">

                    <div class="mb-3">
                        <label>Invoice</label>
                        <input class="form-control" name="invoice" value="<?= $penjualan->invoice ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Total</label>
                        <input class="form-control" name="total" value="<?= $penjualan->total ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Bayar</label>
                        <input class="form-control" name="bayar" value="<?= $penjualan->bayar ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Kembali</label>
                        <input class="form-control" name="kembali" value="<?= $penjualan->kembali ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Tanggal</label>
                        <input class="form-control" name="tanggal" value="<?= $penjualan->tanggal ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Kustomer</label>
                        <select name="kustomer_id" class="form-control">
                            <?php foreach($kustomer as $s): ?>
                                <option value="<?= $s['id'] ?>" <?= $penjualan->kustomer_id==$s['id']?'selected':'' ?>>
                                    <?= $s['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>User</label>
                        <select name="user_id" class="form-control">
                            <?php foreach($user as $sp): ?>
                                <option value="<?= $sp['id'] ?>" <?= $penjualan->user_id==$sp['id']?'selected':'' ?>>
                                    <?= $sp['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-plus"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
