<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function admin()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/');
        }
        return view('admin_dashboard');
    }

    public function user()
    {
        if (session()->get('role') !== 'user') {
            return redirect()->to('/');
        }
        return view('user_dashboard');
    }
}
