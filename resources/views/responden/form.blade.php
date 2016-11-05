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
                                        '', 
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
                                        '', 
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
                                        '', 
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
                                        '', 
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
                                        '', 
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
                                        '', 
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
                                        '', 
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
                                        '', 
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
                                        '', 
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
                                                    false,
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
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'tahun'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'lokasi', 
                                    'Lokasi', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                            <div class="col-sm-10">
                                @foreach ($lokasi as $k => $v)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'lokasi', 
                                                    $v,
                                                    false,
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
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="{{ url('responden') }}" class="btn btn-link btn-sm">Batal</a>
                            <button type="submit" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Please wait..." class="btn btn-submit btn-primary btn-sm">Simpan</button>
                        </div>
                      </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
