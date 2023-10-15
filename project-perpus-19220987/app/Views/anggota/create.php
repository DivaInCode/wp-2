<h1>Tambah Anggota</h1>
<form action="<?= base_url('anggota/store'); ?>" method="post">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" required><br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" required><br>

    <label for="kota">Kota</label>
    <input type="text" name="kota" required><br>

    <label for="notelp">No Telp</label>
    <input type="number" name="notelp" required><br>

    <label for="email">Email</label>
    <input type="text" name="email" required><br>

    <input type="submit" value="Simpan">
</form>
