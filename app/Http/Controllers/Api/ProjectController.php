<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type', 'technologies')->paginate(3);

        return response()->json(
            [
                "secces"=> true,
                "result"=>$projects
            ]);
    }

    public function show(Project $project){
        

        return response()->json(
            [
                "secces"=> true,
                "result"=>$project

            ]);
    }

    public function search(Request $request){
        $data = $request->all();

        if ( isset($data['name_project'])) {
            $stringa = $data['name_project'];

            $project = Project::where('name_project', 'LIKE', "%{$stringa}%")->get();

            
        }elseif ( is_null($data['name_project'])) {
            $projects = Project::all();
        }else {
            abort(404);
        }

        return response()->json ([
            "secces"=> true,
            "result"=>$project
        ]);
    }
}
