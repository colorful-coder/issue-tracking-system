<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: use validation request instead of local validation
        $request->validate(['name' => 'required']);
        Project::create($request->only('name'));
        return redirect()->route('project.index')->with('success', 'A project was created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // TODO:: change route model binding 
        // ref: https://laravel.com/docs/8.x/routing#route-model-binding
        $project = Project::find($id);
        return view('project.edit', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO: use validation request instead of local validation
        $request->validate(['name' => 'required']);
        // TODO:: change route model binding 
        // ref: https://laravel.com/docs/8.x/routing#route-model-binding
        Project::find($id)->update($request->only('name'));
        return redirect()->route('project.index')->with('success', 'A project was updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO:: change route model binding 
        // ref: https://laravel.com/docs/8.x/routing#route-model-binding
        Project::find($id)->delete();
        return redirect()->route('project.index')->with('success', 'A project was deleted.');
    }
}
