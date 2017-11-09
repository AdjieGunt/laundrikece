<?php 
    include 'header.php';
?>
    <h1 class='title'>Data Layanan </h1>
        <div class='panel'>
        <p class="panel-heading">Tambah Data Layanan</p>
        <div class="panel-block">
        <table class='table is-fullwidth'>
            <tbody>
                <tr>
                    <form method='post'>
                    <td>
                    <div class="field">
                        <label for="nama_layanan" class="label">Nama Layanan</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                    </td>
                    <td>
                    <div class="field">
                        <label for="nama_layanan" class="label">Jenis Layanan</label>
                        <div class="control">
                            <div class="select">
                            <select name="jenis_layanan" id="" >
                                <option value="satuan">Satuan</option>
                                <option value="satuan">Klioan</option>                                
                            </select>
                            </div>
                        </div>
                    </div>
                    </td>
                    <td>
                    <div class="field">
                        <label for="nama_layanan" class="label">Harga Layanan</label>
                        <div class="control">
                            <input class="input" type="number">
                        </div>
                    </div>
                    </td>
                    <td>
                    <td>
                    <div class="field">
                        <label class='label'>Tambah</label>
                        <div class="control">
                            <input class="button is-info" type="submit" name='tambah' value='Tambah'>
                        </div>
                    </div>
                    </td>
                    </form>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class='panel'>
        <p class="panel-heading">Data Customer</p>
        <div class="panel-block">
        <table class='table is-fullwidth'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Layanan</th>
                    <th>Jenis Layanan</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cuci Kering</td>
                    <td>Kiloan</td>
                    <td>Rp. 5000</td>
                    <td><button class="button is-primary is-small">Edit</button>  <button class="button is-danger is-small">Hapus</button></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

<?php
    include 'footer.php';
?>