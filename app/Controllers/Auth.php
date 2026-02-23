<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function process()
    {
        $model = new UserModel();
        $user = $model->where('email', $this->request->getPost('email'))->first();

        if($user && password_verify($this->request->getPost('password'), $user['password']))
        {
            session()->set([
                'user_id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role'],
                'logged_in' => true
            ]);

            return redirect()->to('/');
        }

        return redirect()->back()->with('error','Email / Password salah');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login')
                ->with('success', 'Berhasil logout');;
    }
    }