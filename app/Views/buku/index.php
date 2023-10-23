<h1>Daftar Buku</h1>
<a href="<?= base_url('buku/create'); ?>">Tambah Buku </a>
<table border="1">
    <tr>
        <th>ID Penerbit</th>
        <th>Judul</th>
        <th>Edisi</th>
        <th>Cetakan</th>
        <th>Sinopsis</th>
        <th>Halaman</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Cover</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($buku as $row): ?>
        <tr>
            <td><?= $row['tb_penerbit_id']; ?></td>
            <td><?= $row['judul']; ?></td>
            <td><?= $row['edisi']; ?></td>
            <td><?= $row['cetakan']; ?></td>
            <td><?= $row['sinopsis']; ?></td>
            <td><?= $row['halaman']; ?></td>
            <td><?= $row['penulis']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['cover_file']; ?></td>
            <td>
                <a href="<?= base_url("buku/edit/{$row['id']}"); ?>">
                    <button>Edit</button>
                </a>
            </td>
            <td>
                <a href="<?= base_url("buku/delete/{$row ['id']}"); ?>" onclick="return confirm('Anda yakin ingin menghapus?')">
                    <button>Hapus</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>