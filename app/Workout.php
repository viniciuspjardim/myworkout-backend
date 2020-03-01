<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = ['user_id', 'name', 'sets', 'reps', 'weight', 'done'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
