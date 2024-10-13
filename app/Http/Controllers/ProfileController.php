<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Dea Ananta',
            'kelas' => 'C',
            'npm' => '2217051054'
        ];

        return view('profile', $data);
        }
}
