<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class CommonController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('index',compact('news'));
    }
}
