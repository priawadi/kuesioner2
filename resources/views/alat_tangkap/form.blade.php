@extends('layouts.app')

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
                    {!! Form::open(array('url' => $action, 'class' => 'form-horizontal')) !!}
                    <table class="table table-hover"> 
                        <thead>                        
                            <tr>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Jenis Alat Tangkap (Gambarkan)</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Jumlah (Unit)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Waktu Penggunaan (bulan)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Status Kepemilikan</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Spesifikasi <br>Panjang (m), tinggi (m), Mesh Size (inchi)/Mata Pancing</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Kondisi Waktu Membeli</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Harga Beli (Rp)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Umur Ekonomis (tahun)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Sumber Modal</center></th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            <tr>
                                <td><b>PLAGIS KECIL</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                            @foreach ($plagis_kecil as $index => $item)
                            <tr>
                                <td>
                                    {{$item->id_master_jenis_alat_tangkap}}. {{$item->jenis_alat_tangkap}}
                                    @if ($item->is_freetext)
                                        {{
                                            Form::text(
                                                'jenis_alat_tangkap_lain[' . $item->id_master_jenis_alat_tangkap . ']', 
                                                null, 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Sebutkan'
                                                ]
                                            )
                                        }}
                                    @endif
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'jumlah_alat_tangkap[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Jumlah Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'waktu_penggunaan_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Waktu Penggunaan Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'status_kepemilikan_alat[' .  $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_status_kepemilikan, 
                                            null, 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'spesifikasi_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Spesifikasi Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'kondisi_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_kondisi, 
                                            null, 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'harga_beli_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Harga Beli'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'umur_ekonomis_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Umur Ekonomis'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'sumber_modal_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_sumber_modal, 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td><b>PLAGIS BESAR</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                            @foreach ($plagis_besar as $index => $item)
                            <tr>
                                <td>
                                    {{$item->id_master_jenis_alat_tangkap}}. {{$item->jenis_alat_tangkap}}
                                    @if ($item->is_freetext)
                                        {{
                                            Form::text(
                                                'jenis_alat_tangkap_lain[' . $item->id_master_jenis_alat_tangkap . ']', 
                                                null, 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Sebutkan'
                                                ]
                                            )
                                        }}
                                    @endif
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'jumlah_alat_tangkap[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Jumlah Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'waktu_penggunaan_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Waktu Penggunaan Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'status_kepemilikan_alat[' .  $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_status_kepemilikan, 
                                            null, 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'spesifikasi_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Spesifikasi Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'kondisi_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_kondisi, 
                                            null, 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'harga_beli_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Harga Beli'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'umur_ekonomis_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Umur Ekonomis'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'sumber_modal_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_sumber_modal, 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td><b>DEMERSAL / CRUSTACEA</b></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                            @foreach ($demersal as $index => $item)
                            <tr>
                                <td>
                                    {{$item->id_master_jenis_alat_tangkap}}. {{$item->jenis_alat_tangkap}}
                                    @if ($item->is_freetext)
                                        {{
                                            Form::text(
                                                'jenis_alat_tangkap_lain[' . $item->id_master_jenis_alat_tangkap . ']', 
                                                null, 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => 'Sebutkan'
                                                ]
                                            )
                                        }}
                                    @endif
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'jumlah_alat_tangkap[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Jumlah Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'waktu_penggunaan_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Waktu Penggunaan Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'status_kepemilikan_alat[' .  $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_status_kepemilikan, 
                                            null, 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'spesifikasi_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Spesifikasi Alat'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'kondisi_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_kondisi, 
                                            null, 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'harga_beli_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Harga Beli'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'umur_ekonomis_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Umur Ekonomis'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::select(
                                            'sumber_modal_alat[' . $item->id_master_jenis_alat_tangkap . ']', 
                                            $master_sumber_modal, 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Pilih',
                                            ]
                                        )
                                    }}
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
@endsection
