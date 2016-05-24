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
                        <thead>                        
                            <tr>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>PERALATAN TAMBAHAN <br>(yang digunakan dalam melaut / di perahu)</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>STATUS KEPEMILIKAN</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JUMLAH (Unit)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>KONDISI</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>UMUR EKONOMIS (Tahun)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>HARGA BELI (Rp)</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>SUMBER MODAL</center></th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            @foreach ($master_peralatan_tambahan as $id_peralatan_tambahan => $peralatan_tambahan)
                            <tr>
                                <td>
                                    {{$id_peralatan_tambahan}}. {{$peralatan_tambahan}}
                                </td> 
                                <td class="col-xs-1">
                                    {{
                                        Form::select(
                                            'status_kepemilikan[' . $id_peralatan_tambahan . ']', 
                                            $master_status_kepemilikan, 
                                            null, 
                                            [
                                                'class'          => 'form-control status',
                                                'placeholder'    => 'Pilih',                                                
                                            ]
                                        )
                                    }}  
                                    {{
                                        Form::text(
                                            'status_kepemilikan_lain[' . $id_peralatan_tambahan . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control status 5',
                                                'placeholder' => 'Sebutkan',
                                                'style'       => 'display:none'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{
                                        Form::text(
                                            'jumlah[' . $id_peralatan_tambahan . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Jumlah'
                                            ]
                                        )
                                    }}
                                </td> 
                                <td class="col-xs-1">
                                    {{
                                        Form::select(
                                            'kondisi[' . $id_peralatan_tambahan . ']', 
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
                                            'umur_ekonomis[' . $id_peralatan_tambahan . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Umur Ekonomis'
                                            ]
                                        )
                                    }}
                                </td> 
                                <td class="col-xs-2">
                                    {{
                                        Form::text(
                                            'harga_beli[' . $id_peralatan_tambahan . ']', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Harga Beli'
                                            ]
                                        )
                                    }}
                                </td> 
                                <td class="col-xs-2">
                                    {{
                                        Form::select(
                                            'sumber_modal[' . $id_peralatan_tambahan . ']', 
                                            $master_sumber_modal, 
                                            null, 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
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
<script>
$(function(){
    $( ".status" ).change(function(e) {
        e.preventDefault();
        if ($(this).val() == '5') {
            $(this).next(".status").slideToggle();
        } else {
            $(this).next(".status").slideUp();
        }; 
    });      
}); 
</script>
@endsection
