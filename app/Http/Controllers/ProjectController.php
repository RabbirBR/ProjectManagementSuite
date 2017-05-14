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
    	$project = $user->projects()->create($newProject);
        return $project;
    	// return User::find(Auth::user()->id)->projects()->get();
    }

    public function getIndividualProject($id){
        $projectData = [];
        $projectData['info'] =  Project::find($id);
        $projectData['tasks'] =  $this->getTasks($id, 0);

        return $projectData;
    }

    private function getTasks($project_id,$parent_id){
        $tasks = Task::where('project_id', $project_id)->where('parent_id', $parent_id)->get();

        if(isset($tasks)){
            foreach ($tasks as $i => $task) {
                if($task['has_children']){
                    $this->getTasks($id, $child->id);
                }                
            }
        }
        return $tasks;
    }
}
