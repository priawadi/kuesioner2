@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                                    1303.{{ $nomor++ }}
                                @endif
                            </td>
                            <td>
                                {{$item->pertanyaan_nilai_norma}}
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
                        @include('components.form.prev_next_btn')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
