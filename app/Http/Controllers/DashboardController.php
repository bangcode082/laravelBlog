<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function welcome(){
    	return redirect('ldirect')->withSuccess('Anda Berhasil Login Selamat Datang');
    }

    public function directWelcome(){
    	return view('admin.welcome');
    }
}
