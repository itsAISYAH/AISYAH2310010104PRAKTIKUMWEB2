<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>        

        <div class="card mb-4">
            <div class="card-header">
                <a href="<?= site_url('barang/add') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New
                </a>
            </div>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success m-3">
                    <?= $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barkode</th>
                                <th>Nama</th>
                                <th>Satuan</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($barang as $b): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $b->barkode ?></td>
                                <td><?= $b->name ?></td>
                                <td><?= $b->satuan ?></td>
                                <td><?= $b->kategori ?></td>
                                <td><?= $b->stok ?></td>
                                <td><?= $b->harga_beli ?></td>
                                <td><?= $b->harga_jual ?></td>
                                <td>
                                    <a href="<?= site_url('barang/getedit/'.$b->id) ?>" class="btn btn-sm btn-info">Edit</a>
                                    <a href="<?= site_url('barang/delete/'.$b->id) ?>" 
                                       onclick="return confirm('Yakin hapus data?')" 
                                       class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
