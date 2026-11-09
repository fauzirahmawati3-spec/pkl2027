<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        return view('auth/login');
    }

    public function prosesLogin()
    {
        $username = trim((string) $this->request->getPost('username'));
        $password = (string) $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if (
            !$user ||
            !password_verify($password, $user['password']) ||
            $user['status'] !== 'aktif'
        ) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Username atau password salah, atau akun belum aktif.');
        }

        session()->regenerate();

        session()->set([
            'id_user'  => $user['id_user'],
            'nama'     => $user['nama'],
            'username' => $user['username'],
            'role'     => $user['role'],
            'logged_in' => true,
        ]);

        $userModel->update($user['id_user'], [
            'last_login' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/dashboard');;
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login')
            ->with('success', 'Berhasil logout.');
    }
}
