<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $table = 'tree';

    public function parent()
    {
        return $this->hasMany('App\Tree', 'parent_id', 'id');
    }
}
