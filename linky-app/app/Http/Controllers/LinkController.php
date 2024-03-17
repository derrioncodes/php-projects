<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
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
        
        function generateRandomString($length = 10) {
            return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',ceil($length/strlen($x)) )),1,$length);
        }

        $link = new Link();
        $link->short_url = generateRandomString(12);
        $link->original_url = $request->original_url;
        $link->save();

        return redirect("http://localhost:8080/show/{$link->short_url}");
        
    }

    /**
     * Display the specified resource.
     */
    public function show($short_url)
    {
        $link = Link::where('short_url', $short_url)->firstOrFail();
        // return $link;
        return view('show', ["short_url" => $short_url]);
    }

    public function redirect($short_url)
    {
        $link = Link::where('short_url', $short_url)->firstOrFail();
        // return $link->original_url;
        return redirect($link->original_url);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        //
    }
}
