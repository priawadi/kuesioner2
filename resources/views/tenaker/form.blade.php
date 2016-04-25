@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">III IDENTITAS ASET YANG DIMILIKI / DIKELOLA</div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <div class="panel-body">
                {!! Form::open(array('url' => 'tenaker/tambah', 'class' => 'form-horizontal')) !!}    
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
                            <div class="col-md-10 col-md-offset-1">
                              <button type="submit" class="btn btn-primary col-md-offset-11">Simpan</button>
                              <br><br><br>
                            </div>
                    {!! Form::close() !!}
                </div>

                <div class="panel-body">
                    {!! Form::open(array('url' => 'tenaker/tambah', 'class' => 'form-horizontal')) !!}
                    <table class="table table-hover"> 
                        <thead>
                            <tr class="info"> 
                                <td colspan="10"><center><b>Tenaga Penggerak/Mesin</b></center></td> 
                            </tr>                          
                            <tr>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>TENAGA PENGGERAK (MESIN)</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>MEREK</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>UKURAN (PK)</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>STATUS KEPEMILIKAN</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JENIS BAHAN BAKAR</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>TAHUN PEMBELIAN</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>KONDISI</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>HARGA BELI</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>UMUR EKONOMIS</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>SUMBER MODAL</center></th>
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
                            <tr>                             

                        </tbody> 
                    </table>
                            <div class="col-md-10 col-md-offset-1">
                              <button type="submit" class="btn btn-primary col-md-offset-11">Simpan</button>
                              <br><br><br>
                            </div>
                    {!! Form::close() !!}
                </div>

                <div class="panel-body">
                    {!! Form::open(array('url' => 'tenaker/tambah', 'class' => 'form-horizontal')) !!}
                    <table class="table table-hover"> 
                        <thead>
                            <tr class="info"> 
                                <td colspan="9"><center><b>Alat Tangkap</b></center></td> 
                            </tr>                          
                            <tr>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JENIS ALAT TANGKAP</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JUMLAH</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>WAKTU PENGGUNAAN (Bulan)</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>STATUS KEPEMILIKAN</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>SPESIFIKASI</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>KONDISI</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>HARGA BELI</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>UMUR EKONOMIS</center></th>
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>SUMBER MODAL</center></th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            <tr>
                                <tr class="info">
                                    <td colspan="9"><b>PLAGIS KECIL</b></td>
                                </tr>
                                @foreach ($plagis_kecil as $id_master_plagis_kecil => $item)
                                <tr>
                                    <td>{{$item -> plagis_kecil}}</td>
                                    <td>
                                    {{
                                        Form::text(
                                            'jumlah_alat_tangkap['. $item -> id_master_plagis_kecil .']', 
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
                                            'waktu_penggunaan_alat['. $item -> id_master_plagis_kecil .']', 
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
                                            'status_kepemilikan['. $item -> id_master_plagis_kecil .']', 
                                            
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
                                            'spesifikasi_alat['. $item -> id_master_plagis_kecil .']', 
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
                                            'kondisi['. $item -> id_master_plagis_kecil .']', 
                                            
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
                                    <td>
                                    {{
                                        Form::text(
                                            'harga_beli_alat['. $item -> id_master_plagis_kecil .']', 
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
                                            'umur_ekonomis_alat['. $item -> id_master_plagis_kecil .']', 
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
                                            'sumber_modal['. $item -> id_master_plagis_kecil .']', 
                                            
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
                            </tr>
                            <tr class="info">
                                <td colspan="9"><b>PLAGIS BESAR</b></td>
                            </tr>
                                @foreach ($plagis_besar as $id_master_plagis_besar => $item)
                                <tr>
                                    <td>{{$item -> plagis_besar}}</td>
                                    <td>
                                    {{
                                        Form::text(
                                            'jumlah_alat_tangkap['. $item -> id_master_plagis_besar .']', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}       
                                    </td>
                                    <td>     
                                    </td>
                                    <td class="col-xs-2">
                                    {{
                                        Form::select(
                                            'status_kepemilikan['. $item -> id_master_plagis_besar .']', 
                                            
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
                                            'spesifikasi_alat['. $item -> id_master_plagis_besar .']', 
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
                                            'kondisi['. $item -> id_master_plagis_besar .']', 
                                            
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
                                    <td>
                                    {{
                                        Form::text(
                                            'harga_beli_alat['. $item -> id_master_plagis_besar .']', 
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
                                            'umur_ekonomis_alat['. $item -> id_master_plagis_besar .']', 
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
                                            'sumber_modal['. $item -> id_master_plagis_besar .']', 
                                            
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
                            <tr class="info">
                                <td colspan="9"><b>DEMERSAL & CRUSTACEA</b></td>
                            </tr>                                                                                                                                                                                                                                                                                                                 
                                @foreach ($demersal as $id_master_demersal => $item)
                                <tr>
                                    <td>{{$item -> demersal}}</td>
                                    <td>
                                    {{
                                        Form::text(
                                            'jumlah_alat_tangkap['. $item -> id_master_demersal .']', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => ''
                                            ]
                                        )
                                    }}       
                                    </td>
                                    <td>     
                                    </td>
                                    <td class="col-xs-2">
                                    {{
                                        Form::select(
                                            'status_kepemilikan['. $item -> id_master_demersal .']', 
                                            
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
                                            'spesifikasi_alat['. $item -> id_master_demersal .']', 
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
                                            'kondisi['. $item -> id_master_demersal .']', 
                                            
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
                                    <td>
                                    {{
                                        Form::text(
                                            'harga_beli_alat['. $item -> id_master_demersal .']', 
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
                                            'umur_ekonomis_alat['. $item -> id_master_demersal .']', 
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
                                            'sumber_modal['. $item -> id_master_demersal .']', 
                                            
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
                            </tr>    
                        </tbody> 
                    </table>
                                                <div class="col-md-10 col-md-offset-1">
                              <button type="submit" class="btn btn-primary col-md-offset-11">Simpan</button>
                              <br><br><br>
                            </div>
                    {!! Form::close() !!}
                </div>  
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">IV BIAYA PERIJINAN DAN PEMELIHARAAN SELAMA 1 TAHUN</div>
                <div class="panel-body">
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="warning"> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JENIS</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>FREKUENSI SELAMA 1 TAHUN</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>HARGA SATUAN <br>(Rp)</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"/><center>TOTAL BIAYA <br>(Rp/Tahun)</center></th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            <tr> 
                                <td>Ijin usaha / Ijin penangkapan</td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-3"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-4"><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <td>Pajak</td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-3"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-4"><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr> 
                                <td>Pemeliharaan/Perbaikan Perahu (pengecatan, ganti kayu, dll)</td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-3"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-4"><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr> 
                                <td>Pemeliharaan/Perbaikan Mesin (ganti Oli)</td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-3"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-4"><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr> 
                                <td>Pemeliharaan/Perbaikan Alat Tangkap</td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-3"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-4"><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr> 
                                <td>Docking kapal</td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-3"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-4"><input class="form-control" type="text" placeholder=""></td> 
                            </tr>
                            <tr> 
                                <td><input class="form-control" type="text" placeholder="Lainnya... (sebutkan)"></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-3"><input class="form-control" type="text" placeholder=""></td>
                                <td class="col-xs-4"><input class="form-control" type="text" placeholder=""></td> 
                            </tr>                                                                                                                                                                                                                                                    
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>        

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">V. BIAYA VARIABEL <i>(Variable Cost)</i> BERDASARKAN MUSIM</div>
                <div class="panel-body">
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="info">
                                <td colspan="9"><b>Biaya Operasional per-Trip</b></td>
                            </tr>
                            <tr class="warning"> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JENIS</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>SATUAN</center></th> 
                                <th colspan="3" style="display:table-cell; vertical-align:middle; text-align:center">
                                    <center>JUMLAH RATA-RATA BERDASARKAN MUSIM <br>(Jumlah / Satuan / Trip Berdasarkan Musim)</center>                                    
                                </th>
                                <th class="col-xs-2" style="display:table-cell; vertical-align:middle; text-align:center"><center>HARGA SATUAN <br> (Rp)</center></th>
                                <th colspan="3" style="display:table-cell; vertical-align:middle; text-align:center"><center>TOTAL NILAI <br> (Rp/Trip)</center></th>
                            </tr> 
                            <tr class="info">
                                <th></th>
                                <th></th>
                                <th colspan="3"><center>Musim</center></th>
                                <th></th>
                                <th colspan="3"><center>Musim</center></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th class="col-xs-2">Puncak</th>
                                <th class="col-xs-2">Sedang</th>
                                <th class="col-xs-2">Paceklik</th>
                                <th></th>
                                <th class="col-xs-2">Puncak</th>
                                <th class="col-xs-2">Sedang</th>
                                <th class="col-xs-2">Paceklik</th>
                            </tr>
                        </thead> 
                        <tbody> 
                            <tr> 
                                <th>Solar</th> 
                                <td>Liter</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Bensin Murni</th> 
                                <td>Liter</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Bensin Campur</th> 
                                <td>Liter</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Oli Campur</th> 
                                <td>Liter</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Minyak tanah</th> 
                                <td>Liter</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Es Balok</th> 
                                <td>Liter</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Umpan yang dibeli</th> 
                                <td>Kg</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th class="col-xs-2"><input class="form-control" type="text" placeholder="Lainnya..."></th> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th class="col-xs-2"><input class="form-control" type="text" placeholder="Lainnya..."></th> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>                                                                          
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">V. BIAYA VARIABEL <i>(Variable Cost)</i> BERDASARKAN MUSIM</div>
                <div class="panel-body">
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="info">
                                <td colspan="9"><b>Biaya Ransum per-Trip</b></td>
                            </tr>
                            <tr class="warning"> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>JENIS</center></th> 
                                <th style="display:table-cell; vertical-align:middle; text-align:center"><center>SATUAN</center></th> 
                                <th colspan="3" style="display:table-cell; vertical-align:middle; text-align:center">
                                    <center>JUMLAH RATA-RATA BERDASARKAN MUSIM <br>(Jumlah / Satuan / Trip Berdasarkan Musim)</center>                                    
                                </th>
                                <th class="col-xs-2" style="display:table-cell; vertical-align:middle; text-align:center"><center>HARGA SATUAN <br> (Rp)</center></th>
                                <th colspan="3" style="display:table-cell; vertical-align:middle; text-align:center"><center>TOTAL NILAI <br> (Rp/Trip)</center></th>
                            </tr> 
                            <tr class="info">
                                <th></th>
                                <th></th>
                                <th colspan="3"><center>Musim</center></th>
                                <th></th>
                                <th colspan="3"><center>Musim</center></th>
                            </tr>
                            <tr>
                                <th></th>
                                <th></th>
                                <th class="col-xs-2">Puncak</th>
                                <th class="col-xs-2">Sedang</th>
                                <th class="col-xs-2">Paceklik</th>
                                <th></th>
                                <th class="col-xs-2">Puncak</th>
                                <th class="col-xs-2">Sedang</th>
                                <th class="col-xs-2">Paceklik</th>
                            </tr>
                        </thead> 
                        <tbody> 
                            <tr> 
                                <th>Rokok</th> 
                                <td>Bungkus</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Minuman (Kopi/Teh/Galon)</th> 
                                <td>Paket</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Makanan (Nasi Bgks/Mie)</th> 
                                <td>Paket</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Makanan Jadi (Kue/Snack)</th> 
                                <td>Liter</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th>Gula</th> 
                                <td>Kg</td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th class="col-xs-2"><input class="form-control" type="text" placeholder="Lainnya..."></th> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr> 
                            <tr> 
                                <th class="col-xs-2"><input class="form-control" type="text" placeholder="Lainnya..."></th> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                            </tr>                                                                          
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>    

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">VI BIAYA JASA (Rp/Trip)</div>
                <div class="panel-body">
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="warning"> 
                                <th><center>JENIS</center></th> 
                                <th><center>SATUAN</center></th> 
                                <th><center>JUMLAH</center></th> 
                                <th><center>HARGA/SATUAN</center></th> 
                                <th><center>TOTAL NILAI (Rp/Trip)</center></th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            <tr> 
                                <td>Upah Bongkar Muat</td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                            </tr> 
                            <tr> 
                                <td>Upah Pembersihan Kapal</td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                            </tr> 
                            <tr> 
                                <td>Produksi</td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                            </tr> 
                            <tr> 
                                <td>Pemasaran</td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                            </tr> 
                            <tr> 
                                <td>Pelelangan</td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                            </tr> 
                            <tr> 
                                <td>Syahbandar</td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                            </tr> 
                            <tr> 
                                <td><input class="form-control" type="text" placeholder="Lainnya..."></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                            </tr>                                                                        
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>      
<!-- 
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">VII. PENERIMAAN USAHA BERDASARKAN MUSIM</div>
                <div class="panel-body"> 
                <p>1.   Dalam setahun terakhir, pada bulan apa yang saudara tidak melakukan kegiatan penangkapan ikan</p>       
                    <form id="multiselectForm" method="post" class="form-horizontal">
                        <select id="daftar-bulan" multiple="multiple">
                            <option value="januari">Januari</option>
                            <option value="februari">Februari</option>
                            <option value="maret">Maret</option>
                            <option value="april">April</option>
                            <option value="mei">Mei</option>
                            <option value="juni">Juni</option>
                            <option value="juli">Juli</option>
                            <option value="agustus">Agustus</option>
                            <option value="september">September</option>
                            <option value="oktober">Oktober</option>
                            <option value="november">November</option>
                            <option value="desember">Desember</option>
                        </select>       
                    </form>
                <br><p>Total bulan dalam setahun: <input class="form-control" type="text" placeholder=""></p>
                <br><p>Alasan tidak melaut:  <input class="form-control" type="text" placeholder=""></p>
                <br><p>2.   Adakah hari-hari tertentu saudara tidak melakukan penangkapan ikan?  </p> 
                    <div class="radio-inline">
                      <label>
                        <input type="radio" id="ya" value="ya" checked>
                        Ya
                      </label>
                    </div>
                    <div class="radio-inline">
                      <label>
                        <input type="radio" id="tidak" value="tidak">
                        Tidak
                      </label>
                    </div>  
                <br><p>Bila ya, sebutkan pada hari apa saja:  </p> 
                    <form id="multiselectForm" method="post" class="form-horizontal">
                        <select id="daftar-hari" multiple="multiple">
                            <option value="senin">Senin</option>
                            <option value="selasa">Selasa</option>
                            <option value="rabu">Rabu</option>
                            <option value="kamis">Kamis</option>
                            <option value="jumat">Jum'at</option>
                            <option value="sabtu">Sabtu</option>
                            <option value="minggu">Minggu</option>
                        </select>       
                    </form> 
                <br><p>Total hari tidak melaut dalam setahun:  <input class="form-control" type="text" placeholder=""></p> 
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
                            <tr> 
                                <td>Januari</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td>Februari</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td>Maret</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>   
                            <tr> 
                                <td>April</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>
                            <tr> 
                                <td>Mei</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>     
                            <tr> 
                                <td>Juni</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>   
                            <tr> 
                                <td>Juli</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>   
                            <tr> 
                                <td>Agustus</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>                                                                                                                                                                                                                                                                                                                
                            <tr> 
                                <td>September</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td>Oktober</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>      
                            <tr> 
                                <td>November</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>     
                            <tr> 
                                <td>Desember</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="hasilTangkapan">
                                        <option value="0">-</option>
                                        <option value="1">Tinggi</option>
                                        <option value="2">Sedang</option>
                                        <option value="3">Rendah</option>
                                    </select>
                                </td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr> 
                            <tr> 
                                <td></td> 
                                <td></td>
                                <td class="col-xs-2">
                                    <select class="form-control" id="jenisIkan">
                                        <option value="0">-</option>
                                        <option value="1">Tuna</option>
                                        <option value="2">Tongkol</option>
                                        <option value="3">Cakalang</option>
                                        <option value="4">Kembung</option>
                                        <option value="5">Layang</option>
                                        <option value="6">Tembang</option>
                                        <option value="7">Tenggiri</option>
                                        <option value="8">Cucut</option>
                                        <option value="9">Udang</option>
                                        <option value="10">Ekor Kuning</option>
                                        <option value="11">Kakap</option>
                                        <option value="12">Rajungan</option>
                                        <option value="13">Lemuru</option>
                                        <option value="14">Bawal</option>
                                        <option value="15">Gerok</option>
                                        <option value="16">Cumi</option>
                                        <option value="17">Baracuda</option>
                                        <option value="18">Kuro/Subal</option>
                                        <option value="19">Talang</option>
                                        <option value="20">Teri</option>
                                        <option value="21">Remang</option>
                                        <option value="22">Pari</option>
                                        <option value="23">Kerapu</option>
                                        <option value="24">Kwe</option>
                                        <option value="25">Layur</option>
                                        <option value="26">Belanak</option>
                                        <option value="27">Tunang</option>
                                        <option value="28">Belosok</option>
                                        <option value="29">Peperek</option>
                                        <option value="30">Kuniran</option>
                                        <option value="31">Selar</option>
                                        <option value="32">Lainnya</option>
                                    </select>  
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>
                                <td><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>       
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>  
       -->

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">VIII KETENAGAKERJAAN</div>
                <div class="panel-body">
                    <table class="table table-hover"> 
                        <thead> 
                            <tr class="warning"> 
                                <th><center>STATUS PEKERJAAN</center></th> 
                                <th><center>STATUS TENAGA KERJA</center></th> 
                                <th><center>JUMLAH TENAGA KERJA (ORANG)</center></th> 
                                <th><center>LAMA WAKTU PER-TRIP (HARI/TRIP)</center></th> 
                                <th><center>JUMLAH TRIP PER-BULAN</center></th> 
                                <th><center>BAGI HASIL (%)</center></th> 
                                <th><center>UPAH PER-TRIP (Rp)</center></th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            <tr>
                                <td>Pemilik</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>
                            <tr>
                                <td>Nahkoda</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>
                            <tr>
                                <td>Juru Mesin</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>
                            <tr>
                                <td>Juru Masak</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>
                            <tr>
                                <td>ABK</td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>
                            <tr>
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>
                            <tr>
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>                                                                                                                                            
                            <tr>
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2">
                                    <select class="form-control" id="statusTenaker">
                                        <option value="0">-</option>
                                        <option value="1">Keluarga Inti</option>
                                        <option value="2">Keluarga Besar</option>
                                        <option value="3">Luar Keluarga</option>
                                    </select>
                                </td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td><input class="form-control" type="text" placeholder=""></td> 
                                <td class="col-xs-2"><input class="form-control" type="text" placeholder=""></td>                                
                            </tr>  
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>               

        <div class="col-md-10 col-md-offset-1">
          <button type="submit" class="btn btn-primary col-md-offset-11">Simpan</button>
          <br><br><br>
        </div>


    </div>
</div>
<!-- Initialize the plugin: -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#daftar-bulan').multiselect();
        $('#daftar-hari').multiselect();
    });
</script>
@endsection
