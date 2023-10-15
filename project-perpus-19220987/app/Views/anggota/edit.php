<h1>Edit Anggota</h1>
<form action="<?= base_url("anggota/update/{$anggota['id']}"); ?>" method="post">
    <input type="hidden" name="id" value="<?= $anggota['id']; ?>" />

    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" value="<?= $anggota['nama_lengkap']; ?>" required><br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="<?= $anggota['alamat']; ?>" required><br>

    <label for="kota">Kota</label>
    <input type="text" name="kota" value="<?= $anggota['kota']; ?>" required><br>

    <label for="notelp">No Telp</label>
    <input type="number" name="notelp" value="<?= $anggota['notelp']; ?>" required><br>

    <label for="email">Email</label>
    <input type="text" name="email" value="<?= $anggota['email']; ?>" required><br>

    <input type="submit" value="Update" onclick="return confirm('Anda yakin ingin merubahnya?')">
</form>
