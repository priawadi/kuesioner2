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
                    {{ Form::open(array('url' => $action, 'method' => $method)) }}
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th rowspan="3">No</th>
                                    <th rowspan="3">Jenis</th>
                                    <th rowspan="3">Satuan</th>
                                    <th colspan="3">Jumlah Rata-Rata(satuan/trip)</th>
                                    <th colspan="3">Harga per Satuan (Rp/trip)</th>
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
                                        {{$idx + 1}}.
                                    </td>
                                    <td>
                                        {{$item['biaya_variabel']}}
                                    </td>
                                    <td>
                                        {{$item['satuan']}}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'rataan_musim_puncak[' . $biaya_variabel[$item['id_master_biaya_variabel']]['id_biaya_operasional'] . ']', 
                                                $biaya_variabel[$item['id_master_biaya_variabel']]['rataan_musim_puncak'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'satuan/trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'rataan_musim_sedang[' . $biaya_variabel[$item['id_master_biaya_variabel']]['id_biaya_operasional'] . ']', 
                                                $biaya_variabel[$item['id_master_biaya_variabel']]['rataan_musim_sedang'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'satuan/trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'rataan_musim_paceklik[' . $biaya_variabel[$item['id_master_biaya_variabel']]['id_biaya_operasional'] . ']', 
                                                $biaya_variabel[$item['id_master_biaya_variabel']]['rataan_musim_paceklik'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'satuan/trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'harga_satuan_puncak[' . $biaya_variabel[$item['id_master_biaya_variabel']]['id_biaya_operasional'] . ']', 
                                                $biaya_variabel[$item['id_master_biaya_variabel']]['harga_satuan_puncak'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Rp/trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'harga_satuan_sedang[' . $biaya_variabel[$item['id_master_biaya_variabel']]['id_biaya_operasional'] . ']', 
                                                $biaya_variabel[$item['id_master_biaya_variabel']]['harga_satuan_sedang'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Rp/trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{  
                                            Form::text(
                                                'harga_satuan_paceklik[' . $biaya_variabel[$item['id_master_biaya_variabel']]['id_biaya_operasional'] . ']', 
                                                $biaya_variabel[$item['id_master_biaya_variabel']]['harga_satuan_paceklik'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Rp/trip'
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
