<?php

namespace App\Controllers\Admin;

use App\Models\Petugas;
use App\Models\Pendonor;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function create()
    {
        $pendonor = new Pendonor();
        $petugas = new Petugas();
        // Validasi input
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|is_unique[pendonor.email]',
            'password' => 'required|min_length[6]',
        ]);

        if($this->request->getPost("repeat_password") != $this->request->getPost("password")){
            return redirect()->to(base_url('register'))->withInput()->with('errors', ['konfirmasi_password' => "Konfirmasi password tidak sama dengan password"]);
        }

        if (!$this->validate($validation->getRules())) {
            return redirect()->to(base_url('register'))->withInput()->with('errors', $validation->getErrors());
        }

        // Hash password
        $hashedPassword = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $pendonor->save([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $hashedPassword,
        ]);

        return redirect()->to(base_url("login"))->with('success', 'Registrasi akun berhasil');
    }

    public function login()
    {
        //return "halo";
        return view('auth/login');
    }

    public function authenticate()
    {
        $pendonor = new Pendonor();
        $petugas = new Petugas();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user_pendonor = $pendonor->getPendonorByEmail($email);
        $user_petugas = $petugas->getPendonorByEmail($email);


        if ($user_pendonor && password_verify($password, $user_pendonor['password'])) {
            // Set session
            session()->set('user_id', $user_pendonor['id_pendonor']);
            session()->set('nama', $user_pendonor['nama']);
            session()->set('role', "user");
            session()->set('logged_in', true);
            return redirect()->to(base_url("pendonor/dashboard"))->with('success', 'Login successful');
        } else if($user_petugas && password_verify($password, $user_petugas['password'])){
            // Set session
            session()->set('user_id', $user_petugas['id_petugas']);
            session()->set('username', $user_petugas['username']);
            session()->set('role', "petugas");
            session()->set('logged_in', true);
            return redirect()->to(base_url("petugas/dashboard"))->with('success', 'Login berhasil');
        }
        
        else {
            return redirect()->to(base_url("login"))->with('error', 'Invalid email or password');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url("login"))->with('success', 'Logged out successfully');
    }
}