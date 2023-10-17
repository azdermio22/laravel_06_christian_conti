<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    function adding(ArticleRequest $request) {
        $data = Data::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->file('image')->store('public/img'),
        ]);
        $carote = "ciao";
        return redirect(route('home'));
    
}
}