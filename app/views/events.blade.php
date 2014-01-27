@extends('_layouts.default')

{{-- Web site Title --}}

@section('title')

@parent

Evenimente

@stop


{{-- Content --}}

@section('content')

<h2>Evenimente</h2>

@foreach ($entries as $entry)

<!-- Agenda -->
<div class="pane-wraper">
    <div class="pane">
        <!-- Day Head -->
        <div class="agenda-day">
        	<a href="{{ URL::route('event', $entry-> slug) }}">{{ $entry->name }}</a>
            <span style="float:right"><cufontext>{{ date("d M Y", strtotime($entry->start)) }}</cufontext></span>
        </div>
        <!-- /Day Head -->

        <!-- Agenda Item -->
        <div class="agenda-item shade-lr">
            <div class="time"><span class="icon-time">{{ date("h:m", strtotime($entry->start)) }} -- {{ date('h:m', strtotime($entry->end)) }}</span></div>
            <div class="description">
                <p>{{{ Str::limit($entry->descr, 250) }}}</p>
                <div class="room">Unde: {{ $entry->address }}</div>
            </div>
            <span class="shade_l"></span><span class="shade_r"></span></div>
        <!-- /Agenda Item -->
    </div>
</div>
<!-- /Agenda -->

@endforeach

{{ $entries->addQuery('order',$order)->addQuery('sort', $sort)->links() }}

@stop