<?php

namespace App\Http\Controllers;

use App\Models\First;
use Illuminate\Http\Request;
// use App\Models\Service;
use App\Models\News;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('services.first')->with([
            'first' => First::latest()->get()->take(6),
            'recent_news' => News::latest()->get()->take(5),
            // 'categories' => Category::all(),
            // 'tags' => Tag::all(),
        ]);
        // return view('services.first',compact('services','recent_news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(First $first)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(First $first)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, First $first)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(First $first)
    {
        //
    }
}
