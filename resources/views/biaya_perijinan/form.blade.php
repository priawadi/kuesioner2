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
                            <thead>
                                <tr>
                                    <th>Jenis</th>
                                    <th>Frekuensi Selama 1 Tahun (Tahun)</th>
                                    <th>Harga Satuan (Rp.)</th>
                                    <th>Total Biaya (Rp./Tahun)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis_perijinan as $key => $item)
                                <tr>
                                    <td>
                                        {{$item}}
                                        @if ($key == 7)
                                            {{  
                                                Form::text(
                                                    'jenis_biaya_perijinan_lain', 
                                                    '', 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Sebutkan'
                                                    ]
                                                )
                                            }}
                                        @endif
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'frek_satuan[' . $key . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Frekuensi Setahun'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'harga_satuan[' . $key . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Harga Satuan'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'total_biaya[' . $key . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Total Biaya'
                                                ]
                                            )
                                        }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @include('components.form.prev_next_btn')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
