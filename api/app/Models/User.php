<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * リレーション
     */
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
    public function dailyReportLikes()
    {
        return $this->hasMany('App\Models\DailyReportLike');
    }
    public function summaryLikes()
    {
        return $this->hasMany('App\Models\SummaryLike');
    }
    public function dailyReportComments()
    {
        return $this->hasMany('App\Models\DailyReportComment');
    }
    public function summaryComments()
    {
        return $this->hasMany('App\Models\SummaryComment');
    }
}
