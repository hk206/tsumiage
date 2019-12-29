<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    public function summaries()
    {
        return $this->hasMany('App\Models\Summary');
    }
    public function summaryLikes()
    {
        return $this->hasMany('App\Models\SummaryLike');
    }
    public function project()
    {
        return $this->belongsTo('App\Models\project');
    }
}
