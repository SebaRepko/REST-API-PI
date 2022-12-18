<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peoplecontroller extends Controller
{
    public function index()
    {
        $people = people::all();
        return peopleresource::collection($people);
    }

    public function show(people $people)
    {
        //
    }

    public function edit(people $people)
    {
        //
    }

    public function update(peoplerequest $request, Post $people)
    {
        $people->update($request->all());
        
        return new peopleresource($people);
    }

    public function destroy(Post $people)
    {
        $post->delete();

        return response(null, 204);
    }

    public function store(peoplerequest $request)
    {
        $people = people::create($request->all());
        
        return new peopleresource($people);
    }

    public function create()
    {
        //
    }
}
