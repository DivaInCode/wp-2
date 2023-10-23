<h1>Tambah Buku</h1>
<form action="<?= base_url('buku/store'); ?>" method="post">
    <label for="tb_penerbit_id">ID Penerbit</label>
    <input type="number" name="tb_penerbit_id"><br>
    
    <label for="judul">Judul</label>
    <input type="text" name="judul"><br>

    <label for="edisi">Edisi</label>
    <input type="text" name="edisi"><br>

    <label for="cetakan">Cetakan</label>
    <input type="text" name="cetakan"><br>

    <label for="sinopsis">Sinopsis</label>
    <input type="text" name="sinopsis"><br>

    <label for="halaman">Halaman</label>
    <input type="number" name="halaman"><br>

    <label for="penulis">Penulis</label>
    <input type="text" name="penulis"><br>

    <label for="tahun">Tahun</label>
    <input type="number" name="tahun"><br>

    <label for="cover_file">Cover</label>
    <input type="text" name="cover_file"><br>

   <input type="submit" value="simpan">
</form>