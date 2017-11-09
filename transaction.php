<?php 
    include 'header.php';
?>
    <h1 class='title'>Data Transaksi </h1>
        
    <div class='panel'>
        <p class="panel-heading">Transaksi</p>
        <div class="panel-block">
        <table class='table is-fullwidth'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Jenis Layanan</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Selesai</th>
                    <th>Qty</th>                    
                    <th>Total Bayar</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Kusnadi</td>
                    <td>Kiloan</td>
                    <td>11-09-2017</td>
                    <td>13-09-2017</td>
                    <td>2 Kg</td>
                    <td>Rp. 12000</td>
                    <td><span class="tag is-dark is-rounded">Proses</span></td>
                    <td>
                        <button class="button is-info is-small" alt="Lihat"><i class="fa fa-eye"></i></button>                        
                        <button class="button is-primary is-small"><i class="fa fa-edit"></i></button>
                        <button class="button is-danger is-small"><i class="fa fa-times-circle"></i></button>
                    
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Novita</td>
                    <td>Satuan</td>
                    <td>11-09-2017</td>
                    <td>13-09-2017</td>
                    <td>3 Pcs</td>
                    <td>Rp. 33000</td>
                    <td><span class="tag is-success is-rounded">Selesai</span></td>
                    <td>
                        <button class="button is-info is-small" alt="Lihat"><i class="fa fa-eye"></i></button>                        
                        <button class="button is-primary is-small"><i class="fa fa-edit"></i></button>
                        <button class="button is-danger is-small"><i class="fa fa-times-circle"></i></button>
                    
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
   

<?php
    include 'modal.php';    
    include 'footer.php';
?>