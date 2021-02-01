<?php namespace App\Modules\Home\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'Hsidebar' => 'active_sidebar
            ',
            'Gsidebar' => '',
            'Psidebar' => '',
            'Ssidebar' => '',
            'SNsidebar' => ''
        ];
        echo view(MODULES_NAMESPACE.'Home\Views\Home',$data);
    }
}