<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    public function dailyReportComments()
    {
        return $this->hasMany('App\Models\DailyReportComment');
    }
    public function dailyReportLikes()
    {
        return $this->hasMany('App\Models\DailyReportLikes');
    }
    public function project()
    {
        return $this->belongsTo('App\Models\ProjecSt');
    }
}
