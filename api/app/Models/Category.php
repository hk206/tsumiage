<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * リレーション
     */
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}
