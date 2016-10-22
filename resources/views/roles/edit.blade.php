@extends('layouts.app')
@section('title')
	Edit Role
@endsection 
@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit Role</div>
	                <div class="panel-body">
	                	@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
						            <div class="form-group">
						                <strong>Name:</strong>
						                {!! Form::text('display_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
						            </div>
						        </div>
						        <div class="col-xs-12 col-sm-12 col-md-12">
						            <div class="form-group">
						                <strong>Description:</strong>
						                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
						            </div>
						        </div>
						        <div class="col-xs-12 col-sm-12 col-md-12">
						            <div class="form-group">
						                <strong>Permission:</strong>
						                <br/>
						                @foreach($permission as $value)
						                	<label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
						                	{{ $value->display_name }}</label>
						                	<br/>
						                @endforeach
						            </div>
						        </div>
						        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
	                				<a class="btn btn-link btn-sm" href="{{ route('roles.index') }}"> Kembali</a>
									<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
						        </div>
							</div>
						{!! Form::close() !!}
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection