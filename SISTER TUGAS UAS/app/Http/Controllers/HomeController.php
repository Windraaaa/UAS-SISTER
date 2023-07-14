<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function tabledata(){
        return view('mahasiswa.tabledata', ['title' => "table data page"]);
    }
}
