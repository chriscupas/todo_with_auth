@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Create New TODO tasks
			</div>

			<div class="panel-body">
				<div class="clearfix"></div>
				
				@include('common.errors')

				{!! Form::model($todos = new \App\Todo, ['url' => 'todos', 'id' => 'formid2', 'class' => 'formular form-horizontal ls_form form-bordered']) !!}
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Tasks</label>
						<div class="col-sm-6">
							<textarea name="tasks" id="tasks" class="form-control" ></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="button" class="btn" onclick="javascript:history.back();">Back</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</div>

				&nbsp;{!! Form::close() !!}
				
			</div>	
		</div>	
	</div>	
</div>	
@endsection