<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        $model = new AnggotaModel();
        $data = $model->getAnggota();
        return view('anggota/index', ['anggota' => $data]);
    }

    public function create()
    {
        return view('anggota/create');
    }

    public function store()
    {
        $model = new AnggotaModel();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'notelp' => $this->request->getPost('notelp'),
            'email' => $this->request->getPost('email')
        ];
        $model->insert($data);
        return redirect()->to(base_url('anggota'));
    }

    public function edit($id)
    {
        $model = new AnggotaModel();
        $data = $model->getAnggota($id);
        return view('anggota/edit', ['anggota' => $data]);
    }

    public function update($id)
    {
        $model = new AnggotaModel();
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'notelp' => $this->request->getPost('notelp'),
            'email' => $this->request->getPost('email')
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('anggota'));
    }

    public function delete($id)
    {
        $model = new AnggotaModel();
        $model->delete($id);
        return redirect()->to(base_url('anggota'));
    }
}
