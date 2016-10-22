@extends('layouts.app')
@section('title')
	Daftar Role
@endsection 
@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">Daftar Role</div>
	                <div class="panel-body">
			        	@if ($message = Session::get('success'))
							<div class="alert alert-success">
								<p>{{ $message }}</p>
							</div>
						@endif
			        	@permission('role-create')
			            	<a class="btn btn-success btn-sm" href="{{ route('roles.create') }}"> Tambah</a>
			            @endpermission
			            <br><br>
				        <table class="table table-bordered">
							<tr>
								<th>No</th>
								<th>Role</th>
								<th>Deskripsi</th>
								<th width="280px">Aksi</th>
							</tr>
							@foreach ($roles as $key => $role)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $role->display_name }}</td>
								<td>{{ $role->description }}</td>
								<td>
									<a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}">Detil</a>
									@permission('role-edit')
									<a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">Edit</a>
									@endpermission
									@permission('role-delete')
									{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
						            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
						        	{!! Form::close() !!}
						        	@endpermission
								</td>
							</tr>
							@endforeach
						</table>
						{!! $roles->render() !!}
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection