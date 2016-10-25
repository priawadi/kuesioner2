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
                        <tr>
                            <td colspan="4">Jenis perahu/kapal yang digunakan</td>
                        </tr>
                        <tr>
                            <td width="40">a.</td>
                            <td width="200">Ukuran perahu/kapal</td>
                            <td width="200"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>panjang</td>
                            <td>
                                {{
                                    Form::text(
                                        'panjang', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'm'
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>lebar</td>
                            <td>
                                {{
                                    Form::text(
                                        'lebar', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'm'
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>tinggi</td>
                            <td>
                                {{
                                    Form::text(
                                        'tinggi', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'm'
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>b.</td>
                            <td>Tonase perahu/kapal</td>
                            <td>
                                {{
                                    Form::text(
                                        'tonase', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'GT'
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>c.</td>
                            <td>Jumlah perahu/kapal</td>
                            <td>
                                {{
                                    Form::text(
                                        'jumlah', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'unit'
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>d.</td>
                            <td>Kondisi waktu beli</td>
                            <td>
                                @foreach($kondisi_perahu as $id_kondisi => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'kondisi', 
                                                    $id_kondisi,
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
                            <td></td>
                        </tr>
                        <tr>
                            <td>e.</td>
                            <td>Tahun pembelian</td>
                            <td>
                                {{
                                    Form::text(
                                        'tahun_pembelian', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => ''
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>f.</td>
                            <td>Harga beli perahu/kapal</td>
                            <td>
                                {{
                                    Form::text(
                                        'harga_beli', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'Rp/unit'
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>g.</td>
                            <td>Umur teknis perahu/kapal</td>
                            <td>
                                {{
                                    Form::text(
                                        'umur_teknis', 
                                        '', 
                                        [
                                            'class'       => 'form-control',
                                            'placeholder' => 'tahun'
                                        ]
                                    )
                                }} 
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>h.</td>
                            <td>Sumber modal</td>
                            <td>
                                @foreach($sumber_modal as $id_sumber_modal => $value)
                                    <div class="radio">
                                        <label>
                                            {{
                                                Form::radio(
                                                    'sumber_modal', 
                                                    $id_sumber_modal,
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
                            <td></td>
                        </tr>
                    </table>
                    @include('components.form.prev_next_btn')
                    {!! Form::close() !!}
                </div>      
            </div>
        </div>
    </div>
</div>
@endsection
