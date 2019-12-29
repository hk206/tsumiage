<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * リレーション
     */
    public function dailyReports()
    {
        return $this->hasMany('App\Models\DailyReport');
    }
    public function summaries()
    {
        return $this->hasMany('App\Models\Summary');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
