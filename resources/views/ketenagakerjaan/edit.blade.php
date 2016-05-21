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
                    {!! Form::open(array('url' => $action, 'class' => 'form-horizontal', 'method' => $method)) !!}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Status Pekerjaan</th>
                                    <th>Hubungan Kekerabatan Tenaga Kerja</th>
                                    <th>Jumlah Tenaga Kerja (org)</th>
                                    <th>Lama waktu per trip (Hari/trip)</th>
                                    <th>Jumlah Trip per bulan</th>
                                    <th>Bagi Hasil (%)</th>
                                    <th>Upah Trip (Rp.)</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($status_pekerjaan as $id => $item)
                                <tr>
                                    <td>{{$item}}</td>
                                    <td>
                                        {{
                                            Form::select(
                                            'status_tenaga_kerja[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja'] . ']', 
                                            $status_tenaga_kerja, 
                                            $curahan_tenaga_kerja[$id]['status_tenaga_kerja'], 
                                                [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Pilih'
                                                ]
                                            )
                                        }}
                                    </td>    
                                    <td>
                                        {{
                                            Form::text(
                                            'jumlah_tenaga_kerja[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja'] . ']', 
                                            $curahan_tenaga_kerja[$id]['jumlah_tenaga_kerja'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Jumlah Tenaga Kerja'
                                                ]
                                            )
                                        }}
                                    </td>    
                                    <td>
                                        {{
                                            Form::text(
                                                'lama_trip[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja'] . ']', 
                                                $curahan_tenaga_kerja[$id]['lama_trip'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Lama Trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'jumlah_trip[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja'] . ']', 
                                                $curahan_tenaga_kerja[$id]['jumlah_trip'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Jumlah Trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'bagi_hasil[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja'] . ']', 
                                                $curahan_tenaga_kerja[$id]['bagi_hasil'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Bagi Hasil'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'upah_trip[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja'] . ']', 
                                                $curahan_tenaga_kerja[$id]['upah_trip'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Upah Trip'
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
