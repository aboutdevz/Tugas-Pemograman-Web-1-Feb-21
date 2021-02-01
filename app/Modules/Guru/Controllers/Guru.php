<?php namespace App\Modules\Guru\Controllers;

use CodeIgniter\Controller;

class Guru extends Controller
{
    protected $request;

    public function __construct()
    {
        $this->request = service('request');
    }


    public function index()
    {
        $data = [
            'title' => 'Guru',
            'Hsidebar' => '',
            'Gsidebar' => 'active_sidebar',
            'Psidebar' => '',
            'Ssidebar' => '',
            'SNsidebar' => ''
        ];
        echo view(MODULES_NAMESPACE.'Guru\Views\Guru',$data);
    }


    public function pageUpdateGuru($id)
    {
        $guruModel = model('App\Modules\Guru\Models\GuruModel');

        $data = [
            'title' => 'Guru',
            'Hsidebar' => '',
            'Gsidebar' => 'active_sidebar',
            'Psidebar' => '',
            'Ssidebar' => '',
            'SNsidebar' => '',

            'field_data' => $guruModel->find($id)
        ];
        
        echo view(MODULES_NAMESPACE.'Guru\Views\UpdateGuru',$data);
    }


    public function getAllGuru()
    {
        $guruModel = model('App\Modules\Guru\Models\GuruModel');
        $data = [
            'data' => $guruModel->findAll() 
        ] ;
        return json_encode($data); 

    }

    public function insertGuru()
    {
        $guruModel = model('App\Modules\Guru\Models\GuruModel');

        $data = [
            'nik'                   => $this->request->getVar('nik'),
            'nama_guru'             => $this->request->getVar('nama_guru'),
            'pendidikan_terakhir'   => $this->request->getVar('pendidikan_terakhir'),
            'jurusan'               => $this->request->getVar('jurusan'),
            'asal_sekolah'          => $this->request->getVar('asal_sekolah'),
            'alamat'                => $this->request->getVar('alamat'),
            'email'                 => $this->request->getVar('email'),
            'no_telp'               => $this->request->getVar('no_telp'),
        ] ;

        $guruModel->insert($data);

        return redirect('Home');

    }

    public function updateGuru($id)
    {
        $guruModel = model('App\Modules\Guru\Models\GuruModel');

        $data = [
            'nik'                   => $this->request->getVar('nik'),
            'nama_guru'             => $this->request->getVar('nama_guru'),
            'pendidikan_terakhir'   => $this->request->getVar('pendidikan_terakhir'),
            'jurusan'               => $this->request->getVar('jurusan'),
            'asal_sekolah'          => $this->request->getVar('asal_sekolah'),
            'alamat'                => $this->request->getVar('alamat'),
            'email'                 => $this->request->getVar('email'),
            'no_telp'               => $this->request->getVar('no_telp'),
        ] ;
        
        $guruModel->update($id,$data);

        return redirect('Home');
    }
    
    public function deleteGuru($id)
    {
        $guruModel = model('App\Modules\Guru\Models\GuruModel');

        $guruModel->delete($id);

        return redirect('Home');
    }
}