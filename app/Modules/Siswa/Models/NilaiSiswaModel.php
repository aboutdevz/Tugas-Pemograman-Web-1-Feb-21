<?php namespace App\Modules\Siswa\Models;

use CodeIgniter\Model;

class NilaiSiswaModel extends Model
{
    protected $table            = 'tab_nilai_siswa';
    protected $returnType       = 'object';
    protected $allowedFields    = [
                                  'id_siswa',
                                  'id_matapelajaran',
                                  'nilai_uh',
                                  'nilai_uts',
                                  'nilai_uas',
                                  'rata_rata',
                                  'predikat'
                                ];
}