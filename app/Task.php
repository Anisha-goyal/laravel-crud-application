<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = ['completed','body','post_id'];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
