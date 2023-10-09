<?xml version="1.0" encoding="UTF-8"?>
<schemadesigner version="6.5">
<source>
<database charset="utf8mb4" collation="utf8mb4_general_ci">perpustakaan_19220987</database>
</source>
<canvas zoom="80">
<tables>
<table name="tb_anggota" view="colnames">
<left>33</left>
<top>99</top>
<width>104</width>
<height>144</height>
<sql_create_table>CREATE TABLE `tb_anggota` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` varchar(512) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `notelp` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci</sql_create_table>
</table>
<table name="tb_buku" view="colnames">
<left>464</left>
<top>271</top>
<width>102</width>
<height>212</height>
<sql_create_table>CREATE TABLE `tb_buku` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tb_kategori_id` int(10) unsigned DEFAULT NULL,
  `tb_penerbit_id` int(10) unsigned DEFAULT NULL,
  `judul` varchar(512) NOT NULL,
  `edisi` varchar(10) DEFAULT NULL,
  `cetakan` varchar(10) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `halaman` varchar(20) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `cover_file` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_kategori_id` (`tb_kategori_id`),
  KEY `tb_penerbit_id` (`tb_penerbit_id`),
  CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`tb_kategori_id`) REFERENCES `tb_kategori` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`tb_penerbit_id`) REFERENCES `tb_penerbit` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci</sql_create_table>
</table>
<table name="tb_kategori" view="colnames">
<left>72</left>
<top>321</top>
<width>116</width>
<height>103</height>
<sql_create_table>CREATE TABLE `tb_kategori` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) DEFAULT NULL,
  `kode_ddc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci</sql_create_table>
</table>
<table name="tb_koleksibuku" view="colnames">
<left>677</left>
<top>232</top>
<width>132</width>
<height>117</height>
<sql_create_table>CREATE TABLE `tb_koleksibuku` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tb_buku_id` int(10) unsigned DEFAULT NULL,
  `nomor_koleksi` int(11) DEFAULT NULL,
  `status_koleksi` enum('A','P','M','R') DEFAULT 'A',
  PRIMARY KEY (`id`),
  KEY `tb_buku_id` (`tb_buku_id`),
  CONSTRAINT `tb_koleksibuku_ibfk_1` FOREIGN KEY (`tb_buku_id`) REFERENCES `tb_buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci</sql_create_table>
</table>
<table name="tb_peminjaman" view="colnames">
<left>254</left>
<top>56</top>
<width>186</width>
<height>171</height>
<sql_create_table>CREATE TABLE `tb_peminjaman` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tgl_peminjaman` datetime NOT NULL,
  `tgl_pengembalian` datetime DEFAULT NULL,
  `tb_pengguna_id_peminjaman` int(10) unsigned NOT NULL,
  `tb_pengguna_id_pengembangan` int(10) unsigned NOT NULL,
  `tb_anggota_id` int(10) unsigned NOT NULL,
  `tb_buku_id` int(10) unsigned NOT NULL,
  `denda` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_pengguna_id_peminjaman` (`tb_pengguna_id_peminjaman`),
  KEY `tb_pengguna_id_pengembangan` (`tb_pengguna_id_pengembangan`),
  KEY `tb_anggota_id` (`tb_anggota_id`),
  KEY `tb_buku_id` (`tb_buku_id`),
  CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`tb_pengguna_id_peminjaman`) REFERENCES `tb_pengguna` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tb_peminjaman_ibfk_2` FOREIGN KEY (`tb_pengguna_id_pengembangan`) REFERENCES `tb_pengguna` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tb_peminjaman_ibfk_3` FOREIGN KEY (`tb_anggota_id`) REFERENCES `tb_anggota` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `tb_peminjaman_ibfk_4` FOREIGN KEY (`tb_buku_id`) REFERENCES `tb_buku` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci</sql_create_table>
</table>
<table name="tb_penerbit" view="colnames">
<left>270</left>
<top>353</top>
<width>110</width>
<height>103</height>
<sql_create_table>CREATE TABLE `tb_penerbit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `penerbit` varchar(255) NOT NULL,
  `kota` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci</sql_create_table>
</table>
<table name="tb_pengguna" view="colnames">
<left>553</left>
<top>64</top>
<width>104</width>
<height>117</height>
<sql_create_table>CREATE TABLE `tb_pengguna` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `katasandi` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci</sql_create_table>
</table>
</tables>
</canvas>
</schemadesigner>