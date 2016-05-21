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
                                @foreach ($status_pekerjaan as $id => $value)
                                <tr>
                                    <td>
                                            {{$value}}
                                    </td>
                                    <td>
                                        {{
                                            Form::select(
                                                'status_tenaga_kerja[' . $id . ']', 
                                                $status_tenaga_kerja, 
                                                null, 
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
                                                'jumlah_tenaga_kerja[' . $id . ']', 
                                                '', 
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
                                                'lama_trip[' . $id . ']', 
                                                '', 
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
                                                'jumlah_trip[' . $id . ']', 
                                                '', 
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
                                                'bagi_hasil[' . $id . ']', 
                                                '', 
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
                                                'upah_trip[' . $id . ']', 
                                                '', 
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
