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
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Aset</th>
                                <th>Volume (unit)</th>
                                <th>Satuan</th>
                                <th>Nilai Satuan (Rp.)</th>
                                <th>Nilai Total (Rp.)</th>
                                <th>Cara Perolehan</th>
                                <th>Jenis Aset</th>
                                <th>Berapakah pendapatan dari aset produktif tersebut (Rp/tahun)?</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($master_jenis_aset as $idx => $item)
                            <tr>
                                <td>
                                    @if(!$item->parent_master_jenis_aset)
                                        {{ $nomor++ }}
                                    @endif
                                </td>
                                <td>
                                    {{$item->jenis_aset}}
                                </td>
                                <td>
                                    @if (!$item->parent)
                                    {{
                                        Form::text(
                                            'volume['. $aset_rumah_tangga[$item->id_master_jenis_aset]['id_aset_rumah_tangga'] .']', 
                                            $aset_rumah_tangga[$item -> id_master_jenis_aset]['volume'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'unit'
                                            ]
                                        )
                                    }}   
                                    @endif
                                </td>
                                <td>{{$item->satuan}}</td>
                                <td>
                                    @if (!$item->parent)
                                    {{
                                        Form::text(
                                            'nilai_satuan['. $aset_rumah_tangga[$item -> id_master_jenis_aset]['id_aset_rumah_tangga'] .']', 
                                            $aset_rumah_tangga[$item -> id_master_jenis_aset]['nilai_satuan'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Rp'
                                            ]
                                        )
                                    }}   
                                    @endif
                                </td>
                                <td>
                                    @if (!$item->parent)
                                    {{
                                        Form::text(
                                            'nilai_total['. $aset_rumah_tangga[$item -> id_master_jenis_aset]['id_aset_rumah_tangga'] .']', 
                                            $aset_rumah_tangga[$item -> id_master_jenis_aset]['nilai_total'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Rp'
                                            ]
                                        )
                                    }}   
                                    @endif
                                </td>
                                <td>
                                    @if (!$item->parent)
                                    {{
                                        Form::select(
                                            'cara_perolehan[' . $aset_rumah_tangga[$item -> id_master_jenis_aset]['id_aset_rumah_tangga'] . ']', 
                                            $cara_perolehan, 
                                            $aset_rumah_tangga[$item -> id_master_jenis_aset]['cara_perolehan'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Pilih',
                                            ]
                                        )                                       
                                    }}   
                                    @endif
                                </td>
                                <td>
                                    @if (!$item->parent)
                                    {{
                                        Form::select(
                                            'jenis_aset[' . $aset_rumah_tangga[$item -> id_master_jenis_aset]['id_aset_rumah_tangga'] . ']', 
                                            $jenis_aset, 
                                            $aset_rumah_tangga[$item -> id_master_jenis_aset]['jenis_aset'], 
                                            [
                                                'class'    => 'form-control',
                                                'placeholder'    => 'Pilih',
                                            ]
                                        )
                                    }}
                                    @endif
                                </td>
                                <td>
                                    @if (!$item->parent)
                                    {{
                                        Form::text(
                                            'pendapatan_produktif['. $aset_rumah_tangga[$item -> id_master_jenis_aset]['id_aset_rumah_tangga'] .']', 
                                            $aset_rumah_tangga[$item -> id_master_jenis_aset]['pendapatan_produktif'], 
                                            [
                                                'class'       => 'form-control',
                                                'placeholder' => 'Rp/tahun'
                                            ]
                                        )
                                    }}   
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @include('components.form.prev_next_btn')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
