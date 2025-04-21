<div class="container pt-5">
    <a href="<?= base_url('barang/tambah');?>" class="btn btn-primary mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Barang</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <head>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach ($getbarang as $sisi){?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $sisi['nama_barang']; ?></td>
                                <td><?= $sisi['qty']; ?></td>
                                <td>Rp. <?= number_format($sisi['harga_beli']);?>,-</td>
                                <td>Rp. <?= number_format($sisi['harga_jual']);?>,-</td>
                                <td>
                                    <a href="<?= base_url('barang/edit/'.$sisi['id_barang']);?>" 
                                    class="btn btn-warning">
                                    Edit</a>
                                    <a href="<?= base_url('barang/hapus/'.$sisi['id_barang']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data barang ?')" 
                                    class="btn btn-danger">
                                    Hapus</a>
        
                                </td>
                            </tr>  
                        <?php $no++;}?>    
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>