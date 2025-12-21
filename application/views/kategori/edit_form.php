<main>
    <div class="container-fluid">
    <h1 class="mt-4"></h1>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kategori') ?>">Kategori</a></li>
            <li class="breadcrumb-item active">Edit Data</li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('kategori/getedit/'.$kategori->id) ?>" method="post">

                    <input type="hidden" name="id" value="<?php echo $kategori->id ?>">

                    <div class="form-group mb-3">
                        <label for="name" class="font-weight-bold">Nama Kategori *</label>
                        <input type="text" name="name" class="form-control"
                               value="<?php echo $kategori->name ?>" required>
                    </div>

                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-plus"></i> Save
                    </button>

                </form>
            </div>
        </div>
    </div>
</main>
