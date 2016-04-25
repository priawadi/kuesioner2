@extends('layouts.app')

@section('content')
<div class="container" width="1200px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Responden</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body">
                    <b>Nama Responden : {{$responden->nama_responden}}</b>
                    <br>
                    <br>
                    <b>ASPEK MODAL SOSIAL</b>
                    <table class="table table-bordered">
                        <thead> 
                            <tr> 
                                <th>#</th> 
                                <th>Kuesioner</th> 
                                <th>Status</th> 
                                <th>Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody>
                            @foreach($kuesioner['aspek_modal_sosial'] as $key => $item)
                                <tr>
                                    <td>{{($key + 1)}}</td>
                                    <td>{{$item['kuesioner']}}</td>
                                    <td><span class="label label-{{$item['is_done']? 'success': 'warning'}}">{{$item['is_done']? 'Sudah': 'Belum'}}</span></td>
                                    <td><a href="{{url($item['link'])}}/{{($item['is_done']? 'destroy': 'create')}}">{{($item['is_done']? 'Hapus': 'Tambah')}}</a></td>
                                </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    <b>KARAKTERISTIK RUMAH TANGGA, PENDAPATAN, KESEHATAN, DAN ASET RUMAH TANGGA</b>
                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                                <th>#</th> 
                                <th>Kuesioner</th> 
                                <th>Status</th> 
                                <th>Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach($kuesioner['karakteristik_rt'] as $key => $item)
                                <tr>
                                    <td>{{($key + 1)}}</td>
                                    <td>{{$item['kuesioner']}}</td>
                                    <td><span class="label label-{{$item['is_done']? 'success': 'warning'}}">{{$item['is_done']? 'Sudah': 'Belum'}}</span></td>
                                    <td><a href="{{url($item['link'])}}/{{($item['is_done']? 'destroy': 'create')}}">{{($item['is_done']? 'Hapus': 'Tambah')}}</a></td>
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
