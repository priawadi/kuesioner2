@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

@section('content')
<script type="text/javascript">
    function show_modal(url, kuesioner)
    {
        form_delete.action = url;
        $('#delete-info').text(kuesioner);
        $('#modal-delete').modal('show');

    }
</script>

<div id="modal-delete" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        {!! Form::open(array('url' => '', 'class' => 'form-horizontal', 'method' => 'delete', 'name' => 'form_delete')) !!}
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin akan menghapus data:</p>
                <b><p id="delete-info"></p></b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
        </div>
        {!! Form::close() !!}
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$subtitle}}</div>
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
                                    <a href="#" onclick="show_modal('{{url('responden/hapus/' . $item->id_responden)}}', '{{$item->nama_responden}}');return false;" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="{{url('responden/edit/' . $item->id_responden)}}" title="Edit Responden"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{url('responden/lihat/' . $item->id_responden)}}" title="Lihat"><i class="glyphicon glyphicon-file"></i></a>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    <div class="pull-right">{!! $responden->render() !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
