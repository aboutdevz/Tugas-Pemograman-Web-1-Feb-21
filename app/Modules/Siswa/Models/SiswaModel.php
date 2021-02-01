<?php namespace App\Modules\Siswa\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 'tab_siswa';
    protected $returnType       = 'object';
    protected $allowedFields    = [
                                  'nis',
                                  'nama_lengkap',
                                  'kelas',
                                  'jurusan',
                                  'tempat_lahir',
                                  'tanggal_lahir',
                                  'alamat',
                                  'email',
                                  'no_telp'
                                ];
}