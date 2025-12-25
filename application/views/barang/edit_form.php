<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>        

        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('barang/edit') ?>" method="post">

                    <input type="hidden" name="id" value="<?= $barang->id ?>">

                    <div class="mb-3">
                        <label>Barkode</label>
                        <input class="form-control" name="barcode" value="<?= $barang->barcode ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input class="form-control" name="name" value="<?= $barang->name ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Harga Beli</label>
                        <input class="form-control" name="harga_beli" value="<?= $barang->harga_beli ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Harga Jual</label>
                        <input class="form-control" name="harga_jual" value="<?= $barang->harga_jual ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Stok</label>
                        <input class="form-control" value="<?= $barang->stok ?>" disabled>
                    </div>

                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="kategori_id" class="form-control">
                            <?php foreach($kategori as $k): ?>
                                <option value="<?= $k['id'] ?>" <?= $barang->kategori_id==$k['id']?'selected':'' ?>>
                                    <?= $k['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Satuan</label>
                        <select name="satuan_id" class="form-control">
                            <?php foreach($satuan as $s): ?>
                                <option value="<?= $s['id'] ?>" <?= $barang->satuan_id==$s['id']?'selected':'' ?>>
                                    <?= $s['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Supplier</label>
                        <select name="supplier_id" class="form-control">
                            <?php foreach($supplier as $sp): ?>
                                <option value="<?= $sp['id'] ?>" <?= $barang->supplier_id==$sp['id']?'selected':'' ?>>
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
