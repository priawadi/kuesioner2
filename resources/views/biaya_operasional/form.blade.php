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
                    <style type="text/css">
                        table > thead > tr > th
                        {
                            text-align: center;
                            vertical-align: middle;
                        }
                    </style>
                    {{ Form::open(array('url' => $action)) }}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th rowspan="3">Jenis</th>
                                    <th rowspan="3">Satuan</th>
                                    <th colspan="3">Jumlah Rata-Rata Berdasarkan Musim (Jumlah/Satuan/Trip Berdasarkan Musim)</th>
                                    <th rowspan="3">Harga/Satuan (Rp.)</th>
                                    <th colspan="3">Total Nilai (Rp/Trip)</th>
                                </tr>
                                <tr>
                                    <th colspan="3">Musim</th>
                                    <th colspan="3">Musim</th>
                                </tr>
                                <tr>
                                    <th>Puncak</th>
                                    <th>Sedang</th>
                                    <th>Paceklik</th>
                                    <th>Puncak</th>
                                    <th>Sedang</th>
                                    <th>Paceklik</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis_operasional as $idx => $item)
                                <tr>
                                    <td>
                                        {{$item['biaya_variabel']}}
                                        @if ($item['satuan'] == '')
                                            {{  
                                                Form::text(
                                                    'jenis_biaya_lain[' . $item['id_master_biaya_variabel'] . ']', 
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
                                        @if ($item['satuan'])
                                            {{  
                                                Form::hidden(
                                                    'satuan[' . $item['id_master_biaya_variabel'] . ']', 
                                                    $item['satuan'], 
                                                    []
                                                )
                                            }}

                                            {{$item['satuan']}}
                                        @else
                                            {{  
                                                Form::text(
                                                    'satuan[' . $item['id_master_biaya_variabel'] . ']', 
                                                    '', 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Satuan'
                                                    ]
                                                )
                                            }}
                                        @endif
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'rataan_musim_puncak[' . $item['id_master_biaya_variabel'] . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Rataan puncak'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'rataan_musim_sedang[' . $item['id_master_biaya_variabel'] . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Rataan sedang'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'rataan_musim_paceklik[' . $item['id_master_biaya_variabel'] . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Rataan paceklik'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'harga[' . $item['id_master_biaya_variabel'] . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Harga satuan'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'total_puncak[' . $item['id_master_biaya_variabel'] . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Total puncak'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'total_sedang[' . $item['id_master_biaya_variabel'] . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Total sedang'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'total_paceklik[' . $item['id_master_biaya_variabel'] . ']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Total paceklik'
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
