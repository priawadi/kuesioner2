@extends('layouts.app')

@section('content')
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
                {{ Form::open(array('url' => $action)) }}
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status dlm Rumah Tangga</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Pendidikan Formal</th>
                            <th>Pelatihan yg pernah Diikuti</th>
                            <th>Wkt Pelaksanaan</th>
                            <th>Sumber Dana Pelatihan</th>
                            <th>Tujuan Pelatihan</th>
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
                                        'jenis_kelamin[' . $id . ']', 
                                        $jenis_kelamin, 
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
                                            'umur[' . $id . ']', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Umur (tahun)'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    {{
                                        Form::select(
                                            'pend_formal[' . $id . ']', 
                                            $pend_formal, 
                                            null, 
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
                                        Form::text(
                                            'jenis_pelatihan[' . $id . ']', 
                                            '', 
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
                                            'waktu_pelaksanaan[' . $id . ']', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Wkt Pelaksanaan'
                                            ]
                                        )
                                    }}
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    {{
                                        Form::select(
                                            'sumber_dana[' . $id . ']', 
                                            $sumber_pelatihan, 
                                            null, 
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
                                            'tujuan_pelatihan[' . $id . ']', 
                                            $tujuan_pelatihan, 
                                            null, 
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Pilih'
                                            ]
                                        )
                                    }}
                                    <br>
                                    <div class="form-group">
                                    {{  
                                        Form::text(
                                            'tujuan_pelatihan_lain[' . $id . ']', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Sebutkan'
                                            ]
                                        )
                                    }}
                                </div>
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
@endsection
