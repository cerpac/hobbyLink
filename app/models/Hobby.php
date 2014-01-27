<?php namespace App\Models;

class Hobby extends Elegant {

	protected $table = 'hobbies';

	protected $guarded = array();

 	protected $rules = array();	
	
	public function users()
    {
       // return $this->belongsToMany('User');
		return $this->belongsToMany('User', 'user_hobbies', 'user_id', 'hobby_id');
    }
	public function events()
    {
        return $this->hasMany('Event');
    }
}
