@extends('_layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
Admin Events
@stop

{{-- Content --}}
@section('content')
 
	<h2>
		Events <a href="{{ URL::route('admin.events.create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Add new</a>
	</h2>
	<hr>
	<div class="table-responsive">
		<table class="table table-striped table-hover table-condensed">
			<thead>
				<tr>
					<th>#</th>
					<th>
						Name					
						<a href="{{ route('admin.events.index', array('sort' => 'title', 'order' => 'asc')) }}">
							<span class="glyphicon glyphicon-chevron-up"></span>
						</a>
						<a href="{{ route('admin.events.index', array('sort' => 'title', 'order' => 'desc')) }}">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
					</th>
					<th>Category</th>
					<th>
						Posted					
						<a href="{{ route('admin.events.index', array('sort' => 'created_at', 'order' => 'asc')) }}">
							<span class="glyphicon glyphicon-chevron-up"></span>
						</a>
						<a href="{{ route('admin.events.index', array('sort' => 'created_at', 'order' => 'desc')) }}">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
					</th>
					<th>{{--By--}}</th>
					<th><span class="glyphicon glyphicon-cog"></span></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($entries as $entry)
					<tr>
						<td>{{ $entry->id }}</td>
						<td><a href="{{ URL::route('admin.events.show', $entry->id) }}">{{ $entry->title }}</a></td>
						<td>{{ $entry->hobby->name }}</td>					
						<td>{{ $entry->created_at }}</td>
						<td>{{-- $entry->author->email --}}</td>
						<td>
							<a href="{{ URL::route('admin.events.edit', $entry->id) }}" class="btn btn-success btn-sm pull-left">Edit</a>							
							{{ Form::open(array('route' => array('admin.events.destroy', $entry->id), 'method' => 'delete', 'data-confirm' => 'Are you sure?', 'class' => 'form-inline')) }}
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	
	{{ $entries->addQuery('order',$order)->addQuery('sort', $sort)->links() }}
	
@stop