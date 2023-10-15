<h1>Tambah Peminjaman</h1>
<form action="<?= base_url('peminjaman/store'); ?>" method="post">
    <label for="tgl_peminjaman">Tgl Peminjaman</label>
    <input type="date" name="tgl_peminjaman"><br>

    <label for="tgl_pengembalian">Tgl Pengembalian</label>
    <input type="date" name="tgl_pengembalian"><br>

    <label for="tb_pengguna_id_peminjaman">ID Peminjam</label>
    <input type="number" name="tb_pengguna_id_peminjaman"><br>

    <label for="tb_pengguna_id_pengembangan">ID Pengembangan</label>
    <input type="number" name="tb_pengguna_id_pengembangan"><br>

    <label for="tb_anggota_id">ID Anggota</label>
    <input type="number" name="tb_anggota_id"><br>

    <label for="tb_buku_id">ID Buku</label>
    <input type="number" name="tb_buku_id"><br>

    <label for="denda">Denda</label>
    <input type="number" name="denda"><br>

    <input type="submit" value="Simpan">
</form>