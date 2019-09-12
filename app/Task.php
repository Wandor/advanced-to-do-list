<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];

    /**
     * Get user that owns task
     */

     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
