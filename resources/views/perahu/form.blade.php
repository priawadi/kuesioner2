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
                            <tr class="info"> 
                                <td colspan="10"><center><b>Perahu</b></center></td> 
                            </tr>                          
                            <tr>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>URUTAN ARMADA YANG DIMILIKI</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JENIS ARMADA</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>UKURAN TONASE (GT)</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>STATUS KEPEMILIKAN</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>TAHUN PEMBELIAN</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>KONDISI</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>HARGA BELI (Rp)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>UMUR EKONOMIS (Tahun)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>SUMBER MODAL</center></th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach($armada_dimiliki as $key => $perahu)               
                            <tr>
                                <td>{{$perahu}}</td> 
                                <td class="col-xs-2">      
                                {{
                                    Form::select(
                                        'jenis_armada['. $key .']', 
                                        
                                            $jenis_armada
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
                                            'ukuran_tonase['. $key .']', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }} 
                                </td> 
                                <td class="col-xs-1">
                                {{
                                    Form::select(
                                        'status_kepemilikan['. $key .']', 
                                        
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
                                <td>
                                    {{
                                        Form::text(
                                            'tahun_pembelian['. $key .']', 
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
                                        'kondisi['. $key .']', 
                                        
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
                                            'harga_beli['. $key .']', 
                                            '', 
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
                                            'umur_ekonomis['. $key .']', 
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
                                        'sumber_modal['. $key .']', 
                                        
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
                            <tr> 
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
