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
                    {{ Form::open(array('url' => $action)) }}
                        <table class="table">
                        @foreach ($pertanyaan as $idx_pertanyaan => $item)
                        <tr>
                            <td>
                                @if(!$item->parent_nilai_norma)
                                    {{ $nomor++ }}
                                @endif
                            </td>
                            <td>
                                {{$item->pertanyaan_nilai_norma}}
                                @if ($item->is_reason)
                                <br>
                                Alasan:                             
                                {{
                                    Form::textarea(
                                        'alasan[' . $item->id_nilai_norma . ']', 
                                        '', 
                                        [
                                            'class'       => 'form-control col-sm-6',
                                            'placeholder' => 'Alasan',
                                            'rows'  => 4
                                        ]
                                    )
                                }} 
                                @endif
                            </td>
                            <td width="200px">
                                @if($item->id_master_opsional)
                                    @foreach ($opsi[$item->id_master_opsional] as $idx_opsional => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'jawaban[' . $item->id_nilai_norma . ']', 
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
                                
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </table>
                        <a href="#" class="btn btn-primary pull-left">Kembali</a>
                        <button type="submit" class="btn btn-primary pull-right">Selanjutnya</button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
