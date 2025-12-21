<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('penjualan') ?>">Penjualan</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>        
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('penjualan/add') ?>" class="btn btn-primary">
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
                                <th>Invoice</th>
                                <th>Total</th>
                                <th>Bayar</th>
                                <th>Kembali</th>
                                <th>Tanggal</th>
                                <th>Id Kustomer</th>
                                <th>Id User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1; 
                        foreach ($penjualan as $penjualan) { 
                            echo '<tr>';
                            echo '<td>'.$no.'</td>';
                            echo '<td>'.$penjualan->invoice.'</td>';
                            echo '<td>'.$penjualan->total.'</td>';
                            echo '<td>'.$penjualan->bayar.'</td>';
                            echo '<td>'.$penjualan->kembali.'</td>';
                            echo '<td>'.$penjualan->tanggal.'</td>';
                            echo '<td>'.$penjualan->kustomer_id.'</td>';
                            echo '<td>'.$penjualan->user_id.'</td>';
                            echo '<td>
                                    <a href="'.site_url('penjualan/getedit/'.$penjualan->id).'" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="'.site_url('penjualan/delete/'.$penjualan->id).'" class="btn btn-sm btn-danger"
                                        onclick="return confirm(\'Yakin menghapus data penjualan ini?\')">
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
