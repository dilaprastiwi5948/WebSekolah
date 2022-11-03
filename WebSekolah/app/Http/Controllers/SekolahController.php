<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('about');
    }
    public function profile() {
        return view('profile');
    }
    public function contact() {
        return view('contact');
    }
}
