<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index() {
        return view('index');
    }
    public function extra() {
        return view('extra');
    }
    public function profile() {
        return view('profile');
    }
    public function contact() {
        return view('contact');
    }
    public function galeri() {
        return view('galeri');
    }
}
