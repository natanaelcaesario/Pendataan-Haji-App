<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        if ($this->request->getPost()) {
            $session = session();
            $adminModels = new \App\Models\AdminModel();
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $admin = $adminModels->where('username', $username)->first();
            if ($admin) {
                if ($admin->password == $password) {
                    $ses_data = [
                        'id' => $admin->id,
                        'username' => $admin->username,
                        'role' => $admin->role,
                        'logged' => TRUE,
                        'admin' => TRUE
                    ];
                    $session->set($ses_data);
                    return \redirect()->to(\site_url('admin'));
                }
            } else {
                echo 'ga ketemu';
            }
        }
        return view('Admin/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(\site_url('admin/login'));
    }











    //--------------------------------------------------------------------

}
