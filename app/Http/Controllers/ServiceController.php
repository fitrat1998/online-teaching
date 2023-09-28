<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\News;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        // return view('services.index');
        return view('services.index')->with([
            'services' => Service::latest()->get()->take(6),
            'recent_news' => News::latest()->get()->take(5),
            // 'categories' => Category::all(),
            // 'tags' => Tag::all(),
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
