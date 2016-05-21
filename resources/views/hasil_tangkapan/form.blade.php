@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

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
                    {!! Form::open(array('url' => $action, 'class' => 'form-horizontal')) !!}
                    <table class="table">
                        <tr>
                            <td width="40">1.</td>
                            <td width="630">Dalam setahun terakhir, pada bulan apa yang saudara tidak melakukan kegiatan penangkapan ikan</td>
                            <td>
                                {{
                                    Form::select(
                                        'bulan_tidak_tangkap[]', 
                                        $master_bulan, 
                                        null, 
                                        [
                                            'class'    => 'form-control',
                                            'multiple' => 'multiple',
                                            'id'       => 'daftar-bulan'
                                        ]
                                    )
                                }} 
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Alasan tidak melaut:
                                {{
                                    Form::textarea(
                                        'alasan_tidak_melaut', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Alasan tidak melaut'
                                        ]
                                    )
                                }}
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Adakah hari-hari tertentu saudara tidak melakukan penangkapan ikan?</td>
                            <td>
                                <div class="radio-inline">
                                    <label>
                                        {{
                                            Form::radio(
                                                'hari_tidak_tangkap', 
                                                1,
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )
                                        }} 
                                        Ya
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label>
                                        {{
                                            Form::radio(
                                                'hari_tidak_tangkap', 
                                                0,
                                                false,
                                                [
                                                    'class' => 'control-label'
                                                ]
                                            )
                                        }} 
                                        Tidak
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                Bila ya, sebutkan pada hari apa saja:
                                {{
                                    Form::select(
                                        'daftar_hari[]', 
                                        $master_hari, 
                                        null, 
                                        [
                                            'class'    => 'form-control',
                                            'multiple' => 'multiple',
                                            'id'       => 'daftar-hari'
                                        ]
                                    )
                                }}
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Dalam 1 bulan, berapa hari tidak melaut?</td>
                            <td>
                                {{
                                    Form::text(
                                        'total_hari_tidak_melaut', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'hari'
                                        ]
                                    )
                                }}
                            </td>
                        </tr>
                        <tr>
                            <td>3. </td>
                            <td>Dalam setahun terakhir, bagaimana hasil tangkapan saudara berdasarkan bulan-bulan sebagaimana tabel berikut:</td>
                            <td></td>
                        </tr>       
                    </table>
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="warning"> 
                                <td rowspan="2"><center>BULAN</center></td> 
                                <td rowspan="2"><center>MUSIM PRODUKSI</center></td> 
                                <td colspan="4"><center>HASIL TANGKAPAN</center></td> 
                                <td rowspan="2"><center>TOTAL TRIP</center></td> 
                            </tr> 
                            <tr> 
                                <td><center>Jenis Ikan Dominan</center></td> 
                                <td><center>Produksi Dalam Sebulan (Kg)</center></td> 
                                <td><center>Harga Ikan (Rp/Kg)</center></td> 
                                <td><center>Nilai Produksi (Rp)</center></td> 
                            </tr>                             
                        </thead> 
                        <tbody> 
                            @foreach ($master_bulan as $id_bulan => $bulan)
                                <tr> 
                                    <td>{{$bulan}}</td> 
                                    <td class="col-xs-2">
                                        {{
                                            Form::select(
                                                'musim_produksi[' . $id_bulan . ']', 
                                                $master_musim, 
                                                null, 
                                                [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Pilih'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td class="col-xs-2">
                                        @for($i = 1; $i <= $jml_isian; $i++)
                                            @if($i != 1)
                                                <br>
                                            @endif
                                            {{$i}}.
                                            {{
                                                Form::select(
                                                    'jenis_ikan_dominan[' . $id_bulan . ']['. $i . ']', 
                                                    $master_jenis_ikan, 
                                                    null, 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Pilih'
                                                    ]
                                                )
                                            }}
                                            <br>
                                            {{
                                                Form::text(
                                                    'jenis_ikan_lain[' . $id_bulan . '][' . $i . ']', 
                                                    '', 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Jenis Ikan Lainnya'
                                                    ]
                                                )
                                            }}
                                            @if($i == 4)
                                                <br>
                                                <p class="form-control-static"><b>Jumlah</b></p>                                            
                                            @endif
                                        @endfor
                                    </td> 
                                    <td>
                                        @for($i = 1; $i <= $jml_isian; $i++)
                                            {{
                                                Form::text(
                                                    'produksi_sebulan[' . $id_bulan . '][' . $i . ']', 
                                                    '', 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Produksi Sebulan'
                                                    ]
                                                )
                                            }}
                                            <div class="form-input-hidden"></div>
                                            @if($i == 4)
                                                <p class="form-control-static">Jumlah</p>
                                            @endif
                                        @endfor
                                    </td>
                                    <td>
                                         @for($i = 1; $i <= $jml_isian; $i++)
                                            {{
                                                Form::text(
                                                    'harga_ikan[' . $id_bulan . '][' . $i . ']', 
                                                    '', 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Harga Ikan'
                                                    ]
                                                )
                                            }}
                                            <div class="form-input-hidden"></div>
                                        @endfor
                                    </td>
                                    <td>
                                         @for($i = 1; $i <= $jml_isian; $i++)
                                            {{
                                                Form::text(
                                                    'nilai_produksi[' . $id_bulan . '][' . $i . ']', 
                                                    '', 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Nilai Produksi'
                                                    ]
                                                )
                                            }}
                                            <div class="form-input-hidden"></div>
                                            @if($i == 4)
                                                <p class="form-control-static">Jumlah</p>
                                            @endif
                                        @endfor
                                    </td>
                                    <td>
                                         
                                            {{
                                                Form::text(
                                                    'total_trip[' . $id_bulan . ']', 
                                                    '', 
                                                    [
                                                        'class'       => 'form-control',
                                                        'placeholder' => 'Total Trip'
                                                    ]
                                                )
                                            }}
                                            <div class="form-input-hidden"></div>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    @include('components.form.prev_next_btn')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#daftar-bulan').multiselect();
        $('#daftar-hari').multiselect();
    });
</script>
<style type="text/css">
    .form-input-hidden 
    {
        display: block;
        width: 100%;
        height: 74px;
        padding: 6px 12px;
        font-size: 14px;
    }
</style>
@endsection
