<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	protected $fillable = [
		'username', 'password'
	];

	public $timestamps = false;
}
