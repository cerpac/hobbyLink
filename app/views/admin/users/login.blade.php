@extends('_layouts.default')

{{-- Web site Title --}}
@section('title')
Log In
@stop

{{-- Content --}}
@section('content')

<h2>Login</h2>

<div class="well">
	<form class="form-horizontal" action="{{ URL::to('admin/users/login') }}" method="post">   
        {{ Form::token(); }}

        <div class="control-group {{ ($errors->has('email')) ? 'error' : '' }}" for="email">
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input name="email" id="email" value="{{ Request::old('email') }}" type="text" class="form-control input-sm" placeholder="E-mail">
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>
        </div>
    
       <div class="control-group {{ $errors->has('password') ? 'error' : '' }}" for="password">
            <label class="control-label" for="password">Parola</label>
            <div class="controls">
                <input name="password" value="" type="password" class="form-control input-sm" placeholder="Parola">
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>
        </div>

        <div class="form-actions">
            <input class="btn btn-success btn-xs topBottom" type="submit" value="Log In"> 
            <a href="{{ URL::to('admin/users/resetpassword') }}" class="btn btn-link">Ai uitat parola?</a>
        </div>
  </form>
</div>

@stop
