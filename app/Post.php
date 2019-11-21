<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    protected $fillable = ['title','content','user_id'];

    public function task()
    {
    	return $this->hasMany(Task::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
