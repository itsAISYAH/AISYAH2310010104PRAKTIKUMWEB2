<main>
    <div class="container-fluid">
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= site_url('supplier') ?>">Supplier</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
        </ol>        

        <div class="card">
            <div class="card-body">
                <form action="<?= site_url('supplier/edit') ?>" method="post">

                    <input type="hidden" name="id" value="<?= $supplier->id ?>">

                    <div class="mb-3">
                        <label>NIK</label>
                        <input class="form-control" name="nik" value="<?= $supplier->nik ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Name</label>
                        <input class="form-control" name="name" value="<?= $supplier->name ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Telpon</label>
                        <input class="form-control" name="telp" value="<?= $supplier->telp ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input class="form-control" name="email" value="<?= $supplier->email ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" value="<?= $supplier->alamat ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Perusahaan</label>
                        <input class="form-control" name="perusahaan" value="<?= $supplier->perusahaan ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Nama Bank</label>
                        <input class="form-control" name="nama_bank" value="<?= $supplier->nama_bank ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>Nama Akun Bank</label>
                        <input class="form-control" name="nama_akun_bank" value="<?= $supplier->nama_akun_bank ?>" required>
                    </div>

                    <div class="mb-3">
                        <label>No Akun Bank</label>
                        <input class="form-control" name="no_akun_bank" value="<?= $supplier->no_akun_bank ?>" required>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-plus"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
