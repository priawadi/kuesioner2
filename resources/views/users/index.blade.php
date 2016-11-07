@extends('layouts.app')
@section('title')
	Daftar Pengguna
@endsection 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manajemen Pengguna</div>
                <div class="panel-body">
                	<a class="btn btn-success btn-sm" href="{{ route('users.create') }}">Tambah</a>
                	<br><br>
					@if ($message = Session::get('success'))
						<div class="alert alert-success">
							<p>{{ $message }}</p>
						</div>
					@endif
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Nama Pengguna</th>
							<th>Email</th>
							<th>Roles</th>
							<th width="280px">Aksi</th>
						</tr>
					@foreach ($data as $key => $user)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if(!empty($user->roles))
								@foreach($user->roles as $v)
									<label class="label label-success">{{ $v->display_name }}</label>
								@endforeach
							@endif
						</td>
						<td>
							<a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Detil</a>
							@permission('user-edit')
							<a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
							@endpermission
							@permission('user-delete')
							@if(!$check_admin[$user->id])
								{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
			            {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
			        	{!! Form::close() !!}
							@endif
							@endpermission
						</td>
					</tr>
					@endforeach
					</table>
					{!! $data->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection