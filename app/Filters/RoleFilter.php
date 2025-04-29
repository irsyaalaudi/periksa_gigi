<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $role = session()->get('role');

        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if ($arguments) {
            $allowedRoles = $arguments;

            if (!in_array($role, $allowedRoles)) {
                // Jika role tidak cocok, arahkan sesuai role user
                if ($role === 'admin') {
                    return redirect()->to('/admin');
                } elseif ($role === 'user') {
                    return redirect()->to('/user');
                } else {
                    // Jika role aneh
                    return redirect()->to('/login');
                }
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // kosongkan
    }
}
