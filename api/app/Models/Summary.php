<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    /**
     * リレーション
     */
    public function summaryComments()
    {
        return $this->hasMany('App\Models\SummaryComment');
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
