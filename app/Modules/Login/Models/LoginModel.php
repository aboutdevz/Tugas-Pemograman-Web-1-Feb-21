<?php namespace App\Modules\Login\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'tab_user';
    protected $returnType       = 'object';
    protected $allowedFields    = [
                                'username',
                                'password'
                                ];
}