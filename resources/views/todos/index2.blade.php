@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				TODO Lists
					
			</div>

			<div class="panel-body">
				<p class="text-right"><a href="{{url('todos/create')}}" class="btn btn-xs btn-default">Add TODO tasks</a><p>
				
					<table class="table table-bordered table-stripped">
						<thead>
							<tr>
								<th>TODO</th>
								<th>Status</th>
								<th style="width:80px;"></th>
							</tr>
						</thead>
						<tbody>
							@if(count($todos)>0)
								@foreach($todos as $todo)
								<tr>
									<td>{{$todo->tasks}}</td>
									<td>
										@if($todo->status)
											<span class="label label-success">Active</span>
										@else
											<span class="label label-default">Done</span>
										@endif

									</td>
									<td class="text-center">
										<form method="POST" action="{{url('todos/'.$todo->id)}}">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<a href="{{url('todos/'.$todo->id.'/edit')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
											<button class="btn btn-danger btn-xs" onclick="return confirm('Confirm Delete?');"><i class="fa fa-trash"></i></button>
										</form>

									</td>
								</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				
			</div>	
		</div>	
	</div>	
</div>
@endsection	