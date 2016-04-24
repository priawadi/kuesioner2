@extends('layouts.app')

@section('content')
<div class="container" width="1200px">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $subtitle }}</div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <div class="panel-body">
                {{ Form::open(array('url' => $action)) }}
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status dlm Rumah Tangga</th>
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
                                            'placeholder' => 'Status keluarga lain'
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
                                <br>
                                {{  
                                    Form::text(
                                        'jenis_pekerjaan_lain1[' . $id . ']', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Sebutkan'
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
                                                'placeholder' => 'Jumlah Pendapatan (Rp/Tahun)'
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
                                <br>
                                {{  
                                    Form::text(
                                        'jenis_pekerjaan_lain2[' . $id . ']', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Sebutkan'
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
                                                'placeholder' => 'Jumlah Pendapatan (Rp/Tahun)'
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
                                <br>
                                {{  
                                    Form::text(
                                        'jenis_pekerjaan_lain3[' . $id . ']', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Sebutkan'
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
                                                'placeholder' => 'Jumlah Pendapatan (Rp/Tahun)'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                        </tr>
                        @endfor
                    </table>
                    <a href="#" class="btn btn-primary pull-left">Kembali</a>
                    <button type="submit" class="btn btn-primary pull-right">Selanjutnya</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection
