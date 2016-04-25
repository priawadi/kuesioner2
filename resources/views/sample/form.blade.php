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
                    {!! Form::open(array('url' => 'sample', 'class' => 'form-horizontal')) !!}
                        <div class="form-group">
                            {{
                                Form::label(
                                    'nama', 
                                    'Nama Responden', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                        
                            <div class="col-sm-10">
                                {{
                                    Form::text(
                                        'nama', 
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
                                    'alamat', 
                                    'Alamat', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                            <div class="col-sm-5">
                                {{
                                    Form::textarea(
                                        'alamat', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Alamat'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'aktif', 
                                    'Aktif?', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        {{
                                            Form::checkbox(
                                                'aktif', 
                                                true,
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )
                                        }} 
                                        Ya
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'kategori', 
                                    'Kategori', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                            <div class="col-sm-5">
                                {{
                                    Form::select(
                                        'kategori', 
                                        $kategori, 
                                        null, 
                                        [
                                            'class' => 'form-control',
                                            'placeholder' => 'Pilih'
                                        ]
                                    )
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{
                                Form::label(
                                    'jenis_kelamin', 
                                    'Jenis Kelamin', 
                                    [
                                        'class' => 'col-sm-2 control-label'
                                    ]
                                )
                            }}
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        {{
                                            Form::radio(
                                                'jenis_kelamin', 
                                                'P',
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )
                                        }} 
                                        Pria
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        {{
                                            Form::radio(
                                                'jenis_kelamin', 
                                                'W',
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )
                                        }} 
                                        Wanita
                                    </label>
                                </div>
                            </div>
                        </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Simpan</button>
                        </div>
                      </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
