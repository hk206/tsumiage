<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Project;

class projectController extends Controller
{
   
    private $project;

    public function __construct(Project $project)
    {
       $this->project = $project; 
    }

    public function getDailyReportByCategory(Request $request)
    {
        return $this->project->getDailyReportByCategory($request->input('category_id'));
    }

    public function getSummaryBycategory(Request $request)
    {
        return $this->project->getSummaryByCategory($request->input('category_id'));
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $request['user_id'] = Auth::id();
        return $this->project->fill($request)->save();
    }

    public function myPage($user_id)
    {
        return $this->project->getAllDailyReport($user_id);
    }

    public function show($id)
    {
        return $this->project->find($id);
    }
}
