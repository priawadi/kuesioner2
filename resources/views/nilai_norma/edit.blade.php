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
                            <td>1303.{{$nomor++}}.</td>
                            <td>
                                {{$item->pertanyaan_nilai_norma}}
                            </td>
                            <td>
                                @foreach ($opsi[$item->id_master_opsional] as $id_opsional => $opsional)
                                <div class="radio">
                                    <label>
                                        {{
                                            Form::radio(
                                                'jawaban[' . $jwb_nilai_norma[$item->id_nilai_norma]['id_jwb_nilai_norma'] . ']',
                                                $id_opsional,
                                                $id_opsional == $jwb_nilai_norma[$item->id_nilai_norma]['id_master_opsional'],
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
