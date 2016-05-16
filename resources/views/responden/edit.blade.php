@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

@section('content')
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
                    {!! Form::open(array('url' => $action, 'class' => 'form-horizontal', 'method' => $method)) !!}
                        <div class="form-group">
                            {{
                                Form::label(
                                    'id_id', 
                                    'ID', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-2">
                                {{
                                    Form::text(
                                        'id_id', 
                                        $responden['id_id'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'ID',
                                            'maxlength'   => 8

                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'nama_responden', 
                                    'Nama Responden', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'nama_responden', 
                                        $responden['nama_responden'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Nama Responden'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'suku', 
                                    'Etnis / Suku', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'suku', 
                                        $responden['suku'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Etnis / Suku'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'kampung', 
                                    'RT / Kampung', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'kampung', 
                                        $responden['kampung'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'RT / Kampung'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'dusun', 
                                    'RW / Dusun', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'dusun', 
                                        $responden['dusun'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'RW / Dusun'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'kelurahan', 
                                    'Desa / Kelurahan', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'kelurahan', 
                                        $responden['kelurahan'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Desa / Kelurahan'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'kecamatan', 
                                    'Kecamatan', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'kecamatan', 
                                        $responden['kecamatan'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Kecamatan'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'kabupaten', 
                                    'Kabupaten', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'kabupaten', 
                                        $responden['kabupaten'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Kabupaten'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'provinsi', 
                                    'Provinsi', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'provinsi', 
                                        $responden['provinsi'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Provinsi'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'stat_responden', 
                                    'Status Responden', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                            <div class="col-sm-10">
                                @foreach ($status as $k => $v)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'stat_responden', 
                                                    $k,
                                                    $k == $responden['stat_responden'],
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            {{ $v }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'pengalaman_usaha', 
                                    'Pengalaman Usaha', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-6">
                                {{
                                    Form::text(
                                        'pengalaman_usaha', 
                                        $responden['pengalaman_usaha'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'tahun'
                                        ]
                                    )
                                }}
                            </div>
                        </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ url('responden') }}" class="btn btn-link btn-sm">Batal</a>
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                      </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
