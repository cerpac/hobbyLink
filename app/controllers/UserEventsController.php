<?php

class UserEventsController extends BaseController {

    public function index()
    {
		// add allowable columns to search/sort on
		$allowed_cols = array('created_at'); 
		
		// default column to sort 'created_at'
		$sort = in_array(Input::get('sort'), $allowed_cols) ? Input::get('sort') : 'created_at'; 
		
		// default order 'desc'
		$order = Input::get('order') === 'asc' ? 'asc' : 'desc';

		// sort & paginate
		$entries = Event::orderBy($sort, $order)->paginate(10);
		
		return \View::make('admin.events.index')->with(array('entries' => $entries, 'sort' => $sort, 'order' => $order));
    }
	
	public function show($id)
    {
        return \View::make('admin.events.show')->with('event', Event::find($id));
    }
 
    public function create()
    {
        return \View::make('admin.events.create');
    }
 
    public function store()
	{		
		$event = new Event;

		if ($event->validate())
		{			
			$image = '';

			if (Input::hasFile('image')) {
				$file            = Input::file('image');
				$destination_path = public_path() . '/uploads/';
				$filename        = str_random(6) . '_' . $file->getClientOriginalName();
				if( $upload_success = $file->move($destination_path, $filename) )
					$image = '/uploads/' . $filename;				
			}
	
			$event->user_id               = Sentry::getUser()->id;
			$event->hobby_id            = Input::get('hobby_id');
			$event->name   	          = Input::get('name');
			$event->slug                  = Str::slug(Input::get('title'));
			$event->descr   	              = Input::get('descr');
			$event->address   	          = Input::get('address');
			$event->start   	          = Input::get('start');
			$event->end   	          = Input::get('end');
			
			$event->image   	          = $image;
			$event->save();		
			 
			Session::flash('success', 'Entry saved successfully.');

			return Redirect::route('admin.events.edit', $event->id);
		}
		else
		{
			return Redirect::back()->withInput()->withErrors($event->errors());
		}
	}
 
    public function edit($id)
    {
        return \View::make('admin.events.edit')->with('event', Event::find($id));
    }
 
    public function update($id)
	{		
		$event = Event::find($id);

		if ($event->validate($id))
		{				
			$image = '';

			if (Input::hasFile('image')) {			
				$file            = Input::file('image');
				$destination_path = public_path() . '/uploads/';
				$filename        = str_random(6) . '_' . $file->getClientOriginalName();
				if( $upload_success = $file->move($destination_path, $filename) )
				{
					$image = '/uploads/' . $filename;
					
					// delete old image
					File::delete(public_path() . $event->image);
				}
			}
						   
			$event->hobby_id            = Input::get('hobby_id');
			$event->name   	          = Input::get('name');
			$event->slug                  = Str::slug(Input::get('title'));
			$event->body   	              = Input::get('body');
			$event->price   	          = Input::get('price');
			$event->date_expire   	      = Input::get('date_expire');
			$event->qty   	              = Input::get('qty');
			$event->location   	          = Input::get('location');
			$event->image   	          = $image;
			//$event->visible   	          = 'yes';
			$event->save();		
		 
			Session::flash('success', 'Entry updated successfully.');

			return Redirect::route('admin.events.edit', $event->id);
		}
		else
		{
			return Redirect::back()->withInput()->withErrors($event->errors());
		}
	}
 
    public function destroy($id)
	{
		$event = Event::find($id);	
		
		File::delete(public_path() . $event->image);
		
		$event->delete();
	 
		Session::flash('success', 'Entry deleted successfully.');

		return Redirect::route('admin.events.index');
	}
     
}