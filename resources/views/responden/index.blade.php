@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Data Responden</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body">
                    <a href="{{url('responden/tambah')}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    <br><br>
                    <table class="table table-bordered">
                        <thead> 
                            <tr> 
                                <th>#</th> 
                                <th>Nama Responden</th> 
                                <th>Suku</th> 
                                <th>Kampung</th> 
                                <th>Dusun</th> 
                                <th>Aksi</th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach ($responden as $index => $item)
                            <tr> 
                                <th scope="row">{{ $index + 1 }}</th> 
                                <td>{{$item->nama_responden}}</td> 
                                <td>{{$item->suku}}</td> 
                                <td>{{$item->kampung}}</td> 
                                <td>{{$item->dusun}}</td> 
                                <td>
                                    <!-- <a href="" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a> -->
                                    <a href="" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{url('responden/lihat/' . $item->id_responden)}}" title="Lihat"><i class="glyphicon glyphicon-file"></i></a>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
