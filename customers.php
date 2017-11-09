<?php 
    include 'header.php';
?>
    <h1 class='title'>Data Costumer </h1>
    <div class='panel'>
        <p class="panel-heading is-small">
            Tambah Customer
        </p>
        <div class="panel-block">
            <form method='post'>
                <div class='columns'>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">Nama</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>
                    </div>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">Alamat</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>
                    </div>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">No Telepon</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>
                    </div>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">Tambah</label>                        
                            <div class="control">
                                <input class="button is-primary" type="submit" value="Tambah">
                            </div>
                        </div>
                    </div>
                </div>                
            </form>
        </div>
    </div>
    <div class='panel'>
        <p class="panel-heading">Cari Data Customer</p>
        <div class="panel-block">
        <table class='table is-fullwidth'>
            <tbody>
                <tr>
                    <form method='post'>
                    <td>
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                    </td>
                    <td>
                    <div class="field">
                        <div class="control">
                            <input class="button is-info" type="submit" name='cari' value='Cari'>
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
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Adjie Guntoro</td>
                    <td>Jl. AMD</td>
                    <td>083813360366</td>
                    <td><button class="button is-primary is-small">Edit</button>  <button class="button is-danger is-small">Hapus</button></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

<?php
    include 'footer.php';
?>