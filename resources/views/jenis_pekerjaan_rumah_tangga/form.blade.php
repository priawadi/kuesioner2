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
                        @for ($id = 1; $id <= $jml_isian; $id++)
                        <tr>
                            <td>{{$id}}</td>
                            <td>
                                <div class="form-group">
                                    {{  
                                        Form::text(
                                            'nama[' . $id . ']', 
                                            '', 
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
                                        'status_keluarga[' . $id . ']', 
                                        $status_keluarga, 
                                        null, 
                                        [
                                            'class' => 'form-control',
                                            'id'    => 'status_kel',
                                            'placeholder' => 'Pilih'
                                        ]
                                    )
                                }}
                                <br>
                                {{  
                                    Form::text(
                                        'status_keluarga_lain[' . $id . ']', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'id'    => 'status_kel_hide',
                                            'style'    => 'display:none',
                                            'placeholder' => 'Sebutkan'
                                        ]
                                    )
                                }}
                            </td>
                            <td>
                                {{
                                    Form::select(
                                        'jenis_pekerjaan1[' . $id . ']', 
                                        $jenis_pekerjaan, 
                                        null, 
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
                                            'pendapatan1[' . $id . ']', 
                                            '', 
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
                                        'jenis_pekerjaan2[' . $id . ']', 
                                        $jenis_pekerjaan, 
                                        null, 
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
                                            'pendapatan2[' . $id . ']', 
                                            '', 
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
                                        'jenis_pekerjaan3[' . $id . ']', 
                                        $jenis_pekerjaan, 
                                        null, 
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
                                            'pendapatan3[' . $id . ']', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Rp/Tahun'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                        </tr>
                        @endfor
                    </table>
                    @include('components.form.prev_next_btn')
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('document').ready(function(){
        $('#stat_kel').on('change',function(){
            if( $(this).val()==="4"){
            $("#stat_kel_hide").show()
            }
            else{
            $("#stat_kel_hide").hide()
            }
        });

        $('#tujuan_pel').on('change',function(){
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
