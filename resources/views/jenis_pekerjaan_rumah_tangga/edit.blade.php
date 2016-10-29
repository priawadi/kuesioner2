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
                    <table class="table">
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama Anggota Rumah Tangga yg Bekerja</th>
                            <th rowspan="2">Status dlm Rumah Tangga</th>
                            <th colspan="2">Pekerjaan 1</th>
                            <th colspan="2">Pekerjaan 2</th>
                            <th colspan="2">Pekerjaan 3</th>
                        </tr>
                        <tr>
                            <th>Jenis Pekerjaan</th>
                            <th>Jumlah Pendapatan (Rp/Tahun)</th>
                            <th>Jenis Pekerjaan</th>
                            <th>Jumlah Pendapatan (Rp/Tahun)</th>
                            <th>Jenis Pekerjaan</th>
                            <th>Jumlah Pendapatan (Rp/Tahun)</th>
                        </tr>
                        @foreach ($pekerjaan_anggota as $index => $item)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>
                                <div class="form-group">
                                    {{  
                                        Form::text(
                                            'nama[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
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
                                        'status_keluarga[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
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
                                        'status_keluarga_lain[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
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
                                        'jenis_pekerjaan1[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
                                        $jenis_pekerjaan, 
                                        $item['jenis_pekerjaan1'], 
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
                                            'pendapatan1[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
                                            $item['pendapatan1'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Rp/Tahun'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                {{
                                    Form::select(
                                        'jenis_pekerjaan2[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
                                        $jenis_pekerjaan, 
                                        $item['jenis_pekerjaan2'], 
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
                                            'pendapatan2[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
                                            $item['pendapatan2'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Rp/Tahun'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                {{
                                    Form::select(
                                        'jenis_pekerjaan3[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
                                        $jenis_pekerjaan, 
                                        $item['jenis_pekerjaan3'], 
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
                                            'pendapatan3[' . $item['id_jenis_pekerjaan_rumahtg'] . ']', 
                                            $item['pendapatan3'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Rp/Tahun'
                                            ]
                                        )
                                    }}
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
});
</script>
@endsection
