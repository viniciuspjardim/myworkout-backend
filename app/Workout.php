<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = ['user_id', 'name', 'sets', 'reps', 'weight', 'done'];
    protected $casts = [ 'done'  =>  'boolean'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
