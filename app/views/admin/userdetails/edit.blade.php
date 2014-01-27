@extends('_layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Edit member details
@stop

{{-- Content --}}
@section('content')
    <h2>Editeaza datele de profil</h2>

    {{ Form::model($user_details, array('method' => 'put', 'route' => array('admin.userdetails.update', $user_details->id), 'class' => 'form-horizontal')) }}
        <div class="form-group">
            {{ Form::label('first_name', 'Prenume', array('class' => 'col-lg-2 control-label')) }}
			<div class="col-lg-10">
				{{ Form::text('first_name', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('first_name') ? $errors->first('first_name', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
        <div class="form-group">
            {{ Form::label('last_name', 'Nume', array('class' => 'col-lg-2 control-label')) }}
			<div class="col-lg-10">
				{{ Form::text('last_name', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('last_name') ? $errors->first('last_name', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
        <div class="form-group">
            {{ Form::label('mobile', 'Telefon', array('class' => 'col-lg-2 control-label')) }}
			<div class="col-lg-10">
				{{ Form::text('mobile', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('mobile') ? $errors->first('mobile', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
        <div class="form-group">
            {{ Form::label('address', 'Adresa', array('class' => 'col-lg-2 control-label')) }}
			<div class="col-lg-10">
				{{ Form::text('address', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('address') ? $errors->first('address', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
        <div class="form-group">
            {{ Form::label('city', 'Oras', array('class' => 'col-lg-2 control-label')) }}
			<div class="col-lg-10">
				{{ Form::text('city', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('city') ? $errors->first('city', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Tara', array('class' => 'col-lg-2 control-label')) }}
			<div class="col-lg-10">
				{{ Form::text('country', null, array('class' => 'form-control input-sm')) }}
				{{ ($errors->has('country') ? $errors->first('country', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>

		<div class="form-group">
            {{ Form::label('hobbies[]', 'Ce hobby-uri ai?', array('class' => 'col-lg-3 control-label')) }}
			<div class="col-lg-6">
				{{ Form::select('hobbies[]', Hobby::orderBy('name', 'asc')->lists('name', 'id'), $user->hobbies->lists('id'), array('multiple', 'style' => 'height: 200px', 'class' => 'form-control')); }}
				<p>Pentru a selecta mai multe tine apasat Ctrl<br/></p>
				{{ ($errors->has('v') ? $errors->first('hobbies', '<span class="input-error">:message</span>') : '') }}
			</div>
        </div>

		<div class="form-group">
            {{ Form::label('descr', 'Descrierea ta', array('class' => 'col-lg-2 control-label')) }}
			<div class="col-lg-6">
				{{ Form::textarea('descr', null, array('rows' => 3, 'class' => 'form-control input-sm')) }}
				{{ ($errors->has('descr') ? $errors->first('descr', '<span class="input-error block">:message</span>') : '') }}
			</div>
        </div>

		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">
				{{ Form::submit('Salveaza', array('class' => 'btn btn-success btn-xs topBottom')) }}
				<a href="{{ URL::route('home') }}" class="btn btn-default">Anuleaza</a>
			</div>
		</div>

    {{ Form::close() }}

@stop
