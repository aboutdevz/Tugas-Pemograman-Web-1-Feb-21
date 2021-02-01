<?php namespace App\Modules\Pelajaran\Controllers;

use CodeIgniter\Controller;

class Pelajaran extends Controller
{
    protected $request;

    public function _construct()
    {
        $this->request = service('request');
    }

    public function index()
    {
        $data = [
            'title' => 'Pelajaran',
            'Hsidebar' => '',
            'Gsidebar' => '',
            'Psidebar' => 'active_sidebar',
            'Ssidebar' => '',
            'SNsidebar' => ''
        ];
        echo view(MODULES_NAMESPACE.'Pelajaran\Views\Pelajaran',$data);
    }

    public function getAllPelajaran()
    {
        $pelajaranModel = model('App\Modules\Pelajaran\Models\PelajaranModel');
        $data = [
            'data' => $pelajaranModel->findAll() 
        ] ;
        return json_encode($data); 
    }

    public function insertPelajaran()
    {
        $pelajaranModel = model('App\Modules\Pelajaran\Models\PelajaranModel');

        $data = [
            'mata_pelajaran'    => $this->request->getVar('mata_pelajaran'),
            'jurusan'           => $this->request->getVar('jurusan'),
            'kelas'             => $this->request->getVar('kelas')
        ] ;

        $pelajaranModel->insert($data);
        return redirect('Home');
    }


    public function pageUpdatePelajaran($id)
    {
        $pelajaranModel = model('App\Modules\Pelajaran\Models\PelajaranModel');

        $data = [
            'title' => 'Pelajaran',
            'Hsidebar' => '',
            'Gsidebar' => '',
            'Psidebar' => 'active_sidebar',
            'Ssidebar' => '',
            'SNsidebar' => '',

            'field_data' => $pelajaranModel->find($id)
        ];
        echo view(MODULES_NAMESPACE.'Pelajaran\Views\UpdatePelajaran',$data);
    }

    public function updatePelajaran($id)
    {
        $pelajaranModel = model('App\Modules\Pelajaran\Models\PelajaranModel');

        $data = [
            'mata_pelajaran'    => $this->request->getVar('mata_pelajaran'),
            'jurusan'           => $this->request->getVar('jurusan'),
            'kelas'             => $this->request->getVar('kelas')
        ] ;

        $pelajaranModel->update($id,$data);

        return redirect('Home');

    }

    public function deletePelajaran($id)
    {
        $pelajaranModel = model('App\Modules\Pelajaran\Models\PelajaranModel');

        $pelajaranModel->delete($id);

        return redirect('Home');
        
    }
}