@extends('_layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Register
@stop

{{-- Content --}}
@section('content')

<h2>Inregistrare cont nou</h2>

<div class="well">

    {{ Form::open(array('route' => 'admin.user.register', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('first_name', 'Prenume', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-3">
                {{ Form::text('first_name', null, array('class' => 'form-control input-sm')) }}
                {{ ($errors->has('first_name') ? $errors->first('first_name', '<span class="input-error">:message</span>') : '') }}
            </div>
            {{ Form::label('last_name', 'Nume', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-3">
                {{ Form::text('last_name', null, array('class' => 'form-control input-sm')) }}
                {{ ($errors->has('last_name') ? $errors->first('last_name', '<span class="input-error">:message</span>') : '') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-4">
                {{ Form::text('email', null, array('class' => 'form-control input-sm')) }}
                {{ ($errors->has('email') ? $errors->first('email', '<span class="input-error">:message</span>') : '') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Parola', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-3">
                {{ Form::password('password', array('class' => 'form-control input-sm')) }}
                {{ ($errors->has('password') ? $errors->first('password', '<span class="input-error">:message</span>') : '') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirma parola', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-3">
                {{ Form::password('password_confirmation', array('class' => 'form-control input-sm')) }}
                {{ ($errors->has('password_confirmation') ? $errors->first('password_confirmation', '<span class="input-error">:message</span>') : '') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('hobbies[]', 'Ce hobby-uri ai?', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-6">
                {{ Form::select('hobbies[]', Hobby::orderBy('name', 'asc')->lists('name', 'id'), null, array('multiple', 'style' => 'height: 200px', 'class' => 'form-control input-sm')); }}
                <p>Pentru a selecta mai multe tine apasat Ctrl<br/></p>
                {{ ($errors->has('v') ? $errors->first('hobbies', '<span class="input-error">:message</span>') : '') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('descr', 'Despre tine', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-6">
                {{ Form::textarea('descr', null, array('rows' => 3, 'class' => 'form-control input-sm')) }}
                {{ ($errors->has('descr') ? $errors->first('descr', '<span class="input-error block">:message</span>') : '') }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('city', 'Oras', array('class' => 'col-lg-3 control-label')) }}
            <div class="col-lg-3">
                {{ Form::text('city', null, array('class' => 'form-control input-sm')) }}
                {{ ($errors->has('city') ? $errors->first('city', '<span class="input-error">:message</span>') : '') }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-3 col-lg-9">
                {{ Form::submit('Inregistrare', array('class' => 'btn btn-success btn-xs topBottom')) }}
            </div>
        </div>

    {{ Form::close() }}

</div>

@stop
