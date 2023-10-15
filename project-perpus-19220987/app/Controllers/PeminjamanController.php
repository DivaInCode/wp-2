<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;
use CodeIgniter\Model;

class PeminjamanController extends BaseController
{
    public function index()
    {
        $model = new PeminjamanModel();
        $data = $model->getPeminjaman();
        return view('peminjaman/index', ['peminjaman' => $data]);
    }

    public function create()
    {
        return view('peminjaman/create');
    }

    public function store()
    {
        $model = new PeminjamanModel();
        $data = [
            'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
            'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
            'tb_pengguna_id_peminjaman' => $this->request->getPost('tb_pengguna_id'),
            'tb_pengguna_id_pengembangan' => $this->request->getPost('tb_pengguna_id_pengembangan'),
            'tb_anggota_id' =>$this->request->getPost('tb_anggota_id'),
            'tb_buku_id' =>$this->request->getPost('tb_buku_id'),
            'denda' =>$this->request->getPost('denda')
        ];
        $model->insert($data);
        return redirect()->to(base_url('peminjaman'));
    }

    public function edit($id)
    {
        $model = new PeminjamanModel();
        $data = $model->getPeminjaman($id);
        return view('anggota/edit', ['peminjaman' => $data]);
    }

    public function update($id)
    {
        $model = new PeminjamanModel();
        $data = [
            'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
            'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
            'tb_pengguna_id_peminjaman' => $this->request->getPost('tb_pengguna_id'),
            'tb_pengguna_id_pengembangan' => $this->request->getPost('tb_pengguna_id_pengembangan'),
            'tb_anggota_id' =>$this->request->getPost('tb_anggota_id'),
            'tb_buku_id' =>$this->request->getPost('tb_buku_id'),
            'denda' =>$this->request->getPost('denda')
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('peminjaman'));
    }

    public function delete($id)
    {
        $model = new PeminjamanModel();
        $model->delete($id);
        return redirect()->to(base_url('peminjaman'));
    }
}
