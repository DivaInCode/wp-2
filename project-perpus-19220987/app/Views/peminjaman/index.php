<h1>Daftar Peminjaman</h1>
<a href="<?= base_url('peminjaman/create'); ?>">Tambah Peminjaman</a>
<table border="1">
    <tr>
        <th>Tgl Peminjaman</th>
        <th>Tgl Pengembalian</th>
        <th>ID Peminjam</th>
        <th>ID Pengembangan</th>
        <th>ID Anggota</th>
        <th>ID Buku</th>
        <th>Denda</th>
    </tr>
    <?php foreach ($peminjaman as $row) : ?>
        <tr>
            <td><?= $row['tgl_peminjaman']; ?></td>
            <td><?= $row['tgl_pengembalian']; ?></td>
            <td><?= $row['tb_pengguna_id_peminjaman']; ?></td>
            <td><?= $row['tb_pengguna_id_pengembangan']; ?></td>
            <td><?= $row['tb_anggota_id']; ?></td>
            <td><?= $row['tb_buku_id']; ?></td>
            <td><?= $row['denda']; ?></td>
            <td>
                <a href="<?= base_url("peminjaman/edit/{$row['id']}"); ?>">
                    <button>Edit</button>
                </a>
            </td>
            <td>
                <a href="<?= base_url("peminjaman/delete/{$row['id']}"); ?>" onclick="return confirm('Anda yakin ingin menghapus?')">
                    <button>Hapus</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>