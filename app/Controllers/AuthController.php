<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function store()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $userModel->save([
            'username' => $username,
            'password' => $password,
        ]);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            session()->set('user_id', $user['id']);
            return redirect()->to('/');
        }

        return redirect()->back()->with('errorAuth', 'Mot de passe ou identifiant incorrect.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
