@extends('_layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Adauga Eveniment
@stop

{{-- Content --}}
@section('content')
 
    <h2>Adauga un eveniment</h2>
	 
    {{ Form::open(array('route' => 'admin.events.store', 'files' => true, 'class' => 'form-horizontal')) }}
 
        <div class="form-group">
            {{ Form::label('name', 'Nume', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-6">
				{{ Form::text('name', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('name') ? $errors->first('name', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
		
        <div class="form-group">
            {{ Form::label('hobby_id', 'Hobby', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-6">
				{{ Form::select('hobby_id', Hobby::orderBy('name', 'asc')->lists('name', 'id'), null, array('class' => 'form-control')); }}
				{{ ($errors->has('hobby_id') ? $errors->first('hobby_id', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
		
		<div class="form-group">
            {{ Form::label('descr', 'Descriere', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-6">
				{{ Form::textarea('descr', null, array('rows' => 8, 'class' => 'form-control')) }}
				{{ ($errors->has('descr') ? $errors->first('descr', '<span class="input-error block">:message</span>') : '') }}
			</div>
        </div>

        <div class="form-group">
            {{ Form::label('start', 'Cand incepe?', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-2">
				{{ Form::text('start', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('start') ? $errors->first('start', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
		
        <div class="form-group">
            {{ Form::label('end', 'Cand se termina?', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-2">
				{{ Form::text('end', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('end') ? $errors->first('end', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>

        <div class="form-group">
            {{ Form::label('address', 'Adresa', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-4">
				{{ Form::text('address', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('address') ? $errors->first('address', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>

        <div class="form-group">
            {{ Form::label('image', 'Imagine', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-4">
				{{ Form::file('image', array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('image') ? $errors->first('image', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
		
		<div class="form-group">
			<div class="col-lg-offset-3 col-lg-9">
				{{ Form::submit('Adauga', array('class' => 'btn btn-success btn-large')) }}
				<a href="{{ URL::route('admin.events.index') }}" class="btn btn-default btn-xs topBottom">Anuleaza</a>
			</div>
		</div>
 
    {{ Form::close() }}
 
@stop