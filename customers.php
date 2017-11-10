<?php 
    include 'header.php';
    
    // print_r($res);
    
    $edit_action = 0;
    // action if there is action request ; add, search or delete
    if(isset($_POST['add_customer'])){
        $customer_name = $_POST['customer_name'];
        $customer_address = $_POST['customer_address'];
        $customer_phone = $_POST['customer_phone'];        
        $q_insert = 'INSERT INTO customers (customer_name, customer_address, customer_phone) VALUES ("'.$customer_name . '","' . $customer_address . '","' . $customer_phone .'")';
        $insert = mysqli_query($conn, $q_insert);
        // echo $query;
        if($insert){
            $result['message'] = '<div class="notification is-success"> <p>Data Customer Berhasil Ditambahkan </p> </div>';
        } else {
            $result['message'] = '<div class="notification is-danger"> <p>Data Customer Gagal Ditambahkan </p> </div>';            
        }
    }

    if(isset($_POST['update_customer'])){
        $customer_id = $_POST['customer_id'];        
        $customer_name = $_POST['customer_name'];
        $customer_address = $_POST['customer_address'];
        $customer_phone = $_POST['customer_phone'];        
        $q_update = 'UPDATE customers SET customer_name="'.$customer_name . '",customer_address="' . $customer_address . '", customer_phone="' . $customer_phone .'" WHERE customer_id=' . $customer_id;
        $update = mysqli_query($conn, $q_update);
        // echo $q_update;
        if($update){
            $result['message'] = '<div class="notification is-success"> <p>Data Customer Berhasil Diperbaharui </p> </div>';
        } else {
            $result['message'] = '<div class="notification is-danger"> <p>Gagal Memperbaharui Data Customer </p> </div>';            
        }

        $edit_action = 0;
    }

    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        $edit_action = 1;
        $q_select = 'SELECT * FROM customers WHERE customer_id=' . $_GET['id'] . ';';
        $select_result = mysqli_query($conn, $q_select);
        $select_result = mysqli_fetch_assoc($select_result);
        // print_r($select_result);
        // echo $select_result['customer_name'] ;
    }

    $q = "SELECT * FROM customers";
    $q = mysqli_query($conn, $q);

?>
    <h1 class='title'>Data Costumer </h1>
    <?php if(isset($result['message'])) echo $result['message']; ?>
    <div class='panel'>
        <p class="panel-heading is-small">
            Tambah Customer
        </p>
        
        <div class="panel-block">
            <form method='post' action='customers.php'>
                <div class='columns'>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">Nama</label>
                            <div class="control">
                               <input class="input"  type="hidden" name="customer_id" placeholder="Nama Customer" value=<?php echo $edit_action ? "'" . $select_result['customer_id'] . "'" : "''"; ?> />
                                <input class="input" type="text" name="customer_name" placeholder="Nama Customer" value=<?php echo $edit_action ? "'" . $select_result['customer_name'] . "'" : "''"; ?> />
                            </div>
                        </div>
                    </div>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">Alamat</label>
                            <div class="control">
                                <input class="input" type="text" name="customer_address" placeholder="Alamat" value=<?php echo $edit_action ? "'" . $select_result['customer_address'] . "'" : ""; ?>>
                            </div>
                        </div>
                    </div>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">No Telepon</label>
                            <div class="control">
                                <input class="input" type="text" name="customer_phone" placeholder="No Telepon" value=<?php echo $edit_action ? "'" . $select_result['customer_phone'] . "'" : ""; ?>>
                            </div>
                        </div>
                    </div>
                    <div class='column is-3'>
                        <div class="field">
                            <label class="label">Action</label>                        
                            <div class="control">
                                <input class="button is-primary" type="submit" name=<?php echo $edit_action ? "update_customer" : "add_customer"; ?> value=<?php echo $edit_action ? "Update" : "Tambah"; ?>>
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
                <!-- <tr>
                    <td>1</td>
                    <td>Adjie Guntoro</td>
                    <td>Jl. AMD</td>
                    <td>083813360366</td>
                    <td><button class="button is-primary is-small">Edit</button>  <button class="button is-danger is-small">Hapus</button></td>
                </tr> -->
                <?php 
                    while ($res = mysqli_fetch_array($q)) {
                        echo '<tr>
                                <td>' . $res['customer_id'] . '</td>
                                <td>' . $res['customer_name'] . '</td>
                                <td>' . $res['customer_address'] . '</td>
                                <td>' . $res['customer_phone'] . '</td>
                                <td><a class="button is-primary is-small" href=?action=edit&id='.$res['customer_id'].'>Edit</a>  <button class="button is-danger is-small">Hapus</button></td>
                            </tr>';
                    }
                ;?>
            </tbody>
        </table>
        </div>
    </div>

<?php
    include 'footer.php';
?>