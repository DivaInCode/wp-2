<h1>Edit Peminjaman</h1>
<form action="<?= base_url("peminjaman/update/{$peminjaman['id']}"); ?>" method="post">
    <input type="hidden" name="id" value="<?= $peminjaman['id']; ?>" />

    <label for="tgl_peminjaman">Tgl Peminjaman</label>
    <input type="date" name="tgl_peminjaman" value="<?= $peminjaman['tgl_peminjaman']; ?>" required><br>

    <label for="tgl_pengembalian">Tgl Pengembalian</label>
    <input type="date" name="tgl_pengembalian" value="<?= $peminjaman['tgl_pengembalian']; ?>" required><br>

    <label for="tb_pengguna_id_peminjaman">ID Peminjam</label>
    <input type="number" name="tb_pengguna_id_peminjaman" value="<?= $peminjaman['tb_pengguna_id_peminjaman']; ?>" required><br>

    <label for="tb_pengguna_id_pengembangan">ID Pengembangan</label>
    <input type="number" name="tb_pengguna_id_pengembangan" value="<?= $peminjaman['tb_pengguna_id_pengembangan']; ?>" required><br>

    <label for="tb_anggota_id">ID Anggota</label>
    <input type="number" name="tb_anggota_id" value="<?= $peminjaman['tb_anggota_id']; ?>" required><br>

    <label for="tb_buku_id">ID Buku</label>
    <input type="number" name="tb_buku_id" value="<?= $peminjaman['tb_buku_id']; ?>" required><br>

    <label for="denda">Denda</label>
    <input type="number" name="denda" value="<?= $peminjaman['denda']; ?>" required><br>

    <input type="submit" value="Update" onclick="return confirm('Anda yakin ingin merubahnya?')">
</form>