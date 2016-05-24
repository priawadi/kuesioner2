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
                                            'status_kepemilikan[' . $aset_pendukung_usaha[$id_peralatan_tambahan]['id_aset_pendukung_usaha'] . ']', 
                                            $master_status_kepemilikan, 
                                            $aset_pendukung_usaha[$id_peralatan_tambahan]['status_kepemilikan'], 
                                            [
                                                'class'          => 'form-control status',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }} 
                                    {{
                                        Form::text(
                                            'status_kepemilikan_lain[' . $aset_pendukung_usaha[$id_peralatan_tambahan]['id_aset_pendukung_usaha'] . ']',
                                            $aset_pendukung_usaha[$id_peralatan_tambahan]['status_kepemilikan_lain'], 
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
                                            'jumlah[' . $aset_pendukung_usaha[$id_peralatan_tambahan]['id_aset_pendukung_usaha'] . ']', 
                                            $aset_pendukung_usaha[$id_peralatan_tambahan]['jumlah'], 
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
                                            'kondisi[' . $aset_pendukung_usaha[$id_peralatan_tambahan]['id_aset_pendukung_usaha'] . ']', 
                                            $master_kondisi, 
                                            $aset_pendukung_usaha[$id_peralatan_tambahan]['kondisi'], 
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
                                            'umur_ekonomis[' . $aset_pendukung_usaha[$id_peralatan_tambahan]['id_aset_pendukung_usaha'] . ']', 
                                            $aset_pendukung_usaha[$id_peralatan_tambahan]['umur_ekonomis'], 
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
                                            'harga_beli[' . $aset_pendukung_usaha[$id_peralatan_tambahan]['id_aset_pendukung_usaha'] . ']', 
                                            $aset_pendukung_usaha[$id_peralatan_tambahan]['harga_beli'], 
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
                                            'sumber_modal[' . $aset_pendukung_usaha[$id_peralatan_tambahan]['id_aset_pendukung_usaha'] . ']', 
                                            $master_sumber_modal, 
                                            $aset_pendukung_usaha[$id_peralatan_tambahan]['sumber_modal'], 
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
// $(function() {
//     $(".status").change(function(){
//         $(".5").hide();
//         $("." + $(this).val()).show();               
//     });
// });
// $(function() {
//     $(document).change(function(e){
//         e.preventDefault();
//         if ('.status[value=5]') {
//             $('.5').show();
//         } else {
//             $('.5').hide();
//         };
//     });
// });
$(function(){
    $( ".status" ).change(function(e) {
        e.preventDefault();
        if ($(this).val() == '5') {
            $(this).next(".status").slideToggle();
        } else {
            $(this).next(".status").slideUp();
        }; 
    });

    $.each($( "select[name*='status_kepemilikan']" ), function( key, value ) {
      if ($(value).val() == 5)
       $(value).next(".status").show();
    });
}); 

$()
</script>
@endsection
