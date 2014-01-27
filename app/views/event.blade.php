@extends('_layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
{{{ $entry->name }}}
@stop

{{-- Content --}}
@section('content')
	<h2>{{{ $entry->name }}}</h2>

	<div class="removemargin"></div>

	<!-- SECTION 1 - Column 1 -->
	<div class="three-fifth push-two">
		<p>{{{ $entry->descr }}}</p>
		<p><strong>Cine organizeaza:</strong> {{{ $entry->author->first_name }}} {{{ $entry->author->last_name }}}</p>
		<p><strong>Ce facem:</strong> {{{ $entry->hobby->name }}}</p>
		<p><strong>Unde:</strong> {{{ $entry->address }}}</p>
	</div>
	<!-- /SECTION 1 - Column 1 -->

	<!-- SECTION 1 - Column 2 -->
	<div class="two-fifth pull-three last">

		<div class="pic-border"><img src="{{ asset($entry->image) }}" alt=""></div>
	</div>
	<!-- /SECTION 1 - Column 2 -->

	<div class="clear">&nbsp;</div>

	<!-- /SECTION 1 -->

	<!-- Registration banner -->
	<div class="register-pane">
		<div class="register-pane-inner">
			<div class="text">
				<div class="big">
					{{ $entry->name }}
				</div>
				<div>
					{{ Carbon\Carbon::createFromTimestamp(strtotime($entry->start))->toFormattedDateString() }}
					-
					{{ Carbon\Carbon::createFromTimestamp(strtotime($entry->end))->toFormattedDateString() }}
				</div>
			</div>
				
			<div class="button">
				@if (Sentry::check())
				<a href="#g" class="register-button">
					<span class="hov"></span><span class="inner">Particip!</span>
				</a>
				@else
				<a href="#g" class="register-button">
					<span class="hov"></span><span class="inner">Vreau!</span>
				</a>
				@endif
			</div>
			<div class="clear">&nbsp;</div>
		</div>
	</div>
	<!-- /Registration banner -->

	<!-- SECTION 3 -->

	<h2><cufontext>Cine mai vine</cufontext></h2>

	<!-- Speakers -->
	<ul class="speakers">

		@foreach ($entry->users as $user)

			<li>
				<div class="pic">
					<img src="{{ asset($user->details->image) }}" alt="" width="74" height="74">
					<div class="name">{{ $user->first_name }}<br>{{ $user->last_name }}</div>
				</div>
				<div class="text">
					<p><i>PHP Developer,<br><span>eMag</span></i></p>					
					
					@foreach ($user->hobbies as $hobby)
						<span>{{ $hobby->name }}</span>, 
					@endforeach		
					
				</div>
			</li>
		@endforeach

	</ul>
	<div class="clear">&nbsp;</div>
	<!-- /Speakers -->

	<!-- /SECTION 3 -->

	<div class="removemargin"></div>

	<!-- SECTION 4 -->

	<div class="clear">&nbsp;</div>
@stop
