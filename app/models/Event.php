<?php namespace App\Models;

class Event extends Elegant {

	protected $table = 'events';

	protected $guarded = array();

 	protected $rules = array();

    public function author()
    {
        return $this->belongsTo('User', 'user_id');
    }
    public function hobby()
    {
        return $this->belongsTo('Hobby', 'hobby_id');
    }
    
    public function users()
    {
        return $this->belongsToMany('User', 'event_users', 'event_id', 'user_id');
    }
    
}
