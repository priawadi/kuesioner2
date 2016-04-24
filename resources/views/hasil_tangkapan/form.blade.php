@extends('layouts.app')

@section('content')
<div class="container" width="1200px">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $subtitle }}</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body"> 
                    {!! Form::open(array('url' => $action, 'class' => 'form-horizontal')) !!}
                    <p>1.   Dalam setahun terakhir, pada bulan apa yang saudara tidak melakukan kegiatan penangkapan ikan</p>       
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

                <br>
                <p>
                    Total bulan dalam setahun: 
                    {{
                        Form::text(
                            'total_bulan', 
                            '', 
                            [
                                'class'       => 'form-control',
                                'placeholder' => 'Total bulan dalam setahun'
                            ]
                        )
                    }}
                </p>
                <br>
                <p>
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
                </p>
                <br><p>2.   Adakah hari-hari tertentu saudara tidak melakukan penangkapan ikan?  </p> 
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
                <br><p>Bila ya, sebutkan pada hari apa saja:  </p> 
                   
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
                    
                <br>
                <p>
                    Total hari tidak melaut dalam setahun:  
                    {{
                        Form::text(
                            'total_hari_tidak_melaut', 
                            '', 
                            [
                                'class'       => 'form-control',
                                'placeholder' => 'Total hari tidak melaut dlm setahun'
                            ]
                        )
                    }}
                </p> 
                <br><p>3.   Dalam setahun terakhir, bagaimana hasil tangkapan saudara berdasarkan bulan-bulan sebagaimana tabel berikut :</p> 
                <br>

                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="warning"> 
                                <th><center>BULAN</center></th> 
                                <th><center>MUSIM PRODUKSI</center></th> 
                                <th COLSPAN="4"><center>HASIL TANGKAPAN</center></th> 
                                <th><center>TOTAL TRIP</center></th> 
                            </tr> 
                            <tr> 
                                <th></th> 
                                <th></th> 
                                <th><center>Jenis Ikan Dominan</center></th> 
                                <th><center>Produksi Dalam Sebulan (Kg)</center></th> 
                                <th><center>Harga Ikan (Rp/Kg)</center></th> 
                                <th><center>Nilai Produksi (Rp)</center></th> 
                                <th></th>
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
                    <a href="#" class="btn btn-primary pull-left">Kembali</a>
                    <button type="submit" class="btn btn-primary pull-right">Selanjutnya</button>
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
