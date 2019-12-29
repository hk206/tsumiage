<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Models\Summary;

class summaryController extends Controller
{
    
    private $summary;
   
    public function __construct(Summary $summary)
    {
        $this->summary= $summary;
    }

    public function getAllSummary()
    {
        return $this->summary->all();
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $this->summary->fill($request->all())->save();
    }

    public function myPage()
    {
        return $this->summary->find(Auth::id());
    }

    public function update(Request $request, $id)
    {
       $this->summary->find($id)->fill($request->all())->save();
    }
}
