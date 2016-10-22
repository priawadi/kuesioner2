@extends('layouts.app')
@section('title')
	Lihat Role
@endsection 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detil Role</div>
                <div class="panel-body">
	                <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Nama Role:</strong>
				                {{ $role->display_name }}
				            </div>
				        </div>
				        <div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Deskripsi:</strong>
				                {{ $role->description }}
				            </div>
				        </div>
				        <div class="col-xs-12 col-sm-12 col-md-12">
				            <div class="form-group">
				                <strong>Permissions:</strong>
				                @if(!empty($rolePermissions))
									@foreach($rolePermissions as $v)
										<label class="label label-success">{{ $v->display_name }}</label>
									@endforeach
								@endif
				            </div>
				        </div>
					</div>
	            	<a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}"> Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection