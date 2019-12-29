<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\DailyReportComment;

class DailyReport extends Controller
{
    private $dailyReportComment;
   
    public function __construct(DailyReportComment $dailyReportComment)
    {
        $this->dailyReportComment= $dailyReportComment;
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $request['user_id'] = Auth::id();
        $this->dailyReportComment->fill($request)->save();
    }
}
