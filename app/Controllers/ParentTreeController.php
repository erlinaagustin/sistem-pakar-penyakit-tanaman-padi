<?php namespace App\Controllers;

use App\Models\ParentTreeModel;
use CodeIgniter\Controller;

class ParentTreeController extends BaseController
{
    public function index()
    {
        $model = new ParentTreeModel();
        $data['latestParentTree'] = $model->orderBy('id', 'DESC')->first(); // Mengambil data gambar terbaru

        return view('parent_tree', $data);
    }

    public function upload()
    {
        helper(['form', 'url']);
        $session = session();
        
        $img = $this->request->getFile('gambar');
        if ($img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move('uploads', $newName);

            // Simpan informasi gambar ke database
            $model = new ParentTreeModel();
            $data = [
                'gambar' => $newName,
            ];
            $model->insert($data);

            $session->setFlashdata('success', 'Gambar berhasil diunggah.');
        } else {
            $session->setFlashdata('error', 'Gagal mengunggah gambar.');
        }

        return redirect()->to(base_url('parent-tree'));
    }
}
