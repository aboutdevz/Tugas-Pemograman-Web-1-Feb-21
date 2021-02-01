<?php namespace App\Modules\Guru\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table            = 'tab_guru';
    protected $returnType       = 'object';
    protected $allowedFields    = [
                                  'nik',
                                  'nama_guru',
                                  'pendidikan_terakhir',
                                  'jurusan',
                                  'asal_sekolah',
                                  'alamat',
                                  'email',
                                  'no_telp'
                                ];
}