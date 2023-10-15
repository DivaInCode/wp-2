<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'tb_anggota';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_lengkap', 'alamat', 'kota', 'notelp', 'email'];

    public function getAnggota($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        } else {
            return $this->find($id);
        }
    }
}
