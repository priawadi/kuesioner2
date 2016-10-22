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
                    @permission('kuesioner-delete')
                        Hapus
                    @endpermission
                    <a href="{{url('responden/tambah')}}" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    <br><br>
                    <table class="table table-bordered" id="responden-table">
                        <thead> 
                            <tr> 
                                <!-- <th>#</th>  -->
                                <th>Nama Responden</th> 
                                <th>Suku</th> 
                                <th>Kampung</th> 
                                <th>Dusun</th>
                                <th>Lokasi</th> 
                                <th>Aksi</th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach ($responden as $index => $item)
                            <tr> 
<!--                                 <th scope="row">{{ $index + 1 }}</th> 
                                <td>{{$item->nama_responden}}</td> 
                                <td>{{$item->suku}}</td> 
                                <td>{{$item->kampung}}</td> 
                                <td>{{$item->dusun}}</td> 
                                <td>
                                    <?php
                                    if ($item->lokasi == 1) {
                                        echo "Batam";
                                    } elseif ($item->lokasi == 2) {
                                        echo "Sibolga";
                                    } elseif ($item->lokasi == 3) {
                                        echo "Langkat";
                                    } elseif ($item->lokasi == 4) {
                                        echo "Indramayu";
                                    } elseif ($item->lokasi == 5) {
                                        echo "Pangkajene Kepulauan";
                                    } elseif ($item->lokasi == 6) {
                                        echo "Bitung";
                                    } elseif ($item->lokasi == 7) {
                                        echo "Sorong";
                                    } elseif ($item->lokasi == 8) {
                                        echo "Merauke";
                                    } elseif ($item->lokasi == 9) {
                                        echo "Maluku Tengah";
                                    } elseif ($item->lokasi == 10) {
                                        echo "Cilacap";
                                    } else {
                                        echo "";
                                    }
                                    ?>
                                </td>
                                
                                <td>
                                    <a href="#" onclick="show_modal('{{url('responden/hapus/' . $item->id_responden)}}', '{{$item->nama_responden}}');return false;" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="{{url('responden/edit/' . $item->id_responden)}}" title="Edit Responden"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{url('responden/lihat/' . $item->id_responden)}}" title="Lihat"><i class="glyphicon glyphicon-file"></i></a>
                                </td>  -->
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    <!-- <div class="pull-right">{!! $responden->render() !!}</div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $.fn.dataTable.ext.errMode = 'throw';
    $('#responden-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            // { data: null, searchable: false, orderable: false, targets: 0 },
            { data: 'nama_responden', name: 'nama_responden' },
            { data: 'suku', name: 'suku' },
            { data: 'kampung', name: 'kampung' },
            { data: 'dusun', name: 'dusun' },
            { data: 'lokasi_responden', name: 'lokasi_responden' },
/*            { targets : [4],
                render : function(data, type, row) {
                    switch(row.lokasi) {
                        case '1' : return 'Batam'; break;
                        case '2' : return 'Sibolga'; break;
                        case '3' : return 'Langkat'; break;
                        case '4' : return 'Indramayu'; break;
                        case '5' : return 'Pangkajene Kepulauan'; break;
                        case '6' : return 'Bitung'; break;
                        case '7' : return 'Sorong'; break;
                        case '8' : return 'Merauke'; break;
                        case '9' : return 'Maluku Tengah'; break;
                        case '10' : return 'Cilacap'; break;
                        default : return 'N/A';
                    }
                }
             },*/
            { targets : [5], 
             render: function(data, type, full) {
                var btn = '';
                @permission('kuesioner-delete')
                btn += '<a class="btn btn-danger btn-sm" onclick="show_modal(\'responden/hapus/'+ full.id_responden +'\',\''+ full.nama_responden +'\')">' + 'Hapus' + '</a>';
                @endpermission
                @permission('kuesioner-edit')
                btn += ' <a class="btn btn-info btn-sm" href=responden/edit/' + full.id_responden + '>' + 'Edit' + '</a>';
                @endpermission
                @permission('kuesioner-edit')
                btn += ' <a class="btn btn-primary btn-sm" href=responden/lihat/' + full.id_responden + '>' + 'Isi Kuesioner' + '</a>';
                @endpermission
                return btn;
            }}
        ],
        // order: [[1, 'asc']],
    });
    // t.on( 'order.dt search.dt', function () {
    //     t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
    //         cell.innerHTML = i+1;
    //     } );
    // } ).draw();    
});
</script>
@endsection
