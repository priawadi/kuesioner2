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
                               @foreach ($curahan_tenaga_kerja as $id => $item)
                                <tr>
                                    <td>
                                        {{
                                            Form::select(
                                            'status_tenaga_kerja[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja'] . ']', 
                                            null, 
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
                                            'jumlah_tenaga_kerja[' . $curahan_tenaga_kerja[$id]['id_alat_tangkap'] . ']', 
                                            $curahan_tenaga_kerja[$id]['jumlah_tenaga_kerja'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Jumlah Tenaga Kerja'
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
