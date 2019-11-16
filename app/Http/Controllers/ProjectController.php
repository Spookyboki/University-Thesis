<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        $title = "All Projects";
        
        return view('projects', compact('projects', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;

        $project->title = $request->title;
        $project->slug = $request->slug;
        $project->url = $request->url;
        $project->content = $request->content;

        $project->save();

        return redirect('home')->with('success', 'Project sucessfully saved.');
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
        $update = [
            'title' => $request->title, 
            'slug' => $request->slug, 
            'url' => $request->url,
            'content' => $request->content
        ];

        Project::find($id)->update($update);
    
        return redirect('home')->with('success', 'Project sucessfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect('home')->with('success', 'Project sucessfully deleted.');
    }
}
