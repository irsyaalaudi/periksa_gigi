<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function user_dashboard(): string
    {
        return view('user_dashboard');
    }

    public function riwayat_user(): string
    {
        return view('riwayat_user');
    }

    public function admin_dashboard(): string
    {
        if (session()->get('role') != 'admin') {
            // Bukan admin, tolak akses
            return view('errors/acces_denied');
        }
        return view('admin_dashboard');
    }

    public function data_pasien(): string
    {
        if (session()->get('role') != 'admin') {
            // Bukan admin, tolak akses
            return view('errors/acces_denied');
        }
        return view('data_pasien');
    }

    public function data_drg(): string
    {
        if (session()->get('role') != 'admin') {
            // Bukan admin, tolak akses
            return view('errors/acces_denied');
        }
        return view('data_drg');
    }

    public function profil(): string
    {
        return view('profil');
    }

    public function faq(): string
    {
        return view('faq');
    }

    public function contact(): string
    {
        return view('contact');
    }
}
