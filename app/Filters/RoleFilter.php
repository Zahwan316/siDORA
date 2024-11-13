<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Periksa apakah pengguna sudah login
        if (!$session->get('logged_in')) {
            return redirect()->to(base_url("login"));
        }

        // Cek peran pengguna
        $userRole = $session->get('role'); // Pastikan `role` disimpan di sesi saat login

        if ($arguments && !in_array($userRole, $arguments)) {
            return redirect()->to(base_url("unauthorized")); // Redirect jika peran tidak sesuai
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak diperlukan untuk filter ini
    }
}
