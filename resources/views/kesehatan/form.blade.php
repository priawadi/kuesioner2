@extends('layouts.app')

@section('title')
    {{$subtitle}}
@endsection

@section('content')
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
                    {{ Form::open(array('url' => $action, 'method' => $method)) }}
                        <table class="table">
                            <tr>
                                <td width="40">601.</td>
                                <td>Berapa kali anda dan anggota keluarga anda sakit dalam satu tahun terakhir</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a.  Sakit ringan (flu, sakit kepala, masuk angin, dsb)</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[sakit_setahun_ringan]', 
                                            null, 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>kali/tahun</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b.  Sakit berat (tipes, DBD, TBC dsb atau yang harus rawat inap)</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[sakit_setahun_berat]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>kali/tahun</td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <td width="40">602. </td>
                                <td>Kemana anda dan anggota keluarga berobat ketika sakit, sebutkan frekuensinya (dalam setahun)</td>
                                <td>Dibiarkan</td>
                                <td>Beli Obat Warung</td>
                                <td>Puskesmas</td>
                                <td>Dokter</td>
                                <td>Pengobatan Alternatif</td>
                                <td>Rumah Sakit</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Sakit ringan</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[ringan_dibiarkan]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[ringan_beli_obat]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[ringan_puskesmas]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[ringan_dokter]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[ringan_alternatif]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[ringan_rumah_sakit]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Sakit berat</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[berat_dibiarkan]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[berat_beli_obat]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[berat_puskesmas]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[berat_dokter]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[berat_alternatif]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                                <td>
                                    {{  
                                        Form::text(
                                            'kesehatan[berat_rumah_sakit]', 
                                            '', 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'kali/tahun'
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                        </table>
                        <table class="table table-bordered">
                            <tr>
                                <td width="40">603. </td>
                                <td width="364">Alasan memilih cara pengobatan ketika sakit</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>a. Biarkan</td>
                                <td>
                                    {{
                                        Form::textarea(
                                            'kesehatan[alasan_dibiarkan]', 
                                            '', 
                                            [
                                                'class'       => 'form-control col-sm-6',
                                                'placeholder' => 'Alasan',
                                                'rows'        => 4
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b. Beli obat warung</td>
                                <td>
                                    {{
                                        Form::textarea(
                                            'kesehatan[alasan_beli_obat]', 
                                            '', 
                                            [
                                                'class'       => 'form-control col-sm-6',
                                                'placeholder' => 'Alasan',
                                                'rows'        => 4
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c. Puskesmas</td>
                                <td>
                                    {{
                                        Form::textarea(
                                            'kesehatan[alasan_puskesmas]', 
                                            '', 
                                            [
                                                'class'       => 'form-control col-sm-6',
                                                'placeholder' => 'Alasan',
                                                'rows'        => 4
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>d. Dokter</td>
                                <td>
                                    {{
                                        Form::textarea(
                                            'kesehatan[alasan_dokter]', 
                                            '', 
                                            [
                                                'class'       => 'form-control col-sm-6',
                                                'placeholder' => 'Alasan',
                                                'rows'        => 4
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>e. Pengobatan alternatif</td>
                                <td>
                                    {{
                                        Form::textarea(
                                            'kesehatan[alasan_alternatif]', 
                                            '', 
                                            [
                                                'class'       => 'form-control col-sm-6',
                                                'placeholder' => 'Alasan',
                                                'rows'        => 4
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>f. Rumah sakit</td>
                                <td>
                                    {{
                                        Form::textarea(
                                            'kesehatan[alasan_rumah_sakit]', 
                                            '', 
                                            [
                                                'class'       => 'form-control col-sm-6',
                                                'placeholder' => 'Alasan',
                                                'rows'        => 4
                                            ]
                                        )
                                    }}
                                </td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td width="40">604. </td>
                                <td width="400">Apakah anda terdaftar sebagai peserta asuransi kesehatan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.  Jamkesmas</td>
                                <td>
                                    @foreach($status_daftar as $id_status_daftar => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'kesehatan[jamkesmas]', 
                                                    $id_status_daftar,
                                                    false,
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
                            </tr>
                            <tr>
                                <td></td>
                                <td>2.  BPJS / Askes</td>
                                <td>
                                    @foreach($status_daftar as $id_status_daftar => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'kesehatan[bpjs]', 
                                                    $id_status_daftar,
                                                    false,
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
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.  Asuransi Swasta</td>
                                <td>
                                    @foreach($status_daftar as $id_status_daftar => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'kesehatan[asuransi]', 
                                                    $id_status_daftar,
                                                    false,
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
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td width="40">605. </td>
                                <td width="400">Apakah anda sering menggunakan asuransi kesehatan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.  Jamkesmas</td>
                                <td>
                                    @foreach($penggunaan_asuransi as $id_penggunaan_asuransi => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'kesehatan[frek_jamkesmas]', 
                                                    $id_penggunaan_asuransi,
                                                    false,
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
                            </tr>
                            <tr>
                                <td></td>
                                <td width="400">2.  BPJS / Askes</td>
                                <td>
                                    @foreach($penggunaan_asuransi as $id_penggunaan_asuransi => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'kesehatan[frek_bpjs]', 
                                                    $id_penggunaan_asuransi,
                                                    false,
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
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.  Asuransi Swasta</td>
                                <td>
                                    @foreach($penggunaan_asuransi as $id_penggunaan_asuransi => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'kesehatan[frek_asuransi]', 
                                                    $id_penggunaan_asuransi,
                                                    false,
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
                            </tr>
                        </table>
                        @include('components.form.prev_next_btn')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
