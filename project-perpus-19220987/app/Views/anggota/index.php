<h1>Daftar Anggota</h1>
<a href="<?= base_url('anggota/create'); ?>">Tambah Anggota</a>
<table border="1">
    <tr>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>No Telp</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Hapus</th>
    </tr>
    <?php foreach ($anggota as $row) : ?>
        <tr>
            <td><?= $row['nama_lengkap']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['kota']; ?></td>
            <td><?= $row['notelp']; ?></td>
            <td><?= $row['email']; ?></td>
            <td>
                <a href="<?= base_url("anggota/edit/{$row['id']}"); ?>">
                    <button>Edit</button>
                </a>
            </td>
            <td>
                <a href="<?= base_url("anggota/delete/{$row['id']}"); ?>" onclick="return confirm('Anda yakin ingin menghapus?')">
                    <button>Hapus</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
