<div class="row p-3">       
    <div class="col">
      <?php
      $query = "SELECT * FROM barang WHERE id='$_GET[id]'";
      $result = $mysqli->query($query);
      $row = $result->fetch_assoc();
      ?>
      <h4>Form Edit Data Barang</h1>
      <form action="<?= 'modul/barang/proses.php?modul=barang&action=update&id='.$row['id'];?>"method="post">
      <label class="form-label" for="Nama_Barang">Nama Barang</label>
      <input class="form-control" type="text" name="Nama_Barang" value="<?=$row['Nama_Barang'];?>" />
      <label for="harga">Harga</label>
      <input class="form-control" type="number" name="Harga" value="<?= $row['Harga'];?>" />
      <label class="form-label" for="Stok_Barang">Stok Barang</label>
      <input class="form-control" type="number" name="Stok_Barang" value="<?= $row['Stok_Barang'];?>" />
      <label class="form-label" for="Kategori">Kategori</label>
      <label class="form-label" for=""><?= $row['Kategori'];?></label>
      <select class="form-select mb-2" name="Kategori">
      <option value="Food" <?=$row['Kategori'] == 'Food'? 'selected' :''?>>Food</option>
      <option value="Fashion" <?=$row['Kategori'] == 'Fashion'? 'selected' :''?>>Fashion</option>
      <option value="Farmasi"<?=$row['Kategori'] == 'Farmasi'? 'selected' :''?>>Farmasi</option>
     </select>
     <button class="btn btn-primary">Update</button>
   </form>
 </div>
</div>