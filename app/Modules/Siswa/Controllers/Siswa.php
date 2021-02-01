<?php namespace App\Modules\Siswa\Controllers;

use CodeIgniter\Controller;

class Siswa extends Controller
{
    protected $request;



    public function __constructor()
    {
        $this->request          = service('request');    
        
    }



    public function index()
    {

        $data = [
            'title'             => 'Siswa',
            'Hsidebar'          => '',
            'Gsidebar'          => '',
            'Psidebar'          => '',
            'Ssidebar'          => 'active_sidebar',
            'SNsidebar'         => '',


        ];


        echo view(MODULES_NAMESPACE.'Siswa\Views\Siswa',$data);

    }



    public function NilaiSiswa()
    {
        $db = \Config\Database::connect();

        $dataSiswa              = $db->query('SELECT id,nama_lengkap FROM tab_siswa');
        $dataPelajaran          = $db->query('SELECT id,mata_pelajaran FROM tab_pelajaran');


        $data = [
            'title'             => 'Siswa',
            'Hsidebar'          => '',
            'Gsidebar'          => '',
            'Psidebar'          => '',
            'Ssidebar'          => '',
            'SNsidebar'         => 'active_sidebar',

            'siswa'             => $dataSiswa->getResult(),
            'pelajaran'         => $dataPelajaran->getResult()
        ];


        echo view(MODULES_NAMESPACE.'Siswa\Views\NilaiSiswa',$data);

    }


    
    public function getAllNilai()
    {
        $db = \Config\Database::connect();

        $dataNilai = $db->query('SELECT tab_nilai_siswa.id,
                                        tab_siswa.nis, 
                                        tab_siswa.nama_lengkap, 
                                        tab_siswa.Kelas,
                                        tab_siswa.jurusan,
                                        tab_nilai_siswa.nilai_uh,
                                        tab_nilai_siswa.nilai_uts,
                                        tab_nilai_siswa.nilai_uas,
                                        tab_nilai_siswa.rata_rata,
                                        tab_nilai_siswa.predikat
                                FROM    tab_nilai_siswa
                                INNER JOIN tab_siswa ON tab_nilai_siswa.id_siswa = tab_siswa.id');

        $data = [
            'data' => $dataNilai->getResultArray()
        ] ;


        return json_encode($data); 

    }



    public function getAllSiswa()
    {
        $siswaModel = model('App\Modules\Siswa\Models\SiswaModel');

        $data = [
            'data' => $siswaModel->findAll() 
        ] ;


        return json_encode($data); 
        
    }



    public function insertSiswa()
    {
        $siswaModel = model('App\Modules\Siswa\Models\SiswaModel');

        $data = [

            'nis' => $this->request->getVar('nis'),

            'nama_lengkap' => $this->request->getVar('nama_lengkap'),

            'kelas' => $this->request->getVar('kelas'),

            'jurusan' => $this->request->getVar('jurusan'),

            'tempat_lahir' => $this->request->getVar('tempat_lahir'),

            'alamat' => $this->request->getVar('alamat'),

            'email' => $this->request->getVar('email'),

            'no_telp' => $this->request->getVar('no_telp')

        ] ;


        $siswaModel->insert($data);

        return redirect('Home');

    }



    public function insertNilaiSiswa()
    {
        $nilaiModel = model('App\Modules\Siswa\Models\NilaiSiswaModel');


        $data = [

            'id_siswa' => $this->request->getVar('id_siswa'),

            'id_pelajaran' => $this->request->getVar('id_pelajaran'),

            'nilai_uh' => $this->request->getVar('nilai_uh'),

            'nilai_uts' => $this->request->getVar('nilai_uts'),

            'nilai_uas' => $this->request->getVar('nilai_uas'),

        ] ;


        $data['rata_rata'] = ($data['nilai_uh'] + $data['nilai_uts'] + $data['nilai_uas']) / 3;


        if ($data['rata_rata'] < 41)
        {
            $data['predikat'] = 'D';
        }
        else if ($data['rata_rata'] < 61)
        {
            $data['predikat'] = 'C';
        }
        else if ($data['rata_rata'] < 80)
        {
            $data['predikat'] = 'B';
        }
        else if ($data['rata_rata'] <= 100)
        {
            $data['predikat'] = 'A';
        }


        $nilaiModel->insert($data);

        return redirect('Home');

    }


    public function pageUpdateSiswa($id)
    {
        $siswaModel = model('App\Modules\Siswa\Models\SiswaModel');

        $data = [
            'title'             => 'Siswa',
            'Hsidebar'          => '',
            'Gsidebar'          => '',
            'Psidebar'          => '',
            'Ssidebar'          => 'active_sidebar',
            'SNsidebar'         => '',

            'field_data'        => $siswaModel->find($id)
        ];


        echo view(MODULES_NAMESPACE.'Siswa\Views\UpdateSiswa',$data);
    }

    public function updateSiswa($id)
    {
        $siswaModel = model('App\Modules\Siswa\Models\SiswaModel');

        $data = [

            'nis' => $this->request->getVar('nis'),

            'nama_lengkap' => $this->request->getVar('nama_lengkap'),

            'kelas' => $this->request->getVar('kelas'),

            'jurusan' => $this->request->getVar('jurusan'),

            'tempat_lahir' => $this->request->getVar('tempat_lahir'),

            'alamat' => $this->request->getVar('alamat'),

            'email' => $this->request->getVar('email'),

            'no_telp' => $this->request->getVar('no_telp')

        ] ;

        $siswaModel->update($id,$data);
        return redirect('Home');
        
    }

    public function deleteSiswa($id)
    {
        $siswaModel = model('App\Modules\Siswa\Models\SiswaModel');

        $siswaModel->delete($id);
        // 086547
        return redirect('Home');
    }


    public function deleteNilaiSiswa($id)
    {
        $siswaModel = model('App\Modules\Siswa\Models\NilaiSiswaModel');

        $siswaModel->delete($id);
        // 086547
        return redirect('Home');
    }


    public function updateNilaiSiswa($id)
    {
        $siswaModel = model('App\Modules\Siswa\Models\NilaiSiswaModel');

        $data = [

            'id_siswa' => $this->request->getVar('id_siswa'),

            'id_pelajaran' => $this->request->getVar('id_pelajaran'),

            'nilai_uh' => $this->request->getVar('nilai_uh'),

            'nilai_uts' => $this->request->getVar('nilai_uts'),

            'nilai_uas' => $this->request->getVar('nilai_uas'),

        ] ;


        $data['rata_rata'] = ($data['nilai_uh'] + $data['nilai_uts'] + $data['nilai_uas']) / 3;


        if ($data['rata_rata'] < 41)
        {
            $data['predikat'] = 'D';
        }
        else if ($data['rata_rata'] < 61)
        {
            $data['predikat'] = 'C';
        }
        else if ($data['rata_rata'] < 80)
        {
            $data['predikat'] = 'B';
        }
        else if ($data['rata_rata'] <= 100)
        {
            $data['predikat'] = 'A';
        }


        $siswaModel->update($id,$data);

        return redirect('Home');
        
    }


    public function pageUpdateNilaiSiswa($id)
    {
        $siswaModel = model('App\Modules\Siswa\Models\NilaiSiswaModel');

        $db = \Config\Database::connect();

        $dataSiswa              = $db->query('SELECT id,nama_lengkap FROM tab_siswa');
        $dataPelajaran          = $db->query('SELECT id,mata_pelajaran FROM tab_pelajaran');


        $data = [
            'title'             => 'Siswa',
            'Hsidebar'          => '',
            'Gsidebar'          => '',
            'Psidebar'          => '',
            'Ssidebar'          => '',
            'SNsidebar'         => 'active_sidebar',

            'siswa'             => $dataSiswa->getResult(),
            'pelajaran'         => $dataPelajaran->getResult(),
            'field_data'        => $siswaModel->find($id)
        ];


        echo view(MODULES_NAMESPACE.'Siswa\Views\UpdateNilaiSiswa',$data);
    }
}