<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\summaryComment;

class SummaryCommentController extends Controller
{
    private $summaryComment;
   
    public function __construct(summaryComment $summaryComment)
    {
        $this->summaryComment= $summaryComment;
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $request['user_id'] = Auth::id();
        $this->summaryComment->fill($request)->save();
    }
}
