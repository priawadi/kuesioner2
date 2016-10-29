@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

@section('content')
<style>
    tr > th {
        text-align: center !important;
        vertical-align: middle !important;
    }
</style>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $subtitle }}</div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <div class="panel-body">
                {{ Form::open(array('url' => $action, 'method' => $method)) }}
                    <table class="table table-hover">
                        <tr>
                            <th rowspan="3">No</th>
                            <th rowspan="3">Nama</th>
                            <th rowspan="3">Status dlm Rumah Tangga</th>
                            <th rowspan="3">Jenis Kelamin</th>
                            <th rowspan="3">Umur</th>
                            <th colspan="5">Tingkat Pendidikan</th>
                        </tr>
                        <tr>
                            <th>Formal</th>
                            <th colspan="4">Non Formal</th>
                        </tr>
                        <tr>
                            <th>Lama Pendidikan</th>
                            <th>Jenis Pelatihan Terkait Sektor Kelautan dan Perikanan yg Pernah Diikuti</th>
                            <th>Waktu Pelaksanaan Pelatihan (hari)</th>
                            <th>Sumber Mengikuti Pelatihan</th>
                            <th>Tujuan Mengikuti</th>
                        </tr>
                        @foreach ($karakteristik_rt as $index => $item)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>
                                <div class="form-group">
                                    {{  
                                        Form::text(
                                            'nama[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $item['nama'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Nama anggota keluarga'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                {{
                                    Form::select(
                                        'status_keluarga[' . $item['id_kar_rumah_tangga'] . ']', 
                                        $status_keluarga, 
                                        $item['status_keluarga'], 
                                        [
                                            'class' => 'form-control',
                                            'id'    => 'stat_kel',
                                            'placeholder' => 'Pilih'
                                        ]
                                    )
                                }}
                                <br>
                                {{  
                                        Form::text(
                                            'status_keluarga_lain[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $item['status_keluarga_lain'], 
                                            [
                                                'class'       => 'form-control',
                                                'style'       => 'display:none;',
                                                'id'          => 'stat_kel_hide',
                                                'placeholder' => 'Sebutkan'
                                            ]
                                        )
                                    }}
                            </td>
                            <td>
                                {{
                                    Form::select(
                                        'jenis_kelamin[' . $item['id_kar_rumah_tangga'] . ']', 
                                        $jenis_kelamin, 
                                        $item['jenis_kelamin'], 
                                        [
                                            'class' => 'form-control',
                                            'placeholder' => 'Pilih'
                                        ]
                                    )
                                }}
                            </td>
                            <td>
                                <div class="form-group">
                                    {{  
                                        Form::text(
                                            'umur[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $item['umur'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'tahun'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    {{  
                                        Form::text(
                                            'lama_pendidikan_formal[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $item['lama_pendidikan_formal'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'tahun'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    {{  
                                        Form::text(
                                            'jenis_pelatihan[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $item['jenis_pelatihan'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Pelatihan'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    {{  
                                        Form::text(
                                            'waktu_pelaksanaan[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $item['waktu_pelaksanaan'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'hari'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    {{
                                        Form::select(
                                            'sumber_dana[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $sumber_pelatihan, 
                                            $item['sumber_dana'], 
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Pilih'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    {{
                                        Form::select(
                                            'tujuan_pelatihan[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $tujuan_pelatihan, 
                                            $item['tujuan_pelatihan'], 
                                            [
                                                'class' => 'form-control',
                                                'id'    => 'tujuan_pel',
                                                'placeholder' => 'Pilih'
                                            ]
                                        )
                                    }}
                                    <br>
                                    <div class="form-group">
                                    {{  
                                        Form::text(
                                            'tujuan_pelatihan_lain[' . $item['id_kar_rumah_tangga'] . ']', 
                                            $item['tujuan_pelatihan_lain'], 
                                            [
                                                'class'       => 'form-control',
                                                'id'    => 'tujuan_pel_hide',
                                                'style'    => 'display:none',
                                                'placeholder' => 'Sebutkan'
                                            ]
                                        )
                                    }}
                                </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @include('components.form.prev_next_btn')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('document').ready(function(){
    var e = document.getElementById("stat_kel");
    var strUser = e.options[e.selectedIndex].value;
    if(strUser==="4"){
        $("#stat_kel_hide").show()
    }
    $('#stat_kel').on('click',function(){
        if( $(this).val()==="4"){
        $("#stat_kel_hide").show()
        }
        else{
        $("#stat_kel_hide").hide()
        }
    });

    var e = document.getElementById("tujuan_pel");
    var strUser = e.options[e.selectedIndex].value;
    if(strUser==="3"){
        $("#tujuan_pel_hide").show()
    }
    $('#tujuan_pel').on('click',function(){
        if( $(this).val()==="3"){
        $("#tujuan_pel_hide").show()
        }
        else{
        $("#tujuan_pel_hide").hide()
        }
    }); 

});
</script>
@endsection
