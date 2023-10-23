<h1>Edit Buku</h1>
<form action="<?= base_url("buku/update/{$buku['id']}"); ?>" method="post"> 
    <input type="hidden" name="id" value="<?= $buku ['id']; ?>" />
    
    <label for="tb_penerbit_id">ID Penerbit</label>
    <input type="number" name="tb_penerbit_id" value="<?= $buku [ 'tb_penerbit_id']; ?>" required><br>
    
    <label for="judul">Judul</label>
    <input type="text" name="judul" value="<?= $buku ['judul']; ?>" required><br>
    
    <label for="edisi">Edisi</label>
    <input type="text" name="edisi" value="<?= $buku ['edisi']; ?>" required><br>
    
    <label for="cetakan">Cetakan</label>
    <input type="text" name="cetakan" value="<?= $buku ['cetakan']; ?>" required><br>
    
    <label for="sinopsis">Sinopsis</label>
    <input type="text" name="sinopsis" value="<?= $buku [ 'sinopsis']; ?>" required><br>
    
    <label for="halaman">Halaman</label>
    <input type="number" name="halaman" value="<?= $buku [ 'halaman']; ?>" required><br>
    
    <label for="penulis">Penulis</label>
    <input type="text" name="penulis" value="<?= $buku['penulis']; ?>" required><br>

    <label for="tahun">Tahun</label>
    <input type="number" name="tahun" value="<?= $buku['tahun']; ?>" required><br>

    <label for="cover_file">Cover</label>
    <input type="text" name="cover_file" value="<?= $buku['cover_file']; ?>" required><br>
    
    <input type="submit" value="Update" onclick="return confirm ('Anda yakin ingin merubahnya?')">
</form>