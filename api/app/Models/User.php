<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
    public function dailyReportLikes()
    {
        return $this->hasMany('App\Models\dailyReportLike');
    }
    public function summaryLikes()
    {
        return $this->hasMany('App\Models\summaryLike');
    }
    public function dailyReportComments()
    {
        return $this->hasMany('App\Models\dailyReportComment');
    }
    public function summaryComments()
    {
        return $this->hasMany('App\Models\SummaryComment');
    }
}
