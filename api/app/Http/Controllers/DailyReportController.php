<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\DailyReport;

class DailyReportController extends Controller
{
   
    private $dailyReport;

    public function __construct(DailyReport $dailyReport)
    {
       $this->dailyReport = $dailyReport; 
    }

    public function getAllDailyReport()
    {
        return $this->dailyReport->all();
    }

    public function store(Request $request)
    {
        $this->dailyReport->fill($request->all())->save();
    }

    public function myPage()
    {
       return $this->dailyReport->find(Auth::id());
    }

    public function update(Request $request, $id)
    {
       $this->dailyReport->find($id)->fill($request->all())->save();
    }
}
