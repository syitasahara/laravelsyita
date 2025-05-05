<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function biodata()
    {
        return view('biodata');
    }

    public function medsos()
    {
        return view('medsos');
    }

    public function hobi()
    {
        return view('hobi');
    }

    public function yanti()
    {
        return view('yanti');
    }

    public function biodatayanti()
    {
        return view('biodatayanti');
    }
    public function medsosyanti()
    {
        return view('medsosyanti');
    }
    public function makananyanti()
    {
        return view('makananyanti');
    }
}

