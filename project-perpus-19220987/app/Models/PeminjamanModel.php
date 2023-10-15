<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table            = 'tb_peminjaman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['tgl_peminjaman','tgl_pengembalian','tb_pengguna_id_peminjaman','tb_pengguna_id_pengembangan','tb_anggota_id','tb_buku_id','denda'];

    public function getPeminjaman($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }
}
