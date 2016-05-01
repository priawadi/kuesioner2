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
                    {{ Form::open(array('url' => $action, 'method' => 'patch')) }}
                        <table class="table">
                        @foreach ($pertanyaan as $idx_pertanyaan => $item)
                        <tr>
                            <td>
                                @if(!$item->parent_partisipasi)
                                    {{ $idx_pertanyaan + 1 }}
                                @endif
                            </td>
                            <td>
                                {{$item->pertanyaan_partisipasi}}
                                @if ($item->is_reason)
                                <br>
                                Alasan:                             
                                {{
                                    Form::textarea(
                                        'alasan[' . $jwb_partisipasi[$item->id_partisipasi]['id_jwb_partisipasi'] . ']', 
                                        $jwb_partisipasi[$item->id_partisipasi]['jwb_teks_partisipasi'], 
                                        [
                                            'class'       => 'form-control col-sm-6',
                                            'placeholder' => 'Alasan',
                                            'rows'  => 4
                                        ]
                                    )
                                }} 
                                @endif
                            </td>
                            <td>
                                @if($item->id_master_opsional)
                                    @foreach ($opsi[$item->id_master_opsional] as $id_opsional => $opsional)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'jawaban[' . $jwb_partisipasi[$item->id_partisipasi]['id_jwb_partisipasi'] . ']', 
                                                    $id_opsional,
                                                    $id_opsional == $jwb_partisipasi[$item->id_partisipasi]['id_master_opsional'],
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            {{$opsional}}
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
