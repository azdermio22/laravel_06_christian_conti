<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function home() {
        $data = Data::all();
        return view('welcome',compact('data'));
    }
    function add_article() {
        return view('add_article');
    }
}
