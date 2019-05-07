<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    protected $fillable = [
        'id', 'name', 'slug',
    ];

    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
