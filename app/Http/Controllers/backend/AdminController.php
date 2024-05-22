<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
         public function admin(){
    return view('backend.admin');
}
    public function adminpassword(){
        $admin = Admin::get();
    return view('backend.adminpassword', compact('admin'));
}
}
