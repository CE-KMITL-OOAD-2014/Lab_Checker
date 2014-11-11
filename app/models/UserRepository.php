<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

	class UserRepository extends Eloquent
	implements UserInterface, RemindableInterface {
	
		use UserTrait, RemindableTrait;
		
		public $table = 'user';
	}
