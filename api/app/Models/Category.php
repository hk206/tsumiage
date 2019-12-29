<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }
}