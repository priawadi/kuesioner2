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
                            <td>1301.3.{{$nomor++}}</td>
                            <td>
                                {{$item->pertanyaan_partisipasi}}
                            </td>
                            <td>
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
