<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('pembelian') ?>">Pembelian</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>        
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('pembelian/add') ?>" class="btn btn-primary">
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
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th>Id Supplier</th>
                                <th>Id User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1; 
                        foreach ($pembelian as $pembelian) { 
                            echo '<tr>';
                            echo '<td>'.$no.'</td>';
                            echo '<td>'.$pembelian->invoice.'</td>';
                            echo '<td>'.$pembelian->total.'</td>';
                            echo '<td>'.$pembelian->bayar.'</td>';
                            echo '<td>'.$pembelian->deskripsi.'</td>';
                            echo '<td>'.$pembelian->tanggal.'</td>';
                            echo '<td>'.$pembelian->supplier_id.'</td>';
                            echo '<td>'.$pembelian->user_id.'</td>';
                            echo '<td>
                                    <a href="'.site_url('pembelian/getedit/'.$pembelian->id).'" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="'.site_url('pembelian/delete/'.$pembelian->id).'" class="btn btn-sm btn-danger"
                                        onclick="return confirm(\'Yakin menghapus data pembelian ini?\')">
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
