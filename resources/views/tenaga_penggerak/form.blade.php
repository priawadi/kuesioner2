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
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Tenaga Penggerak / Mesin</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Merk</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Ukuran</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Status Kepemilikan</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Jenis Bahan Bakar yg Digunakan</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Tahun Pembelian</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Kondisi</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Harga Beli (Rp)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Umur Ekonomis (tahun)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>Sumber Modal</center></th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach($mesin as $id_mesin => $mesin)               
                                <tr>
                                    <td>{{$mesin}}</td> 
                                    <td class="col-xs-2">      
                                    {{
                                        Form::select(
                                            'merek_mesin['. $id_mesin .']', 
                                            
                                                $merek_mesin
                                            , 
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
                                                'ukuran_mesin['. $id_mesin .']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => ''
                                                ]
                                            )
                                        }}
                                    </td> 
                                    <td class="col-xs-2">
                                    {{
                                        Form::select(
                                            'status_kepemilikan_mesin['. $id_mesin .']', 
                                            
                                                $status_kepemilikan
                                            , 
                                            null, 
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Pilih'
                                            ]
                                        )
                                    }}
                                    </td> 
                                    <td class="col-xs-2">
                                    {{
                                        Form::select(
                                            'jenis_bbm_mesin['. $id_mesin .']', 
                                            
                                                $jenis_bbm_mesin
                                            , 
                                            null, 
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Pilih'
                                            ]
                                        )
                                    }}
                                    </td> 
                                    <td class="col-xs-3">
                                        {{
                                            Form::text(
                                                'tahun_pembelian_mesin['. $id_mesin .']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => ''
                                                ]
                                            )
                                        }}
                                    </td> 
                                    <td class="col-xs-2">
                                    {{
                                        Form::select(
                                            'kondisi_mesin['. $id_mesin .']', 
                                            
                                                $kondisi
                                            , 
                                            null, 
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Pilih'
                                            ]
                                        )
                                    }}
                                    </td> 
                                    <td class="col-xs-3">
                                        {{
                                            Form::text(
                                                'harga_beli_mesin['. $id_mesin .']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => ''
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td class="col-xs-3">
                                        {{
                                            Form::text(
                                                'umur_ekonomis_mesin['. $id_mesin .']', 
                                                '', 
                                                [
                                                    'class'       => 'form-control',
                                                    'placeholder' => ''
                                                ]
                                            )
                                        }}
                                    </td>
                                    <td class="col-xs-3">
                                    {{
                                        Form::select(
                                            'sumber_modal_mesin['. $id_mesin .']', 
                                            
                                                $sumber_modal
                                                                                        , 
                                            null, 
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Pilih'
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
