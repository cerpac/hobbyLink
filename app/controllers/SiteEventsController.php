<?php

class SiteEventsController extends BaseController {

    public function getIndex()
    {
		// add allowable columns to search/sort on
		$allowed_cols = array('created_at'); 
		
		// default column to sort 'created_at'
		$sort = in_array(Input::get('sort'), $allowed_cols) ? Input::get('sort') : 'created_at'; 
		
		// default order 'desc'
		$order = Input::get('order') === 'asc' ? 'asc' : 'desc';

		// sort & paginate
		$entries = Event::orderBy($sort, $order)->paginate(5);
		
		return \View::make('events')->with(array('entries' => $entries, 'sort' => $sort, 'order' => $order));
    }
	
    public function getEvent($slug)
    {
		$event = Event::where('slug', $slug)->first();
		
		if( is_null($event) )
			App::abort('404');
		else
			return View::make('event')->with('entry', $event);
    }
 
}