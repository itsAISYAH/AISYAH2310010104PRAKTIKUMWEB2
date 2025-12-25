<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('pembelian') ?>">Pembelian</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>        

        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('pembelian/edit') ?>" method="post">

                    <input type="hidden" name="id" value="<?= $penjualan->id ?>">

                    <div class="mb-3">
                        <label>Invoice</label>
                        <input class="form-control" name="invoice" value="<?= $pembelian->invoice ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Total</label>
                        <input class="form-control" name="total" value="<?= $pembelian->total ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Bayar</label>
                        <input class="form-control" name="bayar" value="<?= $pembelian->bayar ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <input class="form-control" name="deskripsi" value="<?= $pembelian->kembali ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Tanggal</label>
                        <input class="form-control" name="tanggal" value="<?= $pembelian->tanggal ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Supplier</label>
                        <select name="kustomer_id" class="form-control">
                            <?php foreach($supplier as $s): ?>
                                <option value="<?= $s['id'] ?>" <?= $pembelian->supplier_id==$s['id']?'selected':'' ?>>
                                    <?= $s['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>User</label>
                        <select name="user_id" class="form-control">
                            <?php foreach($user as $sp): ?>
                                <option value="<?= $sp['id'] ?>" <?= $pembelian->user_id==$sp['id']?'selected':'' ?>>
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
