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
                        @foreach ($jenis_mesin_penggerak as $id_mesin_penggerak => $mesin_penggerak)
                            <tr>
                                <td colspan="4">
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'mesin_penggerak[jenis]', 
                                                    $id_mesin_penggerak,
                                                    $id_mesin_penggerak == $mesin['jenis'],
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            {{ $mesin_penggerak }}
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            @if ($id_mesin_penggerak > 1)
                                <tr>
                                    <td width="40">a.  </td>
                                    <td width="400">Jenis mesin</td>
                                    <td width="400">
                                        {{
                                            Form::text(
                                                'mesin_penggerak[' . $id_mesin_penggerak . '][merk]', 
                                                $id_mesin_penggerak == $mesin['jenis']? $mesin['merk']: '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'merk',
                                                    'maxlength'   => 255
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td width="40">b.  </td>
                                    <td width="400">Jenis bahan bakar</td>
                                    <td width="400">
                                        @foreach($jenis_bahan_bakar as $id_bahan_bakar => $value)
                                        <div class="radio">
                                            <label>
                                                {{
                                                    Form::radio(
                                                        'mesin_penggerak[' . $id_mesin_penggerak . '][bahan_bakar]', 
                                                        $id_bahan_bakar, 
                                                        $id_mesin_penggerak == $mesin['jenis'] && $mesin['bahan_bakar'] == $id_bahan_bakar,
                                                        [
                                                            'class' => 'control-label'
                                                        ]
                                                    )
                                                }} 
                                                {{ $value }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>c.  </td>
                                    <td>Kekuatan mesin</td>
                                    <td>
                                        {{
                                            Form::text(
                                                'mesin_penggerak[' . $id_mesin_penggerak . '][kekuatan]', 
                                                $id_mesin_penggerak == $mesin['jenis']? $mesin['kekuatan']: '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'PK',
                                                    'maxlength'   => 255
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>d.  </td>
                                    <td>Jumlah mesin</td>
                                    <td>
                                        {{
                                            Form::text(
                                                'mesin_penggerak[' . $id_mesin_penggerak . '][jumlah]', 
                                                $id_mesin_penggerak == $mesin['jenis']? $mesin['jumlah']: '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'unit',
                                                    'maxlength'   => 255
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>e.  </td>
                                    <td>Kondisi waktu beli</td>
                                    <td>
                                        @foreach($kondisi as $id_kondisi => $value)
                                        <div class="radio">
                                            <label>
                                                {{
                                                    Form::radio(
                                                        'mesin_penggerak[' . $id_mesin_penggerak . '][kondisi]', 
                                                        $id_kondisi,
                                                        $id_mesin_penggerak == $mesin['jenis'] && $id_kondisi == $mesin['kondisi'], 
                                                        [
                                                            'class' => 'control-label'
                                                        ]
                                                    )
                                                }} 
                                                {{ $value }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>f.  </td>
                                    <td>Tahun pembelian</td>
                                    <td>
                                        {{
                                            Form::text(
                                                'mesin_penggerak[' . $id_mesin_penggerak . '][tahun_pembelian]', 
                                                $id_mesin_penggerak == $mesin['jenis']? $mesin['tahun_pembelian']: '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => '',
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>g.  </td>
                                    <td>Harga beli mesin</td>
                                    <td>
                                        {{
                                            Form::text(
                                                'mesin_penggerak[' . $id_mesin_penggerak . '][harga_beli]', 
                                                $id_mesin_penggerak == $mesin['jenis']? $mesin['harga_beli']: '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Rp/unit',
                                                    'maxlength'   => 255
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>h.  </td>
                                    <td>Umur teknis mesin</td>
                                    <td>
                                        {{
                                            Form::text(
                                                'mesin_penggerak[' . $id_mesin_penggerak . '][umur_teknis]', 
                                                $id_mesin_penggerak == $mesin['jenis']? $mesin['umur_teknis']: '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'tahun',
                                                    'maxlength'   => 2
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>i.  </td>
                                    <td>Sumber Modal</td>
                                    <td>
                                        @foreach($sumber_modal as $id_sumber_modal => $value)
                                        <div class="radio">
                                            <label>
                                                {{
                                                    Form::radio(
                                                        'mesin_penggerak[' . $id_mesin_penggerak . '][sumber_modal]', 
                                                        $id_sumber_modal,
                                                        $id_mesin_penggerak == $mesin['jenis'] && $id_sumber_modal == $mesin['sumber_modal'],
                                                        [
                                                            'class' => 'control-label'
                                                        ]
                                                    )
                                                }} 
                                                {{ $value }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td></td>
                                </tr>
                            @endif
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
