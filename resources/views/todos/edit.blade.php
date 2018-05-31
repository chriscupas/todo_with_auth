@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Update
			</div>

			<div class="panel-body">
				<div class="clearfix"></div>
				
				@include('common.errors')

				{!! Form::model($todo, ['method' => 'PATCH', 'action' => ['TodoController@update', $todo->id], 'class' => 'formular form-horizontal ls_form form-bordered']) !!}
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Tasks</label>
						<div class="col-sm-6">
							<textarea name="tasks" id="tasks" class="form-control" >{{$todo->tasks}}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Status</label>
						<div class="col-sm-6">
							<select class="form-control" name="status">
								<option value=""></option>
								<option value="1" {{ $todo->status ? 'selected' : '' }}>Active</option>
								<option value="0" {{ !$todo->status ? 'selected' : '' }}>Done</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="button" class="btn" onclick="javascript:history.back();">Back</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</div>

				&nbsp;{!! Form::close() !!}
				
			</div>	
		</div>	
	</div>	
</div>	
@endsection