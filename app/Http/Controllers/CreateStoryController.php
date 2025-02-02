<?php

namespace App\Http\Controllers;

use App\Models\datas;
use Illuminate\Http\Request;

class CreateStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->view('Dashboard.Story.CreateStory', [
            "title" => "Create My Story's "
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('Dashboard.Story.AddStory', [
            "title" => "Create My Story's "
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "cardtitle" => "required|max:255",
            "description" => "required",
            "images" => "required|max:255",
        ]);

        $res = datas::create($validate);
        if ($res == true) {
            return redirect('/dashboard/createstory/create')->with('success', 'Create Succesfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(datas $datas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(datas $datas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, datas $datas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(datas $datas)
    {
        //
    }
}
