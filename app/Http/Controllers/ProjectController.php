<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Project;
use App\Task;
use App\User;

class ProjectController extends Controller
{
    public function getMyProjects(){
    	return $projects = User::find(Auth::user()->id)->projects()->orderBy('created_at')->get();
    }

    public function getOtherProjects(){
    	return $projects = User::find(Auth::user()->id)->projects()->get();
    }

    public function addProject(Request $request){
    	$newProject = $request->all();
    	$user = Auth::user();
    	$user->projects()->create($newProject);

    	return User::find(Auth::user()->id)->projects()->get();
    }

    public function getIndividualProject($id){
        $projectData = [];
        $projectData['info'] =  Project::find($id);
        $projectData['tasks'] =  getTasks($id, 0);

        return $projectData;
    }

    protected function getTasks($project_id,$parent_id){
        
    }
}
