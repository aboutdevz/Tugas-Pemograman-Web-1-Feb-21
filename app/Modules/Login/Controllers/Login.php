<?php namespace App\Modules\Login\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        echo view(MODULES_NAMESPACE.'Login\Views\Login',$data);
    }
    public function Login()
    {
        $request = service('request');
        $username = $request->getvar('username');
        $password = $request->getvar('password');
        $button = $request->getvar('submit_lgn');
        var_dump($username);
        var_dump($password);
        var_dump($button);
        if (isset($button))
        {

        }
    }
}