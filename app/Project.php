<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
	protected $fillable=[
	'name',
	'start_date',
	'end_date',
	'sat',
	'sun',
	'mon',
	'tue',
	'wed',
	'thu',
	'fri',
	'work_hours'
	];

	public function user(){
        return $this->belongsTo(User::class);
    }

	public function tasks(){
        return $this->hasMany(Task::class);
    }
}
