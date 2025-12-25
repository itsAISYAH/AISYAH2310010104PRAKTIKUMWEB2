<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kustomer') ?>">Kustomer</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>        
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('kustomer/add') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add New
                </a>
            </div>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="datatables" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1; 
                        foreach ($kustomer as $kustomer) { 
                            echo '<tr>';
                            echo '<td>'.$no.'</td>';
                            echo '<td>'.$kustomer->nik.'</td>';
                            echo '<td>'.$kustomer->name.'</td>';
                            echo '<td>'.$kustomer->telp.'</td>';
                            echo '<td>'.$kustomer->alamat.'</td>';
                            echo '<td>
                                    <a href="'.site_url('kustomer/getedit/'.$kustomer->id).'" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="'.site_url('kustomer/delete/'.$kustomer->id).'" class="btn btn-sm btn-danger"
                                        onclick="return confirm(\'Yakin menghapus data kustomer ini?\')">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                  </td>';
                            echo '</tr>';
                            $no++;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
