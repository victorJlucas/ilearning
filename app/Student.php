<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student query()
 * @mixin \Eloquent
 */
class Student extends Model
{
    public function courses(){
        return $this->belongsToMany(Course::class);
    }

    public function user(){
        return $this->belongsTo(User::class)->select('id', 'name', 'email');
    }

}
