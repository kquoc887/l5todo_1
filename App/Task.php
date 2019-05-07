<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    
    protected $fillable = [
        'id', 'project_id', 'name', 'slug', 'completed', 'description',
    ];
    
    protected $guarded = [];

    public function project() {
        return $this->belongsTo('App\Project', 'project_id', 'id');
    }

}
