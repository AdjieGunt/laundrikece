  <div class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class='modal-card-title'>Detail Transaksi #1</p>
            </header> 
            <section class="modal-card-body">
                <div class="content">
                    <div class="transaksi-info">
                        <p>Nama : <span>Novita</span></p>
                        <p>Tanggal Masuk : <span>11-09-2017</span></p>
                        <p>Tanggal Keluar : <span>13-09-2017</span></p>                        
                    </div>
                    <table class='table is-fullwidth'>
                    <thead>
                        <tr>
                            <th>Jenis Layanan</th>
                            <th>Qty</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cuci Kering Setrika</td>
                            <td>4 Kg</td>
                            <td>Rp. 24000</td>                        
                        </tr>
                    </tbody>
                    <tfoot>
                            <tr>
                                <td colspan='2'><b class='is-pulled-right'>Total</b></td>
                                <td> <b>Rp. 24000</b></td>                            
                            </tr>
                    </tfoot>
                    </table>
                </div>
            </section> 
            <footer class="modal-card-foot">
                <a class="button is-success">Simpan</a>
                <a class="button">Tutup</a>
            </footer>   
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <div class="modal is-active">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class='modal-card-title'>Tambah Transaksi #2</p>
            </header> 
            <section class="modal-card-body">
                <div class="content">
                    <div class="transaksi-info"> 
                        <table class='table'>
                            <tr>    
                                <td>Nama : </td>
                                <td><input class='input is-small' type='text'/></td>
                            </tr>
                            <tr>    
                                <td>Tanggal Masuk : </td>
                                <td><input class='input is-small' type='date'/></td>
                            </tr>
                            <tr>    
                                <td>Tanggal Keluar : </td>
                                <td><input class='input is-small ' disabled type='type' /></td>
                            </tr>
                        </table>

                    </div>
                    <table class='table is-fullwidth'>
                    <thead>
                        <tr>
                            <th>Jenis Layanan</th>
                            <th>Qty</th>
                            <th>Jumlah</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class='select'>
                                <select name="" id="">
                                    <option value="">Cuci Kering Setrika</option>
                                </select>
                                </div>
                            </td>
                            <td><input class='input' /></td>
                            <td>Rp. 24000</td>
                            <td><button class="button is-small"><i class="fa fa-plus"></i></button></td>                        
                        </tr>
                    </tbody>
                    <tfoot>
                            <tr>
                                <td colspan='2'><b class='is-pulled-right'>Total</b></td>
                                <td> <b>Rp. 24000</b></td>                            
                            </tr>
                    </tfoot>
                    </table>
                </div>
            </section> 
            <footer class="modal-card-foot">
                <a class="button is-success">Simpan</a>
                <a class="button">Tutup</a>
            </footer>   
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>