<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyReport extends Model
{
    /**
     * リレーション
     */
    public function dailyReportComments()
    {
        return $this->hasMany('App\Models\DailyReportComment');
    }
    public function dailyReportLikes()
    {
        return $this->hasMany('App\Models\DailyReportLike');
    }
    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
