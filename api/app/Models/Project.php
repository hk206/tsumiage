<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function getDailyReportByCategory($categoryId)
    {
        return $this->where('category_id', $categoryId)->with(['dailyReports'])->get();
    }

    public function getSummaryByCategory($categoryId)
    {
        return $this->where('category_id', $categoryId)->with(['summaries'])->get();
    }

    public function getAllDailyReport($user_id)
    {
        return $this->where('user_id', $user_id)->with(['dailyReports'])->get();
    }

    public function getAllSummary()
    {
        return $this->where('user_id', $user_id)->with(['summaries'])->get();
    }

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
