<div class="row p-3">        
    <div class="col">
     <h4>Form Input Data Barang</h4>
     <form action="modul/barang/proses.php?modul=barang&action=tambah" method="post">
        <label class="form-label" for="Nama_Barang">Nama Barang</label>
        <input class="form-control" type="text" name="Nama_Barang" /><br />
        <label class="form-label" for="Harga">Harga</label>
        <input class="form-control" type="number" name="Harga" /><br />
        <label class="form-label" for="Stok_Barang">Stok Barang</label>
        <input class="form-control" type="number" name="Stok_Barang" /><br />
        <label class="form-label" for="Kategori">Kategori</label>
        <select class="form-select mb-2" name="Kategori">
         <option value="Food">Food</option>
         <option value="Fashion">Fashion</option>
         <option value="Farmasi">Farmasi</option>
        </select>
        <button class="btn btn-primary">Simpan</button>
     </form>
    </div>
</div>