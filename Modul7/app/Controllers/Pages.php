<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Login'
        ];
        return view('pages/home', $data);
    }

    public function login()
    {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $userModel = new \App\Models\UserModel();
    $user = $userModel->where('username', $username)->first();

    if ($user && password_verify($password, $user['password'])) {
        session()->set('logged_in', true);
        session()->set('username', $user['username']);
        return redirect()->to('/buku');
    }

    session()->setFlashdata('error', 'Username atau password salah');
    return redirect()->to('/');
    }

    public function logout()
    {
    session()->destroy();
    return redirect()->to('/');
    }   

}