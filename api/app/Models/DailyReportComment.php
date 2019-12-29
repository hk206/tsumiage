<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReportComment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function dailyReport()
    {
        return $this->belongsTo('App\Models\DailyReport');
    }
}
