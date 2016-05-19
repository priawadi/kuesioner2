@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$subtitle}}</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body">
                    {!! Form::open(array('url' => $action, 'class' => 'form-horizontal', 'method' => $method)) !!}
                    <table class="table table-hover">
                        @foreach ($jenis_alat_tangkap as $id_jenis_alat_tangkap => $item)
                            <tr>
                                <td colspan="4"><b>{{$item}}</b></td>
                            </tr>
                            <tr>
                                <td width="40">a.</td>
                                <td width="200">Nama alat tangkap</td>
                                <td width="200">
                                    {{
                                        Form::select(
                                            'nama_alat_tangkap[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $master_jenis_alat_tangkap, 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['nama_alat_tangkap'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40">b.</td>
                                <td width="40" colspan="3">Ukuran alat tangkap</td>
                            </tr>
                            <tr>
                                <td width="40"></td>
                                <td width="200">panjang</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'ukuran_panjang[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['ukuran_panjang'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'm'
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40"></td>
                                <td width="200">lebar</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'ukuran_lebar[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['ukuran_lebar'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'm'
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40"></td>
                                <td width="200">tinggi</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'ukuran_tinggi[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['ukuran_tinggi'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'm'
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40"></td>
                                <td width="200">ukuran mata jaring</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'ukuran_mata_jaring[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['ukuran_mata_jaring'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40"></td>
                                <td width="200">ukuran mata pancing</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'ukuran_mata_pancing[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['ukuran_mata_pancing'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40">c.</td>
                                <td width="200">Jumlah alat tangkap</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'jumlah[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['jumlah'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'satuan_jumlah[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['satuan_jumlah'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'satuan'
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                             <tr>
                                <td width="40">d.</td>
                                <td width="200">Kondisi waktu beli</td>
                                <td width="200">
                                    @foreach($master_kondisi as $id_kondisi => $value)
                                        <div class="radio">
                                            <label>
                                                {{
                                                    Form::radio(
                                                        'kondisi[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                                        $id_kondisi,
                                                        $alat_tangkap[$id_jenis_alat_tangkap]['kondisi'] == $id_kondisi,
                                                        [
                                                            'class' => 'control-label'
                                                        ]
                                                    )
                                                }} 
                                                {{$value}}
                                            </label>
                                        </div>
                                    @endforeach
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40">e.</td>
                                <td width="200">Tahun pembelian</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'tahun_pembelian[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['tahun_pembelian'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40">f.</td>
                                <td width="200">Harga beli alat tangkap</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'harga_beli[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['harga_beli'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'satuan_harga_beli[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['satuan_harga_beli'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'satuan'
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td width="40">g.</td>
                                <td width="200">Umur teknis alat tangkap</td>
                                <td width="200">
                                    {{
                                        Form::text(
                                            'umur_teknis[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                            $alat_tangkap[$id_jenis_alat_tangkap]['umur_teknis'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td width="40">h.</td>
                                <td width="200">Sumber modal</td>
                                <td width="200">
                                    @foreach($master_sumber_modal as $id_sumber_modal => $value)
                                        <div class="radio">
                                            <label>
                                                {{
                                                    Form::radio(
                                                        'sumber_modal[' . $alat_tangkap[$id_jenis_alat_tangkap]['id_alat_tangkap'] . ']', 
                                                        $id_sumber_modal,
                                                        $alat_tangkap[$id_jenis_alat_tangkap]['sumber_modal'] == $id_sumber_modal,
                                                        [
                                                            'class' => 'control-label'
                                                        ]
                                                    )
                                                }} 
                                                {{$value}}
                                            </label>
                                        </div>
                                    @endforeach
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                    @include('components.form.prev_next_btn')
                    {!! Form::close() !!}
                </div>      
            </div>
        </div>
    </div>
</div>
@endsection
