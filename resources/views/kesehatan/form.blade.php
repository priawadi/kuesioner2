@extends('layouts.app')

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
                    {{ Form::open(array('url' => $action)) }}
                        <table class="table">
                            <tr>
                                <td>Berapa kali anda dan anggota keluarga anda sakit dalam satu tahun terakhir</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>a.  Sakit ringan (flu, sakit kepala, masuk angin, dsb)</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'sakit_setahun_ringan', 
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
                            <tr>
                                <td>b.  Sakit berat (tipes, DBD, TBC dsb atau yang harus rawat inap)</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'sakit_setahun_berat', 
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
                                <td>Kemana anda dan anggota keluarga berobat ketika sakit, sebutkan frekuensinya (dalam setahun)</td>
                                <td>Dibiarkan</td>
                                <td>Beli Obat Warung</td>
                                <td>Puskesmas</td>
                                <td>Dokter</td>
                                <td>Pengobatan Alternatif</td>
                                <td>Rumah Sakit</td>
                            </tr>
                            <tr>
                                <td>a. Sakit ringan</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'ringan_dibiarkan', 
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
                                            'ringan_beli_obat', 
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
                                            'ringan_puskesmas', 
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
                                            'ringan_dokter', 
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
                                            'ringan_alternatif', 
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
                                            'ringan_rumah_sakit', 
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
                                <td>b. Sakit berat</td>
                                <td>
                                    {{  
                                        Form::text(
                                            'berat_dibiarkan', 
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
                                            'berat_beli_obat', 
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
                                            'berat_puskesmas', 
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
                                            'berat_dokter', 
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
                                            'berat_alternatif', 
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
                                            'berat_rumah_sakit', 
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
                        <table class="table">
                            <tr>
                                <td width="400">Apakah anda terdaftar sebagai peserta asuransi kesehatan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1.  Jamkesmas</td>
                                <td>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'jamkesmas', 
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
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'jamkesmas', 
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
                                </td>
                            </tr>
                            <tr>
                                <td>2.  BPJS / Askes</td>
                                <td>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'bpjs', 
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
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'bpjs', 
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
                                </td>
                            </tr>
                            <tr>
                                <td>3.  Asuransi Swasta</td>
                                <td>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'asuransi', 
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
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'asuransi', 
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
                                </td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <td width="400">Apakah anda sering menggunakan asuransi kesehatan</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1.  Jamkesmas</td>
                                <td>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_jamkesmas', 
                                                    1,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Sering
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_jamkesmas', 
                                                    2,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Jarang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_jamkesmas', 
                                                    3,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Tidak Pernah
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="400">2.  BPJS / Askes</td>
                                <td>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_bpjs', 
                                                    1,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Sering
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_bpjs', 
                                                    2,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Jarang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_bpjs', 
                                                    3,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Tidak Pernah
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3.  Asuransi Swasta</td>
                                <td>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_asuransi', 
                                                    1,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Sering
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_asuransi', 
                                                    2,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Jarang
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'frek_asuransi', 
                                                    3,
                                                    false,
                                                    [
                                                        'class' => 'control-label'
                                                    ]
                                                )
                                            }} 
                                            Tidak Pernah
                                        </label>
                                    </div>
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
