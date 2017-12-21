<?php

namespace App\Models;

use Cartaliyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    /**
	* The Eloquent Post model namespace
	*
	* @var string
	*/
	protected static $postModel = 'App\Models\Post';
	
	
	
	
	/**
	* Returns the posts relationship
	*
	* @return \Illuminate\Database\Eloquent\Relations\HasMany
	*/
	public function posts()
	{
		return $this->hasMany(static::$postModel, 'user_id');
	}
}
