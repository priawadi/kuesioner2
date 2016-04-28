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
                    <b>Nama Responden : {{$responden->nama_responden}}</b>
                    <br>
                    <br>
                    <b>ENUMERATOR</b>
                    <table class="table table-bordered">
                        <thead> 
                            <tr> 
                                <th>Nama Enumerator</th> 
                                <th>Tanggal Wawancara</th> 
                                <th>Tanggal Editing</th> 
                                <th>Nama Pemvalidasi</th>
                                <th>Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody>
                            <tr>
                                @if (!count($enumerator))
                                    <td colspan="4">Tidak ada data</td>
                                @else
                                    <td>{{$enumerator[0]->nama_enumerator}}</td>
                                    <td>{{$enumerator[0]->tanggal_wawancara->format('d-m-y')}}</td>
                                    <td>{{$enumerator[0]->tanggal_editing->format('d-m-y')}}</td>
                                    <td>{{$enumerator[0]->nama_pemvalidasi}}</td>
                                   
                                @endif
                                <td>
                                    <center>
                                        @if (count($enumerator))
                                            <a class="btn btn-danger btn-sm" href="{{url('enumerator/hapus')}}">Hapus</a>
                                        @else
                                            <a class="btn btn-primary btn-sm" href="{{url('enumerator/tambah')}}">Tambah</a>
                                        @endif
                                    </center>
                                </td>
                            </tr>
                        </tbody> 
                    </table>
                    <b>KARAKTERISTIK RUMAH TANGGA, PENDAPATAN, KESEHATAN, DAN ASET RUMAH TANGGA</b>
                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                                <th width="40px">#</th> 
                                <th>Kuesioner</th> 
                                <th width="100px">Status</th> 
                                <th width="150px">Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach($kuesioner['karakteristik_rt'] as $key => $item)
                            <tr>
                                <td>{{($key + 1)}}</td>
                                <td>{{$item['kuesioner']}}</td>
                                <td>
                                    <center>
                                        <span class="label label-{{$item['is_done']? 'success': 'warning'}}">{{$item['is_done']? 'Sudah': 'Belum'}}</span>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        @if ($item['is_done'])
                                            <a class="btn btn-danger btn-sm" href="{{url($item['link'])}}/hapus/{{$responden['id_responden']}}">Hapus</a>
                                        @else
                                            <a class="btn btn-primary btn-sm" href="{{url($item['link'])}}/tambah">Tambah</a>
                                        @endif
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    <b>USAHA DAN TENAGA KERJA PERIKANAN TANGKAP LAUT</b>
                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                                <th width="40px">#</th> 
                                <th>Kuesioner</th> 
                                <th width="100px">Status</th> 
                                <th width="150px">Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach($kuesioner['usaha_tenaga_kerja'] as $key => $item)
                            <tr>
                                <td>{{($key + 1)}}</td>
                                <td>{{$item['kuesioner']}}</td>
                                <td>
                                    <center>
                                        <span class="label label-{{$item['is_done']? 'success': 'warning'}}">{{$item['is_done']? 'Sudah': 'Belum'}}</span>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        @if ($item['is_done'])
                                            <a class="btn btn-danger btn-sm" href="{{url($item['link'])}}/hapus/{{$responden['id_responden']}}">Hapus</a>
                                        @else
                                            <a class="btn btn-primary btn-sm" href="{{url($item['link'])}}/tambah">Tambah</a>
                                        @endif
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    <b>KONSUMSI</b>
                    <table class="table table-bordered">
                        <thead>
                            <tr> 
                                <th width="40px">#</th> 
                                <th>Kuesioner</th> 
                                <th width="100px">Status</th> 
                                <th width="150px">Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach($kuesioner['konsumsi'] as $key => $item)
                            <tr>
                                <td>{{($key + 1)}}</td>
                                <td>{{$item['kuesioner']}}</td>
                                <td>
                                    <center>
                                        <span class="label label-{{$item['is_done']? 'success': 'warning'}}">{{$item['is_done']? 'Sudah': 'Belum'}}</span>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        @if ($item['is_done'])
                                            <a class="btn btn-danger btn-sm" href="{{url($item['link'])}}/hapus/{{$responden['id_responden']}}">Hapus</a>
                                        @else
                                            <a class="btn btn-primary btn-sm" href="{{url($item['link'])}}/tambah">Tambah</a>
                                        @endif
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>                                                            
                    <b>ASPEK MODAL SOSIAL</b>
                    <table class="table table-bordered">
                        <thead> 
                            <tr> 
                                <th width="40px">#</th> 
                                <th>Kuesioner</th> 
                                <th width="100px">Status</th> 
                                <th width="150px">Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody>
                            @foreach($kuesioner['aspek_modal_sosial'] as $key => $item)
                                <tr>
                                    <td>{{($key + 1)}}</td>
                                    <td>{{$item['kuesioner']}}</td>
                                    <td>
                                    <center>
                                        <span class="label label-{{$item['is_done']? 'success': 'warning'}}">{{$item['is_done']? 'Sudah': 'Belum'}}</span>
                                    </center>
                                    </td>
                                    <td>
                                        <center>
                                            @if ($item['is_done'])
                                                <a class="btn btn-danger btn-sm" href="{{url($item['link'])}}/hapus/{{$responden['id_responden']}}">Hapus</a>
                                            @else
                                                <a class="btn btn-primary btn-sm" href="{{url($item['link'])}}/tambah">Tambah</a>
                                            @endif
                                        </center>
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
