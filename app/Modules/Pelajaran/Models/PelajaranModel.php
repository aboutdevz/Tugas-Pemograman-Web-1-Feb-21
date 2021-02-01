<?php namespace App\Modules\Pelajaran\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model
{
    protected $table            = 'tab_pelajaran';
    protected $returnType       = 'object';
    protected $allowedFields    = [
                                  'mata_pelajaran',
                                  'jurusan',
                                  'kelas'
                                ];
}