<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = [
	'project_id',
	'assigned_to_id',
	'parent_id',
	'name',
	'estimated_hours',
	'description',
	'has_children'
	];
}
