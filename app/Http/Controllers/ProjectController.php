<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects = Project::all();

    	return view('projects.index',compact('projects'));
    }

    
    public function store()
    {

    	 $projects = new Project();
    	 $projects->title = request('title');
    	 $projects->description = request('description');
    	 $projects->content = 'Lorem ipsum';

    	 $projects->save();

    	 return redirect('/projects');
    }

    public function create()
    {
		return view('projects.create');
    }

    public function show($id)
    {
      $projects = Project::findorFail($id);
      return view('projects.show',compact('projects'));
    }

    public function edit($id)
    {
    	// return $id;
    	$project = Project::findorFail($id);
        
    	$project_title = $project->title ;
    	$project_content = $project->content ;
    	$project_description = $project->description;

     return view('projects.edit',compact('project_title','project_content','project_description','id'));
    }

    public function update($id)
    {
    	$project = Project::findorFail($id);
    	$project->title = request('title');
    	$project->content = request('content');
    	$project->description = request('description');

    	$project->save();

      return redirect('/projects');
    }

    public function destroy($id)
    {

   	Project::findorFail($id)->delete();
	return redirect('/projects');
    }


}
