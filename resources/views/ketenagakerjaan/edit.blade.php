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
                                @foreach ($curahan_tenaga_kerja as $id => $value)
                                <tr>
                                    <td>
                                        @if ($value == 7)
                                            {{
                                                Form::text(
                                                'status_pekerjaan_lain[' . $curahan_tenaga_kerja[$id]['id_curahan_tenaga_kerja']['status_pekerjaan_lain'] . ']', 
                                                $curahan_tenaga_kerja[$value]['status_pekerjaan_lain'], 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Jenis Pekerjaan'
                                                    ]
                                                )
                                            }}
                                        @else
                                            {{$value}}
                                        @endif

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
