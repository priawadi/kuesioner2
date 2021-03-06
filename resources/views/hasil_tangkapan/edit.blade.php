@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

@section('content')
<style>
    tr > th {
        vertical-align: middle !important;
        background: white !important;
    }

    tr > td {
        vertical-align: middle !important;
    }
</style>
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
                        <tr>
                            <td width="40">1001.</td>
                            <td width="630">Dalam setahun terakhir, pada bulan apa yang saudara tidak melakukan kegiatan penangkapan ikan</td>
                            <td>
                                {{
                                    Form::select(
                                        'bulan_tidak_tangkap[]', 
                                        $master_bulan, 
                                        $bulan_tidak_tangkap, 
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
                                        $penerimaan_usaha['alasan_tidak_melaut'], 
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
                            <td>1002.</td>
                            <td>Adakah hari-hari tertentu saudara tidak melakukan penangkapan ikan?</td>
                            <td>
                                <div class="radio-inline">
                                    <label>
                                        {{
                                            Form::radio(
                                                'hari_tidak_tangkap', 
                                                1,
                                                1 == $penerimaan_usaha['hari_tidak_tangkap'],
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
                                                2,
                                                2 == $penerimaan_usaha['hari_tidak_tangkap'],
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
                                        $daftar_hari, 
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
                                        $penerimaan_usaha['total_hari_tidak_melaut'], 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'hari'
                                        ]
                                    )
                                }}
                            </td>
                        </tr>
                        <tr>
                            <td>1003. </td>
                            <td>Dalam setahun terakhir, bagaimana hasil tangkapan saudara berdasarkan bulan-bulan sebagaimana tabel berikut:</td>
                            <td></td>
                        </tr>       
                    </table>
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="warning"> 
                                <th rowspan="2"><center>BULAN</center></th> 
                                <th rowspan="2"><center>MUSIM PRODUKSI</center></th> 
                                <th rowspan="2"><center>JENIS ALAT TANGKAP</center></th> 
                                <th colspan="4"><center>HASIL TANGKAPAN</center></th> 
                                <th rowspan="2"><center>TOTAL TRIP</center></th> 
                            </tr> 
                            <tr> 
                                <th><center>Jenis Ikan Dominan</center></th> 
                                <th><center>Produksi Dalam Sebulan (Kg)</center></th> 
                                <th><center>Harga Ikan (Rp/Kg)</center></th> 
                                <th><center>Nilai Produksi (Rp)</center></th> 
                            </tr>                             
                        </thead> 
                        <tbody> 
                            @foreach ($master_bulan as $id_bulan => $bulan)
                                <tr> 
                                    <td rowspan="5">{{$bulan}}</td> 
                                    <td class="col-xs-2" rowspan="5">
                                        {{
                                            Form::select(
                                                'musim_produksi[' . $hasil_tangkapan[$id_bulan]['id_hasil_tangkapan'] . ']', 
                                                $master_musim, 
                                                $hasil_tangkapan[$id_bulan]['id_musim'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Pilih'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::select(
                                                'jenis_alat_tangkap[' . $detil_hasil_tangkapan[$id_bulan][1]['id_detil_hasil_tangkapan'] . ']', 
                                                $master_jenis_alat_tangkap, 
                                                $detil_hasil_tangkapan[$id_bulan][1]['id_jenis_alat_tangkap'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Pilih'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <!-- <td width="40">1.</td> -->
                                    <td>
                                        {{
                                            Form::select(
                                                'jenis_ikan_dominan[' . $detil_hasil_tangkapan[$id_bulan][1]['id_detil_hasil_tangkapan'] . ']', 
                                                $master_jenis_ikan, 
                                                $detil_hasil_tangkapan[$id_bulan][1]['id_jenis_ikan'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Pilih'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'produksi_sebulan[' . $detil_hasil_tangkapan[$id_bulan][1]['id_detil_hasil_tangkapan'] . ']', 
                                                $detil_hasil_tangkapan[$id_bulan][1]['produksi_sebulan'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Produksi Sebulan'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'harga_ikan[' . $detil_hasil_tangkapan[$id_bulan][1]['id_detil_hasil_tangkapan'] . ']', 
                                                $detil_hasil_tangkapan[$id_bulan][1]['harga_ikan'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Harga Ikan'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'nilai_produksi[' . $detil_hasil_tangkapan[$id_bulan][1]['id_detil_hasil_tangkapan'] . ']', 
                                                $detil_hasil_tangkapan[$id_bulan][1]['nilai_produksi'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Nilai Produksi'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td rowspan="5">
                                        {{
                                            Form::text(
                                                'total_trip[' . $hasil_tangkapan[$id_bulan]['id_hasil_tangkapan'] . ']', 
                                                $hasil_tangkapan[$id_bulan]['total_trip'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Total Trip'
                                                ]
                                            )
                                        }}
                                    </td>
                                </tr>
                                @for($i = 2; $i <= $jml_isian; $i++)
                                <tr>
                                    <!-- <td>{{$i}}.</td> -->
                                    <?php if ($i == 5): ?>
                                    <td>
                                        {{
                                            Form::text(
                                                'jenis_alat_tangkap_lain[' . $detil_hasil_tangkapan[$id_bulan][$i]['id_detil_hasil_tangkapan'] . ']',
                                                $detil_hasil_tangkapan[$id_bulan][$i]['id_jenis_alat_tangkap_lain'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Lainnya'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <?php else: ?>
                                    <td>
                                        {{
                                            Form::select(
                                                'jenis_alat_tangkap[' . $detil_hasil_tangkapan[$id_bulan][$i]['id_detil_hasil_tangkapan'] . ']', 
                                                $master_jenis_alat_tangkap, 
                                                $detil_hasil_tangkapan[$id_bulan][$i]['id_jenis_alat_tangkap'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Pilih'
                                                ]
                                            )
                                        }}
                                    </td>   
                                    <?php endif ?>
                                    <td class="col-xs-2">
                                        {{
                                            Form::select(
                                                'jenis_ikan_dominan[' . $detil_hasil_tangkapan[$id_bulan][$i]['id_detil_hasil_tangkapan'] . ']',
                                                $master_jenis_ikan, 
                                                $detil_hasil_tangkapan[$id_bulan][$i]['id_jenis_ikan'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Pilih'
                                                ]
                                            )
                                        }}
                                    </td> 
                                    <td>
                                        {{
                                            Form::text(
                                                'produksi_sebulan[' . $detil_hasil_tangkapan[$id_bulan][$i]['id_detil_hasil_tangkapan'] . ']',
                                                $detil_hasil_tangkapan[$id_bulan][$i]['produksi_sebulan'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Produksi Sebulan'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'harga_ikan[' . $detil_hasil_tangkapan[$id_bulan][$i]['id_detil_hasil_tangkapan'] . ']',
                                                $detil_hasil_tangkapan[$id_bulan][$i]['harga_ikan'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Harga Ikan'
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td>
                                        {{
                                            Form::text(
                                                'nilai_produksi[' . $detil_hasil_tangkapan[$id_bulan][$i]['id_detil_hasil_tangkapan'] . ']',
                                                $detil_hasil_tangkapan[$id_bulan][$i]['nilai_produksi'], 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Nilai Produksi'
                                                ]
                                            )
                                        }}
                                    </td>
                                </tr>
                                @endfor
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
