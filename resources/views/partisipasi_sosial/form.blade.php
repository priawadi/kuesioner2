@extends('layouts.app')

@section('content')
<div class="container" width="1200px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $subtitle }}</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body">
                    {!! Form::open(array('url' => 'partisipasi-sosial')) !!}
                        @foreach ($pertanyaan as $idx_pertanyaan => $item)
                        {{
                            Form::hidden(
                                'pertanyaan[' . $idx_pertanyaan . ']', 
                                $item->id_partisipasi, 
                                [
                                    'class'       => 'form-control',
                                    'placeholder' => '',
                                    'maxlength'   => 2
                                ]
                            )
                        }}
                        <div class="form-group">
                            {{
                                Form::label(
                                    'pertanyaan', 
                                    $item->pertanyaan_partisipasi
                                )
                            }}
                            @foreach ($opsi[$item->id_master_opsional] as $idx_opsional => $value)
                            <div class="radio">
                                <label>
                                    {{
                                        Form::radio(
                                            'jawaban[' . $idx_pertanyaan . ']', 
                                            $idx_opsional,
                                            false,
                                            [
                                                'class' => 'control-label'
                                            ]
                                        )
                                    }} 
                                    {{$value}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
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
